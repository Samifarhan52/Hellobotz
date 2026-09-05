<?php
$basePath = '../../';
$pageTitle = 'AI Chatbot Product | Build, Train, Deploy on WhatsApp | InboxWa';
$pageDescription = 'Build a chatbot that knows your business. Train with website, FAQs and Q&A, test conversations, deploy on WhatsApp and hand over to humans when needed.';
$canonicalUrl = 'https://inboxwa.com/products/chatbot/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/chatbot-product.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">

<section class="bot-hero" aria-label="Chatbot product hero">
  <div class="bot-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="bot-hero-grid">
      <div class="bot-hero-copy">
        <span class="badge bot-badge">INBOXWA AI CHATBOT</span>
        <h1>Build a Chatbot That <span class="grad">Knows Your Business</span></h1>
        <p class="bot-lead">Train your AI chatbot with your own business knowledge, test conversations instantly and deploy it on WhatsApp to answer customers 24/7.</p>
        <div class="bot-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Build Your Chatbot</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Try Live Demo</button>
        </div>
        <div class="bot-tabs" id="bot-tabs">
          <button type="button" class="is-active" data-flow="build">Build</button>
          <button type="button" data-flow="train">Train</button>
          <button type="button" data-flow="test">Test</button>
          <button type="button" data-flow="deploy">Deploy</button>
          <button type="button" data-flow="live">Live Chat</button>
        </div>
      </div>
      <div class="bot-sim-stage">
        <div class="bot-panel bot-panel-know">
          <div class="bot-panel-h">Knowledge</div>
          <ul>
            <li><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Website</li>
            <li><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Documents</li>
            <li><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> FAQs</li>
            <li><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Products</li>
            <li><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Custom Q&amp;A</li>
          </ul>
          <div class="bot-status">Knowledge Connected <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
        </div>
        <div class="bot-phone">
          <div class="bot-notch"></div>
          <div class="bot-screen">
            <div class="bot-wa-head">
              <div class="bot-av">AI</div>
              <div><strong>InboxWa AI</strong><small>Training Status: Ready <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></small></div>
            </div>
            <div class="bot-wa-body" id="bot-wa-body">
              <div class="bot-typing" id="bot-typing"><i></i><i></i><i></i></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="process">
  <div class="container">
    <div class="section-header reveal"><h2>Chatbot Build Process</h2></div>
    <div class="bot-process reveal">
      <div class="bot-p-step"><span>01</span><strong>Build</strong><small>Create your chatbot</small></div>
      <div class="bot-p-step"><span>02</span><strong>Train</strong><small>Add business knowledge</small></div>
      <div class="bot-p-step"><span>03</span><strong>Test</strong><small>Test real conversations</small></div>
      <div class="bot-p-step"><span>04</span><strong>Connect</strong><small>Channels &amp; integrations</small></div>
      <div class="bot-p-step"><span>05</span><strong>Deploy</strong><small>Make your bot live</small></div>
      <div class="bot-p-step"><span>06</span><strong>Improve</strong><small>Review &amp; refine knowledge</small></div>
    </div>
  </div>
</section>

<section class="section section-alt" id="train">
  <div class="container">
    <div class="section-header reveal"><h2>Teach Your Chatbot About Your Business</h2></div>
    <div class="bot-train-grid reveal">
      <div class="bot-source">Website</div>
      <div class="bot-source">PDF</div>
      <div class="bot-source">FAQ</div>
      <div class="bot-source">Text</div>
      <div class="bot-source">Product Data</div>
      <div class="bot-source">Q&amp;A</div>
    </div>
    <div class="bot-scan reveal">
      <div class="bot-scan-steps">Reading Website → Processing Content → Creating Knowledge → <b>Ready <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></b></div>
      <div class="bot-kb-stat">Knowledge Base · <span>125 Knowledge Items</span> · Demo Data</div>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/ecom_discovery_banner.jpg" alt="AI Chatbot Training & Dashboard" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8.01" y2="16"/><line x1="16" y1="16" x2="16.01" y2="16"/></svg> AI Chatbot Knowledge Base &amp; Training Studio</strong>
    <span>Website, FAQs &amp; Custom Q&amp;A Sync</span>
  </div>
