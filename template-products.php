<?php
/*
Template Name: Products
*/
?>
<?php 
get_header(); 
$lang = get_bloginfo('language');
$lang = explode("-", $lang);
?>
<?php get_template_part( 'parts/page', 'banner' ); ?>

<div id="content">
	<div id="inner-content" class="row fixedWidth">
		<main id="main" class="large-12 medium-12 columns" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/loop', 'products' ); ?>
		<?php endwhile; endif; ?>
		</main>
	</div>
</div>
<section class="entry-content" itemprop="articleBody">
		<div class="product-block">
			<div class="row small-up-1 medium-up-2 large-up-3 grid">
				<?php
				$myposts = get_posts(array(
					'showposts' => -1,
					'post_type' => 'product',
					'tax_query' => array(
						array(
						'taxonomy' => 'product_catagory',
						'field' => 'slug',
						'terms' => array('row1-' . $lang[0]))
					))
				);
				foreach ($myposts as $mypost) {
				$image = get_field('category_thumbnail_image', $mypost);	
				?>
				<div class="smal-12 columns productImageL effect-marley" style=" height:300px;background-size: cover; background-image: url(<?php echo $image['url']; ?>)">
					<figcaption>
					<h2><?php echo $mypost->post_title; ?></h2>
					<p><?php _e("MERE INFO", "termatech");?></p>
					<a href="<?php echo get_permalink( $mypost->ID );?>" rel="bookmark" title="Link to <?php echo $mypost->post_title; ?>"><?php _e("MERE INFO", "termatech");?></a>
					</figcaption>
				</div>
				<?php
				}
				?>
				
			</div>
			
			<div class="row small-up-1 medium-up-2 large-up-2 grid">
				<?php
				$myposts = get_posts(array(
					'showposts' => -1,
					'post_type' => 'product',
					'tax_query' => array(
						array(
						'taxonomy' => 'product_catagory',
						'field' => 'slug',
						'terms' => array('row2-' . $lang[0]))
					))
				);
				foreach ($myposts as $mypost) {
				$image = get_field('category_thumbnail_image', $mypost);	
				?>
				<div class="smal-12 columns productImageL effect-marley" style=" height:300px;background-size: cover; background-image: url(<?php echo $image['url']; ?>)">
					<figcaption>
					<h2><?php echo $mypost->post_title; ?></h2>
					<p><?php _e("MERE INFO", "termatech");?></p>
					<a href="<?php echo $mypost->guid; ?>" rel="bookmark" title="Link to <?php echo $mypost->post_title; ?>"><?php _e("MERE INFO", "termatech");?></a>
					</figcaption>
				</div>
				<?php
				}
				?>
				
			</div>
			
			<div class="row small-up-1 medium-up-2 large-up-2 grid">
				<?php
				$myposts = get_posts(array(
					'showposts' => -1,
					'post_type' => 'product',
					'tax_query' => array(
						array(
						'taxonomy' => 'product_catagory',
						'field' => 'slug',
						'terms' => array('row3-' . $lang[0]))
					))
				);
				foreach ($myposts as $mypost) {
				$image = get_field('category_thumbnail_image', $mypost);	
				?>
				<div class="smal-12 columns productImageL effect-marley" style=" height:300px;background-size: cover; background-image: url(<?php echo $image['url']; ?>)">
					<figcaption>
					<h2><?php echo $mypost->post_title; ?></h2>
					<?php if(get_field('external_link', $mypost)):?>
						<p><?php _e("MERE INFO", "termatech");?></p>
						<a href="<?php echo get_field('external_link', $mypost);?>" target="_blank" rel="bookmark" title="Link to <?php echo $mypost->post_title; ?>"><?php _e("MERE INFO", "termatech");?></a>
					<?php endif;?>
					</figcaption>
				</div>
				<?php
				}
				?>
				
			</div>
			
		</div>
		<?php //the_content(); ?>
		<?php //wp_link_pages(); ?>
	</section>
<?php get_footer(); ?>