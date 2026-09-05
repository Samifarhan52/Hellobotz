<?php
/**
 * InboxWa Secure Console Configuration & DB Handler
 */
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

define('ADMIN_USER', 'admin');
define('ADMIN_PASS', 'admin123'); // Change in production if needed

function hb_get_db_path(): string {
    $dir = __DIR__ . '/data';
    if (!is_dir($dir)) {
        @mkdir($dir, 0755, true);
    }
    return $dir . '/leads.sqlite';
}

function hb_pdo(): PDO {
    static $pdo = null;
    if ($pdo !== null) {
        return $pdo;
    }

    $dbFile = hb_get_db_path();
    $pdo = new PDO('sqlite:' . $dbFile, null, null, [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
    ]);

    // Create table if not exists
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS leads (
            id INTEGER PRIMARY KEY AUTOINCREMENT,
            type TEXT,
            name TEXT,
            business TEXT,
            email TEXT,
            phone TEXT,
            whatsapp TEXT,
            country TEXT,
            city TEXT,
            product TEXT,
            requirement TEXT,
            message TEXT,
            preferred_date TEXT,
            preferred_time TEXT,
            source_page TEXT,
            referrer TEXT,
            utm_source TEXT,
            utm_medium TEXT,
            utm_campaign TEXT,
            ip TEXT,
            status TEXT DEFAULT 'new',
            created_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");

    return $pdo;
}

function hb_is_admin_logged_in(): bool {
    return isset($_SESSION['hb_admin_auth']) && $_SESSION['hb_admin_auth'] === true;
}
