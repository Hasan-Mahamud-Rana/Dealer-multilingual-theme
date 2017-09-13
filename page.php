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
<div class="profile-slider">
	<?php if (is_page('profil')||is_page('profil-de')||is_page('profil-fr')||is_page('profil-sv')||is_page('profile'))
	{
		if(get_field('slider_title')){
					echo '<h2>' . get_field('slider_title') . '</h2>';
				}
		if(get_field('profile_gallery')){
					echo '<div class="row pPhotoSlider top-space"><div class="small-12" id="gallery">' . get_field('profile_gallery'). '</div></div>';
				}
		if(get_field('logo_gallery')){
					echo get_field('logo_gallery') ;
				}
	}?>
</div>
<?php get_footer(); ?>