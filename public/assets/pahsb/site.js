document.addEventListener('DOMContentLoaded',()=>{const b=document.getElementById('navToggle'),n=document.getElementById('mainNav');if(b&&n)b.addEventListener('click',()=>{const opened=n.classList.toggle('open');b.setAttribute('aria-expanded',opened?'true':'false')});});


/* PAHSB PHASE 2.3 | Progressive enhancement (no external dependencies) */
(() => {
  const init = () => {
    const header = document.querySelector('.header');
    const nav = document.getElementById('mainNav');
    const menu = document.getElementById('navToggle');
    const syncHeader = () => header?.classList.toggle('scrolled', window.scrollY > 16);
    syncHeader();
    window.addEventListener('scroll', syncHeader, {passive: true});
    const closeMenu = () => {
      if (!nav || !menu) return;
      nav.classList.remove('open');
      menu.setAttribute('aria-expanded', 'false');
    };
    document.addEventListener('keydown', event => {
      if (event.key === 'Escape') closeMenu();
    });
    document.addEventListener('click', event => {
      if (nav && menu && nav.classList.contains('open') &&
          !nav.contains(event.target) && !menu.contains(event.target)) closeMenu();
    });
    nav?.querySelectorAll('a').forEach(link => link.addEventListener('click', closeMenu));
    const current = location.pathname.replace(/\/$/, '') || '/';
    nav?.querySelectorAll('a[href]').forEach(link => {
      try {
        const target = new URL(link.href);
        if ((target.pathname.replace(/\/$/, '') || '/') === current) link.setAttribute('aria-current', 'page');
      } catch (_) {}
    });
    const revealTargets = document.querySelectorAll('.section .intro, .section .sectionHead, .section .featureCard, .pagePhoto');
    if ('IntersectionObserver' in window && !matchMedia('(prefers-reduced-motion: reduce)').matches) {
      const observer = new IntersectionObserver(entries => {
        entries.forEach(entry => {
          if (!entry.isIntersecting) return;
          entry.target.animate([{opacity:0.45, transform:'translateY(17px)'},{opacity:1, transform:'translateY(0)'}],
            {duration:650, easing:'cubic-bezier(.2,.65,.2,1)', fill:'both'});
          observer.unobserve(entry.target);
        });
      }, {threshold:0.09});
      revealTargets.forEach(el => observer.observe(el));
    }
  };
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init, {once:true});
  else init();
})();
