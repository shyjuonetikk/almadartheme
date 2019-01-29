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
		<h2 class="purple-color prmy-font text-center text-sm-left">Submit Your CV</h2>
		<hr>
		<p class="text-right text-danger font-weight-light">* Indicates required field</p>
		<form id="career-form" method="post" action="<?php echo get_template_directory_uri(); ?>/resume-form.php">
			<div class="form-group row">
				<label for="career-first-name" class="col-sm-4 col-form-label">First Name<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="career-first-name" name="career-first-name" data-required="true">
				</div>
			</div>
			<div class="form-group row">
				<label for="last name" class="col-sm-4 col-form-label">Last Name<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="career-last-name" name="career-last-name" data-required="true">
				</div>
			</div>
			<div class="form-group row">
				<label for="Email Address" class="col-sm-4 col-form-label">Email address<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="career-email" name="career-email" data-required="true">
				</div>
			</div>
			<div class="form-group row">
				<label for="Phone Number" class="col-sm-4 col-form-label">Phone Number</label>
				<div class="col-sm-8">
					<input type="email" class="form-control" id="career-phone" name="career-phone">
				</div>
			</div>
			<div class="form-group row">
				<label for="Location" class="col-sm-4 col-form-label">Location<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="text" class="form-control" id="career-location" name="career-location" data-required="true">
				</div>
			</div>
			<div class="form-group row">
				<label for="Nationality" class="col-sm-4 col-form-label">Nationality<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<select class="form-control" id="career-nationality" name="career-nationality">
					<?php
$query = new WP_Query(array(
	'post_type' => array('alcareers'),
	'post_status' => 'publish',
	'order' => 'ASC',
));

while ($query->have_posts()) {
	$query->the_post();
	$post_id = get_the_ID();
	$post_url = get_the_permalink();
	?>
							<option value="<?php the_field('nationality');?>"><?php the_field('nationality');?></option>
						<?php }
wp_reset_query();?>
					</select>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="function" class="col-sm-4 col-form-label">Function<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<select class="form-control" id="career-function" name="career-function">
					<?php
$query = new WP_Query(array(
	'post_type' => array('alcareers'),
	'post_status' => 'publish',
	'order' => 'ASC',
));

while ($query->have_posts()) {
	$query->the_post();
	$post_id = get_the_ID();
	$post_url = get_the_permalink();
	?>
							<option value="<?php the_field('role');?>"><?php the_field('role');?></option>
						<?php }
wp_reset_query();?>
					</select>
				</div>
			</div>
			<div class="form-group row">
				<label for="resume" class="col-sm-4 col-form-label">Submit Your CV<span class="text-danger">*</span></label>
				<div class="col-sm-8">
					<input type="file" name="file_attach[]" id="career-resume" class="form-control-file" name="career-resume" />
					<label for="career-resume" class="shadow p-2 sc-font font-weight-normal">Choose a file</label>
				</div>
			</div>
			<div id="fileInCheck">
				<p class="text-danger">Please attach your CV with the application.</p>
			</div>
			<div class="form-check mb-4">
				<div class="custom-control custom-checkbox mb-3">
					<input type="checkbox" class="custom-control-input" id="customCheck" name="customCheck" data-required="true" >
					<label class="custom-control-label mt-1" for="customCheck">I accept the Al Madar <span class="career-links"><a href="<?php echo site_url(); ?>/disclaimer/?#priv" target="_blank">Privacy Policy</a></span> and <span class="career-links"><a href="<?php echo site_url(); ?>/disclaimer/?#term" target="_blank">Terms and conditions*</a></span></label>
			    </div>
			</div>
			<div class="col-sm-12 text-right p-0 m-0">
				<div class="col-lg-6 float-left px-0 pt-2">
					<p class="text-left">We value your privacy.</p>
				</div>
				<div class="col-lg-6 float-right">
					<button id="cv-button" type="submit" class="btn btn-primary text-center">Send</button>
				</div>
			</div>
			<div id="resume_result" class="col-12"></div>
		</form>
	</div>
</div>

<div class="site" id="page">

	<!-- ******************* The Navbar Area ******************* -->
	<div id="wrapper-navbar" class="header-career" style="background: url('<?php the_field('header_image');?>') no-repeat; background-size: 100% 100%;">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap');?></a>
	<div id="header-box">
		<nav class="navbar navbar-expand-md menu-new" id="myHeader">

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

				<button class="navbar-toggler white-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="<?php esc_attr_e('Toggle navigation', 'understrap');?>">
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
					<i class="fab fa-twitter fs-22 sm-icon-tw pa-5 w-24"></i>
				</a>
				<a href="#" class="social-media d-none d-sm-none d-md-none d-lg-none d-xl-block">
					<i class="fab fa-linkedin-in fs-22 sm-icon-fb"></i>
				</a>
			</div><!-- .container -->
			<?php endif;?>

		</nav><!-- .site-navigation -->
	</div>
		<div class="col-md-8 mx-auto">
			<div class="about-page">
				<div class="container">
					<!-- <h1 class="slider-heading display-4 mb-3 px-3 prmy-font text-white"><?php // the_title();?></h1> -->
					<h1 class="slider-heading display-4 mb-3  prmy-font text-white"><?php the_title();?></h1>
				</div>
			</div>
		</div>
	</div><!-- #wrapper-navbar end -->

