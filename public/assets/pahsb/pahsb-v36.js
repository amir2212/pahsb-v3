/* PAHSB V3.6: progressive enhancement; keeps existing V3 interactive scripts. */
(() => {
  'use strict';
  const init = () => {
    if (!document.body || !document.body.classList.contains('urban31')) return;
    if (!document.getElementById('u36-back-to-top')) {
      const button = document.createElement('button');
      button.type = 'button';
      button.id = 'u36-back-to-top';
      button.className = 'u36-top';
      button.setAttribute('aria-label','Back to top');
      button.setAttribute('title','Back to top');
      button.textContent = '↑';
      document.body.appendChild(button);
      button.addEventListener('click', () => {
        window.scrollTo({top:0,behavior:window.matchMedia('(prefers-reduced-motion: reduce)').matches?'auto':'smooth'});
      });
      let queued = false;
      const update = () => {
        queued = false;
        const visible = window.scrollY > 520;
        button.classList.toggle('is-visible',visible);
        button.tabIndex = visible ? 0 : -1;
        button.setAttribute('aria-hidden',String(!visible));
      };
      window.addEventListener('scroll',() => { if (!queued) {queued=true;requestAnimationFrame(update);} }, {passive:true});
      update();
    }
    // Highlight correct Discover entry on About pages without changing route targets.
    const path = location.pathname.replace(/\/$/,'');
    const aboutLinks = document.querySelectorAll('.u31-dd-panel a');
    aboutLinks.forEach(link => {
      try {
        if (new URL(link.href,location.href).pathname.replace(/\/$/,'') === path) {
          link.setAttribute('aria-current','page');
          const parentToggle = link.closest('.u31-dd')?.querySelector('.u31-dd-toggle');
          if (parentToggle) parentToggle.classList.add('is-current');
        }
      } catch (_err) {}
    });
  };
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded',init,{once:true});
  else init();
})();
