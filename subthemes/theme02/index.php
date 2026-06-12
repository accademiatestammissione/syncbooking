<?php
$PAGE = 'home';
$PAGE_TITLE = 'Masseria Le Cerase – A 17th-century Masseria in Puglia';
require __DIR__ . '/inc/header.php';
?>
<!-- ============ HERO ============ -->
<section class="sbtw-hero" id="top" data-screen-label="Hero">
  <div class="sbtw-hero-video">
    <video src="<?php echo esc_url( sbt_asset_url( 'assets/video/masseria.mp4' ) ); ?>" poster="<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-dusk.jpg' ) ); ?>" autoplay muted loop playsinline></video>
  </div>
  <div class="sbtw-hero-overlay"></div>
  <div class="sbtw-hero-inner">
    <div class="sbtw-overline">Masseria Le Cerase · Conversano · Puglia</div>
    <h1>A 17th-century<br/>masseria, only yours</h1>
    <p class="sbtw-sub">A fortified country house among olive groves, cherry orchards and vineyards — yours to live, for up to ten guests.</p>
  </div>
  <div class="sbtw-scrolldown"><span>Scroll</span><span class="sbtw-line"></span></div>
</section>

<!-- ============ WELCOME ============ -->
<section class="sbtw-pad" id="welcome" data-screen-label="Welcome">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col">
      <div class="sbtw-reveal">
        <div class="sbtw-overline">Welcome</div>
        <h2 class="sbtw-lead">Centuries of stone,<br/>surrounded by countryside</h2>
        <p class="sbtw-body-text">Masseria Le Cerase is a fortified seventeenth-century farmhouse in the countryside of Conversano, in the heart of Puglia. Built in local limestone, it stands among organic olive groves, cherry orchards and vineyards — the trees that give the masseria its name.</p>
        <p class="sbtw-body-text" style="margin-top:18px;">Restored with respect for its history, the masseria welcomes a single party at a time: vaulted halls, wrought-iron beds, a pool framed by olive trees, and the deep silence of the open land. A whole estate, entirely yours, for up to ten guests.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'villa.php' ) ); ?>" style="margin-top:30px;">Discover the Masseria</a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>" alt="Masseria Le Cerase — aerial view" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/facade-vines.jpg' ) ); ?>" alt="Masseria Le Cerase — facade and vineyards" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Masseria Le Cerase — inner courtyard" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/facade-flowers.jpg' ) ); ?>" alt="Masseria Le Cerase — entrance" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-night.jpg' ) ); ?>" alt="Masseria Le Cerase — by night" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
        <div class="sbtw-stamp">XVII<br/>century</div>
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
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/salone-volte.jpg' ) ); ?>" alt="The vaulted hall" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="A vaulted bedroom" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/living-1.jpg' ) ); ?>" alt="The living room" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="The inner courtyard" /></div>
      <div class="sbtw-m-item"><img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/pool-pergola.jpg' ) ); ?>" alt="The pool and pergola" /></div>
      <button class="sbtw-m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>Show all photos</button>
    </div>
  </div>
</section>

<!-- ============ ROOMS ============ -->
<section class="sbtw-houses sbtw-pad" id="houses" data-screen-label="Rooms">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline">The Rooms</div>
      <h2>Sleeping under the vaults</h2>
      <p>Five double bedrooms, each carved beneath ancient stone vaults and furnished with wrought-iron beds, antique wardrobes and warm linen. Space and privacy for up to ten guests, all within the same estate.</p>
    </div>
    <div class="sbtw-house-grid">
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">Double</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="Vaulted bedroom" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>" alt="Bedroom interior" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-cozy.jpg' ) ); ?>" alt="Room detail" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>Camera degli Ulivi</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'house.php' ) ); ?>">Discover</a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">Double</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-3.jpg' ) ); ?>" alt="Vaulted bedroom" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-iron.jpg' ) ); ?>" alt="Iron bed" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-1.jpg' ) ); ?>" alt="Bedroom" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>Camera del Ciliegio</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'house.php' ) ); ?>">Discover</a>
        </div>
      </div>
      <div class="sbtw-house sbtw-reveal">
        <div class="sbtw-ph"><span class="sbtw-tag">Double</span>
          <div class="sbtw-media-carousel" data-carousel>
            <div class="sbtw-mc-track">
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-iron.jpg' ) ); ?>" alt="Iron bed bedroom" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-2.jpg' ) ); ?>" alt="Bedroom" />
              <img src="<?php echo esc_url( sbt_asset_url( 'assets/images/bedroom-3.jpg' ) ); ?>" alt="Bedroom detail" />
            </div>
            <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
            <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
            <div class="sbtw-mc-dots"></div>
          </div>
        </div>
        <div class="sbtw-body">
          <h3>Camera della Vigna</h3>
          <a class="sbtw-btn sbtw-btn--light sbtw-house-cta" href="<?php echo esc_url( sbt_t1_url( 'house.php' ) ); ?>">Discover</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php if ( ! function_exists( 'sbt_is_entire_rental_mode' ) || sbt_is_entire_rental_mode( 'theme02' ) ) : ?>
