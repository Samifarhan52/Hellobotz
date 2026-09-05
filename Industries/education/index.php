<?php
$basePath = '../../';
$pageTitle = 'WhatsApp Business API for Education & EdTech | Boost Admissions by 43% | InboxWa';
$pageDescription = 'Power up your school, college, institute, or EdTech growth with InboxWa Official WhatsApp Business API. Automate admissions, class reminders, exam results, fee collection, and parent updates.';
$canonicalUrl = 'https://inboxwa.com/industries/education/';
include __DIR__ . '/../../includes/header.php';
?>
<link rel="stylesheet" href="/assets/css/education.css?v=46">
<link rel="stylesheet" href="/assets/css/hero-mobile-system.css?v=6">

<!-- Hero Section -->
<section class="edu-hero" aria-label="Education & EdTech solution hero">
  <div class="container">
    <div class="edu-grid">
      <div class="edu-hero-copy">
        <div class="edu-badge">
          <span class="edu-badge-dot"></span>
          Meta Official Partner · Education &amp; EdTech Solutions
        </div>
        <h1>Power Up Your EdTech &amp; Institution Growth with <span class="grad">WhatsApp</span></h1>
        <p class="edu-lead">Simplify admissions instantly, deliver class reminders, share exam updates, collect tuition fees, and engage students &amp; parents with ease! Built for schools, colleges, coaching institutes, and EdTech platforms.</p>
        
        <div class="edu-ctas">
          <a href="/auth/register" class="btn btn-primary btn-lg">Start 14-Day Free Trial</a>
          <button type="button" class="btn-ghost-light btn-demo-open">Book Education Demo</button>
        </div>

        <!-- Student Name Personalization Interactive Box -->
        <div class="edu-name-input-wrap">
          <span><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> Try Live Demo As:</span>
          <input type="text" id="edu-student-name" value="Rahul" placeholder="Enter student name..." aria-label="Enter student name for simulation">
          <div class="edu-preset-names">
            <button type="button" data-name="Rahul">Rahul</button>
            <button type="button" data-name="Ananya">Ananya</button>
            <button type="button" data-name="Priya">Priya</button>
          </div>
        </div>

        <div class="edu-sim-tabs" id="edu-tabs" role="tablist" aria-label="Education WhatsApp simulations">
          <button type="button" class="is-active" data-flow="admission">1. Admission Inquiry</button>
          <button type="button" data-flow="course">2. Fee &amp; Syllabus</button>
          <button type="button" data-flow="counselling">3. 1-on-1 Counselling</button>
          <button type="button" data-flow="docs">4. Document Upload</button>
          <button type="button" data-flow="fee">5. Fee Reminders</button>
          <button type="button" data-flow="results">6. Exam Results</button>
        </div>
      </div>

      <div class="edu-phone-stage">
        <div class="edu-float edu-float-1">
          <b><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="13 2 3 14 12 14 11 22 21 10 12 10 13 2"/></svg> Instant Qualification</b>
          Course &amp; score matched in &lt; 30s
        </div>
        <div class="edu-float edu-float-2">
          <b><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="4" width="18" height="18" rx="2" ry="2"/><line x1="16" y1="2" x2="16" y2="6"/><line x1="8" y1="2" x2="8" y2="6"/><line x1="3" y1="10" x2="21" y2="10"/></svg> Slot Confirmed</b>
          1-on-1 Counselling booked
        </div>
        <div class="edu-float edu-float-3">
          <b><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg> Fee Collected</b>
          Receipt sent via WhatsApp UPI
        </div>

        <div class="edu-phone" aria-label="Live education WhatsApp simulation screen">
          <div class="edu-phone-notch"></div>
          <div class="edu-phone-screen">
            <div class="edu-wa-head">
              <div class="edu-wa-av">EDU</div>
              <div>
                <strong>Apex University Desk</strong>
                <small><span class="edu-live-dot"></span> Official WhatsApp API</small>
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
  </div>
</section>

