<div class="row">
	<div class="small-12">
		<div class="tables">
			<ul class="tabs">
				<?php if(get_field('product_category_specification_pro')){?>
				<li class="tabs-title paneld1"><a class="button"><?php _e("SPECIFICATIONER", "termatech");?></a></li>
				<?php } ?>
				<?php if(get_field('product_category_more_information_pro')){?>
				<li class="tabs-title paneld2"><a class="button"><?php _e("MERE INFO", "termatech");?></a></li> 
				<?php } ?>
				<?php if(get_field('product_category_video')){?>
				<li class="tabs-title paneld3"><a class="button"><?php _e("VIDEO", "termatech");?></a></li>
				<?php } ?>
				<?php if(get_field('product_category_download_pro')){?>
				<li class="tabs-title paneld4"><a class="button"><?php _e("DOWNLOAD", "termatech");?></a></li>
				<?php } ?>
			</ul>
		</div>
		<div class="tabContent columns">
			<div id="paneld1" class="tabContentPanels" style="display: none;">
				<?php
				if(get_field('product_category_specification_pro')){
						echo get_field('product_category_specification_pro');
					}
				?>
			</div>
			<div id="paneld2" class="tabContentPanels" style="display: none;">
				<?php
				if(get_field('product_category_more_information_pro')){
						echo get_field('product_category_more_information_pro');
					}
				?>
			</div>
			<div id="paneld3" class="tabContentPanels" style="display: none;">
				<?php
				if(get_field('product_category_video')){
						echo get_field('product_category_video');
					}
				?>
			</div>
			<div id="paneld4" class="tabContentPanels" style="display: none;">
				<?php
				if(get_field('product_category_download_pro')){
						echo get_field('product_category_download_pro');
					}
				?>
			</div>
		</div>
	</div>
</div>
