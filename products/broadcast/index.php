<?php
$basePath = '../../';
$pageTitle = 'WhatsApp Broadcast Campaigns | InboxWa';
$pageDescription = 'Run marketing and utility campaigns on Official API with audience segments and clear delivery metrics.';
$canonicalUrl = 'https://inboxwa.com/products/broadcast/';
include __DIR__ . '/../../includes/header.php';
?>
<section class="page-hero-premium">
  <div class="page-hero-premium__bg" aria-hidden="true">
    <img src="/assets/images/products/broadcast/hero.webp" alt="" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
    <div class="hero-fallback-bg" style="display:none"></div>
  </div>
  <div class="page-hero-premium__overlay"></div>
  <div class="container">
    <span class="badge">Product</span>
    <h1>Broadcast campaigns with segments, templates and results</h1>
    <p class="lead">Run marketing and utility campaigns on Official API with audience segments and clear delivery metrics.</p>
    <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
      <a href="/#contact-section" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.4);color:#fff">Book a Demo</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Built for real broadcast work</h2></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin-top:1.25rem"><div class="card reveal" style="padding:1.2rem"><h3>Product launches</h3><p>Announce to opted-in lists.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Promotions</h3><p>Segment by tags and behaviour.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Utility notices</h3><p>Renewals, reminders, schedules.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Re-engagement</h3><p>Win-back sequences.</p></div></div>
  </div>
</section>

<section class="section section-dark" id="flow">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">How it works</h2></div>
    <div class="workflow-sim" id="ws-pr-broadcast"><div class="ws-step">Pick audience</div><div class="ws-step">Choose template</div><div class="ws-step">Schedule send</div><div class="ws-step">Track delivery</div><div class="ws-step">Optimize next campaign</div></div>
    <div class="ws-controls">
      <button type="button" class="btn btn-sm btn-primary ws-next" data-sim="ws-pr-broadcast">Next step</button>
      <button type="button" class="btn btn-sm btn-outline ws-auto" style="color:#fff;border-color:rgba(255,255,255,.35)" data-sim="ws-pr-broadcast">Auto-play</button>
    </div>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:720px;text-align:center">
    <div class="hero-visual-float reveal">
      <img src="/assets/images/products/broadcast/hero.webp" alt="WhatsApp Broadcast Campaigns | InboxWa" width="1000" height="560" loading="lazy"
        style="width:100%;border-radius:16px;border:1px solid var(--bd);min-height:180px;object-fit:cover;background:linear-gradient(135deg,#EDE9FE,#CFFAFE)"
        onerror="this.style.minHeight='180px'">
    </div>
    <p class="lead reveal" style="margin-top:1.5rem">Same InboxWa platform — this product page focuses on broadcast outcomes only.</p>
    <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/pricing/" class="btn btn-outline">View pricing</a>
      <a href="/#contact-section" class="btn btn-primary">Talk to sales</a>
    </div>
  </div>
</section>
<script>
(function(){
  var steps=document.querySelectorAll('#ws-pr-broadcast .ws-step');
  var i=0,timer=null;
  function show(n){i=Math.max(0,Math.min(n,steps.length-1));steps.forEach(function(el,idx){el.classList.toggle('on',idx<=i);});}
  show(0);
  document.querySelectorAll('[data-sim="ws-pr-broadcast"].ws-next').forEach(function(b){b.onclick=function(){show(i+1);};});
  document.querySelectorAll('[data-sim="ws-pr-broadcast"].ws-auto').forEach(function(b){
    b.onclick=function(){if(timer){clearInterval(timer);timer=null;b.textContent='Auto-play';return;}b.textContent='Pause';i=-1;timer=setInterval(function(){i++;if(i>=steps.length)i=0;show(i);},900);};
  });
})();
</script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
