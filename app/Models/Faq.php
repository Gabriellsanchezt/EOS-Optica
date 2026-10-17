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
                'question' => '¿El examen optométrico tiene algún costo?',
                'answer'   => 'El Examen Optométrico es Sin Costo solo y cuando realices la compra de tus lentes en nuestra tienda. Atendemos de lunes a sábado en el turno de la tarde.',
            ],
            [
                'question' => '¿Qué diferencias existen entre los cristales Progresivos Keten de Gama Baja, Media y Alta?',
                'answer'   => 'Los Progresivos Keten te permiten enfocar de lejos, distancia intermedia (computadora) y cerca sin líneas visibles. La Gama Baja ofrece un corredor progresivo estándar; la Gama Media amplía la zona intermedia disminuyendo las aberraciones laterales; y la Gama Alta (tecnología digital FreeForm HD) proporciona el campo visual más amplio y nítido con adaptación inmediata.',
            ],
            [
                'question' => '¿Cuál es la diferencia entre los cristales Antirreflejo Blue y Foto Blue?',
                'answer'   => 'El cristal Antirreflejo Blue es transparente y bloquea la luz azul nociva de pantallas (computadoras, celulares y televisores) además de reducir reflejos nocturnos. El cristal Foto Blue incluye esa misma protección contra pantallas pero además es fotocromático: se oscurece automáticamente al exponerse a los rayos UV del sol en exteriores.',
            ],
            [
                'question' => '¿Qué días y en qué turno se realizan las consultas y atenciones?',
                'answer'   => 'Todas nuestras evaluaciones y citas se atienden en el turno de la tarde: de lunes a sábado para Examen Optométrico (sin costo con la compra en tienda) y asesoría de monturas, y los días lunes y miércoles (previa cita) para Consulta Oftalmológica Especializada.',
            ],
            [
                'question' => '¿Dónde están ubicados exactamente en Barquisimeto?',
                'answer'   => 'Estamos ubicados en el centro de Barquisimeto: Carrera 19 esquina con Calle 35, Edificio Carache, Planta Baja, Locales 3 y 4, Estado Lara.',
            ],
            [
                'question' => '¿Puedo llevar mi propia fórmula médica para elaborar mis cristales?',
                'answer'   => 'Sí. Si ya cuentas con una fórmula emitida recientemente por tu especialista, elaboramos y adaptamos tus cristales de visión sencilla, bifocales o Progresivos Keten (Baja, Media o Alta Gama).',
            ],
        ];
    }
}
