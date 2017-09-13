<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<div class="row fixedWidth">
	<div class="small-12 medium-12 large-12 columns large-centered header-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		<?php wp_nav_menu( array( 'theme_location' => 'header-service-menu' ) ); ?>
	</div>
</div>
<div id="content">
		<div id="inner-content" class="row">
				<main id="main" class="large-12 medium-12 columns" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
				<?php get_template_part( 'parts/loop', 'singleProduct' ); ?>
				<?php endwhile; else : ?>
				<?php get_template_part( 'parts/content', 'missing' ); ?>
				<?php endif; ?>
				</main>
		</div>
<?php get_template_part( 'parts/single', 'specification' ); ?>
</div>
<?php get_footer(); ?>