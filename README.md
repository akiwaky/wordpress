# Akiwaky Storefront Child

Tema hijo para la tienda WooCommerce de Akiwaky, basado en **Storefront**.

## Requisitos

1. WordPress con WooCommerce.
2. Tema **Storefront** instalado.

## Instalación o actualización

1. En GitHub abre **Code → Download ZIP**.
2. En WordPress ve a **Apariencia → Temas → Añadir nuevo → Subir tema**.
3. Selecciona el ZIP descargado.
4. Si WordPress detecta una versión existente, elige **Reemplazar el actual con el subido**.
5. Confirma que **Akiwaky Storefront Child** continúe activo.
6. Limpia la caché si no ves los cambios.

## Shop visual 0.3

La versión 0.3 extiende el lenguaje visual de la home a la página principal de la tienda, sin requerir bloques ni editar plantillas de WooCommerce.

- Hero editorial propio con acceso directo al catálogo.
- Tres señales de confianza bajo el hero.
- Catálogo a ancho completo en la página Shop.
- Barra de resultados y orden responsive.
- Tarjetas de producto 4:5: tres columnas en escritorio, dos en tablet y una en móvil.
- Categorías y etiquetas de producto conservan el comportamiento normal de WooCommerce.

El contenido se inserta con hooks desde `functions.php` y sus estilos viven en `assets/css/theme.css`.

## Home visual 0.2

La versión 0.2 incorpora estilos responsive para un hero y cuatro tarjetas de categoría. Las imágenes permanecen en la Biblioteca de medios; el tema solo controla su presentación.

### Hero

1. Inserta un bloque **Portada** y selecciona `hero_og`.
2. En **Avanzado → Clase(s) CSS adicional(es)** agrega `aki-home-hero`.
3. Dentro de la portada inserta un bloque **Grupo** con `aki-hero-panel`.
4. Dentro del Grupo coloca un encabezado, párrafo y botón.

### Categorías

1. Inserta un bloque **Grupo** con `aki-home-categories`.
2. Dentro coloca un encabezado, texto introductorio y un bloque **Columnas** de cuatro columnas.
3. Al bloque Columnas agrega `aki-category-grid`.
4. Dentro de cada columna coloca un bloque **Portada**, usando `category_new`, `category_ropa_50`, `category_panal` y `category_accesorio`.
5. A cada Portada agrega `aki-category-card`.
6. Dentro de cada tarjeta coloca un encabezado enlazado a su categoría correspondiente.

## Estructura

- `style.css`: metadatos y versión del tema.
- `functions.php`: carga de estilos y hooks de WooCommerce.
- `assets/css/theme.css`: sistema visual, home y catálogo.
- `AGENTS.md`: reglas para futuras contribuciones.
