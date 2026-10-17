<?php

declare(strict_types=1);

namespace App\Models;

class Ophthalmology
{
    /**
     * Informacion clinica de la Unidad de Oftalmologia en EOS Optica
     */
    public static function getInfo(): array
    {
        return [
            'title'       => 'Consultas Oftalmológicas Especializadas',
            'lead'        => 'En EOS Óptica integramos estética óptica con rigor médico: contamos con consulta oftalmológica presencial en nuestra sede de la Carrera 19 con Calle 35 para cuidar la salud ocular de toda tu familia.',
            'days'        => config('clinical.ophtha_days', 'Lunes y Miércoles (Previa Cita)'),
            'hours'       => config('clinical.ophtha_hours', 'Turno de la Tarde (Previa Cita)'),
            'specialist'  => config('clinical.specialist', 'Dra. Aurora Villalobos & Especialistas EOS'),
            'procedures'  => [
                'Evaluación oftalmológica integral para niños, adultos y adultos mayores.',
                'Examen de fondo de ojo, tonometría (presión intraocular) y biomicroscopía.',
                'Diagnóstico clínico de síndrome de ojo seco, cataratas, glaucoma y ametropías.',
                'Prescripción médica y adaptación inmediata de cristales en nuestro laboratorio.',
            ],
            'symptoms'    => [
                [
                    'icon'  => 'bi-lightning-fill',
                    'title' => 'Cefalea o fatiga visual recurrente',
                    'desc'  => 'Dolor de cabeza frontal o cansancio ocular al finalizar la jornada frente al computador o celular.',
                ],
                [
                    'icon'  => 'bi-eye-slash-fill',
                    'title' => 'Visión borrosa de lejos o cerca',
                    'desc'  => 'Necesidad de entrecerrar los ojos para enfocar avisos en la vía, pizarras o textos pequeños.',
                ],
                [
                    'icon'  => 'bi-droplet-half',
                    'title' => 'Ardor, lagrimeo o sensación de arenilla',
                    'desc'  => 'Signos frecuentes de ojo seco, fatiga digital o alergias oculares que requieren valoración médica.',
                ],
                [
                    'icon'  => 'bi-clipboard2-pulse-fill',
                    'title' => 'Control preventivo anual y pediátrico',
                    'desc'  => 'Fundamental en niños en etapa escolar, pacientes hipertensos, diabéticos o mayores de 40 años.',
                ],
            ],
        ];
    }
}
