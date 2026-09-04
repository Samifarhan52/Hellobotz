(function(){
  var flows = {
    admission: [
      {t:'typing',ms:600},
      {t:'user',text:'Hi, I want to know about BBA admission.'},
      {t:'typing',ms:800},
      {t:'bot',text:'Sure! 👋 I can help you with admission.'},
      {t:'bot',text:'Which course interests you?'},
      {t:'chips',opts:['BBA','BCA','B.Com'],pick:'BBA'},
      {t:'user',text:'BBA'},
      {t:'typing',ms:700},
      {t:'bot',text:'Great. Share your city and preferred counselling mode.'},
      {t:'chips',opts:['Online','Campus Visit'],pick:'Campus Visit'},
      {t:'bot',text:'Counselling available — Book Counselling to confirm a slot.'}
    ],
    course: [
      {t:'typing',ms:500},
      {t:'user',text:'Can you share course details?'},
      {t:'typing',ms:700},
      {t:'bot',text:'Here is a quick overview of our programs 📚'},
      {t:'bot',text:'BBA · BCA · B.Com — eligibility, duration and next intake dates can be shared in chat.'},
      {t:'chips',opts:['Eligibility','Fees range','Apply'],pick:'Eligibility'},
      {t:'bot',text:'Eligibility varies by program. A counsellor can confirm based on your marks.'}
    ],
    counselling: [
      {t:'typing',ms:500},
      {t:'bot',text:'Choose your counselling preference'},
      {t:'chips',opts:['Online Counselling','Campus Visit'],pick:'Online Counselling'},
      {t:'user',text:'Online Counselling'},
      {t:'typing',ms:600},
      {t:'bot',text:'Available: Tomorrow 11:00 AM · 4:00 PM'},
      {t:'chips',opts:['11:00 AM','4:00 PM'],pick:'11:00 AM'},
      {t:'bot',text:'Counselling Booked ✓ We will remind you on WhatsApp.'}
    ],
    attendance: [
      {t:'typing',ms:500},
      {t:'bot',text:'Your attendance update is ready.'},
      {t:'bot',text:'Student: Rahul Sharma'},
      {t:'bot',text:'Attendance: 92%'},
      {t:'chips',opts:['View Attendance'],pick:'View Attendance'},
      {t:'bot',text:'Detailed subject-wise attendance can open in your student portal link.'}
    ],
    fee: [
      {t:'typing',ms:500},
      {t:'bot',text:'Fee payment reminder'},
      {t:'bot',text:'Your upcoming fee payment is due. Please complete it to avoid late charges.'},
      {t:'chips',opts:['View Fee Details','Pay Now'],pick:'Pay Now'},
      {t:'bot',text:'Payment link can be shared securely after verification by your accounts team.'}
    ],
    result: [
      {t:'typing',ms:500},
      {t:'bot',text:'Your result has been updated 🎓'},
      {t:'bot',text:'Student: Rahul Sharma'},
      {t:'bot',text:'Semester: 4'},
      {t:'chips',opts:['View Result','Download Result'],pick:'View Result'},
      {t:'bot',text:'Result link is ready in the next message from your institute portal.'}
    ]
  };

  var body = document.getElementById('edu-wa-body');
  var typing = document.getElementById('edu-typing');
  var chips = document.getElementById('edu-chips');
  var tabs = document.getElementById('edu-tabs');
  if(!body || !typing || !tabs) return;

  var timer = null;
  var reduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

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
    if(timer){ clearTimeout(timer); timer = null; }
    clear();
    var steps = flows[name] || flows.admission;
    var i = 0;
    function next(){
      if(i >= steps.length){
        timer = setTimeout(function(){ run(name); }, 3200);
        return;
      }
      var s = steps[i++];
      if(s.t === 'typing'){
        typing.classList.add('on');
        timer = setTimeout(function(){ typing.classList.remove('on'); next(); }, reduced ? 0 : (s.ms||600));
      } else if(s.t === 'user' || s.t === 'bot'){
        add(s.t, s.text);
        timer = setTimeout(next, reduced ? 0 : 650);
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
          timer = setTimeout(next, reduced ? 0 : 500);
        }, reduced ? 0 : 900);
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
  run('admission');
})();
