<?php
$basePath = '../../';
$pageTitle = 'WhatsApp Form | Lead Capture & Form Automation | HelloBotz';
$pageDescription = 'Collect customer information through WhatsApp forms, qualify leads and trigger CRM workflows with HelloBotz.';
$canonicalUrl = 'https://hellobotz.com/products/whatsapp-form/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/whatsapp-form-product.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">

<section class="wf-hero" aria-label="WhatsApp Form hero">
  <div class="wf-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="wf-hero-grid">
      <div class="wf-hero-copy">
        <span class="badge wf-badge">WHATSAPP FORM</span>
        <h1>Turn WhatsApp Conversations Into <span class="grad">Smart Lead Forms</span></h1>
        <p class="wf-lead">Collect customer information directly through WhatsApp, qualify leads and trigger the right business workflow automatically.</p>
        <div class="wf-ctas">
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg">Get Started</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Try WhatsApp Form</button>
        </div>
        <div class="wf-tabs" id="wf-tabs">
          <button type="button" class="is-active" data-flow="lead">Lead Form</button>
          <button type="button" data-flow="demo">Demo Form</button>
          <button type="button" data-flow="enquiry">Enquiry Form</button>
          <button type="button" data-flow="booking">Booking Form</button>
          <button type="button" data-flow="support">Support Form</button>
        </div>
      </div>
      <div class="wf-phone-stage">
        <div class="wf-phone">
          <div class="wf-notch"></div>
          <div class="wf-screen">
            <div class="wf-wa-head"><div class="wf-av">HB</div><div><strong>HelloBotz Form</strong><small>Lead capture</small></div></div>
            <div class="wf-wa-body" id="wf-wa-body"><div class="wf-typing" id="wf-typing"><i></i><i></i><i></i></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="how">
  <div class="container">
    <div class="section-header reveal"><h2>How WhatsApp Form Works</h2></div>
    <div class="wf-flow reveal">
      <span>Create Form</span><span class="arr">↓</span>
      <span>Add Questions</span><span class="arr">↓</span>
      <span>Connect WhatsApp</span><span class="arr">↓</span>
      <span>Customer Responds</span><span class="arr">↓</span>
      <span>Data Captured</span><span class="arr">↓</span>
      <span>Automation</span><span class="arr">↓</span>
      <span>CRM / Team</span>
    </div>
  </div>
</section>

<section class="section section-alt" id="builder">
  <div class="container">
    <div class="section-header reveal"><h2>Form Builder</h2></div>
    <div class="wf-builder reveal">
      <div class="wf-field">Name</div><div class="wf-field">Phone</div><div class="wf-field">Email</div>
      <div class="wf-field">Dropdown</div><div class="wf-field">Multiple Choice</div><div class="wf-field">Text</div>
      <div class="wf-field">Date</div><div class="wf-field">Location</div><div class="wf-field">Custom Question</div>
    </div>
    <p class="wf-note reveal">Drag → Configure → Save · Form Published ✓</p>
  </div>
</section>

<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>WhatsApp Form on Smartphone</strong><span>Step-by-step questions collecting lead details in chat.</span></div>
</div>

<section class="section" id="data">
  <div class="container">
    <div class="section-header reveal"><h2>Data Capture</h2></div>
    <div class="wf-table-wrap reveal">
      <table class="wf-table">
        <thead><tr><th>Name</th><th>WhatsApp</th><th>Email</th><th>Requirement</th><th>City</th><th>Status</th></tr></thead>
        <tbody><tr><td>Rahul</td><td>+91 XXXXX</td><td>rahul@email.com</td><td>Demo</td><td>Delhi</td><td>New</td></tr></tbody>
      </table>
    </div>
    <p class="wf-note reveal">New Lead Created ✓ — structured data for your configured workflow.</p>
  </div>
</section>

<section class="section section-gradient-1" id="automation">
  <div class="container">
    <div class="section-header reveal"><h2>Automation</h2></div>
    <div class="wf-flow reveal">
      <span>Form Completed</span><span class="arr">↓</span>
      <span>Save Data</span><span class="arr">↓</span>
      <span>WhatsApp Confirmation</span><span class="arr">↓</span>
      <span>Notify Team</span><span class="arr">↓</span>
      <span>Create / Update Lead</span><span class="arr">↓</span>
      <span>Follow-up</span>
    </div>
  </div>
