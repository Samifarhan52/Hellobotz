# Admin Panel

## Secure console
Path: `/secure-console-x7/`

Features: dashboard, leads, demo/callback filters, CSV export, settings, CSRF, audit log, SQLite.

## Legacy location SEO admin
Path: `/admin/` — location data seed/export for `includes/locations-data.php`.

## Forms
`forms.js` posts to `/api/lead.php` and opens WhatsApp (`FORM_MODE=both`).
