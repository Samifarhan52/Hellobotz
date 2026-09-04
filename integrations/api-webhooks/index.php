<?php
$basePath = '../../';
$pageTitle = 'API & Webhooks | Connect Any System to InboxWa';
$pageDescription = 'Connect InboxWa with your website, CRM, ERP or custom software using APIs and real-time webhooks for WhatsApp automation.';
$canonicalUrl = 'https://inboxwa.com/integrations/api-webhooks/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/api-webhooks.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">

<section class="api-hero" aria-label="API Webhooks hero">
  <div class="api-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="api-hero-grid">
      <div class="api-hero-copy">
        <span class="badge api-badge">API + WEBHOOKS</span>
        <h1>Connect InboxWa With <span class="grad">Your Own Software</span></h1>
        <p class="api-lead">Build powerful integrations between InboxWa and your website, CRM, ERP, SaaS application or custom business software using APIs and real-time webhooks.</p>
        <div class="api-ctas">
          <a href="#code" class="btn btn-primary btn-lg">Explore API</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Talk to Developer</button>
        </div>
      </div>
      <div class="api-arch">
        <span>Your App</span><span class="arr">↓</span>
        <span>API / Webhook</span><span class="arr">↓</span>
        <span class="core">InboxWa</span><span class="arr">↓</span>
        <span>WhatsApp</span><span class="arr">↓</span>
        <span>Customer</span>
      </div>
    </div>
  </div>
</section>

<section class="section" id="diff">
  <div class="container">
    <div class="section-header reveal"><h2>API &amp; Webhooks — Two Ways to Connect</h2></div>
    <div class="api-diff">
      <div class="card reveal">
        <h3>API</h3>
        <p>Your system asks InboxWa to perform an action.</p>
        <div class="api-flow-mini">Your App → Request → InboxWa → Response</div>
        <p class="api-ex">Send Message · Create Contact · Trigger Workflow · Get Data</p>
        <strong>API = Request</strong>
      </div>
      <div class="card reveal">
        <h3>Webhook</h3>
        <p>InboxWa notifies your system when an event happens.</p>
        <div class="api-flow-mini">Event → Webhook → Your Server → Action</div>
        <p class="api-ex">New Message · Contact · Status · Workflow Event</p>
        <strong>Webhook = Event</strong>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark" id="live">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">See How an API Request Works</h2><p class="lead" style="color:rgba(255,255,255,.7)">Demo simulation only</p></div>
    <button type="button" class="btn btn-primary" id="api-test" style="display:block;margin:0 auto 1rem">▶ Send Test Request</button>
    <div class="api-test-out" id="api-test-out">Click to simulate request → process → response.</div>
  </div>
</section>

<section class="section" id="code">
  <div class="container">
    <div class="section-header reveal"><h2>Simple API. Powerful Possibilities.</h2><p class="lead">Illustrative examples — use official docs for production endpoints and auth.</p></div>
    <div class="api-code-tabs" id="api-code-tabs">
      <button type="button" class="is-active" data-lang="curl">cURL</button>
      <button type="button" data-lang="js">JavaScript</button>
      <button type="button" data-lang="php">PHP</button>
      <button type="button" data-lang="py">Python</button>
    </div>
    <pre class="api-code" id="api-code-block"><code>curl -X POST https://api.example.com/v1/messages \
  -H "Authorization: Bearer YOUR_TOKEN" \
  -H "Content-Type: application/json" \
  -d '{"to":"...","template":"..."}'
# Demo structure only</code></pre>
    <div class="api-response reveal">
      <strong>Response (demo)</strong>
      <code>{ "success": true, "message_id": "demo", "status": "queued" }</code>
    </div>
  </div>
</section>

<section class="section section-alt" id="webhook">
  <div class="container">
    <div class="section-header reveal"><h2>React to Events in Real Time</h2></div>
    <div class="api-flow reveal">
      <span>Customer Message</span><span class="arr">↓</span>
      <span>InboxWa Event</span><span class="arr">↓</span>
      <span>Webhook</span><span class="arr">↓</span>
      <span>Your Server</span><span class="arr">↓</span>
      <span>CRM / Automation</span>
    </div>
    <div class="api-log reveal">
      <div><span>EVENT</span> message.received</div>
      <div><span>TIME</span> 10:32:15</div>
      <div><span>STATUS</span> 200 OK</div>
      <div><span>DEST</span> Your Webhook URL</div>
      <p>Demo log stream</p>
    </div>
  </div>
</section>

<section class="section" id="business">
  <div class="container">
    <div class="section-header reveal"><h2>Connect Any Business Workflow</h2></div>
    <div class="api-flow reveal"><span>Website</span><span class="arr">→</span><span>API</span><span class="arr">→</span><span>InboxWa</span><span class="arr">→</span><span>WhatsApp</span><span class="arr">→</span><span>Customer</span></div>
    <div class="api-flow reveal"><span>WhatsApp</span><span class="arr">→</span><span>Webhook</span><span class="arr">→</span><span>CRM</span><span class="arr">→</span><span>Sales Team</span></div>
    <div class="api-flow reveal"><span>Store</span><span class="arr">→</span><span>API</span><span class="arr">→</span><span>InboxWa</span><span class="arr">→</span><span>Notification</span></div>
  </div>
