<!-- Hero Section (Identidad Blanco, Negro y Gris) -->
<section class="eos-hero position-relative overflow-hidden py-5">
  <div class="hero-glow hero-glow-1"></div>
  <div class="hero-glow hero-glow-2"></div>

  <div class="container py-lg-4">
    <div class="row g-5 align-items-center">
      <!-- Columna Texto Hero -->
      <div class="col-lg-6">
        <div class="eos-badge-pill mb-4">
          <i class="bi bi-patch-check-fill text-dark"></i>
          <span>Óptica y Unidad Oftalmológica en Barquisimeto</span>
        </div>

        <h1 class="eos-hero-title mb-4">
          Ver bien cambia tu mundo, <span class="serif-accent">lucir increíble</span> lo define.
        </h1>

        <p class="lead text-secondary mb-4 pe-lg-4">
          En <strong><?= e((string) config('app.name')) ?></strong> combinamos precisión en optometría y oftalmología con monturas modernas, cristales <strong>Foto Blue</strong> y <strong>Progresivos</strong> (Gama Baja, Media y Alta).
        </p>

        <div class="d-flex flex-wrap gap-3 mb-5">
          <a href="#agendar" class="btn btn-eos-primary btn-lg rounded-pill px-4 d-inline-flex align-items-center gap-2" data-select-service="Examen Optométrico (Sin costo por compra en tienda)">
            <i class="bi bi-eye"></i>
            <span>Agendar Examen Optométrico</span>
          </a>
          <a href="#simulador" class="btn btn-eos-outline btn-lg rounded-pill px-4 d-inline-flex align-items-center gap-2">
            <i class="bi bi-sliders"></i>
            <span>Laboratorio Interactivo EOS</span>
          </a>
        </div>

        <div class="row g-3 pt-4 border-top border-secondary border-opacity-25">
          <div class="col-4">
            <div class="fw-extrabold fs-4 text-dark">Sin Costo</div>
            <div class="small text-secondary">Examen Optométrico <span class="d-block" style="font-size: 0.72rem;">(Al comprar en tienda)</span></div>
          </div>
          <div class="col-4 border-start border-secondary border-opacity-25 ps-3">
            <div class="fw-extrabold fs-4 text-dark">Foto Blue</div>
            <div class="small text-secondary">Foto Blue y Progresivos</div>
          </div>
          <div class="col-4 border-start border-secondary border-opacity-25 ps-3">
            <div class="fw-extrabold fs-4 text-dark"><?= e((string) config('instagram.followers')) ?></div>
            <div class="small text-secondary">Comunidad <?= e((string) config('instagram.handle')) ?></div>
          </div>
        </div>
      </div>

      <!-- Columna Visual Hero (Fachada Oficial EOS Optica) -->
      <div class="col-lg-6">
        <div class="hero-visual-wrapper position-relative">
          <img
            src="<?= asset((string) config('app.hero_image', 'assets/img/FACHADA.jpeg')) ?>"
            alt="Fachada de EOS Óptica en Edificio Carache, Carrera 19 con Calle 35, Barquisimeto"
            class="img-fluid rounded-4 shadow-lg hero-main-img"
          >

          <!-- Tarjeta Flotante Superior -->
          <div class="hero-float-card float-top d-flex align-items-center gap-3">
            <div class="float-icon-box bg-dark text-white">
              <i class="bi bi-layers-fill fs-5"></i>
            </div>
            <div>
              <strong class="d-block text-dark small">Foto Blue & Progresivos</strong>
              <span class="text-secondary" style="font-size: 0.78rem;">Gama Baja, Media y Alta • Protección UV</span>
            </div>
          </div>

          <!-- Tarjeta Flotante Inferior -->
          <div class="hero-float-card float-bottom d-flex align-items-center gap-3">
            <div class="float-icon-box bg-secondary bg-opacity-10 text-dark border">
              <i class="bi bi-heart-pulse-fill fs-5"></i>
            </div>
            <div>
              <strong class="d-block text-dark small">Consulta Oftalmológica</strong>
              <span class="text-secondary" style="font-size: 0.78rem;">Lunes y Miércoles • Turno de la Tarde</span>
            </div>
            <a href="#oftalmologia" class="btn btn-sm btn-dark rounded-pill fw-bold text-white ms-2" aria-label="Ver Oftalmología">
              <i class="bi bi-arrow-right"></i>
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Franja de Pilares de Valor -->
<section class="py-4">
  <div class="container">
    <div class="row row-cols-1 row-cols-md-2 row-cols-xl-4 g-4">
      <?php foreach ($pillars as $pillar): ?>
        <div class="col">
          <div class="eos-pillar-card h-100 p-4 rounded-4 bg-white border d-flex align-items-start gap-3">
            <div class="pillar-icon-box flex-shrink-0">
              <i class="bi <?= e($pillar['icon']) ?>"></i>
            </div>
            <div>
              <h3 class="h6 fw-bold mb-1 text-dark"><?= e($pillar['title']) ?></h3>
              <p class="small text-secondary mb-0"><?= e($pillar['description']) ?></p>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Seccion de Servicios Visuales y Oftalmologicos -->
