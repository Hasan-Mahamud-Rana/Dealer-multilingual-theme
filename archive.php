<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
		<div id="content">
		<div id="inner-content" class="row">
				<main id="main" class="large-12 medium-12 columns" role="main">				
				<?php get_template_part( 'parts/loop', 'singleProduct' ); ?>
				<?php //get_template_part( 'parts/content', 'missing' ); ?>

				</main>
			</div>
		</div>
<?php get_footer(); ?>