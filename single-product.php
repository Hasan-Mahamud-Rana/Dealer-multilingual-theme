<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<div class="gray-button">
	<div class="row fixedWidth">
		<div class="small-12 medium-12 large-12 columns large-centered header-nav">
			<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
			<div class="menu-devider">&nbsp;</div>
			<?php wp_nav_menu( array( 'theme_location' => 'header-service-menu' ) ); ?>
		</div>
	</div>
</div>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<section class="entry-content" itemprop="articleBody">
	<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
	<?php get_template_part( 'parts/loop', 'singleProduct' ); ?>
	<?php endwhile; else : ?>
	<?php get_template_part( 'parts/content', 'missing' ); ?>
	<?php endif; ?>
	</section>
</article>
<!-- end article -->
<?php get_footer(); ?>