<?php

declare(strict_types=1);

namespace App\Models;

class Catalog
{
    /**
     * Categorias de filtrado para el catalogo de monturas
     */
    public static function getCategories(): array
    {
        return [
            ['slug' => 'all',       'label' => 'Todas las Monturas',  'icon' => 'bi-grid-fill'],
            ['slug' => 'tendencia', 'label' => 'Tendencia & Acetato', 'icon' => 'bi-stars'],
            ['slug' => 'ejecutivo', 'label' => 'Ejecutivas & Metal',  'icon' => 'bi-briefcase'],
            ['slug' => 'sol',       'label' => 'Sol & Foto Blue',     'icon' => 'bi-sun'],
            ['slug' => 'juvenil',   'label' => 'Juvenil & TR90',      'icon' => 'bi-lightning-charge'],
        ];
    }

    /**
     * Listado curado de monturas representativas de EOS Optica (Paleta Blanco, Negro y Gris)
     */
    public static function all(): array
    {
        return [
            [
                'id'            => 1,
                'category'      => 'tendencia',
                'badge'         => 'Tendencia',
                'badge_class'   => 'eos-badge-black',
                'material'      => 'Acetato Premium • Dama',
                'name'          => 'Línea Aura Cat-Eye',
                'description'   => 'Diseño estilizado que realza la expresión facial. Ideal para rostros ovalados, redondos o diamante.',
                'compatibility' => 'Apta para AR Blue y Progresivos',
                'specs'         => [
                    'estructura' => 'Acetato de celulosa pulido a mano con alma metálica en varillas',
                    'rostro'     => 'Rostros redondos, ovalados y triangulares',
                    'cristales'  => 'Visión Sencilla, Antirreflejo Blue, Foto Blue y Progresivos Digitales',
                    'medidas'    => 'Calibre 53 mm • Puente 17 mm • Varilla 140 mm',
                ],
                'image'         => 'https://images.unsplash.com/photo-1591076482161-42ce6da69f67?auto=format&fit=crop&w=700&q=80',
                'wa_query'      => 'Hola EOS Óptica, quiero consultar disponibilidad y precio de monturas estilo Cat-Eye en Acetato (Línea Aura).',
            ],
            [
                'id'            => 2,
                'category'      => 'ejecutivo',
                'badge'         => 'Ultraligera',
                'badge_class'   => 'eos-badge-gray',
                'material'      => 'Acero Inoxidable • Unisex',
                'name'          => 'Colección Minimal Metal',
                'description'   => 'Aros metálicos delgados de alta resistencia a la corrosión con plaquetas anatómicas de silicona suave.',
                'compatibility' => 'Ideal con Cristales Foto Blue',
                'specs'         => [
                    'estructura' => 'Acero inoxidable hipoalergénico de perfil delgado',
                    'rostro'     => 'Todo tipo de rostro (ajuste nasal personalizable)',
                    'cristales'  => 'Visión Sencilla, AR Blue, Foto Blue y Policarbonato',
                    'medidas'    => 'Calibre 51 mm • Puente 19 mm • Varilla 142 mm',
                ],
                'image'         => 'https://images.unsplash.com/photo-1511499767150-a48a237f0083?auto=format&fit=crop&w=700&q=80',
                'wa_query'      => 'Hola EOS Óptica, quiero consultar disponibilidad de monturas metálicas Colección Minimal Metal.',
            ],
            [
                'id'            => 3,
                'category'      => 'tendencia',
                'badge'         => 'Más Vendida',
                'badge_class'   => 'eos-badge-black',
                'material'      => 'Acetato Negro / Grafito • Caballero & Unisex',
                'name'          => 'Serie Architect Bold',
                'description'   => 'Estructura firme con bisagras metálicas reforzadas. Excelente para fórmulas altas o uso profesional intensivo.',
                'compatibility' => 'Soporta todo rango de fórmulas',
                'specs'         => [
                    'estructura' => 'Acetato de alto espesor con bisagras flexibles de doble resorte',
                    'rostro'     => 'Rostros ovalados, alargados y rectangulares',
                    'cristales'  => 'Fórmulas altas, AR Blue, Foto Blue, Bifocales y Progresivos',
                    'medidas'    => 'Calibre 54 mm • Puente 18 mm • Varilla 145 mm',
                ],
                'image'         => 'https://images.unsplash.com/photo-1577803645773-f96470509666?auto=format&fit=crop&w=700&q=80',
                'wa_query'      => 'Hola EOS Óptica, me interesan las monturas de pasta/acetato Serie Architect Bold.',
            ],
            [
                'id'            => 4,
                'category'      => 'sol',
                'badge'         => 'UV400 / Solar',
                'badge_class'   => 'eos-badge-gray',
                'material'      => 'Protección Solar & Fórmula',
                'name'          => 'Línea EOS Sun & Foto Blue',
                'description'   => 'Combina tu fórmula correctiva con protección solar UV400 polarizada o cristales fotocromáticos inteligentes.',
                'compatibility' => 'Bloqueo 100% radiación UVA/UVB',
                'specs'         => [
                    'estructura' => 'Monturas solares y oftálmicas adaptables a cristales fotosensibles',
                    'rostro'     => 'Diseños versátiles para conducción y actividades al aire libre',
                    'cristales'  => 'Cristales Foto Blue, Polarizados con fórmula y Teñidos UV400',
                    'medidas'    => 'Calibre 55 mm • Puente 18 mm • Varilla 145 mm',
                ],
                'image'         => 'https://images.unsplash.com/photo-1508296695146-257a814070b4?auto=format&fit=crop&w=700&q=80',
                'wa_query'      => 'Hola EOS Óptica, quiero información sobre lentes de sol con fórmula o cristales Foto Blue.',
            ],
            [
                'id'            => 5,
                'category'      => 'ejecutivo',
                'badge'         => 'Clásico Ejecutivo',
                'badge_class'   => 'eos-badge-black',
                'material'      => 'Mixto Acetato + Metal • Unisex',
                'name'          => 'Estilo Browline Ejecutivo',
                'description'   => 'Equilibrio atemporal entre presencia ejecutiva y ligereza para largas jornadas de lectura o pantallas.',
                'compatibility' => 'Óptima para Bifocales y Progresivos',
                'specs'         => [
                    'estructura' => 'Cejas superiores en acetato negro con aro inferior metálico',
                    'rostro'     => 'Rostros ovalados, redondos y corazón',
                    'cristales'  => 'Progresivos Digitales, Bifocales Invisibles y AR Blue',
                    'medidas'    => 'Calibre 52 mm • Puente 19 mm • Varilla 140 mm',
                ],
                'image'         => 'https://images.unsplash.com/photo-1509695507497-903c140c43b0?auto=format&fit=crop&w=700&q=80',
                'wa_query'      => 'Hola EOS Óptica, me interesa consultar disponibilidad del modelo Browline Ejecutivo.',
            ],
            [
                'id'            => 6,
                'category'      => 'juvenil',
                'badge'         => 'Flexible TR90',
                'badge_class'   => 'eos-badge-gray',
                'material'      => 'TR90 Hipoalergénico • Juvenil & Niños',
                'name'          => 'Colección Crystal Clear & Kids',
                'description'   => 'Monturas translúcidas y flexibles con memoria elástica resistentes a caídas, ideales para estudiantes y niños.',
                'compatibility' => 'Ultraligeras y de alta resistencia',
                'specs'         => [
                    'estructura' => 'Polímero termoplástico TR90 superflexible y resistente a impactos',
                    'rostro'     => 'Tallas juveniles, universitarias y pediátricas',
                    'cristales'  => 'Policarbonato resistente a golpes con Filtro Antirreflejo Blue',
                    'medidas'    => 'Calibres desde 46 mm (Niños) hasta 51 mm (Juvenil)',
                ],
                'image'         => 'https://images.unsplash.com/photo-1584036561566-baf8f5f1b144?auto=format&fit=crop&w=700&q=80',
                'wa_query'      => 'Hola EOS Óptica, busco monturas flexibles TR90 juveniles o pediátricas.',
            ],
        ];
    }
}
