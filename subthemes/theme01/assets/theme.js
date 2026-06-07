/* ============================================================
   VILLA ROSA RESORT - interactions only.
   Header and footer are rendered server-side by PHP partials.
   ============================================================ */
(function () {
  var hdr = document.getElementById('hdr');
  var totopBtn = document.getElementById('totop');

  function onScroll() {
    var y = window.scrollY;
    if (hdr) hdr.classList.toggle('scrolled', y > 60);
    if (totopBtn) totopBtn.classList.toggle('show', y > 600);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  var drawer = document.getElementById('drawer');
  var burger = document.getElementById('burger');
  var closeDrawer = document.getElementById('closeDrawer');
  if (burger && drawer) burger.addEventListener('click', function () { drawer.classList.add('open'); });
  if (closeDrawer && drawer) closeDrawer.addEventListener('click', function () { drawer.classList.remove('open'); });
  if (drawer) {
    drawer.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', function () { drawer.classList.remove('open'); });
    });
  }

  if (totopBtn) {
    totopBtn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  var io = new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' });
  document.querySelectorAll('.reveal').forEach(function (el, index) {
    el.style.transitionDelay = (index % 3) * 90 + 'ms';
    io.observe(el);
  });

  document.querySelectorAll('[data-carousel]').forEach(function (carousel) {
    var slides = [].slice.call(carousel.querySelectorAll('.mc-track > img, .mc-track > .sbt-vfe-image-wrap'));
    if (slides.length < 2) return;

    var dotsWrap = carousel.querySelector('.mc-dots');
    var current = 0;
    var timer;

    slides.forEach(function (_slide, index) {
      if (!dotsWrap) return;
      var dot = document.createElement('button');
      dot.type = 'button';
      dot.setAttribute('aria-label', 'Go to photo ' + (index + 1));
      dot.addEventListener('click', function (event) {
        event.stopPropagation();
        go(index);
        restart();
      });
      dotsWrap.appendChild(dot);
    });

    var dots = dotsWrap ? [].slice.call(dotsWrap.children) : [];
    function go(index) {
      current = (index + slides.length) % slides.length;
      slides.forEach(function (slide, slideIndex) {
        slide.classList.toggle('active', slideIndex === current);
        var img = slide.matches('img') ? slide : slide.querySelector('img');
        if (img) img.classList.toggle('active', slideIndex === current);
      });
      dots.forEach(function (dot, dotIndex) {
        dot.classList.toggle('active', dotIndex === current);
      });
    }
    function next() { go(current + 1); }
    function prev() { go(current - 1); }
    function restart() {
      clearInterval(timer);
      timer = setInterval(next, 5500);
    }

    var nextButton = carousel.querySelector('.mc-next');
    var prevButton = carousel.querySelector('.mc-prev');
    if (nextButton) nextButton.addEventListener('click', function (event) { event.stopPropagation(); next(); restart(); });
    if (prevButton) prevButton.addEventListener('click', function (event) { event.stopPropagation(); prev(); restart(); });
    go(0);
    restart();
  });

  var lb = document.getElementById('lightbox');
  if (lb) {
    var lbImg = lb.querySelector('img');
    var lbCount = lb.querySelector('.lx-count');
    var imgs = [].slice.call(document.querySelectorAll('img[data-lightbox]'));
    var idx = 0;

    function show(index) {
      if (!imgs.length) return;
      idx = (index + imgs.length) % imgs.length;
      lbImg.src = imgs[idx].getAttribute('data-full') || imgs[idx].src;
      if (lbCount) lbCount.textContent = (idx + 1) + ' / ' + imgs.length;
    }
    function openAt(index) {
      show(index);
      lb.classList.add('open');
    }

    imgs.forEach(function (img, index) {
      img.addEventListener('click', function () { openAt(index); });
    });
    document.querySelectorAll('.m-allbtn').forEach(function (button) {
      button.addEventListener('click', function () {
        var mosaic = button.closest('.mosaic');
        var first = mosaic ? mosaic.querySelector('img[data-lightbox]') : null;
        openAt(Math.max(0, imgs.indexOf(first)));
      });
    });

    lb.querySelector('.lx-close').addEventListener('click', function () { lb.classList.remove('open'); });
    lb.querySelector('.lx-prev').addEventListener('click', function (event) { event.stopPropagation(); show(idx - 1); });
    lb.querySelector('.lx-next').addEventListener('click', function (event) { event.stopPropagation(); show(idx + 1); });
    lb.addEventListener('click', function (event) {
      if (event.target === lb || event.target.classList.contains('lx-stage')) lb.classList.remove('open');
    });

    var touchX = 0;
    lbImg.addEventListener('touchstart', function (event) { touchX = event.changedTouches[0].clientX; }, { passive: true });
    lbImg.addEventListener('touchend', function (event) {
      var delta = event.changedTouches[0].clientX - touchX;
      if (Math.abs(delta) > 45) show(delta < 0 ? idx + 1 : idx - 1);
    }, { passive: true });

    document.addEventListener('keydown', function (event) {
      if (!lb.classList.contains('open')) return;
      if (event.key === 'Escape') lb.classList.remove('open');
      if (event.key === 'ArrowLeft') show(idx - 1);
      if (event.key === 'ArrowRight') show(idx + 1);
    });
  }

  var form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      var result = form.querySelector('.form-result');
      if (result) result.style.display = 'block';
      form.reset();
    });
  }
})();
