# Structure

```
/
  index.php
  auth/login|register
  Products/{Product}/index.php
  Solutions/{Solution}.php or folders
  Locations/{Slug}/index.php
  company/{page}/
  partners/
  products/ solutions/ integrations/  (hub indexes)
  includes/ header.php footer.php …
  api/lead.php
  secure-console-x7/   # non-obvious admin
  assets/
  docs/
```

Header/footer use `$basePath` / `$bp` for nested pages.
