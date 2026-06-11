<?php
$PAGE = 'article';
$CONTENT_KEY = 'article';
require __DIR__ . '/inc/header.php';
?>

<section class="sbtw-page-hero" data-screen-label="Article banner">
  <?php echo sbt_t1_img( 'C.article.image_1', sbt_t1_asset( 'assets/images/kitchen-dining.jpg' ), '', array( 'class' => 'sbtw-bg' ) ); ?>
  <div class="sbtw-wrap">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.article.text_1', 'Masseria Le Cerase &amp; SPA', array( 'multiline' => false ) ); ?></div>
    <h1><?php echo sbt_t1_text( 'C.article.text_2', 'Experiences', array( 'multiline' => false ) ); ?></h1>
    <nav class="sbtw-crumb"><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.article.link_1', 'home.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.article.text_3', 'Home', array( 'multiline' => false ) ); ?></a><span>/</span><a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.article.link_2', 'experiences.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.article.text_4', 'Experiences', array( 'multiline' => false ) ); ?></a><span>/</span><?php echo sbt_t1_text( 'C.article.text_5', 'Article', array( 'multiline' => false ) ); ?></nav>
  </div>
</section>

<section class="sbtw-pad" data-screen-label="Article body">
  <div class="sbtw-wrap">
    <article class="sbtw-article sbtw-reveal">
      <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.article.text_6', 'Taste', array( 'multiline' => false ) ); ?></div>
      <h1 class="sbtw-title"><?php echo sbt_t1_text( 'C.article.text_7', 'Cooking Classes in the heart of Puglia', array( 'multiline' => false ) ); ?></h1>
      <p class="sbtw-meta"><?php echo sbt_t1_text( 'C.article.text_8', 'Experiences · 5 min read', array( 'multiline' => false ) ); ?></p>

      <div class="sbtw-article-body">
        <p><?php echo sbt_t1_text( 'C.article.text_9', 'Write your article here. This opening paragraph sets the scene — the drop-cap is applied automatically, so simply start typing and let the words lead your guest into the story. Replace this text with your own.', array( 'multiline' => true ) ); ?></p>

        <p><?php echo sbt_t1_text( 'C.article.text_10', 'Continue with the body of your article. You can write as many paragraphs as you like; each one will flow in this comfortable, readable column. Talk about the experience, what guests will see, taste and feel, and why it matters.', array( 'multiline' => true ) ); ?></p>

        <h2><?php echo sbt_t1_text( 'C.article.text_11', 'A section heading', array( 'multiline' => false ) ); ?></h2>
        <p><?php echo sbt_t1_text( 'C.article.text_12', 'Use headings to break longer pieces into clear sections. This makes the article easy to scan and pleasant to read on any device.', array( 'multiline' => true ) ); ?></p>

        <blockquote><?php echo sbt_t1_text( 'C.article.text_13', 'Add a short, evocative quote here to give the page a moment of pause.', array( 'multiline' => false ) ); ?></blockquote>

        <h3><?php echo sbt_t1_text( 'C.article.text_14', 'A smaller subheading', array( 'multiline' => false ) ); ?></h3>
        <p><?php echo sbt_t1_text( 'C.article.text_15', 'You can also use bulleted lists to highlight practical details:', array( 'multiline' => false ) ); ?></p>
        <ul>
          <li><?php echo sbt_t1_text( 'C.article.text_16', 'First point — for example, what is included', array( 'multiline' => false ) ); ?></li>
          <li><?php echo sbt_t1_text( 'C.article.text_17', 'Second point — duration, group size or location', array( 'multiline' => false ) ); ?></li>
          <li><?php echo sbt_t1_text( 'C.article.text_18', 'Third point — anything else worth noting', array( 'multiline' => false ) ); ?></li>
        </ul>

        <p><?php echo sbt_t1_text( 'C.article.text_19', 'Close with a final thought or an invitation. When you are ready, guests can', array( 'multiline' => false ) ); ?> <a href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.article.link_3', 'contacts.php' ) ) ); ?>"><?php echo sbt_t1_text( 'C.article.text_20', 'get in touch', array( 'multiline' => false ) ); ?></a> <?php echo sbt_t1_text( 'C.article.text_21', 'to plan their experience.', array( 'multiline' => false ) ); ?></p>
      </div>
    </article>
  </div>
</section>

<section class="sbtw-band" style="background-image:url('<?php echo esc_url( sbt_t1_asset( 'assets/images/bedroom-2.jpg' ) ); ?>');" data-screen-label="Article CTA">
  <div class="sbtw-inner sbtw-reveal">
    <div class="sbtw-overline"><?php echo sbt_t1_text( 'C.article.text_22', 'Design your days', array( 'multiline' => false ) ); ?></div>
    <h2><?php echo sbt_t1_text( 'C.article.text_23', 'Plan your experiences', array( 'multiline' => false ) ); ?></h2>
    <a class="sbtw-btn sbtw-btn--light" href="<?php echo esc_url( sbt_t1_url( sbt_t1_value( 'C.article.link_4', 'contacts.php' ) ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.article.text_24', 'Contact us', array( 'multiline' => false ) ); ?></a>
  </div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
