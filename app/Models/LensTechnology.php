<?php

declare(strict_types=1);

namespace App\Models;

class LensTechnology
{
    /**
     * Retorna las tecnologias de cristales para el simulador interactivo
     */
    public static function all(): array
    {
        return [
            'ar-blue' => [
                'slug'          => 'ar-blue',
                'name'          => 'Antirreflejo Blue',
                'subtitle'      => 'Ideal para oficina, estudio y pantallas digitales',
                'full_title'    => 'Cristal Antirreflejo Blue (Filtro de Luz Azul)',
                'icon'          => 'bi-laptop',
                'badge_class'   => 'bg-info',
                'description'   => 'Bloquea selectivamente la luz azul-violeta nociva de monitores, laptops y smartphones, eliminando los reflejos molestos en conducción nocturna.',
                'metric_labels' => [
                    'm1' => 'Bloqueo de Luz Azul Digital',
                    'm2' => 'Reducción de Reflejos Nocturnos',
                    'm3' => 'Oscurecimiento Solar Automático (Foto Blue)',
                ],
                'metrics'       => [
                    'blue_block'      => 95,
                    'glare_reduction' => 92,
                    'photochromic'    => 15,
                ],
                'caption'       => 'Nota el destello residual azulado característico que confirma la protección activa contra pantallas.',
                'wa_message'    => 'Hola EOS Óptica, me gustaría cotizar cristales Antirreflejo Blue con mi fórmula.',
            ],
            'foto-blue' => [
                'slug'          => 'foto-blue',
                'name'          => 'Cristal Foto Blue',
                'subtitle'      => 'Filtro azul en interiores + Lente solar en exteriores',
                'full_title'    => 'Cristal Foto Blue (Fotocromático + Filtro Azul)',
                'icon'          => 'bi-brightness-high',
                'badge_class'   => 'bg-warning',
                'description'   => 'Doble tecnología fotosensible inteligente: completamente claros con filtro azul adentro y se oscurecen automáticamente al salir al sol de Barquisimeto.',
                'metric_labels' => [
                    'm1' => 'Bloqueo de Luz Azul Digital',
                    'm2' => 'Reducción de Reflejos Nocturnos',
                    'm3' => 'Oscurecimiento Solar Automático (Foto Blue)',
                ],
                'metrics'       => [
                    'blue_block'      => 95,
                    'glare_reduction' => 90,
                    'photochromic'    => 98,
                ],
                'caption'       => 'Desliza el control de radiación exterior (UV) para observar cómo el cristal Foto Blue se oscurece automáticamente.',
                'wa_message'    => 'Hola EOS Óptica, me gustaría cotizar cristales Foto Blue (fotocromáticos con filtro azul).',
            ],
            'progresivo-keten' => [
                'slug'          => 'progresivo-keten',
                'name'          => 'Progresivo Keten • Gama Media',
                'subtitle'      => 'Campo intermedio ampliado y menor distorsión lateral',
                'full_title'    => 'Progresivo Keten • Gama Media',
                'icon'          => 'bi-eyeglasses',
                'badge_class'   => 'bg-light',
                'description'   => 'Campo intermedio ampliado y menor distorsión lateral. Equilibrio ideal entre confort y rendimiento para ver de lejos, computadora y cerca sin líneas divisorias.',
                'metric_labels' => [
                    'm1' => 'Amplitud de Campo Visual (Corredor)',
                    'm2' => 'Nitidez Lateral (Menor Distorsión)',
                    'm3' => 'Velocidad y Confort de Adaptación',
                ],
                'metrics'       => [
                    'blue_block'      => 78,
                    'glare_reduction' => 76,
                    'photochromic'    => 84,
                ],
                'tiers'         => [
                    'baja' => [
                        'tier_label'   => 'Gama Baja',
                        'tier_short'   => 'Básica',
                        'name'         => 'Progresivo Keten • Gama Baja',
                        'subtitle'     => 'Corredor clásico funcional para lejos, intermedio y cerca',
                        'full_title'   => 'Progresivo Keten • Gama Baja',
                        'description'  => 'Corredor clásico funcional para lejos, intermedio y cerca. Diseño multifocal convencional con canal central estándar y mayor aberración en los bordes laterales.',
                        'corridor_pct' => 42,
                        'blur_px'      => 6.5,
                        'blur_opacity' => 0.90,
                        'side_width'   => 35,
                        'badge_left'   => 'Keten Gama Baja',
                        'badge_right'  => 'Corredor Clásico',
                        'metrics'      => [
                            'blue_block'      => 50,
                            'glare_reduction' => 46,
                            'photochromic'    => 55,
                        ],
                        'caption'      => 'Progresivo Keten • Gama Baja: Corredor clásico funcional para lejos, intermedio y cerca (mayor zona de desenfoque lateral).',
                        'wa_message'   => 'Hola EOS Óptica, me gustaría cotizar cristales Progresivo Keten • Gama Baja con mi fórmula.',
                    ],
                    'media' => [
                        'tier_label'   => 'Gama Media',
                        'tier_short'   => 'Digital',
                        'name'         => 'Progresivo Keten • Gama Media',
                        'subtitle'     => 'Campo intermedio ampliado y menor distorsión lateral',
                        'full_title'   => 'Progresivo Keten • Gama Media',
                        'description'  => 'Campo intermedio ampliado y menor distorsión lateral. Optimización digital que amplía la zona de computadora y lectura con transiciones mucho más suaves.',
                        'corridor_pct' => 68,
                        'blur_px'      => 3.2,
                        'blur_opacity' => 0.55,
                        'side_width'   => 21,
                        'badge_left'   => 'Keten Gama Media',
                        'badge_right'  => 'Campo Ampliado',
                        'metrics'      => [
                            'blue_block'      => 78,
                            'glare_reduction' => 76,
                            'photochromic'    => 84,
                        ],
                        'caption'      => 'Progresivo Keten • Gama Media: Campo intermedio ampliado y menor distorsión lateral en comparación con la gama básica.',
                        'wa_message'   => 'Hola EOS Óptica, me gustaría cotizar cristales Progresivo Keten • Gama Media con mi fórmula.',
                    ],
                    'alta' => [
                        'tier_label'   => 'Gama Alta',
                        'tier_short'   => 'FreeForm HD',
                        'name'         => 'Progresivo Keten • Gama Alta',
                        'subtitle'     => 'Visión panorámica FreeForm HD y adaptación inmediata',
                        'full_title'   => 'Progresivo Keten • Gama Alta',
                        'description'  => 'Visión panorámica FreeForm HD y adaptación inmediata. Tallado digital punto a punto de máxima amplitud visual en las 3 distancias con distorsión periférica casi imperceptible.',
                        'corridor_pct' => 94,
                        'blur_px'      => 0.8,
                        'blur_opacity' => 0.18,
                        'side_width'   => 9,
                        'badge_left'   => 'Keten Gama Alta',
                        'badge_right'  => 'FreeForm HD',
                        'metrics'      => [
                            'blue_block'      => 98,
                            'glare_reduction' => 96,
                            'photochromic'    => 99,
                        ],
                        'caption'      => 'Progresivo Keten • Gama Alta: Visión panorámica FreeForm HD y adaptación inmediata con campo visual despejado.',
                        'wa_message'   => 'Hola EOS Óptica, me gustaría cotizar cristales Progresivo Keten • Gama Alta (FreeForm HD) con mi fórmula.',
                    ],
                ],
                'caption'       => 'Desliza el control para comparar en vivo el Progresivo Keten entre Gama Baja, Gama Media y Gama Alta.',
                'wa_message'    => 'Hola EOS Óptica, me gustaría cotizar cristales Progresivos Keten con mi fórmula.',
            ],
            'standard' => [
                'slug'          => 'standard',
                'name'          => 'Cristal Convencional',
                'subtitle'      => 'Cristal básico sin tratamiento antirreflejo',
                'full_title'    => 'Cristal Convencional (Sin Recubrimiento)',
                'icon'          => 'bi-circle-half',
                'badge_class'   => 'bg-secondary',
                'description'   => 'Corrige tu fórmula visual básica, pero permite el paso de reflejos de luces artificiales y radiación azul de dispositivos electrónicos.',
                'metric_labels' => [
                    'm1' => 'Bloqueo de Luz Azul Digital',
                    'm2' => 'Reducción de Reflejos Nocturnos',
                    'm3' => 'Oscurecimiento Solar Automático (Foto Blue)',
                ],
                'metrics'       => [
                    'blue_block'      => 15,
                    'glare_reduction' => 20,
                    'photochromic'    => 0,
                ],
                'caption'       => 'Sin capa antirreflejo se producen brillos superficiales que disminuyen el contraste y generan fatiga visual.',
                'wa_message'    => 'Hola EOS Óptica, quisiera información sobre sus cristales y monturas disponibles.',
            ],
        ];
    }
}
