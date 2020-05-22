<?php
function cptui_register_my_cpts_usp_faq() {

defined( 'ABSPATH' ) || exit;
/**
 * Post Type: FAQs.
 */

$labels = [
    "name" => __( "FAQs", "understrap" ),
    "singular_name" => __( "FAQ", "understrap" ),
    "menu_name" => __( "FAQs", "understrap" ),
    "all_items" => __( "All FAQs", "understrap" ),
    "add_new" => __( "Add new", "understrap" ),
    "add_new_item" => __( "Add new FAQ", "understrap" ),
    "edit_item" => __( "Edit FAQ", "understrap" ),
    "new_item" => __( "New FAQ", "understrap" ),
    "view_item" => __( "View FAQ", "understrap" ),
    "view_items" => __( "View FAQs", "understrap" ),
    "search_items" => __( "Search FAQs", "understrap" ),
    "not_found" => __( "No FAQs found", "understrap" ),
    "not_found_in_trash" => __( "No FAQs found in trash", "understrap" ),
    "parent" => __( "Parent FAQ:", "understrap" ),
    "featured_image" => __( "Featured image for this FAQ", "understrap" ),
    "set_featured_image" => __( "Set featured image for this FAQ", "understrap" ),
    "remove_featured_image" => __( "Remove featured image for this FAQ", "understrap" ),
    "use_featured_image" => __( "Use as featured image for this FAQ", "understrap" ),
    "archives" => __( "FAQ archives", "understrap" ),
    "insert_into_item" => __( "Insert into FAQ", "understrap" ),
    "uploaded_to_this_item" => __( "Upload to this FAQ", "understrap" ),
    "filter_items_list" => __( "Filter FAQs list", "understrap" ),
    "items_list_navigation" => __( "FAQs list navigation", "understrap" ),
    "items_list" => __( "FAQs list", "understrap" ),
    "attributes" => __( "FAQs attributes", "understrap" ),
    "name_admin_bar" => __( "FAQ", "understrap" ),
    "item_published" => __( "FAQ published", "understrap" ),
    "item_published_privately" => __( "FAQ published privately.", "understrap" ),
    "item_reverted_to_draft" => __( "FAQ reverted to draft.", "understrap" ),
    "item_scheduled" => __( "FAQ scheduled", "understrap" ),
    "item_updated" => __( "FAQ updated.", "understrap" ),
    "parent_item_colon" => __( "Parent FAQ:", "understrap" ),
];

$args = [
    "label" => __( "FAQs", "understrap" ),
    "labels" => $labels,
    "description" => "Create three posts that will be shown on the front page.",
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
    "rewrite" => [ "slug" => "usp_faq", "with_front" => true ],
    "query_var" => true,
    "supports" => [ "title", "editor" ],
];

register_post_type( "usp_faq", $args );
}

add_action( 'init', 'cptui_register_my_cpts_usp_faq' );
