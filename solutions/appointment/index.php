<?php
$basePath = '../../';
$pageTitle = 'Appointment Automation | Book, Remind & Follow Up | HelloBotz';
$pageDescription = 'Let customers book appointments on WhatsApp, sync calendars, send reminders and manage your team from one connected HelloBotz workflow.';
$canonicalUrl = 'https://hellobotz.com/solutions/appointment/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/appointment.css?v=1">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=2">

<section class="ap-hero" aria-label="Appointment automation hero">
  <div class="ap-hero-bg" aria-hidden="true"></div>
  <div class="container">
    <div class="ap-hero-grid">
      <div class="ap-hero-copy">
        <span class="badge ap-badge">APPOINTMENT AUTOMATION</span>
        <h1>Turn Every Enquiry Into a <span class="grad">Confirmed Appointment</span></h1>
        <p class="ap-lead">Let customers discover available slots, book appointments, receive WhatsApp confirmations and reminders, while your team manages everything from one connected workflow.</p>
        <div class="ap-ctas">
          <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg">Start Free</a>
          <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book a Demo</button>
        </div>
      </div>
      <div class="ap-phone-stage">
        <div class="ap-phone">
          <div class="ap-notch"></div>
          <div class="ap-screen">
            <div class="ap-head"><div class="ap-av">AP</div><div><strong>Book Appointment</strong><small>Demo booking</small></div></div>
            <div class="ap-body" id="ap-body"><div class="ap-typing" id="ap-typing"><i></i><i></i><i></i></div></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<section class="section" id="journey">
  <div class="container">
    <div class="section-header reveal"><h2>From Enquiry to Appointment — Automatically</h2></div>
    <div class="ap-steps">
      <div class="card reveal"><span>01</span><strong>Enquiry</strong><p>Customer contacts your business.</p></div>
      <div class="card reveal"><span>02</span><strong>Service</strong><p>Selects required service.</p></div>
      <div class="card reveal"><span>03</span><strong>Slot</strong><p>Chooses date &amp; time.</p></div>
      <div class="card reveal"><span>04</span><strong>Confirm</strong><p>Appointment confirmed.</p></div>
      <div class="card reveal"><span>05</span><strong>Reminder</strong><p>Automated reminder sent.</p></div>
      <div class="card reveal"><span>06</span><strong>Follow-up</strong><p>Post-appointment communication.</p></div>
    </div>
  </div>
</section>

<section class="section section-alt" id="interactive">
  <div class="container">
    <div class="section-header reveal"><h2>See How Customers Book an Appointment</h2></div>
    <div class="ap-book-steps" id="ap-book-steps">
      <button type="button" class="is-active" data-step="0">Service</button>
      <button type="button" data-step="1">Date</button>
      <button type="button" data-step="2">Time</button>
      <button type="button" data-step="3">Details</button>
      <button type="button" data-step="4">Confirmed</button>
    </div>
    <div class="ap-book-panel reveal" id="ap-book-panel">Select Service · Consultation · Demo · Meeting</div>
  </div>
</section>

<section class="section" id="whatsapp">
  <div class="container">
    <div class="section-header reveal"><h2>Let Customers Book Directly on WhatsApp</h2></div>
    <div class="ap-chat reveal">
      <p class="m user">I want to book an appointment.</p>
      <p class="m bot">Sure! Please select a service.</p>
      <p class="m bot">Consultation · Demo · Meeting</p>
      <p class="m ok">Appointment confirmed ✓ · View · Calendar · Talk to Team · Demo</p>
    </div>
  </div>
</section>

<section class="section section-gradient-1" id="calendar">
  <div class="container">
    <div class="section-header reveal"><h2>Keep Your Team Calendar in Sync</h2></div>
    <div class="ap-flow reveal">
      <span>Customer</span><span class="arr">→</span>
      <span>HelloBotz</span><span class="arr">→</span>
      <span>Available Slot</span><span class="arr">→</span>
      <span>Calendar</span><span class="arr">→</span>
      <span>Confirmed</span>
    </div>
    <p class="ap-note reveal">Google Calendar connectivity depends on your configured integration.</p>
  </div>
</section>

<section class="section" id="reminders">
  <div class="container">
    <div class="section-header reveal"><h2>Reduce Missed Appointments With Smart Reminders</h2></div>
    <div class="ap-flow reveal">
      <span>Booked</span><span class="arr">↓</span>
      <span>24h Before</span><span class="arr">↓</span>
      <span>2h Before</span><span class="arr">↓</span>
      <span>Appointment Time</span>
    </div>
    <p class="ap-note reveal">Reminder timing is configurable where supported — not a fixed guarantee.</p>
  </div>
</section>

