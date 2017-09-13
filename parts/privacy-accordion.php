<div class="accordion-block">
	<div class="row small-up-1 medium-up-2 large-up-3">
		<div>
		<ul class="accordion" data-accordion data-allow-all-closed="true">
		<?php $query = new WP_Query( array( 'order' => 'asc' ,'post_type' => 'privacy' , 'post_status' => 'publish' , 'posts_per_page' => -1 ) ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<li class="accordion-navigation columns">
  	     	<a href="#<?php the_ID();?>" role="tab" class="accordion-title" id="<?php the_ID();?>-heading" aria-controls="<?php the_ID();?>"><?php the_title(); ?></a> 
			
			<div id="<?php the_ID(); ?>" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="<?php the_ID();?>-heading">
			<div class="small-12 columns">
				<?php the_content() ?>
			</div>
			</div>
		</li>
		<?php endwhile;  wp_reset_postdata(); else : ?>
		<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
		<?php endif; ?>
		</ul>
		</div>
	</div>
</div>