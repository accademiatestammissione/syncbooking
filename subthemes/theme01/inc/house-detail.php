<?php
/* Reusable house-detail body. The page sets $p = $C['house2'|'house3'|'house4']
   and $PAGE before requiring header.php, then requires this partial. */
?>
<section class="page-hero" data-screen-label="<?= $p['h1'] ?> banner">
  <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.' . $CONTENT_KEY . '.banner', $p['banner'], ['class' => 'bg', 'alt' => $p['h1']]) : '<img class="bg" src="' . $p['banner'] . '" alt="' . $p['h1'] . '" />' ?>
  <div class="wrap">
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.the_houses', $TEXT['the_houses'] ?? 'The Houses') : ($TEXT['the_houses'] ?? 'The Houses') ?></div>
    <h1><?= function_exists('sbt_vfe') ? sbt_vfe('C.' . $CONTENT_KEY . '.h1', $p['h1']) : $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span><a href="<?= function_exists('sbt_url') ? sbt_url('houses.php') : 'houses.php' ?>"><?= $TEXT['houses'] ?? 'Houses' ?></a><span>/</span><?= $p['key'] ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="<?= $p['h1'] ?> overview">
  <div class="wrap two-col">
    <div class="media reveal media-carousel" data-carousel>
      <div class="mc-track">
        <?php foreach (($p['overview_gallery'] ?? array($p['main'], $p['banner'], $IMG['room2'])) as $gi => $img): ?>
          <?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.' . $CONTENT_KEY . '.overview_gallery.' . $gi, $img, ['data-lightbox' => '', 'alt' => $p['h1'] . ' interior']) : '<img data-lightbox src="' . $img . '" alt="' . $p['h1'] . ' interior" />' ?>
        <?php endforeach; ?>
      </div>
      <button class="mc-nav mc-prev" type="button" aria-label="Previous">&#8249;</button>
      <button class="mc-nav mc-next" type="button" aria-label="Next">&#8250;</button>
      <div class="mc-dots"></div>
      <div class="frame"></div>
    </div>
    <div class="reveal">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('C.' . $CONTENT_KEY . '.over', $p['over']) : $p['over'] ?></div>
      <h2 class="lead"><?= function_exists('sbt_vfe') ? sbt_vfe('C.' . $CONTENT_KEY . '.lead', $p['lead']) : $p['lead'] ?></h2>
      <p class="body-text"><?= function_exists('sbt_vfe') ? sbt_vfe('C.' . $CONTENT_KEY . '.p', $p['p'], ['multiline'=>true]) : $p['p'] ?></p>
      <ul class="specs" style="margin-top:28px;max-width:420px;">
        <?php foreach ($p['specs'] as $i => $s): ?><li><span><?= function_exists('sbt_vfe') ? sbt_vfe('C.' . $CONTENT_KEY . '.specs.' . $i . '.0', $s[0]) : $s[0] ?></span><b><?= function_exists('sbt_vfe') ? sbt_vfe('C.' . $CONTENT_KEY . '.specs.' . $i . '.1', $s[1]) : $s[1] ?></b></li><?php endforeach; ?>
      </ul>
      <div class="house-actions">
        <a class="btn" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.request_availability', $TEXT['request_availability'] ?? 'Request availability') : ($TEXT['request_availability'] ?? 'Request availability') ?></a>
        <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url('price-and-condition.php') : 'price-and-condition.php' ?>"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.price_condition', $TEXT['price_condition'] ?? 'Price & condition') : ($TEXT['price_condition'] ?? 'Price & condition') ?></a>
      </div>
    </div>
  </div>
</section>

<section class="pad-s" style="background:var(--surface);" data-screen-label="<?= $p['h1'] ?> gallery">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:40px;">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.look_inside', $TEXT['look_inside'] ?? 'A look inside') : ($TEXT['look_inside'] ?? 'A look inside') ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.room_detail', $TEXT['room_detail'] ?? 'The room, in detail') : ($TEXT['room_detail'] ?? 'The room, in detail') ?></h2>
    </div>
    <div class="mosaic">
      <?php foreach ($p['gallery'] as $i => $g): ?><div class="m-item"><?= function_exists('sbt_vfe_image') ? sbt_vfe_image('C.' . $CONTENT_KEY . '.gallery.' . $i, $g, ['data-lightbox' => '', 'alt' => $p['h1']]) : '<img data-lightbox src="' . $g . '" alt="' . $p['h1'] . '" />' ?></div><?php endforeach; ?>
      <button class="m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.show_all_photos', $TEXT['show_all_photos'] ?? 'Show all photos') : ($TEXT['show_all_photos'] ?? 'Show all photos') ?></button>
    </div>
  </div>
</section>

<section class="pad-s" data-screen-label="<?= $p['h1'] ?> included">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:48px;">
      <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.included_over', $TEXT['included_over'] ?? "What's included") : ($TEXT['included_over'] ?? "What's included") ?></div>
      <h2><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.included_h2', $TEXT['included_h2'] ?? 'Comfort in every corner') : ($TEXT['included_h2'] ?? 'Comfort in every corner') ?></h2>
    </div>
    <div class="amenity-grid">
      <?php foreach ($p['included'] as $i => $a): ?>
      <div class="amenity reveal"><svg viewBox="0 0 24 24"><?= $ICON[$a[0]] ?></svg><h4><?= function_exists('sbt_vfe') ? sbt_vfe('C.' . $CONTENT_KEY . '.included.' . $i . '.1', $a[1]) : $a[1] ?></h4><p><?= function_exists('sbt_vfe') ? sbt_vfe('C.' . $CONTENT_KEY . '.included.' . $i . '.2', $a[2], ['multiline'=>true]) : $a[2] ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="<?= function_exists('sbt_vfe_background_style') ? sbt_vfe_background_style('IMG.villa', $IMG['villa']) : "background-image:url('" . $IMG['villa'] . "');" ?>" data-screen-label="<?= $p['h1'] ?> CTA">
  <div class="inner reveal">
    <?= function_exists('sbt_vfe_control') ? sbt_vfe_control('IMG.villa', $IMG['villa'], 'Immagine sfondo', 'image') : '' ?>
    <div class="overline"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.ready_when', $TEXT['ready_when'] ?? 'Ready when you are') : ($TEXT['ready_when'] ?? 'Ready when you are') ?></div>
    <h2><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.book_prefix', $TEXT['book_prefix'] ?? 'Book') : ($TEXT['book_prefix'] ?? 'Book') ?> <?= strtolower($p['h1']) ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:8px;"><?= function_exists('sbt_vfe') ? sbt_vfe('TEXT.contact_us', $TEXT['contact_us'] ?? 'Contact us') : ($TEXT['contact_us'] ?? 'Contact us') ?></a>
  </div>
</section>
