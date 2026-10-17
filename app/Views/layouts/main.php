<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate">
  <meta http-equiv="Pragma" content="no-cache">
  <meta http-equiv="Expires" content="0">

  <title><?= e($pageTitle ?? (config('app.name') . ' | ' . config('app.tagline'))) ?></title>
  <meta name="description" content="<?= e((string) config('app.description')) ?>">
  <meta name="keywords" content="EOS Optica, Optica Barquisimeto, Examen Visual Gratis Barquisimeto, Oftalmologo Barquisimeto, Cristales Antirreflejo Blue, Cristales Foto Blue, Monturas Lara">
  <meta name="author" content="<?= e((string) config('app.name')) ?>">

  <!-- Resource Hints -->
  <link rel="dns-prefetch" href="//fonts.googleapis.com">
  <link rel="dns-prefetch" href="//fonts.gstatic.com">
  <link rel="dns-prefetch" href="//cdn.jsdelivr.net">

  <!-- Open Graph -->
  <meta property="og:type" content="website">
  <meta property="og:title" content="<?= e((string) config('app.name')) ?> | <?= e((string) config('app.tagline')) ?>">
  <meta property="og:description" content="<?= e((string) config('app.description')) ?>">
  <meta property="og:image" content="<?= asset((string) config('app.logo_light')) ?>">
  <meta property="og:locale" content="es_VE">

  <!-- Favicon Oficial del Negocio -->
  <link rel="icon" type="image/jpeg" href="<?= asset((string) config('app.logo_light')) ?>">
  <link rel="apple-touch-icon" href="<?= asset((string) config('app.logo_light')) ?>">

  <!-- Google Fonts: Plus Jakarta Sans + Instrument Serif -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Instrument+Serif:ital@0;1&family=Plus+Jakarta+Sans:wght@400;500;600;700;800&display=swap" rel="stylesheet">

  <!-- Bootstrap 5.3.3 CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Bootstrap Icons 1.11.3 (Codigo Puro de Iconos) -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

  <!-- Estilos Personalizados EOS Optica -->
  <link rel="stylesheet" href="<?= asset('assets/css/styles.css') ?>">

  <!-- Schema.org JSON-LD para SEO Local en Barquisimeto -->
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Optician",
    "name": "<?= e((string) config('app.name')) ?>",
    "description": "<?= e((string) config('app.description')) ?>",
    "image": "<?= asset((string) config('app.logo_light')) ?>",
    "telephone": "+584129515387",
    "address": {
      "@type": "PostalAddress",
      "streetAddress": "Carrera 19 esquina con Calle 35, Edificio Carache, Planta Baja, Locales 3 y 4",
      "addressLocality": "Barquisimeto",
      "addressRegion": "Lara",
      "addressCountry": "VE"
    },
    "sameAs": [
      "<?= e((string) config('instagram.url')) ?>"
    ]
  }
  </script>
</head>
<body data-base-url="<?= e(base_url()) ?>" data-wa-number="<?= e((string) config('whatsapp.number')) ?>">

  <!-- Barra de Navegacion y Topbar -->
  <?php \App\Core\View::partial('partials/navbar'); ?>

  <!-- Contenido Principal de la Vista -->
  <main>
    <?= $content ?? '' ?>
  </main>

  <!-- Pie de Pagina -->
  <?php \App\Core\View::partial('partials/footer'); ?>

  <!-- Boton Flotante de WhatsApp (Icono en Codigo Puro) -->
  <a
    href="<?= e((string) config('whatsapp.link')) ?>"
    class="floating-wa"
    target="_blank"
    rel="noopener noreferrer"
    aria-label="Contactar a EOS Óptica por WhatsApp"
  >
    <i class="bi bi-whatsapp"></i>
    <span class="floating-wa-tooltip">Atención inmediata por WhatsApp</span>
  </a>

  <!-- Bootstrap 5.3.3 Bundle JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

  <!-- Script Principal MVC -->
  <script src="<?= asset('assets/js/main.js') ?>"></script>
</body>
</html>