<section class="py-5 my-lg-4" id="servicios">
  <div class="container">
    <div class="text-center mx-auto mb-5" style="max-width: 740px;">
      <span class="eos-eyebrow">Cuidado Visual Integral</span>
      <h2 class="eos-section-title mt-2">
        Todo lo que tus ojos necesitan <span class="serif-accent">en un solo lugar</span>
      </h2>
      <p class="text-secondary mb-0">
        Examen optométrico sin costo al adquirir tus lentes en tienda, consulta oftalmológica especializada y laboratorio de cristales digitales y progresivos.
      </p>
    </div>

    <div class="row g-4">
      <?php foreach ($services as $service): ?>
        <div class="col-lg-4">
          <article class="eos-service-card h-100 p-4 p-xl-5 rounded-4 bg-white d-flex flex-column position-relative <?= !empty($service['featured']) ? 'eos-service-featured' : 'border' ?>">
            <?php if (!empty($service['badge'])): ?>
              <span class="eos-card-badge"><?= e($service['badge']) ?></span>
            <?php endif; ?>

            <div class="service-icon-circle mb-4">
              <i class="bi <?= e($service['icon']) ?> fs-3"></i>
            </div>

            <h3 class="h4 fw-bold mb-3 text-dark"><?= e($service['title']) ?></h3>
            <p class="text-secondary small mb-4"><?= e($service['description']) ?></p>

            <ul class="list-unstyled d-flex flex-column gap-2 mb-4 flex-grow-1">
              <?php foreach ($service['features'] as $feature): ?>
                <li class="d-flex align-items-start gap-2 small text-dark">
                  <i class="bi bi-check2-circle text-dark fw-bold mt-1"></i>
                  <span><?= e($feature) ?></span>
                </li>
              <?php endforeach; ?>
            </ul>

            <a
              href="<?= e($service['cta_target']) ?>"
              class="eos-link-arrow mt-auto fw-bold text-dark d-inline-flex align-items-center gap-2"
              data-select-service="<?= e($service['service_val']) ?>"
            >
              <span><?= e($service['cta_label']) ?></span>
              <i class="bi bi-arrow-right"></i>
            </a>
          </article>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Laboratorio Interactivo EOS (Foto Blue / Progresivos Baja, Media y Alta) -->
