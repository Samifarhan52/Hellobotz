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
          <a href="https://inboxwa.com/auth/register" class="btn btn-primary btn-lg">Start 14-Day Free Trial</a>
          <button type="button" class="btn-ghost-light btn-demo-open">Book Education Demo</button>
        </div>

        <!-- Student Name Personalization Interactive Box -->
        <div class="edu-name-input-wrap">
          <span>⚡ Try Live Demo As:</span>
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
          <b>⚡ Instant Qualification</b>
          Course &amp; score matched in &lt; 30s
        </div>
        <div class="edu-float edu-float-2">
          <b>📅 Slot Confirmed</b>
          1-on-1 Counselling booked
        </div>
        <div class="edu-float edu-float-3">
          <b>💳 Fee Collected</b>
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
        <strong>🎓 Interactive Student Journey &amp; Verification Platform</strong>
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
      <h2>In-Depth Education &amp; EdTech WhatsApp Use Cases</h2>
      <p class="lead">Discover how top universities, coaching institutes, and online learning platforms operate with InboxWa.</p>
    </div>

    <!-- Use Case 1 (Admissions) -->
    <div class="edu-usecase-row reveal">
      <div class="edu-usecase-content">
        <span class="edu-usecase-tag">Admissions &amp; Enrollment</span>
        <h3>Take Admissions &amp; Complete Enrollments Natively</h3>
        <p>Eliminate long email back-and-forth and paper application forms. InboxWa allows prospective students to check eligibility, explore course brochures, and complete admission applications directly inside WhatsApp.</p>
        <ul class="edu-usecase-list">
          <li>Quickly share eligibility criteria, fee structures, and downloadable course brochures.</li>
          <li>Automate FAQ responses on admission deadlines, accreditation, and hostel facilities.</li>
          <li>Send direct application links and verify uploaded marksheets in real-time.</li>
          <li>Keep applicants updated on application status stages with automated notifications.</li>
        </ul>
        <a href="https://inboxwa.com/auth/register" class="btn btn-primary">Try Admission Automation</a>
      </div>

      <div class="edu-img-card-wrap">
        <img src="/assets/images/edtech_admission_journey.jpg" alt="WhatsApp Student Admission Journey & Verification" loading="lazy">
        <div class="edu-img-caption-badge">
          <strong>🎓 Native WhatsApp Application Flow</strong>
          <span>Automated Eligibility &amp; Verification</span>
        </div>
      </div>
    </div>

    <!-- Use Case 2 (Classes & Reminders - Reverse) -->
    <div class="edu-usecase-row reverse reveal">
      <div class="edu-usecase-content">
        <span class="edu-usecase-tag">Classes &amp; Deadlines</span>
        <h3>Automated Class Reminders &amp; Assignment Alerts</h3>
        <p>Reduce student drop-offs and missed deadlines with automated, timely reminders for live classes, workshops, and assignment submissions on the app students check every minute.</p>
        <ul class="edu-usecase-list">
          <li>Send instant reminders for upcoming webinars, live lectures, and interactive workshops.</li>
          <li>Broadcast assignment submission deadlines directly into student WhatsApp chats.</li>
          <li>Notify students immediately regarding schedule changes, substitute faculty, or room updates.</li>
          <li>Alert students about upcoming fee due dates before late charges apply.</li>
        </ul>
        <a href="https://inboxwa.com/auth/register" class="btn btn-primary">Schedule Reminders</a>
      </div>

      <div class="edu-img-card-wrap">
        <img src="/assets/images/edtech_class_reminders.jpg" alt="Automated WhatsApp Class Reminders & Hall Tickets" loading="lazy">
        <div class="edu-img-caption-badge">
          <strong>⏰ Class &amp; Exam Hall Ticket Dispatcher</strong>
          <span>Instant Mobile &amp; Desktop Alerts</span>
        </div>
      </div>
    </div>

    <!-- Use Case 3 (Exams & Results) -->
    <div class="edu-usecase-row reveal">
      <div class="edu-usecase-content">
        <span class="edu-usecase-tag">Exams &amp; Results</span>
        <h3>Exam Timetables, Hall Tickets &amp; Instant Results</h3>
        <p>Ensure seamless exam management by delivering exam schedules, digital hall tickets, and official result grade cards straight to students and parents with 98% guaranteed open rates.</p>
        <ul class="edu-usecase-list">
          <li>Broadcast exam timetables, room numbers, and digital hall tickets with QR codes.</li>
          <li>Notify students and parents instantly of any last-minute exam schedule updates or venue shifts.</li>
          <li>Deliver confidential semester results, report cards, and performance summaries directly.</li>
          <li>Provide targeted exam preparation study tips and subject revision notes automatically.</li>
        </ul>
        <a href="https://inboxwa.com/auth/register" class="btn btn-primary">Automate Result Delivery</a>
      </div>

      <div class="edu-usecase-card-box">
        <div class="edu-usecase-box-head">
          <div class="icon">📜</div>
          <div>
            <strong>Exam &amp; Results Portal</strong>
            <small style="display:block;color:#94A3B8;font-size:0.75rem">Instant Grade Sheet Dispatch</small>
          </div>
        </div>
        <div class="edu-usecase-box-body">
          <div class="edu-chat-bubble bot">🎓 <b>Semester 4 Results:</b> Rahul Sharma | CGPA: <span class="highlight">9.2 (Distinction)</span></div>
          <div class="edu-chat-bubble user">Download Grade Card PDF</div>
          <div class="edu-chat-bubble bot">Official Marksheet dispatched to your email &amp; parent's WhatsApp number.</div>
        </div>
      </div>
    </div>

    <!-- Use Case 4 (Parental Communication - Reverse) -->
    <div class="edu-usecase-row reverse reveal">
      <div class="edu-usecase-content">
        <span class="edu-usecase-tag">Parental Communication</span>
        <h3>Real-Time Parent Communication &amp; Attendance Alerts</h3>
        <p>Build trust and transparency with parents by delivering real-time academic progress reports, attendance warnings, parent-teacher meeting invites, and digital consent forms.</p>
        <ul class="edu-usecase-list">
          <li>Provide instant attendance notifications when a student misses a class or lecture.</li>
          <li>Send parent-teacher conference invitations with automated slot booking links.</li>
          <li>Inform parents about co-curricular achievements, sports events, and award ceremony highlights.</li>
          <li>Deliver digital report cards, fee receipts, and field trip consent forms directly on WhatsApp.</li>
        </ul>
        <a href="https://inboxwa.com/auth/register" class="btn btn-primary">Engage Parents Now</a>
      </div>

      <div class="edu-img-card-wrap">
        <img src="/assets/images/edtech_parent_updates.jpg" alt="WhatsApp Parental Communication & Attendance Tracker" loading="lazy">
        <div class="edu-img-caption-badge">
          <strong>👨‍👩‍👧‍👦 Parent Communication &amp; Fee Payments</strong>
          <span>Real-time Progress &amp; UPI Reminders</span>
        </div>
      </div>
    </div>

    <!-- Use Case 5 (24/7 AI Support & Faculty Shared Inbox) -->
    <div class="edu-usecase-row reveal">
      <div class="edu-usecase-content">
        <span class="edu-usecase-tag">24/7 AI Support &amp; Faculty</span>
        <h3>24/7 Student AI Bot &amp; Shared Multi-Counsellor Inbox</h3>
        <p>Let an intelligent AI chatbot handle 80% of repetitive inquiries on schedules, fees, and portal logins, while routing complex academic questions to faculty and counsellors in a unified inbox.</p>
        <ul class="edu-usecase-list">
          <li>Automate 24/7 answers for course FAQs, entrance exam syllabus, and library timings.</li>
          <li>Distribute study materials, video lectures, and revision PDFs automatically.</li>
          <li>Assist students with portal login issues, password resets, and LMS technical queries.</li>
          <li>Enable 1-on-1 mentorship by connecting students directly with departmental faculty.</li>
        </ul>
        <a href="https://inboxwa.com/auth/register" class="btn btn-primary">Set Up AI Assistant</a>
      </div>

      <div class="edu-img-card-wrap">
        <img src="/assets/images/edtech_shared_inbox.jpg" alt="InboxWa Multi-Counsellor WhatsApp Shared Inbox" loading="lazy">
        <div class="edu-img-caption-badge">
          <strong>🤖 Multi-Counsellor Shared Team Inbox</strong>
          <span>Department Lead Routing &amp; Analytics</span>
        </div>
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
        <div class="edu-sol-ico">📢</div>
        <h3>WhatsApp Broadcasting</h3>
        <p>Send bulk tailored broadcasts for open-day announcements, application deadlines, and exam schedules to thousands of contacts with zero spam risk.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico">🤖</div>
        <h3>WhatsApp AI Chatbot</h3>
        <p>Automate student inquiries 24/7. Handle course FAQs, hostel queries, fee structures, and syllabus requests instantly without human delay.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico">📋</div>
        <h3>WhatsApp Forms &amp; Flows</h3>
        <p>Collect student lead details, application form fields, marksheet uploads, and parent feedback directly inside interactive WhatsApp chat forms.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico">✅</div>
        <h3>Meta Verified Blue Tick</h3>
        <p>Establish high credibility and student trust with Meta's official green/blue verified badge on your institution's WhatsApp Business profile.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico">🎯</div>
        <h3>Click-to-WhatsApp Ads</h3>
        <p>Convert Instagram, Facebook, and Google ad traffic directly into active WhatsApp admission conversations with up to 5x higher conversion.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico">💳</div>
        <h3>In-Chat Fee Payments</h3>
        <p>Enable parents and students to pay registration fees, hostel deposits, and tuition installments securely via WhatsApp UPI and cards.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico">🔄</div>
        <h3>WhatsApp Drip Campaigns</h3>
        <p>Automate multi-day message sequences to nurture prospective student leads from initial inquiry down to final admission confirmation.</p>
      </div>

      <div class="edu-solution-card reveal">
        <div class="edu-sol-ico">👥</div>
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
          <span>🎓</span> 2026 Student Admission Tracker (Live CRM)
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
        <a href="https://inboxwa.com/auth/register" class="btn btn-primary btn-lg">Start 14-Day Free Trial</a>
        <a href="https://wa.me/918050854445?text=Hi%20InboxWa%2C%20I%20want%20a%20demo%20for%20our%20educational%20institution" target="_blank" rel="noopener" class="btn btn-outline btn-lg" style="border-color:rgba(255,255,255,.4);color:#fff">WhatsApp Sales Direct</a>
      </div>
    </div>
  </div>
</section>

<script src="/assets/js/education-sim.js?v=39" defer></script>
<?php include __DIR__ . '/../../includes/footer.php'; ?>
