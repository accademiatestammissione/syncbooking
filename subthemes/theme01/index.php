<?php
$PAGE = 'home';
$PAGE_TITLE = 'Villa Rosa Resort – An Apulia Villa';
require __DIR__ . '/header/header.php';
?>
<!-- ============ HERO ============ -->
<section class="sbtw-hero" id="top" data-screen-label="Hero">
  <div class="sbtw-hero-video">
    <iframe src="https://player.vimeo.com/video/687646681?autoplay=1&controls=0&mute=1&muted=1&loop=1&playlist=687646681&disablekb=1&modestbranding=1&playsinline=1&rel=0&background=1" allow="autoplay; fullscreen" title="Villa Rosa"></iframe>
  </div>
  <div class="sbtw-hero-overlay"></div>
  <div class="sbtw-hero-inner">
    <div class="sbtw-overline">Villa Rosa Resort &amp; SPA · Conversano</div>
    <h1>Your home in the<br/>heart of Puglia</h1>
    <p class="sbtw-sub">An oasis of well-being nestled in a centuries-old park, steps from the Norman-Swabian Castle.</p>
  </div>
  <div class="sbtw-scrolldown"><span>Scroll</span><span class="sbtw-line"></span></div>
</section>

<!-- ============ WELCOME ============ -->
<section class="sbtw-pad" id="welcome" data-screen-label="Welcome">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-reveal">
        <div class="sbtw-overline">Welcome</div>
        <h2 class="sbtw-lead">An eclectic 1930s villa,<br/>reborn as a retreat</h2>
        <p class="sbtw-body-text">Villa Rosa is your oasis of well-being. Nestled in a large park with centuries-old trees, just steps from the ancient Norman-Swabian Castle that characterizes the village of Conversano — one of Puglia's most charming villages — lies a complex of elegant residences, including a historic villa in an eclectic style from the 1930s.</p>
        <p class="sbtw-body-text" style="margin-top:18px;">Every detail is designed for comfort: the privacy of our houses — each with a dining area, fully equipped kitchen, and outdoor pergola — the splendid pool, the gym, and the elegant spa.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'villa.php' ) ); ?>" style="margin-top:30px;">Discover the Villa</a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="Villa Rosa Resort" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-067.jpg' ) ); ?>" alt="Villa Rosa — living" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-001.jpg' ) ); ?>" alt="Villa Rosa — bedroom" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-026.jpg' ) ); ?>" alt="Villa Rosa — the pergola" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-072.jpg' ) ); ?>" alt="Villa Rosa — the park &amp; pool" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
        <div class="sbtw-stamp">Since<br/>1930</div>
      </div>
    </div>
  </div>
</section>

<!-- ============ GALLERY MOSAIC ============ -->
<section class="sbtw-pad-s" data-screen-label="Gallery">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal" style="margin-bottom:40px;">
      <div class="sbtw-overline">A look inside</div>
      <h2>Spaces that tell a story</h2>
    </div>
    <div class="sbtw-mosaic sbtw-reveal">
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="Villa Rosa — the villa" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-072.jpg' ) ); ?>" alt="Villa Rosa — the park" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-026.jpg' ) ); ?>" alt="Villa Rosa — the gardens" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-087.jpg' ) ); ?>" alt="Villa Rosa — the pergola" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>" alt="Villa Rosa — the pool" /></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>Show all photos</button>
    </div>
  </div>
</section>

<!-- ============ HOUSES ============ -->
<section class="sbtw-houses sbtw-pad" id="houses" data-screen-label="Houses">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">The Houses</div>
      <h2>Your private retreat</h2>
      <p>The new luxury in holidays is more freedom: an entire house with an external pergola at your disposal. Refined design, a mix of modern and ancient, and every comfort make the homes of Villa Rosa very exclusive.</p>
    </div>
    <div class="sbtw-house-grid">
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">For 2 people</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-112.jpg' ) ); ?>" alt="House for 2" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-120.jpg' ) ); ?>" alt="House for 2" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-132.jpg' ) ); ?>" alt="House for 2" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>House for 2</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'house-custom.php' ) ); ?>">Discover</a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">For 3 people</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-134.jpg' ) ); ?>" alt="House for 3" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-136.jpg' ) ); ?>" alt="House for 3" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-139.jpg' ) ); ?>" alt="House for 3" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>House for 3</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'house-custom.php' ) ); ?>">Discover</a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">For 4 people</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-147.jpg' ) ); ?>" alt="House for 4" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-153.jpg' ) ); ?>" alt="House for 4" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-167.jpg' ) ); ?>" alt="House for 4" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-177.jpg' ) ); ?>" alt="House for 4" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>House for 4</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'house-custom.php' ) ); ?>">Discover</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if ( ! function_exists( 'sbt_is_entire_rental_mode' ) || sbt_is_entire_rental_mode( 'theme01' ) ) : ?>
<!-- ============ WHOLE VILLA ============ -->
<section class="sbtw-pad" id="whole-villa" data-screen-label="Whole Villa">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>" alt="The whole estate from above" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-085.jpg' ) ); ?>" alt="The villa at dusk" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-087.jpg' ) ); ?>" alt="The pergola" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-081.jpg' ) ); ?>" alt="The private pool" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-overline">Exclusive use</div>
        <h2 class="sbtw-lead">Book<br/>the whole villa</h2>
        <p class="sbtw-body-text">One booking, the entire estate: all the houses, the centuries-old park, the pool and the pergolas — reserved exclusively for you and your guests. The freedom of a private home, with the soul of a 1930s villa.</p>
        <ul class="sbtw-estate-specs">
          <li><span>Guests</span><b>Up to 10</b></li>
          <li><span>Use</span><b>Entire estate, exclusive</b></li>
        </ul>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'entire.php' ) ); ?>" style="margin-top:30px;">Discover the whole villa</a>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>

