/* PAHSB Phase 6.1 — dropdown interaction; preserves existing mobile menu toggle */
(() => {
  const init = () => {
    const header = document.querySelector('.p61-header');
    if (!header) return;
    const menu = header.querySelector('#mainNav');
    const toggle = header.querySelector('#navToggle');
    const groups = [...header.querySelectorAll('.p61-dropdown')];
    const closeDrops = (except) => groups.forEach(g => {
      if (g === except) return;
      g.classList.remove('is-open');
      g.querySelector('.p61-dropbtn')?.setAttribute('aria-expanded', 'false');
    });
    groups.forEach(g => {
      const button = g.querySelector('.p61-dropbtn');
      button?.addEventListener('click', () => {
        const shouldOpen = !g.classList.contains('is-open');
        closeDrops(g);
        g.classList.toggle('is-open', shouldOpen);
        button.setAttribute('aria-expanded', String(shouldOpen));
      });
    });
    const closeMenu = () => {
      menu?.classList.remove('open');
      toggle?.setAttribute('aria-expanded', 'false');
      closeDrops();
    };
    document.addEventListener('click', e => {
      if (!header.contains(e.target)) { closeDrops(); return; }
      if (!e.target.closest('.p61-dropdown')) closeDrops();
    });
    document.addEventListener('keydown', e => { if (e.key === 'Escape') closeMenu(); });
    menu?.querySelectorAll('a').forEach(a => a.addEventListener('click', closeMenu));
    window.addEventListener('resize', () => { if (innerWidth > 900) closeMenu(); }, {passive:true});
  };
  if (document.readyState === 'loading') document.addEventListener('DOMContentLoaded', init, {once:true});
  else init();
})();
