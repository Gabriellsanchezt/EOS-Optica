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
                'slug'        => 'ar-blue',
                'name'        => 'Antirreflejo Blue',
                'subtitle'    => 'Ideal para oficina, estudio y pantallas digitales',
                'full_title'  => 'Cristal Antirreflejo Blue (Filtro de Luz Azul)',
                'icon'        => 'bi-laptop',
                'badge_class' => 'bg-info',
                'description' => 'Bloquea selectivamente la luz azul-violeta nociva de monitores, laptops y smartphones, eliminando los reflejos molestos en conducción nocturna.',
                'metrics'     => [
                    'blue_block'      => 95,
                    'glare_reduction' => 92,
                    'photochromic'    => 15,
                ],
                'caption'     => 'Nota el destello residual azulado característico que confirma la protección activa contra pantallas.',
                'wa_message'  => 'Hola EOS Óptica, me gustaría cotizar cristales Antirreflejo Blue con mi fórmula.',
            ],
            'foto-blue' => [
                'slug'        => 'foto-blue',
                'name'        => 'Cristal Foto Blue',
                'subtitle'    => 'Filtro azul en interiores + Lente solar en exteriores',
                'full_title'  => 'Cristal Foto Blue (Fotocromático + Filtro Azul)',
                'icon'        => 'bi-brightness-high',
                'badge_class' => 'bg-warning',
                'description' => 'Doble tecnología fotosensible inteligente: completamente claros con filtro azul adentro y se oscurecen automáticamente al salir al sol de Barquisimeto.',
                'metrics'     => [
                    'blue_block'      => 95,
                    'glare_reduction' => 90,
                    'photochromic'    => 98,
                ],
                'caption'     => 'Desliza el control de radiación exterior (UV) para observar cómo el cristal Foto Blue se oscurece automáticamente.',
                'wa_message'  => 'Hola EOS Óptica, me gustaría cotizar cristales Foto Blue (fotocromáticos con filtro azul).',
            ],
            'standard' => [
                'slug'        => 'standard',
                'name'        => 'Cristal Convencional',
                'subtitle'    => 'Cristal básico sin tratamiento antirreflejo',
                'full_title'  => 'Cristal Convencional (Sin Recubrimiento)',
                'icon'        => 'bi-circle-half',
                'badge_class' => 'bg-secondary',
                'description' => 'Corrige tu fórmula visual básica, pero permite el paso de reflejos de luces artificiales y radiación azul de dispositivos electrónicos.',
                'metrics'     => [
                    'blue_block'      => 15,
                    'glare_reduction' => 20,
                    'photochromic'    => 0,
                ],
                'caption'     => 'Sin capa antirreflejo se producen brillos superficiales que disminuyen el contraste y generan fatiga visual.',
                'wa_message'  => 'Hola EOS Óptica, quisiera información sobre sus cristales y monturas disponibles.',
            ],
        ];
    }
}