<!-- ============ WHOLE MASSERIA ============ -->
<section class="sbtw-pad-s" id="whole-masseria" style="background:var(--surface);" data-screen-label="Whole masseria">
  <div class="sbtw-wrap sbtw-two-col">
    <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
      <div class="sbtw-mc-track">
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>" alt="The whole estate from above" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-dusk.jpg' ) ); ?>" alt="The masseria at dusk" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/great-hall.jpg' ) ); ?>" alt="The great hall" />
        <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/pool-pergola.jpg' ) ); ?>" alt="The private pool" />
      </div>
      <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="sbtw-mc-dots"></div>
      <div class="sbtw-frame"></div>
    </div>
    <div class="sbtw-reveal">
      <div class="sbtw-overline">Exclusive use</div>
      <h2 class="sbtw-lead">Book the whole Masseria</h2>
      <p class="sbtw-body-text">One booking, the entire estate: all five bedrooms, the vaulted halls, the country kitchen, the pool and the gardens — reserved exclusively for your party. The freedom of a private home, with the soul of a seventeenth-century masseria.</p>
      <ul class="sbtw-specs" style="margin-top:28px;max-width:420px;">
        <li><span>Guests</span><b>Up to 10</b></li>
        <li><span>Use</span><b>Entire estate, exclusive</b></li>
      </ul>
      <div class="sbtw-house-actions">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( 'whole-masseria.php' ) ); ?>">Discover the whole masseria</a>
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
      <h2>The estate at your service</h2>
    </div>
    <div class="sbtw-svc-grid">
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M2 17c2 0 2-1.5 4-1.5S10 17 12 17s2-1.5 4-1.5S20 17 22 17"/><path d="M2 21c2 0 2-1.5 4-1.5S10 21 12 21s2-1.5 4-1.5S20 21 22 21"/><path d="M8 13V5a2 2 0 0 1 4 0"/></svg>
        <h4>Private Pool</h4>
        <p>A pool framed by a pergola and olive trees, reserved entirely for your party.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M12 21v-7"/><circle cx="12" cy="9" r="6"/></svg>
        <h4>Olive Groves</h4>
        <p>Acres of organic olive trees, cherry orchards and vineyards to wander freely.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/></svg>
        <h4>Vaulted Halls</h4>
        <p>Grand stone halls under historic vaults, for long dinners and gatherings.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 12.5a10 10 0 0 1 14 0"/><path d="M8 15.5a6 6 0 0 1 8 0"/><circle cx="12" cy="19" r="1"/></svg>
        <h4>Wi-Fi</h4>
        <p>Connectivity across the whole estate, for whenever you need it.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M7 3v8M5 3v4a2 2 0 0 0 4 0V3M7 11v10"/><path d="M16 3c-1.5 1-2 3-2 5s.5 3 2 3 2-1 2-3-.5-4-2-5Zm0 8v10"/></svg>
        <h4>Country Kitchen</h4>
        <p>A fully equipped kitchen under the vaults, for meals made with local produce.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M5 9h14l-1.5 6a2 2 0 0 1-2 1.5H8.5a2 2 0 0 1-2-1.5Z"/><path d="M9 9V7a3 3 0 0 1 6 0v2M10 19v2M14 19v2"/></svg>
        <h4>Outdoor Dining</h4>
        <p>Long tables in the courtyard and garden, for slow days under the sun.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M4 15l1.5-5A2 2 0 0 1 7.4 8.6h9.2A2 2 0 0 1 18.5 10L20 15"/><path d="M3 15h18v3H3z"/><circle cx="7" cy="18" r="1.4"/><circle cx="17" cy="18" r="1.4"/></svg>
        <h4>On request</h4>
        <p>Private chef, transfers and car rental arranged to make every part of Puglia yours.</p>
      </div>
      <div class="sbtw-svc sbtw-reveal">
        <svg viewBox="0 0 24 24"><path d="M3 9v6M6 7v10M18 7v10M21 9v6M6 12h12"/></svg>
        <h4>Fitness Room</h4>
        <p>A private gym within the masseria, to stay active even on holiday.</p>
      </div>
    </div>
  </div>
