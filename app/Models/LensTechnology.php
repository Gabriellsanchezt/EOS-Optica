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
                'group'         => 'tratamiento',
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
                'progressive'   => null,
                'caption'       => 'Nota el destello residual azulado característico que confirma la protección activa contra pantallas.',
                'wa_message'    => 'Hola EOS Óptica, me gustaría cotizar cristales Antirreflejo Blue con mi fórmula.',
            ],
            'foto-blue' => [
                'slug'          => 'foto-blue',
                'group'         => 'tratamiento',
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
                'progressive'   => null,
                'caption'       => 'Desliza el control de radiación exterior (UV) para observar cómo el cristal Foto Blue se oscurece automáticamente.',
                'wa_message'    => 'Hola EOS Óptica, me gustaría cotizar cristales Foto Blue (fotocromáticos con filtro azul).',
            ],
            'standard' => [
                'slug'          => 'standard',
                'group'         => 'tratamiento',
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
                'progressive'   => null,
                'caption'       => 'Sin capa antirreflejo se producen brillos superficiales que disminuyen el contraste y generan fatiga visual.',
                'wa_message'    => 'Hola EOS Óptica, quisiera información sobre sus cristales y monturas disponibles.',
            ],
            'keten-baja' => [
                'slug'          => 'keten-baja',
                'group'         => 'keten',
                'tier_label'    => 'Gama Baja',
                'tier_short'    => 'Básica',
                'name'          => 'Progresivo Keten • Gama Baja',
                'subtitle'      => 'Corredor clásico funcional para lejos, intermedio y cerca',
                'full_title'    => 'Progresivo Keten — Gama Baja (Diseño Convencional)',
                'icon'          => 'bi-distribute-vertical',
                'badge_class'   => 'bg-secondary',
                'description'   => 'Solución multifocal económica sin línea divisoria visible. Ofrece zonas funcionales de visión lejana y cercana con un canal intermedio estrecho y mayor aberración en los bordes laterales.',
                'metric_labels' => [
                    'm1' => 'Amplitud de Campo Visual (Corredor)',
                    'm2' => 'Nitidez Lateral (Control de Aberración)',
                    'm3' => 'Velocidad y Confort de Adaptación',
                ],
                'metrics'       => [
                    'blue_block'      => 52,
                    'glare_reduction' => 48,
                    'photochromic'    => 58,
                ],
                'progressive'   => [
                    'tier'          => 'baja',
                    'corridor_pct'  => 42,
                    'blur_px'       => 6,
                    'blur_opacity'  => 0.88,
                    'side_width'    => 34,
                    'badge_left'    => 'Keten Baja',
                    'badge_right'   => 'Canal Estándar',
                ],
                'caption'       => 'Progresivo Keten Gama Baja: Observa las zonas laterales difuminadas más pronunciadas y un corredor central más angosto.',
                'wa_message'    => 'Hola EOS Óptica, me gustaría cotizar cristales Progresivos Keten en Gama Baja con mi fórmula.',
            ],
            'keten-media' => [
                'slug'          => 'keten-media',
                'group'         => 'keten',
                'tier_label'    => 'Gama Media',
                'tier_short'    => 'Digital',
                'name'          => 'Progresivo Keten • Gama Media',
                'subtitle'      => 'Campo intermedio ampliado y menor distorsión lateral',
                'full_title'    => 'Progresivo Keten — Gama Media (Optimización Digital)',
                'icon'          => 'bi-aspect-ratio',
                'badge_class'   => 'bg-light',
                'description'   => 'Equilibrio ideal entre confort y rendimiento. Amplía significativamente el corredor intermedio (ideal para usar computadora y tablero del auto) con transiciones suaves y menor efecto de balanceo.',
                'metric_labels' => [
                    'm1' => 'Amplitud de Campo Visual (Corredor)',
                    'm2' => 'Nitidez Lateral (Control de Aberración)',
                    'm3' => 'Velocidad y Confort de Adaptación',
                ],
                'metrics'       => [
                    'blue_block'      => 78,
                    'glare_reduction' => 76,
                    'photochromic'    => 84,
                ],
                'progressive'   => [
                    'tier'          => 'media',
                    'corridor_pct'  => 68,
                    'blur_px'       => 3.2,
                    'blur_opacity'  => 0.55,
                    'side_width'    => 21,
                    'badge_left'    => 'Keten Media',
                    'badge_right'   => 'Canal Ampliado',
                ],
                'caption'       => 'Progresivo Keten Gama Media: Mayor amplitud en zona intermedia (computadora) y reducción notable del desenfoque periférico.',
                'wa_message'    => 'Hola EOS Óptica, me gustaría cotizar cristales Progresivos Keten en Gama Media con mi fórmula.',
            ],
            'keten-alta' => [
                'slug'          => 'keten-alta',
                'group'         => 'keten',
                'tier_label'    => 'Gama Alta',
                'tier_short'    => 'FreeForm HD',
                'name'          => 'Progresivo Keten • Gama Alta',
                'subtitle'      => 'Visión panorámica FreeForm HD y adaptación inmediata',
                'full_title'    => 'Progresivo Keten — Gama Alta (Tallado Digital FreeForm HD)',
                'icon'          => 'bi-arrows-fullscreen',
                'badge_class'   => 'bg-white',
                'description'   => 'Máxima ingeniería óptica Keten. Tallado digital punto a punto que maximiza el campo visual en lejos, distancia intermedia y lectura, reduciendo al mínimo las distorsiones periféricas para una adaptación inmediata.',
                'metric_labels' => [
                    'm1' => 'Amplitud de Campo Visual (Corredor)',
                    'm2' => 'Nitidez Lateral (Control de Aberración)',
                    'm3' => 'Velocidad y Confort de Adaptación',
                ],
                'metrics'       => [
                    'blue_block'      => 98,
                    'glare_reduction' => 96,
                    'photochromic'    => 99,
                ],
                'progressive'   => [
                    'tier'          => 'alta',
                    'corridor_pct'  => 92,
                    'blur_px'       => 1.0,
                    'blur_opacity'  => 0.22,
                    'side_width'    => 10,
                    'badge_left'    => 'Keten Alta HD',
                    'badge_right'   => 'Campo Panorámico',
                ],
                'caption'       => 'Progresivo Keten Gama Alta: Campo de visión panorámico en las 3 distancias con distorsión lateral casi imperceptible.',
                'wa_message'    => 'Hola EOS Óptica, me gustaría cotizar cristales Progresivos Keten en Gama Alta (FreeForm HD) con mi fórmula.',
            ],
        ];
    }
}
