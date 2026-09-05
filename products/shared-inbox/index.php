<?php
$basePath = '../../';
$pageTitle = 'Shared Team Inbox | InboxWa';
$pageDescription = 'Assign chats, collaborate with notes, and keep SLAs visible across your support and sales teams.';
$canonicalUrl = 'https://inboxwa.com/products/shared-inbox/';
include __DIR__ . '/../../includes/header.php';
?>
<section class="page-hero-premium">
  <div class="page-hero-premium__bg" aria-hidden="true">
    <img src="/assets/images/products/shared-inbox/hero.webp" alt="" onerror="this.style.display='none';this.nextElementSibling.style.display='block'">
    <div class="hero-fallback-bg" style="display:none"></div>
  </div>
  <div class="page-hero-premium__overlay"></div>
  <div class="container">
    <span class="badge">Product</span>
    <h1>One shared inbox for WhatsApp and social messages</h1>
    <p class="lead">Assign chats, collaborate with notes, and keep SLAs visible across your support and sales teams.</p>
    <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/auth/register" class="btn btn-primary btn-lg">Start Free Trial</a>
      <a href="/#contact-section" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.4);color:#fff">Book a Demo</a>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Built for real shared inbox work</h2></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin-top:1.25rem"><div class="card reveal" style="padding:1.2rem"><h3>Team assignment</h3><p>Route by skill or region.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Internal notes</h3><p>Context without leaving the thread.</p></div><div class="card reveal" style="padding:1.2rem"><h3>SLA timers</h3><p>See what is waiting.</p></div><div class="card reveal" style="padding:1.2rem"><h3>Omnichannel</h3><p>WhatsApp + Instagram + more.</p></div></div>
  </div>
</section>

<section class="section section-dark" id="flow">
  <div class="container">
    <div class="section-header reveal"><h2 style="color:#fff">How it works</h2></div>
    <div class="workflow-sim" id="ws-pr-shared-inbox"><div class="ws-step">Inbound chat</div><div class="ws-step">Auto-assign rules</div><div class="ws-step">Agent reply</div><div class="ws-step">Collaborate</div><div class="ws-step">Resolve & report</div></div>
    <div class="ws-controls">
      <button type="button" class="btn btn-sm btn-primary ws-next" data-sim="ws-pr-shared-inbox">Next step</button>
      <button type="button" class="btn btn-sm btn-outline ws-auto" style="color:#fff;border-color:rgba(255,255,255,.35)" data-sim="ws-pr-shared-inbox">Auto-play</button>
    </div>
  </div>
</section>

<section class="section">
  <div class="container" style="max-width:720px;text-align:center">
    <div class="hero-visual-float reveal">
      <img src="/assets/images/products/shared-inbox/hero.webp" alt="Shared Team Inbox | InboxWa" width="1000" height="560" loading="lazy"
        style="width:100%;border-radius:16px;border:1px solid var(--bd);min-height:180px;object-fit:cover;background:linear-gradient(135deg,#EDE9FE,#CFFAFE)"
        onerror="this.style.minHeight='180px'">
    </div>
    <p class="lead reveal" style="margin-top:1.5rem">Same InboxWa platform — this product page focuses on shared inbox outcomes only.</p>
    <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="/pricing/" class="btn btn-outline">View pricing</a>
      <a href="/#contact-section" class="btn btn-primary">Talk to sales</a>
    </div>
  </div>
</section>
<script>
(function(){
  var steps=document.querySelectorAll('#ws-pr-shared-inbox .ws-step');
  var i=0,timer=null;
  function show(n){i=Math.max(0,Math.min(n,steps.length-1));steps.forEach(function(el,idx){el.classList.toggle('on',idx<=i);});}
  show(0);
  document.querySelectorAll('[data-sim="ws-pr-shared-inbox"].ws-next').forEach(function(b){b.onclick=function(){show(i+1);};});
  document.querySelectorAll('[data-sim="ws-pr-shared-inbox"].ws-auto').forEach(function(b){
    b.onclick=function(){if(timer){clearInterval(timer);timer=null;b.textContent='Auto-play';return;}b.textContent='Pause';i=-1;timer=setInterval(function(){i++;if(i>=steps.length)i=0;show(i);},900);};
  });
})();
</script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
