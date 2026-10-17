<?php

declare(strict_types=1);

namespace App\Models;

class Faq
{
    /**
     * Preguntas frecuentes de los pacientes de EOS Optica Barquisimeto
     */
    public static function all(): array
    {
        return [
            [
                'question' => '¿El examen visual de optometría tiene algún costo?',
                'answer'   => 'En EOS Óptica contamos con jornada permanente de Examen Visual Gratuito de lunes a sábado en el turno de la tarde. Nuestro optometrista evalúa tu agudeza visual y te entrega tu presupuesto sin compromiso.',
            ],
            [
                'question' => '¿Cuál es la diferencia entre los cristales Antirreflejo Blue y Foto Blue?',
                'answer'   => 'El cristal Antirreflejo Blue es transparente y bloquea la luz azul nociva de pantallas (computadoras, celulares y televisores) además de reducir reflejos nocturnos. El cristal Foto Blue incluye esa misma protección contra pantallas pero además es fotocromático: se oscurece automáticamente al exponerse a los rayos UV del sol en exteriores.',
            ],
            [
                'question' => '¿Qué días y en qué turno se realizan las consultas y atenciones?',
                'answer'   => 'Todas nuestras evaluaciones y citas se atienden en el turno de la tarde: de lunes a sábado para Examen Visual Gratuito (Optometría) y asesoría de monturas, y los días lunes y miércoles (previa cita) para Consulta Oftalmológica Especializada.',
            ],
            [
                'question' => '¿Dónde están ubicados exactamente en Barquisimeto?',
                'answer'   => 'Estamos ubicados en el centro de Barquisimeto: Carrera 19 esquina con Calle 35, Edificio Carache, Planta Baja, Locales 3 y 4, Estado Lara.',
            ],
            [
                'question' => '¿Puedo llevar mi propia fórmula médica o montura para montar solo los cristales?',
                'answer'   => 'Sí. Si ya cuentas con una fórmula emitida recientemente por tu especialista o tienes una montura en buen estado, elaboramos y adaptamos tus cristales de visión sencilla, bifocales o progresivos.',
            ],
        ];
    }
}
