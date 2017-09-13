<?php
// Theme support options
require_once(get_template_directory().'/assets/functions/theme-support.php');

// WP Head and other cleanup functions
require_once(get_template_directory().'/assets/functions/cleanup.php');

// Register scripts and stylesheets
require_once(get_template_directory().'/assets/functions/enqueue-scripts.php');

// Register custom menus and menu walkers
require_once(get_template_directory().'/assets/functions/menu.php');

// Register sidebars/widget areas
require_once(get_template_directory().'/assets/functions/sidebar.php');

// Makes WordPress comments suck less
require_once(get_template_directory().'/assets/functions/comments.php');

// Replace 'older/newer' post links with numbered navigation
require_once(get_template_directory().'/assets/functions/page-navi.php');

// Adds support for multiple languages
require_once(get_template_directory().'/assets/translation/translation.php');

// Remove 4.2 Emoji Support
// require_once(get_template_directory().'/assets/functions/disable-emoji.php');

// Adds site styles to the WordPress editor
//require_once(get_template_directory().'/assets/functions/editor-styles.php');

// Related post function - no need to rely on plugins
// require_once(get_template_directory().'/assets/functions/related-posts.php');

// Use this as a template for custom post types
// require_once(get_template_directory().'/assets/functions/custom-post-type.php');
require_once(get_template_directory().'/assets/functions/custom-post-product.php');
require_once(get_template_directory().'/assets/functions/custom-post-supplier.php');
require_once(get_template_directory().'/assets/functions/custom-post-slider.php');
require_once(get_template_directory().'/assets/functions/custom-post-worthknowing.php');
require_once(get_template_directory().'/assets/functions/custom-post-nyheder.php');
require_once(get_template_directory().'/assets/functions/custom-post-privacy.php');
// Customize the WordPress login menu
// require_once(get_template_directory().'/assets/functions/login.php');

// Customize the WordPress admin
// require_once(get_template_directory().'/assets/functions/admin.php');

/**
 * Loads the child theme textdomain.
 */
if( ! function_exists('tagpages_register_taxonomy') ){
    function tagpages_register_taxonomy()
    {
        register_taxonomy_for_object_type('post_tag', 'page');
    }
    add_action('admin_init', 'tagpages_register_taxonomy');
}

if( ! function_exists('tagpages_display_tagged_pages_archive') ){
    function tagpages_display_tagged_pages_archive(&$query)
    {
        if ( $query->is_archive && $query->is_tag ) {
            $q = &$query->query_vars;
            $q['post_type'] = 'any';
        }
    }
    add_action('pre_get_posts', 'tagpages_display_tagged_pages_archive');
}
add_filter( 'wpcf7_support_html5_fallback', '__return_true' );


function the_slug($echo=true){
  $slug = basename(get_permalink());
  do_action('before_slug', $slug);
  $slug = apply_filters('slug_filter', $slug);
  if( $echo ) echo $slug;
  do_action('after_slug', $slug);
  return $slug;
}