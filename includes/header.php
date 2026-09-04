<?php
/**
 * HelloBotz global header + SEO meta engine
 * Set before include: $pageTitle, $pageDescription, $pageKeywords,
 * $canonicalUrl, $ogImage, $ogType, $robots, $basePath
 */
if (!isset($basePath)) { $basePath = ''; }
$bp = $basePath;

$SITE_NAME   = 'HelloBotz';
$SITE_DOMAIN = 'https://hellobotz.com';
$DEFAULT_OG  = $SITE_DOMAIN . '/assets/images/og-image.png';

$pageTitle       = isset($pageTitle) ? trim((string)$pageTitle) : '';
$pageDescription = isset($pageDescription) ? trim((string)$pageDescription) : '';
$pageKeywords    = isset($pageKeywords) ? trim((string)$pageKeywords) : '';
$canonicalUrl    = isset($canonicalUrl) ? trim((string)$canonicalUrl) : '';
$ogImage         = isset($ogImage) && $ogImage !== '' ? trim((string)$ogImage) : $DEFAULT_OG;
$ogType          = isset($ogType) ? $ogType : 'website';
$robots          = isset($robots) ? $robots : 'index, follow, max-image-preview:large, max-snippet:-1, max-video-preview:-1';
$twitterCard     = isset($twitterCard) ? $twitterCard : 'summary_large_image';

if ($pageTitle === '') {
  $pageTitle = 'WhatsApp Automation Software & AI Chatbot for Business';
}
if ($pageDescription === '') {
  $pageDescription = 'HelloBotz is an official WhatsApp Business API & WhatsApp automation software with AI chatbot for business, shared inbox, CRM & omnichannel tools.';
}
if ($pageKeywords === '') {
  $pageKeywords = 'whatsapp automation software, whatsapp marketing tool, whatsapp business API, AI chatbot for business, whatsapp CRM software, lead generation chatbot, instagram automation tool, live chat handover software, AI automation platform India';
}
if ($canonicalUrl === '') {
  $reqUri = isset($_SERVER['REQUEST_URI']) ? strtok($_SERVER['REQUEST_URI'], '?') : '/';
  $canonicalUrl = $SITE_DOMAIN . (isset($reqUri[0]) && $reqUri[0] === '/' ? $reqUri : '/' . $reqUri);
}
if (!preg_match('/\.[a-z0-9]+$/i', $canonicalUrl) && substr($canonicalUrl, -1) !== '/') {
  $canonicalUrl .= '/';
}

$fullTitle = (stripos($pageTitle, 'HelloBotz') !== false)
  ? $pageTitle
  : ($pageTitle . ' | ' . $SITE_NAME);

$ogTitle = isset($ogTitle) ? $ogTitle : $pageTitle;
$ogDescription = isset($ogDescription) ? $ogDescription : $pageDescription;
$twitterTitle = isset($twitterTitle) ? $twitterTitle : $ogTitle;
$twitterDescription = isset($twitterDescription) ? $twitterDescription : $ogDescription;