</section>

<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>Form Builder + Customer Data</strong><span>Dashboard visual for form fields and captured leads.</span></div>
</div>

<section class="section" id="usecases">
  <div class="container">
    <div class="section-header reveal"><h2>Use Cases</h2></div>
    <div class="wf-usecases">
      <div class="card reveal"><h3>Lead Generation</h3><p>Collect qualified leads on WhatsApp.</p></div>
      <div class="card reveal"><h3>Demo Booking</h3><p>Details before scheduling a demo.</p></div>
      <div class="card reveal"><h3>Sales Enquiry</h3><p>Understand customer requirements.</p></div>
      <div class="card reveal"><h3>Real Estate</h3><p>Property type, location and budget.</p></div>
      <div class="card reveal"><h3>Education</h3><p>Student and course requirements.</p></div>
      <div class="card reveal"><h3>E-commerce</h3><p>Product and order enquiries.</p></div>
      <div class="card reveal"><h3>Support</h3><p>Issue details before handover.</p></div>
      <div class="card reveal"><h3>Event Registration</h3><p>Registration information collection.</p></div>
    </div>
  </div>
</section>

<section class="section section-alt" id="crm">
  <div class="container">
    <div class="section-header reveal"><h2>Form → CRM Flow</h2></div>
    <div class="wf-flow reveal">
      <span>WhatsApp Form</span><span class="arr">→</span>
      <span>HelloBotz</span><span class="arr">→</span>
      <span>CRM</span><span class="arr">→</span>
      <span>Sales Agent</span><span class="arr">→</span>
      <span>Follow-up</span>
    </div>
    <div class="wf-lead-card reveal">
      <div class="wf-lead-row"><span>Name</span><b>Demo Lead</b></div>
      <div class="wf-lead-row"><span>Phone</span><b>—</b></div>
      <div class="wf-lead-row"><span>Requirement</span><b>Demo</b></div>
      <div class="wf-lead-row"><span>Source</span><b>WhatsApp Form</b></div>
      <div class="wf-lead-row"><span>Status</span><b>New</b></div>
    </div>
  </div>
</section>

<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>Form → CRM → Automation</strong><span>Workflow from WhatsApp answers to team follow-up.</span></div>
</div>

<section class="section" id="benefits">
  <div class="container">
    <div class="section-header reveal"><h2>Benefits</h2></div>
    <div class="wf-benefits">
      <div class="card reveal"><h3>More Structured Leads</h3><p>Collect fields in a clear sequence.</p></div>
      <div class="card reveal"><h3>Faster Data Collection</h3><p>Customers reply inside WhatsApp.</p></div>
      <div class="card reveal"><h3>Less Manual Work</h3><p>Reduce copy-paste from chats.</p></div>
      <div class="card reveal"><h3>Better Qualification</h3><p>Ask the right questions first.</p></div>
      <div class="card reveal"><h3>Automated Follow-up</h3><p>Trigger next steps when form completes.</p></div>
      <div class="card reveal"><h3>WhatsApp Experience</h3><p>No separate web form required for basic capture.</p></div>
    </div>
  </div>
</section>

<section class="section section-gradient-1" id="analytics">
  <div class="container">
    <div class="section-header reveal"><h2>Analytics</h2><p class="lead">Illustrative demo metrics.</p></div>
    <div class="wf-analytics reveal">
      <div class="card"><span>Forms Completed</span><strong>—</strong><small>Demo Data</small></div>
      <div class="card"><span>Leads Captured</span><strong>—</strong><small>Demo Data</small></div>
      <div class="card"><span>Pending Follow-ups</span><strong>—</strong><small>Demo Data</small></div>
      <div class="card"><span>Conversions</span><strong>—</strong><small>Demo Data</small></div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">What is WhatsApp Form?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">A structured question flow on WhatsApp that collects customer details and can trigger automation when completed.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I create custom questions?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — configure name, phone, email, choices, text and custom fields in the form builder.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can different answers trigger different actions?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Where supported, options can route to demo booking, pricing info, agent assignment or other workflows.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I connect with CRM or Google Sheets?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes where those integrations are configured for your account.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I use WhatsApp templates?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Outbound business-initiated messages should use approved templates under Meta policy.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Start Collecting Better Leads on WhatsApp</h2>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg">Get Started</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Try WhatsApp Form</button>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/whatsapp-form-product.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
