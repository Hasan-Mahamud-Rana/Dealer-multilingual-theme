<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<section class="entry-content" style="overflow: hidden;" itemprop="articleBody">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
	<?php endwhile; else : ?>
	<?php get_template_part( 'parts/content', 'missing' ); ?>
	<?php endif; ?>
	</section>
</article>
<!-- end article -->
<?php get_footer(); ?>