<!-- Barra Superior Informativa (Blanco, Negro y Gris) -->
<div class="eos-topbar py-2">
  <div class="container d-flex flex-wrap justify-content-between align-items-center gap-2">
    <div class="d-flex align-items-center gap-2">
      <span class="pulse-indicator"></span>
      <span><strong>Examen Optométrico: Sin Costo</strong> (solo con tu compra en tienda) • Lunes a Sábado (Tarde)</span>
    </div>
    <div class="d-none d-md-flex align-items-center gap-3 eos-topbar-links">
      <a href="<?= e((string) config('location.maps_url')) ?>" target="_blank" rel="noopener noreferrer" class="d-inline-flex align-items-center gap-1">
        <i class="bi bi-geo-alt-fill text-white"></i>
        <span><?= e((string) config('location.short_addr')) ?></span>
      </a>
      <span class="opacity-25">|</span>
      <a href="<?= e((string) config('instagram.url')) ?>" target="_blank" rel="noopener noreferrer" class="d-inline-flex align-items-center gap-1">
        <i class="bi bi-instagram text-white"></i>
        <span><?= e((string) config('instagram.handle')) ?></span>
      </a>
    </div>
  </div>
</div>

<!-- Navbar Principal Bootstrap 5 con Logo Oficial del Negocio -->
<header class="navbar navbar-expand-lg eos-navbar sticky-top">
  <div class="container">
    <a class="navbar-brand d-flex align-items-center gap-3" href="<?= url('/') ?>" aria-label="EOS Óptica Inicio">
      <img
        src="<?= asset((string) config('app.logo_light')) ?>"
        alt="Logo EOS Óptica"
        class="eos-brand-logo"
      >
      <div class="d-flex flex-column border-start ps-3 border-secondary border-opacity-25">
        <span class="brand-title">EOS <span>ÓPTICA</span></span>
        <span class="brand-subtitle">Barquisimeto • Salud Visual</span>
      </div>
    </a>

    <button class="navbar-toggler border-0 shadow-none" type="button" data-bs-toggle="collapse" data-bs-target="#eosNavbarContent" aria-controls="eosNavbarContent" aria-expanded="false" aria-label="Alternar navegación">
      <i class="bi bi-list fs-2 text-dark"></i>
    </button>

    <div class="collapse navbar-collapse" id="eosNavbarContent">
      <ul class="navbar-nav mx-auto mb-2 mb-lg-0 gap-lg-3">
        <li class="nav-item">
          <a class="nav-link" href="#servicios">Servicios</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#simulador">Laboratorio EOS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#catalogo">Monturas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#oftalmologia">Oftalmología</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#faq">Preguntas</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#ubicacion">Ubicación</a>
        </li>
      </ul>

      <div class="d-flex align-items-center gap-2 mt-3 mt-lg-0">
        <a href="#agendar" class="btn btn-eos-primary rounded-pill px-4 d-inline-flex align-items-center gap-2">
          <i class="bi bi-calendar2-check"></i>
          <span>Agendar Cita</span>
        </a>
      </div>
    </div>
  </div>
</header>
