/* ============================================================
   VILLA ROSA RESORT — front-end interactions (PHP theme)
   Header, drawer and footer are rendered server-side by PHP,
   so this file only wires behaviour (no markup injection).
   ============================================================ */
(function(){
  // header scrolled state + scroll-to-top visibility
  var hdr = document.getElementById('hdr');
  var totop = document.getElementById('totop');
  function onScroll(){
    var y = window.scrollY;
    if (hdr)   hdr.classList.toggle('scrolled', y > 60);
    if (totop) totop.classList.toggle('show', y > 600);
  }
  window.addEventListener('scroll', onScroll, {passive:true});
  onScroll();

  // mobile drawer
  var drawer = document.getElementById('drawer');
  var burger = document.getElementById('burger');
  var closeBtn = document.getElementById('closeDrawer');
  if (burger && drawer) burger.addEventListener('click', function(){ drawer.classList.add('open'); });
  if (closeBtn && drawer) closeBtn.addEventListener('click', function(){ drawer.classList.remove('open'); });
  if (drawer) drawer.querySelectorAll('a').forEach(function(a){ a.addEventListener('click', function(){ drawer.classList.remove('open'); }); });

  // scroll to top
  if (totop) totop.addEventListener('click', function(){ window.scrollTo({top:0, behavior:'smooth'}); });

  // reveal on scroll
  var io = new IntersectionObserver(function(entries){
    entries.forEach(function(e){ if(e.isIntersecting){ e.target.classList.add('in'); io.unobserve(e.target); } });
  }, {threshold:0.12, rootMargin:'0px 0px -8% 0px'});
  document.querySelectorAll('.reveal').forEach(function(el,i){
    el.style.transitionDelay = (i % 3) * 90 + 'ms';
    io.observe(el);
  });

  // lightbox (binds to img[data-lightbox])
  var lb = document.getElementById('lightbox');
  if (lb){
    var lbImg = lb.querySelector('img');
    var imgs = [].slice.call(document.querySelectorAll('img[data-lightbox]'));
    var idx = 0;
    function show(i){ idx = (i + imgs.length) % imgs.length; lbImg.src = imgs[idx].getAttribute('data-full') || imgs[idx].src; }
    imgs.forEach(function(im, i){ im.addEventListener('click', function(){ show(i); lb.classList.add('open'); }); });
    lb.querySelector('.lx-close').addEventListener('click', function(){ lb.classList.remove('open'); });
    lb.querySelector('.lx-prev').addEventListener('click', function(e){ e.stopPropagation(); show(idx-1); });
    lb.querySelector('.lx-next').addEventListener('click', function(e){ e.stopPropagation(); show(idx+1); });
    lb.addEventListener('click', function(e){ if(e.target === lb) lb.classList.remove('open'); });
    document.addEventListener('keydown', function(e){
      if(!lb.classList.contains('open')) return;
      if(e.key === 'Escape') lb.classList.remove('open');
      if(e.key === 'ArrowLeft') show(idx-1);
      if(e.key === 'ArrowRight') show(idx+1);
    });
  }

  // demo contact form
  var form = document.getElementById('contactForm');
  if (form){
    form.addEventListener('submit', function(e){
      e.preventDefault();
      var msg = form.querySelector('.form-result');
      if (msg) msg.style.display = 'block';
      form.reset();
    });
  }
})();
