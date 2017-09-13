<div class="suppliers-block">
	<div class="row">
		<div class="small-12 columns">
			<h2 class="pHeadline"><span>Selected</span> Suppliers</h2>
			<div class="row small-up-1 medium-up-2 large-up-4" data-equalizer>
				<?php $query = new WP_Query( 'order=asc&post_type=supplier&post_status=publish&paged='. get_query_var('paged')); ?>
				<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
				<div class="columns s-block" data-equalizer-watch>
					<a href="<?php the_permalink() ?>" rel="bookmark" title="Link to <?php the_title_attribute(); ?>"><div class="smal-12" style="height:180px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></div>
					<div class="smal-12 midBlock-bg">
						<h4><?php the_title() ; ?></h4>
					</div></a>
				</div>
				<?php endwhile;  wp_reset_postdata(); else : ?>
				<?php _e( 'Sorry, no posts matched your criteria.' ); ?>
				<?php endif; ?>
			</div>
		</div>
	</div>
</div>