</section>

<!-- ============ QUOTE BAND ============ -->
<section class="sbtw-band" id="band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-garden.jpg' ) ); ?>');" data-screen-label="Surroundings band">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">The Apulian way of living</div>
    <h2>Slow days, long tables,<br/>and the scent of the land</h2>
    <p>From the whitewashed lanes of Conversano to the trulli of the Itria Valley and the turquoise coast — everything you love about Puglia begins beyond the masseria's walls.</p>
  </div>
</section>

<!-- ============ FEATURE ROWS ============ -->
<section class="sbtw-feature sbtw-pad" data-screen-label="Weddings & Experience">
  <div class="sbtw-wrap">
    <div class="sbtw-two-col" id="weddings">
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/salone-volte.jpg' ) ); ?>" alt="Weddings — the vaulted hall" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/great-hall.jpg' ) ); ?>" alt="Weddings — banquet hall" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/courtyard.jpg' ) ); ?>" alt="Weddings — courtyard" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/pool-pergola.jpg' ) ); ?>" alt="Weddings — garden" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/masseria-night.jpg' ) ); ?>" alt="Weddings — masseria by night" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
      <div class="sbtw-reveal">
        <div class="sbtw-label">Masseria Le Cerase</div>
        <h3>Weddings &amp; Events</h3>
        <p class="sbtw-body-text">An exclusive setting for the most important day. Exchange your vows in the olive garden, dine beneath the stone vaults of the Salone delle Volte, and celebrate along the lantern-lit avenue — the whole estate reserved for you and your guests.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'weddings.php' ) ); ?>" style="margin-top:28px;">Discover Weddings</a>
      </div>
    </div>
    <div class="sbtw-two-col" id="experience">
      <div class="sbtw-reveal">
        <div class="sbtw-label">Masseria Le Cerase</div>
        <h3>Apulian Experience</h3>
        <p class="sbtw-body-text">We craft tailor-made experiences for each guest, shaped around your wishes — from cooking classes and olive-oil and wine tastings to private tours of the surrounding wonders of Puglia.</p>
        <a class="sbtw-btn sbtw-btn--ghost" href="<?php echo esc_url( sbt_t1_url( 'experiences.php' ) ); ?>" style="margin-top:28px;">Explore experiences</a>
      </div>
      <div class="sbtw-media sbtw-reveal sbtw-media-carousel" data-carousel>
        <div class="sbtw-mc-track">
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/kitchen-dining.jpg' ) ); ?>" alt="Apulian Experience — the table" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/lounge-dining.jpg' ) ); ?>" alt="Experience — dining under the vaults" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/facade-flowers.jpg' ) ); ?>" alt="Experience — the village" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-garden.jpg' ) ); ?>" alt="Experience — the estate" />
          <img data-lightbox src="<?php echo esc_url( sbt_asset_url( 'assets/images/lounge-vault.jpg' ) ); ?>" alt="Experience — tasting" />
        </div>
        <button class="sbtw-mc-nav sbtw-mc-prev" type="button" aria-label="Previous">&#8249;</button>
        <button class="sbtw-mc-nav sbtw-mc-next" type="button" aria-label="Next">&#8250;</button>
        <div class="sbtw-mc-dots"></div>
        <div class="sbtw-frame"></div>
      </div>
    </div>
  </div>
</section>

<!-- ============ STAY CTA BAND ============ -->
<section class="sbtw-cta-band" id="house-cta" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/aerial-pool.jpg' ) ); ?>');" data-screen-label="Stay CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline">The whole masseria awaits</div>
    <h2>Your stay at<br/>Masseria Le Cerase</h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( 'whole-masseria.php' ) ); ?>">Discover the stay</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
