<?php
function cptui_register_my_taxes_city() {

    defined( 'ABSPATH' ) || exit;
	/**
	 * Taxonomy: Citys.
	 */

	$labels = [
		"name" => __( "Citys", "understrap" ),
		"singular_name" => __( "City", "understrap" ),
		"menu_name" => __( "Citys", "understrap" ),
		"all_items" => __( "All Citys", "understrap" ),
		"edit_item" => __( "Edit City", "understrap" ),
		"view_item" => __( "View City", "understrap" ),
		"update_item" => __( "Update City name", "understrap" ),
		"add_new_item" => __( "Add new City", "understrap" ),
		"new_item_name" => __( "New City name", "understrap" ),
		"parent_item" => __( "Parent City", "understrap" ),
		"parent_item_colon" => __( "Parent City:", "understrap" ),
		"search_items" => __( "Search Citys", "understrap" ),
		"popular_items" => __( "Popular Citys", "understrap" ),
		"separate_items_with_commas" => __( "Separate Citys with commas", "understrap" ),
		"add_or_remove_items" => __( "Add or remove Citys", "understrap" ),
		"choose_from_most_used" => __( "Choose from the most used Citys", "understrap" ),
		"not_found" => __( "No Citys found", "understrap" ),
		"no_terms" => __( "No Citys", "understrap" ),
		"items_list_navigation" => __( "Citys list navigation", "understrap" ),
		"items_list" => __( "Citys list", "understrap" ),
	];

	$args = [
		"label" => __( "Citys", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => __('city', 'kks'), 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "city",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "city", [ "cats" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_city' );
