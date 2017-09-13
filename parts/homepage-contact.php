 <?php 
$lang = get_bloginfo('language');
$lang = explode("-", $lang);

 $query = new WP_Query( array( 'order' => 'asc' , 'category_name' => 'contact-us-' . $lang[0] , 'post_status' => 'publish' , 'posts_per_page' => 1 ) ); ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
<div class="contact-block" style="background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
  <div class="row">
       <div class="small-12 medium-6 large-7 columns">
          &nbsp;
       </div>
       <div class="small-12 medium-5 large-4 columns contactInfo">
          <?php the_content (); ?>
       </div>
       <div class="small-12 medium-1 large-1 columns">
          &nbsp;
       </div>
   </div>
</div>
<?php endwhile;  wp_reset_postdata(); else : ?>
<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
<?php endif; ?>