<!-- ============ SERVICES ============ -->
<section class="sbtw-services sbtw-pad" id="services" data-screen-label="Services">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">Comfort &amp; Care</div>
      <h2>Services</h2>
    </div>
    <div class="sbtw-svc-grid">
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>
        <h4>Pool</h4>
        <p>Enjoy our pool in the green garden, perfect for relaxing and sunbathing.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>
        <h4>Park</h4>
        <p>An oasis of tranquility, ideal for walks and moments of relaxation outdoors.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 3c2.5 3 4 5 4 7a4 4 0 0 1-8 0c0-2 1.5-4 4-7Z"/></svg>
        <h4>SPA</h4>
        <p>Turkish bath, hot tub, sauna and massage room for a unique wellness experience.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>
        <h4>Wi-Fi</h4>
        <p>To be, if you want, always reachable across the whole property.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>
        <h4>Equipped Kitchen</h4>
        <p>Each house has a full kitchen, to prepare your meals in complete independence.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/></svg>
        <h4>BBQ</h4>
        <p>Our BBQ area in the park — the experience of grilling outdoors in style.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg>
        <h4>Car Rental</h4>
        <p>A car rental service, to enjoy every part of Puglia independently.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/></svg>
        <h4>Gym</h4>
        <p>To keep perfectly fit, even on holiday.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ QUOTE BAND ============ -->
<section class="sbtw-band" id="band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-078.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">The Apulian way of living</div>
    <h2>Slow days, long tables,<br/>and the scent of the sea</h2>
    <p>From the whitewashed lanes of Conversano to the trulli of the Itria Valley and the turquoise coast — everything you love about Puglia begins at your doorstep.</p>
  </div>
</section>

<!-- ============ FEATURE ROWS ============ -->
<section class="sbtw-feature sbtw-pad" data-screen-label="SPA & Experience">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col" id="spa">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/jacuzzi.png' ) ); ?>" alt="SPA &amp; Wellness" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/hammam.png' ) ); ?>" alt="SPA — hammam" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/turkish-bath.png' ) ); ?>" alt="SPA — Turkish bath" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/sauna.png' ) ); ?>" alt="SPA — sauna" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/gym.png' ) ); ?>" alt="SPA — gym" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label">Villa Rosa Resort &amp; SPA</div>
        <h3>SPA &amp; Wellness</h3>
        <p class="sbtw-body-text">Awaken your mind and body. Our wellness center offers a hydromassage pool, Turkish bath, Finnish sauna, emotional hydroshower, relax area, gym, massages and a Yoga program.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'spa-wellness.php' ) ); ?>" style="margin-top:28px;">Discover the SPA</a>
      </div>
    </div>
    <div class="sbtw-two-col" id="experience">
      <div class="sbtw-reveal">
        <div class="sbtw-label">Villa Rosa Resort &amp; SPA</div>
        <h3>Apulian Experience</h3>
        <p class="sbtw-body-text">We craft tailor-made experiences for each guest, customized according to individual needs — from cooking classes and wine tastings to private tours of the surrounding wonders.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'experiences.php' ) ); ?>" style="margin-top:28px;">Explore experiences</a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-039.jpg' ) ); ?>" alt="Apulian Experience" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-104.jpg' ) ); ?>" alt="Experience — Apulian breakfast" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-087.jpg' ) ); ?>" alt="Experience — the pergola" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-078.jpg' ) ); ?>" alt="Experience — long table in the park" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/interior-005.jpg' ) ); ?>" alt="Experience — tasting" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ HOUSE CTA BAND ============ -->
<section class="sbtw-cta-band" id="house-cta" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>');" data-screen-label="Houses CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">Your private retreat awaits</div>
    <h2>Choose your house<br/>in Villa Rosa</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'houses.php' ) ); ?>">Explore the houses</a>
  </div>
</section>

<?php require __DIR__ . '/footer/footer.php'; ?>
