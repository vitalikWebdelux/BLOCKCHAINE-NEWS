<?php
/**
 * News Blockchain functions and definitions
 *
 * @package BN
 */
if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}
/**
 * Define constant
 */
$theme = wp_get_theme();

if ( ! empty( $theme['Template'] ) ) {
	$theme = wp_get_theme( $theme['Template'] );
}

if ( ! defined( 'DS' ) ) {
	define( 'DS', DIRECTORY_SEPARATOR );
}

define( 'SD_THEME_NAME', $theme['Name'] );
define( 'SD_THEME_SLUG', $theme['Template'] );
define( 'SD_THEME_VERSION', $theme['Version'] );
define( 'SD_THEME_DIR', get_template_directory() );
define( 'SD_THEME_URI', get_template_directory_uri() );
define( 'SD_THEME_IMAGE_URI', get_template_directory_uri() . '/assets/img' );
define( 'SD_INC_DIR', wp_normalize_path( SD_THEME_DIR . DS . 'inc') );

$news_blockchain_includes = array(
	// Base Theme
	'/theme-settings.php',                  // Initialize theme default settings.
	'/theme-setup.php',                           // Theme setup and custom theme supports.
	'/theme-widgets.php',                         // Register widget area.
	'/theme-enqueue.php',                         // Enqueue scripts and styles.
	'/theme-optimize.php',
	'/template-tags.php',                   // Custom template tags for this theme.
	'/theme-pagination.php',                      // Custom pagination for this theme.
	'/theme-shortcodes.php',                      // Custom pagination for this theme.
	'/theme-hooks.php',                           // Custom hooks.
	// '/send.php',                           // Custom hooks.v
	'/theme-extras.php',                          // Custom functions that act independently of the theme templates.
);

foreach ( $news_blockchain_includes as $file ) {
	// Retrieve the name of the highest priority template file that exists, optionally loading that file.
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

add_action( 'wp_ajax_my_action', 'my_action_callback' );
function my_action_callback() {
	$whatever = intval( $_POST['whatever'] );

	$whatever += 10;
	echo $whatever;

	wp_die(); // выход нужен для того, чтобы в ответе не было ничего лишнего, только то что возвращает функция
}