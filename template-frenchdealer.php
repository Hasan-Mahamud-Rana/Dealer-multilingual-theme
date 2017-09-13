<?php
/*
Template Name: Dealer
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<div id="content">
	<div id="inner-content" class="row fixedWidth">
		<main id="main" class="small-12 columns" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/dealer', 'details' ); ?>
		<?php endwhile; endif; ?>
		</main>
	</div>
</div>
<?php get_footer(); ?>