(function () {
  'use strict';
  const root = document.getElementById('v25-news');
  if (!root) return;
  const dataNode = document.getElementById('v25-story-data');
  let stories = [];
  try { stories = JSON.parse(dataNode ? dataNode.textContent : '[]'); } catch (_) { return; }
  const cards = Array.from(root.querySelectorAll('.v25-story'));
  const filterButtons = Array.from(root.querySelectorAll('[data-v25-filter]'));
  const search = document.getElementById('v25-news-search');
  const count = document.getElementById('v25-story-count');
  const empty = document.getElementById('v25-empty');
  const reset = document.getElementById('v25-reset');
  const dialog = document.getElementById('v25-dialog');
  const panel = dialog && dialog.querySelector('.v25-dialog-panel');
  let activeFilter = 'all';
  let previousFocus = null;
  let previousOverflow = '';
  function update() {
    const term = (search.value || '').trim().toLocaleLowerCase();
    let visible = 0;
    cards.forEach((card) => {
      const match = (activeFilter === 'all' || card.dataset.category === activeFilter)
        && (!term || (card.dataset.search || '').includes(term));
      card.hidden = !match;
      if (match) visible++;
    });
    count.textContent = String(visible);
    empty.hidden = visible !== 0;
    filterButtons.forEach((button) => {
      const chosen = button.dataset.v25Filter === activeFilter;
      button.classList.toggle('is-active', chosen);
      button.setAttribute('aria-pressed', String(chosen));
    });
  }
  filterButtons.forEach((button) => button.addEventListener('click', function () { activeFilter = this.dataset.v25Filter; update(); }));
  search.addEventListener('input', update);
  if (reset) reset.addEventListener('click', function () { activeFilter = 'all'; search.value = ''; update(); search.focus(); });
  function closeDialog() {
    if (!dialog || dialog.hidden) return;
    dialog.hidden = true;
    document.body.style.overflow = previousOverflow;
    if (previousFocus && previousFocus.isConnected) previousFocus.focus();
  }
  function openDialog(id) {
    const story = stories.find((item) => item.id === id);
    if (!story || !dialog) return;
    previousFocus = document.activeElement;
    previousOverflow = document.body.style.overflow;
    document.getElementById('v25-dialog-title').textContent = story.title;
    document.getElementById('v25-dialog-desc').textContent = story.summary;
    document.getElementById('v25-dialog-meta').textContent = story.category + '  /  ' + story.date;
    const photo = document.getElementById('v25-dialog-image');
    photo.src = '/assets/pahsb/media/' + encodeURIComponent(story.image);
    photo.alt = 'PAHSB archived photograph: ' + story.title;
    dialog.hidden = false;
    document.body.style.overflow = 'hidden';
    dialog.querySelector('.v25-dialog-close').focus();
  }
  root.querySelectorAll('[data-v25-story]').forEach((button) => button.addEventListener('click', function () { openDialog(this.dataset.v25Story); }));
  dialog.querySelectorAll('[data-v25-close]').forEach((node) => node.addEventListener('click', closeDialog));
  document.addEventListener('keydown', function (event) {
    if (dialog.hidden) return;
    if (event.key === 'Escape') { event.preventDefault(); closeDialog(); }
    if (event.key === 'Tab') {
      const focusable = Array.from(panel.querySelectorAll('button, a[href], [tabindex]:not([tabindex="-1"])')).filter((n) => !n.disabled);
      if (!focusable.length) return;
      const first = focusable[0], last = focusable[focusable.length - 1];
      if (event.shiftKey && document.activeElement === first) { event.preventDefault(); last.focus(); }
      else if (!event.shiftKey && document.activeElement === last) { event.preventDefault(); first.focus(); }
    }
  });
  update();
})();
