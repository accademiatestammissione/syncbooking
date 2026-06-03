<?php $PAGE = 'experiences'; $PAGE_TITLE = $C['experiences']['title']; require __DIR__ . '/inc/header.php'; $p = $C['experiences']; ?>

<section class="page-hero" data-screen-label="Experiences banner">
  <img class="bg" src="<?= $p['banner'] ?>" alt="<?= $p['h1'] ?>" />
  <div class="wrap">
    <div class="overline"><?= $p['over'] ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span>Experiences</nav>
  </div>
</section>

<section class="pad" data-screen-label="Experiences intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?= $p['intro_over'] ?></div>
      <h2><?= $p['intro_h2'] ?></h2>
      <p><?= $p['intro_p'] ?></p>
    </div>
    <div class="exp-grid">
      <?php foreach ($p['cards'] as $c): ?>
      <article class="exp reveal">
        <img src="<?= $c['img'] ?>" alt="<?= $c['h3'] ?>" />
        <div class="ex-body">
          <div class="overline"><?= $c['over'] ?></div>
          <h3><?= $c['h3'] ?></h3>
          <p style="color:rgba(255,255,255,.85);font-size:14.5px;margin-top:8px;max-width:40ch;"><?= $c['p'] ?></p>
          <a class="ex-link" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>"><?= $TEXT['enquire'] ?? 'Enquire' ?> <span></span></a>
        </div>
      </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="pad" style="background:var(--surface);" data-screen-label="Experiences wellness">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:44px;">
      <div class="overline">Body &amp; soul</div>
      <h2>Wellness &amp; SPA</h2>
      <p>Tucked beneath ancient vaults, our wellness centre is a world apart: sauna, Turkish bath, emotional showers, a hydromassage pool and a candle-lit relaxation lounge — plus a fully equipped gym for those who like to keep moving.</p>
    </div>
    <div class="mosaic">
      <div class="m-item"><img data-lightbox src="<?= function_exists('sbt_asset_url') ? sbt_asset_url('assets/images/jacuzzi.png') : 'assets/images/jacuzzi.png' ?>" alt="Villa Rosa SPA — hydromassage pool" /></div>
      <div class="m-item"><img data-lightbox src="<?= function_exists('sbt_asset_url') ? sbt_asset_url('assets/images/sauna.png') : 'assets/images/sauna.png' ?>" alt="Villa Rosa SPA — sauna" /></div>
      <div class="m-item"><img data-lightbox src="<?= function_exists('sbt_asset_url') ? sbt_asset_url('assets/images/turkish-bath.png') : 'assets/images/turkish-bath.png' ?>" alt="Villa Rosa SPA — Turkish bath" /></div>
      <div class="m-item"><img data-lightbox src="<?= function_exists('sbt_asset_url') ? sbt_asset_url('assets/images/relax-lounge.png') : 'assets/images/relax-lounge.png' ?>" alt="Villa Rosa SPA — relaxation lounge" /></div>
      <div class="m-item"><img data-lightbox src="<?= function_exists('sbt_asset_url') ? sbt_asset_url('assets/images/gym.png') : 'assets/images/gym.png' ?>" alt="Villa Rosa SPA — gym" /></div>
      <button class="m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg>Show all photos</button>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?= $p['cta_bg'] ?>');" data-screen-label="Experiences CTA">
  <div class="inner reveal">
    <div class="overline"><?= $p['cta_over'] ?></div>
    <h2><?= $p['cta_h2'] ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:8px;"><?= $p['cta_btn'] ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
