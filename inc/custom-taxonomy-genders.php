<?php
function cptui_register_my_taxes_gender() {

    defined( 'ABSPATH' ) || exit;
	/**
	 * Taxonomy: Genders.
	 */

	$labels = [
		"name" => __( "Genders", "understrap" ),
		"singular_name" => __( "Gender", "understrap" ),
		"menu_name" => __( "Genders", "understrap" ),
		"all_items" => __( "All Genders", "understrap" ),
		"edit_item" => __( "Edit Gender", "understrap" ),
		"view_item" => __( "View Gender", "understrap" ),
		"update_item" => __( "Update Gender name", "understrap" ),
		"add_new_item" => __( "Add new Gender", "understrap" ),
		"new_item_name" => __( "New Gender name", "understrap" ),
		"parent_item" => __( "Parent Gender", "understrap" ),
		"parent_item_colon" => __( "Parent Gender:", "understrap" ),
		"search_items" => __( "Search Genders", "understrap" ),
		"popular_items" => __( "Popular Genders", "understrap" ),
		"separate_items_with_commas" => __( "Separate Genders with commas", "understrap" ),
		"add_or_remove_items" => __( "Add or remove Genders", "understrap" ),
		"choose_from_most_used" => __( "Choose from the most used Genders", "understrap" ),
		"not_found" => __( "No Genders found", "understrap" ),
		"no_terms" => __( "No Genders", "understrap" ),
		"items_list_navigation" => __( "Genders list navigation", "understrap" ),
		"items_list" => __( "Genders list", "understrap" ),
	];

	$args = [
		"label" => __( "Genders", "understrap" ),
		"labels" => $labels,
		"public" => true,
		"publicly_queryable" => true,
		"hierarchical" => true,
		"show_ui" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"query_var" => true,
		"rewrite" => [ 'slug' => __('gender','kks'), 'with_front' => true,  'hierarchical' => true, ],
		"show_admin_column" => true,
		"show_in_rest" => true,
		"rest_base" => "gender",
		"rest_controller_class" => "WP_REST_Terms_Controller",
		"show_in_quick_edit" => false,
		];
	register_taxonomy( "gender", [ "cats" ], $args );
}
add_action( 'init', 'cptui_register_my_taxes_gender' );