<section class="eos-simulator-section py-5" id="simulador">
  <div class="container py-lg-4">
    <div class="text-center mx-auto mb-5" style="max-width: 780px;">
      <span class="eos-eyebrow eos-eyebrow-dark">Laboratorio Interactivo EOS</span>
      <h2 class="eos-section-title text-white mt-2">
        Compara nuestros <span class="serif-accent text-white">Cristales Foto Blue y Progresivos</span>
      </h2>
      <p class="text-secondary-light mb-0">
        Prueba el comportamiento de los cristales <strong>Foto Blue</strong> ante el sol UV, o desliza para comparar la amplitud visual de los <strong>Progresivos en Gama Baja, Media y Alta</strong>.
      </p>
    </div>

    <!-- Datos JSON embebidos desde el Modelo MVC para resiliencia total -->
    <script id="eosLensDataJson" type="application/json">
      <?= json_encode($lenses, JSON_UNESCAPED_UNICODE) ?>
    </script>

    <div class="row g-4 align-items-stretch">
      <!-- Panel de Controles -->
      <div class="col-lg-5">
        <div class="simulator-panel h-100 p-4 rounded-4 d-flex flex-column justify-content-between gap-4">
          <!-- 1. Seleccion de Tecnologia -->
          <div>
            <label class="form-label text-white fw-bold small text-uppercase tracking-wider mb-3 d-flex align-items-center gap-2">
              <i class="bi bi-layers text-white"></i>
              <span>1. Selecciona la tecnología del cristal</span>
            </label>

            <div class="d-flex flex-column gap-2" role="tablist">
              <?php foreach ($lenses as $slug => $lens): ?>
                <button
                  type="button"
                  class="lens-selector-btn text-start p-3 rounded-3 d-flex align-items-center gap-3 <?= $slug === 'foto-blue' ? 'active' : '' ?>"
                  data-lens="<?= e($slug) ?>"
                >
                  <div class="lens-selector-icon">
                    <i class="bi <?= e($lens['icon']) ?> fs-5"></i>
                  </div>
                  <div>
                    <strong class="d-block text-white" <?= $slug === 'progresivo-keten' ? 'id="ketenBtnTitle"' : '' ?>><?= e($lens['name']) ?></strong>
                    <small class="text-secondary-light" <?= $slug === 'progresivo-keten' ? 'id="ketenBtnSubtitle"' : '' ?>><?= e($lens['subtitle']) ?></small>
                  </div>
                </button>
              <?php endforeach; ?>
            </div>
          </div>

          <!-- 2. Slider Dinamico (Radiacion UV o Nivel de Gama Progresivo) -->
          <div>
            <div class="d-flex justify-content-between align-items-center mb-2">
              <label for="sunSlider" class="form-label text-white fw-bold small text-uppercase tracking-wider mb-0 d-flex align-items-center gap-2">
                <i class="bi bi-sun text-white" id="sliderControlIcon"></i>
                <span id="sliderControlLabel">2. Exposición Solar Exterior (UV)</span>
              </label>
              <span class="badge rounded-pill bg-white bg-opacity-10 text-white border border-secondary" id="sunValueLabel">
                Exterior Templado (60% UV)
              </span>
            </div>

            <input type="range" class="form-range eos-range" id="sunSlider" min="0" max="100" value="60">

            <div class="d-flex justify-content-between small text-secondary-light mt-1" style="font-size: 0.78rem;">
              <span id="sliderTickLeft" role="button" data-slider-jump="15"><i class="bi bi-building me-1"></i>Oficina / Noche</span>
              <span id="sliderTickCenter" role="button" data-slider-jump="50"><i class="bi bi-cloud-sun me-1"></i>Exterior Templado</span>
              <span id="sliderTickRight" role="button" data-slider-jump="90"><i class="bi bi-brightness-high-fill me-1"></i>Sol Intenso</span>
            </div>
          </div>

          <!-- Especificaciones Dinamicas -->
          <div class="simulator-specs-card p-3 rounded-3">
            <h4 class="h6 fw-bold text-white mb-2" id="specTitle">
              <?= e($lenses['foto-blue']['full_title']) ?>
            </h4>
            <p class="small text-secondary-light mb-3" id="specDesc">
              <?= e($lenses['foto-blue']['description']) ?>
            </p>

            <div class="d-flex flex-column gap-2 mb-3">
              <div>
                <div class="d-flex justify-content-between small text-white mb-1">
                  <span id="meterLabel1"><?= e($lenses['foto-blue']['metric_labels']['m1']) ?></span>
                  <span id="meterBlueVal">95%</span>
                </div>
                <div class="progress eos-progress">
                  <div class="progress-bar bg-white" id="meterBlue" role="progressbar" style="width: 95%"></div>
                </div>
              </div>

              <div>
                <div class="d-flex justify-content-between small text-white mb-1">
                  <span id="meterLabel2"><?= e($lenses['foto-blue']['metric_labels']['m2']) ?></span>
                  <span id="meterGlareVal">92%</span>
                </div>
                <div class="progress eos-progress">
                  <div class="progress-bar bg-secondary" id="meterGlare" role="progressbar" style="width: 92%"></div>
                </div>
              </div>

              <div>
                <div class="d-flex justify-content-between small text-white mb-1">
                  <span id="meterLabel3"><?= e($lenses['foto-blue']['metric_labels']['m3']) ?></span>
                  <span id="meterPhotoVal">98%</span>
                </div>
                <div class="progress eos-progress">
                  <div class="progress-bar bg-light" id="meterPhoto" role="progressbar" style="width: 98%"></div>
                </div>
              </div>
            </div>

            <a
              href="<?= e(wa_link($lenses['foto-blue']['wa_message'])) ?>"
              target="_blank"
              rel="noopener noreferrer"
              class="btn btn-light fw-bold w-100 rounded-pill d-inline-flex align-items-center justify-content-center gap-2"
              id="quoteLensBtn"
            >
              <i class="bi bi-whatsapp"></i>
              <span>Cotizar este cristal por WhatsApp</span>
            </a>
          </div>
        </div>
      </div>

      <!-- Escenario Visual de Simulación -->
      <div class="col-lg-7">
        <div class="simulator-stage rounded-4 h-100 overflow-hidden position-relative">
          <div class="stage-background h-100 d-flex flex-column justify-content-between align-items-center p-4" id="stageBg">
            <div class="d-flex flex-wrap justify-content-center align-items-center gap-2">
              <div class="stage-condition-pill d-inline-flex align-items-center gap-2">
                <i class="bi bi-display text-white" id="stageConditionIcon"></i>
                <span id="stageConditionBadge">Entorno Digital / Oficina Interior</span>
              </div>
              <div class="stage-condition-pill keten-stage-pill d-none align-items-center gap-2" id="ketenStageBadge">
                <i class="bi bi-layers-half text-white"></i>
                <span id="ketenStageText">Corredor Progresivo</span>
              </div>
            </div>

            <!-- Montura Simulada en Codigo Puro -->
            <div class="glasses-frame-mockup my-4">
              <div class="lens-glass" id="leftLens">
                <div class="lens-glare-layer" id="leftGlare"></div>
                <div class="lens-blue-coating" id="leftReflex"></div>
                <!-- Overlay de Geometria Progresiva (Izquierdo) -->
                <div class="keten-progressive-overlay d-none" id="leftKetenOverlay">
                  <div class="keten-aberration keten-aberration-left"></div>
                  <div class="keten-aberration keten-aberration-right"></div>
                  <div class="keten-zones-map">
                    <span class="keten-zone-tag">LEJOS</span>
                    <span class="keten-zone-tag keten-zone-mid">INTERMEDIA</span>
                    <span class="keten-zone-tag">CERCA</span>
                  </div>
                </div>
                <span class="lens-inner-badge" id="leftLensBadge"><i class="bi bi-eye me-1"></i>Visión EOS</span>
              </div>
              <div class="glasses-nose-bridge"></div>
              <div class="lens-glass" id="rightLens">
                <div class="lens-glare-layer" id="rightGlare"></div>
                <div class="lens-blue-coating" id="rightReflex"></div>
                <!-- Overlay de Geometria Progresiva (Derecho) -->
                <div class="keten-progressive-overlay d-none" id="rightKetenOverlay">
                  <div class="keten-aberration keten-aberration-left"></div>
                  <div class="keten-aberration keten-aberration-right"></div>
                  <div class="keten-zones-map">
                    <span class="keten-zone-tag">LEJOS</span>
                    <span class="keten-zone-tag keten-zone-mid">INTERMEDIA</span>
                    <span class="keten-zone-tag">CERCA</span>
                  </div>
                </div>
                <span class="lens-inner-badge" id="rightLensBadge"><i class="bi bi-hd me-1"></i>Nitidez HD</span>
              </div>
            </div>

            <!-- Leyenda interactiva de zonas cuando se activa Progresivo -->
            <div class="keten-legend-bar d-none flex-wrap justify-content-center align-items-center gap-3 mb-2 px-3 py-2 rounded-pill" id="ketenLegendBar">
              <span class="small text-white d-inline-flex align-items-center gap-1">
                <i class="bi bi-check-circle-fill text-white"></i>
                <span>Centro Nítido: <strong>Lejos • PC • Lectura</strong></span>
              </span>
              <span class="text-secondary-light">|</span>
              <span class="small text-secondary-light d-inline-flex align-items-center gap-1">
                <i class="bi bi-distribute-horizontal text-white"></i>
                <span id="ketenCorridorMetric">Amplitud útil: 92%</span>
              </span>
            </div>

            <div class="stage-caption-bar d-flex align-items-center gap-2">
              <i class="bi bi-info-circle-fill text-white flex-shrink-0"></i>
              <span id="stageCaption"><?= e($lenses['foto-blue']['caption']) ?></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Catalogo de Monturas con Filtro Dinamico y Modal de Ficha Tecnica -->
