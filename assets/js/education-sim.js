(function(){
  var userName = 'Rahul';
  
  var flows = {
    admission: function(name) {
      return [
        {t:'typing', ms:500},
        {t:'user', text: 'Hi, I want to inquire about 2026 Admissions.'},
        {t:'typing', ms:700},
        {t:'bot', text: 'Hello ' + name + '!  Welcome to Apex University Admission Desk.'},
        {t:'bot', text: 'Which program or major are you interested in?'},
        {t:'chips', opts: ['B.Tech CSE', 'MBA / PGDM', 'BBA / BCA', 'Medical'], pick: 'B.Tech CSE'},
        {t:'user', text: 'B.Tech CSE'},
        {t:'typing', ms:650},
        {t:'bot', text: 'Awesome choice ' + name + '! <svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4.5 16.5c-1.5 1.26-2 5-2 5s3.74-.5 5-2c.71-.71 1.26-1.5 1.5-2.5L4.5 16.5z"/><path d="M12 15l-3-3 7.5-7.5c1.5-1.5 4-2.5 4.5-2.5s-1 3-2.5 4.5L12 15z"/></svg> B.Tech CSE has 94.8% placement record.'},
        {t:'bot', text: 'Would you like to download the syllabus or book a campus tour?'},
        {t:'chips', opts: ['Book Campus Tour', 'Get Syllabus', 'Scholarships'], pick: 'Book Campus Tour'},
        {t:'user', text: 'Book Campus Tour'},
        {t:'typing', ms:600},
        {t:'bot', text: 'Campus Tour Reserved for ' + name + '! <svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect x="2" y="6" width="20" height="12" rx="2"/><line x1="12" y1="6" x2="12" y2="18"/></svg>️ Our admission counsellor will ping you with details.'}
      ];
    },
    course: function(name) {
      return [
        {t:'typing', ms:500},
        {t:'user', text: 'Can you send the complete course fee structure?'},
        {t:'typing', ms:700},
        {t:'bot', text: 'Hi ' + name + '! <svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 19.5A2.5 2.5 0 0 1 6.5 17H20"/><path d="M6.5 2H20v20H6.5A2.5 2.5 0 0 1 4 19.5v-15A2.5 2.5 0 0 1 6.5 2z"/></svg> Here is our 2026-27 Fee & Course Catalog.'},
        {t:'bot', text: 'B.Tech: ₹1.2L/yr · MBA: ₹1.8L/yr · BBA: ₹85k/yr'},
        {t:'chips', opts: ['Check Merit Scholarship', 'Hostel Fees', 'Apply Now'], pick: 'Check Merit Scholarship'},
        {t:'user', text: 'Check Merit Scholarship'},
        {t:'typing', ms:650},
        {t:'bot', text: 'Great news ' + name + '! Score above 85% in 12th/Graduation to get up to 40% fee waiver.'}
      ];
    },
    counselling: function(name) {
      return [
        {t:'typing', ms:500},
        {t:'bot', text: 'Hi ' + name + ', choose your preferred 1-on-1 Counselling mode:'},
        {t:'chips', opts: ['Online Video Session', 'In-Person Campus Visit'], pick: 'Online Video Session'},
        {t:'user', text: 'Online Video Session'},
        {t:'typing', ms:600},
        {t:'bot', text: 'Available slots for ' + name + ':'},
        {t:'chips', opts: ['Today 4:00 PM', 'Tomorrow 11:00 AM'], pick: 'Tomorrow 11:00 AM'},
        {t:'user', text: 'Tomorrow 11:00 AM'},
        {t:'typing', ms:550},
        {t:'bot', text: 'Slot Confirmed! <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Calendar invite sent to your email.'}
      ];
    },
    docs: function(name) {
      return [
        {t:'typing', ms:500},
        {t:'bot', text: 'Hi ' + name + ', submit your admission documents inside WhatsApp Flow <svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M14 2H6a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V8z"/></svg>'},
        {t:'chips', opts: ['Upload 12th Marksheet', 'Aadhaar / ID Card'], pick: 'Upload 12th Marksheet'},
        {t:'user', text: 'Uploaded 12th Marksheet PDF'},
        {t:'typing', ms:700},
        {t:'bot', text: 'Document Received! Instant verification complete for ' + name + '. Eligibility: PASSED <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'}
      ];
    },
    fee: function(name) {
      return [
        {t:'typing', ms:500},
        {t:'bot', text: 'Fee Payment Reminder for ' + name + ' <svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>'},
        {t:'bot', text: 'Semester 2 Tuition Fee: ₹45,000 (Due Date: 15 Sept)'},
        {t:'chips', opts: ['Pay via WhatsApp UPI', 'Download Invoice'], pick: 'Pay via WhatsApp UPI'},
        {t:'user', text: 'Pay via WhatsApp UPI'},
        {t:'typing', ms:600},
        {t:'bot', text: 'Payment Successful! <svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg> Receipt #EDU-9921 generated for ' + name + '.'}
      ];
    },
    results: function(name) {
      return [
        {t:'typing', ms:500},
        {t:'bot', text: 'Final Exam Result Announcement <svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M22 10v6M2 10l10-5 10 5-10 5z"/><path d="M6 12v5c3 3 9 3 12 0v-5"/></svg>'},
        {t:'bot', text: 'Student Name: ' + name + '\nCGPA: 9.2 (Distinction)'},
        {t:'chips', opts: ['View Grade Card', 'Share with Parent'], pick: 'View Grade Card'},
        {t:'user', text: 'View Grade Card'},
        {t:'typing', ms:600},
        {t:'bot', text: 'Official Grade Sheet dispatched to ' + name + '\'s registered email & WhatsApp.'}
      ];
    }
  };

  var body = document.getElementById('edu-wa-body');
  var typing = document.getElementById('edu-typing');
  var chips = document.getElementById('edu-chips');
  var tabs = document.getElementById('edu-tabs');
  var nameInput = document.getElementById('edu-student-name');
  if(!body || !typing || !tabs) return;

  var timer = null;
  var currentFlow = 'admission';
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Preset name buttons click
  document.querySelectorAll('.edu-preset-names button').forEach(function(btn) {
    btn.addEventListener('click', function() {
      userName = this.getAttribute('data-name');
      if (nameInput) nameInput.value = userName;
      run(currentFlow);
    });
  });

  if (nameInput) {
    nameInput.addEventListener('input', function(e) {
      userName = e.target.value.trim() || 'Student';
      run(currentFlow);
    });
  }

  function clear(){
    body.querySelectorAll('.edu-msg').forEach(function(m){ m.remove(); });
    chips.classList.remove('on');
    chips.innerHTML = '';
    typing.classList.remove('on');
  }

  function add(kind, text){
    var d = document.createElement('div');
    d.className = 'edu-msg ' + kind;
    d.textContent = text;
    body.insertBefore(d, typing);
    requestAnimationFrame(function(){ d.classList.add('show'); });
  }

  function run(name){
    currentFlow = name;
    if(timer){ clearTimeout(timer); timer = null; }
    clear();
    var flowFn = flows[name] || flows.admission;
    var steps = flowFn(userName);
    var i = 0;
    function next(){
      if(i >= steps.length){
        timer = setTimeout(function(){ run(name); }, 4000);
        return;
      }
      var s = steps[i++];
      if(s.t === 'typing'){
        typing.classList.add('on');
        timer = setTimeout(function(){ typing.classList.remove('on'); next(); }, reduced ? 0 : (s.ms||600));
      } else if(s.t === 'user' || s.t === 'bot'){
        add(s.t, s.text);
        timer = setTimeout(next, reduced ? 0 : 700);
      } else if(s.t === 'chips'){
        chips.innerHTML = '';
        (s.opts||[]).forEach(function(o){
          var b = document.createElement('button');
          b.type = 'button';
          b.textContent = o;
          if(o === s.pick) b.className = 'pick';
          chips.appendChild(b);
        });
        chips.classList.add('on');
        timer = setTimeout(function(){
          if(s.pick) add('user', s.pick);
          timer = setTimeout(next, reduced ? 0 : 600);
        }, reduced ? 0 : 1000);
      } else next();
    }
    next();
  }

  tabs.querySelectorAll('button[data-flow]').forEach(function(btn){
    btn.addEventListener('click', function(){
      tabs.querySelectorAll('button').forEach(function(b){ b.classList.remove('is-active'); });
      btn.classList.add('is-active');
      run(btn.getAttribute('data-flow'));
    });
  });

  // ROI Calculator
  var roiSlider = document.getElementById('edu-roi-slider');
  var roiValLabel = document.getElementById('edu-roi-val');
  var roiExtraAdm = document.getElementById('edu-roi-extra');
  var roiHoursSaved = document.getElementById('edu-roi-hours');
  var roiRevIncrease = document.getElementById('edu-roi-rev');

  if (roiSlider) {
    function updateRoi() {
      var val = parseInt(roiSlider.value, 10);
      if (roiValLabel) roiValLabel.textContent = val.toLocaleString() + ' / mo';
      
      // Calculations: 43% boost on admissions
      var extraAdmissions = Math.round(val * 0.43);
      var hoursSaved = Math.round(val * 0.25);
      var estRevLakhs = (extraAdmissions * 0.75).toFixed(1);

      if (roiExtraAdm) roiExtraAdm.textContent = '+' + extraAdmissions + ' Students';
      if (roiHoursSaved) roiHoursSaved.textContent = hoursSaved + ' Hrs/Mo';
      if (roiRevIncrease) roiRevIncrease.textContent = '₹' + estRevLakhs + ' Lakhs';
    }

    roiSlider.addEventListener('input', updateRoi);
    updateRoi();
  }

  // CRM Filter buttons
  var filterBtns = document.querySelectorAll('.edu-crm-filter-btns button');
  filterBtns.forEach(function(btn) {
    btn.addEventListener('click', function() {
      filterBtns.forEach(function(b) { b.classList.remove('active'); });
      this.classList.add('active');
    });
  });

  run('admission');
})();
