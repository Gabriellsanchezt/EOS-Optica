<?php

declare(strict_types=1);

namespace App\Controllers;

use App\Core\Controller;
use App\Core\Request;

class BookingController extends Controller
{
    public function store(Request $request): void
    {
        // 1. Proteccion Anti-Spam (Honeypot)
        $honeypot = trim((string) $request->input('website_url', ''));
        if ($honeypot !== '') {
            $this->json([
                'status'  => 'error',
                'message' => 'Solicitud rechazada por filtro de seguridad.',
            ], 400);
            return;
        }

        // 2. Sanitizacion de entradas
        $name    = trim(strip_tags((string) $request->input('client_name', '')));
        $cedula  = trim(strip_tags((string) $request->input('client_cedula', '')));
        $phone   = trim(strip_tags((string) $request->input('client_phone', '')));
        $service = trim(strip_tags((string) $request->input('service_type', '')));
        $day     = trim(strip_tags((string) $request->input('preferred_day', '')));
        $notes   = trim(strip_tags((string) $request->input('client_notes', '')));

        // 3. Validacion estricta de Nombre: SOLO letras y espacios (sin numeros ni simbolos)
        if ($name === '' || mb_strlen($name) < 3 || !preg_match('/^[\p{L}\s]+$/u', $name)) {
            $this->json([
                'status'  => 'error',
                'message' => 'El campo Nombre y Apellido solo permite letras y espacios (no se permiten números).',
            ], 422);
            return;
        }

        // 4. Validacion estricta de Cedula: SOLO numeros (6 a 10 digitos, sin letras)
        if ($cedula === '' || !preg_match('/^[0-9]{6,10}$/', $cedula)) {
            $this->json([
                'status'  => 'error',
                'message' => 'El Número de Cédula solo permite números (entre 6 y 10 dígitos, sin letras ni símbolos).',
            ], 422);
            return;
        }

        // 5. Validacion estricta de Telefono (si se ingresa): SOLO numeros (7 a 15 digitos, sin letras)
        if ($phone !== '' && !preg_match('/^[0-9]{7,15}$/', $phone)) {
            $this->json([
                'status'  => 'error',
                'message' => 'El Teléfono de Contacto solo permite números (sin letras ni guiones).',
            ], 422);
            return;
        }

        if ($service === '' || $day === '') {
            $this->json([
                'status'  => 'error',
                'message' => 'Por favor selecciona el servicio requerido y el día preferido.',
            ], 422);
            return;
        }

        // 6. Validacion de regla de negocio: Consulta Oftalmologica solo Lunes y Miercoles
        if (str_contains($service, 'Oftalmológica')) {
            $isMonOrWed = str_contains($day, 'Lunes') || str_contains($day, 'Miércoles') || str_contains($day, 'Miercoles');
            if (!$isMonOrWed) {
                $this->json([
                    'status'  => 'error',
                    'message' => 'Las Consultas Oftalmológicas se realizan únicamente los días Lunes y Miércoles en el turno de la tarde.',
                ], 422);
                return;
            }
        }

        // 7. Generar codigo de solicitud y guardar respaldo en storage/bookings.json
        $ticketId = 'EOS-' . date('ymd') . '-' . strtoupper(substr(bin2hex(random_bytes(2)), 0, 4));
        $this->persistBooking([
            'ticket_id'  => $ticketId,
            'created_at' => date('Y-m-d H:i:s'),
            'name'       => $name,
            'cedula'     => $cedula,
            'phone'      => $phone,
            'service'    => $service,
            'day'        => $day,
            'shift'      => 'Turno de la Tarde',
            'notes'      => $notes,
            'ip_hash'    => substr(hash('sha256', $request->ip()), 0, 16),
        ]);

        // 8. Construir enlace oficial de WhatsApp
        $phoneRecipient = (string) config('whatsapp.number', '584129515387');

        $msg  = "*SOLICITUD DE ATENCION - EOS OPTICA BARQUISIMETO*\n";
        $msg .= "*Ref:* {$ticketId}\n";
        $msg .= "----------------------------------------\n";
        $msg .= "*Paciente:* {$name}\n";
        $msg .= "*Cedula:* {$cedula}\n";
        if ($phone !== '') {
            $msg .= "*Telefono:* {$phone}\n";
        }
        $msg .= "*Servicio:* {$service}\n";
        $msg .= "*Dia solicitado:* {$day}\n";
        $msg .= "*Turno de atencion:* Turno de la Tarde\n";

        if ($notes !== '') {
            $msg .= "*Observaciones:* {$notes}\n";
        }

        $msg .= "----------------------------------------\n";
        $msg .= "Enviado desde el portal web de EOS Optica (@eosoptica)";

        $waUrl = 'https://wa.me/' . $phoneRecipient . '?text=' . rawurlencode($msg);

        $this->json([
            'status'       => 'success',
            'ticket_id'    => $ticketId,
            'whatsapp_url' => $waUrl,
            'message'      => "Solicitud {$ticketId} registrada correctamente. Redirigiendo a WhatsApp...",
        ]);
    }

    private function persistBooking(array $record): void
    {
        try {
            $storageDir = dirname(__DIR__, 2) . '/storage';
            if (!is_dir($storageDir)) {
                @mkdir($storageDir, 0755, true);
            }
            $file = $storageDir . '/bookings.json';
            $existing = [];
            if (file_exists($file)) {
                $content = (string) @file_get_contents($file);
                $decoded = json_decode($content, true);
                if (is_array($decoded)) {
                    $existing = $decoded;
                }
            }
            if (count($existing) >= 500) {
                $existing = array_slice($existing, -499);
            }
            $existing[] = $record;
            @file_put_contents($file, json_encode($existing, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT), LOCK_EX);
        } catch (\Throwable $e) {
            error_log('[EOSOptica Storage Warning] ' . $e->getMessage());
        }
    }
}
