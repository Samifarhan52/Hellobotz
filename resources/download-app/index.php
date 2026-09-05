<?php
$basePath = '../../';
$pageTitle = 'Download InboxWa App';
$pageDescription = 'Manage conversations, automation and leads from the InboxWa mobile and desktop apps.';
$canonicalUrl = 'https://inboxwa.com/resources/download-app/';
$appLinks = require __DIR__ . '/../../config/app-links.php';
include __DIR__ . '/../../includes/header.php';
$android = trim($appLinks['android'] ?? '');
$ios = trim($appLinks['ios'] ?? '');
$desktop = trim($appLinks['desktop'] ?? '');
?>
<link rel="stylesheet" href="/assets/css/resources.css?v=1">
<nav class="container" style="padding-top:calc(var(--nav,72px)+1rem);font-size:.85rem;color:var(--t3)"><a href="/">Home</a> / Resources / Download App</nav>
<section class="section page-hero" style="padding-top:1.25rem"><div class="container"><div class="section-header reveal">
<span class="badge badge-primary">Apps</span>
<h1>InboxWa wherever you work</h1>
<p class="lead">Manage conversations, automation, leads and customer engagement from anywhere.</p>
<div style="display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center;margin-top:1.5rem">
<?php if ($android): ?><a class="btn btn-primary btn-lg" href="<?php echo htmlspecialchars($android); ?>" target="_blank" rel="noopener">Get it on Google Play</a>
<?php else: ?><a class="btn btn-primary btn-lg" href="#notify">Google Play — coming soon</a><?php endif; ?>
<?php if ($ios): ?><a class="btn btn-outline btn-lg" href="<?php echo htmlspecialchars($ios); ?>" target="_blank" rel="noopener">Download on the App Store</a>
<?php else: ?><a class="btn btn-outline btn-lg" href="/resources/download-ios-app/">iOS App details</a><?php endif; ?>
</div>
</div></div></section>
<section class="section"><div class="container"><div class="res-grid">
<div class="card res-card reveal"><h3>Android</h3><p>Inbox, replies and notifications on the go.</p><?php if ($android): ?><a class="btn btn-sm btn-primary" href="<?php echo htmlspecialchars($android); ?>" target="_blank" rel="noopener">Google Play</a><?php else: ?><span class="btn btn-sm btn-outline" style="opacity:.6;pointer-events:none">Link not configured</span><?php endif; ?></div>
<div class="card res-card reveal"><h3>iOS</h3><p>iPhone and iPad experience for agents and owners.</p><a class="btn btn-sm btn-outline" href="/resources/download-ios-app/">iOS page</a></div>
<div class="card res-card reveal"><h3>Desktop</h3><p>Full workspace in the browser — and desktop when available.</p><?php if ($desktop): ?><a class="btn btn-sm btn-primary" href="<?php echo htmlspecialchars($desktop); ?>">Download Desktop</a><?php else: ?><a class="btn btn-sm btn-outline" href="/auth/login">Open Web App</a><?php endif; ?></div>
</div></div></section>
<section class="section section-alt" id="notify"><div class="container" style="max-width:520px;text-align:center">
<p class="lead">Store links are configured in <code>config/app-links.php</code>. Until then, use the web app.</p>
<a class="btn btn-primary" href="/auth/login">Open InboxWa</a>
</div></section>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