</div>

<section class="section" id="qa">
  <div class="container">
    <div class="section-header reveal"><h2>Custom Q&amp;A</h2></div>
    <div class="bot-qa reveal">
      <div class="bot-qa-card">
        <label>Question</label>
        <div class="bot-qa-val">What is your refund policy?</div>
        <label>Answer</label>
        <div class="bot-qa-val">Customers can request support according to the configured business policy.</div>
        <div class="bot-qa-ok"><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Knowledge Added</div>
      </div>
    </div>
  </div>
</section>

<section class="section section-dark" id="test">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">Test Before You Go Live</h2></div>
    <div class="bot-test reveal">
      <div class="bot-test-col">
        <h4>Conversation</h4>
        <p class="bot-bubble user">What services do you provide?</p>
        <p class="bot-bubble ai">We provide WhatsApp API, automation, CRM, AI chatbot and business communication solutions.</p>
        <p class="bot-bubble user">I want a demo.</p>
        <p class="bot-bubble ai">Sure! Would you like to book a demo?</p>
      </div>
      <div class="bot-test-flags">
        <span>AI Response <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
        <span>Intent Detected <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
        <span>Knowledge Used <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></span>
      </div>
    </div>
  </div>
</section>

<section class="section" id="intelligence">
  <div class="container">
    <div class="section-header reveal"><h2>How Intelligent Responses Work</h2></div>
    <div class="bot-intel reveal">
      <span>Customer Question</span><span class="arr">↓</span>
      <span>AI Understands Intent</span><span class="arr">↓</span>
      <span>Search Knowledge</span><span class="arr">↓</span>
      <span>Generate Response</span><span class="arr">↓</span>
      <span>Reply to Customer</span>
    </div>
  </div>
</section>

<section class="section section-alt" id="handover">
  <div class="container">
    <div class="section-header reveal"><h2>AI When Possible. Human When Needed.</h2></div>
    <div class="bot-handover reveal">
      <div class="card"><h3>Customer</h3><p>I have a complex billing issue.</p></div>
      <div class="arr">→</div>
      <div class="card"><h3>Bot</h3><p>I can connect you with our support team.</p></div>
      <div class="arr">→</div>
      <div class="card"><h3>Human Handover</h3><p>Agent joined · Conversation transferred <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></p></div>
    </div>
    <div class="bot-vs reveal">
      <div class="card">
        <h3>AI Handles</h3>
        <ul class="check-list"><li>FAQs</li><li>Product questions</li><li>Basic qualification</li><li>Common requests</li><li>Initial support</li></ul>
      </div>
      <div class="card">
        <h3>Human Handles</h3>
        <ul class="check-list"><li>Complex questions</li><li>Sensitive issues</li><li>Negotiation</li><li>Exceptions</li><li>Escalations</li></ul>
      </div>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/edtech_shared_inbox.jpg" alt="Seamless AI to Human Handover Inbox" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"/></svg> Seamless AI to Human Agent Handover</strong>
    <span>Zero Waiting Time &amp; Lead Assignment</span>
  </div>
</div>

<section class="section" id="flow">
  <div class="container">
    <div class="section-header reveal"><h2>Chatbot Flow Builder</h2></div>
    <div class="bot-flow reveal">
      <span>Start</span><span class="arr">↓</span>
      <span>Welcome</span><span class="arr">↓</span>
      <span>Ask Question</span><span class="arr">↓</span>
      <span>Condition</span><span class="arr">↓</span>
      <span>AI Response</span><span class="arr">↓</span>
      <span>Button</span><span class="arr">↓</span>
      <span>Human Agent</span>
    </div>
  </div>
</section>

