<?php
$PAGE = 'experiences';
require __DIR__ . '/inc/header.php';
$p = $C['article'];
sbt_t1_page_hero( 'article', $p, 'Article', array( 'url' => 'experiences.php', 'label' => 'Experiences' ) );
?>

<section class="pad" data-screen-label="Article body">
	<div class="wrap">
		<article class="article reveal">
			<div class="overline"><?php echo sbt_t1_text( 'C.article.article_over', $p['article_over'] ); ?></div>
			<h1 class="title"><?php echo sbt_t1_text( 'C.article.article_title', $p['article_title'] ); ?></h1>
			<p class="meta"><?php echo sbt_t1_text( 'C.article.article_meta', $p['article_meta'] ); ?></p>
			<div class="article-body">
				<p><?php echo sbt_t1_text( 'C.article.body_p1', $p['body_p1'], array( 'multiline' => true ) ); ?></p>
				<p><?php echo sbt_t1_text( 'C.article.body_p2', $p['body_p2'], array( 'multiline' => true ) ); ?></p>
				<h2><?php echo sbt_t1_text( 'C.article.body_h2', $p['body_h2'] ); ?></h2>
				<p><?php echo sbt_t1_text( 'C.article.body_p3', $p['body_p3'], array( 'multiline' => true ) ); ?></p>
				<blockquote><?php echo sbt_t1_text( 'C.article.body_quote', $p['body_quote'], array( 'multiline' => true ) ); ?></blockquote>
				<h3><?php echo sbt_t1_text( 'C.article.body_h3', $p['body_h3'] ); ?></h3>
				<p><?php echo sbt_t1_text( 'C.article.body_p4', $p['body_p4'], array( 'multiline' => true ) ); ?></p>
				<ul>
					<?php foreach ( $p['body_items'] as $index => $item ) : ?>
						<li><?php echo sbt_t1_text( 'C.article.body_items.' . $index, $item, array( 'multiline' => true ) ); ?></li>
					<?php endforeach; ?>
				</ul>
				<p><?php echo sbt_t1_text( 'C.article.body_p5', $p['body_p5'], array( 'multiline' => true ) ); ?> <a href="<?php echo esc_url( sbt_t1_url( $p['body_link_url'] ) ); ?>"><?php echo sbt_t1_text( 'C.article.body_link_label', $p['body_link_label'] ); ?></a> to plan their experience.</p>
				<?php echo sbt_t1_control( 'C.article.body_link_url', $p['body_link_url'], 'Link testo', 'url' ); ?>
			</div>
		</article>
	</div>
</section>

<section class="band" style="<?php echo esc_attr( sbt_t1_bg_style( 'C.article.cta_bg', $p['cta_bg'] ) ); ?>" data-screen-label="Article CTA">
	<div class="inner reveal">
		<?php echo sbt_t1_control( 'C.article.cta_bg', $p['cta_bg'], 'Background image', 'image' ); ?>
		<div class="overline"><?php echo sbt_t1_text( 'C.article.cta_over', $p['cta_over'] ); ?></div>
		<h2><?php echo sbt_t1_text( 'C.article.cta_h2', $p['cta_h2'] ); ?></h2>
		<a class="btn btn--light" href="<?php echo esc_url( sbt_t1_url( $p['cta_url'] ) ); ?>" style="margin-top:8px;"><?php echo sbt_t1_text( 'C.article.cta_btn', $p['cta_btn'] ); ?></a>
		<?php echo sbt_t1_control( 'C.article.cta_url', $p['cta_url'], 'Button link', 'url' ); ?>
	</div>
</section>

<?php require __DIR__ . '/inc/footer.php'; ?>