if (!function_exists('hb_seo_esc')) {
  function hb_seo_esc($s) {
    return htmlspecialchars((string)$s, ENT_QUOTES | ENT_SUBSTITUTE, 'UTF-8');
  }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=5.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title><?php echo hb_seo_esc($fullTitle); ?></title>
  <meta name="description" content="<?php echo hb_seo_esc($pageDescription); ?>">
  <meta name="keywords" content="<?php echo hb_seo_esc($pageKeywords); ?>">
  <meta name="author" content="HelloBotz">
  <meta name="robots" content="<?php echo hb_seo_esc($robots); ?>">
  <meta name="googlebot" content="<?php echo (strpos($robots, 'noindex') !== false) ? 'noindex, nofollow' : 'index, follow'; ?>">
  <meta name="theme-color" content="#8B5CF6">
  <meta name="application-name" content="HelloBotz">
  <meta name="format-detection" content="telephone=no">
  <meta name="geo.region" content="IN">
  <meta name="language" content="en">
  <link rel="canonical" href="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <link rel="alternate" hreflang="en" href="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <link rel="alternate" hreflang="en-IN" href="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <link rel="alternate" hreflang="x-default" href="<?php echo hb_seo_esc($canonicalUrl); ?>">

  <meta property="og:type" content="<?php echo hb_seo_esc($ogType); ?>">
  <meta property="og:site_name" content="HelloBotz">
  <meta property="og:locale" content="en_US">
  <meta property="og:title" content="<?php echo hb_seo_esc($ogTitle); ?>">
  <meta property="og:description" content="<?php echo hb_seo_esc($ogDescription); ?>">
  <meta property="og:url" content="<?php echo hb_seo_esc($canonicalUrl); ?>">
  <meta property="og:image" content="<?php echo hb_seo_esc($ogImage); ?>">
  <meta property="og:image:width" content="1200">
  <meta property="og:image:height" content="630">
  <meta property="og:image:alt" content="<?php echo hb_seo_esc($ogTitle); ?>">

  <meta name="twitter:card" content="<?php echo hb_seo_esc($twitterCard); ?>">
  <meta name="twitter:title" content="<?php echo hb_seo_esc($twitterTitle); ?>">
  <meta name="twitter:description" content="<?php echo hb_seo_esc($twitterDescription); ?>">
  <meta name="twitter:image" content="<?php echo hb_seo_esc($ogImage); ?>">
  <meta name="twitter:image:alt" content="<?php echo hb_seo_esc($ogTitle); ?>">

  <link rel="icon" href="/assets/images/favicon-32x32.png" sizes="32x32" type="image/png">
  <link rel="apple-touch-icon" href="/assets/images/apple-touch-icon.png">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="/app.css?v=42">
  <link rel="stylesheet" href="/assets/css/style.css?v=42">
  <link rel="stylesheet" href="/assets/css/mobile-menu.css?v=38">

  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "Organization",
    "name": "HelloBotz AI Technologies Pvt Ltd",
    "url": "https://hellobotz.com/",
    "logo": "https://hellobotz.com/assets/images/logo.png",
    "description": "Official WhatsApp Business API and Omnichannel automation platform for WhatsApp, Instagram, Facebook and Telegram.",
    "email": "hello@hellobotz.com",
    "telephone": "+91-9638911838",
    "address": { "@type": "PostalAddress", "addressCountry": "IN" },
    "contactPoint": [{
      "@type": "ContactPoint",
      "telephone": "+91-9638911838",
      "contactType": "sales",
      "areaServed": "IN",
      "availableLanguage": ["English", "Hindi"]
    }]
  }
  </script>
  <script type="application/ld+json">
  {
    "@context": "https://schema.org",
    "@type": "SoftwareApplication",
    "name": "HelloBotz",
    "applicationCategory": "BusinessApplication",
    "operatingSystem": "Web",
    "url": "https://hellobotz.com/",
    "description": "WhatsApp Business API platform with shared inbox, broadcasts, flow builder, chatbots, CRM and omnichannel automation.",
    "offers": { "@type": "Offer", "price": "0", "priceCurrency": "INR", "description": "Free trial available" }
  }
  </script>
  <?php if (!empty($extraHead)) echo $extraHead; ?>
