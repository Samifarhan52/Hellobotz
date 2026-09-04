<?php
$basePath = '../../';
$all = require __DIR__ . '/../../includes/locations-data.php';
$slug = 'WhatsApp-API-Australia';
if (!isset($all[$slug])) {
  http_response_code(404);
  echo 'Location not found';
  exit;
}
$loc = $all[$slug];
require __DIR__ . '/../../includes/location-page-template.php';
