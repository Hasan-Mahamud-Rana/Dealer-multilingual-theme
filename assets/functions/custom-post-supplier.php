<?php
add_action( 'init', 'create_custom_supplier_post_type' );
/**
 * Register a supplier post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_supplier_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Suppliers', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'supplier', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Suppliers', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'supplier', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'supplier', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New supplier', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New supplier', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit supplier', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View supplier', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All suppliers', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search suppliers', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent suppliers:', 'your-plugin-textdomain' ),
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
  'rewrite'            => array( 'slug' => 'suppliers' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => false,
  'menu_icon'          => 'dashicons-book',
  'taxonomies'         => array('category', 'post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats' )
 );

 register_post_type( 'supplier', $args );
}