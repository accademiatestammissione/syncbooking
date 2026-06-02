<?php
$PAGE = 'houses';
require __DIR__ . '/inc/header.php';

$slug = function_exists( 'get_post_field' ) && function_exists( 'get_queried_object_id' ) ? get_post_field( 'post_name', get_queried_object_id() ) : '';
$pages = function_exists( 'sbt_page_templates' ) ? sbt_page_templates() : array();
$content_key = isset( $pages[ $slug ]['content_key'] ) ? $pages[ $slug ]['content_key'] : '';
$p = $content_key && isset( $C[ $content_key ] ) ? $C[ $content_key ] : $C['house2'];

require __DIR__ . '/inc/house-detail.php';
require __DIR__ . '/inc/footer.php';