</section>

<section class="section section-gradient-1" id="usecases">
  <div class="container">
    <div class="section-header reveal"><h2>What Can You Build?</h2></div>
    <div class="api-cards">
      <div class="card reveal">Custom CRM Integration</div>
      <div class="card reveal">ERP Integration</div>
      <div class="card reveal">E-commerce Automation</div>
      <div class="card reveal">Lead Management</div>
      <div class="card reveal">Order Notifications</div>
      <div class="card reveal">Appointment Notifications</div>
      <div class="card reveal">Payment Updates</div>
      <div class="card reveal">Customer Support</div>
      <div class="card reveal">Marketing Automation</div>
      <div class="card reveal">Custom Workflows</div>
    </div>
  </div>
</section>

<section class="section" id="journey">
  <div class="container">
    <div class="section-header reveal"><h2>From API Key to Production</h2></div>
    <div class="api-steps">
      <div class="card reveal"><span>01</span><strong>Authenticate</strong><p>Securely connect your application.</p></div>
      <div class="card reveal"><span>02</span><strong>Build</strong><p>Create your API request or webhook.</p></div>
      <div class="card reveal"><span>03</span><strong>Test</strong><p>Verify request, response and events.</p></div>
      <div class="card reveal"><span>04</span><strong>Launch</strong><p>Connect your production workflow.</p></div>
    </div>
  </div>
</section>

<section class="section section-dark" id="security">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">Built for Secure Business Integrations</h2></div>
    <div class="api-cards">
      <div class="card reveal">Authentication</div>
      <div class="card reveal">HTTPS</div>
      <div class="card reveal">API Credentials</div>
      <div class="card reveal">Webhook Verification</div>
      <div class="card reveal">Access Control</div>
      <div class="card reveal">Error Handling</div>
    </div>
    <p class="api-note reveal">Confirm exact security capabilities in official documentation for your account plan.</p>
  </div>
</section>

<section class="section" id="errors">
  <div class="container">
    <div class="section-header reveal"><h2>Clear Responses. Easier Debugging.</h2></div>
    <div class="api-cards">
      <div class="card reveal">200 — Success</div>
      <div class="card reveal">400 — Bad Request</div>
      <div class="card reveal">401 — Authentication</div>
      <div class="card reveal">404 — Not Found</div>
      <div class="card reveal">429 — Rate Limit</div>
      <div class="card reveal">500 — Server Error</div>
    </div>
  </div>
</section>

<section class="section section-alt" id="playground">
  <div class="container">
    <div class="section-header reveal"><h2>Build a Workflow</h2><p class="lead">Demo playground — not connected to live backend</p></div>
    <div class="api-play reveal">
      <label>Trigger
        <select id="api-trigger">
          <option>New Message</option>
          <option>New Lead</option>
          <option>New Order</option>
          <option>New Contact</option>
        </select>
      </label>
      <label>Action
        <select id="api-action">
          <option>Send WhatsApp Message</option>
          <option>Create Contact</option>
          <option>Notify Team</option>
          <option>Update CRM</option>
        </select>
      </label>
      <button type="button" class="btn btn-primary" id="api-run">Run Simulation</button>
      <div class="api-run-out" id="api-run-out">Select trigger + action, then run.</div>
    </div>
  </div>
</section>

<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>API Architecture</strong><span>App → API → InboxWa → WhatsApp</span></div>
</div>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>Webhook Event Flow</strong><span>Events to your server in real time.</span></div>
</div>
<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>Developer Dashboard</strong><span>Requests, responses and logs.</span></div>
</div>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>Business Automation</strong><span>Custom software connected workflows.</span></div>
</div>

<section class="section" id="benefits">
  <div class="container">
    <div class="section-header reveal"><h2>Benefits</h2></div>
    <div class="api-cards">
      <div class="card reveal">Flexible Integration</div>
      <div class="card reveal">Real-Time Events</div>
      <div class="card reveal">Custom Workflows</div>
      <div class="card reveal">Developer Friendly</div>
      <div class="card reveal">Business Automation</div>
      <div class="card reveal">CRM Connectivity</div>
      <div class="card reveal">E-commerce Connectivity</div>
      <div class="card reveal">Custom Software Support</div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">What is the InboxWa API?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">A way for your software to request actions from InboxWa such as messaging or contact workflows, based on your plan and documentation.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">What are Webhooks?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">HTTP callbacks InboxWa can send to your server when events occur, so you can update CRM or run automation.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I connect my custom CRM or ERP?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — typically via API and webhooks, depending on what your system can expose and receive.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Are the code samples production-ready?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Samples on this page are illustrative. Use official API documentation for real endpoints, auth and payloads.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark api-final">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Your Software. Your Workflow. Your Integration.</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Connect it with InboxWa using APIs and Webhooks.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="#code" class="btn btn-primary btn-lg">Explore API</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Talk to Developer</button>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/api-webhooks.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
