<div class="product-block">
	<div class="row small-up-1 medium-up-2 large-up-3 grid">
		<?php $query = new WP_Query( array( 'order' => 'asc' , 'category_name' => 'featured','post_type' => 'worthknowing' , 'post_status' => 'publish' , 'posts_per_page' => -1 ) ); ?>
		<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
		<div class="smal-12 columns productImage effect-marley <?php the_slug();?>" data-id="<?php the_slug();?>" style="height:305px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
 						<figcaption>
							<?php the_title('<h2>','</h2>') ; ?>
							<p><?php _e("MERE INFO", "termatech");?></p>
							<a href="<?php the_slug();?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>" role="tab" class="accordion-title" id="<?php the_slug();?>-heading" aria-controls="<?php the_slug();?>"><?php _e("MERE INFO", "termatech");?></a>
						</figcaption>
					</div>
		<?php endwhile;  wp_reset_postdata(); else : ?>
		<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
		<?php endif; ?>
	</div>
</div>