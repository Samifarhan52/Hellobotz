<?php
/**
 * InboxWa Secure Console - Admin Lead Management Dashboard
 */
declare(strict_types=1);

require_once __DIR__ . '/config.php';

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
    
    if ($user === ADMIN_USER && $pass === ADMIN_PASS) {
        $_SESSION['hb_admin_auth'] = true;
        header('Location: /secure-console-x7/');
        exit;
    } else {
        $loginError = 'Invalid credentials. Please try again.';
    }
}

// Check Auth
if (!hb_is_admin_logged_in()) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Admin Login | InboxWa Console</title>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
        <style>
            * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
            body { background: #0b0f19; color: #f3f4f6; display: flex; align-items: center; justify-content: center; min-height: 100vh; padding: 1rem; }
            .login-card { background: #111827; border: 1px solid #1f2937; border-radius: 16px; width: 100%; max-width: 400px; padding: 2.5rem 2rem; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.5); }
            .login-card h1 { font-size: 1.5rem; font-weight: 700; margin-bottom: 0.5rem; color: #fff; text-align: center; }
            .login-card p { font-size: 0.875rem; color: #9ca3af; text-align: center; margin-bottom: 1.75rem; }
            .form-group { margin-bottom: 1.25rem; }
            .form-group label { display: block; font-size: 0.85rem; font-weight: 500; color: #d1d5db; margin-bottom: 0.5rem; }
            .form-control { width: 100%; padding: 0.75rem 1rem; background: #1f2937; border: 1px solid #374151; border-radius: 8px; color: #fff; font-size: 0.95rem; outline: none; transition: border 0.2s; }
            .form-control:focus { border-color: #8b5cf6; }
            .btn-submit { width: 100%; padding: 0.85rem; background: linear-gradient(135deg, #8b5cf6, #6366f1); border: none; border-radius: 8px; color: #fff; font-weight: 600; font-size: 1rem; cursor: pointer; transition: opacity 0.2s; }
            .btn-submit:hover { opacity: 0.9; }
            .error-msg { background: rgba(239, 68, 68, 0.1); border: 1px solid rgba(239, 68, 68, 0.3); color: #f87171; padding: 0.75rem; border-radius: 8px; font-size: 0.85rem; margin-bottom: 1.25rem; text-align: center; }
            .hint-box { margin-top: 1.5rem; padding: 0.75rem; background: #1e1b4b; border: 1px solid #3730a3; border-radius: 8px; font-size: 0.8rem; color: #c7d2fe; text-align: center; }
        </style>
    </head>
    <body>
        <div class="login-card">
            <h1>InboxWa Console</h1>
            <p>Sign in to view captured leads & inquiries</p>
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
                <button type="submit" name="login_submit" class="btn-submit">Sign In to Dashboard</button>
            </form>
            <div class="hint-box">
                🔑 Default Credentials:<br>Username: <strong>admin</strong> | Password: <strong>admin123</strong>
            </div>
        </div>
    </body>
    </html>
    <?php
    exit;
}

// Fetch Leads & Handle Actions
$db = hb_pdo();

// Status update action
if (isset($_GET['action']) && $_GET['action'] === 'update_status' && isset($_GET['id'], $_GET['status'])) {
    $id = (int)$_GET['id'];
    $status = preg_replace('/[^a-z_]/', '', strtolower($_GET['status']));
    $stmt = $db->prepare("UPDATE leads SET status = ? WHERE id = ?");
    $stmt->execute([$status, $id]);
    header('Location: /secure-console-x7/');
    exit;
}

// Export CSV action
if (isset($_GET['action']) && $_GET['action'] === 'export') {
    header('Content-Type: text/csv; charset=utf-8');
    header('Content-Disposition: attachment; filename=inboxwa_leads_' . date('Y-m-d') . '.csv');
    $output = fopen('php://output', 'w');
    fputcsv($output, ['ID', 'Type', 'Name', 'Business', 'Email', 'Phone', 'WhatsApp', 'Product', 'Requirement', 'Message', 'Source Page', 'Status', 'Created At']);
    
    $stmt = $db->query("SELECT id, type, name, business, email, phone, whatsapp, product, requirement, message, source_page, status, created_at FROM leads ORDER BY id DESC");
    while ($row = $stmt->fetch(PDO::FETCH_ASSOC)) {
        fputcsv($output, $row);
    }
    fclose($output);
    exit;
}

// Filter query
$filterType = $_GET['type'] ?? 'all';
$searchQuery = trim($_GET['q'] ?? '');

$sql = "SELECT * FROM leads WHERE 1=1";
$params = [];

if ($filterType !== 'all') {
    $sql .= " AND type = ?";
    $params[] = $filterType;
}

if ($searchQuery !== '') {
    $sql .= " AND (name LIKE ? OR email LIKE ? OR phone LIKE ? OR business LIKE ?)";
    $q = '%' . $searchQuery . '%';
    $params = array_merge($params, [$q, $q, $q, $q]);
}

$sql .= " ORDER BY id DESC LIMIT 100";
$stmt = $db->prepare($sql);
$stmt->execute($params);
$leads = $stmt->fetchAll();

// Metrics
$totalLeads = $db->query("SELECT COUNT(*) FROM leads")->fetchColumn();
$newLeads = $db->query("SELECT COUNT(*) FROM leads WHERE status = 'new'")->fetchColumn();
$demoRequests = $db->query("SELECT COUNT(*) FROM leads WHERE type = 'demo'")->fetchColumn();
$contactRequests = $db->query("SELECT COUNT(*) FROM leads WHERE type = 'contact'")->fetchColumn();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>InboxWa Lead Management Console</title>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap" rel="stylesheet">
    <style>
        * { box-sizing: border-box; margin: 0; padding: 0; font-family: 'Inter', sans-serif; }
        body { background: #090d16; color: #e5e7eb; min-height: 100vh; display: flex; flex-direction: column; }
        header { background: #111827; border-bottom: 1px solid #1f2937; padding: 1rem 2rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; }
        .logo { font-size: 1.25rem; font-weight: 800; color: #fff; display: flex; align-items: center; gap: 0.5rem; }
        .logo span { background: linear-gradient(135deg, #8b5cf6, #6366f1); -webkit-background-clip: text; -webkit-text-fill-color: transparent; }
        .user-nav { display: flex; align-items: center; gap: 1rem; }
        .btn { padding: 0.5rem 1rem; border-radius: 8px; font-size: 0.875rem; font-weight: 600; text-decoration: none; cursor: pointer; border: none; display: inline-flex; align-items: center; gap: 0.5rem; transition: background 0.2s; }
        .btn-primary { background: #8b5cf6; color: #fff; }
        .btn-primary:hover { background: #7c3aed; }
        .btn-outline { background: transparent; border: 1px solid #374151; color: #d1d5db; }
        .btn-outline:hover { background: #1f2937; color: #fff; }
        .btn-danger { background: rgba(239, 68, 68, 0.2); color: #f87171; border: 1px solid rgba(239, 68, 68, 0.3); }
        .btn-danger:hover { background: rgba(239, 68, 68, 0.3); }

        .container { width: 100%; max-width: 1400px; margin: 0 auto; padding: 2rem 1.5rem; flex: 1; }

        .stats-grid { display: grid; grid-template-columns: repeat(auto-fit, minmax(220px, 1fr)); gap: 1.25rem; margin-bottom: 2rem; }
        .stat-card { background: #111827; border: 1px solid #1f2937; border-radius: 12px; padding: 1.25rem; }
        .stat-card .label { font-size: 0.85rem; color: #9ca3af; margin-bottom: 0.5rem; text-transform: uppercase; letter-spacing: 0.05em; }
        .stat-card .val { font-size: 1.85rem; font-weight: 700; color: #fff; }

        .controls-bar { background: #111827; border: 1px solid #1f2937; border-radius: 12px; padding: 1rem 1.25rem; margin-bottom: 1.5rem; display: flex; justify-content: space-between; align-items: center; flex-wrap: wrap; gap: 1rem; }
        .filter-group { display: flex; align-items: center; gap: 0.75rem; flex-wrap: wrap; }
        .search-input, .select-input { padding: 0.5rem 0.85rem; background: #1f2937; border: 1px solid #374151; border-radius: 8px; color: #fff; font-size: 0.875rem; outline: none; }
        .search-input { min-width: 240px; }

        .table-responsive { background: #111827; border: 1px solid #1f2937; border-radius: 12px; overflow-x: auto; }
        table { width: 100%; border-collapse: collapse; text-align: left; font-size: 0.875rem; }
        th { background: #1f2937; padding: 0.85rem 1rem; color: #9ca3af; font-weight: 600; text-transform: uppercase; font-size: 0.75rem; letter-spacing: 0.05em; }
        td { padding: 1rem; border-bottom: 1px solid #1f2937; color: #d1d5db; }
        tr:last-child td { border-bottom: none; }
        tr:hover td { background: rgba(255,255,255,0.02); }

        .badge { display: inline-block; padding: 0.25rem 0.6rem; border-radius: 9999px; font-size: 0.75rem; font-weight: 600; text-transform: capitalize; }
        .badge-new { background: rgba(59, 130, 246, 0.2); color: #60a5fa; border: 1px solid rgba(59, 130, 246, 0.3); }
        .badge-contacted { background: rgba(245, 158, 11, 0.2); color: #fbbf24; border: 1px solid rgba(245, 158, 11, 0.3); }
        .badge-converted { background: rgba(34, 197, 94, 0.2); color: #4ade80; border: 1px solid rgba(34, 197, 94, 0.3); }
        .badge-type { background: #374151; color: #e5e7eb; }

        .empty-state { text-align: center; padding: 4rem 2rem; color: #6b7280; }
    </style>
</head>
<body>
    <header>
        <div class="logo">
            ⚡ <span>InboxWa Console</span>
        </div>
        <div class="user-nav">
            <span>Logged in as <strong>admin</strong></span>
            <a href="?action=export" class="btn btn-outline">📥 Export CSV</a>
            <a href="?action=logout" class="btn btn-danger">Logout</a>
        </div>
    </header>

    <div class="container">
        <div class="stats-grid">
            <div class="stat-card">
                <div class="label">Total Leads</div>
                <div class="val"><?php echo $totalLeads; ?></div>
            </div>
            <div class="stat-card">
                <div class="label">New Leads</div>
                <div class="val" style="color:#60a5fa"><?php echo $newLeads; ?></div>
            </div>
            <div class="stat-card">
                <div class="label">Demo Requests</div>
                <div class="val" style="color:#c084fc"><?php echo $demoRequests; ?></div>
            </div>
            <div class="stat-card">
                <div class="label">Contact Inquiries</div>
                <div class="val" style="color:#4ade80"><?php echo $contactRequests; ?></div>
            </div>
        </div>

        <div class="controls-bar">
            <form method="get" action="" class="filter-group">
                <input type="text" name="q" class="search-input" placeholder="Search by name, email, phone..." value="<?php echo htmlspecialchars($searchQuery); ?>">
                <select name="type" class="select-input" onchange="this.form.submit()">
                    <option value="all" <?php echo $filterType === 'all' ? 'selected' : ''; ?>>All Form Types</option>
                    <option value="contact" <?php echo $filterType === 'contact' ? 'selected' : ''; ?>>Contact Forms</option>
                    <option value="demo" <?php echo $filterType === 'demo' ? 'selected' : ''; ?>>Demo Requests</option>
                    <option value="callback" <?php echo $filterType === 'callback' ? 'selected' : ''; ?>>Callback Requests</option>
                    <option value="offer" <?php echo $filterType === 'offer' ? 'selected' : ''; ?>>Offer Claims</option>
                </select>
                <button type="submit" class="btn btn-outline">Filter</button>
            </form>
            <div>
                Showing <strong><?php echo count($leads); ?></strong> results
            </div>
        </div>

        <div class="table-responsive">
            <?php if (empty($leads)): ?>
                <div class="empty-state">
                    <h3>No leads found</h3>
                    <p style="margin-top:0.5rem">Submissions from site forms will appear here automatically.</p>
                </div>
            <?php else: ?>
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Type</th>
                            <th>Lead Info</th>
                            <th>Message / Detail</th>
                            <th>Source</th>
                            <th>Status</th>
                            <th>Date</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($leads as $lead): ?>
                            <tr>
                                <td>#<?php echo $lead['id']; ?></td>
                                <td><span class="badge badge-type"><?php echo htmlspecialchars($lead['type'] ?? 'contact'); ?></span></td>
                                <td>
                                    <strong><?php echo htmlspecialchars($lead['name']); ?></strong><br>
                                    <span style="font-size:0.8rem;color:#9ca3af"><?php echo htmlspecialchars($lead['email']); ?></span><br>
                                    <span style="font-size:0.8rem;color:#60a5fa"><?php echo htmlspecialchars($lead['phone']); ?></span>
                                    <?php if (!empty($lead['business'])): ?>
                                        <br><span style="font-size:0.75rem;color:#d1d5db">🏢 <?php echo htmlspecialchars($lead['business']); ?></span>
                                    <?php endif; ?>
                                </td>
                                <td style="max-width:300px">
                                    <?php if (!empty($lead['requirement'])): ?>
                                        <strong>Req:</strong> <?php echo htmlspecialchars($lead['requirement']); ?><br>
                                    <?php endif; ?>
                                    <?php echo htmlspecialchars($lead['message'] ?: '—'); ?>
                                </td>
                                <td><span style="font-size:0.8rem;color:#9ca3af"><?php echo htmlspecialchars(basename($lead['source_page'] ?: '/')); ?></span></td>
                                <td>
                                    <?php $st = strtolower($lead['status'] ?? 'new'); ?>
                                    <span class="badge badge-<?php echo $st; ?>"><?php echo $st; ?></span>
                                </td>
                                <td style="font-size:0.8rem;color:#9ca3af"><?php echo htmlspecialchars($lead['created_at']); ?></td>
                                <td>
                                    <a href="?action=update_status&id=<?php echo $lead['id']; ?>&status=contacted" class="btn btn-outline" style="padding:0.25rem 0.5rem;font-size:0.75rem">Mark Contacted</a>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
