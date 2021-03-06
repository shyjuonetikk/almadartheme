<?php
/**
 * The header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="content">
 *
 * @package understrap
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$container = get_theme_mod('understrap_container_type');
?>
<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
	<meta charset="<?php bloginfo('charset');?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<?php wp_head();?>
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/css/custom-style.css" >
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
</head>

<body <?php body_class();?>>

<div class="site" id="page">
<div class="contact-pop-up">
	<div class="row m-0">
		<div class="col-lg-6 col-md-1 col-sm-1 col-1 m-0" id="contact-left"></div>
		<div class="col-lg-6 col-md-11 col-sm-11 col-11 m-0 contact-popup-back p-5">
			<h1 class="prmy-font font-weight-bold mb-4">GET IN TOUCH</h1>
			<p class="fs-12 pb-3">For inquiries and feedback, please fill out the form below.</p>
			<form class="w-75 float-left" id="contact-form" method="post" action="<?php echo get_template_directory_uri(); ?>/contactus-form.php">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputName" class="prmy-font">NAME</label>
			      <input type="text" class="form-control rounded-0" id="inputName" name="inputName" data-required="true">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputCompany" class="prmy-font">COMPANY</label>
			      <input type="text" class="form-control rounded-0" id="inputCompany" name="inputCompany" data-required="true">
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail" class="prmy-font">EMAIL</label>
			      <input type="email" class="form-control rounded-0" id="inputEmail" data-required="true" name="inputEmail">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputSubject" class="prmy-font">SUBJECT</label>
			      <input type="text" class="form-control rounded-0" id="inputSubject" name="inputSubject" data-required="true">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputAddress" class="prmy-font">YOUR MESSAGE</label>
			    <textarea class="form-control rounded-0" id="inputMessage" name="inputMessage" data-required="true"></textarea>
			  </div>
			  <button id="contactus-button" type="submit" class="btn contact-btn float-right mt-1">SUBMIT</button>
			</form>
			<div id="contact-us-response"><p class="text-white float-left d-block w-100 p-1">Thank you for your request!</p></div>
		</div>
	</div>
</div>
	<!-- ******************* The Navbar Area ******************* -->

	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap');?></a>
	<div id="header-box">
		<nav class="navbar navbar-expand-md menu-custom" id="divisionHeader">

		<?php if ('container' == $container): ?>
			<div class="container mt-3">
		<?php endif;?>

					<!-- Your site title as branding in the menu -->
					<?php if (!has_custom_logo()) {?>

						<?php if (is_front_page() && is_home()): ?>
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img class="almadar_logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
							</a>

						<?php else: ?>

							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img class="almadar_logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
							</a>

						<?php endif;?>


					<?php } else {
	the_custom_logo();
}?><!-- end custom logo -->

				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap');?>">
					<span class="navbar-toggler-icon"></span>
				</button>

				<!-- The WordPress Menu goes here -->
				<?php wp_nav_menu(
	array(
		'theme_location' => 'primary',
		'container_class' => 'collapse navbar-collapse',
		'container_id' => 'navbarNavDropdown',
		'menu_class' => 'navbar-nav',
		'fallback_cb' => '',
		'menu_id' => 'main-menu',
		'depth' => 2,
		'walker' => new Understrap_WP_Bootstrap_Navwalker(),
	)
);
?>
			<?php if ('container' == $container): ?>
				<a href="#" class="social-media d-none d-sm-none d-md-none d-lg-none d-xl-block">
					<i class="fab fa-facebook-square fs-22 sm-icon-fb"></i>
				</a>
				<a href="#" class="social-media d-none d-sm-none d-md-none d-lg-none d-xl-block">
					<i class="fab fa-twitter fs-22 sm-icon-tw-new pa-5 w-24"></i>
				</a>
				<a href="#" class="social-media d-none d-sm-none d-md-none d-lg-none d-xl-block">
					<i class="fab fa-linkedin-in fs-22 sm-icon-fb"></i>
				</a>
			</div><!-- .container -->
			<?php endif;?>

		</nav><!-- .site-navigation -->
	</div>
	</div><!-- #wrapper-navbar end -->
