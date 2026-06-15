<?php
$PAGE = 'price-and-condition';
$PAGE_TITLE = 'Price &amp; Condition – Villa Rosa Resort';
require __DIR__ . '/../header/header.php';
$p = isset( $C['price'] ) && is_array( $C['price'] ) ? $C['price'] : array();
$houses_label = $C['houses']['h1'] ?? ( $TEXT['houses'] ?? 'Houses' );
?>
<section class="sbtw-page-hero" data-screen-label="Price banner">
  <img class="sbtw-bg" src="<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-082.jpg' ) ); ?>" alt="<?php echo esc_attr( $SITE['name'] ?? 'Price & Condition' ); ?>" />
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.over', $p['over'] ?? '' ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.price.h1', $p['h1'] ?? 'Price &amp; Condition' ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( 'index.php' ) ); ?>"><?php echo esc_html( $TEXT['home'] ?? 'Home' ); ?></a><span>/</span><a href="<?php echo esc_url( sbt_t1_url( 'houses.php' ) ); ?>"><?php echo esc_html( $houses_label ); ?></a><span>/</span><?php echo esc_html( $p['h1'] ?? 'Price & Condition' ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Price intro">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.intro_over', $p['intro_over'] ?? '' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.price.intro_h2', $p['intro_h2'] ?? '' ); ?></h2>
      <p><?php echo sbt_t1_text( 'C.price.intro_p', $p['intro_p'] ?? '', array( 'multiline' => true ) ); ?></p>
    </div>
    <div class="sbtw-book-cta sbtw-reveal">
      <div class="sbtw-bc-text">
        <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.book_over', $p['book_over'] ?? '' ); ?></div>
        <h3><?php echo sbt_t1_text( 'C.price.book_h3', $p['book_h3'] ?? '' ); ?></h3>
        <p><?php echo sbt_t1_text( 'C.price.book_p', $p['book_p'] ?? '', array( 'multiline' => true ) ); ?></p>
      </div>
      <div class="sbtw-bc-action">
        <a class="sbtw-btn" href="<?php echo esc_url( sbt_t1_url( $p['book_url'] ?? 'syncbooking:booking' ) ); ?>"><?php echo sbt_t1_text( 'C.price.book_btn', $p['book_btn'] ?? 'Book your stay' ); ?></a>
        <span class="sbtw-bc-note"><?php echo sbt_t1_text( 'C.price.book_note', $p['book_note'] ?? '' ); ?></span>
      </div>
    </div>
  </div>
</section>

<section class="sbtw-pad" style="background:var(--surface);" data-screen-label="Conditions">
  <div class="sbtw-wrap">
    <div class="sbtw-section-head sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.cond_over', $p['cond_over'] ?? '' ); ?></div>
      <h2><?php echo sbt_t1_text( 'C.price.cond_h2', $p['cond_h2'] ?? 'Conditions' ); ?></h2>
    </div>
    <dl class="sbtw-cond-list sbtw-reveal">
      <?php
      $conditions = ( ! empty( $p['conditions'] ) && is_array( $p['conditions'] ) ) ? $p['conditions'] : array();
      foreach ( $conditions as $ri => $row ) :
      ?>
      <div class="sbtw-row"><dt><?php echo sbt_t1_text( 'C.price.conditions.' . $ri . '.0', $row[0] ?? '' ); ?></dt><dd><?php echo sbt_t1_text( 'C.price.conditions.' . $ri . '.1', $row[1] ?? '', array( 'multiline' => true ) ); ?></dd></div>
      <?php endforeach; ?>
    </dl>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_asset_url( 'assets/images/exterior-090.jpg' ) ); ?>');" data-screen-label="Price CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.price.cta_over', $p['cta_over'] ?? '' ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.price.cta_h2', $p['cta_h2'] ?? '' ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ?? 'contacts.php' ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.price.cta_btn', $p['cta_btn'] ?? 'Contact us' ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/../footer/footer.php'; ?>