<!-- Impact Metrics Bar -->
<section class="edu-metrics-bar">
  <div class="container">
    <div class="edu-metrics-grid">
      <div class="edu-metric-item">
        <div class="edu-metric-val">98%</div>
        <div class="edu-metric-lbl">WhatsApp Message Open Rate</div>
      </div>
      <div class="edu-metric-item">
        <div class="edu-metric-val">45 - 60%</div>
        <div class="edu-metric-lbl">Click-Through Rate on Alerts</div>
      </div>
      <div class="edu-metric-item">
        <div class="edu-metric-val">43%</div>
        <div class="edu-metric-lbl">Higher Admission Conversion Rate</div>
      </div>
      <div class="edu-metric-item">
        <div class="edu-metric-val">61%</div>
        <div class="edu-metric-lbl">Reduction in Manual Admin Workload</div>
      </div>
    </div>
  </div>
</section>

<!-- 5-Stage Student & Parent Lifecycle Journey Flow -->
<section class="edu-journey-section">
  <div class="container">
    <div class="section-header reveal text-center">
      <h2>The Complete 5-Stage Student &amp; Parent Journey Flow</h2>
      <p class="lead">From initial ad click to graduation — automate every single touchpoint on WhatsApp.</p>
    </div>

    <!-- Visual Journey Graphic Banner -->
    <div class="edu-img-card-wrap reveal" style="margin-top:2rem;margin-bottom:2.5rem">
      <img src="/assets/images/edtech_admission_journey.jpg" alt="InboxWa Student Admission Journey & Dashboard" loading="lazy">
      <div class="edu-img-caption-badge">
        <strong><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg> Interactive Student Journey &amp; Verification Platform</strong>
        <span>Live System Preview</span>
      </div>
    </div>

    <div class="edu-journey-5grid">
      <!-- Stage 1 -->
      <div class="edu-journey-card reveal">
        <div class="edu-step-badge">01</div>
        <h3>Capture &amp; Qualify</h3>
        <p>Convert prospective student leads from IG/FB Ads, Google Search, and catalog QR codes into instant WhatsApp chats.</p>
        <ul class="edu-journey-list">
          <li>Click-to-WhatsApp Ad Router</li>
          <li>AI Program &amp; Major Matcher</li>
          <li>24/7 Automated Qualification</li>
        </ul>
      </div>

      <!-- Stage 2 -->
      <div class="edu-journey-card reveal">
        <div class="edu-step-badge">02</div>
        <h3>Admission &amp; Verification</h3>
        <p>Guide applicants through native WhatsApp forms, 10th/12th document uploads, and counselling booking.</p>
        <ul class="edu-journey-list">
          <li>Interactive Application Flows</li>
          <li>Instant Document Verification</li>
          <li>1-on-1 Counsellor Booking</li>
        </ul>
      </div>

      <!-- Stage 3 -->
      <div class="edu-journey-card reveal">
        <div class="edu-step-badge">03</div>
        <h3>Class Reminders &amp; Support</h3>
        <p>Keep enrolled students engaged with automated class alerts, assignment deadlines, and AI FAQ support.</p>
        <ul class="edu-journey-list">
          <li>Live Lecture &amp; Webinar Alerts</li>
          <li>Assignment Deadline Reminders</li>
          <li>24/7 Student AI Assistant</li>
        </ul>
      </div>

      <!-- Stage 4 -->
      <div class="edu-journey-card reveal">
        <div class="edu-step-badge">04</div>
        <h3>Exams &amp; Results</h3>
        <p>Dispatch exam timetables, digital hall tickets, seating plans, and official result report cards to students &amp; parents.</p>
        <ul class="edu-journey-list">
          <li>Exam Timetables &amp; Hall Tickets</li>
          <li>Instant Result &amp; Grade Dispatches</li>
          <li>Prep Study Materials</li>
        </ul>
      </div>

      <!-- Stage 5 -->
      <div class="edu-journey-card reveal">
        <div class="edu-step-badge">05</div>
        <h3>Fee Reminders &amp; Parents</h3>
        <p>Automate tuition fee installment reminders with payment links, parent PTM invites, and attendance warnings.</p>
        <ul class="edu-journey-list">
          <li>Automated Fee Reminders</li>
          <li>WhatsApp UPI Payment Links</li>
          <li>Real-time Parent Updates</li>
        </ul>
      </div>
    </div>
  </div>
