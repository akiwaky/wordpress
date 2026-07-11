# Akiwaky Storefront Child

Tema hijo mínimo para la tienda WooCommerce de Akiwaky, basado en **Storefront**.

## Objetivo de esta primera versión

- Confirmar el flujo GitHub → ZIP → WordPress.
- Conservar Storefront como tema padre.
- Tener un lugar seguro para estilos y funciones propias.
- Evitar cambios grandes de diseño antes de validar la instalación.

## Requisitos

1. WordPress con WooCommerce.
2. Tema **Storefront** instalado (no necesita estar activo antes de subir este child theme).

## Instalación rápida

1. En GitHub abre **Code → Download ZIP**.
2. En WordPress ve a **Apariencia → Temas → Añadir nuevo → Subir tema**.
3. Selecciona el ZIP descargado.
4. Instálalo y activa **Akiwaky Storefront Child**.
5. Limpia la caché del sitio/navegador si no ves el cambio.

## Qué cambia visualmente

Solo introduce variables base de color, pequeños ajustes tipográficos, botones redondeados y un ancho de lectura más cómodo. No reemplaza plantillas de WooCommerce ni modifica productos, pedidos o configuración.

## Estructura

- `style.css`: metadatos obligatorios del tema y estilos base.
- `functions.php`: carga segura de estilos del padre y del child theme.
- `assets/css/theme.css`: personalización visual incremental.
- `AGENTS.md`: reglas para futuras contribuciones asistidas.
