# Global Header & Footer

All pages must include only:

```php
include __DIR__ . '/../includes/header.php';  // adjust ../ depth
// page content
include __DIR__ . '/../includes/footer.php';
```

- Header: `/includes/header.php` (logo, mega menu, mobile menu markup, CSS links)
- Footer: `/includes/footer.php` (contact, columns, scripts including mobile-menu.js)
- Mobile menu JS: `/assets/js/mobile-menu.js`
- Do NOT paste header/footer HTML into individual pages.
- Edit menu once in header.php → updates every page.