</section>

<!-- Alternating Rich Use Case Showcase Section with Images -->
<section class="edu-usecase-section">
  <div class="container">
    <div class="section-header reveal text-center" style="margin-bottom: 4rem;">
      <h2 style="font-size: clamp(2rem, 3.5vw, 2.75rem); font-weight: 800; color:#0F172A;">WhatsApp Use Case for EdTech</h2>
      <p class="lead" style="color:#64748B">Transform student admissions, class alerts, hall tickets &amp; parent communications natively on WhatsApp.</p>
    </div>

    <!-- Use Case 1 (Take Admission & Enrollment - Screenshot 1 Match) -->
    <div class="edu-usecase-row reverse reveal">
      <div class="edu-usecase-content">
        <h3>Take Admission &amp; Enrollment</h3>
        <ul class="edu-usecase-list">
          <li>Quickly send eligibility criteria, course details, and brochures.</li>
          <li>Automation for offering instant responses to FAQs without any delays.</li>
          <li>Share application links and confirm enrollment in real-time.</li>
          <li>Send the latest updates on application status to keep students in the loop.</li>
        </ul>
        <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20want%20to%20enquire%20about%20WhatsApp%20Admission%20Automation" class="btn-enquiry">Enquiry Now</a>
      </div>

      <div class="edu-usecase-img-box">
        <img src="/assets/images/edtech_admission_banner.jpg" alt="WhatsApp Take Admission &amp; Enrollment - Female Teacher with WhatsApp Flow Card" loading="lazy">
      </div>
    </div>

    <!-- Use Case 2 (Automated Reminders - Screenshot 2 Match) -->
    <div class="edu-usecase-row reveal">
      <div class="edu-usecase-content">
        <h3>Automated Reminders (Classes &amp; Deadlines)</h3>
        <ul class="edu-usecase-list">
          <li>Remind students of upcoming webinars, workshops, and classes.</li>
          <li>Post deadlines for assignment submission on chat in real-time.</li>
          <li>Notifies students of last-minute changes in the schedule.</li>
          <li>Alert students about fees due dates and enrollments.</li>
        </ul>
        <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20want%20to%20enquire%20about%20Automated%20Class%20Reminders" class="btn-enquiry">Enquiry Now</a>
      </div>

      <div class="edu-usecase-img-box">
        <img src="/assets/images/edtech_reminders_banner.jpg" alt="WhatsApp Automated Reminders - Textbooks, Gold Medal &amp; WhatsApp Class Cards" loading="lazy">
      </div>
    </div>

    <!-- Use Case 3 (Exams, Digital Hall Tickets & Instant Results) -->
    <div class="edu-usecase-row reverse reveal">
      <div class="edu-usecase-content">
        <h3>Exams, Digital Hall Tickets &amp; Instant Results</h3>
        <ul class="edu-usecase-list">
          <li>Broadcast exam timetables, room seating plans, and digital hall tickets with QR codes.</li>
          <li>Instantly notify students and parents of any last-minute exam schedule shifts.</li>
          <li>Deliver confidential semester results, report cards, and marksheets directly on WhatsApp.</li>
          <li>Provide targeted exam preparation study notes and revision guidelines automatically.</li>
        </ul>
        <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20want%20to%20enquire%20about%20Exam%20Results%20%26%20Hall%20Tickets" class="btn-enquiry">Enquiry Now</a>
      </div>

      <div class="edu-usecase-img-box">
        <img src="/assets/images/edtech_parent_updates.jpg" alt="WhatsApp Exam Hall Tickets &amp; Grade Cards" loading="lazy">
      </div>
    </div>

    <!-- Use Case 4 (Parent Communication & Multi-Counsellor Inbox) -->
    <div class="edu-usecase-row reveal">
      <div class="edu-usecase-content">
        <h3>Parent Communication &amp; Multi-Counsellor Shared Inbox</h3>
        <ul class="edu-usecase-list">
          <li>Provide instant attendance notifications when a student misses a lecture or class.</li>
          <li>Send parent-teacher conference (PTM) invitations with automated slot booking links.</li>
          <li>Collect registration fees and tuition installments securely via WhatsApp UPI.</li>
          <li>Multi-agent shared team inbox with department lead routing &amp; full interaction history.</li>
        </ul>
        <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20want%20to%20enquire%20about%20Parent%20Communication%20%26%20Shared%20Inbox" class="btn-enquiry">Enquiry Now</a>
      </div>

      <div class="edu-usecase-img-box">
        <img src="/assets/images/edtech_shared_inbox.jpg" alt="InboxWa Multi-Counsellor WhatsApp Shared Inbox" loading="lazy">
      </div>
    </div>
  </div>
