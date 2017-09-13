<?php
add_action( 'init', 'create_custom_nyheder_post_type' );
/**
 * Register a Nyheder post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_nyheder_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Nyheders', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Nyheder', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Nyheders', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Nyheder', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'nyheder', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New Nyheder', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New Nyheder', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit Nyheder', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View Nyheder', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All Nyheders', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search Nyheders', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent Nyheder:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No suppliers found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No suppliers found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'nyheders' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_icon'          => 'dashicons-book',
  'taxonomies'         => array('category', 'post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'nyheders', $args );
}