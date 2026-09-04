<?php
$basePath = '../../';
$pageTitle = 'Download InboxWa for iOS';
$pageDescription = 'InboxWa iPhone and iPad app for inbox, automation and notifications.';
$canonicalUrl = 'https://inboxwa.com/resources/download-ios-app/';
$appLinks = require __DIR__ . '/../../config/app-links.php';
include __DIR__ . '/../../includes/header.php';
$ios = trim($appLinks['ios'] ?? '');
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=1">
<nav class="container" style="padding-top:calc(var(--nav,72px)+1rem);font-size:.85rem;color:var(--t3)"><a href="/">Home</a> / Resources / iOS App</nav>
<section class="section page-hero" style="padding-top:1.25rem"><div class="container"><div class="section-header reveal">
<span class="badge badge-primary">iOS</span>
<h1>InboxWa for iPhone &amp; iPad</h1>
<p class="lead">Stay close to customer conversations with a mobile-first agent experience.</p>
<?php if ($ios): ?>
<a class="btn btn-primary btn-lg" style="margin-top:1rem" href="<?php echo htmlspecialchars($ios); ?>" target="_blank" rel="noopener"> Download on the App Store</a>
<?php else: ?>
<a class="btn btn-primary btn-lg" style="margin-top:1rem" href="https://inboxwa.com/auth/login">Use Web App until App Store link is live</a>
<?php endif; ?>
</div></div></section>
<section class="section"><div class="container"><div class="res-grid">
<div class="card res-card reveal"><h3>Inbox on the go</h3><p>Reply, assign and resolve chats from iOS.</p></div>
<div class="card res-card reveal"><h3>Notifications</h3><p>Stay aware of high-priority conversations.</p></div>
<div class="card res-card reveal"><h3>Security</h3><p>Workspace access controls and session practices.</p></div>
</div>
<div class="card reveal" style="margin-top:1.5rem;padding:1.5rem;text-align:center">
<p>QR / App Store badge appears when <code>config/app-links.php</code> has a valid iOS URL.</p>
</div>
</div></section>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
