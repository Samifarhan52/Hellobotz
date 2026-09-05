(function(){
  var body=document.getElementById('fb-body'),typing=document.getElementById('fb-typing');
  var tabs=document.querySelectorAll('#fb-tabs button');
  if(!body)return;
  var flows={
    lead:[
      {t:'user',m:'Hi, I want to know the price'},
      {t:'bot',m:'Sure! Here are a few options:'},
      {t:'bot',m:'Plan A · Plan B · Talk to Sales'},
      {t:'user',m:'Plan A'},
      {t:'bot',m:'Great — please share your requirement.'},
      {t:'user',m:'Need demo for my team'},
      {t:'bot',m:'Lead captured <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Team notified <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'}
    ],
    support:[{t:'user',m:'I need help with my account'},{t:'bot',m:'I can help. What is the issue?'},{t:'user',m:'Login problem'},{t:'bot',m:'Connecting you to support… Handoff <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'}],
    product:[{t:'user',m:'Tell me about your product'},{t:'bot',m:'Here is a short overview + next steps.'},{t:'bot',m:'Details · Demo · Pricing'}],
    order:[{t:'user',m:'Where is my order?'},{t:'bot',m:'Share your order ID to check status.'},{t:'user',m:'#DEMO123'},{t:'bot',m:'Status shared · Demo flow <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'}],
    appt:[{t:'user',m:'I want to book an appointment'},{t:'bot',m:'Choose a time: Today · Tomorrow'},{t:'user',m:'Tomorrow'},{t:'bot',m:'Appointment request saved <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'}],
    follow:[{t:'bot',m:'Hi! Following up on your earlier enquiry.'},{t:'bot',m:'Still interested? Book Demo · Talk to Sales'}]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.fb-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='fb-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();var s=flows[n]||flows.lead,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,600)},x.t==='bot'?420:280)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  run('lead');
})();
