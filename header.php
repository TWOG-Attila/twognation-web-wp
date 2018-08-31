<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package TwogNation
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/assets/FAV-Twog.png">
	<link href="https://fonts.googleapis.com/css?family=Raleway:200,300,400,500,600,700,800" rel="stylesheet">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="page" class="site">

	<header id="masthead" class="site-header">
		
		<div class="wrapper">
			<a href="/"><img class="logo" src="<?php echo get_template_directory_uri(); ?>/assets/logos/twognation.svg"></a>
			
			<nav id="site-navigation" class="main-navigation">
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'primary-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			<nav id="mobile-navigation" class="mobile-navigation">
				<a href="#content" class="mobile-logo"><img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/assets/logos/twognation.svg"></a>
				<?php
				wp_nav_menu( array(
					'theme_location' => 'menu-1',
					'menu_id'        => 'mobile-menu',
				) );
				?>
			</nav><!-- #site-navigation -->

			<!-- Button trigger modal -->
			<button type="button" data-toggle="modal" data-target="#connectToTwogNation">
				Connect
			</button>


			<div class="hamburger-menu">
				<div class="bar"></div>
			</div><!-- hamburger -->
		</div>

	</header><!-- #masthead -->

	<a href="#content" class="back-to-top">
		<i class="fas fa-chevron-up"></i>
	</a><!-- back to top -->

	<!-- Modal -->
	<div class="modal fade" id="connectToTwogNation" tabindex="-1" role="dialog" aria-labelledby="connectToTwogNationTitle" aria-hidden="true">
		<div class="modal-dialog modal-dialog-centered" role="document">
			<div class="modal-content">

				<div class="modal-body connect-to-twog">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fas fa-times"></i>
					</button>

					<h2>Connect with Twognation</h2>
					<h4>we will contact you within 24h</h4>

					<?php echo do_shortcode( '[contact-form-7 id="619" title="connectwithtwog"]' ); ?>

				</div>

			</div>
		</div>
	</div>

<!-- successModal -->
<div class="modal fade" id="successModal" tabindex="-1" role="dialog" aria-labelledby="successModalTitle" aria-hidden="true">
  <div class="modal-dialog modal-dialog-centered" role="document">
    <div class="modal-content">
		 
				<div class="modal-body connect-to-twog">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close">
							<i class="fas fa-times"></i>
					</button>

					<h2>Your form has been <br> successfully delivered</h2>
					<h4>we will contact you within 24h</h4>
					
					<div class="text-center">
						<button type="button" class="submit" data-dismiss="modal">OK</button>
					</div>

				</div>
			

    </div>
  </div>
</div>
		

	<div id="content" class="site-content">