<section class="section section-alt" id="reschedule">
  <div class="container">
    <div class="section-header reveal"><h2>Make Rescheduling Simple</h2></div>
    <div class="ap-flow reveal">
      <span>Reschedule Request</span><span class="arr">→</span>
      <span>New Slot</span><span class="arr">→</span>
      <span>Calendar Updated</span><span class="arr">→</span>
      <span>Customer Notified</span>
    </div>
  </div>
</section>

<section class="section" id="team">
  <div class="container">
    <div class="section-header reveal"><h2>Give Your Team a Clear View of Every Appointment</h2><p class="lead">Demo Data</p></div>
    <div class="ap-cards">
      <div class="card reveal">Today</div>
      <div class="card reveal">Upcoming</div>
      <div class="card reveal">Pending</div>
      <div class="card reveal">Completed</div>
      <div class="card reveal">Rescheduled</div>
      <div class="card reveal">Cancelled</div>
    </div>
  </div>
</section>

<section class="section section-dark" id="play">
  <div class="container" style="text-align:center">
    <div class="section-header reveal"><h2 style="color:#fff">Watch the Complete Appointment Journey</h2></div>
    <button type="button" class="btn btn-primary btn-lg" id="ap-play">▶ Play Appointment Journey</button>
    <div class="ap-play-out" id="ap-play-out">Click play to animate the full journey.</div>
  </div>
</section>

<section class="section" id="industries">
  <div class="container">
    <div class="section-header reveal"><h2>Appointment Automation for Every Business</h2></div>
    <div class="ap-cards">
      <div class="card reveal"><h3>Healthcare</h3><p>Enquiry → booking → reminder</p></div>
      <div class="card reveal"><h3>Education</h3><p>Counselling / demo booking</p></div>
      <div class="card reveal"><h3>Real Estate</h3><p>Property visit + agent</p></div>
      <div class="card reveal"><h3>Sales</h3><p>Product demo meetings</p></div>
      <div class="card reveal"><h3>Professional Services</h3><p>Consultation + follow-up</p></div>
      <div class="card reveal"><h3>Beauty &amp; Wellness</h3><p>Service booking</p></div>
    </div>
  </div>
</section>

<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>Booking Mobile Screen</strong><span>Service · date · time selection.</span></div>
</div>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>WhatsApp Booking</strong><span>Conversation-based appointment flow.</span></div>
</div>
<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>Calendar Dashboard</strong><span>Team calendar and slot management.</span></div>
</div>
<div class="hb-img-slot hb-img-slot--dark" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>Appointment Management</strong><span>Statuses, staff and services.</span></div>
</div>
<div class="hb-img-slot" data-hb-img-slot>
  <div class="hb-img-fallback"><div class="ico">🖼️</div><strong>Complete Automation</strong><span>Book → Confirm → Remind → Follow-up</span></div>
</div>

<section class="section section-alt" id="benefits">
  <div class="container">
    <div class="section-header reveal"><h2>Benefits</h2></div>
    <div class="ap-cards">
      <div class="card reveal">24/7 Booking</div>
      <div class="card reveal">Faster Response</div>
      <div class="card reveal">Automated Reminders</div>
      <div class="card reveal">Calendar Connectivity</div>
      <div class="card reveal">Team Visibility</div>
      <div class="card reveal">Easy Rescheduling</div>
      <div class="card reveal">Centralized Appointments</div>
      <div class="card reveal">Customer Follow-up</div>
    </div>
  </div>
</section>

<section class="section" id="faq">
  <div class="container">
    <div class="section-header reveal"><h2>FAQ</h2></div>
    <div class="faq-list" style="max-width:760px;margin:1.5rem auto 0">
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can customers book appointments through WhatsApp?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — guide customers through service, date and time selection in conversation where configured.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I connect Google Calendar?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Where Google Calendar integration is enabled for your account, appointments can sync with available slots.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can customers reschedule appointments?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — reschedule and cancel flows can be offered based on your automation setup.</div></div></div>
      <div class="faq-item reveal"><button type="button" class="faq-question" aria-expanded="false">Can I send automatic reminders?<svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg></button><div class="faq-answer"><div class="faq-answer-inner">Yes — reminder messages can be scheduled according to your configuration and messaging policies.</div></div></div>
    </div>
  </div>
</section>

<section class="section section-dark">
  <div class="container" style="text-align:center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Make Appointment Booking Effortless</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Let customers book, confirm, reschedule and receive reminders through one connected workflow.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:.75rem;justify-content:center">
        <a href="https://hellobotz.com/auth/register" class="btn btn-primary btn-lg">Start Free</a>
        <button type="button" class="btn btn-outline btn-lg btn-demo-open" style="border-color:rgba(255,255,255,.5);color:#fff;background:transparent">Book a Demo</button>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/appointment.js?v=1" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
