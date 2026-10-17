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
                'title'       => 'Examen Optométrico Sin Costo',
                'description' => 'Sin costo solo y cuando realices la compra de tus lentes en nuestra tienda.',
            ],
            [
                'icon'        => 'bi-shield-check',
                'title'       => 'Foto Blue & Progresivos',
                'description' => 'Cristales Foto Blue y Progresivos (Gama Baja, Media y Alta) con protección UV400.',
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
                'badge'       => 'Sin Costo al Comprar en Tienda',
                'featured'    => true,
                'icon'        => 'bi-eye',
                'title'       => 'Examen Optométrico Computarizado',
                'description' => 'Realizamos tu medición optométrica integral para diagnosticar miopía, hipermetropía, astigmatismo o presbicia. Sin costo solo y cuando compren sus lentes en tienda.',
                'features'    => [
                    'Sin costo al adquirir tus lentes en nuestra tienda',
                    'Evaluación de agudeza visual lejana, intermedia y cercana',
                    'Asesoría de cristales según tu rutina visual y pantallas',
                ],
                'cta_label'   => 'Agendar examen optométrico',
                'cta_target'  => '#agendar',
                'service_val' => 'Examen Optométrico (Sin costo por compra en tienda)',
            ],
            [
                'id'          => 'cristales-blue',
                'badge'       => 'Laboratorio Óptico',
                'featured'    => false,
                'icon'        => 'bi-layers-half',
                'title'       => 'Cristales Foto Blue & Progresivos',
                'description' => 'Protege tu retina de pantallas y radiación solar con Foto Blue, o disfruta de enfoque multifocal continuo con nuestros Progresivos en Gama Baja, Media y Alta.',
                'features'    => [
                    'Foto Blue: Filtro azul en interiores y oscurecimiento UV al sol',
                    'Progresivos: Gama Baja, Gama Media y Gama Alta',
                    'Visión nítida de lejos, computadora y lectura sin líneas',
                ],
                'cta_label'   => 'Probar en Laboratorio Interactivo',
                'cta_target'  => '#simulador',
                'service_val' => 'Cotizar Cristales (Foto Blue / Progresivos)',
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
                'cta_label'   => 'Ver horarios y detalles de consulta',
                'cta_target'  => '#oftalmologia',
                'service_val' => 'Consulta Oftalmológica (Previa Cita)',
            ],
        ];
    }
}
