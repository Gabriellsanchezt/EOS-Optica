<section class="py-5 my-5">
  <div class="container text-center py-5">
    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-dark text-white p-4 mb-4">
      <i class="bi bi-exclamation-triangle fs-1"></i>
    </div>
    <h1 class="display-5 fw-bold mb-3">500 - Error interno del servidor</h1>
    <p class="text-secondary mx-auto mb-4" style="max-width: 520px;">
      Ocurrió un inconveniente procesando la solicitud. Puedes comunicarte directamente con nuestro equipo por WhatsApp.
    </p>
    <div class="d-flex justify-content-center gap-3 flex-wrap">
      <a href="<?= url('/') ?>" class="btn btn-eos-primary rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2">
        <i class="bi bi-house-door"></i>
        <span>Ir al Inicio</span>
      </a>
      <a href="<?= e((string) config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-eos-outline rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2">
        <i class="bi bi-whatsapp"></i>
        <span>Contactar por WhatsApp</span>
      </a>
    </div>
  </div>
</section>
