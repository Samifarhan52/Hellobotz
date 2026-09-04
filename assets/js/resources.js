
(function(){
  document.querySelectorAll('.copy-btn').forEach(function(btn){
    btn.addEventListener('click', function(){
      var pre = btn.closest('pre');
      var code = pre ? pre.querySelector('code') : null;
      if(!code) return;
      navigator.clipboard.writeText(code.textContent).then(function(){
        btn.textContent = 'Copied';
        setTimeout(function(){ btn.textContent = 'Copy'; }, 1500);
      });
    });
  });
  document.querySelectorAll('.copy-tpl').forEach(function(btn){
    btn.addEventListener('click', function(){
      navigator.clipboard.writeText(btn.getAttribute('data-tpl')||'').then(function(){
        btn.textContent = 'Copied';
        setTimeout(function(){ btn.textContent = 'Copy Template'; }, 1500);
      });
    });
  });
  document.querySelectorAll('.code-tabs button').forEach(function(btn){
    btn.addEventListener('click', function(){
      var tab = btn.getAttribute('data-tab');
      var root = btn.parentElement.parentElement;
      root.querySelectorAll('.code-tabs button').forEach(function(b){ b.classList.toggle('is-active', b===btn); });
      root.querySelectorAll('[data-tab-panel]').forEach(function(p){
        p.hidden = p.getAttribute('data-tab-panel') !== tab;
      });
    });
  });
  var sf = document.getElementById('support-form-el');
  if(sf){
    sf.addEventListener('submit', function(e){
      e.preventDefault();
      var fd = new FormData(sf);
      var payload = {
        type: 'support',
        name: fd.get('name'),
        email: fd.get('email'),
        phone: fd.get('whatsapp'),
        subject: fd.get('subject'),
        category: fd.get('category'),
        message: fd.get('message'),
        source_page: '/resources/help-center/'
      };
      fetch('/api/lead.php',{method:'POST',headers:{'Content-Type':'application/json'},body:JSON.stringify(payload),credentials:'same-origin'})
        .catch(function(){});
      var st = document.getElementById('support-status');
      if(st){ st.style.display='block'; st.textContent = 'Support request submitted. Our team will respond shortly.'; }
      var msg = '*HelloBotz Support*\n'+payload.subject+'\n'+payload.message+'\nFrom: '+payload.name+' '+payload.phone;
      // optional WA
      sf.reset();
    });
  }
})();
