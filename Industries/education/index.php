<?php
$basePath = '../../';
$pageTitle = 'Education WhatsApp Automation | Admissions, Fees & Parent Updates | HelloBotz';
$pageDescription = 'Automate student enquiries, counselling, attendance, fee reminders and result updates on Official WhatsApp Business API with HelloBotz.';
$canonicalUrl = 'https://hellobotz.com/industries/education/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/education.css?v=42">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">


<section class="edu-hero" aria-label="Education hero">
  <div class="container">
    <div class="edu-grid">
      <div class="edu-hero-copy">
        <div class="edu-badge">Education · Schools · Colleges · Coaching · EdTech</div>
        <h1>Turn every student enquiry into an <span class="grad">admission opportunity</span></h1>
        <p class="edu-lead">HelloBotz helps schools, colleges, coaching institutes and education businesses automate enquiries, counselling, follow-ups, attendance, notifications and student communication on Official WhatsApp Business API.</p>
        <div class="edu-ctas">
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg">Start Free</a>
          <button type="button" class="btn-ghost-light btn-demo-open">Book Education Demo</button>
        </div>
        <div class="edu-sim-tabs" id="edu-tabs" role="tablist" aria-label="Education simulations">
          <button type="button" class="is-active" data-flow="admission">Admission Enquiry</button>
          <button type="button" data-flow="course">Course Details</button>
          <button type="button" data-flow="counselling">Book Counselling</button>
          <button type="button" data-flow="attendance">Attendance</button>
          <button type="button" data-flow="fee">Fee Reminder</button>
          <button type="button" data-flow="result">Result Update</button>
        </div>
      </div>

      <div class="edu-phone-stage">
        <div class="edu-float edu-float-1"><b>New lead</b>Student enquiry</div>
        <div class="edu-float edu-float-2"><b>Booked</b>Counselling slot</div>
        <div class="edu-float edu-float-3"><b>Updated</b>Attendance 92%</div>

        <div class="edu-phone" aria-label="Live education WhatsApp simulation">
          <div class="edu-phone-notch"></div>
          <div class="edu-phone-screen">
            <div class="edu-wa-head">
              <div class="edu-wa-av">ED</div>
              <div>
                <strong>HelloBotz Education</strong>
                <small><span class="edu-live-dot"></span> Live Simulation</small>
              </div>
            </div>
            <div class="edu-wa-body" id="edu-wa-body">
              <div class="edu-typing" id="edu-typing"><i></i><i></i><i></i></div>
              <div class="edu-chips" id="edu-chips"></div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <div style="margin-top:2.5rem">
      <p style="text-align:center;font-size:.8rem;color:rgba(255,255,255,.55);margin-bottom:.75rem">Trusted by Education Businesses</p>
      <div class="edu-logo-wrap">
        <div class="edu-logo-track" id="edu-logo-track">
          <!-- Replace placeholders with real institute logos via CMS/assets -->
          <div class="edu-logo-ph">Logo 1</div>
          <div class="edu-logo-ph">Logo 2</div>
          <div class="edu-logo-ph">Logo 3</div>
          <div class="edu-logo-ph">Logo 4</div>
          <div class="edu-logo-ph">Logo 5</div>
          <div class="edu-logo-ph">Logo 6</div>
          <div class="edu-logo-ph">Logo 1</div>
          <div class="edu-logo-ph">Logo 2</div>
          <div class="edu-logo-ph">Logo 3</div>
          <div class="edu-logo-ph">Logo 4</div>
          <div class="edu-logo-ph">Logo 5</div>
          <div class="edu-logo-ph">Logo 6</div>
        </div>
      </div>
      
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Education use cases on HelloBotz</h2></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(240px,1fr));gap:1rem;margin-top:1.5rem">
      <div class="card reveal" style="padding:1.25rem"><h3>🤖 AI Admission Counsellor</h3><p>Answer course, eligibility, fees and admission questions automatically — hand off to humans when needed.</p></div>
      <div class="card reveal" style="padding:1.25rem"><h3>📈 Student lead generation</h3><p>Capture leads from website, WhatsApp, Facebook and Instagram into one workspace.</p></div>
      <div class="card reveal" style="padding:1.25rem"><h3>🔁 Admission follow-ups</h3><p>Automated sequences until counselling or application is completed.</p></div>
      <div class="card reveal" style="padding:1.25rem"><h3>📅 Counselling &amp; demo booking</h3><p>Students book online or campus counselling slots from chat.</p></div>
      <div class="card reveal" style="padding:1.25rem"><h3>✅ Attendance updates</h3><p>Notify students/parents with clear attendance summaries.</p></div>
      <div class="card reveal" style="padding:1.25rem"><h3>🎓 Result updates</h3><p>Share result announcements and view/download links via approved templates.</p></div>
      <div class="card reveal" style="padding:1.25rem"><h3>💳 Fee reminders</h3><p>Due-date and payment reminder communication on WhatsApp.</p></div>
      <div class="card reveal" style="padding:1.25rem"><h3>📢 Student / parent notices</h3><p>Events, timetable changes and announcements to the right segments.</p></div>
      <div class="card reveal" style="padding:1.25rem"><h3>🗂️ Education CRM</h3><p>Stages: New Lead → Qualified → Counselling → Application → Admission.</p></div>
    </div>
  </div>
