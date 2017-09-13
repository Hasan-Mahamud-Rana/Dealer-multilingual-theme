<?php
add_action( 'init', 'create_custom_product_post_type' );
add_action( 'init', 'create_product_taxonomies', 0 );
function create_product_taxonomies() {
    register_taxonomy(
        'product_catagory',
        'product',
        array(
            'labels' => array(
                'name' => 'Product types',
                'add_new_item' => 'Add New Product types',
                'new_item_name' => "New Product types"

            ),
            'show_ui' => true,
            'show_tagcloud' => true,
            'hierarchical' => true,
            'show_admin_column' => true,
          'rewrite' => array(  'slug' => 'product','hierarchical' => true, 'with_front' => false ),
        )
    );
}

/**
 * Register a product post type.
 *
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */
function create_custom_product_post_type() {

/* Register our stylesheet. */
 $labels = array(
  'name'               => _x( 'Products', 'post type general name', 'your-plugin-textdomain' ),
  'singular_name'      => _x( 'product', 'post type singular name', 'your-plugin-textdomain' ),
  'menu_name'          => _x( 'Products', 'admin menu', 'your-plugin-textdomain' ),
  'name_admin_bar'     => _x( 'product', 'add new on admin bar', 'your-plugin-textdomain' ),
  'add_new'            => _x( 'Add New', 'product', 'your-plugin-textdomain' ),
  'add_new_item'       => __( 'Add New product', 'your-plugin-textdomain' ),
  'new_item'           => __( 'New product', 'your-plugin-textdomain' ),
  'edit_item'          => __( 'Edit product', 'your-plugin-textdomain' ),
  'view_item'          => __( 'View product', 'your-plugin-textdomain' ),
  'all_items'          => __( 'All products', 'your-plugin-textdomain' ),
  'search_items'       => __( 'Search products', 'your-plugin-textdomain' ),
  'parent_item_colon'  => __( 'Parent products:', 'your-plugin-textdomain' ),
  'not_found'          => __( 'No products found.', 'your-plugin-textdomain' ),
  'not_found_in_trash' => __( 'No products found in Trash.', 'your-plugin-textdomain' )
 );

 $args = array(
  'labels'             => $labels,
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'query_var'          => true,
  'rewrite'            => array( 'slug' => 'products' ),
  'capability_type'    => 'post',
  'has_archive'        => true,
  'hierarchical'       => true,
  'menu_icon'          => 'dashicons-book',
  'taxonomies'         => array('product_catagory', 'post_tag'),
  'menu_position'      => null,
  'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments', 'post-formats','page-attributes'  )
 );

 register_post_type( 'product', $args );
}