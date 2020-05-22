<?php
function cptui_register_my_cpts_about_us() {

defined( 'ABSPATH' ) || exit;
/**
 * Post Type: About us.
 */

$labels = [
    "name" => __( "About us", "understrap" ),
    "singular_name" => __( "About us", "understrap" ),
    "menu_name" => __( "About us", "understrap" ),
    "all_items" => __( "All About us", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new About us", "understrap" ),
    "edit_item" => __( "Edit About us", "understrap" ),
    "new_item" => __( "New About us", "understrap" ),
    "view_item" => __( "View About us", "understrap" ),
    "view_items" => __( "View About us", "understrap" ),
    "search_items" => __( "Search About us", "understrap" ),
    "not_found" => __( "No About us found", "understrap" ),
    "not_found_in_trash" => __( "No About us found in trash", "understrap" ),
    "parent" => __( "Parent About us:", "understrap" ),
    "featured_image" => __( "Featured image for this About us", "understrap" ),
    "set_featured_image" => __( "Set featured image for this About us", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this About us", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this About us", "understrap" ),
    "archives" => __( "About us archives", "understrap" ),
    "insert_into_item" => __( "Insert into About us", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this About us", "understrap" ),
    "filter_items_list" => __( "Filter About us list", "understrap" ),
    "items_list_navigation" => __( "About us list navigation", "understrap" ),
    "items_list" => __( "About us list", "understrap" ),
    "attributes" => __( "About us attributes", "understrap" ),
    "name_admin_bar" => __( "About us", "understrap" ),
    "item_published" => __( "About us published", "understrap" ),
    "item_published_privately" => __( "About us published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "About us reverted to draft.", "understrap" ),
    "item_scheduled" => __( "About us scheduled", "understrap" ),
    "item_updated" => __( "About us updated.", "understrap" ),
    "parent_item_colon" => __( "Parent About us:", "understrap" ),
];

$args = [
    "label" => __( "About us", "understrap" ),
    "labels" => $labels,
    "description" => "Write something about the company.",
    "public" => true,
    "publicly_queryable" => true,
    "show_ui" => true,
    "show_in_rest" => true,
    "rest_base" => "",
    "rest_controller_class" => "WP_REST_Posts_Controller",
    "has_archive" => false,
    "show_in_menu" => true,
    "show_in_nav_menus" => true,
    "delete_with_user" => false,
    "exclude_from_search" => false,
    "capability_type" => "post",
    "map_meta_cap" => true,
    "hierarchical" => true,
    "rewrite" => [ "slug" => "about_us", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor" ],
];

register_post_type( "about_us", $args );
}

add_action( 'init', 'cptui_register_my_cpts_about_us' );
