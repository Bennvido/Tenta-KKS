<?php
function cptui_register_my_cpts_cats() {

defined( 'ABSPATH' ) || exit;
/**
 * Post Type: cats.
 */

$labels = [
    "name" => __( "cats", "understrap" ),
    "singular_name" => __( "cat", "understrap" ),
    "menu_name" => __( "Add new cat", "understrap" ),
    "all_items" => __( "All cats", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new cat", "understrap" ),
    "edit_item" => __( "Edit cat", "understrap" ),
    "new_item" => __( "New cat", "understrap" ),
    "view_item" => __( "View cat", "understrap" ),
    "view_items" => __( "View cats", "understrap" ),
    "search_items" => __( "Search cats", "understrap" ),
    "not_found" => __( "No cats found", "understrap" ),
    "not_found_in_trash" => __( "No cats found in trash", "understrap" ),
    "parent" => __( "Parent cat:", "understrap" ),
    "featured_image" => __( "Featured image for this cat", "understrap" ),
    "set_featured_image" => __( "Set featured image for this cat", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this cat", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this cat", "understrap" ),
    "archives" => __( "cat archives", "understrap" ),
    "insert_into_item" => __( "Insert into cat", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this cat", "understrap" ),
    "filter_items_list" => __( "Filter cats list", "understrap" ),
    "items_list_navigation" => __( "cats list navigation", "understrap" ),
    "items_list" => __( "cats list", "understrap" ),
    "attributes" => __( "cats attributes", "understrap" ),
    "name_admin_bar" => __( "cat", "understrap" ),
    "item_published" => __( "cat published", "understrap" ),
    "item_published_privately" => __( "cat published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "cat reverted to draft.", "understrap" ),
    "item_scheduled" => __( "cat scheduled", "understrap" ),
    "item_updated" => __( "cat updated.", "understrap" ),
    "parent_item_colon" => __( "Parent cat:", "understrap" ),
];

$args = [
    "label" => __( "cats", "understrap" ),
    "labels" => $labels,
    "description" => "Add news cats.",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => true,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => [ "slug" => __('cats', 'kks'), "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "custom-fields" ],
];

register_post_type( "cats", $args );
}

add_action( 'init', 'cptui_register_my_cpts_cats' );