</section>

<!-- Interactive ROI Calculator -->
<section class="edu-roi-section">
  <div class="container">
    <div class="section-header reveal text-center">
      <h2>Estimate Your Admission Growth &amp; Admin Time Savings</h2>
      <p class="lead">Calculate how much your school, college, or EdTech platform can gain with InboxWa.</p>
    </div>

    <div class="edu-roi-card reveal">
      <div class="edu-roi-controls">
        <label for="edu-roi-slider">
          <span>Monthly Student Enquiries:</span>
          <b id="edu-roi-val">500 / mo</b>
        </label>
        <input type="range" id="edu-roi-slider" class="edu-roi-slider" min="100" max="5000" step="100" value="500">
      </div>

      <div class="edu-roi-results">
        <div class="edu-roi-res-box">
          <b id="edu-roi-extra">+215 Students</b>
          <span>Additional Annual Admissions</span>
        </div>
        <div class="edu-roi-res-box">
          <b id="edu-roi-hours">125 Hrs/Mo</b>
          <span>Counselling Time Saved</span>
        </div>
        <div class="edu-roi-res-box">
          <b id="edu-roi-rev">₹1.6 Lakhs</b>
          <span>Est. Fee Revenue Growth</span>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- All-in-One WhatsApp Features Suite Grid -->
<section class="edu-solutions-section">
  <div class="container">
    <div class="section-header reveal text-center">
      <h2>All-in-One Features of WhatsApp Business API for Education</h2>
      <p class="lead">Everything you need to automate inquiries, engage students, and simplify management.</p>
    </div>

    <div class="edu-solutions-grid">
      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="11 5 6 9 2 9 2 15 6 15 11 19 11 5"/><path d="M19.07 4.93a10 10 0 0 1 0 14.14M15.54 8.46a5 5 0 0 1 0 7.07"/></svg></div>
        <h3>WhatsApp Broadcasting</h3>
        <p>Send bulk tailored broadcasts for open-day announcements, application deadlines, and exam schedules to thousands of contacts with zero spam risk.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="3" y="11" width="18" height="10" rx="2"/><circle cx="12" cy="5" r="2"/><path d="M12 7v4"/><line x1="8" y1="16" x2="8.01" y2="16"/><line x1="16" y1="16" x2="16.01" y2="16"/></svg></div>
        <h3>WhatsApp AI Chatbot</h3>
        <p>Automate student inquiries 24/7. Handle course FAQs, hostel queries, fee structures, and syllabus requests instantly without human delay.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M16 4h2a2 2 0 0 1 2 2v14a2 2 0 0 1-2 2H6a2 2 0 0 1-2-2V6a2 2 0 0 1 2-2h2"/><rect x="8" y="2" width="8" height="4" rx="1" ry="1"/></svg></div>
        <h3>WhatsApp Forms &amp; Flows</h3>
        <p>Collect student lead details, application form fields, marksheet uploads, and parent feedback directly inside interactive WhatsApp chat forms.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico"><svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg></div>
        <h3>Meta Verified Blue Tick</h3>
        <p>Establish high credibility and student trust with Meta's official green/blue verified badge on your institution's WhatsApp Business profile.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><circle cx="12" cy="12" r="10"/><circle cx="12" cy="12" r="6"/><circle cx="12" cy="12" r="2"/></svg></div>
        <h3>Click-to-WhatsApp Ads</h3>
        <p>Convert Instagram, Facebook, and Google ad traffic directly into active WhatsApp admission conversations with up to 5x higher conversion.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="1" y="4" width="22" height="16" rx="2" ry="2"/><line x1="1" y1="10" x2="23" y2="10"/></svg></div>
        <h3>In-Chat Fee Payments</h3>
        <p>Enable parents and students to pay registration fees, hostel deposits, and tuition installments securely via WhatsApp UPI and cards.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polyline points="23 4 23 10 17 10"/><polyline points="1 20 1 14 7 14"/><path d="M3.51 9a9 9 0 0 1 14.85-3.36L23 10M1 14l4.64 4.36A9 9 0 0 0 20.49 15"/></svg></div>
        <h3>WhatsApp Drip Campaigns</h3>
        <p>Automate multi-day message sequences to nurture prospective student leads from initial inquiry down to final admission confirmation.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico"><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2"/><circle cx="9" cy="7" r="4"/><path d="M23 21v-2a4 4 0 0 0-3-3.87"/><path d="M16 3.13a4 4 0 0 1 0 7.75"/></svg></div>
        <h3>Multi-Counsellor Team Inbox</h3>
        <p>Collaborate across faculty and admission teams in a single central workspace with department routing, tags, and internal notes.</p>
      </div>
    </div>
  </div>
