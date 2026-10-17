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
                'question' => '¿Qué diferencias existen entre los Cristales Progresivos de Gama Baja, Media y Alta?',
                'answer'   => 'Los Cristales Progresivos te permiten enfocar de lejos, distancia intermedia (computadora) y cerca sin líneas visibles. La Gama Baja ofrece un corredor progresivo clásico funcional; la Gama Media amplía la zona intermedia disminuyendo las distorsiones laterales; y la Gama Alta (tecnología digital FreeForm HD) proporciona visión panorámica y adaptación inmediata.',
            ],
            [
                'question' => '¿Qué beneficios ofrece el cristal Foto Blue?',
                'answer'   => 'El cristal Foto Blue combina protección contra la luz azul nociva de pantallas (computadoras, celulares y televisores) en interiores con tecnología fotocromática que oscurece automáticamente el lente al exponerse a los rayos UV del sol en exteriores.',
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
                'answer'   => 'Sí. Si ya cuentas con una fórmula emitida recientemente por tu especialista, elaboramos y adaptamos tus cristales de visión sencilla, bifocales o Progresivos (Baja, Media o Alta Gama).',
            ],
        ];
    }
}
