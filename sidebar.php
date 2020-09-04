<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package BN
 */

if ( ! is_active_sidebar( 'right_sidebar' ) ) {
	return;
}
?>

<aside id="secondary" class="widget-area">
	<!-- What to Wear: 9+ Cute Work  Outfits to Wear This Summer -->
	<?php dynamic_sidebar( 'right_sidebar' ); ?>
</aside><!-- #secondary -->
