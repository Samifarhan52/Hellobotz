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
  <!-- HERO STORY STAGE -->
  <section class="hb-hero" aria-label="Hero">
    <div class="container">
      <div class="hb-hero-grid">
        <div class="hb-hero-copy">
          <div class="hb-hero-badge">⚡ Meta Tech Partner · Official WhatsApp Business API</div>
          <h1>Automate 90% of Customer Conversations &amp; <span class="hb-grad">Skyrocket Sales</span> on WhatsApp</h1>
          <p class="hb-lead">Replace manual messaging with HelloBotz AI — Official WhatsApp API, No-Code Flow Builder, Shared Inbox, and Automated Broadcasts on one unified platform.</p>
          <div class="hb-hero-ctas">
            <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg">Start Automating Free &rarr;</a>
            <button type="button" class="btn btn-outline btn-lg btn-demo-open">Book a Live Demo</button>
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
    </div>
  </section>

  <!-- CHAPTER 1: OLD WAY VS HELLOBOTZ AI (COMPARISON STORY) -->
  <section class="hb-story-section">
    <div class="container">
      <div class="hb-story-header">
        <div class="hb-story-badge">CHAPTER 01 · THE REVOLUTION</div>
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
            <div class="hb-comp-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><circle cx="12" cy="12" r="10"/><line x1="15" y1="9" x2="9" y2="15"/><line x1="9" y1="9" x2="15" y2="15"/></svg>
              <span>No centralized CRM analytics or agent response tracking.</span>
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
            <div class="hb-comp-item">
              <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M22 11.08V12a10 10 0 1 1-5.93-9.14"/><polyline points="22 4 12 14.01 9 11.01"/></svg>
              <span>Full CRM deal pipeline, automated broadcasts &amp; real-time analytics.</span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CHAPTER 2: THE 3-STEP GROWTH JOURNEY -->
  <section class="hb-story-section">
    <div class="container">
      <div class="hb-story-header">
        <div class="hb-story-badge">CHAPTER 02 · HOW IT WORKS</div>
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
          <p>Link your official WhatsApp Business number directly via Meta embedded signup in 2 minutes. Get green tick support.</p>
        </div>

        <div class="hb-step-card">
          <div class="hb-step-num">02</div>
          <div class="hb-step-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="3" y="3" width="6" height="6" rx="1"/><rect x="15" y="3" width="6" height="6" rx="1"/><rect x="9" y="15" width="6" height="6" rx="1"/><path d="M6 9v3a3 3 0 003 3h6a3 3 0 003-3V9"/></svg>
          </div>
          <h3>Build AI Chatbot Workflows</h3>
          <p>Use our visual no-code flow builder to design lead qualification bots, interactive button menus, and support FAQs.</p>
        </div>

        <div class="hb-step-card">
          <div class="hb-step-num">03</div>
          <div class="hb-step-icon">
            <svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 2L11 13M22 2l-7 20-4-9-9-4 20-7z"/></svg>
          </div>
          <h3>Broadcast &amp; Multiply Sales</h3>
          <p>Send personalized WhatsApp broadcasts to 100,000+ contacts with 98% open rates and track instant conversions.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CHAPTER 3: INTERACTIVE PRODUCT MODULES SHOWCASE -->
  <section class="hb-story-section">
    <div class="container">
      <div class="hb-story-header">
        <div class="hb-story-badge">CHAPTER 03 · PLATFORM SUITE</div>
        <h2>Everything You Need to <span class="hb-text-grad">Scale Customer Messaging</span></h2>
        <p>Explore the complete suite of HelloBotz tools engineered for high-converting sales &amp; support teams.</p>
      </div>

      <!-- TABS NAV -->
      <div class="hb-tabs-nav">
        <button type="button" class="hb-tab-btn active" onclick="switchHbTab(event, 'tab-api')">Official WhatsApp API</button>
        <button type="button" class="hb-tab-btn" onclick="switchHbTab(event, 'tab-inbox')">Shared Team Inbox</button>
        <button type="button" class="hb-tab-btn" onclick="switchHbTab(event, 'tab-bot')">AI Flow Builder</button>
        <button type="button" class="hb-tab-btn" onclick="switchHbTab(event, 'tab-broadcast')">Broadcast Campaigns</button>
        <button type="button" class="hb-tab-btn" onclick="switchHbTab(event, 'tab-crm')">WhatsApp CRM</button>
      </div>

      <!-- TAB PANES -->
      <div id="tab-api" class="hb-tab-pane active">
        <div class="hb-tab-content">
          <h3>Official Meta WhatsApp Business API</h3>
          <p>Get enterprise reliability with Meta-approved official API access. Enable green tick verification, multi-agent access, and high-volume delivery.</p>
          <div class="hb-tab-checklist">
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Green Tick Verification badge assistance</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Interactive quick-reply and call-to-action buttons</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> 99.9% uptime delivery guarantee</div>
          </div>
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary">Connect WhatsApp API &rarr;</a>
        </div>
        <div class="hb-tab-preview">
          <div style="font-weight:700;color:#C4B5FD;margin-bottom:0.75rem;font-size:0.85rem;text-transform:uppercase;">Meta API Status</div>
          <div style="background:rgba(255,255,255,0.05);padding:1rem;border-radius:12px;border:1px solid rgba(255,255,255,0.1);">
            <div style="display:flex;align-items:center;justify-content:space-between;margin-bottom:0.5rem;">
              <span style="font-weight:600;color:#fff;">WhatsApp Business API</span>
              <span style="background:rgba(16,185,129,0.2);color:#10B981;padding:0.2rem 0.6rem;border-radius:999px;font-size:0.75rem;font-weight:700;">CONNECTED</span>
            </div>
            <div style="font-size:0.8rem;color:rgba(255,255,255,0.6);">Official Tier 3 Uncapped Messaging Limit Enabled</div>
          </div>
        </div>
      </div>

      <div id="tab-inbox" class="hb-tab-pane">
        <div class="hb-tab-content">
          <h3>Shared Team Inbox with Live Handover</h3>
          <p>Unify customer conversations across WhatsApp, Instagram DMs, and Facebook Messenger into one shared inbox for your entire team.</p>
          <div class="hb-tab-checklist">
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Multi-agent auto-assignment &amp; round-robin routing</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Internal team chat notes and tag management</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Instant live chat human handover from AI bot</div>
          </div>
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary">Try Shared Inbox &rarr;</a>
        </div>
        <div class="hb-tab-preview">
          <div style="font-weight:700;color:#67E8F9;margin-bottom:0.75rem;font-size:0.85rem;text-transform:uppercase;">Unified Team Inbox</div>
          <div style="background:rgba(255,255,255,0.05);padding:1rem;border-radius:12px;border:1px solid rgba(255,255,255,0.1);">
            <div style="font-weight:600;color:#fff;font-size:0.9rem;">Agent: Sarah Connor assigned to Lead #4819</div>
            <div style="font-size:0.8rem;color:rgba(255,255,255,0.6);margin-top:0.3rem;">Status: Hot Lead &middot; Priority: High</div>
          </div>
        </div>
      </div>

      <div id="tab-bot" class="hb-tab-pane">
        <div class="hb-tab-content">
          <h3>No-Code Visual AI Flow Builder</h3>
          <p>Drag, drop, and construct conversational AI bots that capture leads, book appointments, and answer support queries around the clock.</p>
          <div class="hb-tab-checklist">
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Visual drag-and-drop conversational canvas</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Keyword triggers and smart NLP intent recognition</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Pre-built templates for E-commerce &amp; Real Estate</div>
          </div>
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary">Build AI Bot Now &rarr;</a>
        </div>
        <div class="hb-tab-preview">
          <div style="font-weight:700;color:#C4B5FD;margin-bottom:0.75rem;font-size:0.85rem;text-transform:uppercase;">Visual Canvas</div>
          <div style="background:rgba(255,255,255,0.05);padding:1rem;border-radius:12px;border:1px solid rgba(255,255,255,0.1);">
            <div style="font-weight:600;color:#fff;">Trigger: New Lead Message &rarr; AI Qualification &rarr; Book Demo</div>
          </div>
        </div>
      </div>

      <div id="tab-broadcast" class="hb-tab-pane">
        <div class="hb-tab-content">
          <h3>Targeted Broadcast Campaigns</h3>
          <p>Send bulk WhatsApp messages to targeted customer lists with media attachments, personalized variables, and high-conversion CTA buttons.</p>
          <div class="hb-tab-checklist">
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> High deliverability with Meta compliance</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Smart list segmentation and custom audience tags</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Real-time open, click, and reply analytics</div>
          </div>
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary">Launch Campaign &rarr;</a>
        </div>
        <div class="hb-tab-preview">
          <div style="font-weight:700;color:#67E8F9;margin-bottom:0.75rem;font-size:0.85rem;text-transform:uppercase;">Campaign Analytics</div>
          <div style="background:rgba(255,255,255,0.05);padding:1rem;border-radius:12px;border:1px solid rgba(255,255,255,0.1);">
            <div style="display:flex;justify-content:space-between;color:#fff;font-weight:600;">
              <span>Sent: 25,000</span>
              <span>Delivered: 99.8%</span>
              <span style="color:#06B6D4">Open Rate: 97.4%</span>
            </div>
          </div>
        </div>
      </div>

      <div id="tab-crm" class="hb-tab-pane">
        <div class="hb-tab-content">
          <h3>Built-in WhatsApp CRM &amp; Pipeline</h3>
          <p>Manage lead stages, track deal values, tag contacts, and view complete customer interaction histories inside your WhatsApp environment.</p>
          <div class="hb-tab-checklist">
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Drag-and-drop lead deal stages</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Sync with HubSpot, Salesforce &amp; Google Sheets</div>
            <div class="hb-tab-check"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2.5"><path d="M20 6L9 17l-5-5"/></svg> Automated follow-ups and payment reminders</div>
          </div>
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary">Explore WhatsApp CRM &rarr;</a>
        </div>
        <div class="hb-tab-preview">
          <div style="font-weight:700;color:#C4B5FD;margin-bottom:0.75rem;font-size:0.85rem;text-transform:uppercase;">CRM Pipeline</div>
          <div style="background:rgba(255,255,255,0.05);padding:1rem;border-radius:12px;border:1px solid rgba(255,255,255,0.1);">
            <div style="color:#fff;font-weight:600;">Pipeline: New Lead &rarr; Contacted &rarr; Qualified &rarr; Closed Won</div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- CHAPTER 4: INDUSTRY USE CASES -->
  <section class="hb-story-section">
    <div class="container">
      <div class="hb-story-header">
        <div class="hb-story-badge">CHAPTER 04 · TAILORED SOLUTIONS</div>
        <h2>Automated Journeys Built for <span class="hb-text-grad">Every Industry</span></h2>
        <p>Discover how leading brands across sectors use HelloBotz to drive automated growth.</p>
      </div>

      <div class="hb-ind-grid">
        <div class="hb-ind-card">
          <div class="hb-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M6 2L3 6v14a2 2 0 002 2h14a2 2 0 002-2V6l-3-4z"/><path d="M3 6h18M16 10a4 4 0 01-8 0"/></svg></div>
          <h4>E-Commerce &amp; D2C</h4>
          <p>Recover abandoned carts, send automated order updates, and enable 1-click WhatsApp checkout.</p>
        </div>

        <div class="hb-ind-card">
          <div class="hb-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V7l7-4 7 4v14"/></svg></div>
          <h4>Real Estate</h4>
          <p>Qualify property inquiries automatically, share digital brochures, and book site visits 24/7.</p>
        </div>

        <div class="hb-ind-card">
          <div class="hb-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 10l-10-5L2 10l10 5 10-5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></div>
          <h4>Education &amp; EdTech</h4>
          <p>Automate student course inquiries, fee reminders, and admission application follow-ups.</p>
        </div>

        <div class="hb-ind-card">
          <div class="hb-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M22 12h-4l-3 9L9 3l-3 9H2"/></svg></div>
          <h4>Healthcare &amp; Clinics</h4>
          <p>Schedule doctor appointments, send automated consultation reminders, and dispatch lab reports.</p>
        </div>

        <div class="hb-ind-card">
          <div class="hb-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="5" width="20" height="14" rx="2"/><path d="M2 10h20"/></svg></div>
          <h4>Finance &amp; BFSI</h4>
          <p>Send instant payment alerts, automate loan application collection, and provide secure support.</p>
        </div>

        <div class="hb-ind-card">
          <div class="hb-ind-icon"><svg viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M3 21h18M5 21V10l7-5 7 5v11"/></svg></div>
          <h4>Hotels &amp; Hospitality</h4>
          <p>Handle room reservations, table bookings, and automated concierge guest services on chat.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- CHAPTER 5: RESULTS & ROI STATS -->
  <section class="hb-story-section">
    <div class="container">
      <div class="hb-story-header">
        <div class="hb-story-badge">CHAPTER 05 · PROOF OF IMPACT</div>
        <h2>Real Results Driven by <span class="hb-text-grad">HelloBotz AI</span></h2>
      </div>

      <div class="hb-steps-grid" style="text-align:center;">
        <div class="hb-glass-card">
          <div style="font-size:3rem;font-weight:900;color:#C4B5FD;margin-bottom:0.5rem;">3.5x</div>
          <div style="font-weight:700;color:#fff;font-size:1.1rem;">Higher Lead Conversion</div>
          <p style="margin-top:0.5rem;">Compared to traditional email and manual SMS channels.</p>
        </div>

        <div class="hb-glass-card">
          <div style="font-size:3rem;font-weight:900;color:#67E8F9;margin-bottom:0.5rem;">80%</div>
          <div style="font-weight:700;color:#fff;font-size:1.1rem;">Support Cost Savings</div>
          <p style="margin-top:0.5rem;">AI bots handle routine FAQs and lead qualification automatically.</p>
        </div>

        <div class="hb-glass-card">
          <div style="font-size:3rem;font-weight:900;color:#C4B5FD;margin-bottom:0.5rem;">98%</div>
          <div style="font-weight:700;color:#fff;font-size:1.1rem;">Average Open Rate</div>
          <p style="margin-top:0.5rem;">Unbeatable message visibility with Official Meta WhatsApp API.</p>
        </div>
      </div>
    </div>
  </section>

  <!-- FINAL CTA BANNER -->
  <section class="hb-story-section">
    <div class="container">
      <div class="hb-cta-banner">
        <h2 style="font-size:clamp(2rem,4vw,3.25rem);font-weight:800;color:#fff;margin-bottom:1rem;">Ready to Transform Your <span class="hb-text-grad">Customer Messaging?</span></h2>
        <p style="font-size:1.15rem;color:rgba(255,255,255,0.8);max-width:36rem;margin:0 auto 2rem;">Start your 14-day free trial today. Access Official WhatsApp API, Shared Inbox, and AI Flow Builder in minutes.</p>
        <div style="display:flex;justify-content:center;gap:1rem;flex-wrap:wrap;">
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg">Start Free Trial Now &rarr;</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open">Book a Live Demo</button>
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

<?php
include __DIR__ . '/includes/offer-popup.php';
include __DIR__ . '/includes/callback-popup.php';
include __DIR__ . '/includes/footer.php';
?>
