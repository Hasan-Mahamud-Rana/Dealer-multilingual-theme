<div class="row gray">
	<div class="small-12 medium-3 large-3 columns">
		<div class="small-12 columns singleProductImage" style="background-image: url(<?php echo wp_get_attachment_url( get_post_thumbnail_id($post->ID) ); ?>)">
		</div>
		<?php
		if(get_field('video')){
			echo '<p class="text-center"><a class="video button" data-open="videoInModal">Video</a></p>';
		}
		?>
	</div>
	<div class="small-12 medium-9 large-9 columns">
		<header class="article-header">
			<h2 class="entry-title single-title">
			<?php
			if(get_field('additional_title')){
				echo get_field('additional_title');
			}
			else{
				$titleActual = explode("-", $post->post_title);
				echo $titleActual[0]; // removed '-xx'
			}
			?>
			</h2>
		</header>
		<?php
		if(get_field('promoPro')){
				echo '<p class="promo">'.get_field('promoPro').'</p>';
			}
		?>
		<?php the_content(); ?>
	</div>
</div>
<?php
if(get_field('video')){

echo '<div class="reveal" id="videoInModal" data-reveal>
<video controls="controls" width="100%"><source src="'. get_field('video') . '" type="video/mp4" /></video>
<!--button class="close-button" data-close aria-label="Close modal" type="button">
<span aria-hidden="true">&times;</span>
</button-->
</div>';
}
?>