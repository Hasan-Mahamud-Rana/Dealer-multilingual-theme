<div class="small-12 slideWrapper" style="display: none;">
  <div class="slide" >
    <?php $query = new WP_Query( 'order=asc&post_type=slide&post_status=publish&paged='. get_query_var('paged')); ?>
    <?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
    <div class="slideHeight" style="background-size: cover; background-repeat: no-repeat; background-position: center center; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
      <a href="<?php the_field('page_link'); ?>" class="slideLink">
        <div class="slideCaption">
          <?php the_title('<h2 class="sliderHdline">' , '</h2>'); ?>
          <?php the_content (); ?>
          <span><?php the_excerpt (); ?></span>
        </div></a>
      </div>
      <?php endwhile;  wp_reset_postdata(); else : ?>
      <?php _e( 'Sorry, no posts matched your criteria.' ); ?>
      <?php endif; ?>
    </div>
  </div>
  <a class="arrow-wrap" onclick="jQuery('html, body').animate({scrollTop: jQuery('#content').offset().top },500);"><span class="arrow"></span></a>