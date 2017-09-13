<div class="small-12">
	<?php
	if(get_field('product_gallery_pro')){
		echo '<div class="pPhotoSlider" id="gallery_'.$post->post_name.'"><div class="small-12" id="gallery_'.$post->post_name.'">' . get_field('product_gallery_pro'). '</div></div>';
	}
	?>
</div>