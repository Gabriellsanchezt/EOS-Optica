<?php

declare(strict_types=1);

namespace App\Models;

class Service
{
    /**
     * Pilares de valor de EOS Optica (Strip superior bajo el Hero)
     */
    public static function getPillars(): array
    {
        return [
            [
                'icon'        => 'bi-eye-fill',
                'title'       => 'Examen Visual Sin Costo',
                'description' => 'Evaluación optométrica computarizada y subjetiva para determinar tu fórmula exacta sin compromiso.',
            ],
            [
                'icon'        => 'bi-shield-check',
                'title'       => 'Tecnología AR & Foto Blue',
                'description' => 'Cristales de visión sencilla, bifocales y progresivos con bloqueo de luz azul nociva y protección UV400.',
            ],
            [
                'icon'        => 'bi-eyeglasses',
                'title'       => 'Extensa Variedad de Marcas',
                'description' => 'Monturas oftálmicas y solares en acetato italiano, titanio, acero y TR90 para damas, caballeros y niños.',
            ],
            [
                'icon'        => 'bi-geo-alt-fill',
                'title'       => 'Ubicación Céntrica en Barquisimeto',
                'description' => 'Carrera 19 esquina con Calle 35, Edificio Carache, Planta Baja, Locales 3 y 4.',
            ],
        ];
    }

    /**
     * Servicios clinicos y opticos principales
     */
    public static function all(): array
    {
        return [
            [
                'id'          => 'optometria',
                'badge'       => 'Más Solicitado',
                'featured'    => true,
                'icon'        => 'bi-eye',
                'title'       => 'Jornada Permanente de Examen Visual Gratuito',
                'description' => 'Realizamos tu medición optométrica integral para diagnosticar miopía, hipermetropía, astigmatismo o presbicia con equipos de precisión.',
                'features'    => [
                    'Evaluación de agudeza visual lejana y cercana',
                    'Asesoría de cristales según tu exposición a pantallas',
                    'Presupuesto inmediato adaptado a tus necesidades',
                ],
                'cta_label'   => 'Solicitar examen visual gratis',
                'cta_target'  => '#agendar',
                'service_val' => 'Examen Visual Gratuito',
            ],
            [
                'id'          => 'cristales-blue',
                'badge'       => 'Protección Digital',
                'featured'    => false,
                'icon'        => 'bi-layers-half',
                'title'       => 'Cristales Antirreflejo Blue & Foto Blue',
                'description' => 'Protege tu retina del espectro de luz azul-violeta emitido por monitores, teléfonos y luces LED, reduciendo la fatiga ocular y cefaleas.',
                'features'    => [
                    'AR Blue: Nitidez superior y bloqueo de radiación azul',
                    'Foto Blue: Claros en interiores y oscuros bajo el sol UV',
                    'Disponibles en Visión Sencilla, Bifocales y Progresivos',
                ],
                'cta_label'   => 'Probar simulador interactivo',
                'cta_target'  => '#simulador',
                'service_val' => 'Cotizar Cristales Antirreflejo Blue / Foto Blue',
            ],
            [
                'id'          => 'oftalmologia',
                'badge'       => 'Previa Cita',
                'featured'    => false,
                'icon'        => 'bi-heart-pulse',
                'title'       => 'Consulta Oftalmológica Especializada',
                'description' => 'Evaluación médica ocular profunda con especialistas en oftalmología para el diagnóstico y tratamiento temprano de patologías visuales.',
                'features'    => [
                    'Toma de presión intraocular (tonometría) y fondo de ojo',
                    'Despistaje de catarata, glaucoma, pterigión y ojo seco',
                    'Atención integral para niños, adultos y adultos mayores',
                ],
                'cta_label'   => 'Ver horarios y detalles clínicos',
                'cta_target'  => '#oftalmologia',
                'service_val' => 'Consulta Oftalmológica (Previa Cita)',
            ],
        ];
    }
}
