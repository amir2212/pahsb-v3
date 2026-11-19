(() => {
  const main=document.getElementById('pahsb-projects');
  if(!main)return;
  const tabs=[...main.querySelectorAll('[data-p4-status]')];
  const cards=[...main.querySelectorAll('.p4-card')];
  const input=document.getElementById('p4-search');
  const grid=document.getElementById('p4-grid');
  const empty=document.getElementById('p4-empty');
  const statusEmpty=document.getElementById('p4-status-empty');
  const filterNote=document.getElementById('p4-filter-note');
  const count=document.getElementById('p4-count');
  let status='archive';
  const update=()=>{
    const query=(input.value||'').trim().toLocaleLowerCase();
    const isArchive=status==='archive';
    let visible=0;
    cards.forEach(card=>{const show=isArchive && card.dataset.p4Name.includes(query);card.hidden=!show;if(show)visible++;});
    grid.hidden=!isArchive;empty.hidden=!(isArchive && visible===0);
    statusEmpty.hidden=isArchive;
    count.textContent=isArchive?String(visible):'—';
    filterNote.textContent=isArchive?'Historical portfolio — project statuses have not been independently verified.':'This project status is awaiting PAHSB verification.';
    input.disabled=!isArchive;
    tabs.forEach(tab=>{const active=tab.dataset.p4Status===status;tab.classList.toggle('active',active);tab.setAttribute('aria-pressed',String(active));});
  };
  tabs.forEach(tab=>tab.addEventListener('click',()=>{status=tab.dataset.p4Status;update();}));
  input.addEventListener('input',update);
  const archive=document.getElementById('p4-view-archive');
  archive.addEventListener('click',()=>{status='archive';input.value='';update();});
  update();
  const modal=document.getElementById('p4-modal');
  const title=document.getElementById('p4-modal-title');
  const description=document.getElementById('p4-modal-description');
  const kind=document.getElementById('p4-modal-kind');
  const image=document.getElementById('p4-modal-image');
  let trigger=null;
  const close=()=>{modal.hidden=true;document.body.style.overflow='';if(trigger)trigger.focus();};
  cards.forEach(card=>card.querySelector('[data-p4-open]').addEventListener('click',e=>{
    trigger=e.currentTarget;const d=trigger.dataset;
    title.textContent=d.name;kind.textContent=d.kind+' / Historical archive';description.textContent=d.description;
    image.src=d.image;image.alt=d.name;modal.hidden=false;document.body.style.overflow='hidden';modal.querySelector('.p4-close').focus();
  }));
  modal.querySelectorAll('[data-p4-close]').forEach(el=>el.addEventListener('click',close));
  document.addEventListener('keydown',e=>{if(modal.hidden)return;if(e.key==='Escape')close();if(e.key==='Tab'){
    const btn=modal.querySelector('.p4-close');if(e.shiftKey || document.activeElement!==btn){e.preventDefault();btn.focus();}
  }});
})();
