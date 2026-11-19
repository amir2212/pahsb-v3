/* PAHSB V2.1 - isolated progressive enhancement */
(function(){'use strict';
  var root=document.querySelector('.eco21');if(!root)return;
  var slides=Array.prototype.slice.call(root.querySelectorAll('.eco21-hero-photo'));
  var count=root.querySelector('[data-eco21-count]');
  var prev=root.querySelector('[data-eco21-prev]');var next=root.querySelector('[data-eco21-next]');var toggle=root.querySelector('[data-eco21-toggle]');
  var active=0,paused=false,interval=null;var reduced=window.matchMedia&&window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  function show(n){if(!slides.length)return;active=(n+slides.length)%slides.length;slides.forEach(function(el,i){el.classList.toggle('is-active',i===active)});if(count){count.textContent=String(active+1).padStart(2,'0')+' / '+String(slides.length).padStart(2,'0')}}
  function stop(){if(interval){window.clearInterval(interval);interval=null}}
  function start(){stop();if(!paused&&!reduced&&slides.length>1){interval=window.setInterval(function(){show(active+1)},6000)}}
  if(prev)prev.addEventListener('click',function(){show(active-1);start()});
  if(next)next.addEventListener('click',function(){show(active+1);start()});
  if(toggle){toggle.addEventListener('click',function(){paused=!paused;toggle.setAttribute('aria-pressed',String(paused));toggle.setAttribute('aria-label',paused?'Play slideshow':'Pause slideshow');toggle.textContent=paused?'\u25b6':'\u275a\u275a';start()})}
  if(slides.length){show(0);start()}
  document.addEventListener('visibilitychange',function(){if(document.hidden)stop();else start()});
  var reveal=Array.prototype.slice.call(root.querySelectorAll('[data-eco21-reveal]'));
  if('IntersectionObserver' in window&&!reduced){var observer=new IntersectionObserver(function(entries){entries.forEach(function(e){if(e.isIntersecting){e.target.classList.add('is-visible');observer.unobserve(e.target)}})},{threshold:.08});reveal.forEach(function(el){observer.observe(el)});root.classList.add('eco21-ready')}
})();
