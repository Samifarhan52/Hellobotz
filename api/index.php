<?php
/**
 * Vercel Serverless PHP Entrypoint for InboxWa
 */
header('Content-Type: text/html; charset=UTF-8');

$requestUri = $_SERVER['REQUEST_URI'] ?? '/';
$parsedUrl  = parse_url($requestUri, PHP_URL_PATH) ?: '/';
$rootDir    = dirname(__DIR__);

// Check if request points to an existing php file or subfolder index.php
$targetFile = $rootDir . $parsedUrl;

if ($parsedUrl !== '/' && is_file($targetFile) && substr($targetFile, -4) === '.php') {
    require $targetFile;
} else if ($parsedUrl !== '/' && is_dir($targetFile) && is_file(rtrim($targetFile, '/') . '/index.php')) {
    require rtrim($targetFile, '/') . '/index.php';
} else {
    require $rootDir . '/index.php';
}
