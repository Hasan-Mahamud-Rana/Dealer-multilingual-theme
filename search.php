<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<div id="content">
	<div id="inner-content" class="row fixedWidth">
		<main id="main" class="small-12 columns" role="main">
		<header>
			<h1 class="archive-title"><?php _e( 'Søgeresultater for:', 'jointswp' ); ?> <?php echo esc_attr(get_search_query()); ?></h1>
		</header>
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/page', 'search' ); ?>
		<?php endwhile; ?>
		<div class="small-12">
			<div class="navigation text-center">
				<?php if (function_exists("pagination")) {
				pagination($query->max_num_pages);
				} ?>
			</div>
		</div>
		<?php else : ?>
		<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php endif; ?>
		</main>
	</div>
</div>
<?php get_footer(); ?>