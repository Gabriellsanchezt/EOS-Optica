<footer class="eos-footer pt-5 pb-4">
  <div class="container">
    <div class="row g-4 pb-4 border-bottom border-secondary border-opacity-25">
      <div class="col-lg-5">
        <div class="d-flex align-items-center gap-3 mb-3">
          <img
            src="<?= asset((string) config('app.logo_light')) ?>"
            alt="Logo EOS Óptica"
            class="eos-footer-logo rounded-2 bg-white px-2 py-1"
          >
          <span class="brand-title text-white">EOS <span class="text-secondary-light">ÓPTICA</span></span>
        </div>
        <p class="text-secondary-light mb-3 pe-lg-4">
          Salud visual integral, jornada permanente de examen visual gratuito, consulta oftalmológica especializada y monturas de tendencia en Barquisimeto, Estado Lara.
        </p>
        <div class="d-flex align-items-center gap-3">
          <a href="<?= e((string) config('instagram.url')) ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Instagram de EOS Óptica">
            <i class="bi bi-instagram"></i>
          </a>
          <a href="<?= e((string) config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="WhatsApp de EOS Óptica">
            <i class="bi bi-whatsapp"></i>
          </a>
          <a href="<?= e((string) config('location.maps_url')) ?>" target="_blank" rel="noopener noreferrer" class="social-icon-btn" aria-label="Ubicación en Google Maps">
            <i class="bi bi-geo-alt"></i>
          </a>
        </div>
      </div>

      <div class="col-6 col-lg-3">
        <h5 class="text-white fw-bold mb-3 fs-6 text-uppercase tracking-wider">Secciones</h5>
        <ul class="list-unstyled d-flex flex-column gap-2 mb-0 footer-nav-list">
          <li><a href="#servicios"><i class="bi bi-chevron-right small me-1"></i>Servicios Visuales</a></li>
          <li><a href="#simulador"><i class="bi bi-chevron-right small me-1"></i>Simulador Cristales Blue</a></li>
          <li><a href="#catalogo"><i class="bi bi-chevron-right small me-1"></i>Catálogo de Monturas</a></li>
          <li><a href="#oftalmologia"><i class="bi bi-chevron-right small me-1"></i>Consulta Oftalmológica</a></li>
          <li><a href="#agendar"><i class="bi bi-chevron-right small me-1"></i>Agendar Cita</a></li>
        </ul>
      </div>

      <div class="col-6 col-lg-4">
        <h5 class="text-white fw-bold mb-3 fs-6 text-uppercase tracking-wider">Contacto y Horarios</h5>
        <ul class="list-unstyled d-flex flex-column gap-2 mb-0 text-secondary-light small">
          <li class="d-flex align-items-start gap-2">
            <i class="bi bi-geo-alt-fill text-white mt-1"></i>
            <span><?= e((string) config('location.address')) ?>, <?= e((string) config('location.city')) ?></span>
          </li>
          <li class="d-flex align-items-center gap-2">
            <i class="bi bi-clock-fill text-white"></i>
            <span>Optometría: Lunes a Sábado • Oftalmología: Lunes y Miércoles (Turno de la Tarde)</span>
          </li>
          <li class="d-flex align-items-center gap-2">
            <i class="bi bi-whatsapp text-white"></i>
            <a href="<?= e((string) config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="text-white text-decoration-none fw-semibold">
              <?= e((string) config('whatsapp.display')) ?>
            </a>
          </li>
          <li class="d-flex align-items-center gap-2">
            <i class="bi bi-instagram text-white"></i>
            <a href="<?= e((string) config('instagram.url')) ?>" target="_blank" rel="noopener noreferrer" class="text-white text-decoration-none fw-semibold">
              <?= e((string) config('instagram.handle')) ?>
            </a>
          </li>
        </ul>
      </div>
    </div>

    <div class="pt-4 text-center small text-secondary-light">
      <p class="mb-0">&copy; <?= e((string) config('app.year')) ?> <?= e((string) config('app.name')) ?> (<?= e((string) config('instagram.handle')) ?>). Todos los derechos reservados.</p>
    </div>
  </div>
</footer>
