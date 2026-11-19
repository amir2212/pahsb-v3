(() => {
  'use strict';
  const root = document.getElementById('pahsb-news');
  if (!root) return;
  const cards = Array.from(root.querySelectorAll('.p5-card'));
  const tabs = Array.from(root.querySelectorAll('[data-p5-filter]'));
  const search = root.querySelector('#p5-search');
  const count = root.querySelector('#p5-story-count');
  const empty = root.querySelector('#p5-empty');
  let category = 'all';
  const render = () => {
    const q = (search.value || '').trim().toLocaleLowerCase();
    let visible = 0;
    for (const card of cards) {
      const ok = (category === 'all' || card.dataset.p5Category === category) && (card.dataset.p5Search || '').includes(q);
      card.hidden = !ok;
      if (ok) visible++;
    }
    count.textContent = String(visible);
    empty.hidden = visible !== 0;
  };
  for (const tab of tabs) tab.addEventListener('click', () => {
    category = tab.dataset.p5Filter;
    tabs.forEach(t => { t.classList.toggle('is-active',t===tab); t.setAttribute('aria-pressed', String(t===tab)); });
    render();
  });
  search.addEventListener('input', render);
  let records = [];
  try { records = JSON.parse(document.getElementById('p5-news-data').textContent); } catch (_) { return; }
  const modal = document.getElementById('p5-modal');
  const panel = modal.querySelector('.p5-modal-panel');
  let previousFocus = null;
  const close = () => { modal.hidden = true; document.body.classList.remove('p5-modal-lock'); if (previousFocus) previousFocus.focus(); };
  for (const closeBtn of modal.querySelectorAll('[data-p5-close]')) closeBtn.addEventListener('click', close);
  modal.addEventListener('keydown', (e) => {
    if (e.key === 'Escape') { close(); return; }
    if (e.key !== 'Tab') return;
    const focusable = [...modal.querySelectorAll('button:not([disabled]), a[href]')];
    if (!focusable.length) return;
    const first=focusable[0], last=focusable[focusable.length-1];
    if (e.shiftKey && document.activeElement === first) { e.preventDefault(); last.focus(); }
    else if (!e.shiftKey && document.activeElement === last) { e.preventDefault(); first.focus(); }
  });
  for (const openBtn of root.querySelectorAll('[data-p5-open]')) openBtn.addEventListener('click', () => {
    const item = records.find(r => r.id === openBtn.dataset.p5Open);
    if (!item) return;
    previousFocus = openBtn;
    const photo = modal.querySelector('#p5-modal-photo');
    photo.src = '/assets/pahsb/media/' + encodeURIComponent(item.image);
    photo.alt = item.title;
    modal.querySelector('#p5-modal-meta').textContent = item.category + ' / ' + item.date;
    modal.querySelector('#p5-modal-title').textContent = item.title;
    modal.querySelector('#p5-modal-copy').textContent = item.summary;
    modal.querySelector('#p5-modal-source').href = item.source;
    modal.hidden = false;
    document.body.classList.add('p5-modal-lock');
    modal.querySelector('.p5-modal-x').focus();
  });
})();