<section class="py-5 my-lg-4" id="catalogo">
  <div class="container">
    <div class="text-center mx-auto mb-4" style="max-width: 720px;">
      <span class="eos-eyebrow">Catálogo de Monturas</span>
      <h2 class="eos-section-title mt-2">
        Monturas que proyectan <span class="serif-accent">tu identidad</span>
      </h2>
      <p class="text-secondary mb-0">
        Seleccionamos monturas en acetato italiano, titanio, acero inoxidable y TR90 flexible. Filtra por estilo, revisa su ficha técnica o solicita tu modelo en línea.
      </p>
    </div>

    <!-- Datos JSON del Catalogo para Modal de Ficha Tecnica -->
    <script id="eosCatalogDataJson" type="application/json">
      <?= json_encode($catalog, JSON_UNESCAPED_UNICODE) ?>
    </script>

    <!-- Botones de Filtro -->
    <div class="d-flex justify-content-center flex-wrap gap-2 mb-5" role="tablist">
      <?php foreach ($categories as $index => $cat): ?>
        <button
          type="button"
          class="btn eos-filter-btn rounded-pill d-inline-flex align-items-center gap-2 <?= $index === 0 ? 'active' : '' ?>"
          data-filter="<?= e($cat['slug']) ?>"
        >
          <i class="bi <?= e($cat['icon']) ?>"></i>
          <span><?= e($cat['label']) ?></span>
        </button>
      <?php endforeach; ?>
    </div>

    <!-- Grid de Monturas -->
    <div class="row g-4" id="catalogGrid">
      <?php foreach ($catalog as $item): ?>
        <div class="col-md-6 col-lg-4 catalog-item" data-category="<?= e($item['category']) ?>">
          <div class="card eos-frame-card h-100 border rounded-4 overflow-hidden shadow-sm">
            <div class="frame-img-container position-relative">
              <img
                src="<?= e($item['image']) ?>"
                alt="<?= e($item['name']) ?>"
                class="card-img-top frame-img"
                loading="lazy"
              >
              <span class="badge <?= e($item['badge_class']) ?> position-absolute top-0 start-0 m-3 px-3 py-2 rounded-pill">
                <?= e($item['badge']) ?>
              </span>
            </div>

            <div class="card-body p-4 d-flex flex-column">
              <div class="text-secondary fw-bold text-uppercase small mb-1" style="font-size: 0.75rem; letter-spacing: 0.06em;">
                <?= e($item['material']) ?>
              </div>
              <h3 class="h5 fw-bold text-dark mb-2"><?= e($item['name']) ?></h3>
              <p class="text-secondary small mb-4 flex-grow-1"><?= e($item['description']) ?></p>

              <div class="pt-3 border-top mt-auto">
                <div class="d-flex align-items-center gap-2 small text-dark fw-semibold mb-3">
                  <i class="bi bi-check-circle-fill"></i>
                  <span><?= e($item['compatibility']) ?></span>
                </div>

                <div class="d-flex gap-2">
                  <button
                    type="button"
                    class="btn btn-eos-outline btn-sm rounded-3 px-3 d-inline-flex align-items-center justify-content-center gap-1 btn-frame-spec"
                    data-frame-id="<?= (int) $item['id'] ?>"
                  >
                    <i class="bi bi-arrows-angle-expand"></i>
                    <span>Ficha</span>
                  </button>
                  <a
                    href="<?= e(wa_link($item['wa_query'])) ?>"
                    target="_blank"
                    rel="noopener noreferrer"
                    class="btn btn-eos-wa-subtle flex-grow-1 rounded-3 d-inline-flex align-items-center justify-content-center gap-2"
                  >
                    <i class="bi bi-whatsapp"></i>
                    <span>Consultar</span>
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<!-- Modal Bootstrap 5 de Ficha Tecnica de Montura -->
<div class="modal fade" id="frameQuickViewModal" tabindex="-1" aria-labelledby="frameModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered modal-lg">
    <div class="modal-content rounded-4 border-0 shadow-lg overflow-hidden">
      <div class="modal-header border-bottom bg-light px-4 py-3">
        <div class="d-flex align-items-center gap-2">
          <i class="bi bi-eyeglasses fs-5 text-dark"></i>
          <h4 class="modal-title h6 fw-bold mb-0 text-uppercase tracking-wider" id="frameModalTitle">Ficha Técnica de Montura</h4>
        </div>
        <button type="button" class="btn-close shadow-none" data-bs-dismiss="modal" aria-label="Cerrar"></button>
      </div>
      <div class="modal-body p-4">
        <div class="row g-4 align-items-center">
          <div class="col-md-5">
            <img src="" alt="" id="modalFrameImg" class="img-fluid rounded-3 border w-100" style="height: 260px; object-fit: cover;">
          </div>
          <div class="col-md-7">
            <span class="badge bg-dark text-white rounded-pill mb-2" id="modalFrameBadge"></span>
            <div class="small text-secondary fw-bold text-uppercase mb-1" id="modalFrameMaterial"></div>
            <h3 class="h4 fw-bold text-dark mb-2" id="modalFrameName"></h3>
            <p class="small text-secondary mb-3" id="modalFrameDesc"></p>

            <div class="bg-light p-3 rounded-3 border mb-3 small">
              <div class="mb-2"><strong class="text-dark"><i class="bi bi-tools me-1"></i>Estructura:</strong> <span class="text-secondary" id="modalSpecEstructura"></span></div>
              <div class="mb-2"><strong class="text-dark"><i class="bi bi-person-bounding-box me-1"></i>Rostro ideal:</strong> <span class="text-secondary" id="modalSpecRostro"></span></div>
              <div class="mb-2"><strong class="text-dark"><i class="bi bi-layers me-1"></i>Cristales aptos:</strong> <span class="text-secondary" id="modalSpecCristales"></span></div>
              <div><strong class="text-dark"><i class="bi bi-rulers me-1"></i>Dimensiones:</strong> <span class="text-secondary" id="modalSpecMedidas"></span></div>
            </div>

            <div class="d-flex flex-wrap gap-2">
              <button type="button" class="btn btn-eos-primary rounded-pill px-4 flex-grow-1 d-inline-flex align-items-center justify-content-center gap-2" id="modalSelectFrameBtn">
                <i class="bi bi-calendar2-check"></i>
                <span>Agendar con esta montura</span>
              </button>
              <a href="#" target="_blank" rel="noopener noreferrer" class="btn btn-eos-outline rounded-pill px-3 d-inline-flex align-items-center justify-content-center gap-2" id="modalWaDirectBtn">
                <i class="bi bi-whatsapp"></i>
                <span>WhatsApp</span>
              </a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- Seccion de Unidad de Oftalmologia -->
