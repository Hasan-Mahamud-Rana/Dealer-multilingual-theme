<?php
/*
Template Name: MILJØ Page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<div id="content">
	<div id="inner-content" class="row">
		<main id="main" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
			<div class="small-12 medium-3 columns">
				<?php if ( has_post_thumbnail() ) { ?>
				<div class="pageProductImage" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
				</div>
			</div>
			<?php }?>
			<div class="small-12 medium-9 columns">
			<section class="entry-content" itemprop="articleBody"
				<header class="article-header">
					<?php
						the_title( '<h2 class="page-title">', '</h2>' );
						if(get_field('promo')){
							echo '<p class="promo">' . get_field('promo') . '</p>';
						}
					?>
				</header>
				<?php the_content(); ?>
				<?php wp_link_pages(); ?>
			</section>
			</div>
		</article>
		<?php endwhile; endif; ?>
		</main>
	</div>
</div>
<div class="form-content row">
	<div class="small-12 medium-9 columns">
		<?php
		if(get_field('miljo_bottom_content')){
				$field_name = "miljo_bottom_content";
				$field = get_field_object($field_name);
				//echo '<h1 class="page-title">'.$field['label'].'</h1>';
				echo $field['value'];
			}
		?>
	</div>

		<?php
		$image = get_field('miljo_bottom_content_image');
		if( !empty($image) ): ?>
		<div class="small-12 medium-3 large-3 columns categoryProductImage" style="background-image: url(<?php echo $image['url']; ?>)">
			</div>
		<?php endif; ?>

</div>
<?php get_footer(); ?>