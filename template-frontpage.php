<?php
/*
Template Name: Frontpage
*/
get_header(); 
?>
<?php get_template_part( 'parts/homepage', 'slider' ); ?>

<div id="content">
	<div id="inner-content" class="row fixedWidth">
		<main id="main" class="small-12 columns" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/loop', 'homepage' ); ?>
		<?php endwhile; ?>
		<?php joints_page_navi(); ?>
		<?php else : ?>
		<?php get_template_part( 'parts/content', 'missing' ); ?>
		<?php endif; ?>
		</main> <!-- end #main -->
	</div> <!-- end #inner-content -->
</div> <!-- end #content -->
<?php get_template_part( 'parts/homepage', 'product' ); ?>
<?php get_template_part( 'parts/homepage', 'findForhandler' ); ?>
<?php get_template_part( 'parts/homepage', 'ceo' ); ?>
<?php //get_template_part( 'parts/homepage', 'supplier' ); ?>
<?php get_footer(); ?>