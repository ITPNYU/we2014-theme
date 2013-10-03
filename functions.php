/** 
 * custom functionality for we2014-theme
 *
 * @package ITPNYU 
 * @subpackage we2014-theme
 * @since we20140theme 0.1
 *
 */

<?php
function favicon_link() {
  echo '<link rel="shortcut icon" type="image/x-icon" href="' . get_stylesheet_directory_uri()  . '/images/favicon/favicon.ico" />' . "\n";
}
add_action( 'wp_head', 'favicon_link' );


/**
 * Register our sidebars and widgetized areas.
 *
 */
function credits_widget_init() {

	register_sidebar( array(
		'name' => 'Credits Widget Area',
		'id' => 'credits',
		'before_widget' => '<div>',
		'after_widget' => '</div>',
		'before_title' => '<h2 class="rounded">',
		'after_title' => '</h2>',
	) );
}
add_action( 'widgets_init', 'credits_widget_init' );
?>
