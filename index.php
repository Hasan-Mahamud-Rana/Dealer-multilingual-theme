<?php get_header(); ?>
<div id="content">
	<div id="inner-content" class="row">
		<?php //get_sidebar(); ?>
		<main id="main" class="small-12 columns" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/loop', 'page' ); ?>
		<?php endwhile; ?>
		<?php joints_page_navi(); ?>
		<?php else : ?>
		<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php endif; ?>
		</main>
	</div>
</div>
<?php get_footer(); ?>