</head>
<body>

  <a href="#main" class="skip-link">Skip to content</a>
  <header class="site-header" role="banner">
    <div class="header-inner">
      <a href="<?php echo $bp; ?>" class="logo" aria-label="HelloBotz Home">
        <img src="<?php echo $bp; ?>assets/images/logo.png" alt="HelloBotz" class="logo-img" width="140" height="36" onerror="this.onerror=null;this.src='';this.style.display='none';var f=this.parentNode.querySelector('.logo-fallback');if(f)f.style.display='inline-flex'">
        <span class="logo-fallback" style="display:none;align-items:center;gap:0.4rem">
          <span class="logo-icon" style="width:36px;height:36px;display:inline-flex;background:linear-gradient(135deg,#8B5CF6,#6366F1);border-radius:10px;color:#fff;align-items:center;justify-content:center"><svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M12 2L2 7l10 5 10-5-10-5z"/><path d="M2 17l10 5 10-5"/><path d="M2 12l10 5 10-5"/></svg></span>
          <span style="font-weight:800;font-size:1.15rem;color:#0F172A">HelloBotz</span>
        </span>
      </a>
      <nav class="nav-desktop" role="navigation" aria-label="Main">

        <div class="nav-item" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Products <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-panel mega-menu-products" role="menu">
            <div class="mega-products-grid">
              <div class="mega-sol-col">
                <div class="mega-col-title">FEATURES</div>
                <a href="<?php echo $bp; ?>products/whatsapp-business-platform/#whatsapp-api" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Official WhatsApp API</span><span class="mega-link-desc">Meta Business API & green-tick</span></span>
</a>
                <a href="<?php echo $bp; ?>products/whatsapp-business-platform/#team-inbox" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 12h-6l-2 3h-4l-2-3H2"/><path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Shared Team Inbox</span><span class="mega-link-desc">Assign, notes & SLAs</span></span>
</a>
                <a href="<?php echo $bp; ?>products/whatsapp-business-platform/#broadcasts" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Broadcast Campaigns</span><span class="mega-link-desc">Templates at scale</span></span>
</a>
                <a href="<?php echo $bp; ?>products/automation" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4M4.93 19.07l2.83-2.83M16.24 7.76l2.83-2.83"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Automation</span><span class="mega-link-desc">Triggers & workflows</span></span>
</a>
                <a href="<?php echo $bp; ?>products/crm-analytics/#crm" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">CRM</span><span class="mega-link-desc">Leads & pipeline</span></span>
</a>
                <a href="<?php echo $bp; ?>products/crm-analytics/#analytics" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 20V10M12 20V4M6 20v-6"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Analytics</span><span class="mega-link-desc">Campaign & agent reports</span></span>
</a>
                <a href="<?php echo $bp; ?>products/whatsapp-form/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M9 15h6M9 11h6"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">WhatsApp Form</span><span class="mega-link-desc">Lead capture on chat</span></span>
</a>
                <a href="<?php echo $bp; ?>products/chatbot" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/><path d="M8 10h.01M12 10h.01M16 10h.01"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">AI Chatbot &amp; Flow Builder</span><span class="mega-link-desc">Build intelligent no-code customer journeys</span></span>
</a>
              </div>
              <div class="mega-sol-col">
                <div class="mega-col-title">CHANNELS</div>
                <a href="<?php echo $bp; ?>products/channels/whatsapp/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">WhatsApp</span><span class="mega-link-desc">Connect your business channel</span></span>
</a>
                <a href="<?php echo $bp; ?>products/channels/facebook/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Facebook</span><span class="mega-link-desc">Messenger inbox</span></span>
</a>
                <a href="<?php echo $bp; ?>products/channels/instagram/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><path d="M16 11.37A4 4 0 1112.63 8 4 4 0 0116 11.37z"/><line x1="17.5" y1="6.5" x2="17.51" y2="6.5"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Instagram</span><span class="mega-link-desc">DM automation</span></span>
</a>
                <a href="<?php echo $bp; ?>products/channels/telegram/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Telegram</span><span class="mega-link-desc">Bot messaging</span></span>