<section class="eos-ophtha-section py-5" id="oftalmologia">
  <div class="container py-lg-4">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <span class="eos-eyebrow">Salud Ocular Clínica</span>
        <h2 class="eos-section-title mt-2 mb-3">
          <?= e($ophthalmology['title']) ?>
        </h2>
        <p class="text-secondary mb-4">
          <?= e($ophthalmology['lead']) ?>
        </p>

        <div class="row g-3 mb-4">
          <div class="col-sm-6">
            <div class="bg-white p-3 rounded-4 border h-100 d-flex align-items-start gap-3">
              <div class="ophtha-icon-badge">
                <i class="bi bi-calendar-week"></i>
              </div>
              <div>
                <strong class="d-block text-dark small">Días de Consulta</strong>
                <span class="text-secondary small"><?= e($ophthalmology['days']) ?></span>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="bg-white p-3 rounded-4 border h-100 d-flex align-items-start gap-3">
              <div class="ophtha-icon-badge">
                <i class="bi bi-clock-history"></i>
              </div>
              <div>
                <strong class="d-block text-dark small">Turno de Atención</strong>
                <span class="text-secondary small"><?= e($ophthalmology['hours']) ?></span>
              </div>
            </div>
          </div>
        </div>

        <ul class="list-unstyled d-flex flex-column gap-2 mb-4">
          <?php foreach ($ophthalmology['procedures'] as $proc): ?>
            <li class="d-flex align-items-start gap-2 text-dark">
              <i class="bi bi-check2-square text-dark fw-bold mt-1"></i>
              <span><?= e($proc) ?></span>
            </li>
          <?php endforeach; ?>
        </ul>

        <div class="d-flex flex-wrap gap-3">
          <a href="#agendar" class="btn btn-eos-primary rounded-pill px-4 d-inline-flex align-items-center gap-2" data-select-service="Consulta Oftalmológica (Previa Cita)">
            <i class="bi bi-calendar2-plus"></i>
            <span>Apartar Cupo Oftalmológico</span>
          </a>
          <a href="<?= e((string) config('instagram.url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-eos-outline rounded-pill px-4 d-inline-flex align-items-center gap-2">
            <i class="bi bi-instagram"></i>
            <span>Ver jornadas en <?= e((string) config('instagram.handle')) ?></span>
          </a>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="bg-white p-4 p-xl-5 rounded-4 shadow border">
          <div class="d-flex justify-content-between align-items-center mb-4">
            <span class="badge bg-dark text-white px-3 py-2 rounded-pill d-inline-flex align-items-center gap-2">
              <span class="pulse-indicator"></span>
              <span>Cupos Abiertos Previa Cita</span>
            </span>
            <span class="small fw-bold text-secondary">
              <i class="bi bi-hospital me-1"></i>Sede Carrera 19
            </span>
          </div>

          <h3 class="h4 fw-bold text-dark mb-4">¿Cuándo acudir a valoración oftalmológica?</h3>

          <div class="d-flex flex-column gap-3 mb-4">
            <?php foreach ($ophthalmology['symptoms'] as $symptom): ?>
              <div class="symptom-box p-3 rounded-3 d-flex align-items-start gap-3">
                <div class="text-dark fs-5 mt-1">
                  <i class="bi <?= e($symptom['icon']) ?>"></i>
                </div>
                <div>
                  <strong class="d-block text-dark small"><?= e($symptom['title']) ?></strong>
                  <span class="text-secondary small"><?= e($symptom['desc']) ?></span>
                </div>
              </div>
            <?php endforeach; ?>
          </div>

          <div class="pt-3 border-top text-center small text-secondary">
            <i class="bi bi-telephone-outbound-fill text-dark me-1"></i>
            Atención directa y reservación de citas: <strong class="text-dark"><?= e((string) config('whatsapp.display')) ?></strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Preguntas Frecuentes (Bootstrap 5 Accordion) -->
