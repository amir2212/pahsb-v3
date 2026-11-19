(() => {
  const root = document.querySelector('.t34');
  if (!root) return;
  const viewer = document.getElementById('t34-lightbox');
  const viewerImage = document.getElementById('t34-lightbox-image');
  const viewerTitle = document.getElementById('t34-lightbox-title');
  const viewerDescription = document.getElementById('t34-lightbox-description');
  let lastFocus = null;
  const close = () => {
    viewer.hidden = true;
    viewer.setAttribute('aria-hidden', 'true');
    viewerImage.removeAttribute('src');
    document.body.style.overflow = '';
    if (lastFocus) lastFocus.focus();
  };
  root.querySelectorAll('[data-t34-image]').forEach(button => {
    button.addEventListener('click', () => {
      lastFocus = button;
      viewerImage.src = button.dataset.t34Image;
      viewerImage.alt = button.dataset.t34Title || '';
      viewerTitle.textContent = button.dataset.t34Title || '';
      viewerDescription.textContent = button.dataset.t34Description || '';
      viewer.hidden = false;
      viewer.setAttribute('aria-hidden', 'false');
      document.body.style.overflow = 'hidden';
      viewer.querySelector('.t34-lightbox-close').focus();
    });
  });
  viewer.querySelectorAll('[data-t34-close]').forEach(button => button.addEventListener('click', close));
  document.addEventListener('keydown', event => {
    if (viewer.hidden) return;
    if (event.key === 'Escape') close();
    if (event.key === 'Tab') {
      event.preventDefault();
      viewer.querySelector('.t34-lightbox-close').focus();
    }
  });
  const reveal = root.querySelectorAll('[data-t34-reveal]');
  if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
    const observer = new IntersectionObserver(entries => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          entry.target.classList.add('t34-visible');
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: .08 });
    reveal.forEach(el => observer.observe(el));
    root.classList.add('t34-ready');
  }
})();
