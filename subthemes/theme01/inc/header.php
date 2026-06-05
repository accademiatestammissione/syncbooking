<?php
/* Shared <head> + header + mobile drawer.
   A page sets $PAGE (nav key) and $PAGE_TITLE before including this. */
require_once __DIR__ . '/../data_general.php';
if (!isset($PAGE))       $PAGE = '';
if (!isset($PAGE_TITLE)) $PAGE_TITLE = $SITE['name'] . ' – ' . $SITE['tagline'];

/* WhatsApp glyph reused in header + footer */
$WA_SVG = '<svg viewBox="0 0 24 24"><path d="M12 2a10 10 0 0 0-8.6 15l-1.3 4.7 4.8-1.3A10 10 0 1 0 12 2Zm5.6 14.2c-.2.6-1.2 1.2-1.7 1.2-.4 0-1 .1-3.1-.8-2.6-1.1-4.3-3.8-4.4-4-.1-.2-1-1.4-1-2.6 0-1.2.6-1.8.9-2 .2-.3.5-.3.7-.3h.5c.2 0 .4 0 .6.5l.8 2c.1.2.1.4 0 .5l-.4.6c-.1.2-.3.3-.1.6.2.3.8 1.3 1.7 2.1 1.2 1 2.1 1.3 2.4 1.5.2.1.4.1.5-.1l.7-.9c.2-.2.4-.2.6-.1l1.9.9c.2.1.4.2.4.3.1.2.1.6 0 1Z"/></svg>';
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1" />
<link rel="stylesheet" href="<?php echo function_exists('sbt_asset_url') ? sbt_asset_url('assets/site.css') : 'assets/site.css' ?>" />
<?php if (function_exists('wp_head')) wp_head(); ?>
</head>
<body <?php if (function_exists('body_class')) body_class(); ?> data-page="<?php echo $PAGE ?>">
<?php if (function_exists('wp_body_open')) wp_body_open(); ?>

<header id="hdr">
  <a class="logo" href="<?php echo function_exists('sbt_url') ? sbt_url('index.php') : 'index.php' ?>"><img src="<?php echo $IMG['logo'] ?>" alt="<?php echo $SITE['name'] ?>" /></a>
  <nav class="main">
    <?php if (function_exists('has_nav_menu') && has_nav_menu('primary')): ?>
      <?php
      wp_nav_menu(
        array(
          'theme_location' => 'primary',
          'container'      => false,
          'menu_class'     => 'wp-menu',
          'depth'          => 2,
        )
      );
      ?>
    <?php else: ?>
    <?php foreach ($NAV as $item): ?>
      <?php if (!empty($item['sub'])): ?>
        <div class="has-sub">
          <span class="top<?php echo $PAGE === $item['key'] ? ' current' : '' ?>"><?php echo $item['label'] ?> <i class="chev"></i></span>
          <div class="sub">
            <?php foreach ($item['sub'] as $s): ?>
              <?php if (!empty($s['divide'])): ?><div class="divider"></div><?php endif; ?>
              <a href="<?php echo function_exists('sbt_url') ? sbt_url($s['url']) : $s['url'] ?>"><span class="t"><?php echo $s['label'] ?></span><span class="d"><?php echo $s['desc'] ?></span></a>
            <?php endforeach; ?>
          </div>
        </div>
      <?php else: ?>
        <a href="<?php echo function_exists('sbt_url') ? sbt_url($item['url']) : $item['url'] ?>"<?php echo $PAGE === $item['key'] ? ' class="current"' : '' ?>><?php echo $item['label'] ?></a>
      <?php endif; ?>
    <?php endforeach; ?>
    <?php endif; ?>
  </nav>
  <div class="actions-desktop">
    <div class="lang-toggle"><a href="#" class="active"><?php echo $SITE['lang_primary'] ?? 'EN' ?></a><span class="sep">/</span><a href="#"><?php echo $SITE['lang_secondary'] ?? 'IT' ?></a></div>
    <a class="wa" href="<?php echo $SITE['wa'] ?>"><?php echo $WA_SVG ?><?php echo $SITE['whatsapp_label'] ?? 'WhatsApp' ?></a>
  </div>
  <button class="burger" id="burger" aria-label="Menu"><span></span><span></span><span></span></button>
</header>

<div class="drawer" id="drawer">
  <button class="close" id="closeDrawer" aria-label="Close">&times;</button>
  <?php foreach ($NAV as $item): ?>
    <a href="<?php echo function_exists('sbt_url') ? sbt_url($item['url']) : $item['url'] ?>"><?php echo $item['label'] ?></a>
    <?php if (!empty($item['sub'])): ?>
      <div class="sub-m">
        <?php foreach ($item['sub'] as $s): ?><a href="<?php echo function_exists('sbt_url') ? sbt_url($s['url']) : $s['url'] ?>"><?php echo $s['label'] ?></a><?php endforeach; ?>
      </div>
    <?php endif; ?>
  <?php endforeach; ?>
  <a class="wa" href="<?php echo $SITE['wa'] ?>"><?php echo $WA_SVG ?><?php echo $SITE['whatsapp_label'] ?? 'WhatsApp' ?></a>
</div>
