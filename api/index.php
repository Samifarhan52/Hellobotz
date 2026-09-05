<?php
/**
 * Vercel Serverless PHP Entrypoint for InboxWa
 * Features case-insensitive routing & alias resolution for Linux environments
 */
header('Content-Type: text/html; charset=UTF-8');

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$parsedUrl  = parse_url($requestUri, PHP_URL_PATH) ?: '/';
$rootDir    = dirname(__DIR__);

$cleanPath = trim($parsedUrl, '/');

if (empty($cleanPath)) {
    require $rootDir . '/index.php';
    exit;
}

$parts = array_values(array_filter(explode('/', $cleanPath)));

// 1. Direct exact path match check
$directPath = $rootDir . '/' . implode('/', $parts);
if (is_file($directPath) && substr($directPath, -4) === '.php') {
    require $directPath;
    exit;
}
if (is_file($directPath . '.php')) {
    require $directPath . '.php';
    exit;
}
if (is_dir($directPath) && is_file(rtrim($directPath, '/') . '/index.php')) {
    require rtrim($directPath, '/') . '/index.php';
    exit;
}

// 2. Case-insensitive & alias path resolver (for Linux / Vercel compatibility)
$current = $rootDir;
$resolved = true;

foreach ($parts as $part) {
    if (!is_dir($current)) {
        $resolved = false;
        break;
    }
    
    $entries = scandir($current);
    $found = false;
    $partLower = strtolower($part);

    // Industry / Industries alias mapping
    if ($partLower === 'industry') {
        $partLower = 'industries';
    }

    foreach ($entries as $entry) {
        if ($entry === '.' || $entry === '..') continue;
        if (strtolower($entry) === $partLower) {
            $current .= '/' . $entry;
            $found = true;
            break;
        }
    }

    if (!$found) {
        $resolved = false;
        break;
    }
}

if ($resolved) {
    if (is_file($current) && substr($current, -4) === '.php') {
        require $current;
        exit;
    }
    if (is_dir($current) && is_file(rtrim($current, '/') . '/index.php')) {
        require rtrim($current, '/') . '/index.php';
        exit;
    }
}

// Fallback to homepage
require $rootDir . '/index.php';
