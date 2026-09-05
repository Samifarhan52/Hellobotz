(function(){
  var body=document.getElementById('ecom-wa-body'),typing=document.getElementById('ecom-typing');
  var tabs=document.querySelectorAll('#ecom-tabs button');
  if(!body)return;
  var flows={
    shop:[{t:'user',m:'Hi, I am looking for running shoes.'},{t:'bot',m:'Sure! <svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M4 17l6-6 4 4 6-6"/></svg> Preferred budget?'},{t:'bot',m:'Under ₹2,000 · ₹2,000–₹5,000 · ₹5,000+'},{t:'user',m:'₹2,000–₹5,000'},{t:'bot',m:'Great! Running Shoes — ₹2,999\nView Product · Add to Cart'}],
    recommend:[{t:'user',m:'Which product is best for me?'},{t:'bot',m:'Based on your needs, try these options:'},{t:'bot',m:'1) Running Shoes ₹2,999\n2) Everyday Bag\n3) Smart Watch\n(Demo products)'}],
    cart:[{t:'bot',m:'Hi Rahul  You left something in your cart.'},{t:'bot',m:'Your selected product is still waiting.'},{t:'bot',m:'<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Cart recovery message sent\n[Complete Order]'}],
    order:[{t:'bot',m:'Thank you for your order, Rahul! <svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><polygon points="12 2 15.09 8.26 22 9.27 17 14.14 18.18 21.02 12 17.77 5.82 21.02 7 14.14 2 9.27 8.91 8.26 12 2"/></svg>'},{t:'bot',m:'Order #HB1024 confirmed\nPremium Running Shoes · ₹2,999'},{t:'bot',m:'[Track Order]'}],
    track:[{t:'bot',m:'<svg class="hb-svg-icon" width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><line x1="16.5" y1="9.4" x2="7.5" y2="4.21"/><path d="M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z"/><polyline points="3.27 6.96 12 12.01 20.73 6.96"/><line x1="12" y1="22.08" x2="12" y2="12"/></svg> Order #HB1024 is out for delivery.'},{t:'bot',m:'Confirmed → Packed → Shipped → Out for Delivery'},{t:'bot',m:'[Track Order]'}],
    support:[{t:'user',m:'I want to exchange my product.'},{t:'bot',m:'Sure. What would you like help with?'},{t:'bot',m:'Exchange · Return · Order Status · Talk to Support'},{t:'bot',m:'<svg class="hb-check-icon" width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="#00c853" stroke-width="2.5" stroke-linecap="round" stroke-linejoin="round"><polyline points="20 6 9 17 4 12"/></svg> Request created'}],
    repeat:[{t:'bot',m:'Hi Rahul  Hope you are enjoying your purchase!'},{t:'bot',m:'Looking for something new? Here are products you may like.'},{t:'bot',m:'(Personalized recommendations — demo)'}]
  };
  var timer=null;
  function clear(){body.querySelectorAll('.ecom-msg').forEach(function(e){e.remove()});typing.classList.remove('on')}
  function add(m,t){var el=document.createElement('div');el.className='ecom-msg '+t;el.textContent=m;body.insertBefore(el,typing);requestAnimationFrame(function(){el.classList.add('show')})}
  function run(n){if(timer)clearTimeout(timer);clear();var s=flows[n]||flows.shop,i=0;function next(){if(i>=s.length)return;var x=s[i++];typing.classList.add('on');timer=setTimeout(function(){typing.classList.remove('on');add(x.m,x.t);timer=setTimeout(next,700)},x.t==='bot'?500:350)}next()}
  tabs.forEach(function(b){b.addEventListener('click',function(){tabs.forEach(function(x){x.classList.remove('is-active')});b.classList.add('is-active');run(b.getAttribute('data-flow'))})});
  run('shop');
})();
