		<?php
		/*Get the Product  test Contents*/
		if($post->post_parent == false){
		get_template_part( 'parts/single', 'bodycontent' );
		?>

		<?php if(get_field('product_gallery_pro')):?>
		<div class="small-12 medium-12 large-12 columns top-space">
			<?php
				echo '<div class="pPhotoSlider"><div class="small-12" id="gallery">' . get_field('product_gallery_pro'). '</div></div>';
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

		<?php
		get_template_part( 'parts/single', 'specification' );
		}
		?>
		<?php
		if($post->post_parent == true || get_field('related_product')){
		?>
		<?php
		/*Sub product thumbnails loop*/
		if(get_field('related_product')):?>
			<div class="row small-up-2 medium-up-4 large-up-6 pThumb">
				<?php
				$posts = get_field('related_product');

				if( $posts ): ?>
					<?php foreach( $posts as $post): // variable must be called $post (IMPORTANT) ?>
						<?php setup_postdata($post);?>
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
		<div class="pContent">
			<?php
			/*Show Sub Product Content Below*/
			//print_r($posts);
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
						<?php get_template_part( 'parts/single', 'gallery' ); ?>
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
						<?php get_template_part( 'parts/single', 'specificationdetails' ); ?>
						<?php endwhile;  wp_reset_postdata(); else : ?>
						<?php get_template_part( 'parts/content', 'missing' ); ?>
						<?php endif; ?>
					</div>
				</div>
				<?php endforeach; ?>
			<?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
			<?php endif;?>
			<?php } ?>
		</div>
