<?php
/**
 * InboxWa Secure Console Configuration & DB Handler
 */
declare(strict_types=1);

if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

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

    // Create leads table
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

    // Create settings table
    $pdo->exec("
        CREATE TABLE IF NOT EXISTS settings (
            key TEXT PRIMARY KEY,
            value TEXT,
            updated_at DATETIME DEFAULT CURRENT_TIMESTAMP
        );
    ");

    // Default settings if empty
    $stCount = (int)$pdo->query("SELECT COUNT(*) FROM settings")->fetchColumn();
    if ($stCount === 0) {
        $stmt = $pdo->prepare("INSERT INTO settings (key, value) VALUES (?, ?)");
        $stmt->execute(['admin_user', 'admin']);
        $stmt->execute(['admin_pass', 'admin123']);
        $stmt->execute(['support_whatsapp', '+918050854445']);
        $stmt->execute(['notification_email', 'mail@inboxwa.com']);
        $stmt->execute(['webhook_url', '']);
    }

    // Auto-seed sample leads if database is empty so admin console is rich with data
    $leadCount = (int)$pdo->query("SELECT COUNT(*) FROM leads")->fetchColumn();
    if ($leadCount === 0) {
        $seedLeads = [
            [
                'type' => 'demo',
                'name' => 'Rahul Sharma',
                'business' => 'Apex EdTech Solutions',
                'email' => 'rahul.sharma@apexedtech.in',
                'phone' => '+91 98765 43210',
                'whatsapp' => '+91 98765 43210',
                'country' => 'India',
                'city' => 'Bangalore',
                'product' => 'WhatsApp Business API & Flow Builder',
                'requirement' => 'Automate student admission leads & course fee reminders',
                'message' => 'Looking for Official WhatsApp Business API setup with automated drip campaigns for 50,000 monthly leads.',
                'source_page' => '/industries/education/',
                'status' => 'new',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 hours'))
            ],
            [
                'type' => 'contact',
                'name' => 'Sarah Al-Maktoum',
                'business' => 'Gulf Retail Logistics',
                'email' => 'sarah@gulfretail.ae',
                'phone' => '+971 50 123 4567',
                'whatsapp' => '+971 50 123 4567',
                'country' => 'United Arab Emirates',
                'city' => 'Dubai',
                'product' => 'Shared Team Inbox & Shopify Integration',
                'requirement' => 'Shopify order updates and abandoned cart recovery',
                'message' => 'We need Shopify integration with WhatsApp API for automated tracking updates in English and Arabic.',
                'source_page' => '/solutions/shopify/',
                'status' => 'contacted',
                'created_at' => date('Y-m-d H:i:s', strtotime('-1 day'))
            ],
            [
                'type' => 'offer',
                'name' => 'Vikram Malhotra',
                'business' => 'Malhotra Real Estate Group',
                'email' => 'vikram@malhotraproperties.com',
                'phone' => '+91 99887 76655',
                'whatsapp' => '+91 99887 76655',
                'country' => 'India',
                'city' => 'Mumbai',
                'product' => 'Real Estate WhatsApp CRM & Business Data',
                'requirement' => 'Site visit scheduling and automated brochures',
                'message' => 'Claiming 20% discount offer for WhatsApp CRM setup and property lead qualification chatbot.',
                'source_page' => '/industries/real-estate/',
                'status' => 'converted',
                'created_at' => date('Y-m-d H:i:s', strtotime('-2 days'))
            ],
            [
                'type' => 'callback',
                'name' => 'Dr. Ananya Roy',
                'business' => 'CarePulse Healthcare Clinics',
                'email' => 'ananya@carepulse.org',
                'phone' => '+91 91234 56789',
                'whatsapp' => '+91 91234 56789',
                'country' => 'India',
                'city' => 'Delhi',
                'product' => 'Healthcare Appointment Reminders Bot',
                'requirement' => 'Patient appointment confirmations via WhatsApp',
                'message' => 'Please call back regarding Google Calendar sync with WhatsApp appointment booking.',
                'source_page' => '/industries/healthcare/',
                'status' => 'new',
                'created_at' => date('Y-m-d H:i:s', strtotime('-3 hours'))
            ],
            [
                'type' => 'product',
                'name' => 'Michael Chen',
                'business' => 'NovaPay Fintech',
                'email' => 'mchen@novapay.sg',
                'phone' => '+65 9123 4567',
                'whatsapp' => '+65 9123 4567',
                'country' => 'Singapore',
                'city' => 'Singapore',
                'product' => 'Omnichannel Facebook & Instagram Automation',
                'requirement' => 'Meta Tech Partner API setup',
                'message' => 'Interested in unifying WhatsApp, Instagram DM, and Messenger into one team inbox.',
                'source_page' => '/products/shared-inbox/',
                'status' => 'contacted',
                'created_at' => date('Y-m-d H:i:s', strtotime('-5 hours'))
            ]
        ];

        $ins = $pdo->prepare("
            INSERT INTO leads (type, name, business, email, phone, whatsapp, country, city, product, requirement, message, source_page, status, created_at)
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
        ");

        foreach ($seedLeads as $l) {
            $ins->execute([
                $l['type'], $l['name'], $l['business'], $l['email'], $l['phone'],
                $l['whatsapp'], $l['country'], $l['city'], $l['product'], $l['requirement'],
                $l['message'], $l['source_page'], $l['status'], $l['created_at']
            ]);
        }
    }

    return $pdo;
}

function hb_get_setting(string $key, string $default = ''): string {
    $db = hb_pdo();
    $stmt = $db->prepare("SELECT value FROM settings WHERE key = ?");
    $stmt->execute([$key]);
    $val = $stmt->fetchColumn();
    return $val !== false ? (string)$val : $default;
}

function hb_set_setting(string $key, string $value): void {
    $db = hb_pdo();
    $stmt = $db->prepare("INSERT OR REPLACE INTO settings (key, value, updated_at) VALUES (?, ?, CURRENT_TIMESTAMP)");
    $stmt->execute([$key, $value]);
}

function hb_is_admin_logged_in(): bool {
    return isset($_SESSION['hb_admin_auth']) && $_SESSION['hb_admin_auth'] === true;
}
