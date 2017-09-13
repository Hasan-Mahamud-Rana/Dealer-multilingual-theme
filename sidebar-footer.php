<div class="footer-contact" role="complementary" data-equalizer>
	<?php if ( is_active_sidebar( 'footer' ) ) : ?>
	<?php dynamic_sidebar( 'footer' ); ?>
	<?php else : ?>

	<div class="alert help">
		<p><?php _e( 'Please activate some Widgets.', 'jointswp' );  ?></p>
	</div>
	<?php endif; ?>
</div>