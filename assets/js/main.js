/**
 * EOS Optica - Frontend Controller (Arquitectura MVC Resiliente para Hosting)
 * Paleta Blanco, Negro y Gris • Sin emojis • Iconos Bootstrap Icons en codigo puro.
 */
document.addEventListener('DOMContentLoaded', () => {
  const waNumber = document.body.getAttribute('data-wa-number') || '584129515387';

  // 0. Cerrar automaticamente el menu hamburguesa en moviles al pulsar un enlace
  const navCollapseEl = document.getElementById('eosNavbarContent');
  if (navCollapseEl) {
    navCollapseEl.querySelectorAll('a.nav-link, a.btn').forEach(link => {
      link.addEventListener('click', () => {
        if (navCollapseEl.classList.contains('show') && window.bootstrap) {
          const bsCollapse = window.bootstrap.Collapse.getInstance(navCollapseEl) || new window.bootstrap.Collapse(navCollapseEl, { toggle: false });
          bsCollapse.hide();
        }
      });
    });
  }

  // 1. Simulador Interactivo de Cristales (Datos cargados desde el Modelo MVC)
  const lensDataEl = document.getElementById('eosLensDataJson');
  let lensData = {};
  if (lensDataEl) {
    try {
      lensData = JSON.parse(lensDataEl.textContent);
    } catch (err) {
      console.error('Error parseando datos del simulador:', err);
    }
  }

  const lensButtons = document.querySelectorAll('.lens-selector-btn');
  const sunSlider = document.getElementById('sunSlider');
  const sunValueLabel = document.getElementById('sunValueLabel');
  const leftLens = document.getElementById('leftLens');
  const rightLens = document.getElementById('rightLens');
  const leftGlare = document.getElementById('leftGlare');
  const rightGlare = document.getElementById('rightGlare');
  const leftReflex = document.getElementById('leftReflex');
  const rightReflex = document.getElementById('rightReflex');
  const leftKetenOverlay = document.getElementById('leftKetenOverlay');
  const rightKetenOverlay = document.getElementById('rightKetenOverlay');
  const leftLensBadge = document.getElementById('leftLensBadge');
  const rightLensBadge = document.getElementById('rightLensBadge');
  const ketenStageBadge = document.getElementById('ketenStageBadge');
  const ketenStageText = document.getElementById('ketenStageText');
  const ketenLegendBar = document.getElementById('ketenLegendBar');
  const ketenCorridorMetric = document.getElementById('ketenCorridorMetric');
  const specTitle = document.getElementById('specTitle');
  const specDesc = document.getElementById('specDesc');
  const meterLabel1 = document.getElementById('meterLabel1');
  const meterLabel2 = document.getElementById('meterLabel2');
  const meterLabel3 = document.getElementById('meterLabel3');
  const meterBlue = document.getElementById('meterBlue');
  const meterGlare = document.getElementById('meterGlare');
  const meterPhoto = document.getElementById('meterPhoto');
  const meterBlueVal = document.getElementById('meterBlueVal');
  const meterGlareVal = document.getElementById('meterGlareVal');
  const meterPhotoVal = document.getElementById('meterPhotoVal');
  const stageCaption = document.getElementById('stageCaption');
  const stageConditionBadge = document.getElementById('stageConditionBadge');
  const stageConditionIcon = document.getElementById('stageConditionIcon');
  const stageBg = document.getElementById('stageBg');
  const quoteLensBtn = document.getElementById('quoteLensBtn');

  let currentLens = 'ar-blue';

  function applyKetenAberration(overlayEl, progConfig) {
    if (!overlayEl || !progConfig) return;
    overlayEl.querySelectorAll('.keten-aberration').forEach(sideEl => {
      sideEl.style.width = `${progConfig.side_width}%`;
      sideEl.style.backdropFilter = `blur(${progConfig.blur_px}px)`;
      sideEl.style.opacity = `${progConfig.blur_opacity}`;
    });
  }

  function updateSimulator() {
    if (!sunSlider || !lensData[currentLens]) return;

    const uvVal = parseInt(sunSlider.value, 10);
    const info = lensData[currentLens];

    specTitle.textContent = info.full_title;
    specDesc.textContent = info.description;

    if (info.metric_labels) {
      if (meterLabel1) meterLabel1.textContent = info.metric_labels.m1;
      if (meterLabel2) meterLabel2.textContent = info.metric_labels.m2;
      if (meterLabel3) meterLabel3.textContent = info.metric_labels.m3;
    }

    meterBlue.style.width = `${info.metrics.blue_block}%`;
    meterGlare.style.width = `${info.metrics.glare_reduction}%`;
    meterPhoto.style.width = `${info.metrics.photochromic}%`;

    if (meterBlueVal) meterBlueVal.textContent = `${info.metrics.blue_block}%`;
    if (meterGlareVal) meterGlareVal.textContent = `${info.metrics.glare_reduction}%`;
    if (meterPhotoVal) meterPhotoVal.textContent = `${info.metrics.photochromic}%`;

    stageCaption.textContent = info.caption;
    quoteLensBtn.href = `https://wa.me/${waNumber}?text=${encodeURIComponent(info.wa_message)}`;

    if (uvVal < 30) {
      sunValueLabel.textContent = `Interior (${uvVal}% UV)`;
      stageConditionBadge.textContent = 'Entorno Digital / Oficina Interior';
      if (stageConditionIcon) stageConditionIcon.className = 'bi bi-display text-white';
    } else if (uvVal < 70) {
      sunValueLabel.textContent = `Exterior Templado (${uvVal}% UV)`;
      stageConditionBadge.textContent = 'Exterior Luminoso / Conducción';
      if (stageConditionIcon) stageConditionIcon.className = 'bi bi-cloud-sun text-white';
    } else {
      sunValueLabel.textContent = `Sol Intenso (${uvVal}% UV)`;
      stageConditionBadge.textContent = 'Sol Radiante de Barquisimeto (Alta UV)';
      if (stageConditionIcon) stageConditionIcon.className = 'bi bi-brightness-high-fill text-white';
    }

    const bgBrightness = 0.85 + (uvVal / 100) * 0.35;
    stageBg.style.filter = `brightness(${bgBrightness.toFixed(2)})`;

    // Control de Geometria Progresiva Keten (Baja, Media y Alta Gama)
    if (info.progressive) {
      if (leftKetenOverlay) {
        leftKetenOverlay.classList.remove('d-none');
        applyKetenAberration(leftKetenOverlay, info.progressive);
      }
      if (rightKetenOverlay) {
        rightKetenOverlay.classList.remove('d-none');
        applyKetenAberration(rightKetenOverlay, info.progressive);
      }
      if (ketenStageBadge) {
        ketenStageBadge.classList.remove('d-none');
        ketenStageBadge.classList.add('d-inline-flex');
      }
      if (ketenStageText) {
        ketenStageText.textContent = `Progresivo Keten: ${info.tier_label} (${info.tier_short})`;
      }
      if (ketenLegendBar) {
        ketenLegendBar.classList.remove('d-none');
        ketenLegendBar.classList.add('d-inline-flex');
      }
      if (ketenCorridorMetric) {
        ketenCorridorMetric.textContent = `Campo útil sin distorsión: ${info.progressive.corridor_pct}%`;
      }
      if (leftLensBadge) {
        leftLensBadge.innerHTML = `<i class="bi bi-eye me-1"></i>${info.progressive.badge_left}`;
      }
      if (rightLensBadge) {
        rightLensBadge.innerHTML = `<i class="bi bi-aspect-ratio me-1"></i>${info.progressive.badge_right}`;
      }

      leftLens.style.backgroundColor = 'rgba(255, 255, 255, 0.05)';
      rightLens.style.backgroundColor = 'rgba(255, 255, 255, 0.05)';
      leftLens.style.backdropFilter = 'contrast(1.16) brightness(1.04)';
      rightLens.style.backdropFilter = 'contrast(1.16) brightness(1.04)';
      leftReflex.style.opacity = '0.75';
      rightReflex.style.opacity = '0.75';
      leftGlare.style.opacity = '0.05';
      rightGlare.style.opacity = '0.05';
    } else {
      if (leftKetenOverlay) leftKetenOverlay.classList.add('d-none');
      if (rightKetenOverlay) rightKetenOverlay.classList.add('d-none');
      if (ketenStageBadge) {
        ketenStageBadge.classList.add('d-none');
        ketenStageBadge.classList.remove('d-inline-flex');
      }
      if (ketenLegendBar) {
        ketenLegendBar.classList.add('d-none');
        ketenLegendBar.classList.remove('d-inline-flex');
      }
      if (leftLensBadge) {
        leftLensBadge.innerHTML = '<i class="bi bi-eye me-1"></i>Visión EOS';
      }
      if (rightLensBadge) {
        rightLensBadge.innerHTML = '<i class="bi bi-hd me-1"></i>Nitidez HD';
      }

      if (currentLens === 'ar-blue') {
        leftLens.style.backgroundColor = 'rgba(255, 255, 255, 0.06)';
        rightLens.style.backgroundColor = 'rgba(255, 255, 255, 0.06)';
        leftLens.style.backdropFilter = 'contrast(1.14) brightness(1.04)';
        rightLens.style.backdropFilter = 'contrast(1.14) brightness(1.04)';
        leftReflex.style.opacity = '1';
        rightReflex.style.opacity = '1';
        leftGlare.style.opacity = '0.06';
        rightGlare.style.opacity = '0.06';
      } else if (currentLens === 'foto-blue') {
        const darkOpacity = 0.12 + (uvVal / 100) * 0.72;
        leftLens.style.backgroundColor = `rgba(10, 10, 10, ${darkOpacity.toFixed(2)})`;
        rightLens.style.backgroundColor = `rgba(10, 10, 10, ${darkOpacity.toFixed(2)})`;
        leftLens.style.backdropFilter = 'contrast(1.12)';
        rightLens.style.backdropFilter = 'contrast(1.12)';
        leftReflex.style.opacity = '0.85';
        rightReflex.style.opacity = '0.85';
        leftGlare.style.opacity = '0.05';
        rightGlare.style.opacity = '0.05';
      } else {
        leftLens.style.backgroundColor = 'rgba(255, 255, 255, 0.08)';
        rightLens.style.backgroundColor = 'rgba(255, 255, 255, 0.08)';
        leftLens.style.backdropFilter = 'contrast(0.95)';
        rightLens.style.backdropFilter = 'contrast(0.95)';
        leftReflex.style.opacity = '0';
        rightReflex.style.opacity = '0';
        leftGlare.style.opacity = '0.88';
        rightGlare.style.opacity = '0.88';
      }
    }
  }

  lensButtons.forEach(btn => {
    btn.addEventListener('click', () => {
      lensButtons.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');
      currentLens = btn.getAttribute('data-lens') || 'ar-blue';

      if (currentLens === 'foto-blue' && sunSlider && parseInt(sunSlider.value, 10) < 40) {
        sunSlider.value = '78';
      }
      updateSimulator();
    });
  });

  if (sunSlider) {
    sunSlider.addEventListener('input', updateSimulator);
    updateSimulator();
  }

  // 2. Filtro Dinamico del Catalogo de Monturas y Modal de Ficha Tecnica
  const filterBtns = document.querySelectorAll('.eos-filter-btn');
  const catalogItems = document.querySelectorAll('.catalog-item');

  filterBtns.forEach(btn => {
    btn.addEventListener('click', () => {
      filterBtns.forEach(b => b.classList.remove('active'));
      btn.classList.add('active');

      const category = btn.getAttribute('data-filter') || 'all';
      catalogItems.forEach(item => {
        const itemCat = item.getAttribute('data-category');
        if (category === 'all' || itemCat === category) {
          item.classList.remove('d-none');
        } else {
          item.classList.add('d-none');
        }
      });
    });
  });

  // Modal de Ficha Tecnica
  const catalogDataEl = document.getElementById('eosCatalogDataJson');
  let catalogList = [];
  if (catalogDataEl) {
    try {
      catalogList = JSON.parse(catalogDataEl.textContent);
    } catch (err) {
      console.error('Error parseando catálogo:', err);
    }
  }

  const quickViewModalEl = document.getElementById('frameQuickViewModal');
  let bsQuickModal = null;
  if (quickViewModalEl && window.bootstrap) {
    bsQuickModal = new window.bootstrap.Modal(quickViewModalEl);
  }

  let selectedModalFrame = null;

  document.querySelectorAll('.btn-frame-spec').forEach(btn => {
    btn.addEventListener('click', () => {
      const id = parseInt(btn.getAttribute('data-frame-id') || '0', 10);
      const item = catalogList.find(f => f.id === id);
      if (!item) return;

      selectedModalFrame = item;
      const imgEl = document.getElementById('modalFrameImg');
      if (imgEl) {
        imgEl.src = item.image;
        imgEl.alt = item.name;
      }
      const badgeEl = document.getElementById('modalFrameBadge');
      if (badgeEl) badgeEl.textContent = item.badge;

      const matEl = document.getElementById('modalFrameMaterial');
      if (matEl) matEl.textContent = item.material;

      const nameEl = document.getElementById('modalFrameName');
      if (nameEl) nameEl.textContent = item.name;

      const descEl = document.getElementById('modalFrameDesc');
      if (descEl) descEl.textContent = item.description;

      if (item.specs) {
        const sEst = document.getElementById('modalSpecEstructura');
        const sRos = document.getElementById('modalSpecRostro');
        const sCri = document.getElementById('modalSpecCristales');
        const sMed = document.getElementById('modalSpecMedidas');
        if (sEst) sEst.textContent = item.specs.estructura || '';
        if (sRos) sRos.textContent = item.specs.rostro || '';
        if (sCri) sCri.textContent = item.specs.cristales || '';
        if (sMed) sMed.textContent = item.specs.medidas || '';
      }

      const waDirect = document.getElementById('modalWaDirectBtn');
      if (waDirect) {
        waDirect.href = `https://wa.me/${waNumber}?text=${encodeURIComponent(item.wa_query)}`;
      }

      if (bsQuickModal) {
        bsQuickModal.show();
      }
    });
  });

  const modalSelectFrameBtn = document.getElementById('modalSelectFrameBtn');
  if (modalSelectFrameBtn) {
    modalSelectFrameBtn.addEventListener('click', () => {
      if (bsQuickModal) bsQuickModal.hide();
      const notesEl = document.getElementById('clientNotes');
      const serviceSelectEl = document.getElementById('serviceType');
      if (serviceSelectEl) {
        serviceSelectEl.value = 'Consultar catálogo de monturas disponibles';
        syncAvailableDays();
      }
      if (notesEl && selectedModalFrame) {
        notesEl.value = `Me interesa la montura: ${selectedModalFrame.name} (${selectedModalFrame.material}).`;
      }
      const agendarSection = document.getElementById('agendar');
      if (agendarSection) {
        agendarSection.scrollIntoView({ behavior: 'smooth' });
      }
    });
  }

  // 3. Sincronizacion entre Servicio Seleccionado y Dias Disponibles
  const serviceSelect = document.getElementById('serviceType');
  const preferredDaySelect = document.getElementById('preferredDay');
  const dayHelperBadge = document.getElementById('dayHelperBadge');

  function syncAvailableDays() {
    if (!serviceSelect || !preferredDaySelect) return;

    const isOphthalmology = serviceSelect.value.includes('Oftalmológica');
    const options = Array.from(preferredDaySelect.options);

    options.forEach(opt => {
      const supportsOphtha = opt.getAttribute('data-ophtha') === 'true';
      if (isOphthalmology && !supportsOphtha) {
        opt.disabled = true;
        opt.hidden = true;
      } else {
        opt.disabled = false;
        opt.hidden = false;
      }
    });

    if (isOphthalmology) {
      if (dayHelperBadge) {
        dayHelperBadge.textContent = 'Oftalmología: Solo Lunes y Miércoles';
      }
      const currentOpt = preferredDaySelect.options[preferredDaySelect.selectedIndex];
      if (!currentOpt || currentOpt.disabled) {
        const firstValid = options.find(o => !o.disabled);
        if (firstValid) preferredDaySelect.value = firstValid.value;
      }
    } else {
      if (dayHelperBadge) {
        dayHelperBadge.textContent = 'Disponible: Lunes a Sábado';
      }
    }
  }

  if (serviceSelect) {
    serviceSelect.addEventListener('change', syncAvailableDays);
    syncAvailableDays();
  }

  document.querySelectorAll('[data-select-service]').forEach(trigger => {
    trigger.addEventListener('click', () => {
      const val = trigger.getAttribute('data-select-service');
      if (serviceSelect && val) {
        serviceSelect.value = val;
        syncAvailableDays();
      }
    });
  });

  // 4. Restriccion en tiempo real: Campos de texto SOLO letras y Campos numericos SOLO numeros
  const nameInput = document.getElementById('clientName');
  const cedulaInput = document.getElementById('clientCedula');
  const phoneInput = document.getElementById('clientPhone');

  if (nameInput) {
    nameInput.addEventListener('input', () => {
      const cleaned = nameInput.value.replace(/[^A-Za-zÁÉÍÓÚáéíóúÑñÜü\s]/g, '');
      if (nameInput.value !== cleaned) {
        nameInput.value = cleaned;
      }
    });
  }

  if (cedulaInput) {
    cedulaInput.addEventListener('input', () => {
      const cleaned = cedulaInput.value.replace(/[^0-9]/g, '');
      if (cedulaInput.value !== cleaned) {
        cedulaInput.value = cleaned;
      }
    });
  }

  if (phoneInput) {
    phoneInput.addEventListener('input', () => {
      const cleaned = phoneInput.value.replace(/[^0-9]/g, '');
      if (phoneInput.value !== cleaned) {
        phoneInput.value = cleaned;
      }
    });
  }

  // 5. Envio Ultra-Resiliente del Formulario de Citas (Multi-ruta en Hosting + Fallback directo)
  const bookingForm = document.getElementById('eosBookingForm');
  const bookingAlert = document.getElementById('bookingAlert');
  const submitBtn = document.getElementById('bookingSubmitBtn');

  function buildFallbackWhatsAppUrl(payload) {
    let msg = `*SOLICITUD DE ATENCION - EOS OPTICA BARQUISIMETO*\n`;
    msg += `----------------------------------------\n`;
    msg += `*Paciente:* ${payload.client_name}\n`;
    msg += `*Cedula:* ${payload.client_cedula}\n`;
    if (payload.client_phone) {
      msg += `*Telefono:* ${payload.client_phone}\n`;
    }
    msg += `*Servicio:* ${payload.service_type}\n`;
    msg += `*Dia solicitado:* ${payload.preferred_day}\n`;
    msg += `*Turno de atencion:* Turno de la Tarde\n`;
    if (payload.client_notes) {
      msg += `*Observaciones:* ${payload.client_notes}\n`;
    }
    msg += `----------------------------------------\n`;
    msg += `Enviado desde el portal web de EOS Optica (@eosoptica)`;

    return `https://wa.me/${waNumber}?text=${encodeURIComponent(msg)}`;
  }

  function showAlert(type, message, waUrl = null) {
    if (!bookingAlert) return;
    bookingAlert.className = `alert alert-dark d-flex flex-column gap-2 small`;
    const iconClass = type === 'danger' ? 'bi-exclamation-octagon-fill' : 'bi-check-circle-fill';
    let html = `<div class="d-flex align-items-center gap-2"><i class="bi ${iconClass}"></i><span>${message}</span></div>`;
    if (waUrl) {
      html += `<a href="${waUrl}" target="_blank" rel="noopener noreferrer" class="btn btn-dark btn-sm rounded-pill align-self-start px-3 mt-1 d-inline-flex align-items-center gap-2"><i class="bi bi-whatsapp"></i><span>Abrir WhatsApp Ahora</span></a>`;
    }
    bookingAlert.innerHTML = html;
  }

  async function postBookingRequest(url, payload) {
    const response = await fetch(url, {
      method: 'POST',
      headers: { 'Content-Type': 'application/json', 'Accept': 'application/json' },
      body: JSON.stringify(payload),
    });
    const result = await response.json();
    return { ok: response.ok, status: response.status, result };
  }

  if (bookingForm) {
    bookingForm.addEventListener('submit', async (e) => {
      e.preventDefault();

      const rawName = (nameInput?.value || '').trim();
      const rawCedula = (cedulaInput?.value || '').trim();
      const rawPhone = (phoneInput?.value || '').trim();

      const onlyLettersRegex = /^[A-Za-zÁÉÍÓÚáéíóúÑñÜü\s]+$/;
      const onlyNumbersCedulaRegex = /^[0-9]{6,10}$/;
      const onlyNumbersPhoneRegex = /^[0-9]{7,15}$/;

      if (!rawName || rawName.length < 3 || !onlyLettersRegex.test(rawName)) {
        showAlert('danger', 'El campo Nombre y Apellido solo permite letras y espacios (mínimo 3 letras, sin números).');
        nameInput?.focus();
        return;
      }

      if (!rawCedula || !onlyNumbersCedulaRegex.test(rawCedula)) {
        showAlert('danger', 'El Número de Cédula solo permite números (entre 6 y 10 dígitos, sin letras).');
        cedulaInput?.focus();
        return;
      }

      if (rawPhone !== '' && !onlyNumbersPhoneRegex.test(rawPhone)) {
        showAlert('danger', 'El Teléfono de Contacto solo permite números (entre 7 y 15 dígitos, sin letras).');
        phoneInput?.focus();
        return;
      }

      const payload = {
        website_url: (document.getElementById('websiteUrl')?.value || '').trim(),
        client_name: rawName,
        client_cedula: rawCedula,
        client_phone: rawPhone,
        service_type: (document.getElementById('serviceType')?.value || '').trim(),
        preferred_day: (document.getElementById('preferredDay')?.value || '').trim(),
        client_notes: (document.getElementById('clientNotes')?.value || '').trim(),
      };

      if (submitBtn) {
        submitBtn.disabled = true;
      }

      try {
        // Intento 1: Ruta limpia MVC (/api/booking)
        let res;
        try {
          res = await postBookingRequest(bookingForm.action, payload);
        } catch {
          // Intento 2: Ruta por query-string (?route=/api/booking) por si el hosting restringe mod_rewrite
          const fallbackEndpoint = bookingForm.getAttribute('data-fallback-action') || '?route=/api/booking';
          res = await postBookingRequest(fallbackEndpoint, payload);
        }

        if (res && res.ok && res.result?.whatsapp_url) {
          showAlert('success', res.result.message || 'Solicitud procesada correctamente.', res.result.whatsapp_url);
          window.open(res.result.whatsapp_url, '_blank', 'noopener');
        } else if (res && res.status === 422 && res.result?.message) {
          showAlert('danger', res.result.message);
        } else {
          throw new Error('Activando respaldo directo');
        }
      } catch {
        // Intento 3: Respaldo autonomo en navegador (100% disponibilidad garantizada)
        const fallbackUrl = buildFallbackWhatsAppUrl(payload);
        showAlert('success', 'Solicitud lista. Si WhatsApp no se abrió automáticamente, pulsa el botón abajo:', fallbackUrl);
        window.open(fallbackUrl, '_blank', 'noopener');
      } finally {
        if (submitBtn) {
          submitBtn.disabled = false;
        }
      }
    });
  }
});
