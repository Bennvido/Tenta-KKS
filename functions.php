<?php
/**
 * UnderStrap functions and definitions
 *
 * @package understrap
 */

// Exit if accessed directly.
defined( 'ABSPATH' ) || exit;

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/load-more-posts.php',					// For load more posts.
	'/custom-post-cats.php',				// Load Custom Post Types Cats.
	'/custom-post-faqs.php',				// Load Custom Post Types Faqs.
	'/custom-post-about.php',				// Load Custom Post Types About us.
	'/custom-taxonomy-genders.php',			// Load Custom Taxonomy Genders.
	'/custom-taxonomy-citys.php',			// Load Custom Taxonomy Citys.
	'/acf.php',								// Load ACF Plugin.
	'/custom-fields-hero.php',				// Load Hero Fields.
	'/custom-fields-cats.php',				// Load Cats Metadata Fields.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker. Trying to get deeper navigation? Check out: https://github.com/understrap/understrap/issues/567.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
	'/deprecated.php',                      // Load deprecated functions.
);



foreach ( $understrap_includes as $file ) {
	require_once get_template_directory() . '/inc' . $file;
}
