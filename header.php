<!doctype html>
<html class="no-js"  <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<!-- Force IE to use the latest rendering engine available -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<!-- Mobile Meta -->
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta class="foundation-mq">
		<!-- If Site Icon isn't set in customizer -->
		<?php if ( ! function_exists( 'has_site_icon' ) || ! has_site_icon() ) { ?>
		<!-- Icons & Favicons -->
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<link href="<?php echo get_template_directory_uri(); ?>/assets/images/apple-icon-touch.png" rel="apple-touch-icon" />
		<!--[if IE]>
		<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/assets/images/win8-tile-icon.png">
		<meta name="theme-color" content="#121212">
		<?php } ?>
		<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
		<?php wp_head(); ?>
		<!-- Drop Google Analytics here -->
		<!-- end analytics -->
        <!-- Adform Tracking Code BEGIN -->
        <script type="text/javascript" src="https://track.adform.net/serving/scripts/trackpoint/"></script>
        <script type="text/javascript">
            adf.Params.PageName = encodeURIComponent('Retargeting TP');
            adf.Params.Divider = encodeURIComponent('|');
            adf.track(674921);
        </script>
        <noscript>
            <p style="margin:0;padding:0;border:0;">
                <img src="https://track.adform.net/Serving/TrackPoint/?pm=674921&ADFPageName=Retargeting%20TP&ADFdivider=|" width="1" height="1" alt="" />
            </p>
        </noscript>
        <!-- Adform Tracking Code END -->
	</head>
	<!-- Uncomment this line if using the Off-Canvas Menu -->
	<body <?php body_class(); ?>>
		<div class="off-canvas-wrapper">
			<div class="off-canvas-wrapper-inner" data-off-canvas-wrapper>
				<?php get_template_part( 'parts/content', 'offcanvas' ); ?>
				<div class="off-canvas-content" data-off-canvas-content>
					<header class="header" role="banner">
						<div class="row">
							<div class="container nationalFlag">
								<aside class="widget widget_icl_lang_sel_widget" id="icl_lang_sel_widget-2">
									<div class="lang_sel_list_horizontal" id="lang_sel_list">
										<?php // outputs a flags list (without languages names) ?>
<ul><?php pll_the_languages(array('show_flags'=>1,'show_names'=>0)); ?></ul>
									</div>
							</aside>	
							</div>
						</div>
						<div class="row">
						<!-- This navs will be applied to the topbar, above all content
							To see additional nav styles, visit the /parts directory -->
							<?php get_template_part( 'parts/nav', 'offcanvas-topbar' ); ?>
						</div>
						</header> <!-- end .header -->