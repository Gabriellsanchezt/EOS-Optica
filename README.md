# EOS Óptica (@eosoptica) — Portal Web MVC (Lista para Hosting)

Sitio web institucional, catálogo interactivo, simulador óptico y sistema de agendamiento de citas para **EOS Óptica Barquisimeto** (`@eosoptica`), desarrollado bajo arquitectura **MVC en PHP 8**, **Bootstrap 5.3** e íconos vectoriales en código puro (`Bootstrap Icons`).

---

## Estructura del Proyecto

```text
eosoptica/
├── app/
│   ├── Controllers/
│   │   ├── BookingController.php   # Validación, normalización de cédula, persistencia y ticket WhatsApp
│   │   └── HomeController.php      # Controlador principal y endpoints JSON (/api/catalog, /api/lenses)
│   ├── Core/
│   │   ├── Controller.php          # Controlador base MVC
│   │   ├── Request.php             # Resolución multi-modo (mod_rewrite, PATH_INFO y ?route=)
│   │   ├── Router.php              # Enrutador con captura de errores 404/500
│   │   └── View.php                # Motor de vistas y layouts
│   ├── Helpers/
│   │   └── helpers.php             # Helpers de URL, detección HTTPS/Cloudflare y cache-busting
│   ├── Models/
│   │   ├── Catalog.php             # Catálogo de monturas y especificaciones técnicas
│   │   ├── Faq.php                 # Preguntas frecuentes
│   │   ├── LensTechnology.php      # Datos del simulador AR Blue / Foto Blue
│   │   ├── Ophthalmology.php       # Información clínica de oftalmología
│   │   └── Service.php             # Servicios ópticos y pilares
│   └── Views/
│       ├── errors/                 # Vistas 404 y 500
│       ├── home/index.php          # Vista principal del landing page
│       ├── layouts/main.php        # Layout maestro con SEO y Schema.org
│       └── partials/               # Navbar y Footer
├── assets/                         # Recursos estáticos (CSS, JS, Logos oficiales)
├── config/
│   └── config.php                  # Configuración centralizada del negocio
├── public/                         # Punto de entrada público y espejo de assets
├── storage/                        # Respaldo privado de solicitudes (bookings.json)
├── vendor/                         # Autoloader PSR-4 autónomo (no requiere consola SSH)
├── .htaccess                       # Reglas Apache/LiteSpeed para hosting compartido
└── index.php                       # Punto de entrada raíz
```

---

## Despliegue en Hosting (cPanel / Hostinger / Apache / LiteSpeed)

1. **Subida directa a `public_html`**:
   - Comprime todo el contenido de la carpeta `eosoptica` en un archivo `.zip`.
   - Súbelo y descomprímelo directamente dentro de `public_html` (o en un subdirectorio si lo deseas).
   - **No requiere consola SSH ni ejecutar `composer install`**, ya que `vendor/autoload.php` incorpora un cargador PSR-4 autónomo.
2. **Detección Automática de Dominio y SSL**:
   - El sistema detecta automáticamente el dominio, subcarpetas y certificados HTTPS (incluyendo Cloudflare y proxies de cPanel).
3. **Respaldo de Citas**:
   - Cada solicitud enviada desde el formulario genera un código único (`EOS-AAMMDD-XXXX`), se respalda en `storage/bookings.json` (protegido contra acceso público) y redirige al WhatsApp oficial `+58 412-9515387`.
