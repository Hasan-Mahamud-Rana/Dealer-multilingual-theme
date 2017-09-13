<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="large-12 medium-12 columns" role="main">
		<?php $the_query = new WP_Query( 'page_id=40' ); ?>
		<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
		<?php get_template_part( 'parts/loop', 'page' ); ?>
		<?php endwhile;  ?>
		</main>
	</div>
</div>
<?php get_template_part( 'parts/worthknowing', 'block' ); ?>
<?php get_template_part( 'parts/worthknowing', 'brochure' ); ?>
<?php get_template_part( 'parts/worthknowing', 'accordion' ); ?>
<?php get_footer(); ?>