<div class="product-block">
	<div class="row small-up-1 medium-up-3 large-up-3 grid">
		<?php
			$lang = get_bloginfo('language');
			$lang = explode("-", $lang);
			$myposts = get_posts(array(
					'showposts' => -1,
					'post_type' => 'product',
					'tax_query' => array(
						array(
						'taxonomy' => 'product_catagory',
						'field' => 'slug',
						'terms' => array('hompro-' . $lang[0]))
					))
				);
				foreach ($myposts as $mypost) {
				$image = get_field('category_thumbnail_image', $mypost);	
				?>
				<div class="smal-12 columns productImageL effect-marley" style=" height:300px;background-size: cover; background-image: url(<?php echo $image['url']; ?>)">
					<figcaption>
					<h2><?php echo $mypost->post_title; ?></h2>
					<p><?php _e("MERE INFO", "termatech");?></p>			
					<a href="<?php echo get_field('force_product_page_link', $mypost);?>" rel="bookmark" title="Link to <?php echo $mypost->post_title; ?>"><?php _e("MERE INFO", "termatech");?></a>
					</figcaption>
				</div>
				<?php
				}
				?>
	</div>
</div>