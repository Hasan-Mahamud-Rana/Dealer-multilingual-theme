<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<div class="row">
		<div class="small-12 large-6 medium-6 columns">
			<header class="article-header">
				<?php
				if(get_field('page_heading')){
				echo '<h2 class="page-title-header">' . get_field('page_heading') . '</h2>';
				}
				?>
			</header>
			<?php if(get_field('promo')){
			echo '<p class="promo">' . get_field('promo') . '</p><p>' . get_field('additional_text1') . '</p>';
			}?>
		</div>
		<div class="small-12 large-6 medium-6 columns">
			<?php if(get_field('promo')){
			echo '<p>' . get_field('additional_text2') . '</p>';
			}?>
		</div>
	</div>
</article>
<div class="row pNav">
	<div class="small-12 large-12 medium-12 columns header-nav">
		<?php wp_nav_menu( array( 'theme_location' => 'header-menu' ) ); ?>
		<div class="menu-devider">&nbsp;</div>
		<?php wp_nav_menu( array( 'theme_location' => 'header-service-menu' ) ); ?>
	</div>
</div>