<section class="py-5 my-lg-3" id="faq">
  <div class="container">
    <div class="row justify-content-center">
      <div class="col-lg-8">
        <div class="text-center mb-5">
          <span class="eos-eyebrow">Respuestas Claras</span>
          <h2 class="eos-section-title mt-2">
            Preguntas <span class="serif-accent">Frecuentes</span>
          </h2>
        </div>

        <div class="accordion eos-accordion" id="eosFaqAccordion">
          <?php foreach ($faqs as $idx => $faq): ?>
            <div class="accordion-item rounded-4 mb-3 border overflow-hidden">
              <h3 class="accordion-header" id="faqHeading<?= $idx ?>">
                <button
                  class="accordion-button <?= $idx === 0 ? '' : 'collapsed' ?> fw-bold text-dark"
                  type="button"
                  data-bs-toggle="collapse"
                  data-bs-target="#faqCollapse<?= $idx ?>"
                  aria-expanded="<?= $idx === 0 ? 'true' : 'false' ?>"
                  aria-controls="faqCollapse<?= $idx ?>"
                >
                  <i class="bi bi-question-circle text-dark me-2"></i>
                  <span><?= e($faq['question']) ?></span>
                </button>
              </h3>
              <div
                id="faqCollapse<?= $idx ?>"
                class="accordion-collapse collapse <?= $idx === 0 ? 'show' : '' ?>"
                aria-labelledby="faqHeading<?= $idx ?>"
                data-bs-parent="#eosFaqAccordion"
              >
                <div class="accordion-body text-secondary">
                  <?= e($faq['answer']) ?>
                </div>
              </div>
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Formulario MVC de Solicitud Rapida de Atencion por WhatsApp -->
<section class="py-5 bg-white border-top" id="agendar">
  <div class="container py-lg-4">
    <div class="row g-5 align-items-center">
      <div class="col-lg-6">
        <span class="eos-eyebrow">Reserva en menos de 1 minuto</span>
        <h2 class="eos-section-title mt-2 mb-3">
          Agenda tu cita o cotiza tu fórmula <span class="serif-accent">por WhatsApp</span>
        </h2>
        <p class="text-secondary mb-4">
          Completa los datos de tu solicitud y nuestro sistema generará tu ficha de atención directa hacia el WhatsApp oficial de <strong>EOS Óptica Barquisimeto</strong>.
        </p>

        <!-- Informacion de Dias y Turno de Atencion -->
        <div class="p-4 rounded-4 bg-light border mb-4">
          <h3 class="h6 fw-bold text-dark text-uppercase mb-3 d-flex align-items-center gap-2">
            <i class="bi bi-calendar2-week-fill"></i>
            <span>Días y Turno de Atención</span>
          </h3>
          <ul class="list-unstyled d-flex flex-column gap-2 mb-0 small text-dark">
            <li class="d-flex align-items-start gap-2">
              <i class="bi bi-check-circle-fill mt-1"></i>
              <span><strong>Examen Optométrico y Óptica:</strong> Lunes a Sábado (Examen sin costo solo y cuando compren en tienda).</span>
            </li>
            <li class="d-flex align-items-start gap-2">
              <i class="bi bi-check-circle-fill mt-1"></i>
              <span><strong>Consulta Oftalmológica (Previa Cita):</strong> Lunes y Miércoles.</span>
            </li>
            <li class="d-flex align-items-start gap-2">
              <i class="bi bi-clock-fill mt-1"></i>
              <span><strong>Turno de Atención:</strong> Todas las citas y evaluaciones se atienden exclusivamente en el <strong>Turno de la Tarde</strong>.</span>
            </li>
          </ul>
        </div>

        <div class="d-flex flex-column gap-3">
          <div class="d-flex align-items-start gap-3">
            <div class="contact-icon-circle flex-shrink-0">
              <i class="bi bi-geo-alt-fill"></i>
            </div>
            <div>
              <strong class="d-block text-dark">Dirección Física</strong>
              <span class="text-secondary small"><?= e((string) config('location.address')) ?>. <?= e((string) config('location.city')) ?>.</span>
            </div>
          </div>

          <div class="d-flex align-items-start gap-3">
            <div class="contact-icon-circle flex-shrink-0">
              <i class="bi bi-whatsapp"></i>
            </div>
            <div>
              <strong class="d-block text-dark">WhatsApp y Atención al Paciente</strong>
              <a href="<?= e((string) config('whatsapp.link')) ?>" target="_blank" rel="noopener noreferrer" class="text-dark fw-bold text-decoration-underline">
                <?= e((string) config('whatsapp.display')) ?>
              </a>
            </div>
          </div>
        </div>
      </div>

      <div class="col-lg-6">
        <div class="eos-booking-card p-4 p-xl-5 rounded-4 shadow-lg border bg-white">
          <div class="d-flex justify-content-between align-items-center mb-3 pb-3 border-bottom">
            <div>
              <h3 class="h4 fw-bold text-dark mb-1">Solicitud Rápida de Atención</h3>
              <p class="small text-secondary mb-0">
                <i class="bi bi-shield-check text-dark me-1"></i>Sin pagos por adelantado • Respuesta vía WhatsApp
              </p>
            </div>
            <img
              src="<?= asset((string) config('app.logo_light')) ?>"
              alt="EOS Óptica"
              class="eos-form-logo d-none d-sm-block"
            >
          </div>

          <!-- Aviso fijo de Turno por la Tarde (Informacion, no campo editable) -->
          <div class="eos-shift-notice p-3 rounded-3 mb-4 d-flex align-items-center gap-3">
            <div class="eos-shift-icon flex-shrink-0">
              <i class="bi bi-clock-history fs-5"></i>
            </div>
            <div class="small">
              <strong class="d-block text-dark">Modalidad de Horario: Turno de la Tarde</strong>
              <span class="text-secondary">Todas nuestras consultas y exámenes optométricos se realizan en horario vespertino (por la tarde).</span>
            </div>
          </div>

          <div id="bookingAlert" class="alert d-none" role="alert"></div>

          <form id="eosBookingForm" action="<?= url('/api/booking') ?>" data-fallback-action="<?= url('/?route=/api/booking') ?>" method="POST" novalidate>
            <!-- Campo Honeypot Anti-Spam invisible para humanos -->
            <div class="d-none" aria-hidden="true">
              <label for="websiteUrl">No llenar este campo</label>
              <input type="text" id="websiteUrl" name="website_url" tabindex="-1" autocomplete="off">
            </div>

            <div class="row g-3 mb-3">
              <div class="col-sm-7">
                <label for="clientName" class="form-label fw-bold small">Nombre y Apellido (Solo letras) *</label>
                <div class="input-group">
                  <span class="input-group-text bg-light"><i class="bi bi-person"></i></span>
                  <input
                    type="text"
                    class="form-control"
                    id="clientName"
                    name="client_name"
                    required
                    maxlength="80"
                    pattern="^[A-Za-zÁÉÍÓÚáéíóúÑñÜü\s]+$"
                    title="Solo se permiten letras y espacios"
                    placeholder="Ej. María Fernanda Pérez"
                  >
                </div>
              </div>

              <div class="col-sm-5">
                <label for="clientCedula" class="form-label fw-bold small">Número de Cédula (Solo números) *</label>
                <div class="input-group">
                  <span class="input-group-text bg-light"><i class="bi bi-person-vcard"></i></span>
                  <input
                    type="text"
                    inputmode="numeric"
                    class="form-control"
                    id="clientCedula"
                    name="client_cedula"
                    required
                    minlength="6"
                    maxlength="10"
                    pattern="^[0-9]{6,10}$"
                    title="Solo se permiten números (sin letras ni puntos)"
                    placeholder="Ej. 12345678"
                  >
                </div>
              </div>
            </div>

            <div class="mb-3">
              <label for="clientPhone" class="form-label fw-bold small">Teléfono de Contacto (Solo números)</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-telephone"></i></span>
                <input
                  type="tel"
                  inputmode="numeric"
                  class="form-control"
                  id="clientPhone"
                  name="client_phone"
                  minlength="7"
                  maxlength="15"
                  pattern="^[0-9]{7,15}$"
                  title="Solo se permiten números"
                  placeholder="Ej. 04121234567"
                >
              </div>
            </div>

            <div class="mb-3">
              <label for="serviceType" class="form-label fw-bold small">¿Qué servicio deseas solicitar? *</label>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-eyeglasses"></i></span>
                <select class="form-select" id="serviceType" name="service_type" required>
                  <option value="Examen Optométrico (Sin costo por compra en tienda)">Examen Optométrico — Sin costo al comprar en tienda (Lunes a Sábado)</option>
                  <option value="Consulta Oftalmológica (Previa Cita)">Consulta Oftalmológica — Previa Cita (Lunes y Miércoles)</option>
                  <option value="Cotizar Cristales (Foto Blue / Progresivos)">Cotizar Foto Blue o Cristales Progresivos (Lunes a Sábado)</option>
                  <option value="Ya tengo mi fórmula y quiero cotizar lentes">Ya tengo mi fórmula — Quiero cotizar (Lunes a Sábado)</option>
                  <option value="Consultar catálogo de monturas disponibles">Consultar catálogo de monturas (Lunes a Sábado)</option>
                </select>
              </div>
            </div>

            <div class="mb-3">
              <div class="d-flex justify-content-between align-items-center mb-1">
                <label for="preferredDay" class="form-label fw-bold small mb-0">Día preferido (Turno de la Tarde) *</label>
                <span class="badge bg-secondary bg-opacity-10 text-dark border small" id="dayHelperBadge">Disponible: Lunes a Sábado</span>
              </div>
              <div class="input-group">
                <span class="input-group-text bg-light"><i class="bi bi-calendar-event"></i></span>
                <select class="form-select" id="preferredDay" name="preferred_day" required>
                  <option value="Lunes (Turno de la Tarde)" data-ophtha="true">Lunes — Óptica y Consulta Oftalmológica</option>
                  <option value="Martes (Turno de la Tarde)" data-ophtha="false">Martes — Examen Optométrico y Óptica</option>
                  <option value="Miércoles (Turno de la Tarde)" data-ophtha="true">Miércoles — Óptica y Consulta Oftalmológica</option>
                  <option value="Jueves (Turno de la Tarde)" data-ophtha="false">Jueves — Examen Optométrico y Óptica</option>
                  <option value="Viernes (Turno de la Tarde)" data-ophtha="false">Viernes — Examen Optométrico y Óptica</option>
                  <option value="Sábado (Turno de la Tarde)" data-ophtha="false">Sábado — Examen Optométrico y Óptica</option>
                </select>
              </div>
            </div>

            <div class="mb-4">
              <label for="clientNotes" class="form-label fw-bold small">Observaciones o detalles de tu fórmula (Opcional)</label>
              <textarea class="form-control" id="clientNotes" name="client_notes" rows="2" maxlength="350" placeholder="Ej. Deseo cotizar Cristales Progresivos o Foto Blue..."></textarea>
            </div>

            <button type="submit" id="bookingSubmitBtn" class="btn btn-eos-primary btn-lg w-100 rounded-pill d-inline-flex align-items-center justify-content-center gap-2">
              <i class="bi bi-whatsapp"></i>
              <span>Enviar Solicitud a WhatsApp</span>
            </button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Seccion de Ubicacion y Mapa en Barquisimeto -->
