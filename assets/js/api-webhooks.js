(function(){
  var codes={
    curl:'curl -X POST https://api.example.com/v1/messages \\\n  -H "Authorization: Bearer YOUR_TOKEN" \\\n  -H "Content-Type: application/json" \\\n  -d \'{"to":"...","template":"..."}\'\n# Demo structure only',
    js:'fetch("https://api.example.com/v1/messages", {\n  method: "POST",\n  headers: { Authorization: "Bearer YOUR_TOKEN" },\n  body: JSON.stringify({ to: "...", template: "..." })\n});\n// Demo structure only',
    php:'$ch = curl_init("https://api.example.com/v1/messages");\n// Demo structure only — use official docs',
    py:'import requests\nrequests.post("https://api.example.com/v1/messages", headers={...})\n# Demo structure only'
  };
  var block=document.getElementById('api-code-block');
  document.querySelectorAll('#api-code-tabs button').forEach(function(b){
    b.addEventListener('click',function(){
      document.querySelectorAll('#api-code-tabs button').forEach(function(x){x.classList.remove('is-active')});
      b.classList.add('is-active');
      var lang=b.getAttribute('data-lang');
      if(block)block.innerHTML='<code>'+ (codes[lang]||codes.curl).replace(/</g,'&lt;') +'</code>';
    });
  });
  var out=document.getElementById('api-test-out');
  var btn=document.getElementById('api-test');
  if(btn&&out){
    var steps=['Request Sent…','Authenticated…','Request Processed…','WhatsApp Message Triggered…','Response Received ✓ · 200 OK (Demo)'];
    btn.addEventListener('click',function(){
      var i=0;out.textContent=steps[0];
      var t=setInterval(function(){i++;if(i>=steps.length){clearInterval(t);return}out.textContent=steps[i]},550);
    });
  }
  var run=document.getElementById('api-run'),rout=document.getElementById('api-run-out');
  if(run&&rout){
    run.addEventListener('click',function(){
      var tr=document.getElementById('api-trigger');
      var ac=document.getElementById('api-action');
      rout.textContent=(tr?tr.value:'Trigger')+' → HelloBotz → '+(ac?ac.value:'Action')+' · Workflow Executed ✓ (Demo)';
    });
  }
})();
