<?php
$basePath = "";
$pageTitle = 'WhatsApp Automation Software & AI Chatbot for Business | HelloBotz';
$pageDescription = 'HelloBotz is an AI chatbot for business & WhatsApp automation software with Official WhatsApp Business API, shared inbox, CRM & broadcast campaigns.';
$pageKeywords = 'whatsapp automation software, whatsapp marketing tool, whatsapp business API, AI chatbot for business, whatsapp CRM software, lead generation chatbot, instagram automation tool, live chat handover software, AI automation platform India, omnichannel customer engagement platform, whatsapp broadcast campaign tool, facebook messenger automation, whatsapp marketing automation';
$reqPath = parse_url($_SERVER['REQUEST_URI'] ?? '/', PHP_URL_PATH) ?: '/';
$canonicalUrl = 'https://hellobotz.com' . ($reqPath === '/index.php' ? '/' : $reqPath);
include __DIR__ . '/includes/header.php';
?>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "WebSite",
  "name": "HelloBotz",
  "url": "https://hellobotz.com/",
  "publisher": {
    "@type": "Organization",
    "name": "HelloBotz AI Technologies Pvt Ltd",
    "url": "https://hellobotz.com/"
  },
  "potentialAction": {
    "@type": "RegisterAction",
    "target": "https://hellobotz.com/auth/register"
  }
}
</script>
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "SoftwareApplication",
  "name": "HelloBotz WhatsApp Automation Software",
  "applicationCategory": "BusinessApplication",
  "operatingSystem": "Web",
  "url": "https://hellobotz.com/",
  "description": "Leading WhatsApp automation software and AI chatbot for business with Official WhatsApp Business API, shared inbox, broadcasts, flow builder and CRM.",
  "offers": {
    "@type": "Offer",
    "price": "0",
    "priceCurrency": "USD",
    "description": "Free trial available"
  },
  "provider": {
    "@type": "Organization",
    "name": "HelloBotz AI Technologies Pvt Ltd"
  }
}
</script>

  <!-- HERO -->
  <section class="hb-hero" aria-label="Hero">
    <div class="container">
      <div class="hb-hero-grid">
        <div class="hb-hero-copy">
          <div class="hb-hero-badge">Official WhatsApp Business API · AI Automation Platform India</div>
          <h1>WhatsApp Automation Software &amp; AI Chatbot for Business</h1>
          <p class="hb-lead">HelloBotz is an premier <strong>AI automation platform India</strong> offering leading <strong>WhatsApp automation software</strong> and <strong>WhatsApp marketing tool</strong>. Power sales and support with the <strong>Official WhatsApp Business API</strong>, <strong>lead generation chatbot</strong>, <strong>WhatsApp CRM software</strong>, <strong>instagram automation tool</strong>, and <strong>live chat handover software</strong> — all on one <strong>omnichannel customer engagement platform</strong>.</p>
          <div class="hb-hero-ctas">
            <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
            <button type="button" class="btn-ghost-light btn-demo-open">Book a Live Demo</button>
          </div>
          <div class="hb-stats">
            <div class="hb-stat"><b>10M+</b><span>Messages delivered</span></div>
            <div class="hb-stat"><b>99.9%</b><span>API uptime</span></div>
            <div class="hb-stat"><b>24/7</b><span>Bot coverage</span></div>
            <div class="hb-stat"><b>1 inbox</b><span>All channels</span></div>
          </div>
        </div>

        <div class="hb-phone-stage" aria-hidden="false">
          <div class="hb-float hb-float-1"><b>+128</b>Leads today</div>
          <div class="hb-float hb-float-2"><b>24/7</b>Bot active</div>
          <div class="hb-float hb-float-3"><b>18k</b>Messages sent</div>

          <div class="hb-phone">
            <div class="hb-phone-notch"></div>
            <div class="hb-phone-screen">
              <div class="hb-wa-head">
                <div class="hb-wa-av">HB</div>
                <div>
                  <strong>HelloBotz</strong>
                  <small>online</small>
                </div>
              </div>
              <div class="hb-wa-body" id="hb-wa-body">
                <div class="hb-typing" id="hb-typing"><i></i><i></i><i></i></div>
                <div class="hb-chips" id="hb-chips">
                  <button type="button" data-chip>WhatsApp API</button>
                  <button type="button" data-chip>AI Chatbot</button>
                  <button type="button" data-chip>Automation</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script>
  (function(){
    /* phone conversation loop */
    var body = document.getElementById('hb-wa-body');
    var typing = document.getElementById('hb-typing');
    var chips = document.getElementById('hb-chips');
    if(!body || !typing) return;
    var steps = [
      {type:'typing', ms:700},
      {type:'user', text:'Hi, I want to know about your services.'},
      {type:'typing', ms:900},
      {type:'bot', text:'Sure! 👋 How can I help you today?'},
      {type:'chips', ms:1200},
      {type:'pick', text:'AI Chatbot'},
      {type:'typing', ms:800},
      {type:'bot', text:'Great choice! 🤖 HelloBotz qualifies leads and answers FAQs on WhatsApp — then hands off to your team.'},
      {type:'bot', text:'Ready to see it live? Tap Book a Live Demo →'},
      {type:'pause', ms:2800}
    ];
    function clearMsgs(){
      body.querySelectorAll('.hb-msg').forEach(function(m){ m.remove(); });
      chips.classList.remove('on');
      chips.querySelectorAll('button').forEach(function(b){ b.classList.remove('pick'); });
      typing.classList.remove('on');
    }
    function addMsg(kind, text){
      var d = document.createElement('div');
      d.className = 'hb-msg ' + kind;
      d.textContent = text;
      body.insertBefore(d, typing);
      requestAnimationFrame(function(){ d.classList.add('show'); });
    }
    var running = false;
    function run(){
      if(running) return;
      running = true;
      clearMsgs();
      var i = 0;
      function next(){
        if(i >= steps.length){
          running = false;
          setTimeout(run, 600);
          return;
        }
        var s = steps[i++];
        if(s.type === 'typing'){
          typing.classList.add('on');
          setTimeout(function(){ typing.classList.remove('on'); next(); }, s.ms||700);
        } else if(s.type === 'user' || s.type === 'bot'){
          addMsg(s.type, s.text);
          setTimeout(next, 650);
        } else if(s.type === 'chips'){
          chips.classList.add('on');
          setTimeout(next, s.ms||1000);
        } else if(s.type === 'pick'){
          var btns = chips.querySelectorAll('button');
          btns.forEach(function(b){
            if(b.textContent.indexOf('AI') >= 0) b.classList.add('pick');
          });
          addMsg('user', s.text);
          setTimeout(next, 700);
        } else if(s.type === 'pause'){
          setTimeout(next, s.ms||2000);
        } else next();
      }
      next();
    }
    if(!window.matchMedia('(prefers-reduced-motion: reduce)').matches) run();
    else {
      addMsg('bot', 'HelloBotz — WhatsApp API, AI chatbot & automation on one platform.');
    }
  })();
  </script>

  <!-- TRUSTED -->
  <section class="trusted-section">
    <div class="container">
      <p class="trusted-label" data-i18n="trusted_label">Trusted by teams running customer messaging at scale with WhatsApp automation software</p>
      <div class="trusted-logos">
        <div class="trusted-logo-item">
          <img src="assets/images/brands/brand-1.png" alt="WhatsApp automation software enterprise client brand" width="140" height="40" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
          <span class="logo-placeholder" style="display:none">Brand 1</span>
        </div>
        <div class="trusted-logo-item">
          <img src="assets/images/brands/brand-2.png" alt="WhatsApp marketing tool partner brand" width="140" height="40" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
          <span class="logo-placeholder" style="display:none">Brand 2</span>
        </div>
        <div class="trusted-logo-item">
          <img src="assets/images/brands/brand-3.png" alt="AI chatbot for business ecommerce user brand" width="140" height="40" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
          <span class="logo-placeholder" style="display:none">Brand 3</span>
        </div>
        <div class="trusted-logo-item">
          <img src="assets/images/brands/brand-4.png" alt="Official WhatsApp business API client brand" width="140" height="40" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
          <span class="logo-placeholder" style="display:none">Brand 4</span>
        </div>
        <div class="trusted-logo-item">
          <img src="assets/images/brands/brand-5.png" alt="Lead generation chatbot platform client" width="140" height="40" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
          <span class="logo-placeholder" style="display:none">Brand 5</span>
        </div>
        <div class="trusted-logo-item">
          <img src="assets/images/brands/brand-6.png" alt="Omnichannel customer engagement platform enterprise client" width="140" height="40" loading="lazy" onerror="this.style.display='none';this.nextElementSibling.style.display='flex'">
          <span class="logo-placeholder" style="display:none">Brand 6</span>
        </div>
      </div>
    </div>
  </section>

  <!-- WHY -->
  <section class="section section-gradient-1" id="why">
    <div class="container">
      <div class="section-header reveal">
        <span class="badge badge-primary" data-i18n="why_badge">Why HelloBotz</span>
        <h2>Why Choose HelloBotz WhatsApp Automation Software</h2>
        <p class="lead" data-i18n="why_lead">One <strong>omnichannel customer engagement platform</strong> unifying Official WhatsApp API, <strong>instagram automation tool</strong>, <strong>facebook messenger automation</strong>, Telegram, <strong>live chat handover software</strong>, and Voice — with <strong>whatsapp marketing automation</strong> your sales team can effortlessly run.</p>
      </div>
      <div class="why-grid features-center">
        <div class="card card-feature card-center reveal">
          <div class="icon-box icon-box-gradient"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></div>
          <strong class="card-title" data-i18n="why_c1_t">Official WhatsApp Business API Infrastructure</strong>
          <p data-i18n="why_c1_p">Meta-approved WhatsApp Business API with official green-tick verification, broadcast templates, and high-volume delivery reliability.</p>
        </div>
        <div class="card card-feature card-center reveal reveal-delay-1">
          <div class="icon-box icon-box-accent"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="3"/><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/></svg></div>
          <strong class="card-title" data-i18n="why_c2_t">Omnichannel Customer Engagement Platform</strong>
          <p data-i18n="why_c2_p">Manage WhatsApp, Instagram DMs, Facebook Messenger, Telegram, Live Chat &amp; Voice inside one unified team timeline.</p>
        </div>
        <div class="card card-feature card-center reveal reveal-delay-2">
          <div class="icon-box icon-box-success"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 2v4M12 18v4M4.93 4.93l2.83 2.83M16.24 16.24l2.83 2.83M2 12h4M18 12h4"/></svg></div>
          <strong class="card-title" data-i18n="why_c3_t">High-Converting Chatbot &amp; WhatsApp Marketing Automation</strong>
          <p data-i18n="why_c3_p">Automate lead capture, support FAQs, broadcasts, abandoned cart recovery, and appointment bookings with AI automation platform India tools.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- PRODUCTS GRID -->
  <section class="section" id="platform">
    <div class="container">
      <div class="section-header reveal">
        <span class="badge badge-dark" data-i18n="prod_badge">Products</span>
        <h2>All-in-One WhatsApp Marketing Tool &amp; Omnichannel Features</h2>
        <p class="lead" data-i18n="prod_lead">From initial customer lead capture to closed sales deal — power your business with shared inbox, <strong>whatsapp broadcast campaign tool</strong>, visual flow builder, and <strong>whatsapp CRM software</strong>.</p>
      </div>
      <div class="features-grid features-center">
        <div class="card card-feature card-center reveal">
          <div class="icon-box icon-box-gradient"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg></div>
          <strong class="card-title">Official WhatsApp Business API</strong>
          <p>Meta Business API access, template approvals, green-tick badge support, and reliable high-volume message delivery.</p>
        </div>
        <div class="card card-feature card-center reveal reveal-delay-1">
          <div class="icon-box icon-box-accent"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-6l-2 3h-4l-2-3H2"/><path d="M5.45 5.11L2 12v6a2 2 0 002 2h16a2 2 0 002-2v-6l-3.45-6.89A2 2 0 0016.76 4H7.24a2 2 0 00-1.79 1.11z"/></svg></div>
          <strong class="card-title">Shared Inbox with Live Chat Handover</strong>
          <p>Assign customer chats, internal notes, SLA tracking, and instant agent handoffs across every channel.</p>
        </div>
        <div class="card card-feature card-center reveal reveal-delay-2">
          <div class="icon-box icon-box-success"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></div>
          <strong class="card-title">WhatsApp Broadcast Campaign Tool</strong>
          <p>Targeted segmented bulk WhatsApp messages, automated broadcasts, and real-time open and reply analytics.</p>
        </div>
        <div class="card card-feature card-center reveal">
          <div class="icon-box icon-box-gradient"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="6" height="6" rx="1"/><rect x="15" y="3" width="6" height="6" rx="1"/><rect x="9" y="15" width="6" height="6" rx="1"/><path d="M6 9v3a3 3 0 003 3h6a3 3 0 003-3V9"/></svg></div>
          <strong class="card-title">Visual No-Code Flow Builder</strong>
          <p>Build custom automated customer journeys for sales qualification, lead generation chatbot flows, and support.</p>
        </div>
        <div class="card card-feature card-center reveal reveal-delay-1">
          <div class="icon-box icon-box-accent"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div>
          <strong class="card-title">WhatsApp CRM Software</strong>
          <p>Organize customer contacts, custom tags, deal pipelines, and complete interaction history linked directly to WhatsApp chats.</p>
        </div>
        <div class="card card-feature card-center reveal reveal-delay-2">
          <div class="icon-box icon-box-success"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/></svg></div>
          <strong class="card-title">AI Chatbot for Business &amp; Auto-replies</strong>
          <p>Smart FAQ auto-responders, keyword triggers, 24/7 AI lead capture, and smooth human agent live chat handover software.</p>
        </div>
        <div class="card card-feature card-center reveal">
          <div class="icon-box icon-box-gradient"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-6"/></svg></div>
          <strong class="card-title">Real-Time Messaging Analytics</strong>
          <p>Track agent response speeds, broadcast campaign ROI, conversion rates, and team performance metrics live.</p>
        </div>
        <div class="card card-feature card-center reveal reveal-delay-1">
          <div class="icon-box icon-box-accent"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div>
          <strong class="card-title">Google Workspace Connectivity</strong>
          <p>Sync Google Calendar appointments, Google Sheets lead records, and Google Forms submissions right into your chat workflow.</p>
        </div>
        <div class="card card-feature card-center reveal reveal-delay-2">
          <div class="icon-box icon-box-success"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></div>
          <strong class="card-title">Shopify &amp; WooCommerce E-Commerce Automation</strong>
          <p>Automate abandoned cart recovery, order confirmation messages, shipping updates, and product catalogs on WhatsApp.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- WHATSAPP API HIGHLIGHT -->
  <section class="section section-gradient-2" id="whatsapp-api">
    <div class="container">
      <div class="split-section">
        <div class="split-content reveal">
          <span class="badge badge-primary">Official WhatsApp Business API</span>
          <h2>Scale Campaigns with Official WhatsApp Business API</h2>
          <p class="lead">Reach thousands of targeted buyers instantly with our high-converting <strong>whatsapp broadcast campaign tool</strong> and <strong>whatsapp marketing automation</strong> engine built for Meta compliance.</p>
          <ul class="check-list">
            <li>Meta-approved message templates &amp; rich interactive media buttons</li>
            <li>Official green-tick verified WhatsApp business profile support</li>
            <li>Direct Click-to-WhatsApp ad tracking &amp; instant lead generation</li>
            <li>Automated order status notifications &amp; multi-tier product catalogs</li>
          </ul>
          <a href="products/whatsapp-api" class="btn btn-primary">Explore WhatsApp API Features</a>
        </div>
        <div class="media-slot reveal reveal-delay-1">
          <div class="media-slot-placeholder">
            <div class="play-hint"><svg viewBox="0 0 24 24" fill="currentColor"><path d="M8 5v14l11-7z"/></svg></div>
            <span>Official WhatsApp Business API Dashboard &amp; Shared Inbox Preview</span>
            <small>HelloBotz WhatsApp Automation Software Interface</small>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- PRODUCT VIDEO -->
  <section class="section" id="product-video">
    <div class="container">
      <div class="section-header reveal">
        <span class="badge badge-primary">Platform Walkthrough</span>
        <h2>Watch HelloBotz WhatsApp Marketing Automation in Action</h2>
        <p class="lead">See how our <strong>AI chatbot for business</strong>, <strong>whatsapp CRM software</strong>, broadcast campaigns, and shared team inbox work in unison.</p>
      </div>
      <div class="video-section-inner reveal">
        <div class="video-frame">
          <div class="video-placeholder">
            <div class="play-hint"><svg viewBox="0 0 24 24" fill="currentColor" width="22" height="22"><path d="M8 5v14l11-7z"/></svg></div>
            <strong style="color:#fff">HelloBotz WhatsApp Automation Software Demo</strong>
            <span>Official WhatsApp Business API &amp; AI Chatbot Walkthrough</span>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- OMNICHANNEL -->
  <section class="section section-dark" id="omnichannel">
    <div class="container">
      <div class="section-header reveal">
        <span class="badge badge-primary">Omnichannel Engagement</span>
        <h2>Omnichannel Customer Engagement &amp; Instagram Automation Tool</h2>
        <p class="lead">Engage customers wherever they message. HelloBotz combines WhatsApp, Instagram DMs, Facebook Messenger, and website live chat into one unified inbox with <strong>live chat handover software</strong>.</p>
      </div>
      <div class="channels-grid">
        <div class="channel-card reveal">
          <div class="channel-icon channel-wa" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M17.472 14.382c-.297-.149-1.758-.867-2.03-.967-.273-.099-.471-.148-.67.15-.197.297-.767.966-.94 1.164-.173.199-.347.223-.644.075-.297-.15-1.255-.463-2.39-1.475-.883-.788-1.48-1.761-1.653-2.059-.173-.297-.018-.458.13-.606.134-.133.298-.347.446-.52.149-.174.198-.298.298-.497.099-.198.05-.371-.025-.52-.075-.149-.669-1.612-.916-2.207-.242-.579-.487-.5-.669-.51-.173-.008-.371-.01-.57-.01-.198 0-.52.074-.792.372-.272.297-1.04 1.016-1.04 2.479 0 1.462 1.065 2.875 1.213 3.074.149.198 2.096 3.2 5.077 4.487.709.306 1.262.489 1.694.625.712.227 1.36.195 1.871.118.571-.085 1.758-.719 2.006-1.413.248-.694.248-1.289.173-1.413-.074-.124-.272-.198-.57-.347m-5.421 7.403h-.004a9.87 9.87 0 01-5.031-1.378l-.361-.214-3.741.982.998-3.648-.235-.374a9.86 9.86 0 01-1.51-5.26c.001-5.45 4.436-9.884 9.888-9.884 2.64 0 5.122 1.03 6.988 2.898a9.825 9.825 0 012.893 6.994c-.003 5.45-4.435 9.884-9.885 9.884m8.413-18.297A11.815 11.815 0 0012.05 0C5.495 0 .16 5.335.157 11.892c0 2.096.547 4.142 1.588 5.945L.057 24l6.305-1.654a11.882 11.882 0 005.683 1.448h.005c6.554 0 11.89-5.335 11.893-11.893a11.821 11.821 0 00-3.48-8.413z"/></svg>
          </div>
          <strong class="card-title">WhatsApp Marketing Automation</strong>
          <p>Official Business API Inbox</p>
        </div>
        <div class="channel-card reveal reveal-delay-1">
          <div class="channel-icon channel-ig" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M12 2.163c3.204 0 3.584.012 4.85.07 3.252.148 4.771 1.691 4.919 4.919.058 1.265.069 1.645.069 4.849 0 3.205-.012 3.584-.069 4.849-.149 3.225-1.664 4.771-4.919 4.919-1.266.058-1.644.07-4.85.07-3.204 0-3.584-.012-4.849-.07-3.26-.149-4.771-1.699-4.919-4.92-.058-1.265-.07-1.644-.07-4.849 0-3.204.013-3.583.07-4.849.149-3.227 1.664-4.771 4.919-4.919 1.266-.057 1.645-.069 4.849-.069zM12 0C8.741 0 8.333.014 7.053.072 2.695.272.273 2.69.073 7.052.014 8.333 0 8.741 0 12c0 3.259.014 3.668.072 4.948.2 4.358 2.618 6.78 6.98 6.98C8.333 23.986 8.741 24 12 24c3.259 0 3.668-.014 4.948-.072 4.354-.2 6.782-2.618 6.979-6.98.059-1.28.073-1.689.073-4.948 0-3.259-.014-3.667-.072-4.947-.196-4.354-2.617-6.78-6.979-6.98C15.668.014 15.259 0 12 0zm0 5.838a6.162 6.162 0 100 12.324 6.162 6.162 0 000-12.324zM12 16a4 4 0 110-8 4 4 0 010 8zm6.406-11.845a1.44 1.44 0 100 2.881 1.44 1.44 0 000-2.881z"/></svg>
          </div>
          <strong class="card-title">Instagram Automation Tool</strong>
          <p>DMs &amp; Comment Auto-replies</p>
        </div>
        <div class="channel-card reveal reveal-delay-1">
          <div class="channel-icon channel-fb" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M24 12.073c0-6.627-5.373-12-12-12s-12 5.373-12 12c0 5.99 4.388 10.954 10.125 11.854v-8.385H7.078v-3.47h3.047V9.43c0-3.007 1.792-4.669 4.533-4.669 1.312 0 2.686.235 2.686.235v2.953H15.83c-1.491 0-1.956.925-1.956 1.874v2.25h3.328l-.532 3.47h-2.796v8.385C19.612 23.027 24 18.062 24 12.073z"/></svg>
          </div>
          <strong class="card-title">Facebook Messenger Automation</strong>
          <p>Page Messages &amp; Ads Leads</p>
        </div>
        <div class="channel-card reveal reveal-delay-2">
          <div class="channel-icon channel-tg" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="currentColor"><path d="M11.944 0A12 12 0 0 0 0 12a12 12 0 0 0 12 12 12 12 0 0 0 12-12A12 12 0 0 0 12 0a12 12 0 0 0-.056 0zm4.962 7.224c.1-.002.321.023.465.14a.506.506 0 0 1 .171.325c.016.093.036.306.02.472-.15 1.568-.769 5.233-1.087 6.94-.134.69-.402 1.215-.652 1.386-.54.34-1.113.29-1.553.176-.69-.175-1.212-.507-1.88-.872-.855-.463-1.339-.726-2.166-1.164-.96-.513-.337-.796.21-1.259.143-.121 2.68-2.456 2.727-2.666.006-.026.014-.125-.047-.177s-.146-.03-.209-.018c-.09.018-1.517.962-4.28 2.826-.405.278-.772.415-1.1.408-.362-.008-1.06-.204-1.578-.373-.635-.207-1.14-.316-1.096-.666.023-.183.356-.37.98-.561 3.836-1.672 6.394-2.776 7.674-3.313 3.66-1.52 4.42-1.784 4.916-1.793z"/></svg>
          </div>
          <strong class="card-title">Telegram Bot Automation</strong>
          <p>Channel &amp; Group Support</p>
        </div>
        <div class="channel-card reveal reveal-delay-2">
          <div class="channel-icon channel-chat" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg>
          </div>
          <strong class="card-title">Live Chat Handover Software</strong>
          <p>Website Chat Widget</p>
        </div>
        <div class="channel-card reveal reveal-delay-3">
          <div class="channel-icon channel-voice" aria-hidden="true">
            <svg viewBox="0 0 24 24" width="28" height="28" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 16.92v3a2 2 0 0 1-2.18 2 19.79 19.79 0 0 1-8.63-3.07 19.5 19.5 0 0 1-6-6 19.79 19.79 0 0 1-3.07-8.67A2 2 0 0 1 4.11 2h3a2 2 0 0 1 2 1.72 12.84 12.84 0 0 0 .7 2.81 2 2 0 0 1-.45 2.11L8.09 9.91a16 16 0 0 0 6 6l1.27-1.27a2 2 0 0 1 2.11-.45 12.84 12.84 0 0 0 2.81.7A2 2 0 0 1 22 16.92z"/></svg>
          </div>
          <strong class="card-title">Voice &amp; Click-to-Call</strong>
          <p>Instant Phone Routing</p>
        </div>
      </div>
    </div>
  </section>

  <!-- INDUSTRIES -->
  <section class="section" id="industries" aria-labelledby="industries-heading">
    <div class="container">
      <div class="section-header reveal">
        <span class="badge badge-primary" data-i18n="ind_badge">Industries</span>
        <h2 id="industries-heading" data-i18n="ind_title">Industry-Specific WhatsApp CRM &amp; Lead Generation Chatbot Solutions</h2>
        <p class="lead" data-i18n="ind_lead">Customized <strong>whatsapp automation software</strong> and <strong>AI chatbot for business</strong> for E-commerce, Education, Healthcare, IT, Hotels, Real Estate, BFSI, and Retail across India and global markets.</p>
      </div>
      <div class="industries-grid features-center">
        <a href="industries/ecommerce" class="card card-center industry-card reveal" title="WhatsApp API for E-commerce">
          <div class="icon-box icon-box-gradient" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></div>
          <strong class="card-title" data-i18n="ind_ecom_t">E-commerce</strong>
          <p data-i18n="ind_ecom_p">Cart recovery, shipping updates and product catalog checkout on Official WhatsApp API.</p>
        </a>
        <a href="industries/education" class="card card-center industry-card reveal reveal-delay-1" title="WhatsApp API for Education">
          <div class="icon-box icon-box-accent" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10l-10-5L2 10l10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div>
          <strong class="card-title" data-i18n="ind_edu_t">Education</strong>
          <p data-i18n="ind_edu_p">Student admission inquiries, fee reminders and automated lead generation chatbot flows.</p>
        </a>
        <a href="industries/healthcare" class="card card-center industry-card reveal reveal-delay-2" title="WhatsApp API for Healthcare">
          <div class="icon-box icon-box-success" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
          <strong class="card-title" data-i18n="ind_health_t">Healthcare</strong>
          <p data-i18n="ind_health_p">Doctor appointment scheduling, automated reminders and patient follow-ups via WhatsApp.</p>
        </a>
        <a href="industries/communication-it" class="card card-center industry-card reveal" title="WhatsApp API for Communication and IT">
          <div class="icon-box icon-box-gradient" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="3" width="20" height="14" rx="2"/><path d="M8 21h8M12 17v4"/></svg></div>
          <strong class="card-title" data-i18n="ind_it_t">Communication &amp; IT</strong>
          <p data-i18n="ind_it_p">Support ticketing, incident alerts and IT service client messaging automation.</p>
        </a>
        <a href="industries/hotel-restaurant" class="card card-center industry-card reveal reveal-delay-1" title="WhatsApp API for Hotels and Restaurants">
          <div class="icon-box icon-box-accent" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V10l7-5 7 5v11"/><path d="M9 21v-6h6v6"/></svg></div>
          <strong class="card-title" data-i18n="ind_hotel_t">Hotel &amp; Restaurant</strong>
          <p data-i18n="ind_hotel_p">Room reservations, table booking and guest concierge via WhatsApp &amp; Instagram automation.</p>
        </a>
        <a href="industries/real-estate" class="card card-center industry-card reveal reveal-delay-2" title="WhatsApp API for Real Estate">
          <div class="icon-box icon-box-success" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l7-4 7 4v14"/></svg></div>
          <strong class="card-title" data-i18n="ind_re_t">Real Estate</strong>
          <p data-i18n="ind_re_p">Automated property lead capture, site-visit scheduling and agent lead handover software.</p>
        </a>

        <a href="industries/finance-bfsi" class="card card-center industry-card reveal" title="WhatsApp API for Finance and BFSI">
          <div class="icon-box icon-box-gradient" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></div>
          <strong class="card-title">Finance &amp; BFSI</strong>
          <p>Secure KYC alerts, EMI payment reminders and confidential customer support messaging.</p>
        </a>
        <a href="industries/travel-tourism" class="card card-center industry-card reveal" title="WhatsApp API for Travel and Tourism">
          <div class="icon-box icon-box-accent" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg></div>
          <strong class="card-title">Travel &amp; Tourism</strong>
          <p>Tour booking updates, itinerary dispatch and traveler support across messaging channels.</p>
        </a>
        <a href="industries/retail" class="card card-center industry-card reveal" title="WhatsApp API for Retail">
          <div class="icon-box icon-box-success" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><path d="M3 6h18M16 10a4 4 0 01-8 0"/></svg></div>
          <strong class="card-title">Retail</strong>
          <p>Personalized store promotions, customer loyalty programs and instant WhatsApp support.</p>
        </a>
        <a href="industries/logistics" class="card card-center industry-card reveal" title="WhatsApp API for Logistics">
          <div class="icon-box icon-box-gradient" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="1" y="3" width="15" height="13"/><path d="M16 8h4l3 3v5h-7V8z"/><circle cx="5.5" cy="18.5" r="2.5"/><circle cx="18.5" cy="18.5" r="2.5"/></svg></div>
          <strong class="card-title">Logistics</strong>
          <p>Real-time package tracking alerts, delivery status updates and driver dispatch notifications.</p>
        </a>
        <a href="industries/automotive" class="card card-center industry-card reveal" title="WhatsApp API for Automotive">
          <div class="icon-box icon-box-accent" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M5 17h14v-5l-2-5H7l-2 5v5z"/><circle cx="7.5" cy="17.5" r="1.5"/><circle cx="16.5" cy="17.5" r="1.5"/></svg></div>
          <strong class="card-title">Automotive</strong>
          <p>Test-drive booking automation, vehicle service reminders and dealership lead management.</p>
        </a>
        <a href="industries/government-ngo" class="card card-center industry-card reveal" title="WhatsApp API for Government and NGO">
          <div class="icon-box icon-box-success" aria-hidden="true"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M12 22s8-4 8-10V5l-8-3-8 3v7c0 6 8 10 8 10z"/></svg></div>
          <strong class="card-title">Government &amp; NGO</strong>
          <p>Public service announcements, grievance support helpdesks and large-scale community outreach.</p>
        </a>
      </div>
    </div>
  </section>

  <!-- INTEGRATIONS -->
  <section class="section section-alt" id="integrations">
    <div class="container">
      <div class="section-header reveal">
        <span class="badge badge-primary" data-i18n="int_badge">Integrations</span>
        <h2>Seamless E-Commerce &amp; CRM Integrations</h2>
        <p class="lead">Connect your stack with native integrations for Shopify, WooCommerce, Google Workspace, CRMs, and webhooks.</p>
      </div>
      <div class="integrations-grid features-center">
        <div class="card card-center integration-card reveal"><div class="icon-box icon-box-success"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="9" cy="21" r="1"/><circle cx="20" cy="21" r="1"/><path d="M1 1h4l2.68 13.39a2 2 0 002 1.61h9.72a2 2 0 002-1.61L23 6H6"/></svg></div><strong class="card-title">Shopify WhatsApp</strong></div>
        <div class="card card-center integration-card reveal"><div class="icon-box icon-box-accent"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 9l9-7 9 7v11a2 2 0 01-2 2H5a2 2 0 01-2-2z"/></svg></div><strong class="card-title">WooCommerce Sync</strong></div>
        <div class="card card-center integration-card reveal"><div class="icon-box icon-box-gradient"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 2h-3a5 5 0 00-5 5v3H7v4h3v8h4v-8h3l1-4h-4V7a1 1 0 011-1h3z"/></svg></div><strong class="card-title">Facebook Ads Leads</strong></div>
        <div class="card card-center integration-card reveal"><div class="icon-box icon-box-accent"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="4" width="18" height="18" rx="2"/><path d="M16 2v4M8 2v4M3 10h18"/></svg></div><strong class="card-title">Google Calendar</strong></div>
        <div class="card card-center integration-card reveal"><div class="icon-box icon-box-success"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M14 2H6a2 2 0 00-2 2v16a2 2 0 002 2h12a2 2 0 002-2V8z"/><path d="M14 2v6h6"/></svg></div><strong class="card-title">Google Sheets</strong></div>
        <div class="card card-center integration-card reveal"><div class="icon-box icon-box-gradient"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 11l3 3L22 4"/><path d="M21 12v7a2 2 0 01-2 2H5a2 2 0 01-2-2V5a2 2 0 012-2h11"/></svg></div><strong class="card-title">Google Forms</strong></div>
        <div class="card card-center integration-card reveal"><div class="icon-box icon-box-accent"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M17 21v-2a4 4 0 00-4-4H5a4 4 0 00-4 4v2"/><circle cx="9" cy="7" r="4"/></svg></div><strong class="card-title">Enterprise CRM</strong></div>
        <div class="card card-center integration-card reveal"><div class="icon-box icon-box-success"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M10 13a5 5 0 007.54.54l3-3a5 5 0 00-7.07-7.07l-1.72 1.71"/><path d="M14 11a5 5 0 00-7.54-.54l-3 3a5 5 0 007.07 7.07l1.71-1.71"/></svg></div><strong class="card-title">Custom Webhooks</strong></div>
      </div>
    </div>
  </section>

  <!-- RESULTS -->
  <section class="section">
    <div class="container">
      <div class="section-header reveal">
        <span class="badge badge-primary" data-i18n="res_badge">Results</span>
        <h2>Proven Results with Lead Generation Chatbot Automation</h2>
      </div>
      <div class="stats-grid">
        <div class="stat-item reveal"><div class="stat-number" data-count="98">98</div><div class="stat-suffix">%</div><p>Official WhatsApp delivery rate</p></div>
        <div class="stat-item reveal reveal-delay-1"><div class="stat-number" data-count="60">60</div><div class="stat-suffix">%</div><p>Faster first response speed</p></div>
        <div class="stat-item reveal reveal-delay-2"><div class="stat-number" data-count="3">3</div><div class="stat-suffix">x</div><p>Higher broadcast campaign replies</p></div>
      </div>
      <div class="testimonials-grid">
        <div class="card testimonial-card reveal">
          <p>"All our customer support and sales chats live in HelloBotz. Auto-replies handle repetitive FAQs while our live chat handover software routes hot leads to agents."</p>
          <div class="testimonial-author"><div class="avatar">PK</div><div><strong>Priya Kapoor</strong><span>Head of Support</span></div></div>
        </div>
        <div class="card testimonial-card reveal reveal-delay-1">
          <p>"Using the WhatsApp broadcast campaign tool and visual flow builder gave us a direct path from lead capture to booked demo. Calendar sync was seamless."</p>
          <div class="testimonial-author"><div class="avatar">RM</div><div><strong>Rahul Mehta</strong><span>Growth Lead</span></div></div>
        </div>
        <div class="card testimonial-card reveal reveal-delay-2">
          <p>"Our team scaled support agents effortlessly with the shared inbox. Official WhatsApp Business API access with HelloBotz gave us true competitive edge."</p>
          <div class="testimonial-author"><div class="avatar">AS</div><div><strong>Ananya Sharma</strong><span>CX Director</span></div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- FAQ -->
  <section class="section section-alt" id="faq">
    <div class="container">
      <div class="section-header reveal">
        <span class="badge badge-dark">FAQ</span>
        <h2>Frequently Asked Questions About WhatsApp Business API</h2>
      </div>
      <div class="faq-list">
        <div class="faq-item">
          <button type="button" class="faq-question" aria-expanded="false">What is HelloBotz WhatsApp automation software?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="faq-answer"><div class="faq-answer-inner">HelloBotz is a premier AI automation platform India offering Official Meta WhatsApp Business API, AI chatbot for business, shared team inbox, visual flow builder, WhatsApp CRM software, and native e-commerce integrations for Shopify and WooCommerce.</div></div>
        </div>
        <div class="faq-item">
          <button type="button" class="faq-question" aria-expanded="false">Is this Official Meta WhatsApp Business API?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="faq-answer"><div class="faq-answer-inner">Yes. HelloBotz operates on Meta’s Official WhatsApp Business API with template approvals, green-tick badge support, and enterprise-grade message delivery.</div></div>
        </div>
        <div class="faq-item">
          <button type="button" class="faq-question" aria-expanded="false">Which channels are supported on the omnichannel platform?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="faq-answer"><div class="faq-answer-inner">WhatsApp, Instagram automation tool DMs, Facebook Messenger automation, Telegram bots, website live chat handover software, and Voice — all unified in one team workspace.</div></div>
        </div>
        <div class="faq-item">
          <button type="button" class="faq-question" aria-expanded="false">Can I connect Shopify, WooCommerce, or Google Calendar?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button>
          <div class="faq-answer"><div class="faq-answer-inner">Yes. Native integrations support Shopify, WooCommerce, Google Calendar, Google Sheets, Google Forms, Facebook Click-to-WhatsApp ads, CRMs, and custom webhooks.</div></div>
        </div>
      </div>
    </div>
  </section>

  <!-- CTA -->
  <section class="section final-cta-section">
    <div class="container">
      <div class="cta-band reveal">
        <h2>Get Started with AI Automation Platform India Today</h2>
        <p data-i18n="cta_lead">Start your free trial today. Access Official WhatsApp Business API, shared inbox, broadcast campaigns, and automated workflows built for growth.</p>
        <div class="hero-cta">
          <a href="https://hellobotz.com/auth/register" class="btn btn-white btn-lg">Start Free Trial</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:#fff;color:#fff;background:transparent">Book a Live Demo</button>
        </div>
      </div>
    </div>
  </section>

<?php
include __DIR__ . '/includes/offer-popup.php';
include __DIR__ . '/includes/callback-popup.php';
include __DIR__ . '/includes/footer.php';
?>