<section class="section section-gradient-1" id="actions">
  <div class="container">
    <div class="section-header reveal"><h2>Make Conversations Interactive</h2></div>
    <div class="bot-actions reveal" id="bot-action-btns">
      <button type="button" data-act="demo">Book Demo</button>
      <button type="button" data-act="pricing">View Pricing</button>
      <button type="button" data-act="product">Product Details</button>
      <button type="button" data-act="agent">Talk to Agent</button>
      <button type="button" data-act="order">Track Order</button>
      <button type="button" data-act="support">Contact Support</button>
    </div>
    <div class="bot-action-out reveal" id="bot-action-out">Select a button to see the next simulated reply.</div>
  </div>
</section>

<section class="section" id="usecases">
  <div class="container">
    <div class="section-header reveal"><h2>Chatbot Use Cases</h2></div>
    <div class="bot-usecases">
      <div class="card reveal"><h3>Sales Chatbot</h3><p>Answer questions → qualify → book demo.</p></div>
      <div class="card reveal"><h3>Customer Support Bot</h3><p>FAQs → common issues → human handover.</p></div>
      <div class="card reveal"><h3>Lead Generation Bot</h3><p>Collect name → requirement → contact → CRM.</p></div>
      <div class="card reveal"><h3>E-commerce Bot</h3><p>Product questions → recommendations → order support.</p></div>
      <div class="card reveal"><h3>Education Bot</h3><p>Course questions → counselling → demo booking.</p></div>
      <div class="card reveal"><h3>Real Estate Bot</h3><p>Property questions → qualification → site visit.</p></div>
      <div class="card reveal"><h3>Appointment Bot</h3><p>Requirement → slot → booking.</p></div>
      <div class="card reveal"><h3>FAQ Bot</h3><p>Instant answers from configured knowledge.</p></div>
    </div>
  </div>
</section>

<section class="section section-dark" id="whatsapp">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">Bring Your AI Chatbot to WhatsApp</h2></div>
    <div class="bot-wa-flow reveal">
      <span>Customer WhatsApp</span><span class="arr">↓</span>
      <span>InboxWa AI</span><span class="arr">↓</span>
      <span>Knowledge Base</span><span class="arr">↓</span>
      <span>Business Action</span>
    </div>
  </div>
</section>

<div class="edu-img-card-wrap reveal" style="margin: 2.5rem 0;">
  <img src="/assets/images/ecom_discovery_banner.jpg" alt="WhatsApp Customer Chatting with AI Assistant" loading="lazy">
  <div class="edu-img-caption-badge">
    <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> 24/7 AI WhatsApp Assistant</strong>
    <span>Instant FAQ Answers &amp; Qualified Lead Capture</span>
  </div>
</div>

<section class="section" id="website">
  <div class="container">
    <div class="section-header reveal"><h2>Website Chatbot</h2></div>
    <div class="bot-web-widget reveal">
      <div class="bot-web-head">InboxWa Chat</div>
      <p class="bot-bubble user">Can someone contact me?</p>
      <p class="bot-bubble ai">Sure. Please share your name and phone number.</p>
      <div class="bot-web-fields"><span>Name</span><span>Phone</span></div>
      <div class="bot-web-submit">Submit → Lead Created <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
    </div>
  </div>
</section>

<section class="section section-alt" id="leads">
  <div class="container">
    <div class="section-header reveal"><h2>Lead Capture</h2></div>
    <div class="bot-lead-card reveal">
      <div class="bot-lead-row"><span>Name</span><b>Demo Lead</b></div>
      <div class="bot-lead-row"><span>Mobile</span><b>—</b></div>
      <div class="bot-lead-row"><span>Email</span><b>—</b></div>
      <div class="bot-lead-row"><span>Requirement</span><b>Demo request</b></div>
      <div class="bot-lead-row"><span>Status</span><b>New</b></div>
      <div class="bot-lead-row"><span>Source</span><b>Chatbot</b></div>
    </div>
  </div>
</section>

<section class="section" id="deploy">
  <div class="container">
    <div class="section-header reveal"><h2>Deploy Your Chatbot</h2></div>
    <div class="bot-deploy reveal">
      <span>Build</span><span class="arr">→</span>
      <span>Train</span><span class="arr">→</span>
      <span>Test</span><span class="arr">→</span>
      <span>Approve</span><span class="arr">→</span>
      <span>Deploy</span>
    </div>
    <div class="bot-channels reveal">
      <div class="card">WhatsApp</div>
      <div class="card">Website</div>
      <div class="card">API</div>
    </div>
    <p class="bot-live reveal">● Chatbot Live</p>
  </div>
