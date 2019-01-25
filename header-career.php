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

<div id="career-overlays" class="col-12 p-0 float-left">
	<div id="career-cancel" class="col-lg-6 col-md-1 col-sm-1 col-1 float-left"></div>
	<div class="career-form float-right w-100 px-5 py-2 bg-white col-lg-6 col-md-10 col-sm-10 col-10">
		<h2 class="purple-color prmy-font">Submit Your CV</h2>
		<hr>
		<p class="text-right text-danger font-weight-light">* Indicates required field</p>
		<form id="career-form">
			<div class="form-group row">
				<label for="first name" class="col-sm-4 col-form-label">First Name<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="career-first-name">
				</div>
			</div>
			<div class="form-group row">
				<label for="last name" class="col-sm-4 col-form-label">Last Name<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="career-last-name">
				</div>
			</div>
			<div class="form-group row">
				<label for="Email Address" class="col-sm-4 col-form-label">Email address<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="career-email">
				</div>
			</div>
			<div class="form-group row">
				<label for="Phone Number" class="col-sm-4 col-form-label">Phone Number</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="career-phone">
				</div>
			</div>
			<div class="form-group row">
				<label for="Location" class="col-sm-4 col-form-label">Location<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="career-location">
				</div>
			</div>
			<div class="form-group row">
				<label for="Nationality" class="col-sm-4 col-form-label">Nationality<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<select class="form-control" id="career-nationality">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="function" class="col-sm-4 col-form-label">Function<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<select class="form-control" id="career-function">
						<option>1</option>
						<option>2</option>
						<option>3</option>
						<option>4</option>
						<option>5</option>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="resume" class="col-sm-4 col-form-label">Submit Your CV<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="file" name="file" id="career-resume" class="form-control-file" data-multiple-caption="{count} files selected" multiple />
					<label for="file" class="shadow p-2 sc-font font-weight-normal">Choose a file</label>
				</div>
			</div>
			<div class="form-check mb-4">
				<div class="custom-control custom-checkbox mb-3">
					<input type="checkbox" class="custom-control-input" id="customCheck" name="example1">
					<label class="custom-control-label mt-1" for="customCheck">I accept the Al Madar <span class="career-links"><a href="#">Privacy Policy</a></span> and <span class="career-links"><a href="#">Terms and conditions*</a></span></label>
			    </div>
			</div>
			<div class="col-sm-12 text-right">
				<button id="cv-button" type="submit" class="btn btn-primary text-center">Send</button>
			</div>
			<p>We value your privacy.</p>
		</form>
	</div>
</div>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="header-career" style="background: url('<?php header_image(); ?>') no-repeat; background-size: 100% 100%;">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap');?></a>

		<nav class="navbar navbar-expand-md menu-new">

		<?php if ('container' == $container): ?>
			<div class="container mt-3" >
		<?php endif;?>

					<!-- Your site title as branding in the menu -->
					<?php if (!has_custom_logo()) {?>

						<?php if (is_front_page() && is_home()): ?>

							<!-- <h1 class="navbar-brand mb-0"><a rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name');?></a></h1> -->
							<a href="<?php echo esc_url(home_url('/')); ?>">
								<img class="almadar_logo" src="<?php echo get_template_directory_uri(); ?>/img/logo.png" />
							</a>

						<?php else: ?>

							<!-- <a class="navbar-brand" rel="home" href="<?php echo esc_url(home_url('/')); ?>" title="<?php echo esc_attr(get_bloginfo('name', 'display')); ?>" itemprop="url"><?php bloginfo('name');?></a> -->
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
				<a href="#" class="social-media">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" class="social-media" /> -->
					<i class="fab fa-facebook-square fs-22 sm-icon-fb"></i>
				</a>
				<a href="#" class="social-media">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/iconfinder-icon.svg" /> -->
					<i class="fab fa-twitter fs-22 sm-icon-tw pa-5 w-24"></i>
				</a>
				<a href="#" class="social-media">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin_blue.svg" class="social-media" />  -->
					<i class="fab fa-linkedin-in fs-22 sm-icon-fb"></i>
				</a>
			</div><!-- .container -->
			<?php endif;?>

		</nav><!-- .site-navigation -->
		<div class="col-lg-8 mx-auto">
			<div class="about-page">
				<div class="container">
					<h1 class="slider-heading display-4 mb-3 prmy-font text-white px-3">Careers</h1>
				</div>
			</div>
		</div>
	</div><!-- #wrapper-navbar end -->