<section class="py-5" id="ubicacion">
  <div class="container">
    <div class="eos-location-banner rounded-4 overflow-hidden shadow">
      <div class="row g-0">
        <div class="col-lg-5 p-4 p-xl-5 d-flex flex-column justify-content-center text-white">
          <span class="eos-eyebrow eos-eyebrow-dark align-self-start">Visítanos en Barquisimeto</span>
          <h2 class="h3 fw-bold mt-2 mb-3">Encuéntranos en el centro de la ciudad</h2>

          <div class="location-address-card p-3 rounded-3 mb-4">
            <strong class="d-block text-white mb-1"><?= e((string) config('app.name')) ?></strong>
            <p class="small mb-0 text-secondary-light">
              <?= e((string) config('location.address')) ?><br>
              <?= e((string) config('location.city')) ?>, Venezuela.
            </p>
          </div>

          <div class="d-flex flex-wrap gap-2 mb-4">
            <span class="badge bg-white bg-opacity-10 fw-normal px-3 py-2 rounded-pill">
              <i class="bi bi-clock me-1 text-white"></i>Atención: Turno de la Tarde
            </span>
            <span class="badge bg-white bg-opacity-10 fw-normal px-3 py-2 rounded-pill">
              <i class="bi bi-eye me-1 text-white"></i>Examen Optométrico Sin Costo (con tu compra en tienda)
            </span>
            <span class="badge bg-white bg-opacity-10 fw-normal px-3 py-2 rounded-pill">
              <i class="bi bi-credit-card me-1 text-white"></i>Múltiples métodos de pago
            </span>
          </div>

          <div class="d-flex flex-wrap gap-2">
            <a href="<?= e((string) config('location.maps_url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-light fw-bold rounded-pill px-4 d-inline-flex align-items-center gap-2">
              <i class="bi bi-map"></i>
              <span>Abrir en Google Maps</span>
            </a>
            <a href="<?= e((string) config('instagram.url')) ?>" target="_blank" rel="noopener noreferrer" class="btn btn-outline-light rounded-pill px-4 d-inline-flex align-items-center gap-2">
              <i class="bi bi-instagram"></i>
              <span><?= e((string) config('instagram.handle')) ?></span>
            </a>
          </div>
        </div>

        <div class="col-lg-7">
          <iframe
            title="Ubicación de EOS Óptica en Carrera 19 con Calle 35, Barquisimeto"
            src="<?= e((string) config('location.maps_embed')) ?>"
            class="w-100 h-100 border-0 eos-grayscale-map"
            style="min-height: 380px;"
            loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"
          ></iframe>
        </div>
      </div>
    </div>
  </div>
</section>
