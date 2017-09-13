<?php
/*
Template Name: Worthknowing
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="large-12 medium-12 columns" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/loop', 'page' ); ?>
		<?php endwhile; endif; ?>
		</main>
	</div>
</div>
<?php get_template_part( 'parts/worthknowing', 'block' ); ?>
<?php get_template_part( 'parts/worthknowing', 'brochure' ); ?>
<?php get_template_part( 'parts/worthknowing', 'accordion' ); ?>
<?php get_footer(); ?>