</a>
              </div>
              <div class="mega-sol-col mega-products-cta">
                <span class="mega-guide-badge">PLATFORM</span>
                <h4>WhatsApp API + Automation</h4>
                <p>Official Meta API, inbox, broadcasts, flows and CRM — built for sales and support teams.</p>
                <a href="https://hellobotz.com/auth/register" class="btn btn-sm btn-primary" style="margin-top:.5rem;align-self:flex-start">Start Free Trial</a>
              </div>
            </div>
          </div>
        </div>

        
        <div class="nav-item" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Solutions <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-solutions" role="menu">
            <div class="mega-solutions-grid">
              <div class="mega-sol-col">
                <div class="mega-col-title">INTEGRATIONS</div>
                <a href="<?php echo $bp; ?>solutions/shopify/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><path d="M3 6h18"/><path d="M16 10a4 4 0 01-8 0"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Shopify</span><span class="mega-link-desc">Orders & abandoned cart</span></span></a>
                <a href="<?php echo $bp; ?>solutions/woocommerce/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">WooCommerce</span><span class="mega-link-desc">Store sync & alerts</span></span></a>
                <a href="<?php echo $bp; ?>solutions/google-forms-sheets/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6M8 13h8M8 17h8M8 9h2"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Google Sheet</span><span class="mega-link-desc">Form → Sheet → WhatsApp</span></span></a>
                <a href="<?php echo $bp; ?>solutions/google-calendar-meet/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/><path d="M8 14h.01M12 14h.01M16 14h.01M8 18h.01M12 18h.01"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Google Calendar</span><span class="mega-link-desc">Book · Meet · Remind</span></span></a>
                <a href="<?php echo $bp; ?>facebook-ads/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Facebook Ads</span><span class="mega-link-desc">Click-to-WhatsApp</span></span></a>
                <a href="<?php echo $bp; ?>integrations/crm/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></span><span class="mega-link-text"><span class="mega-link-title">CRM Integration</span><span class="mega-link-desc">HubSpot & more</span></span></a>
                <a href="<?php echo $bp; ?>integrations/api-webhooks/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Webhooks & API</span><span class="mega-link-desc">Real-time events</span></span></a>
                <a href="<?php echo $bp; ?>integrations/custom/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Custom Integration</span><span class="mega-link-desc">Your stack</span></span></a>
              </div>
              <div class="mega-sol-col">
                <div class="mega-col-title">BY USE CASE</div>
                <a href="<?php echo $bp; ?>solutions/appointment/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Appointments</span><span class="mega-link-desc">Booking & reminders</span></span></a>
                <a href="<?php echo $bp; ?>solutions/class-bookings/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10l-10-5L2 10l10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Class bookings</span><span class="mega-link-desc">Batches & seats</span></span></a>
                <a href="<?php echo $bp; ?>solutions/inventory-subscriptions-invoices/#invoices" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v20M17 5H9.5a3.5 3.5 0 000 7h5a3.5 3.5 0 010 7H6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Invoice & Payments</span><span class="mega-link-desc">Collect on WhatsApp</span></span></a>
                <a href="<?php echo $bp; ?>solutions/inventory-subscriptions-invoices/#subscriptions" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 1l4 4-4 4"/><path d="M3 11V9a4 4 0 014-4h14"/><path d="M7 23l-4-4 4-4"/><path d="M21 13v2a4 4 0 01-4 4H3"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Subscriptions</span><span class="mega-link-desc">Renewals & plans</span></span></a>
                <a href="<?php echo $bp; ?>solutions/inventory-subscriptions-invoices/#inventory" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 16V8a2 2 0 00-1-1.73l-7-4a2 2 0 00-2 0l-7 4A2 2 0 003 8v8a2 2 0 001 1.73l7 4a2 2 0 002 0l7-4A2 2 0 0021 16z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Inventory</span><span class="mega-link-desc">Stock alerts</span></span></a>
                <a href="<?php echo $bp; ?>solutions/marketing-sales-customer-service/#service" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Customer Service</span><span class="mega-link-desc">Support inbox</span></span></a>
                <a href="<?php echo $bp; ?>solutions/marketing-sales-customer-service/#sales" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20V10"/><path d="M18 20V4"/><path d="M6 20v-4"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Sales</span><span class="mega-link-desc">Qualify & close</span></span></a>
                <a href="<?php echo $bp; ?>solutions/marketing-sales-customer-service/#marketing" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 11l18-5v12L3 13v-2z"/><path d="M11.6 16.8a3 3 0 11-5.2-3"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Marketing</span><span class="mega-link-desc">Campaigns & nurture</span></span></a>
                <a href="<?php echo $bp; ?>solutions/recruitment/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M16 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="8.5" cy="7" r="4"/><path d="M20 8v6M23 11h-6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Recruitment</span><span class="mega-link-desc">Hiring on WhatsApp</span></span></a>
                <a href="<?php echo $bp; ?>solutions/collections/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M12 6v6l4 2"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Collections</span><span class="mega-link-desc">Payment reminders</span></span></a>
                <a href="<?php echo $bp; ?>solutions/onboarding/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/><path d="M12 18v-6M9 15h6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Onboarding</span><span class="mega-link-desc">Activate customers</span></span></a>
              </div>
              <div class="mega-sol-col">
                <div class="mega-col-title">BY INDUSTRY</div>
                <a href="<?php echo $bp; ?>industries/healthcare/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Healthcare</span><span class="mega-link-desc">Clinics & care</span></span></a>
                <a href="<?php echo $bp; ?>industries/education/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10l-10-5L2 10l10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Education</span><span class="mega-link-desc">Admissions & fees</span></span></a>
                <a href="<?php echo $bp; ?>industries/ecommerce/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">E-commerce</span><span class="mega-link-desc">Carts & orders</span></span></a>
                <a href="<?php echo $bp; ?>industries/real-estate/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/><path d="M9 22V12h6v10"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Real Estate</span><span class="mega-link-desc">Site visits</span></span></a>
                <a href="<?php echo $bp; ?>industries/automotive/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17h14v2a1 1 0 01-1 1H6a1 1 0 01-1-1v-2z"/><path d="M5 17l-1-7h16l-1 7"/><path d="M7 10V7a1 1 0 011-1h8a1 1 0 011 1v3"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Automotive</span><span class="mega-link-desc">Sales & service</span></span></a>
                <a href="<?php echo $bp; ?>industries/finance/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Finance</span><span class="mega-link-desc">BFSI messaging</span></span></a>
                <a href="<?php echo $bp; ?>solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Data Marketplace</span><span class="mega-link-desc">Business datasets</span></span></a>
              </div>
            </div>
          </div>
        </div>