</section>
<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback">
    <div class="ico">🖼️</div>
    <strong>Student Enquiry + Course Selection</strong>
    <span>WhatsApp enquiry with course options.</span>
  </div>
</div>


<section class="section section-alt">
  <div class="container">
    <div class="section-header reveal"><h2>How HelloBotz works for education</h2></div>
    <div class="edu-journey reveal" style="margin-top:1.25rem">
      <span>Lead</span><span class="arr">→</span>
      <span>WhatsApp</span><span class="arr">→</span>
      <span>AI Qualification</span><span class="arr">→</span>
      <span>Counselling</span><span class="arr">→</span>
      <span>Follow-up</span><span class="arr">→</span>
      <span>Application</span><span class="arr">→</span>
      <span>Admission</span>
    </div>
  </div>
</section>
<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback">
    <div class="ico">🖼️</div>
    <strong>Counselling / Demo Class</strong>
    <span>Counsellor conversation and class/demo booking visual.</span>
  </div>
</div>


<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>Education CRM snapshot</h2>
      <p class="lead">Illustrative mockup — replace with your product screenshots when ready.</p>
    </div>
    <div class="edu-crm reveal" style="margin-top:1rem">
      <table>
        <thead>
          <tr><th>Student</th><th>Course</th><th>Stage</th><th>Counsellor</th><th>Next follow-up</th></tr>
        </thead>
        <tbody>
          <tr><td>A. Patel</td><td>BBA</td><td><span class="edu-pill new">New Lead</span></td><td>Riya</td><td>Today 4:00 PM</td></tr>
          <tr><td>S. Khan</td><td>B.Tech CSE</td><td><span class="edu-pill qual">Qualified</span></td><td>Amit</td><td>Tomorrow</td></tr>
          <tr><td>M. Sharma</td><td>MBA</td><td><span class="edu-pill app">Application</span></td><td>Riya</td><td>Fri 11:00 AM</td></tr>
        </tbody>
      </table>
    </div>
    <div class="edu-visual-banner reveal" aria-hidden="true">
      <div class="edu-visual-inner">
        <div class="edu-visual-icon">🎓</div>
        <strong>Admission Journey on WhatsApp</strong>
        <span>Enquiry → Qualify → Counsel → Apply → Enroll</span>
      </div>
    </div>
  </div>
</section>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback">
    <div class="ico">🖼️</div>
    <strong>Admission Journey + Follow-up</strong>
    <span>Admission automation and WhatsApp follow-up.</span>
  </div>
</div>


<section class="section section-gradient-1">
  <div class="container">
    <div class="section-header reveal"><h2>Why HelloBotz for education</h2></div>
    <div style="display:grid;grid-template-columns:repeat(auto-fit,minmax(220px,1fr));gap:1rem;margin-top:1.25rem">
      <div class="card reveal" style="padding:1.15rem"><strong>Faster first response</strong><p>Students get answers outside office hours.</p></div>
      <div class="card reveal" style="padding:1.15rem"><strong>Fewer missed enquiries</strong><p>One shared inbox instead of personal chats.</p></div>
      <div class="card reveal" style="padding:1.15rem"><strong>Automated follow-ups</strong><p>Sequences until counselling or application.</p></div>
      <div class="card reveal" style="padding:1.15rem"><strong>24/7 bot coverage</strong><p>AI handles FAQs; humans handle decisions.</p></div>
      <div class="card reveal" style="padding:1.15rem"><strong>Counsellor productivity</strong><p>Context, tags and stages on every chat.</p></div>
    </div>
  </div>
</section>

<section class="section">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can HelloBotz automate admission FAQs?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — use flows and AI replies for courses, eligibility and next steps, then hand off to counsellors.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Are fee and result messages allowed on WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Utility and other template categories must follow Meta WhatsApp policies and approval for your WABA.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can multiple counsellors work together?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Shared inbox supports assignment, notes and team routing by campus or course.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Does Book Education Demo open a new page?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">No — it opens the same HelloBotz Book Demo widget used across the site.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container"><div class="section-header reveal" style="text-align:center">
    <h2 style="color:#fff">Ready to automate your education business?</h2>
    <p class="lead" style="color:rgba(255,255,255,.75)">Capture enquiries, engage students and automate the admission journey with HelloBotz.</p>
    <div style="margin-top:1.25rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
      <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg">Start Free</a>
      <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.45);color:#fff;background:transparent">Book Education Demo</button>
    </div>
  </div></div>
</section>

<script src="/assets/js/education-sim.js?v=35" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
