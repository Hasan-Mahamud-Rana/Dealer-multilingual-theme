<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<header class="article-header">
		<?php
			the_title( '<h1 class="page-title">', '</h1>' );
			if(get_field('promo')){
				echo '<p class="promo">' . get_field('promo') . '</p>';
			}
		?>
	</header>
	<?php if ( has_post_thumbnail() ) { ?>
	<div class="pageFeaturedImage" style="height:200px;background-size: cover; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
	</div>
	<?php }?>
	<section class="entry-content" itemprop="articleBody">
		<div class="row">
			<div class="small-12 medium-6 large-6 columns page-excerpt"><?php the_excerpt(); ?></div>
			<div class="small-12 medium-6 large-6 columns pageContent"><?php the_content(); ?></div>
		</div>
	</section>
</article>