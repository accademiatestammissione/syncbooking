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

  // media carousel
  document.querySelectorAll('[data-carousel]').forEach(function(car){
    var imgs = [].slice.call(car.querySelectorAll('.mc-track img'));
    if (!imgs.length) return;

    var dotsWrap = car.querySelector('.mc-dots');
    var idx = 0;
    var timer;

    imgs.forEach(function(img, n){
      if (!dotsWrap || imgs.length < 2) return;
      var dot = document.createElement('button');
      dot.type = 'button';
      dot.setAttribute('aria-label', 'Go to photo ' + (n + 1));
      dot.addEventListener('click', function(e){
        e.stopPropagation();
        go(n);
        restart();
      });
      dotsWrap.appendChild(dot);
    });

    var dots = dotsWrap ? [].slice.call(dotsWrap.children) : [];
    function go(n){
      idx = (n + imgs.length) % imgs.length;
      imgs.forEach(function(img, k){ img.classList.toggle('active', k === idx); });
      dots.forEach(function(dot, k){ dot.classList.toggle('active', k === idx); });
    }
    function next(){ go(idx + 1); }
    function prev(){ go(idx - 1); }
    function restart(){
      clearInterval(timer);
      if (imgs.length > 1) timer = setInterval(next, 5500);
    }

    var nextBtn = car.querySelector('.mc-next');
    var prevBtn = car.querySelector('.mc-prev');
    if (nextBtn) nextBtn.addEventListener('click', function(e){ e.stopPropagation(); next(); restart(); });
    if (prevBtn) prevBtn.addEventListener('click', function(e){ e.stopPropagation(); prev(); restart(); });
    go(0);
    restart();
  });

  // lightbox (binds to img[data-lightbox])
  var lb = document.getElementById('lightbox');
  if (lb){
    var lbImg = lb.querySelector('img');
    var lbCount = lb.querySelector('.lx-count');
    var imgs = [].slice.call(document.querySelectorAll('img[data-lightbox]'));
    var idx = 0;
    function show(i){
      idx = (i + imgs.length) % imgs.length;
      lbImg.src = imgs[idx].getAttribute('data-full') || imgs[idx].src;
      if(lbCount) lbCount.textContent = (idx+1) + ' / ' + imgs.length;
    }
    function openAt(i){ show(i); lb.classList.add('open'); }
    imgs.forEach(function(im, i){ im.addEventListener('click', function(){ openAt(i); }); });
    document.querySelectorAll('.m-allbtn').forEach(function(btn){
      btn.addEventListener('click', function(){
        var first = btn.closest('.mosaic').querySelector('img[data-lightbox]');
        openAt(Math.max(0, imgs.indexOf(first)));
      });
    });
    lb.querySelector('.lx-close').addEventListener('click', function(){ lb.classList.remove('open'); });
    lb.querySelector('.lx-prev').addEventListener('click', function(e){ e.stopPropagation(); show(idx-1); });
    lb.querySelector('.lx-next').addEventListener('click', function(e){ e.stopPropagation(); show(idx+1); });
    lb.addEventListener('click', function(e){ if(e.target === lb || e.target.classList.contains('lx-stage')) lb.classList.remove('open'); });
    var tx = 0;
    lbImg.addEventListener('touchstart', function(e){ tx = e.changedTouches[0].clientX; }, {passive:true});
    lbImg.addEventListener('touchend', function(e){
      var dx = e.changedTouches[0].clientX - tx;
      if(Math.abs(dx) > 45) show(dx < 0 ? idx+1 : idx-1);
    }, {passive:true});
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