<div class="nav-item" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Business Leads <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-panel" role="menu">
            <div class="mega-panel">
              <div class="mega-panel-links">
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><ellipse cx="12" cy="5" rx="9" ry="3"/><path d="M21 12c0 1.66-4 3-9 3s-9-1.34-9-3"/><path d="M3 5v14c0 1.66 4 3 9 3s9-1.34 9-3V5"/></svg></span><span class="mega-link-text"><span class="mega-link-title">All Datasets</span><span class="mega-link-desc">Browse marketplace</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Real Estate Leads</span><span class="mega-link-desc">Buyers & businesses</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10l-10-5L2 10l10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Education Leads</span><span class="mega-link-desc">Institutes & students</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Healthcare Leads</span><span class="mega-link-desc">Clinics & wellness</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></span><span class="mega-link-text"><span class="mega-link-title">E-commerce Leads</span><span class="mega-link-desc">D2C & online brands</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17h14v2H5v-2z"/><path d="M5 17l-1-7h16l-1 7"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Automotive Leads</span><span class="mega-link-desc">Dealers & buyers</span></span></a>
                <a href="/solutions/data-marketplace/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></span><span class="mega-link-text"><span class="mega-link-title">B2B Business Data</span><span class="mega-link-desc">Owners & companies</span></span></a>
                <a href="/solutions/data-marketplace/#custom-request" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 5v14M5 12h14"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Custom Data Request</span><span class="mega-link-desc">Tell us your audience</span></span></a>
              </div>
              <div class="mega-panel-aside">
                <strong>Data Marketplace</strong>
                <p>Category-wise business datasets. Request access on WhatsApp — no public pricing.</p>
                <a href="/solutions/data-marketplace/" class="btn btn-primary btn-sm">Explore Marketplace</a>
              </div>
            </div>
          </div>
        </div>
