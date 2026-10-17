<section class="py-5 my-5">
  <div class="container text-center py-5">
    <div class="d-inline-flex align-items-center justify-content-center rounded-circle bg-dark text-white p-4 mb-4">
      <i class="bi bi-compass fs-1"></i>
    </div>
    <h1 class="display-5 fw-bold mb-3">404 - Página no encontrada</h1>
    <p class="text-secondary mx-auto mb-4" style="max-width: 520px;">
      La ruta solicitada (<code><?= e($path ?? '/') ?></code>) no existe en el portal de <strong>EOS Óptica</strong>.
    </p>
    <a href="<?= url('/') ?>" class="btn btn-eos-primary rounded-pill px-4 py-2 d-inline-flex align-items-center gap-2">
      <i class="bi bi-arrow-left"></i>
      <span>Volver al Inicio</span>
    </a>
  </div>
</section>
