/* Existing V3.1 JS handles the first (About) dropdown. This handles Contact. */
(()=>{'use strict';
  const nav=document.querySelector('.u372-header');if(!nav)return;
  const dd=nav.querySelector('.u372-contact-dd');const btn=dd?.querySelector('.u372-contact-toggle');
  if(!dd||!btn)return;
  const close=()=>{dd.classList.remove('is-open');btn.setAttribute('aria-expanded','false')};
  const about=nav.querySelector('.u31-dd:not(.u372-contact-dd)');
  btn.addEventListener('click',e=>{
    e.stopPropagation();const opening=!dd.classList.contains('is-open');
    dd.classList.toggle('is-open',opening);btn.setAttribute('aria-expanded',String(opening));
    if(opening&&about){about.classList.remove('is-open');about.querySelector('.u31-dd-toggle')?.setAttribute('aria-expanded','false')}
  });
  document.addEventListener('click',e=>{if(!dd.contains(e.target))close()});
  document.addEventListener('keydown',e=>{if(e.key==='Escape')close()});
  const aboutBtn=about?.querySelector('.u31-dd-toggle');
  aboutBtn?.addEventListener('click',close);
})();
