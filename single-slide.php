<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<div id="content">
		<div id="inner-content" class="row">
				<main id="main" class="large-12 medium-12 text-center columns" role="main">
				<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
					<h1><?php the_title();?></h1>
					<?php the_content(); ?>
					<div class="small-12 columns" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>);height: 842px;">
					</div>
				<?php endwhile; else : ?>
				<?php get_template_part( 'parts/content', 'missing' ); ?>
				<?php endif; ?>
				</main>
		</div>
</div>
<?php get_footer(); ?>