</section>

<!-- Live CRM Admission Pipeline Showcase -->
<section class="edu-crm-section">
  <div class="container">
    <div class="section-header reveal text-center">
      <h2 style="color:#fff">Centralized Admission Pipeline &amp; Lead Workspace</h2>
      <p class="lead" style="color:rgba(255,255,255,.75)">Track student leads across every stage of the funnel with full team visibility.</p>
    </div>

    <div class="edu-crm-container reveal">
      <div class="edu-crm-header">
        <div class="edu-crm-title">
          <span><svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg></span> 2026 Student Admission Tracker (Live CRM)
        </div>
        <div class="edu-crm-filter-btns">
          <button type="button" class="active">All Departments</button>
          <button type="button">Engineering</button>
          <button type="button">Business / MBA</button>
          <button type="button">Medical</button>
          <button type="button">Online EdTech</button>
        </div>
      </div>

      <div style="overflow-x:auto">
        <table class="edu-crm-table">
          <thead>
            <tr>
              <th>Student Name</th>
              <th>Program</th>
              <th>Status Stage</th>
              <th>Assigned Counsellor</th>
              <th>Next Automated Action</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td><b>Rohan Sharma</b></td>
              <td>B.Tech Computer Science</td>
              <td><span class="edu-pill new">New Lead</span></td>
              <td>Priya Sharma</td>
              <td>Send Syllabus PDF</td>
            </tr>
            <tr>
              <td><b>Ananya Verma</b></td>
              <td>MBA Marketing &amp; Finance</td>
              <td><span class="edu-pill qual">Qualified</span></td>
              <td>Vikram Malhotra</td>
              <td>Schedule 1-on-1 Counselling</td>
            </tr>
            <tr>
              <td><b>Kabir Mehta</b></td>
              <td>BBA International Business</td>
              <td><span class="edu-pill visit">Campus Visit Booked</span></td>
              <td>Neha Gupta</td>
              <td>Campus Tour Reminder (Tomorrow 10 AM)</td>
            </tr>
            <tr>
              <td><b>Sneha Kulkarni</b></td>
              <td>BCA Data Science</td>
              <td><span class="edu-pill app">Application Submitted</span></td>
              <td>Priya Sharma</td>
              <td>Verify 12th Marksheet PDF</td>
            </tr>
            <tr>
              <td><b>Aarav Patel</b></td>
              <td>B.Tech Mechanical</td>
              <td><span class="edu-pill enrolled">Enrolled &amp; Fee Paid</span></td>
              <td>Accounts Team</td>
              <td>Dispatch Welcome Kit &amp; Portal Login</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>
</section>

