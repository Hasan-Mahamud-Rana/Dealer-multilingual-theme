<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<?php $term = get_term_by( 'slug', get_query_var( 'term' ), get_query_var( 'taxonomy' ) );?>
<?php get_template_part( 'parts/product', 'menus' ); ?>
<article id="post-<?php the_ID(); ?>" <?php post_class(''); ?> role="article" itemscope itemtype="http://schema.org/WebPage">
	<section class="entry-content " itemprop="articleBody">
		<div class="row gray">
			<?php
			$image = get_field('category_image');
			if( !empty($image) ): ?>
			<div class="small-12 medium-3 large-3 columns categoryProductImage" style="background-image: url(<?php echo $image['url']; ?>)">
			</div>
			<?php endif; ?>
			<div class="small-12 medium-9 large-9 columns">
				<header class="article-header">
					<h1 class="entry-title single-title">
					<?php

					if(get_field('additional_title_cat')){
						echo get_field('additional_title_cat');
					}
					else{
						echo $term->name;
					}
					?>
					</h1>
				</header>
				<?php
				if(get_field('promo_product')){
						echo '<p class="promo">'.get_field('promo_product').'</p>';
					}
				?>
				<?php
				if(get_field('product_description')){
						echo get_field('product_description');
					}
				?>
			</div>
		</div>
		<?php if(get_field('product_category_gallery')):?>
		<div class="small-12 medium-12 large-12 columns top-space">
			<?php
				echo '<div class="pPhotoSlider"><div class="small-12" id="gallery">' . get_field('product_category_gallery'). '</div></div>';
			?>
		</div>
		<?php endif;?>
		<?php if(get_field('others_description1')):?>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns top-space">
				<?php
					echo get_field('others_description1');
				?>
			</div>
		</div>
		<?php endif;?>
		<?php if(get_field('others_description2')):?>
		<div class="row otherdesc2">
			<div class="small-12 medium-12 large-12 columns top-space">
				<?php
					echo get_field('others_description2');
				?>
			</div>
		</div>
		<?php endif;?>
		<?php if(get_field('others_accordion_description')):?>
		<div class="accordion-block">
			<div class="row small-up-1 medium-up-2 large-up-3">
				<?php echo get_field('others_accordion_description');?>
			</div>
		</div>
		<?php endif;?>
		<?php if(get_field('monitoring')|| get_field('watch_vedio_link')):?>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns top-space">
				<div class="tables">
					<ul id="sp-tabs" class="tabs" data-tabs="">
						<li class="tabs-title"><a href="#sp1" class="button"><?php _e("MONTERING", "termatech");?></a></li>
						<li class="tabs-title"><a href="#sp2" class="button"><?php _e("SE VIDEO", "termatech");?></a></li>
					</ul>
				</div>
				<div class="tabs-content" data-tabs-content="sp-tabs">
					<div id="sp1" class="tabs-panel">
						<?php
						if(get_field('monitoring')){
								echo get_field('monitoring');
							}
						?>
					</div>
					<div id="sp2" class="tabs-panel">
						<?php
						if(get_field('watch_vedio_link')){
								echo get_field('watch_vedio_link');
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<?php endif;?>
		<?php if(get_field('product_category_specification')|| get_field('product_category_more_information') || get_field('product_category_download')):?>
		<div class="row">
			<div class="small-12 medium-12 large-12 columns top-space">
				<div class="tables">
					<ul id="three-tabs" class="tabs" data-tabs="">
						<li class="tabs-title"><a href="#three1" class="button"><?php _e("SPECIFICATIONER", "termatech");?></a></li>
						<li class="tabs-title"><a href="#three2" class="button"><?php _e("MERE INFO", "termatech");?></a></li>
						<li class="tabs-title"><a href="#three3" class="button"><?php _e("DOWNLOAD", "termatech");?></a></li>
					</ul>
				</div>
				<div class="tabs-content" data-tabs-content="three-tabs">
					<div id="three1" class="tabs-panel">
						<?php
						if(get_field('product_category_specification')){
								echo get_field('product_category_specification');
							}
						?>
					</div>
					<div id="three2" class="tabs-panel">
						<?php
						if(get_field('product_category_more_information')){
								echo get_field('product_category_more_information');
							}
						?>
					</div>
					<div id="three3" class="tabs-panel">
						<?php
						if(get_field('product_category_download')){
								echo get_field('product_category_download');
							}
						?>
					</div>
				</div>
			</div>
		</div>
		<?php endif;?>
		<?php if(get_field('related_products')):?>
		<div class="row small-up-2 medium-up-4 large-up-6 pThumb">
			<?php
			$posts = get_field('related_products');
			
			if( $posts ): ?>
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			<?php //echo $post->guid;
			setup_postdata($post);

			?>
			<div class="column text-center myProduct" myAttr="<?php echo $post->post_name; ?>">
    <a class="<?php echo $post->post_name; ?> pImgClick" href="/<?php echo $post->post_name; ?>" data-name="<?php echo $post->post_name; ?>" style="background-size: contain; background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)"></a>
    <a class="<?php echo $post->post_name; ?>" href="/<?php echo $post->post_name; ?>" data-name="<?php echo $post->post_name; ?>">
    <?php //the_title();
    $titleActual = explode("-", $post->post_title);
    echo $titleActual[0]; // removed '-xx'
    //echo $post->post_title;?></a>
   </div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
		</div>
		<?php endif;?>
		<div>
			<?php
			if( $posts ): ?>
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			<?php setup_postdata($post);?>
			<a name="<?php echo $post->post_name; ?>"  ></a>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
		</div>
		<div class="pContent">
			<?php
			if( $posts ): ?>
			<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
			<?php setup_postdata($post);?>
			<div id="<?php echo $post->post_name;?>_b">
				<div id="content">
					<?php
					$the_slug= $post->post_name;
					$args = array(
					'name' => $the_slug,
					'post_type' => 'product');
					$query = new WP_Query($args);
					?>
					<?php if ( $query->have_posts() ) : while ( $query->have_posts() ) : $query->the_post(); ?>
					<?php get_template_part( 'parts/single', 'bodycontent' ); ?>
					<?php endwhile;  wp_reset_postdata(); else : ?>
					<?php get_template_part( 'parts/content', 'missing' ); ?>
					<?php endif; ?>
				</div>
				<?php get_template_part( 'parts/single', 'gallery' ); ?>
				<?php get_template_part( 'parts/single', 'specification' ); ?>
			</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif; ?>
		</div>
	</section>
	</article> <!-- end article -->
	<?php get_footer(); ?>