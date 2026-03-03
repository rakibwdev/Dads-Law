<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
<!-- Google Tag Manager -->
<!-- End Google Tag Manager -->
<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>

<?php get_template_part('block','design'); ?>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<!-- TODO: Replace with local file -->
<link rel="stylesheet" href="https://i.icomoon.io/public/d175039853/DadsLaw/style.css">

<?php get_template_part('block','font-select'); ?>

</head>
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-W8FNJKQ4');</script>
<!-- End Google Tag Manager -->
<a class="skip-link" href='#main-content'>Skip to Main Content</a>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
    <!-- End Google Tag Manager (noscript) -->

	<header>
		<div id="header-top" class="container">
			<div id="header-top_right">
				<div id="header-top_right_menu">


					<div class="desktop-nav-wrapper">
                    <?php
                        wp_nav_menu( array(
                            'container' => 'nav',
                            'theme_location' => 'header-nav-left'
                        ) );
                  		
						the_custom_logo(); 

                        wp_nav_menu( array(
                            'container' => 'nav',
                            'theme_location' => 'header-nav-right'
                        ) );
                    ?>	
					</div>


					<div class="mobile-nav-wrapper">
					<div id="menu-main-menu">
						<?php
							wp_nav_menu( array( 'container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'header-nav-left' ) );
							wp_nav_menu( array( 'container' => false, 'items_wrap' => '%3$s', 'theme_location' => 'header-nav-right' ) );
						?>	
					</div>
					</div>
					<div id="header-top_mobile">

						<div class="row1">
							<div class="mobile-cta">
								<p><a href="tel:<?php the_field('phone_number', 'options'); ?>">Call Us Today</a></p>
								<a href="tel:<?php the_field('phone_number', 'options'); ?>" class="phone"><?php the_field('phone_number', 'options'); ?></a>
							</div>
							<div class="menu-wrapper">
								<div id="menu-icon" class="toggle-nav">
									<span class="line line-1"></span>
									<span class="line line-2"></span>
									<span class="line line-3"></span>
								</div>
							</div>
						</div>

						<div class="row2">
							<div id="header-top_left" class="mobile-logo">
								<?php the_custom_logo(); ?>
							</div>
						</div>

					</div>
				</div>
			</div>
		</div>
	</header> 

    <span id="main-content"></span>