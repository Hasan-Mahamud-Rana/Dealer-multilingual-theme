<div class="map-block">
	<div class="row fullWidth">
		<div class="small-12 medium-12 large-12 medium-centered large-centered mapContact">
			<?php 
				if(get_field('kontakt_google_map_shortcode')){
					echo get_field("kontakt_google_map_shortcode");
				}
			?>
		</div>
	</div>
</div>