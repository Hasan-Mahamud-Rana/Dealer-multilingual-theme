<div class="ceo-block">
	<div class="row fixedWidth">
		<div class="small-12 medium-10 large-9 medium-centered large-centered columns">
			<?php 
				if(get_field('message')){
					echo '<blockquote class="message">' . get_field('message') . '</blockquote>';
				}
				if(get_field('author')){
					echo '<p class="author">' . get_field('author') . '</p>';
				}
			?>
		</div>
	</div>
</div>