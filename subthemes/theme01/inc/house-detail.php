<?php
/* Reusable house-detail body. The page sets $p = $C['house2'|'house3'|'house4']
   and $PAGE before requiring header.php, then requires this partial. */
?>
<section class="page-hero" data-screen-label="<?= $p['h1'] ?> banner">
  <img class="bg" src="<?= $p['banner'] ?>" alt="<?= $p['h1'] ?>" />
  <div class="wrap">
    <div class="overline"><?= $TEXT['the_houses'] ?? 'The Houses' ?></div>
    <h1><?= $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?= function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><?= $TEXT['home'] ?? 'Home' ?></a><span>/</span><a href="<?= function_exists('sbt_url') ? sbt_url('houses.php') : 'houses.php' ?>"><?= $TEXT['houses'] ?? 'Houses' ?></a><span>/</span><?= $p['key'] ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="<?= $p['h1'] ?> overview">
  <div class="wrap two-col">
    <div class="media reveal"><img src="<?= $p['main'] ?>" alt="<?= $p['h1'] ?> interior" /><div class="frame"></div></div>
    <div class="reveal">
      <div class="overline"><?= $p['over'] ?></div>
      <h2 class="lead"><?= $p['lead'] ?></h2>
      <p class="body-text"><?= $p['p'] ?></p>
      <ul class="specs" style="margin-top:28px;max-width:420px;">
        <?php foreach ($p['specs'] as $s): ?><li><span><?= $s[0] ?></span><b><?= $s[1] ?></b></li><?php endforeach; ?>
      </ul>
      <div class="house-actions">
        <a class="btn" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>"><?= $TEXT['request_availability'] ?? 'Request availability' ?></a>
        <a class="btn btn--ghost" href="<?= function_exists('sbt_url') ? sbt_url('price-and-condition.php') : 'price-and-condition.php' ?>"><?= $TEXT['price_condition'] ?? 'Price & condition' ?></a>
      </div>
    </div>
  </div>
</section>

<section class="pad-s" style="background:var(--surface);" data-screen-label="<?= $p['h1'] ?> gallery">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:40px;">
      <div class="overline"><?= $TEXT['look_inside'] ?? 'A look inside' ?></div>
      <h2><?= $TEXT['room_detail'] ?? 'The room, in detail' ?></h2>
    </div>
    <div class="mosaic">
      <?php foreach ($p['gallery'] as $g): ?><div class="m-item"><img data-lightbox src="<?= $g ?>" alt="<?= $p['h1'] ?>" /></div><?php endforeach; ?>
      <button class="m-allbtn" type="button"><svg viewBox="0 0 24 24"><rect x="3" y="3" width="7" height="7" rx="1"/><rect x="14" y="3" width="7" height="7" rx="1"/><rect x="3" y="14" width="7" height="7" rx="1"/><rect x="14" y="14" width="7" height="7" rx="1"/></svg><?= $TEXT['show_all_photos'] ?? 'Show all photos' ?></button>
    </div>
  </div>
</section>

<section class="pad-s" data-screen-label="<?= $p['h1'] ?> included">
  <div class="wrap">
    <div class="section-head reveal" style="margin-bottom:48px;">
      <div class="overline"><?= $TEXT['included_over'] ?? "What's included" ?></div>
      <h2><?= $TEXT['included_h2'] ?? 'Comfort in every corner' ?></h2>
    </div>
    <div class="amenity-grid">
      <?php foreach ($p['included'] as $a): ?>
      <div class="amenity reveal"><svg viewBox="0 0 24 24"><?= $ICON[$a[0]] ?></svg><h4><?= $a[1] ?></h4><p><?= $a[2] ?></p></div>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?= $IMG['villa'] ?>');" data-screen-label="<?= $p['h1'] ?> CTA">
  <div class="inner reveal">
    <div class="overline"><?= $TEXT['ready_when'] ?? 'Ready when you are' ?></div>
    <h2><?= $TEXT['book_prefix'] ?? 'Book' ?> <?= strtolower($p['h1']) ?></h2>
    <a class="btn btn--light" href="<?= function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:8px;"><?= $TEXT['contact_us'] ?? 'Contact us' ?></a>
  </div>
</section>
