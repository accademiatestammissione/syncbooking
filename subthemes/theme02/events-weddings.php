<?php $PAGE = 'events'; require __DIR__ . '/inc/header.php'; $p = $C['events']; ?>

<section class="page-hero" data-screen-label="Events banner">
  <img class="bg" src="<?php echo $IMG['events_hero'] ?>" alt="<?php echo strip_tags($p['h1']) ?>" />
  <div class="wrap">
    <div class="overline"><?php echo $p['over'] ?></div>
    <h1><?php echo $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?php echo function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>">Home</a><span>/</span><?php echo strip_tags($p['h1']) ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Events intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?php echo $p['intro_over'] ?></div>
      <h2><?php echo $p['intro_h2'] ?></h2>
      <p><?php echo $p['intro_p'] ?></p>
      <a class="btn" href="<?php echo function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>" style="margin-top:30px;">Contacts</a>
    </div>
    <div class="exp-grid">
      <a class="exp reveal" href="<?php echo function_exists('sbt_url') ? sbt_url('wedding-in-masseria.php') : 'wedding-in-masseria.php' ?>">
        <img src="<?php echo $IMG['teaser_wedding'] ?>" alt="Wedding in Masseria" />
        <div class="ex-body"><div class="overline">The wedding of your dreams</div><h3>Wedding in Masseria</h3><div class="ex-link">Discover <span></span></div></div>
      </a>
      <a class="exp reveal" href="<?php echo function_exists('sbt_url') ? sbt_url('partys-meeting.php') : 'partys-meeting.php' ?>">
        <img src="<?php echo $IMG['partys_hero'] ?>" alt="Partys & Meeting" />
        <div class="ex-body"><div class="overline">Celebrations &amp; meetings</div><h3>Partys &amp; Meeting</h3><div class="ex-link">Discover <span></span></div></div>
      </a>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?php echo $IMG['band'] ?>');" data-screen-label="Events band">
  <div class="inner reveal">
    <div class="overline"><?php echo $p['band_over'] ?></div>
    <h2><?php echo $p['band_h2'] ?></h2>
    <p><?php echo $p['band_p'] ?></p>
  </div>
</section>

<section class="pad" data-screen-label="Events CTA">
  <div class="wrap" style="text-align:center;">
    <div class="reveal" style="max-width:620px;margin:0 auto;">
      <div class="overline">Let&rsquo;s design your day</div>
      <h2 class="lead" style="margin-bottom:24px;">Tell us about your event</h2>
      <a class="btn" href="<?php echo function_exists('sbt_url') ? sbt_url('contacts.php') : 'contacts.php' ?>">Contact us</a>
    </div>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
