(() => {
  'use strict';
  const root = document.querySelector('#eco24-main');
  if (!root) return;
  const cards = [...root.querySelectorAll('[data-eco24-card]')];
  const filters = [...root.querySelectorAll('[data-eco24-filter]')];
  const search = root.querySelector('[data-eco24-search]');
  const count = root.querySelector('[data-eco24-count]');
  const result = root.querySelector('[data-eco24-results]');
  const empty = root.querySelector('[data-eco24-empty]');
  const reset = root.querySelector('[data-eco24-reset]');
  let category = 'all';
  const render = () => {
    const query = (search?.value || '').trim().toLocaleLowerCase();
    let visible = 0;
    for (const card of cards) {
      const matches = (category === 'all' || card.dataset.eco24Category === category) && (card.dataset.eco24Searchtext || '').includes(query);
      card.hidden = !matches;
      if (matches) visible++;
    }
    count.textContent = String(visible);
    result.textContent = `Showing ${visible} of ${cards.length} archive entries`;
    empty.hidden = visible !== 0;
  };
  filters.forEach(button => button.addEventListener('click', () => {
    category = button.dataset.eco24Filter;
    filters.forEach(item => { const active = item === button; item.classList.toggle('is-active', active); item.setAttribute('aria-pressed', String(active)); });
    render();
  }));
  search?.addEventListener('input', render);
  reset?.addEventListener('click', () => { search.value = ''; filters[0].click(); search.focus(); });
  const modal = root.querySelector('[data-eco24-modal]');
  const dialog = root.querySelector('.eco24-modal-dialog');
  const image = root.querySelector('[data-eco24-modal-image]');
  const title = root.querySelector('[data-eco24-modal-title]');
  const type = root.querySelector('[data-eco24-modal-type]');
  const description = root.querySelector('[data-eco24-modal-description]');
  let lastFocus = null;
  const close = () => { if (modal.hidden) return; modal.hidden = true; modal.setAttribute('aria-hidden', 'true'); document.body.style.overflow = ''; lastFocus?.focus(); };
  root.querySelectorAll('[data-eco24-open]').forEach(button => button.addEventListener('click', () => {
    lastFocus = button;
    image.src = button.dataset.eco24Image;
    image.alt = `${button.dataset.eco24Title} archival project photograph`;
    title.textContent = button.dataset.eco24Title;
    type.textContent = `${button.dataset.eco24Type} / ARCHIVE`;
    description.textContent = button.dataset.eco24Description;
    modal.hidden = false; modal.setAttribute('aria-hidden', 'false'); document.body.style.overflow = 'hidden';
    dialog.focus();
  }));
  root.querySelectorAll('[data-eco24-dismiss]').forEach(button => button.addEventListener('click', close));
  document.addEventListener('keydown', e => {
    if (modal.hidden) return;
    if (e.key === 'Escape') { e.preventDefault(); close(); }
    if (e.key === 'Tab') {
      const focusable = [...dialog.querySelectorAll('button:not([disabled]),a[href],input:not([disabled])')].filter(el => el.getClientRects().length);
      if (!focusable.length) { e.preventDefault(); dialog.focus(); return; }
      const first = focusable[0], last = focusable[focusable.length-1];
      if (e.shiftKey && (document.activeElement === first || document.activeElement === dialog)) { e.preventDefault(); last.focus(); }
      else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
    }
  });
  const motion = window.matchMedia && !window.matchMedia('(prefers-reduced-motion: reduce)').matches;
  if (motion && 'IntersectionObserver' in window) {
    const items = [...root.querySelectorAll('.eco24-reveal')];
    root.classList.add('eco24-motion');
    const observer = new IntersectionObserver(entries => entries.forEach(entry => { if (entry.isIntersecting) { entry.target.classList.add('eco24-visible'); observer.unobserve(entry.target); } }), {threshold:.08});
    items.forEach(item => observer.observe(item));
  }
  render();
})();
