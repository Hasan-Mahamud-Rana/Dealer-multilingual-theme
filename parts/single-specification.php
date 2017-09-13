<?php if(get_field('product_category_specification_pro')|| get_field('product_category_more_information_pro') || get_field('product_category_download_pro')){?>
<div class="row gray-spec">
	<div class="small-12">
		<div class="tables">
			<ul class="tabs">
				<li class="tabs-title panel1"><a class="button"><?php _e("SPECIFICATIONER", "termatech");?></a></li>
				<li class="tabs-title panel2 no-content"><a class="button"><?php _e("MERE INFO", "termatech");?></a></li>
				<li class="tabs-title panel3"><a class="button"><?php _e("DOWNLOAD", "termatech");?></a></li>
			</ul>
		</div>
		<div class="tabContent columns">
			<div id="panel1" class="tabContentPanels" style="display: none;">
				<?php
				if(get_field('product_category_specification_pro')){
						echo get_field('product_category_specification_pro');
					}
				?>
			</div>
			<div id="panel2" class="tabContentPanels" style="display: none;">
				<?php
				if(get_field('product_category_more_information_pro')){
						echo get_field('product_category_more_information_pro');
					}
				else {
					    echo '<style type="text/css">
					        .no-content {
					            display: none;
					        }
					        </style>';
					}
				?>
			</div>
			<div id="panel3" class="tabContentPanels" style="display: none;">
				<?php
				if(get_field('product_category_download_pro')){
						echo get_field('product_category_download_pro');
					}
				?>
			</div>
		</div>
	</div>
</div>
<?php }?>