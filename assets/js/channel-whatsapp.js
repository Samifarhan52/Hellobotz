(function(){
  var body=document.getElementById('cw-wa-body'),typing=document.getElementById('cw-typing');
  if(!body)return;
  var seq=[
    {t:'user',m:'Hi, I want to know about your product.'},
    {t:'bot',m:' Sure! How can we help you today?'},
    {t:'bot',m:'Product Details · Book Demo · Talk to Sales'},
    {t:'user',m:'Book Demo'},
    {t:'bot',m:'Great! Please share your name.'},
    {t:'user',m:'Rahul Sharma'},
    {t:'bot',m:'Thanks Rahul! Your request has been received. <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'},
    {t:'bot',m:'Lead Created <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Team Notified <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> · Follow-up Ready <svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg>'}
  ];
  var i=0,timer=null;
  function add(m,t){var el=document.createElement('div');el.className='cw-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function next(){
    if(i>=seq.length)return;
    var x=seq[i++];
    typing.classList.add('on');
    timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,650)},x.t==='bot'?450:300);
  }
  next();
})();
