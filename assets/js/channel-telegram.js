(function(){
  var body=document.getElementById('tg-body'),typing=document.getElementById('tg-typing');
  var tabs=document.querySelectorAll('#tg-tabs button');
  if(!body)return;
  var flows={
    bot:[
      {t:'user',m:'Hi! I want to know more about your service.'},
      {t:'bot',m:' Welcome! How can I help you?'},
      {t:'bot',m:'Products · Pricing · Book Demo'},
      {t:'user',m:'Products'},
      {t:'bot',m:'WhatsApp Automation · CRM · AI Chatbot'},
      {t:'user',m:'I want a demo.'},
      {t:'bot',m:'Book Demo · Talk to Team'},
      {t:'bot',m:'Lead Captured <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Conversation Saved <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Team Notified <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'}
    ],
    lead:[{t:'user',m:'I want a demo.'},{t:'bot',m:"What's your name?"},{t:'user',m:'Rahul'},{t:'bot',m:'Interest: CRM · WhatsApp API · Automation'},{t:'bot',m:'Lead Created <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'}],
    support:[{t:'user',m:'I need help'},{t:'bot',m:'Describe your issue or /support'},{t:'bot',m:'Answer sent · Handover available <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'}],
    notify:[{t:'bot',m:'<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"/><path d="M13.73 21a2 2 0 0 1-3.46 0"/></svg> New Lead notification'},{t:'bot',m:'Order update · Appointment reminder · Team alert'}],
    book:[{t:'user',m:'Book a demo'},{t:'bot',m:'Choose: Today · Tomorrow'},{t:'user',m:'Tomorrow'},{t:'bot',m:'Booking request saved <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'}]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.tg-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='tg-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();var s=flows[n]||flows.bot,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,600)},x.t==='bot'?420:280)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  run('bot');
})();
