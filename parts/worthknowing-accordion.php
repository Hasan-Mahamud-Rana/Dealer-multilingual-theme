<div class="accordion-block">
	<div class="row small-up-1 medium-up-2 large-up-3">
		<div>
		<ul class="accordion" data-accordion data-allow-all-closed="true">
		<?php $query = new WP_Query( array( 'order' => 'asc' ,'post_type' => 'worthknowing' , 'post_status' => 'publish' , 'posts_per_page' => -1 ) ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<li class="accordion-navigation columns" data-options="deep_linking:true">
  	     	<a href="<?php the_slug();?>" myAttr="<?php the_slug();?>" role="tab" class="accordion-title" id="<?php the_slug();?>-heading" aria-controls="<?php the_slug();?>" ><?php the_title(); ?></a>

			<div id="<?php the_slug(); ?>" class="accordion-content" role="tabpanel" data-tab-content aria-labelledby="<?php the_slug();?>-heading">
				<?php
				if(get_field('promo')){
				echo '<p class="promo">' . get_field('promo') . '</p>';
			}
			if(get_field('worthing_knowing_title')){
				echo '<p class="innerTitle">' . get_field('worthing_knowing_title') . '</p>';
			}
			?>
			<div class="small-12 medium-12 columns">
			<?php 	if(get_field('worthing_knowing_full')){
				echo get_field('worthing_knowing_full') ;
			}
			?>
			</div>
			<div class="small-12 medium-6 columns">
			<?php 	if(get_field('worthing_knowing_left')){
				echo get_field('worthing_knowing_left') ;
			}
			?>
			</div>
			<div class="small-12 medium-6 columns">
			<?php 	if(get_field('worthing_knowing_right')){
				echo get_field('worthing_knowing_right') ;
			}
			?>
			</div>
			<div class="small-12 text-center columns">
				<?php the_content() ?>
				<hr>
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