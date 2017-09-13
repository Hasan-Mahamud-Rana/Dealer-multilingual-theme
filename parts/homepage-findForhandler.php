<?php 
	if(get_field('find_forhandler')){			
?>
<div class="findForhandler-block">
	<div class="row">
		<div class="small-12 columns findForhandler text-center">
			
			<a href="<?php echo get_field('find_forhandler');?>"><?php _e("Find forhandler", "termatech");?></a>
			
		</div>
	</div>
</div>
<?php }
?>