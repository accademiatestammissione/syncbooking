/* ============================================================
   SyncBooking Theme — chrome interactions only.
   Header, drawer, footer and lightbox markup are rendered
   server-side by PHP (chrome-partials.php). This script wires
   the behaviour for the sbtw- prefixed markup.
   ============================================================ */
(function () {
  /* header scroll state */
  var hdr = document.getElementById('hdr');
  function onScroll() { if (hdr) hdr.classList.toggle('sbtw-scrolled', window.scrollY > 60); }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  /* mobile drawer */
  var drawerEl = document.getElementById('drawer');
  var burger = document.getElementById('burger');
  var closeD = document.getElementById('closeDrawer');
  if (burger && drawerEl) burger.addEventListener('click', function () { drawerEl.classList.add('sbtw-open'); });
  if (closeD && drawerEl) closeD.addEventListener('click', function () { drawerEl.classList.remove('sbtw-open'); });
  /* collapsible groups inside the drawer (Accommodation, Discover, ...) */
  [].slice.call(document.querySelectorAll('.sbtw-drawer-label')).forEach(function (btn) {
    btn.addEventListener('click', function () {
      this.classList.toggle('sbtw-expanded');
      var sub = this.nextElementSibling;
      if (sub && sub.classList.contains('sbtw-sub-m')) sub.classList.toggle('sbtw-expanded');
    });
  });
  if (drawerEl) [].slice.call(drawerEl.querySelectorAll('a')).forEach(function (a) {
    a.addEventListener('click', function () { drawerEl.classList.remove('sbtw-open'); });
  });

  /* reveal on scroll */
  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) { if (e.isIntersecting) { e.target.classList.add('sbtw-in'); io.unobserve(e.target); } });
  }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });
  [].slice.call(document.querySelectorAll('.sbtw-reveal')).forEach(function (el, i) {
    el.style.transitionDelay = (i % 3) * 90 + 'ms';
    io.observe(el);
  });

  /* media carousel (existing photo becomes a gallery) */
  [].slice.call(document.querySelectorAll('[data-carousel]')).forEach(function (car) {
    var imgs = [].slice.call(car.querySelectorAll('.sbtw-mc-track img'));
    if (imgs.length < 2) return;
    var dotsWrap = car.querySelector('.sbtw-mc-dots');
    var i = 0, timer;
    imgs.forEach(function (im, n) {
      var d = document.createElement('button');
      d.type = 'button';
      d.setAttribute('aria-label', 'Go to photo ' + (n + 1));
      d.addEventListener('click', function (e) { e.stopPropagation(); go(n); restart(); });
      if (dotsWrap) dotsWrap.appendChild(d);
    });
    var dots = dotsWrap ? [].slice.call(dotsWrap.children) : [];
    function go(n) {
      i = (n + imgs.length) % imgs.length;
      imgs.forEach(function (im, k) { im.classList.toggle('sbtw-active', k === i); });
      dots.forEach(function (d, k) { d.classList.toggle('sbtw-active', k === i); });
    }
    function next() { go(i + 1); }
    function prev() { go(i - 1); }
    function restart() { clearInterval(timer); timer = setInterval(next, 5500); }
    var nx = car.querySelector('.sbtw-mc-next'), pv = car.querySelector('.sbtw-mc-prev');
    if (nx) nx.addEventListener('click', function (e) { e.stopPropagation(); next(); restart(); });
    if (pv) pv.addEventListener('click', function (e) { e.stopPropagation(); prev(); restart(); });
    go(0); restart();
  });

  /* lightbox (binds to any img[data-lightbox]) */
  var lb = document.getElementById('lightbox');
  if (lb) {
    var lbImg = lb.querySelector('img');
    var lbCount = lb.querySelector('.sbtw-lx-count');
    var imgs = [].slice.call(document.querySelectorAll('img[data-lightbox]'));
    var idx = 0;
    var albumSrcs = null;
    function show(i) {
      if (albumSrcs) {
        idx = (i + albumSrcs.length) % albumSrcs.length;
        lbImg.src = albumSrcs[idx];
        if (lbCount) lbCount.textContent = (idx + 1) + ' / ' + albumSrcs.length;
        return;
      }
      idx = (i + imgs.length) % imgs.length;
      lbImg.src = imgs[idx].getAttribute('data-full') || imgs[idx].src;
      if (lbCount) lbCount.textContent = (idx + 1) + ' / ' + imgs.length;
    }
    function openAt(i) { albumSrcs = null; show(i); lb.classList.add('sbtw-open'); }
    window.sbtwOpenAlbum = function (srcs, start) { albumSrcs = srcs; show(start || 0); lb.classList.add('sbtw-open'); };
    imgs.forEach(function (im, i) { im.addEventListener('click', function () { openAt(i); }); });
    [].slice.call(document.querySelectorAll('.sbtw-m-allbtn')).forEach(function (btn) {
      btn.addEventListener('click', function () {
        var mosaic = btn.closest('.sbtw-mosaic');
        var first = mosaic ? mosaic.querySelector('img[data-lightbox]') : null;
        openAt(first ? Math.max(0, imgs.indexOf(first)) : 0);
      });
    });
    var closeBtn = lb.querySelector('.sbtw-lx-close');
    var prevBtn = lb.querySelector('.sbtw-lx-prev');
    var nextBtn = lb.querySelector('.sbtw-lx-next');
    if (closeBtn) closeBtn.addEventListener('click', function () { lb.classList.remove('sbtw-open'); });
    if (prevBtn) prevBtn.addEventListener('click', function (e) { e.stopPropagation(); show(idx - 1); });
    if (nextBtn) nextBtn.addEventListener('click', function (e) { e.stopPropagation(); show(idx + 1); });
    lb.addEventListener('click', function (e) {
      if (e.target === lb || (e.target.classList && e.target.classList.contains('sbtw-lx-stage'))) lb.classList.remove('sbtw-open');
    });
    var tx = 0;
    if (lbImg) {
      lbImg.addEventListener('touchstart', function (e) { tx = e.changedTouches[0].clientX; }, { passive: true });
      lbImg.addEventListener('touchend', function (e) {
        var dx = e.changedTouches[0].clientX - tx;
        if (Math.abs(dx) > 45) show(dx < 0 ? idx + 1 : idx - 1);
      }, { passive: true });
    }
    document.addEventListener('keydown', function (e) {
      if (!lb.classList.contains('sbtw-open')) return;
      if (e.key === 'Escape') lb.classList.remove('sbtw-open');
      if (e.key === 'ArrowLeft') show(idx - 1);
      if (e.key === 'ArrowRight') show(idx + 1);
    });
  }
})();
