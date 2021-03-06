<?php
/**
 * POST TYPES
 *
 * @link  http://codex.wordpress.org/Function_Reference/register_post_type
 */

// Add your custom post types here...

// Register Custom Post Type
function guestspot_post_type()
{
    $labels = array(
        'name' => _x('Guestspots', 'Post Type General Name', 'text_domain'),
        'singular_name' => _x('Guestspot', 'Post Type Singular Name', 'text_domain'),
        'menu_name' => __('Guestspots', 'text_domain'),
        'name_admin_bar' => __('Guestspot', 'text_domain'),
        'archives' => __('Item Archives', 'text_domain'),
        'attributes' => __('Item Attributes', 'text_domain'),
        'parent_item_colon' => __('Parent Item:', 'text_domain'),
        'all_items' => __('All Items', 'text_domain'),
        'add_new_item' => __('Add New Item', 'text_domain'),
        'add_new' => __('Add New', 'text_domain'),
        'new_item' => __('New Item', 'text_domain'),
        'edit_item' => __('Edit Item', 'text_domain'),
        'update_item' => __('Update Item', 'text_domain'),
        'view_item' => __('View Item', 'text_domain'),
        'view_items' => __('View Items', 'text_domain'),
        'search_items' => __('Search Item', 'text_domain'),
        'not_found' => __('Not found', 'text_domain'),
        'not_found_in_trash' => __('Not found in Trash', 'text_domain'),
        'featured_image' => __('Featured Image', 'text_domain'),
        'set_featured_image' => __('Set featured image', 'text_domain'),
        'remove_featured_image' => __('Remove featured image', 'text_domain'),
        'use_featured_image' => __('Use as featured image', 'text_domain'),
        'insert_into_item' => __('Insert into item', 'text_domain'),
        'uploaded_to_this_item' => __('Uploaded to this item', 'text_domain'),
        'items_list' => __('Items list', 'text_domain'),
        'items_list_navigation' => __('Items list navigation', 'text_domain'),
        'filter_items_list' => __('Filter items list', 'text_domain'),
    );
    $args = array(
        'label' => __('Guestspot', 'text_domain'),
        'description' => __('Guestspot Description', 'text_domain'),
        'labels' => $labels,
        'supports' => array('title', 'editor', "author"),
        'taxonomies' => array('category', 'guestspot'),
        'hierarchical' => false,
        'public' => true,
        'show_ui' => true,
        'show_in_menu' => true,
        'menu_position' => 5,
        'show_in_admin_bar' => true,
        'show_in_nav_menus' => true,
        'can_export' => true,
        'has_archive' => true,
        "author" => true,
        "post_author" => true,
        'exclude_from_search' => false,
        'publicly_queryable' => true,
        'capabilities' => array(
            'publish_posts' => 'publish_guestspot',
            'edit_posts' => 'edit_guestspot',
            'edit_others_posts' => 'edit_others_guestspot',
            'delete_posts' => 'delete_guestspot',
            'delete_others_posts' => 'delete_others_guestspot',
            'read_private_posts' => 'read_private_guestspot',
            'edit_post' => 'edit_guestspot',
            'delete_post' => 'delete_guestspot',
            'read_post' => 'read_guestspot',
        ),
        'map_meta_cap' => false,
        'show_in_rest' => true,
        'rest_base' => 'guestspots-api',
        'rest_controller_class' => 'WP_REST_Posts_Controller',
        'template lock' => 'all',
        'template' => array(
            array('core/paragraph', array(
                'placeholder' => 'Add adventure entry',
            )),
        ),
    );
    register_post_type('guestspot', $args);
}
add_action('init', 'guestspot_post_type', 0);