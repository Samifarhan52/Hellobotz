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

<div class="hb-story-wrapper">
  <!-- HERO STAGE (MATCHING EXACT DESIGN MOCKUP IMAGE) -->
  <section class="hb-hero" aria-label="Hero">
    <div class="container">
      <div class="hb-hero-grid">
        <div class="hb-hero-copy">
          <div class="hb-hero-badge">Official WhatsApp Business API · Meta Tech Partner</div>
          <h1>WhatsApp Automation Software &amp; <span class="hb-grad">AI Chatbot</span> for Business</h1>
          <p class="hb-lead">Boost engagement, qualify leads, and provide 24/7 support with seamless, AI-powered WhatsApp conversations. Integrate instantly and scale efficiently.</p>
          <div class="hb-hero-ctas">
            <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg">Start Automating - It's Free</a>
            <button type="button" class="btn btn-outline btn-lg btn-demo-open">Book a Demo</button>
          </div>
          <div class="hb-stats">
            <div class="hb-stat" style="background:#fff;border:1px solid #E2E8F0;box-shadow:0 2px 8px rgba(15,23,42,0.04);"><b style="color:#8B5CF6">10M+</b><span style="color:#475569">Messages delivered</span></div>
            <div class="hb-stat" style="background:#fff;border:1px solid #E2E8F0;box-shadow:0 2px 8px rgba(15,23,42,0.04);"><b style="color:#06B6D4">99.9%</b><span style="color:#475569">API uptime</span></div>
            <div class="hb-stat" style="background:#fff;border:1px solid #E2E8F0;box-shadow:0 2px 8px rgba(15,23,42,0.04);"><b style="color:#8B5CF6">24/7</b><span style="color:#475569">Bot coverage</span></div>
            <div class="hb-stat" style="background:#fff;border:1px solid #E2E8F0;box-shadow:0 2px 8px rgba(15,23,42,0.04);"><b style="color:#06B6D4">1 inbox</b><span style="color:#475569">All channels</span></div>
          </div>
        </div>

        <div class="hb-phone-stage" aria-hidden="false">
          <div class="hb-float hb-float-1"><b>+128</b>Leads today</div>
          <div class="hb-float hb-float-2"><b>24/7</b>Bot active</div>
          <div class="hb-float hb-float-3"><b>99.9%</b>Delivery</div>

          <div class="hb-phone">
            <div class="hb-phone-notch"></div>
            <div class="hb-phone-screen">
              <div class="hb-wa-head">
                <div class="hb-wa-av">HB</div>
                <div>
                  <strong>HelloBotz AI</strong>
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

      <!-- HERO 4 FEATURE CARDS GRID (EXACT LAYOUT FROM MOCKUP IMAGE) -->
      <div class="hb-hero-cards-grid">
        <div class="hb-hero-card hb-card-light">
          <div class="hb-card-icon icon-purple">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
          </div>
          <h3>Instant Lead Qualification</h3>
          <p>Automated workflow on automated workflows and lead capture.</p>
        </div>

        <div class="hb-hero-card hb-card-dark">
          <div class="hb-card-icon icon-dark-purple">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><circle cx="12" cy="12" r="10"/><polyline points="12 6 12 12 16 14"/></svg>
          </div>
          <h3>24/7 Customer Support</h3>
          <p>Boost engagement, qualify leads, and provide 24/7 customer conversations.</p>
        </div>

        <div class="hb-hero-card hb-card-light">
          <div class="hb-card-icon icon-cyan">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
          </div>
          <h3>Broadcast Campaigns</h3>
          <p>Broadcast campaigns proven and consistent to engaging new prospects.</p>
        </div>

        <div class="hb-hero-card hb-card-dark">
          <div class="hb-card-icon icon-dark-cyan">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 20V10M12 20V4M6 20v-6"/></svg>
          </div>
          <h3>Smart Analytics</h3>
          <p>Performance dashboard on analytics in real-time performance dashboard.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- TRUSTED BY INNOVATIVE BUSINESSES LOGO BAR -->
  <section style="padding:2.5rem 0;background:#FFFFFF;border-bottom:1px solid #E2E8F0;text-align:center;">
    <div class="container">
      <h3 style="font-size:1.1rem;font-weight:700;color:#0F172A;margin-bottom:1.5rem;">Trusted by Innovative Businesses</h3>
      <div style="display:flex;align-items:center;justify-content:center;gap:3rem;flex-wrap:wrap;opacity:0.8;">
        <span style="font-weight:700;color:#475569;font-size:1.1rem;">Meta Business Partner</span>
        <span style="font-weight:700;color:#475569;font-size:1.1rem;">Microsoft</span>
        <span style="font-weight:700;color:#475569;font-size:1.1rem;">Shopify Plus</span>
        <span style="font-weight:700;color:#475569;font-size:1.1rem;">WooCommerce</span>
        <span style="font-weight:700;color:#475569;font-size:1.1rem;">HubSpot</span>
      </div>
    </div>
  </section>

  <!-- STORY CHAPTER 1: OLD WAY VS HELLOBOTZ AI -->
  <section class="hb-story-section">
    <div class="container">
      <div class="hb-story-header">
        <div class="hb-story-badge">THE REVOLUTION</div>
        <h2>Stop Losing Customers to <span class="hb-text-grad">Slow Manual Replies</span></h2>
        <p>Traditional manual messaging leaks 70% of potential sales leads. HelloBotz turns every incoming chat into a closed deal instantly.</p>
      </div>

      <div class="hb-comparison-grid">
        <!-- OLD WAY -->
        <div class="hb-comp-card hb-comp-old">
          <span class="hb-comp-badge">&cross; The Traditional Manual Way</span>
          <div class="hb-comp-title">Slow, Unorganized &amp; Losing Revenue</div>
          <div class="hb-comp-list">
            <div class="hb-comp-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
              <span>Missed customer inquiries after business hours and on weekends.</span>
            </div>
            <div class="hb-comp-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
              <span>Single phone login bottleneck creating customer support delays.</span>
            </div>
            <div class="hb-comp-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
              <span>Risk of number getting banned due to un-official broadcast tools.</span>
            </div>
          </div>
        </div>

        <!-- HELLOBOTZ AI WAY -->
        <div class="hb-comp-card hb-comp-new">
          <span class="hb-comp-badge">&check; The HelloBotz AI Way</span>
          <div class="hb-comp-title">Instant, Automated &amp; Scaling Revenue</div>
          <div class="hb-comp-list">
            <div class="hb-comp-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>Instant 2-second AI auto-replies qualifying leads 24/7/365.</span>
            </div>
            <div class="hb-comp-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>Multi-agent shared team inbox with live chat handover &amp; internal notes.</span>
            </div>
            <div class="hb-comp-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>Official Meta WhatsApp API access with green tick badge support.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- STORY CHAPTER 2: THE 3-STEP GROWTH JOURNEY -->
  <section class="hb-story-section hb-story-section-alt">
    <div class="container">
      <div class="hb-story-header">
        <div class="hb-story-badge">HOW IT WORKS</div>
        <h2>3 Simple Steps to <span class="hb-text-grad">Automate Your Business</span></h2>
        <p>Deploy enterprise-grade WhatsApp automation in under 10 minutes without writing code.</p>
      </div>

      <div class="hb-steps-grid">
        <div class="hb-step-card">
          <div class="hb-step-num">01</div>
          <div class="hb-step-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M21 11.5a8.38 8.38 0 01-.9 3.8 8.5 8.5 0 01-7.6 4.7 8.38 8.38 0 01-3.8-.9L3 21l1.9-5.7a8.38 8.38 0 01-.9-3.8 8.5 8.5 0 014.7-7.6 8.38 8.38 0 013.8-.9h.5a8.48 8.48 0 018 8v.5z"/></svg>
          </div>
          <h3>Connect Meta WhatsApp API</h3>
          <p>Link your official WhatsApp Business number directly via Meta embedded signup in 2 minutes.</p>
        </div>

        <div class="hb-step-card">
          <div class="hb-step-num">02</div>
          <div class="hb-step-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="6" height="6" rx="1"/><rect x="15" y="3" width="6" height="6" rx="1"/><rect x="9" y="15" width="6" height="6" rx="1"/><path d="M6 9v3a3 3 0 003 3h6a3 3 0 003-3V9"/></svg>
          </div>
          <h3>Build AI Chatbot Workflows</h3>
          <p>Use our visual no-code flow builder to design lead qualification bots &amp; support FAQs.</p>
        </div>

        <div class="hb-step-card">
          <div class="hb-step-num">03</div>
          <div class="hb-step-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
          </div>
          <h3>Broadcast &amp; Multiply Sales</h3>
          <p>Send personalized WhatsApp broadcasts to 100,000+ contacts with 98% open rates.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- STORY CHAPTER 3: INTERACTIVE PRODUCT TABS SHOWCASE -->
  <section class="hb-story-section">
    <div class="container">
      <div class="hb-story-header">
        <div class="hb-story-badge">PLATFORM SUITE</div>
        <h2>Everything You Need to <span class="hb-text-grad">Scale Customer Messaging</span></h2>
        <p>Explore the complete suite of HelloBotz tools engineered for high-converting sales &amp; support teams.</p>
      </div>

      <div class="hb-tabs-nav">
        <button type="button" class="hb-tab-btn active" onclick="switchHbTab(event, 'tab-api')">Official WhatsApp API</button>
        <button type="button" class="hb-tab-btn" onclick="switchHbTab(event, 'tab-inbox')">Shared Team Inbox</button>
        <button type="button" class="hb-tab-btn" onclick="switchHbTab(event, 'tab-bot')">AI Flow Builder</button>
        <button type="button" class="hb-tab-btn" onclick="switchHbTab(event, 'tab-broadcast')">Broadcast Campaigns</button>
      </div>

      <div id="tab-api" class="hb-tab-pane active">
        <div class="hb-tab-content">
          <h3>Official Meta WhatsApp Business API</h3>
          <p>Get enterprise reliability with Meta-approved official API access. Enable green tick verification and high-volume delivery.</p>
          <div class="hb-tab-checklist">
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Green Tick Verification badge assistance</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Interactive quick-reply buttons</div>
          </div>
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary" style="margin-top:1rem;">Connect WhatsApp API &rarr;</a>
        </div>
        <div class="hb-tab-preview">
          <div style="font-weight:700;color:#C4B5FD;margin-bottom:0.75rem;font-size:0.85rem;text-transform:uppercase;">Meta API Status</div>
          <div style="background:rgba(255,255,255,0.05);padding:1rem;border-radius:12px;border:1px solid rgba(255,255,255,0.1);">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.5rem;">
              <span style="font-weight:600;color:#fff;">WhatsApp Business API</span>
              <span style="background:rgba(16,185,129,0.2);color:#10B981;padding:0.2rem 0.6rem;border-radius:999px;font-size:0.75rem;font-weight:700;">CONNECTED</span>
            </div>
            <div style="font-size:0.8rem;color:rgba(255,255,255,0.6);">Official Tier 3 Messaging Limit Enabled</div>
          </div>
        </div>
      </div>

      <div id="tab-inbox" class="hb-tab-pane">
        <div class="hb-tab-content">
          <h3>Shared Team Inbox with Live Handover</h3>
          <p>Unify customer conversations across WhatsApp, Instagram DMs, and Facebook Messenger into one shared team workspace.</p>
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary" style="margin-top:1rem;">Try Shared Inbox &rarr;</a>
        </div>
        <div class="hb-tab-preview">
          <div style="font-weight:700;color:#67E8F9;margin-bottom:0.75rem;font-size:0.85rem;text-transform:uppercase;">Team Workspace</div>
          <div style="background:rgba(255,255,255,0.05);padding:1rem;border-radius:12px;border:1px solid rgba(255,255,255,0.1);">
            <div style="font-weight:600;color:#fff;">Agent: Support Assigned &middot; Lead #4819</div>
          </div>
        </div>
      </div>

      <div id="tab-bot" class="hb-tab-pane">
        <div class="hb-tab-content">
          <h3>No-Code Visual AI Flow Builder</h3>
          <p>Drag, drop, and construct conversational AI bots that capture leads and answer support queries 24/7.</p>
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary" style="margin-top:1rem;">Build AI Bot Now &rarr;</a>
        </div>
        <div class="hb-tab-preview">
          <div style="font-weight:700;color:#C4B5FD;margin-bottom:0.75rem;font-size:0.85rem;text-transform:uppercase;">Flow Canvas</div>
          <div style="background:rgba(255,255,255,0.05);padding:1rem;border-radius:12px;border:1px solid rgba(255,255,255,0.1);">
            <div style="color:#fff;font-weight:600;">Trigger: New Inquiry &rarr; AI Bot &rarr; Qualified Lead</div>
          </div>
        </div>
      </div>

      <div id="tab-broadcast" class="hb-tab-pane">
        <div class="hb-tab-content">
          <h3>Targeted Broadcast Campaigns</h3>
          <p>Send bulk WhatsApp messages to targeted customer lists with media attachments and CTA buttons.</p>
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary" style="margin-top:1rem;">Launch Campaign &rarr;</a>
        </div>
        <div class="hb-tab-preview">
          <div style="font-weight:700;color:#67E8F9;margin-bottom:0.75rem;font-size:0.85rem;text-transform:uppercase;">Campaign Analytics</div>
          <div style="background:rgba(255,255,255,0.05);padding:1rem;border-radius:12px;border:1px solid rgba(255,255,255,0.1);">
            <div style="color:#fff;font-weight:600;">Sent: 25,000 &middot; Open Rate: 97.4%</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA BANNER -->
  <section class="hb-story-section">
    <div class="container">
      <div class="hb-cta-banner">
        <h2 style="font-size:clamp(2rem,4vw,3.25rem);font-weight:800;color:#fff;margin-bottom:1rem;">Ready to Transform Your <span style="color:#67E8F9">Customer Messaging?</span></h2>
        <p style="font-size:1.15rem;color:rgba(255,255,255,0.9);max-width:36rem;margin:0 auto 2rem;">Start your 14-day free trial today. Access Official WhatsApp API, Shared Inbox, and AI Flow Builder in minutes.</p>
        <div style="display:flex;justify-content:center;gap:1rem;flex-wrap:wrap;">
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg" style="background:#fff;color:#7C3AED;">Start Free Trial Now &rarr;</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,0.4);color:#fff;background:transparent;">Book a Live Demo</button>
        </div>
      </div>
    </div>
  </section>
</div>

<script>
function switchHbTab(evt, tabId) {
  var btns = document.querySelectorAll('.hb-tab-btn');
  var panes = document.querySelectorAll('.hb-tab-pane');
  btns.forEach(function(b){ b.classList.remove('active'); });
  panes.forEach(function(p){ p.classList.remove('active'); });
  evt.currentTarget.classList.add('active');
  var target = document.getElementById(tabId);
  if(target) target.classList.add('active');
}
</script>

<script>
(function(){
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
    if(chips) chips.classList.remove('on');
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
        if(chips) chips.classList.add('on');
        setTimeout(next, s.ms||1000);
      } else if(s.type === 'pick'){
        addMsg('user', s.text);
        setTimeout(next, 700);
      } else if(s.type === 'pause'){
        setTimeout(next, s.ms||2000);
      } else next();
    }
    next();
  }
  if(!window.matchMedia('(prefers-reduced-motion: reduce)').matches) run();
})();
</script>

<?php
include __DIR__ . '/includes/offer-popup.php';
include __DIR__ . '/includes/callback-popup.php';
include __DIR__ . '/includes/footer.php';
?>