<div class="nav-item" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Resources <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-panel" role="menu">
            <div class="mega-panel" style="display:grid;grid-template-columns:repeat(4,minmax(140px,1fr));gap:1.25rem;padding:1.25rem;min-width:min(720px,90vw)">
              <div>
                <div class="mega-col-title">SUPPORT</div>
                <a href="/resources/help-center/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><path d="M9.09 9a3 3 0 015.83 1c0 2-3 3-3 3M12 17h.01"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Help Center</span><span class="mega-link-desc">Guides & FAQs</span></span></a>
                <a href="/resources/help-center/#support-form" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15a2 2 0 01-2 2H7l-4 4V5a2 2 0 012-2h14a2 2 0 012 2z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Contact Support</span><span class="mega-link-desc">Raise a ticket</span></span></a>
              </div>
              <div>
                <div class="mega-col-title">DEVELOPERS</div>
                <a href="/integrations/api-webhooks/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="16 18 22 12 16 6"/><polyline points="8 6 2 12 8 18"/></svg></span><span class="mega-link-text"><span class="mega-link-title">API Docs</span><span class="mega-link-desc">REST & webhooks</span></span></a>
                <a href="/resources/documentation/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M4 19.5A2.5 2.5 0 016.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 014 19.5v-15A2.5 2.5 0 016.5 2z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Documentation</span><span class="mega-link-desc">Product guides</span></span></a>
              </div>
              <div>
                <div class="mega-col-title">LEARN</div>
                <a href="/resources/blog/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 20h9"/><path d="M16.5 3.5a2.12 2.12 0 013 3L7 19l-4 1 1-4L16.5 3.5z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Blog</span><span class="mega-link-desc">Tips & insights</span></span></a>
                <a href="/resources/case-studies/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Case Studies</span><span class="mega-link-desc">Customer results</span></span></a>
                <a href="/resources/templates/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="18" height="18" rx="2"/><path d="M3 9h18M9 21V9"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Templates</span><span class="mega-link-desc">Message templates</span></span></a>
              </div>
              <div>
                <div class="mega-col-title">DOWNLOADS</div>
                <a href="/resources/download-app/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 15v4a2 2 0 01-2 2H5a2 2 0 01-2-2v-4"/><polyline points="7 10 12 15 17 10"/><line x1="12" y1="15" x2="12" y2="3"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Download App</span><span class="mega-link-desc">Android & desktop</span></span></a>
                <a href="/resources/download-ios-app/" class="mega-link" role="menuitem"><span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2a7 7 0 017 7c0 5-7 13-7 13S5 14 5 9a7 7 0 017-7z"/></svg></span><span class="mega-link-text"><span class="mega-link-title">Download iOS App</span><span class="mega-link-desc">iPhone & iPad</span></span></a>
              </div>
            </div>
          </div>
        </div>
<div class="nav-item"><a href="/pricing/" class="nav-link">Pricing</a></div>

        <div class="nav-item" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Partners <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-sm" role="menu">
            <div class="mega-panel mega-panel-single">
              <div class="mega-panel-links">
                <a href="/partners/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Affiliate Partner</span><span class="mega-link-desc">Refer &amp; earn</span></span>
</a>
                <a href="/partners/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 21v-2a4 4 0 00-4-4H6a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M22 21v-2a4 4 0 00-3-3.87M16 3.13a4 4 0 010 7.75"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Agency Partner</span><span class="mega-link-desc">Serve your clients</span></span>
</a>
                <a href="/partners/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20.59 13.41l-7.17 7.17a2 2 0 01-2.83 0L2 12V2h10l8.59 8.59a2 2 0 010 2.82z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">White Label Partner</span><span class="mega-link-desc">Your brand, our platform</span></span>
</a>
                <a href="/partners/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2v6M8 8H4a2 2 0 00-2 2v8a2 2 0 002 2h16a2 2 0 002-2v-8a2 2 0 00-2-2h-4"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Technology Partner</span><span class="mega-link-desc">Build integrations</span></span>
