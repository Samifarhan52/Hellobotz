<?php
/**
 * InboxWa Complete Admin Console & Lead Management System
 */
declare(strict_types=1);

require_once __DIR__ . '/config.php';

$db = hb_pdo();

// Handle Logout
if (isset($_GET['action']) && $_GET['action'] === 'logout') {
    unset($_SESSION['hb_admin_auth']);
    header('Location: /secure-console-x7/');
    exit;
}

// Handle Login POST
$loginError = '';
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['login_submit'])) {
    $user = trim($_POST['username'] ?? '');
    $pass = trim($_POST['password'] ?? '');
    
    $expectedUser = hb_get_setting('admin_user', 'admin');
    $expectedPass = hb_get_setting('admin_pass', 'admin123');

    if ($user === $expectedUser && $pass === $expectedPass) {
        $_SESSION['hb_admin_auth'] = true;
        header('Location: /secure-console-x7/');
        exit;
    } else {
        $loginError = 'Invalid username or password. Please try again.';
    }
}

// Render Login Page if Not Authenticated
if (!hb_is_admin_logged_in()) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login | InboxWa Secure Console</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
        <style>
            * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
            body { background: #07090e; color: #f3f4f6; display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 1rem; }
            .login-card { background: #0f172a; border: 1px solid #1e293b; border-radius: 20px; width: 100%; max-width: 420px; padding: 2.5rem 2rem; box-shadow: 0 25px 50px -12px rgba(0,0,0,0.7); }
            .logo-header { text-align: center; margin-bottom: 1.75rem; }
            .logo-icon { width: 48px; height: 48px; background: linear-gradient(135deg, #8b5cf6, #06b6d4); border-radius: 12px; display: inline-flex; align-items: center; justify-content: center; color: #fff; margin-bottom: 0.75rem; box-shadow: 0 8px 20px rgba(139,92,246,0.3); }
            .login-card h1 { font-size: 1.4rem; font-weight: 800; color: #fff; margin-bottom: 0.25rem; }
            .login-card p { font-size: 0.875rem; color: #94a3b8; }
            .form-group { margin-bottom: 1.25rem; }
            .form-group label { display: block; font-size: 0.85rem; font-weight: 600; color: #cbd5e1; margin-bottom: 0.5rem; }
            .form-control { width: 100%; padding: 0.8rem 1rem; background: #1e293b; border: 1px solid #334155; border-radius: 10px; color: #fff; font-size: 0.95rem; outline: none; transition: border 0.2s; }
            .form-control:focus { border-color: #8b5cf6; }
            .btn-submit { width: 100%; padding: 0.9rem; background: linear-gradient(135deg, #8b5cf6, #6366f1); border: none; border-radius: 10px; color: #fff; font-weight: 700; font-size: 1rem; cursor: pointer; transition: transform 0.1s, opacity 0.2s; }
            .btn-submit:hover { opacity: 0.95; }
            .btn-submit:active { transform: scale(0.99); }
            .error-msg { background: rgba(239, 68, 68, 0.12); border: 1px solid rgba(239, 68, 68, 0.3); color: #f87171; padding: 0.75rem; border-radius: 10px; font-size: 0.85rem; margin-bottom: 1.25rem; text-align: center; font-weight: 500; }
            .hint-box { margin-top: 1.5rem; padding: 0.85rem; background: rgba(99, 102, 241, 0.1); border: 1px solid rgba(99, 102, 241, 0.2); border-radius: 10px; font-size: 0.825rem; color: #c7d2fe; text-align: center; line-height: 1.5; }
        </style>
    </head>
    <body>
        <div class="login-card">
            <div class="logo-header">
                <div class="logo-icon">⚡</div>
                <h1>InboxWa Console</h1>
                <p>Sign in to access admin leads & settings</p>
            </div>
            <?php if ($loginError): ?>
                <div class="error-msg"><?php echo htmlspecialchars($loginError); ?></div>
            <?php endif; ?>
            <form method="post" action="">
                <div class="form-group">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" class="form-control" required placeholder="admin" autofocus>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" class="form-control" required placeholder="••••••••">
                </div>
                <button type="submit" name="login_submit" class="btn-submit">Access Dashboard</button>
            </form>
            <div class="hint-box">
                🔑 <strong>Default Admin Access</strong><br>
                User: <code>admin</code> &nbsp;|&nbsp; Pass: <code>admin123</code>
            </div>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Flash notifications
$successMsg = '';
$errorMsg = '';

// Handle POST actions
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $action = $_POST['form_action'] ?? '';

    // Action: Save Settings
    if ($action === 'save_settings') {
        hb_set_setting('support_whatsapp', trim($_POST['support_whatsapp'] ?? ''));
        hb_set_setting('notification_email', trim($_POST['notification_email'] ?? ''));
        hb_set_setting('webhook_url', trim($_POST['webhook_url'] ?? ''));
        $successMsg = 'System settings updated successfully.';
    }

    // Action: Change Admin Credentials
    if ($action === 'change_password') {
        $newUser = trim($_POST['new_username'] ?? '');
        $newPass = trim($_POST['new_password'] ?? '');
        if (!empty($newUser) && !empty($newPass)) {
            hb_set_setting('admin_user', $newUser);
            hb_set_setting('admin_pass', $newPass);
            $successMsg = 'Admin username and password updated successfully.';
        } else {
            $errorMsg = 'Username and password cannot be empty.';
        }
    }

    // Action: Add Manual Lead
    if ($action === 'add_lead') {
        $name = trim($_POST['name'] ?? '');
        $email = trim($_POST['email'] ?? '');
        $phone = trim($_POST['phone'] ?? '');
        $type = trim($_POST['type'] ?? 'contact');
        $business = trim($_POST['business'] ?? '');
        $requirement = trim($_POST['requirement'] ?? '');
        $message = trim($_POST['message'] ?? '');

        if ($name !== '' && ($email !== '' || $phone !== '')) {
            $stmt = $db->prepare("INSERT INTO leads (type, name, business, email, phone, requirement, message, status, source_page) VALUES (?, ?, ?, ?, ?, ?, ?, 'new', 'admin_manual')");
            $stmt->execute([$type, $name, $business, $email, $phone, $requirement, $message]);
            $successMsg = 'New lead added manually.';
        } else {
            $errorMsg = 'Name and email or phone are required.';
        }
    }
}

// Handle GET actions
if (isset($_GET['action'])) {
    $act = $_GET['action'];

    // Update Status
    if ($act === 'update_status' && isset($_GET['id'], $_GET['status'])) {
        $id = (int)$_GET['id'];
        $st = preg_replace('/[^a-z_]/', '', strtolower($_GET['status']));
        $stmt = $db->prepare("UPDATE leads SET status = ? WHERE id = ?");
        $stmt->execute([$st, $id]);
        header('Location: /secure-console-x7/?tab=leads');
        exit;
    }

    // Delete Lead
    if ($act === 'delete_lead' && isset($_GET['id'])) {
        $id = (int)$_GET['id'];
        $stmt = $db->prepare("DELETE FROM leads WHERE id = ?");
        $stmt->execute([$id]);
        header('Location: /secure-console-x7/?tab=leads');
        exit;
    }

    // Export CSV / JSON
    if ($act === 'export') {
        $format = $_GET['format'] ?? 'csv';
        $stmt = $db->query("SELECT * FROM leads ORDER BY id DESC");
        $allLeads = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if ($format === 'json') {
            header('Content-Type: application/json; charset=utf-8');
            header('Content-Disposition: attachment; filename=inboxwa_leads_' . date('Y-m-d') . '.json');
            echo json_encode($allLeads, JSON_PRETTY_PRINT);
            exit;
        } else {
            header('Content-Type: text/csv; charset=utf-8');
            header('Content-Disposition: attachment; filename=inboxwa_leads_' . date('Y-m-d') . '.csv');
            $output = fopen('php://output', 'w');
            fputcsv($output, ['ID', 'Type', 'Name', 'Business', 'Email', 'Phone', 'WhatsApp', 'Country', 'City', 'Product', 'Requirement', 'Message', 'Source Page', 'Status', 'Created At']);
            foreach ($allLeads as $row) {
                fputcsv($output, [
                    $row['id'], $row['type'], $row['name'], $row['business'], $row['email'],
                    $row['phone'], $row['whatsapp'], $row['country'], $row['city'], $row['product'],
                    $row['requirement'], $row['message'], $row['source_page'], $row['status'], $row['created_at']
                ]);
            }
            fclose($output);
            exit;
        }
    }
}

// Active Tab
$activeTab = $_GET['tab'] ?? 'leads';

// Filter Leads Query
$filterType = $_GET['type'] ?? 'all';
$filterStatus = $_GET['status'] ?? 'all';
$searchQuery = trim($_GET['q'] ?? '');

$sql = "SELECT * FROM leads WHERE 1=1";
$params = [];

if ($filterType !== 'all') {
    $sql .= " AND type = ?";
    $params[] = $filterType;
}

if ($filterStatus !== 'all') {
    $sql .= " AND status = ?";
    $params[] = $filterStatus;
}

if ($searchQuery !== '') {
    $sql .= " AND (name LIKE ? OR email LIKE ? OR phone LIKE ? OR business LIKE ? OR city LIKE ?)";
    $q = '%' . $searchQuery . '%';
    $params = array_merge($params, [$q, $q, $q, $q, $q]);
}

$sql .= " ORDER BY id DESC";
$stmt = $db->prepare($sql);
$stmt->execute($params);
$leads = $stmt->fetchAll();

// Metrics
$totalLeads = (int)$db->query("SELECT COUNT(*) FROM leads")->fetchColumn();
$newLeads = (int)$db->query("SELECT COUNT(*) FROM leads WHERE status = 'new'")->fetchColumn();
$demoRequests = (int)$db->query("SELECT COUNT(*) FROM leads WHERE type = 'demo'")->fetchColumn();
$contactRequests = (int)$db->query("SELECT COUNT(*) FROM leads WHERE type = 'contact'")->fetchColumn();
$convertedLeads = (int)$db->query("SELECT COUNT(*) FROM leads WHERE status = 'converted'")->fetchColumn();

// Load Location Data for SEO Locations tab
$locationsDataFile = dirname(__DIR__) . '/includes/locations-data.php';
$locationsList = is_file($locationsDataFile) ? require $locationsDataFile : [];

// Settings Data
$currentWhatsapp = hb_get_setting('support_whatsapp', '+918050854445');
$currentEmail = hb_get_setting('notification_email', 'mail@inboxwa.com');
$currentWebhook = hb_get_setting('webhook_url', '');
$currentAdminUser = hb_get_setting('admin_user', 'admin');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InboxWa Admin Console & Management System</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { background: #07090e; color: #e2e8f0; min-height: 100vh; display: flex; flex-direction: column; }
        
        header { background: #0f172a; border-bottom: 1px solid #1e293b; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; sticky: top; top: 0; z-index: 100; }
        .logo-brand { display: flex; align-items: center; gap: 0.75rem; }
        .logo-badge { width: 36px; height: 36px; background: linear-gradient(135deg, #8b5cf6, #06b6d4); border-radius: 10px; display: inline-flex; align-items: center; justify-content: center; color: #fff; font-weight: 800; }
        .logo-title { font-size: 1.25rem; font-weight: 800; color: #fff; }
        .logo-title span { color: #8b5cf6; }

        .user-panel { display: flex; align-items: center; gap: 1rem; }
        .user-tag { font-size: 0.85rem; color: #94a3b8; background: #1e293b; padding: 0.4rem 0.8rem; border-radius: 8px; border: 1px solid #334155; }
        
        .btn { padding: 0.5rem 1rem; border-radius: 8px; font-size: 0.85rem; font-weight: 600; text-decoration: none; cursor: pointer; border: none; display: inline-flex; align-items: center; gap: 0.4rem; transition: all 0.2s; }
        .btn-primary { background: linear-gradient(135deg, #8b5cf6, #6366f1); color: #fff; }
        .btn-primary:hover { opacity: 0.9; }
        .btn-outline { background: transparent; border: 1px solid #334155; color: #cbd5e1; }
        .btn-outline:hover { background: #1e293b; color: #fff; }
        .btn-success { background: rgba(34, 197, 94, 0.2); color: #4ade80; border: 1px solid rgba(34, 197, 94, 0.3); }
        .btn-success:hover { background: rgba(34, 197, 94, 0.3); }
        .btn-danger { background: rgba(239, 68, 68, 0.15); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.3); }
        .btn-danger:hover { background: rgba(239, 68, 68, 0.25); }

        .alert-bar { padding: 0.85rem 1.5rem; margin: 1rem 2rem 0; border-radius: 10px; font-size: 0.9rem; font-weight: 500; }
        .alert-success { background: rgba(34, 197, 94, 0.15); border: 1px solid rgba(34, 197, 94, 0.3); color: #4ade80; }
        .alert-error { background: rgba(239, 68, 68, 0.15); border: 1px solid rgba(239, 68, 68, 0.3); color: #f87171; }

        .container { width: 100%; max-width: 1440px; margin: 0 auto; padding: 1.5rem 2rem 3rem; flex: 1; }

        /* Stats Grid */
        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(210px, 1fr)); gap: 1.25rem; margin-bottom: 2rem; }
        .stat-card { background: #0f172a; border: 1px solid #1e293b; border-radius: 14px; padding: 1.25rem; position: relative; overflow: hidden; }
        .stat-card::before { content: ''; position: absolute; top: 0; left: 0; width: 4px; height: 100%; background: #8b5cf6; }
        .stat-card.blue::before { background: #3b82f6; }
        .stat-card.purple::before { background: #a855f7; }
        .stat-card.green::before { background: #22c55e; }
        .stat-card.amber::before { background: #f59e0b; }
        .stat-label { font-size: 0.8rem; text-transform: uppercase; letter-spacing: 0.05em; color: #94a3b8; font-weight: 600; margin-bottom: 0.35rem; }
        .stat-val { font-size: 2rem; font-weight: 800; color: #fff; }

        /* Tabs Navigation */
        .tabs-nav { display: flex; border-bottom: 1px solid #1e293b; margin-bottom: 1.75rem; gap: 0.5rem; overflow-x: auto; }
        .tab-link { padding: 0.75rem 1.25rem; font-weight: 600; font-size: 0.95rem; color: #94a3b8; text-decoration: none; border-bottom: 2px solid transparent; transition: all 0.2s; white-space: nowrap; }
        .tab-link:hover { color: #f1f5f9; }
        .tab-link.active { color: #8b5cf6; border-bottom-color: #8b5cf6; background: rgba(139, 92, 246, 0.05); border-radius: 8px 8px 0 0; }

        /* Controls & Filters */
        .controls-card { background: #0f172a; border: 1px solid #1e293b; border-radius: 14px; padding: 1.25rem; margin-bottom: 1.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; }
        .filter-form { display: flex; align-items: center; gap: 0.75rem; flex-wrap: wrap; }
        .form-input-sm { padding: 0.55rem 0.85rem; background: #1e293b; border: 1px solid #334155; border-radius: 8px; color: #fff; font-size: 0.875rem; outline: none; }
        .form-input-sm:focus { border-color: #8b5cf6; }

        /* Tables */
        .table-wrap { background: #0f172a; border: 1px solid #1e293b; border-radius: 14px; overflow-x: auto; box-shadow: 0 10px 30px rgba(0,0,0,0.3); }
        table { width: 100%; border-collapse: collapse; text-align: left; font-size: 0.875rem; }
        th { background: #1e293b; padding: 0.9rem 1.1rem; color: #94a3b8; font-weight: 700; text-transform: uppercase; font-size: 0.75rem; letter-spacing: 0.05em; border-bottom: 1px solid #334155; }
        td { padding: 1.1rem; border-bottom: 1px solid #1e293b; color: #cbd5e1; vertical-align: top; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: rgba(255,255,255,0.015); }

        .badge { display: inline-block; padding: 0.25rem 0.65rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 700; text-transform: capitalize; }
        .badge-new { background: rgba(59, 130, 246, 0.15); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.3); }
        .badge-contacted { background: rgba(245, 158, 11, 0.15); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.3); }
        .badge-converted { background: rgba(34, 197, 94, 0.15); color: #4ade80; border: 1px solid rgba(34, 197, 94, 0.3); }
        .badge-type { background: #1e293b; color: #cbd5e1; border: 1px solid #334155; }

        /* Panel Cards */
        .panel-card { background: #0f172a; border: 1px solid #1e293b; border-radius: 14px; padding: 1.75rem; margin-bottom: 1.5rem; }
        .panel-card h2 { font-size: 1.15rem; font-weight: 700; color: #fff; margin-bottom: 1.25rem; display: flex; align-items: center; gap: 0.5rem; }
        .grid-2col { display: grid; grid-template-columns: repeat(auto-fit, minmax(360px, 1fr)); gap: 1.5rem; }
        
        .form-group-block { margin-bottom: 1.25rem; }
        .form-group-block label { display: block; font-size: 0.85rem; font-weight: 600; color: #cbd5e1; margin-bottom: 0.4rem; }
        .form-control-full { width: 100%; padding: 0.75rem 1rem; background: #1e293b; border: 1px solid #334155; border-radius: 8px; color: #fff; font-size: 0.9rem; outline: none; }
        .form-control-full:focus { border-color: #8b5cf6; }

        .empty-box { text-align: center; padding: 4rem 2rem; color: #64748b; }
    </style>
</head>
<body>
    <header>
        <div class="logo-brand">
            <div class="logo-badge">⚡</div>
            <div class="logo-title">InboxWa <span>Admin Console</span></div>
        </div>
        <div class="user-panel">
            <div class="user-tag">👤 User: <strong><?php echo htmlspecialchars($currentAdminUser); ?></strong></div>
            <a href="?action=export&format=csv" class="btn btn-outline">📥 Export CSV</a>
            <a href="?action=export&format=json" class="btn btn-outline">📄 Export JSON</a>
            <a href="?action=logout" class="btn btn-danger">Logout</a>
        </div>
    </header>

    <?php if ($successMsg): ?>
        <div class="alert-bar alert-success">✅ <?php echo htmlspecialchars($successMsg); ?></div>
    <?php endif; ?>
    <?php if ($errorMsg): ?>
        <div class="alert-bar alert-error">⚠️ <?php echo htmlspecialchars($errorMsg); ?></div>
    <?php endif; ?>

    <div class="container">
        <!-- Overview Metrics -->
        <div class="stats-grid">
            <div class="stat-card blue">
                <div class="stat-label">Total Submissions</div>
                <div class="stat-val"><?php echo $totalLeads; ?></div>
            </div>
            <div class="stat-card purple">
                <div class="stat-label">New Leads</div>
                <div class="stat-val"><?php echo $newLeads; ?></div>
            </div>
            <div class="stat-card amber">
                <div class="stat-label">Demo Requests</div>
                <div class="stat-val"><?php echo $demoRequests; ?></div>
            </div>
            <div class="stat-card green">
                <div class="stat-label">Converted Clients</div>
                <div class="stat-val"><?php echo $convertedLeads; ?></div>
            </div>
        </div>

        <!-- Navigation Tabs -->
        <div class="tabs-nav">
            <a href="?tab=leads" class="tab-link <?php echo $activeTab === 'leads' ? 'active' : ''; ?>">📊 Leads & Inquiries (<?php echo count($leads); ?>)</a>
            <a href="?tab=locations" class="tab-link <?php echo $activeTab === 'locations' ? 'active' : ''; ?>">📍 SEO Locations (<?php echo count($locationsList); ?>)</a>
            <a href="?tab=add_lead" class="tab-link <?php echo $activeTab === 'add_lead' ? 'active' : ''; ?>">➕ Add Manual Lead</a>
            <a href="?tab=settings" class="tab-link <?php echo $activeTab === 'settings' ? 'active' : ''; ?>">⚙️ Console Settings</a>
        </div>

        <?php if ($activeTab === 'leads'): ?>
            <!-- LEADS TAB -->
            <div class="controls-card">
                <form method="get" action="" class="filter-form">
                    <input type="hidden" name="tab" value="leads">
                    <input type="text" name="q" class="form-input-sm" style="min-width: 260px;" placeholder="Search name, email, phone, city..." value="<?php echo htmlspecialchars($searchQuery); ?>">
                    
                    <select name="type" class="form-input-sm" onchange="this.form.submit()">
                        <option value="all" <?php echo $filterType === 'all' ? 'selected' : ''; ?>>All Form Types</option>
                        <option value="demo" <?php echo $filterType === 'demo' ? 'selected' : ''; ?>>Demo Requests</option>
                        <option value="contact" <?php echo $filterType === 'contact' ? 'selected' : ''; ?>>Contact Forms</option>
                        <option value="callback" <?php echo $filterType === 'callback' ? 'selected' : ''; ?>>Callback Requests</option>
                        <option value="offer" <?php echo $filterType === 'offer' ? 'selected' : ''; ?>>Offer Claims</option>
                    </select>

                    <select name="status" class="form-input-sm" onchange="this.form.submit()">
                        <option value="all" <?php echo $filterStatus === 'all' ? 'selected' : ''; ?>>All Statuses</option>
                        <option value="new" <?php echo $filterStatus === 'new' ? 'selected' : ''; ?>>New</option>
                        <option value="contacted" <?php echo $filterStatus === 'contacted' ? 'selected' : ''; ?>>Contacted</option>
                        <option value="converted" <?php echo $filterStatus === 'converted' ? 'selected' : ''; ?>>Converted</option>
                    </select>

                    <button type="submit" class="btn btn-outline">Filter</button>
                    <?php if ($searchQuery !== '' || $filterType !== 'all' || $filterStatus !== 'all'): ?>
                        <a href="?tab=leads" class="btn btn-outline" style="color:#f87171">Reset</a>
                    <?php endif; ?>
                </form>

                <div>
                    Showing <strong><?php echo count($leads); ?></strong> lead entries
                </div>
            </div>

            <div class="table-wrap">
                <?php if (empty($leads)): ?>
                    <div class="empty-box">
                        <h3>No leads found matching your criteria</h3>
                        <p style="margin-top:0.5rem">Submissions from site forms will appear here automatically.</p>
                    </div>
                <?php else: ?>
                    <table>
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Type</th>
                                <th>Contact Information</th>
                                <th>Business / Requirement</th>
                                <th>Message</th>
                                <th>Source</th>
                                <th>Status</th>
                                <th>Date</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($leads as $l): ?>
                                <tr>
                                    <td><strong>#<?php echo $l['id']; ?></strong></td>
                                    <td><span class="badge badge-type"><?php echo htmlspecialchars($l['type'] ?? 'contact'); ?></span></td>
                                    <td>
                                        <strong style="color:#fff"><?php echo htmlspecialchars($l['name']); ?></strong><br>
                                        <span style="font-size:0.8rem;color:#94a3b8">✉️ <?php echo htmlspecialchars($l['email'] ?: 'N/A'); ?></span><br>
                                        <span style="font-size:0.8rem;color:#60a5fa">📞 <?php echo htmlspecialchars($l['phone'] ?: 'N/A'); ?></span>
                                        <?php if (!empty($l['city']) || !empty($l['country'])): ?>
                                            <br><span style="font-size:0.75rem;color:#cbd5e1">📍 <?php echo htmlspecialchars(implode(', ', array_filter([$l['city'], $l['country']]))); ?></span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <?php if (!empty($l['business'])): ?>
                                            <strong style="font-size:0.85rem;color:#e2e8f0">🏢 <?php echo htmlspecialchars($l['business']); ?></strong><br>
                                        <?php endif; ?>
                                        <span style="font-size:0.8rem;color:#94a3b8"><?php echo htmlspecialchars($l['requirement'] ?: $l['product'] ?: 'General Inquiry'); ?></span>
                                    </td>
                                    <td style="max-width:280px;font-size:0.85rem;color:#cbd5e1">
                                        <?php echo htmlspecialchars($l['message'] ?: 'No additional notes.'); ?>
                                    </td>
                                    <td><span style="font-size:0.75rem;color:#94a3b8"><?php echo htmlspecialchars(basename($l['source_page'] ?: '/')); ?></span></td>
                                    <td>
                                        <?php $st = strtolower($l['status'] ?? 'new'); ?>
                                        <span class="badge badge-<?php echo $st; ?>"><?php echo $st; ?></span>
                                    </td>
                                    <td style="font-size:0.75rem;color:#94a3b8;white-space:nowrap"><?php echo htmlspecialchars($l['created_at']); ?></td>
                                    <td style="white-space:nowrap">
                                        <?php if ($st === 'new'): ?>
                                            <a href="?action=update_status&id=<?php echo $l['id']; ?>&status=contacted" class="btn btn-outline" style="padding:0.25rem 0.5rem;font-size:0.75rem">Mark Contacted</a>
                                        <?php elseif ($st === 'contacted'): ?>
                                            <a href="?action=update_status&id=<?php echo $l['id']; ?>&status=converted" class="btn btn-success" style="padding:0.25rem 0.5rem;font-size:0.75rem">Mark Converted</a>
                                        <?php endif; ?>
                                        <a href="?action=delete_lead&id=<?php echo $l['id']; ?>" onclick="return confirm('Are you sure you want to delete this lead record?')" class="btn btn-danger" style="padding:0.25rem 0.5rem;font-size:0.75rem">Delete</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                <?php endif; ?>
            </div>

        <?php elseif ($activeTab === 'locations'): ?>
            <!-- SEO LOCATIONS TAB -->
            <div class="panel-card">
                <h2>📍 SEO Location Pages Index</h2>
                <p style="color:#94a3b8;font-size:0.9rem;margin-bottom:1.25rem">Below are all active regional and international SEO landing pages configured in <code>includes/locations-data.php</code>.</p>
                <div class="table-wrap">
                    <table>
                        <thead>
                            <tr>
                                <th>Location</th>
                                <th>Type / Country</th>
                                <th>Primary Keyword</th>
                                <th>Page Title</th>
                                <th>Target Areas / Industries</th>
                                <th>Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($locationsList as $key => $loc): ?>
                                <tr>
                                    <td>
                                        <strong style="color:#fff;font-size:0.95rem">📍 <?php echo htmlspecialchars($loc['city'] ?? $loc['country'] ?? $key); ?></strong><br>
                                        <span style="font-size:0.75rem;color:#94a3b8">Slug: /Locations/<?php echo htmlspecialchars($loc['slug'] ?? $key); ?>/</span>
                                    </td>
                                    <td>
                                        <span class="badge badge-type"><?php echo htmlspecialchars(strtoupper($loc['type'] ?? 'CITY')); ?></span><br>
                                        <span style="font-size:0.8rem;color:#94a3b8"><?php echo htmlspecialchars($loc['country'] ?? 'Global'); ?></span>
                                    </td>
                                    <td><strong style="color:#60a5fa"><?php echo htmlspecialchars($loc['primary_keyword'] ?? 'N/A'); ?></strong></td>
                                    <td style="max-width:280px;font-size:0.8rem;color:#cbd5e1"><?php echo htmlspecialchars($loc['meta_title'] ?? 'N/A'); ?></td>
                                    <td style="font-size:0.75rem;color:#94a3b8;max-width:220px">
                                        <?php if (!empty($loc['areas'])): ?>
                                            <strong>Areas:</strong> <?php echo htmlspecialchars(implode(', ', array_slice($loc['areas'], 0, 4))); ?>...
                                        <?php else: ?>
                                            <span>Full Country Coverage</span>
                                        <?php endif; ?>
                                    </td>
                                    <td>
                                        <a href="/Locations/<?php echo htmlspecialchars($loc['slug'] ?? $key); ?>/" target="_blank" class="btn btn-outline" style="padding:0.3rem 0.6rem;font-size:0.75rem">🔗 View Live Page</a>
                                    </td>
                                </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>

        <?php elseif ($activeTab === 'add_lead'): ?>
            <!-- ADD MANUAL LEAD TAB -->
            <div class="panel-card" style="max-width:640px;margin:0 auto">
                <h2>➕ Add Manual Prospect / Lead</h2>
                <form method="post" action="">
                    <input type="hidden" name="form_action" value="add_lead">
                    <div class="form-group-block">
                        <label for="lead_name">Contact Name *</label>
                        <input type="text" id="lead_name" name="name" class="form-control-full" required placeholder="e.g. Ramesh Kumar">
                    </div>
                    <div class="form-group-block">
                        <label for="lead_email">Email Address</label>
                        <input type="email" id="lead_email" name="email" class="form-control-full" placeholder="ramesh@company.com">
                    </div>
                    <div class="form-group-block">
                        <label for="lead_phone">Phone / WhatsApp Number</label>
                        <input type="text" id="lead_phone" name="phone" class="form-control-full" placeholder="+91 98765 43210">
                    </div>
                    <div class="form-group-block">
                        <label for="lead_type">Form / Lead Type</label>
                        <select id="lead_type" name="type" class="form-control-full">
                            <option value="demo">Demo Request</option>
                            <option value="contact">Contact Inquiry</option>
                            <option value="callback">Callback Request</option>
                            <option value="offer">Offer Claim</option>
                        </select>
                    </div>
                    <div class="form-group-block">
                        <label for="lead_business">Business / Company Name</label>
                        <input type="text" id="lead_business" name="business" class="form-control-full" placeholder="Company Name">
                    </div>
                    <div class="form-group-block">
                        <label for="lead_req">Requirement / Product Interest</label>
                        <input type="text" id="lead_req" name="requirement" class="form-control-full" placeholder="WhatsApp API, Chatbot, Shared Inbox...">
                    </div>
                    <div class="form-group-block">
                        <label for="lead_msg">Notes / Message</label>
                        <textarea id="lead_msg" name="message" class="form-control-full" rows="3" placeholder="Enter notes or message details..."></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary" style="width:100%;padding:0.85rem">Save Lead to Dashboard</button>
                </form>
            </div>

        <?php elseif ($activeTab === 'settings'): ?>
            <!-- SETTINGS TAB -->
            <div class="grid-2col">
                <div class="panel-card">
                    <h2>⚙️ System Configuration</h2>
                    <form method="post" action="">
                        <input type="hidden" name="form_action" value="save_settings">
                        <div class="form-group-block">
                            <label for="support_whatsapp">Support WhatsApp Number</label>
                            <input type="text" id="support_whatsapp" name="support_whatsapp" class="form-control-full" value="<?php echo htmlspecialchars($currentWhatsapp); ?>" required>
                        </div>
                        <div class="form-group-block">
                            <label for="notification_email">Lead Notification Email</label>
                            <input type="email" id="notification_email" name="notification_email" class="form-control-full" value="<?php echo htmlspecialchars($currentEmail); ?>" required>
                        </div>
                        <div class="form-group-block">
                            <label for="webhook_url">Lead Webhook Endpoint (Optional)</label>
                            <input type="url" id="webhook_url" name="webhook_url" class="form-control-full" value="<?php echo htmlspecialchars($currentWebhook); ?>" placeholder="https://your-crm.com/api/webhook">
                        </div>
                        <button type="submit" class="btn btn-primary">Save Settings</button>
                    </form>
                </div>

                <div class="panel-card">
                    <h2>🔒 Security & Credentials</h2>
                    <form method="post" action="">
                        <input type="hidden" name="form_action" value="change_password">
                        <div class="form-group-block">
                            <label for="new_username">Admin Username</label>
                            <input type="text" id="new_username" name="new_username" class="form-control-full" value="<?php echo htmlspecialchars($currentAdminUser); ?>" required>
                        </div>
                        <div class="form-group-block">
                            <label for="new_password">New Password</label>
                            <input type="password" id="new_password" name="new_password" class="form-control-full" placeholder="Enter new password..." required>
                        </div>
                        <button type="submit" class="btn btn-primary">Update Admin Password</button>
                    </form>
                </div>
            </div>
        <?php endif; ?>
    </div>
</body>
</html>
