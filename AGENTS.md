# Akiwaky Storefront Child — contribution guidance

## Scope

This repository contains only the custom Storefront child theme for store.akiwaky.cloud.

## Rules

- Keep the `Template: storefront` header in `style.css`.
- Do not commit WordPress core, uploads, database exports, credentials, API keys, customer data, orders, or payment information.
- Prefer hooks and filters over copying parent-theme templates.
- Override a WooCommerce template only when a hook/filter cannot implement the requirement, and document why.
- Keep design tokens in `assets/css/theme.css`.
- Use the `akiwaky_` prefix for global PHP functions.
- Escape output and sanitize input according to WordPress standards.
- Every change must remain usable on mobile and desktop.
- Increase the theme version in `style.css` when releasing a user-visible change.

## Validation

Before release:

1. Confirm PHP has no syntax errors.
2. Confirm Storefront is installed.
3. Test home, shop, product, cart, checkout, account, contact and FAQ pages.
4. Check mobile, tablet and desktop widths.
5. Confirm no customer, order or secret data is included.