</a>
              </div>
            
                <div class="mega-cta-box">
                  <p>Grow with HelloBotz as a partner or reseller.</p>
                  <a href="/partners/" class="btn btn-primary btn-sm">Join Our Partner Program</a>
                </div>
</div>
          </div>
        </div>

        <div class="nav-item" data-mega>
          <button type="button" class="nav-link" aria-expanded="false" aria-haspopup="true">Company <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mega-menu mega-menu-sm" role="menu">
            <div class="mega-panel mega-panel-single">
              <div class="mega-panel-links">
                <a href="/company/about/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><path d="M12 16v-4M12 8h.01"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">About</span><span class="mega-link-desc">Our mission</span></span>
</a>
                <a href="/company/careers/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="7" width="20" height="14" rx="2"/><path d="M16 7V5a2 2 0 00-2-2h-4a2 2 0 00-2 2v2"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Careers</span><span class="mega-link-desc">Join the team</span></span>
</a>
                <a href="/contact/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-green"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 4h16c1.1 0 2 .9 2 2v12c0 1.1-.9 2-2 2H4c-1.1 0-2-.9-2-2V6c0-1.1.9-2 2-2z"/><path d="M22 6l-10 7L2 6"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Contact</span><span class="mega-link-desc">Talk to us</span></span>
</a>
                <a href="/security/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-pink"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Security</span><span class="mega-link-desc">Data protection</span></span>
</a>
                <a href="/privacy/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-purple"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="11" rx="2"/><path d="M7 11V7a5 5 0 0110 0v4"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Privacy</span><span class="mega-link-desc">Privacy policy</span></span>
</a>
                <a href="/terms/" class="mega-link" role="menuitem">
  <span class="mega-icon mega-icon-blue"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/></svg></span>
  <span class="mega-link-text"><span class="mega-link-title">Terms</span><span class="mega-link-desc">Terms of service</span></span>
