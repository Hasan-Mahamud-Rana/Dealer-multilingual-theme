<?php
/*
Template Name: Garanti Page
*/
?>
<?php get_header(); ?>
<?php get_template_part( 'parts/page', 'banner' ); ?>
<div id="content">
	<div id="inner-content" class="row">
		<main id="main" class="small-12 columns" role="main">
		<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
		<?php get_template_part( 'parts/loop', 'page' ); ?>
		<?php endwhile; endif; ?>
		</main>
	</div>
</div>
<div class="form-content">
	<?php
	if(get_field('registrering_title')){
		echo  '<div class="row"><div class="small-12 columns"><h2 class="page-title">'.get_field('registrering_title') .'</h2></div></div>' ;
	}
	if(get_field('registrering')){
		echo  get_field('registrering') ;
	}
	?>
</div>
<div class="granti-bottom">
	<div class="row">
		<div class="small-12 columns">
			<?php if(get_field('garanti_bottom_content_title')){
				echo '<h2 class="page-title">' . get_field('garanti_bottom_content_title') . '</h2>';
			}
			if(get_field('garanti_bottom_content_promo')){
				echo '<p class="promo">' . get_field('garanti_bottom_content_promo') . '</p>';
			}
			if(get_field('garanti_bottom_top_content')){
				echo get_field('garanti_bottom_top_content') ;
			}
			?>
		</div>
	</div>
	<div class="row">
		<div class="small-12 medium-6 columns">
			<?php
			if(get_field('garanti_bottom_left_content_title')){
					echo  '<p class="orangeItalic">'.get_field('garanti_bottom_left_content_title') .'</p>' ;
				}
			if(get_field('garanti_bottom_left_content')){
					echo  get_field('garanti_bottom_left_content') ;
				}
			?>
		</div>
		<div class="small-12 medium-6 columns">
			<?php
			if(get_field('garanti_bottom_right_content_title')){
					echo  '<p class="orangeItalic">'.get_field('garanti_bottom_right_content_title') .'</p>' ;
				}
			if(get_field('garanti_bottom_right_content')){
					echo  get_field('garanti_bottom_right_content') ;
				}
			?>
		</div>
	</div>
</div>
<div class="row gLower">
	<div class="small-12">
		<?php if(get_field('garanti_bottom_bottom_content')){
			echo  get_field('garanti_bottom_bottom_content') ;
		}
		if(get_field('garanti_bottom_gallery')){
			echo  get_field('garanti_bottom_gallery') ;
		}
		?>
	</div>
</div>
<?php get_footer(); ?>