<!-- Comparison Table -->
<section class="edu-compare-section">
  <div class="container">
    <div class="section-header reveal text-center">
      <h2>InboxWa vs. Traditional Admission &amp; Communication Methods</h2>
      <p class="lead">See how WhatsApp automation outpaces legacy emails, paper forms, and manual phone calls.</p>
    </div>

    <div class="edu-compare-table-wrap reveal">
      <table class="edu-compare-table">
        <thead>
          <tr>
            <th>Key Metric</th>
            <th>Traditional Methods (Email / Call / SMS)</th>
            <th>InboxWa WhatsApp Automation</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td>First Response Time</td>
            <td>24 to 48 Hours via Email</td>
            <td>Instant (&lt; 30 Seconds) via AI Bot</td>
          </tr>
          <tr>
            <td>Student Engagement &amp; Open Rate</td>
            <td>12% - 18% Email Open Rate</td>
            <td>98% WhatsApp Open Rate (45-60% Clicks)</td>
          </tr>
          <tr>
            <td>Application Document Submission</td>
            <td>Manual email attachments &amp; postal forms</td>
            <td>Native WhatsApp Flow upload in chat</td>
          </tr>
          <tr>
            <td>Fee Collection &amp; Reminders</td>
            <td>Manual phone calls &amp; paper invoices</td>
            <td>Automated WhatsApp payment links &amp; receipts</td>
          </tr>
          <tr>
            <td>Counsellor Efficiency</td>
            <td>Overwhelmed answering repetitive FAQs</td>
            <td>Handles qualified students ready to enroll</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</section>

<!-- FAQs -->
<section class="section">
  <div class="container">
    <div class="section-header reveal text-center">
      <h2>Frequently Asked Questions</h2>
      <p class="lead">Everything you need to know about setting up InboxWa for your school, college, or EdTech platform.</p>
    </div>

    <div class="faq-list" style="max-width:780px;margin:2rem auto 0">
      <div class="faq-item reveal">
        <button type="button" class="faq-question" aria-expanded="false">
          Can InboxWa integrate with our existing Education CRM or LMS?
          <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">
            Yes! InboxWa seamlessly integrates with leading education CRMs including LeadSquared, Salesforce Education Cloud, Zoho CRM, Hubspot, and custom ERP/LMS databases via Webhooks &amp; APIs.
          </div>
        </div>
      </div>

      <div class="faq-item reveal">
        <button type="button" class="faq-question" aria-expanded="false">
          Are fee reminders, exam results, and parent broadcasts permitted by Meta WhatsApp policy?
          <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">
            Yes. Utility and Transactional WhatsApp Message Templates for fee alerts, registration receipts, exam hall tickets, and attendance updates are 100% compliant with Meta Business Policies.
          </div>
        </div>
      </div>

      <div class="faq-item reveal">
        <button type="button" class="faq-question" aria-expanded="false">
          How many admission counsellors and faculty members can access the platform simultaneously?
          <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">
            InboxWa provides multi-agent access with granular role permissions. You can add dozens of counsellors, assign specific course departments to teams, and monitor counsellor performance metrics live.
          </div>
        </div>
      </div>

      <div class="faq-item reveal">
        <button type="button" class="faq-question" aria-expanded="false">
          How quickly can our institution go live with InboxWa?
          <svg class="faq-icon" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><polyline points="6 9 12 15 18 9"/></svg>
        </button>
        <div class="faq-answer">
          <div class="faq-answer-inner">
            You can verify your Meta Business Manager and launch your initial WhatsApp admission automation flows within 24 to 48 hours. Our onboarding team assists you every step of the way.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- Bottom CTA -->
<section class="section section-dark">
  <div class="container text-center">
    <div class="section-header reveal">
      <h2 style="color:#fff">Ready to Power Up Your EdTech &amp; Institution Growth?</h2>
      <p class="lead" style="color:rgba(255,255,255,.8)">Join hundreds of schools, universities, coaching institutes, and EdTech platforms growing faster with InboxWa.</p>
      <div style="margin-top:1.5rem;display:flex;flex-wrap:wrap;gap:1rem;justify-content:center">
        <a href="/auth/register" class="btn btn-primary btn-lg">Start 14-Day Free Trial</a>
        <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20want%20a%20demo%20for%20our%20educational%20institution" target="_blank" rel="noopener" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.4);color:#fff">WhatsApp Sales Direct</a>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/education-sim.js?v=39" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
