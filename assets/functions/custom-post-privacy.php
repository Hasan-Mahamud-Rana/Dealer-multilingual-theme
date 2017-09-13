<?php
add_action( 'init', 'create_custom_privacy_post_type' );
/**
 * Register a privacy post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_privacy_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Privacy', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'Privacy', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Privacy', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'Privacy', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'Privacy', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New Privacy', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New Privacy', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit Privacy', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View Privacy', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All Privacy', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search Privacy', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent Privacy:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No Privacy found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No Privacy found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'privacy' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_icon'          => 'dashicons-book',
  'taxonomies'         => array('category', 'post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'privacy', $args );
}