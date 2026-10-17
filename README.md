# EOS Óptica — Plataforma de Oftalmología, Laboratorio Óptico Interactivo & Sistema de Citas

> **Portal Web de Oftalmología y Óptica en Arquitectura MVC con PHP 8 & Bootstrap 5**  
> Optometría Computarizada, Cristales Foto Blue & Progresivos (Gama Baja, Media y Alta), Catálogo de Monturas y Consulta Oftalmológica Integral.  
> **Ubicación:** Carrera 19 esquina con Calle 35, Edificio Carache, PB Locales 3 y 4, Barquisimeto, Estado Lara, Venezuela.  
> **WhatsApp Oficial:** [+58 412-9515387](https://wa.me/584129515387)  
> **Instagram:** [@eosoptica](https://www.instagram.com/eosoptica/)

---

## ¿Qué hace esta plataforma? (Propósito del Proyecto)

**EOS Óptica** es una aplicación web diseñada para digitalizar la experiencia de atención al paciente y asesoría óptica de la sede física de **EOS Óptica en Barquisimeto**. El sistema resuelve tres necesidades reales del negocio en una sola interfaz:

1. **Educación Visual Interactiva (Laboratorio Interactivo EOS)**: Permite que el paciente comprenda visualmente y en tiempo real la diferencia entre **Cristales Foto Blue** (fotocromáticos con filtro azul), **Cristales Progresivos** (comparando con la barra deslizable entre **Gama Baja, Gama Media y Gama Alta** para ver la amplitud del corredor de lejos, intermedio y cerca y la reducción de distorsión lateral) y un **Cristal Convencional** de referencia.
2. **Exhibición de Catálogo con Fichas Técnicas**: Presenta las líneas de monturas (*Tendencia & Acetato*, *Ejecutivas & Metal*, *Sol & Foto Blue*, *Juvenil & TR90*) con filtrado instantáneo sin recargar la página y un visor modal con especificaciones de calibre, puente, varilla, material y tipo de rostro ideal.
3. **Gestión y Agendamiento Inteligente**: Automatiza la recepción de solicitudes para **Examen Optométrico (Sin Costo solo y cuando compren en tienda)** y **Consulta Oftalmológica Especializada (Previa Cita)**, validando reglas de negocio reales (días hábiles por especialidad, turno vespertino fijo, validación estricta de cédula e identidad) antes de generar un ticket único respaldado en el servidor y conectado con WhatsApp.

---

## Módulos y Funcionalidades Principales

### 1. Laboratorio Interactivo EOS (`Foto Blue` y `Cristales Progresivos`)
- **Comparador de Tratamientos y Multifocales en Vivo**:
  - **Cristal Foto Blue vs. Convencional**: Simula el paso desde un entorno de oficina interior hasta el sol radiante de Barquisimeto mediante el control deslizable de radiación UV (`0%` a `100%`), oscureciendo dinámicamente los lentes cuando está activo el modo **Foto Blue**.
  - **Cristales Progresivos (Gama Baja, Media y Alta)**: Mediante un único botón y la misma barra deslizable, simula gráficamente sobre los cristales las zonas de enfoque (**Lejos, Intermedia y Cerca**) y las áreas de aberración periférica lateral:
    - **Progresivo • Gama Baja**: *Corredor clásico funcional para lejos, intermedio y cerca* (`42%` de amplitud útil).
    - **Progresivo • Gama Media**: *Campo intermedio ampliado y menor distorsión lateral* (`68%` de amplitud útil).
    - **Progresivo • Gama Alta**: *Visión panorámica FreeForm HD y adaptación inmediata* (`94%` de amplitud útil).
- **Métricas Técnicas Dinámicas**: Actualiza tanto las etiquetas como las barras de progreso según el cristal o gama seleccionada y genera el enlace de cotización directa para WhatsApp.

### 2. Catálogo Interactivo de Monturas con Modal de Ficha Técnica
- **Filtrado Dinámico por Categoría**: Clasificación instantánea entre monturas de acetato, metálicas ejecutivas, solares UV400 y monturas flexibles TR90 para niños/jóvenes.
- **Modal de Especificaciones (`#frameQuickViewModal`)**: Al pulsar en **Ficha**, se despliega una ventana detallada con:
  - Estructura y materiales de fabricación.
  - Recomendación de visagismo (tipo de rostro ideal).
  - Compatibilidad de fórmulas (Visión Sencilla, Bifocales, Progresivos Digitales).
  - Dimensiones milimétricas (Calibre, Puente y Varilla).
- **Precarga Inteligente al Formulario**: Desde la ficha técnica, el botón *"Agendar con esta montura"* cierra el modal, selecciona automáticamente el servicio en el formulario inferior, escribe el modelo exacto en las observaciones y desplaza suavemente la pantalla hacia la reserva.

### 3. Unidad de Oftalmología y Triaje Visual
- **Información de Consulta Especializada**: Detalla la atención médica oftalmológica (fondo de ojo, tonometría de presión intraocular, biomicroscopía y despistaje de patologías como catarata, glaucoma y síndrome de ojo seco).
- **Guía de Síntomas de Alerta**: Orienta al paciente sobre cuándo acudir a valoración médica (cefalea tras usar pantallas, visión borrosa lejana/cercana, ardor o control anual pediátrico y adulto).

### 4. Motor de Solicitud Rápida de Atención (Reglas de Negocio y Validación Cruzada)
- **Sincronización Automática de Días según Especialidad**:
  - Si el paciente elige *Examen Optométrico (Sin costo por compra en tienda)*, *Cotizar Cristales* o *Catálogo de Monturas*, el sistema habilita los días de **Lunes a Sábado**.
  - Si el paciente selecciona *Consulta Oftalmológica (Previa Cita)*, el sistema filtra y restringe automáticamente el selector **únicamente a Lunes y Miércoles**, impidiendo agendar en días donde no pasa consulta el especialista.
- **Modalidad Informativa de Turno Vespertino**: Informa de forma fija y clara que todas las evaluaciones y consultas se atienden en el **Turno de la Tarde**, incluyéndolo automáticamente en la orden sin requerir pasos adicionales del usuario.
- **Validación Cruzada en Tiempo Real y en Servidor**:
  - **Campos de Texto (*Nombre y Apellido*)**: Bloquea la escritura o pegado de números y caracteres especiales en tiempo real, permitiendo exclusivamente letras y espacios.
  - **Campos Numéricos (*Número de Cédula* y *Teléfono*)**: Activa teclado numérico en móviles (`inputmode="numeric"`) y bloquea cualquier letra, símbolo o guion tanto en el navegador como en el controlador PHP.
- **Generación de Ticket y Respaldo en Servidor (`storage/bookings.json`)**: Cada solicitud válida recibe un código único (ej. `EOS-261016-1AB2`), se almacena en el registro interno del servidor y abre WhatsApp con la ficha estructurada lista para enviar.

---

## Arquitectura MVC y Explicación del Código

El proyecto está construido desde cero bajo el patrón **Modelo-Vista-Controlador (MVC)** en **PHP 8** con tipado estricto (`declare(strict_types=1);`), autocarga **PSR-4** e íconos 100% en código vectorial (`Bootstrap Icons` y `<svg>`), sin depender de frameworks pesados:

```text
eosoptica/
│
├── app/                                 # Lógica de la aplicación (Namespace: App\)
│   ├── Controllers/                     # Controladores HTTP (Capa de Orquestación)
│   │   ├── HomeController.php           # Reúne datos de los 5 Modelos y renderiza la vista principal y APIs GET
│   │   └── BookingController.php        # Valida formularios, aplica reglas clínicas, guarda JSON y genera link WhatsApp
│   ├── Core/                            # Núcleo del mini-framework MVC propio
│   │   ├── Controller.php               # Clase abstracta base con métodos render(), json() y redirect()
│   │   ├── Request.php                  # Captura peticiones GET/POST/JSON, detecta IPs y resuelve rutas en 3 modos
│   │   ├── Router.php                   # Registra rutas HTTP, ejecuta controladores y maneja errores 404/500
│   │   └── View.php                     # Motor de plantillas con Output Buffering (ob_start) para layouts y parciales
│   ├── Helpers/                         # Funciones auxiliares globales
│   │   └── helpers.php                  # config(), base_url(), full_url(), asset() con cache-busting, wa_link(), e()
│   ├── Models/                          # Capa de Datos y Reglas de Dominio
│   │   ├── Catalog.php                  # Datos del catálogo de monturas, categorías y fichas técnicas
│   │   ├── Faq.php                      # Preguntas frecuentes de oftalmología y óptica
│   │   ├── LensTechnology.php           # Parámetros ópticos y métricas de Foto Blue y Progresivos (Baja/Media/Alta)
│   │   ├── Ophthalmology.php            # Información de la unidad oftalmológica, procedimientos y síntomas
│   │   └── Service.php                  # Pilares de valor y servicios principales de la óptica
│   └── Views/                           # Capa de Presentación (HTML5 + Bootstrap 5.3 + PHP)
│       ├── errors/
│       │   ├── 404.php                  # Vista personalizada para rutas inexistentes
│       │   └── 500.php                  # Vista de contingencia ante errores internos
│       ├── home/
│       │   └── index.php                # Vista principal (Hero, Pilares, Servicios, Simulador, Catálogo, FAQ, Citas)
│       ├── layouts/
│       │   └── main.php                 # Layout maestro (Meta SEO, OpenGraph, Schema.org Optician, Bootstrap 5)
│       └── partials/
│           ├── navbar.php               # Topbar informativa y barra de navegación sticky con logo oficial
│           └── footer.php               # Pie de página institucional con horarios, enlaces y derechos centrados
│
├── assets/                              # Recursos estáticos maestros
│   ├── css/
│   │   └── styles.css                   # Sistema de diseño monocromático y estilos del laboratorio interactivo
│   ├── img/                             # Fachada oficial (FACHADA.jpeg), logos EOS Óptica (blanco/negro) e isotipo SVG
│   └── js/
│       └── main.js                      # Controlador frontend: simulador Foto Blue/Progresivos, filtros, modal y envío triple
│
├── config/
│   └── config.php                       # Configuración centralizada (teléfonos, dirección, horarios, rutas de logos)
│
├── public/                              # Document Root público y espejo sincronizado de assets
│   ├── assets/                          # Recursos servidos en producción
│   ├── .htaccess                        # Reglas Apache/LiteSpeed para el directorio público
│   └── index.php                        # Front Controller principal con autoloader PSR-4 y cabeceras de seguridad
│
├── storage/                             # Almacenamiento privado del servidor
│   ├── .htaccess                        # Bloqueo de acceso web directo (Require all denied)
│   └── bookings.json                    # Historial respaldado de solicitudes de citas y cotizaciones
│
├── vendor/
│   └── autoload.php                     # Cargador PSR-4 autónomo (no requiere consola SSH en el hosting)
│
├── .gitignore                           # Exclusiones de control de versiones
├── .htaccess                            # Seguridad Apache, compresión GZIP, caché y enrutamiento sin bucles
├── composer.json                        # Definición del proyecto y mapeo PSR-4 (App\ -> app/)
├── index.php                            # Punto de entrada raíz para compatibilidad directa en XAMPP y cPanel
├── LICENSE                              # Licencia MIT
├── robots.txt                           # Directivas de indexación para motores de búsqueda
└── README.md                            # Documentación integral del proyecto
```

### ¿Cómo interactúan las capas del código?
1. **Ciclo de Vida de una Petición (`index.php` $\rightarrow$ `Request` $\rightarrow$ `Router`)**:
   - Toda visita entra por `index.php` / `public/index.php`, que carga el autoloader PSR-4 y las funciones de `app/Helpers/helpers.php`.
   - `App\Core\Request` analiza la URL solicitada soportando tres modos simultáneos para máxima compatibilidad en cualquier hosting: URLs limpias (`/api/booking`), `PATH_INFO` (`/index.php/api/booking`) y query string (`/?route=/api/booking`).
   - `App\Core\Router` compara el método HTTP y la ruta para invocar el controlador correspondiente o mostrar la vista `404.php` si no existe.
2. **Renderizado de la Vista Principal (`HomeController@index` $\rightarrow$ `Models` $\rightarrow$ `View`)**:
   - `HomeController` consulta los modelos estáticos (`Service`, `LensTechnology`, `Catalog`, `Ophthalmology` y `Faq`) y entrega los arreglos de datos a `App\Core\View::render('home/index')`.
   - `View::render()` inyecta el HTML generado dentro del layout maestro `app/Views/layouts/main.php`, escapando todas las salidas con `e()` (`htmlspecialchars`) para prevenir vulnerabilidades XSS.
3. **Procesamiento de Citas (`main.js` $\rightarrow$ `BookingController@store` $\rightarrow$ `storage/bookings.json`)**:
   - Cuando el paciente envía el formulario, `assets/js/main.js` valida que el nombre solo tenga letras y la cédula/teléfono solo números, y envía una petición `POST` en formato JSON a `/api/booking`.
   - `BookingController` verifica el campo oculto anti-spam (*honeypot*), vuelve a validar los tipos de datos en el servidor, comprueba que las consultas oftalmológicas solo se pidan para lunes o miércoles, genera el código `EOS-AAMMDD-XXXX`, guarda el registro en `storage/bookings.json` con bloqueo exclusivo (`LOCK_EX`) y devuelve el enlace de WhatsApp listo para abrirse.

---

## Sistema de Diseño Monocromático (Blanco, Negro y Gris)

Fiel a la identidad visual de **EOS Óptica**, la interfaz emplea una paleta estrictamente monocromática de alto contraste que transmite limpieza clínica, precisión óptica y sobriedad:

| Token CSS | Código HEX | Aplicación en la Interfaz |
| :--- | :--- | :--- |
| `--eos-white` | `#FFFFFF` | Tarjetas de servicios, barra de navegación, modales y superficies limpias |
| `--eos-bg-main` | `#F7F7F8` | Fondo general de la aplicación para descanso visual |
| `--eos-gray-100` | `#F4F4F5` | Sección de Oftalmología, avisos de turno y fondos secundarios |
| `--eos-gray-200` | `#E4E4E7` | Bordes sutiles, divisores y etiquetas (*eyebrows*) |
| `--eos-gray-600` | `#52525B` | Textos descriptivos, subtítulos y enlaces inactivos |
| `--eos-gray-800` | `#27272A` | Estados `hover` de botones principales y badges secundarios |
| `--eos-charcoal` | `#18181B` | Degradados profundos del panel de simulación óptica |
| `--eos-black` | `#0A0A0A` | Barra superior, botones primarios, títulos principales y pie de página |

### Tipografías e Iconografía
- **Títulos y Encabezados**: `Plus Jakarta Sans` (Pesos 700 y 800) combinada con acentos editoriales en cursiva `Instrument Serif`.
- **Cuerpo y Controles**: `Plus Jakarta Sans` (Pesos 400, 500 y 600).
- **Iconografía en Código Puro**: `Bootstrap Icons 1.11.3` (`<i class="bi bi-..."></i>`) y gráficos vectoriales `<svg>` (0 emojis en todo el código fuente).

---

## Rutas y Endpoints de la Aplicación

| Método | Ruta | Controlador / Acción | Descripción Funcional |
| :--- | :--- | :--- | :--- |
| `GET` | `/` | `HomeController@index` | Renderiza la plataforma completa con simulador, catálogo y formulario |
| `GET` | `/api/catalog` | `HomeController@catalogJson` | Devuelve en JSON las categorías y monturas con sus fichas técnicas |
| `GET` | `/api/lenses` | `HomeController@lensesJson` | Devuelve en JSON las tecnologías de cristales y métricas del simulador |
| `POST` | `/api/booking` | `BookingController@store` | Valida los datos del paciente, respalda la cita en JSON y genera la orden de WhatsApp |

---

## Instalación Local y Despliegue en Hosting

### Requisitos
- **PHP**: 8.0 o superior (compatible con PHP 8.1, 8.2 y 8.3).
- **Servidor Web**: Apache / LiteSpeed (XAMPP, WAMP, cPanel, Hostinger) o servidor integrado de PHP.

### Ejecución en Entorno Local (XAMPP)
1. Clonar el repositorio dentro de `C:\xampp\htdocs\`:
   ```bash
   git clone https://github.com/Gabriellsanchezt/EOS-Optica.git eosoptica
   ```
2. Iniciar el módulo **Apache** en el panel de control de XAMPP.
3. Abrir en el navegador:
   ```text
   http://localhost/eosoptica/
   ```

### Despliegue en Hosting de Producción (`cPanel` / `Hostinger`)
1. Comprimir el contenido del proyecto en un archivo `.zip` y descomprimirlo directamente dentro de `public_html` (o en un subdirectorio).
2. **Cero configuración adicional**:
   - No requiere acceso SSH ni ejecutar comandos de consola, ya que `vendor/autoload.php` incluye el cargador PSR-4 autónomo.
   - Detecta automáticamente certificados SSL/HTTPS (incluyendo Cloudflare) y aplica *cache-busting* automático a las hojas de estilo y scripts.

---

## Créditos y Contacto

- **Establecimiento**: EOS Óptica (`@eosoptica`)
- **Dirección**: Carrera 19 esquina con Calle 35, Edificio Carache, Planta Baja, Locales 3 y 4, Barquisimeto, Estado Lara, Venezuela.
- **WhatsApp de Atención**: [+58 412-9515387](https://wa.me/584129515387)
- **Instagram Oficial**: [@eosoptica](https://www.instagram.com/eosoptica/)

---

## Licencia

Este proyecto se distribuye bajo la Licencia **MIT**. Consulta el archivo [LICENSE](LICENSE) para más detalles.