</section>

<section class="section section-gradient-1" id="demo">
  <div class="container">
    <div class="section-header reveal"><h2>See Your Chatbot in Action</h2></div>
    <div class="bot-live-btns reveal" id="bot-live-btns">
      <button type="button" data-live="product">Ask About Product</button>
      <button type="button" data-live="pricing">Ask About Pricing</button>
      <button type="button" data-live="demo">Book Demo</button>
      <button type="button" data-live="agent">Talk to Agent</button>
    </div>
    <div class="bot-live-out reveal" id="bot-live-out">Click a prompt to simulate a customer conversation.</div>
  </div>
</section>

<section class="section" id="analytics">
  <div class="container">
    <div class="section-header reveal"><h2>Chatbot Analytics</h2><p class="lead">Illustrative demo metrics.</p></div>
    <div class="bot-analytics reveal">
      <div class="card"><span>Conversations</span><strong>—</strong><small>Demo Data</small></div>
      <div class="card"><span>AI Responses</span><strong>—</strong><small>Demo Data</small></div>
      <div class="card"><span>Leads</span><strong>—</strong><small>Demo Data</small></div>
      <div class="card"><span>Human Handover</span><strong>—</strong><small>Demo Data</small></div>
      <div class="card"><span>Unanswered</span><strong>—</strong><small>Demo Data</small></div>
      <div class="card"><span>Popular Questions</span><strong>—</strong><small>Demo Data</small></div>
    </div>
  </div>
</section>

<section class="section section-alt" id="integrations">
  <div class="container">
    <div class="section-header reveal"><h2>Integrations</h2></div>
    <div class="bot-integrations reveal">
      <div class="card">WhatsApp</div>
      <div class="card">Website</div>
      <div class="card">CRM</div>
      <div class="card">Google Sheets</div>
      <div class="card">Google Calendar</div>
      <div class="card">API / Webhooks</div>
    </div>
  </div>
</section>

<section class="section" id="benefits">
  <div class="container">
    <div class="section-header reveal"><h2>Product Benefits</h2></div>
    <div class="bot-benefits">
      <div class="card reveal"><h3>24/7 Availability</h3><p>Respond when your team is offline.</p></div>
      <div class="card reveal"><h3>Instant Responses</h3><p>Answer from configured knowledge quickly.</p></div>
      <div class="card reveal"><h3>Business Knowledge</h3><p>Train with your own content and Q&amp;A.</p></div>
      <div class="card reveal"><h3>Lead Capture</h3><p>Collect contact details in conversation.</p></div>
      <div class="card reveal"><h3>Automation</h3><p>Trigger actions from chatbot flows.</p></div>
      <div class="card reveal"><h3>Human Handover</h3><p>Pass complex chats to agents.</p></div>
      <div class="card reveal"><h3>Multi-Channel</h3><p>WhatsApp, website and API where supported.</p></div>
      <div class="card reveal"><h3>Analytics</h3><p>Review conversations and unanswered questions.</p></div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">How do I create a chatbot?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Configure bot name, welcome message, language and tone, then save to create your assistant.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">How do I train the chatbot?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Add knowledge from website, documents, FAQs, product data and custom Q&amp;A.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can the chatbot work on WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — deploy the trained bot on Official WhatsApp Business API where configured.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can AI transfer chats to human agents?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — human handover moves the conversation to your team when needed.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I test before deploying?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — use the test playground to try conversations before going live.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I capture leads with the chatbot?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — collect name, phone and other fields in the flow and create leads.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I connect CRM or Google tools?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Where supported, connect CRM, Sheets, Calendar and API/webhooks.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Build Your AI Chatbot Today</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Train it on your business knowledge, test every conversation and deploy an AI assistant that works alongside your team.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Build Your Chatbot</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Try Live Demo</button>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/chatbot-product.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
