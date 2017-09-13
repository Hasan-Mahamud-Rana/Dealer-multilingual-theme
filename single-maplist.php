<?php
$actual_link = get_permalink();
if (strpos($actual_link,'-2') !== false) {
	$actual_link = str_replace('-2', '', $actual_link);
	wp_redirect($actual_link);
}
get_header();
get_template_part( 'parts/page', 'banner' );
echo '<div id="content">';
	echo '<div id="inner-content" class="row">';
		echo '<div class="smal-12 columns" role="main">';
			the_title('<h1>','</h1>');
			$promoText = get_field( "promo" );
			if (empty( $promoText )):
			$promoText = "Om butikken";
			endif;
			echo '<p class="promo">' . $promoText . '</p>';
		echo '</div>';
		echo '<div id="main" class="mapDetails small-12 medium-8 large-8 columns" role="main">';
			if (have_posts()) : while (have_posts()) : the_post();
			the_content();
			endwhile; else :
			get_template_part( 'parts/content', 'missing' );
			endif;
		echo '</div>';
		echo '<div class="small-12 medium-4 large-4 columns">';
			echo '<div class="dealerSlider small-12" style:"display: none;">';
				$galleryImage1 = get_field( "gallery_image_1" );
				if( $galleryImage1 ):
				echo '<a class="dealerSliderSingle" href="'. $galleryImage1 . '" style="height:500px; background-image: url('. $galleryImage1 . ')"></a>';
				endif;
				$galleryImage2 = get_field( "gallery_image_2" );
				if( $galleryImage2 ):
				echo '<a class="dealerSliderSingle" href="'. $galleryImage2 . '" style="height:500px; background-image: url('. $galleryImage2 . ')"></a>';
				endif;
				$galleryImage3 = get_field( "gallery_image_3" );
				if( $galleryImage3 ):
				echo '<a class="dealerSliderSingle" href="'. $galleryImage3 . '" style="height:500px; background-image: url('. $galleryImage3 . ')"></a>';
				endif;
				$galleryImage4 = get_field( "gallery_image_4" );
				if( $galleryImage4 ):
				echo '<a class="dealerSliderSingle" href="'. $galleryImage4 . '" style="height:500px; background-image: url('. $galleryImage4 . ')"></a>';
				endif;
				$galleryImage5 = get_field( "gallery_image_5" );
				if( $galleryImage5 ):
				echo '<a class="dealerSliderSingle" href="'. $galleryImage5 . '" style="height:500px; background-image: url('. $galleryImage5 . ')"></a>';
				endif;
			echo '</div>';
			echo '<div class="dealerInfo small-12 columns">';
				$addresse = get_field_object("addresse");
				if( $addresse ):
				echo '<p><strong>' . $addresse['label'] . ':</strong> ' .  $addresse['value']. '</p>';
				endif;
				$email = get_field_object("email");
				if( $email ):
				echo '<p><strong>' . $email['label'] . ':</strong> <a href="mailto:' .  $email['value'] . '" target="_top">' .  $email['value'] . '</a></p>';
				endif;
				$telefonenummer = get_field_object("telefonenummer");
				if( $telefonenummer ):
				echo '<p><strong>' . $telefonenummer['label'] . ':</strong> ' .  $telefonenummer['value'] . '</p>';
				endif;
				$hjemmesideadresse = get_field_object("hjemmesideadresse");
				if( $hjemmesideadresse ):
				echo '<p><strong>' . $hjemmesideadresse['label'] . ':</strong> <a href="https://' .  $hjemmesideadresse['value'] . '" target="_blank">' .  $hjemmesideadresse['value'] . '</a></p>';
				endif;
			echo '</div>';
			echo '<div class="findDealer small-12">';
				echo '<p><a class="buttonFindForhandler" href="' . site_url() . '/find-forhandler/">TILBAGE TIL FORHANDLER KORTET</a></p>';
			echo '</div>';
		echo '</div>';
	echo '</div>';
echo '</div>';
get_footer();
?>