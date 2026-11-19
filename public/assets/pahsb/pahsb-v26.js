/* PAHSB V2.6 | non-invasive enhancements; no routing or form changes */
(()=>{'use strict';
  const init=()=>{
    const main=document.querySelector('main')||document.querySelector('[role="main"]');
    if(main){if(!main.id)main.id='v26-main';if(!document.querySelector('.v26-skip')){
      const skip=document.createElement('a');skip.className='v26-skip';skip.href='#'+main.id;skip.textContent='Skip to main content';document.body.prepend(skip);
    }}
    if(!document.querySelector('.v26-backtop')){
      const button=document.createElement('button');button.type='button';button.className='v26-backtop';button.setAttribute('aria-label','Back to top');button.innerHTML='<svg aria-hidden="true" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m6 14 6-6 6 6"/><path d="M12 8v12"/></svg>';
      document.body.append(button);
      const update=()=>button.classList.toggle('is-visible',window.scrollY>520);
      button.addEventListener('click',()=>window.scrollTo({top:0,behavior:window.matchMedia('(prefers-reduced-motion: reduce)').matches?'auto':'smooth'}));
      window.addEventListener('scroll',update,{passive:true});update();
    }
    // Maintain proper expanded state when user navigates via keyboard.
    document.querySelectorAll('.p61-header .p61-dropbtn').forEach(btn=>{
      const group=btn.closest('.p61-dropdown');
      if(!group)return;
      btn.addEventListener('keydown',e=>{
        if(e.key==='ArrowDown'){
          e.preventDefault();if(!group.classList.contains('is-open'))btn.click();group.querySelector('.p61-panel a')?.focus();
        }
      });
    });
  };
  if(document.readyState==='loading')document.addEventListener('DOMContentLoaded',init,{once:true});else init();
})();
