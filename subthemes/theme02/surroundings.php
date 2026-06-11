<?php $PAGE = 'surroundings'; require __DIR__ . '/inc/header.php'; $p = $C['surroundings']; ?>

<section class="page-hero" data-screen-label="Surroundings banner">
  <img class="bg" src="<?php echo $IMG['surr_hero'] ?>" alt="<?php echo strip_tags($p['h1']) ?>" />
  <div class="wrap">
    <div class="overline"><?php echo $p['over'] ?></div>
    <h1><?php echo $p['h1'] ?></h1>
    <nav class="crumb"><a href="<?php echo function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>">Home</a><span>/</span><?php echo strip_tags($p['h1']) ?></nav>
  </div>
</section>

<section class="pad" data-screen-label="Surroundings intro">
  <div class="wrap">
    <div class="section-head reveal">
      <div class="overline"><?php echo $p['intro_over'] ?></div>
      <h2><?php echo $p['intro_h2'] ?></h2>
      <p><?php echo $p['intro_p'] ?></p>
    </div>
    <div class="exp-grid">
      <?php foreach ($DESTINATIONS as $d): ?>
      <article class="exp reveal"><img src="<?php echo $d[2] ?>" alt="<?php echo strip_tags($d[1]) ?>" /><div class="ex-body"><div class="overline"><?php echo $d[0] ?></div><h3><?php echo $d[1] ?></h3></div></article>
      <?php endforeach; ?>
    </div>
  </div>
</section>

<section class="band" style="background-image:url('<?php echo $IMG['band'] ?>');" data-screen-label="Surroundings band">
  <div class="inner reveal">
    <div class="overline"><?php echo $p['band_over'] ?></div>
    <h2><?php echo $p['band_h2'] ?></h2>
    <a class="btn btn--light" href="<?php echo function_exists('sbt_url') ? sbt_url('experiences.php') : 'experiences.php' ?>" style="margin-top:8px;">Our experiences</a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
