# Akiwaky Storefront Child

Tema hijo para la tienda WooCommerce de Akiwaky, basado en **Storefront**.

## MVP baseline — v0.3.2

La versión **0.3.2** es el punto de referencia aprobado para el MVP de `store.akiwaky.cloud`.

Incluye:

- Home visual aprobada y congelada por ahora.
- Shop sin hero adicional y con acceso directo al catálogo.
- Fotografías de producto completas, sin recortes forzados.
- Catálogo responsive: tres columnas en escritorio, dos en tablet y una en móvil.
- Flujo base de WooCommerce para producto, carrito, checkout y pago manual.

Todo cambio posterior debe tratarse como un incremento sobre este baseline y evitar modificar la home salvo que se solicite explícitamente.

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

## Shop visual 0.3.2

La página principal de la tienda carga `assets/css/shop.css` de forma condicional. La home conserva exactamente los archivos y estilos de la versión 0.2.0.

- Sin hero adicional: el catálogo aparece inmediatamente después del título y la barra de orden.
- Tarjetas de tres columnas en escritorio, dos en tablet y una en móvil.
- Las fotografías usan `object-fit: contain`; se ven completas aunque sean muy verticales.
- El sidebar se oculta únicamente en la página Shop.
- No se modifica la presentación de categorías, productos individuales, carrito, checkout ni home.

## Home visual 0.2

La versión 0.2 incorpora estilos responsive para un hero y cuatro tarjetas de categoría. Las imágenes permanecen en la Biblioteca de medios; el tema solo controla su presentación.

### Hero

1. Inserta un bloque **Portada** y selecciona `hero_og`.
2. En **Avanzado → Clase(s) CSS adicional(es)** agrega:
   `aki-home-hero`
3. Dentro de la portada inserta un bloque **Grupo**.
4. Al Grupo agrégale:
   `aki-hero-panel`
5. Dentro del Grupo coloca un encabezado, párrafo y botón.

La imagen queda visible hacia la derecha en escritorio y el texto sobre un degradado claro a la izquierda. En móvil el contenido pasa a la parte inferior.

### Categorías

1. Inserta un bloque **Grupo** y agrega la clase:
   `aki-home-categories`
2. Dentro coloca un encabezado, texto introductorio y un bloque **Columnas** de cuatro columnas.
3. Al bloque Columnas agrega:
   `aki-category-grid`
4. Dentro de cada columna coloca un bloque **Portada**, usando:
   - `category_new`
   - `category_ropa_50`
   - `category_panal`
   - `category_accesorio`
5. A cada Portada agrega:
   `aki-category-card`
6. Dentro de cada tarjeta coloca un encabezado enlazado a su categoría correspondiente.

En escritorio se muestran cuatro tarjetas; en tablet y móvil pasan a una cuadrícula de dos columnas.

## Estructura

- `style.css`: metadatos y versión del tema.
- `functions.php`: carga segura de estilos.
- `assets/css/theme.css`: sistema visual, hero, categorías y WooCommerce.
- `AGENTS.md`: reglas para futuras contribuciones.
