<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<div id="content">
	<div id="inner-content" class="row fixedWidth">
		<main id="main" class="large-12 medium-12 columns" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/loop', 'nyheder' ); ?>
		<?php endwhile; else : ?>
		<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php endif; ?>
		</main> <!-- end #main -->
		</div> <!-- end #inner-content -->
		</div> <!-- end #content -->
<?php get_footer(); ?>