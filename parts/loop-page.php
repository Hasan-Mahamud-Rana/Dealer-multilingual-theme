<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<header class="article-header">
		<?php

			if(get_field('profil_title')){
				echo '<h2 class="page-title">' . get_field('profil_title') . '</h2>';
			}
			else{
				the_title( '<h2 class="page-title">', '</h2>' ); 
			}	

			if(get_field('promo')){
				echo '<p class="promo">' . get_field('promo') . '</p>';
			}
		?>
	</header>
	<?php if ( has_post_thumbnail() ) { ?>
	<div class="pageFeaturedImage" style="height:200px;background-size: contain; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
	</div>
	<?php }?>
	<section class="entry-content" itemprop="articleBody">
		<?php the_content(); ?>
		<?php wp_link_pages(); ?>
	</section>

</article>