</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
      <div class="header-actions">
        <div class="lang-switch" id="lang-switch">
          <button type="button" class="lang-switch-btn" id="lang-switch-btn" aria-haspopup="listbox" aria-expanded="false" title="Language">
            <svg viewBox="0 0 24 24" width="16" height="16" fill="none" stroke="currentColor" stroke-width="2" aria-hidden="true"><circle cx="12" cy="12" r="10"/><path d="M2 12h20M12 2a15.3 15.3 0 010 20M12 2a15.3 15.3 0 000 20"/></svg>
            <span id="lang-switch-label">EN</span>
          </button>
          <ul class="lang-switch-menu" id="lang-switch-menu" role="listbox" hidden>
            <li role="option" data-lang="en" class="active">English</li>
            <li role="option" data-lang="ar">العربية</li>
            <li role="option" data-lang="es">Español</li>
            <li role="option" data-lang="pt">Português</li>
            <li role="option" data-lang="de">Deutsch</li>
            <li role="option" data-lang="fr">Français</li>
          </ul>
        </div>
        <a href="https://hellobotz.com/auth/login" class="header-login"><span>Login</span></a>
        <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-sm header-cta-start">Start Free</a>
        <button type="button" class="mobile-toggle" aria-label="Open menu" aria-expanded="false"><span></span><span></span><span></span></button>
      </div>
    </div>
  </header>

  <div class="mobile-menu" id="mobile-menu" role="dialog" aria-label="Mobile navigation" hidden aria-hidden="true" style="display:none">
    <div class="mobile-backdrop"></div>
    <div class="mobile-drawer">
      <div class="mobile-drawer-header">
        <a href="<?php echo $bp; ?>" class="logo" aria-label="HelloBotz Home">
          <img src="<?php echo $bp; ?>assets/images/logo.png" alt="HelloBotz" class="logo-img" width="120" height="32" onerror="this.style.display='none'">
        </a>
        <button type="button" class="mobile-close btn btn-icon btn-ghost" aria-label="Close menu"><svg width="20" height="20" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6L6 18M6 6l12 12"/></svg></button>
      </div>
      <div class="mobile-drawer-body">
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Products <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/products/whatsapp-business-platform/#whatsapp-api">Official WhatsApp API</a>
            <a href="/products/whatsapp-business-platform/#team-inbox">Shared Team Inbox</a>
            <a href="/products/whatsapp-business-platform/#broadcasts">Broadcast Campaigns</a>
            <a href="/products/automation/">Automation</a>
            <a href="/products/crm-analytics/#crm">CRM</a>
            <a href="/products/crm-analytics/#analytics">Analytics</a>
            <a href="/products/whatsapp-form/">WhatsApp Form</a>
            <a href="/products/chatbot/">AI Chatbot &amp; Flow Builder</a>
            <a href="/products/channels/whatsapp/">WhatsApp</a>
            <a href="/products/channels/facebook/">Facebook</a>
            <a href="/products/channels/instagram/">Instagram</a>
            <a href="/products/channels/telegram/">Telegram</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Solutions <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/solutions/shopify/">Shopify</a>
            <a href="/solutions/woocommerce/">WooCommerce</a>
            <a href="/solutions/google-forms-sheets/">Google Sheet</a>
            <a href="/solutions/google-calendar-meet/">Google Calendar</a>
            <a href="/solutions/marketing-sales-customer-service/#service">Customer Support</a>
            <a href="/solutions/marketing-sales-customer-service/#sales">Sales &amp; Marketing</a>
            <a href="/solutions/lead-generation/">Lead Generation</a>
            <a href="/solutions/data-marketplace/">Data Marketplace</a>
            <a href="/industries/ecommerce/">E-commerce</a>
            <a href="/industries/education/">Education</a>
            <a href="/industries/healthcare/">Healthcare</a>
            <a href="/industries/real-estate/">Real Estate</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Business Leads <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/solutions/data-marketplace/">All Datasets</a>
            <a href="/solutions/data-marketplace/">Real Estate Leads</a>
            <a href="/solutions/data-marketplace/">Education Leads</a>
            <a href="/solutions/data-marketplace/">Healthcare Leads</a>
            <a href="/solutions/data-marketplace/">E-commerce Leads</a>
            <a href="/solutions/data-marketplace/">B2B Business Data</a>
            <a href="/solutions/data-marketplace/#custom-request">Custom Request</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Resources <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/resources/help-center/">Help Center</a>
            <a href="/resources/help-center/#support-form">Contact Support</a>
            <a href="/integrations/api-webhooks/">API Docs</a>
            <a href="/resources/documentation/">Documentation</a>
            <a href="/resources/blog/">Blog</a>
            <a href="/resources/case-studies/">Case Studies</a>
            <a href="/resources/templates/">Templates</a>
            <a href="/resources/download-app/">Download App</a>
            <a href="/resources/download-ios-app/">Download iOS App</a>
          </div></div>
        </div>
        <div class="mobile-nav-item"><a href="/pricing/" class="mobile-nav-link">Pricing</a></div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Partners <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/partners/">Affiliate Partner</a>
            <a href="/partners/">Agency Partner</a>
            <a href="/partners/">White Label Partner</a>
            <a href="/partners/">Technology Partner</a>
          </div></div>
        </div>
        <div class="mobile-nav-item" data-accordion>
          <button type="button" class="mobile-nav-link">Company <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="mobile-submenu"><div class="mobile-submenu-inner">
            <a href="/company/about/">About</a>
            <a href="/company/careers/">Careers</a>
            <a href="/contact/">Contact</a>
            <a href="/security/">Security</a>
            <a href="/privacy/">Privacy</a>
            <a href="/terms/">Terms</a>
          </div></div>
        </div>
        <div class="mobile-nav-actions">
          <a href="https://hellobotz.com/auth/login" class="mnav-login">Login</a>
          <a href="https://hellobotz.com/auth/register" class="mnav-start">Start Free</a>
          <a href="/#contact-section" class="mnav-demo btn-demo-open">Book a Demo</a>
        </div>
      </div>
    </div>
  </div>
  <main id="main">
