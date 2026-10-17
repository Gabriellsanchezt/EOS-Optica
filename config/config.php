<?php

declare(strict_types=1);

return [
    'app' => [
        'name'        => 'EOS Óptica',
        'tagline'     => 'Salud Visual, Monturas y Oftalmología en Barquisimeto',
        'subtagline'  => 'Optometría Computarizada • AR Blue, Foto Blue & Progresivos Keten • Consulta Oftalmológica',
        'description' => 'EOS Óptica en Barquisimeto (Carrera 19 esquina con Calle 35, Edificio Carache). Examen optométrico sin costo con la compra en tienda, consultas oftalmológicas, cristales Antirreflejo Blue, Foto Blue, Progresivos Keten y monturas.',
        'base_url'    => null, // Auto-detectado dinamicamente
        'year'        => date('Y'),
        'logo_light'  => 'assets/img/logo-eos-white.jpeg',
        'logo_dark'   => 'assets/img/logo-eos-black.jpeg',
        'hero_image'  => 'assets/img/FACHADA.jpeg',
    ],

    'clinical' => [
        'specialist'   => 'Dra. Aurora Villalobos & Equipo Clínico EOS',
        'title'        => 'Unidad de Optometría y Oftalmología Integral',
        'ophtha_days'  => 'Lunes y Miércoles (Previa Cita)',
        'ophtha_hours' => 'Turno de la Tarde (Previa Cita)',
        'optom_days'   => 'Lunes a Sábado',
        'optom_shift'  => 'Atención en Turno de la Tarde',
        'optom_cost'   => 'Sin Costo (con la compra en tienda)',
    ],

    'whatsapp' => [
        'number'          => '584129515387',
        'display'         => '+58 412-9515387',
        'default_message' => 'Hola EOS Óptica, vengo de su sitio web y deseo solicitar información.',
        'link'            => 'https://wa.me/584129515387?text=' . rawurlencode('Hola EOS Óptica, vengo de su sitio web y deseo solicitar información.'),
    ],

    'instagram' => [
        'handle'    => '@eosoptica',
        'username'  => 'eosoptica',
        'followers' => '+2.000',
        'url'       => 'https://www.instagram.com/eosoptica/',
    ],

    'location' => [
        'city'        => 'Barquisimeto, Estado Lara',
        'address'     => 'Carrera 19 esquina con Calle 35, Edificio Carache, Planta Baja, Locales 3 y 4',
        'short_addr'  => 'Carrera 19 esq. Calle 35, Edif. Carache, PB Locales 3 y 4',
        'maps_url'    => 'https://maps.google.com/?q=Carrera+19+con+Calle+35+Barquisimeto+Lara+Venezuela',
        'maps_embed'  => 'https://www.google.com/maps?q=Carrera+19+Calle+35+Barquisimeto+Lara+Venezuela&output=embed',
    ],
];
