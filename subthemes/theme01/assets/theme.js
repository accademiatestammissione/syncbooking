/* SyncBooking Hospitality frontend interactions. */
(function () {
  var hdr = document.getElementById('hdr');
  var totopBtn = document.getElementById('totop');

  function toggleClass(el, className, active) {
    if (el) el.classList.toggle(className, active);
  }

  function onScroll() {
    var y = window.scrollY;
    toggleClass(hdr, 'scrolled', y > 60);
    toggleClass(hdr, 'sbtw-scrolled', y > 60);
    toggleClass(totopBtn, 'show', y > 600);
    toggleClass(totopBtn, 'sbtw-show', y > 600);
  }
  window.addEventListener('scroll', onScroll, { passive: true });
  onScroll();

  var drawer = document.getElementById('drawer');
  var burger = document.getElementById('burger');
  var closeDrawer = document.getElementById('closeDrawer');
  function openDrawer() {
    toggleClass(drawer, 'open', true);
    toggleClass(drawer, 'sbtw-open', true);
  }
  function closeDrawerPanel() {
    toggleClass(drawer, 'open', false);
    toggleClass(drawer, 'sbtw-open', false);
  }
  if (burger && drawer) burger.addEventListener('click', openDrawer);
  if (closeDrawer && drawer) closeDrawer.addEventListener('click', closeDrawerPanel);
  if (drawer) {
    drawer.querySelectorAll('a').forEach(function (link) {
      link.addEventListener('click', closeDrawerPanel);
    });
  }

  if (totopBtn) {
    totopBtn.addEventListener('click', function () {
      window.scrollTo({ top: 0, behavior: 'smooth' });
    });
  }

  var io = 'IntersectionObserver' in window ? new IntersectionObserver(function (entries) {
    entries.forEach(function (entry) {
      if (entry.isIntersecting) {
        entry.target.classList.add('in');
        entry.target.classList.add('sbtw-in');
        io.unobserve(entry.target);
      }
    });
  }, { threshold: 0.12, rootMargin: '0px 0px -8% 0px' }) : null;

  document.querySelectorAll('.reveal, .sbtw-reveal').forEach(function (el, index) {
    el.style.transitionDelay = (index % 3) * 90 + 'ms';
    if (io) {
      io.observe(el);
    } else {
      el.classList.add('in', 'sbtw-in');
    }
  });

  document.querySelectorAll('[data-carousel]').forEach(function (carousel) {
    var track = carousel.querySelector('.sbtw-mc-track, .mc-track');
    if (!track) return;

    var slides = [].slice.call(track.children).filter(function (child) {
      return child.matches('img, .sbt-vfe-image-wrap');
    });
    if (slides.length < 2) return;

    var dotsWrap = carousel.querySelector('.sbtw-mc-dots, .mc-dots');
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
    function setActive(el, active) {
      el.classList.toggle('active', active);
      el.classList.toggle('sbtw-active', active);
    }
    function go(index) {
      current = (index + slides.length) % slides.length;
      slides.forEach(function (slide, slideIndex) {
        var active = slideIndex === current;
        setActive(slide, active);
        var img = slide.matches('img') ? slide : slide.querySelector('img');
        if (img) setActive(img, active);
      });
      dots.forEach(function (dot, dotIndex) {
        setActive(dot, dotIndex === current);
      });
    }
    function next() { go(current + 1); }
    function prev() { go(current - 1); }
    function restart() {
      clearInterval(timer);
      timer = setInterval(next, 5500);
    }

    var nextButton = carousel.querySelector('.sbtw-mc-next, .mc-next');
    var prevButton = carousel.querySelector('.sbtw-mc-prev, .mc-prev');
    if (nextButton) nextButton.addEventListener('click', function (event) { event.stopPropagation(); next(); restart(); });
    if (prevButton) prevButton.addEventListener('click', function (event) { event.stopPropagation(); prev(); restart(); });
    go(0);
    restart();
  });

  var lb = document.getElementById('lightbox');
  if (lb) {
    var lbImg = lb.querySelector('img');
    var lbCount = lb.querySelector('.sbtw-lx-count, .lx-count');
    var imgs = [].slice.call(document.querySelectorAll('img[data-lightbox]'));
    var idx = 0;

    function show(index) {
      if (!imgs.length || !lbImg) return;
      idx = (index + imgs.length) % imgs.length;
      lbImg.src = imgs[idx].getAttribute('data-full') || imgs[idx].src;
      if (lbCount) lbCount.textContent = (idx + 1) + ' / ' + imgs.length;
    }
    function openAt(index) {
      show(index);
      lb.classList.add('open', 'sbtw-open');
    }
    function closeLightbox() {
      lb.classList.remove('open', 'sbtw-open');
    }

    imgs.forEach(function (img, index) {
      img.addEventListener('click', function () { openAt(index); });
    });
    document.querySelectorAll('.sbtw-m-allbtn, .m-allbtn').forEach(function (button) {
      button.addEventListener('click', function () {
        var mosaic = button.closest('.sbtw-mosaic, .mosaic, .sbtw-gallery, .gallery');
        var first = mosaic ? mosaic.querySelector('img[data-lightbox]') : null;
        openAt(Math.max(0, imgs.indexOf(first)));
      });
    });

    var closeButton = lb.querySelector('.sbtw-lx-close, .lx-close');
    var prevButton = lb.querySelector('.sbtw-lx-prev, .lx-prev');
    var nextButton = lb.querySelector('.sbtw-lx-next, .lx-next');
    if (closeButton) closeButton.addEventListener('click', closeLightbox);
    if (prevButton) prevButton.addEventListener('click', function (event) { event.stopPropagation(); show(idx - 1); });
    if (nextButton) nextButton.addEventListener('click', function (event) { event.stopPropagation(); show(idx + 1); });
    lb.addEventListener('click', function (event) {
      if (event.target === lb || event.target.classList.contains('lx-stage') || event.target.classList.contains('sbtw-lx-stage')) closeLightbox();
    });

    var touchX = 0;
    if (lbImg) {
      lbImg.addEventListener('touchstart', function (event) { touchX = event.changedTouches[0].clientX; }, { passive: true });
      lbImg.addEventListener('touchend', function (event) {
        var delta = event.changedTouches[0].clientX - touchX;
        if (Math.abs(delta) > 45) show(delta < 0 ? idx + 1 : idx - 1);
      }, { passive: true });
    }

    document.addEventListener('keydown', function (event) {
      if (!lb.classList.contains('open') && !lb.classList.contains('sbtw-open')) return;
      if (event.key === 'Escape') closeLightbox();
      if (event.key === 'ArrowLeft') show(idx - 1);
      if (event.key === 'ArrowRight') show(idx + 1);
    });
  }

  var form = document.getElementById('contactForm');
  if (form) {
    form.addEventListener('submit', function (event) {
      event.preventDefault();
      var result = form.querySelector('.form-result, .sbtw-form-result');
      if (result) result.style.display = 'block';
      form.reset();
    });
  }
})();
