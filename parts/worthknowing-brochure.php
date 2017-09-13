<div class="brochure-block">
	<div class="row small-up-1 medium-up-2 large-up-3 worth">
		<div class="worth-bg">
		<?php if(get_field('download_brochure')):?>
			<i class="fa fa-download" aria-hidden="true"></i>&nbsp;&nbsp;
			<?php
					echo '<a target="_blank" href="'.get_field('download_brochure').'">';
					_e("Se brochure","termatech");
					echo '</a>';
			?>
		<?php endif;?>
		</div>
	</div>
</div>