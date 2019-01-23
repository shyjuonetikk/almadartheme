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
	<link rel="stylesheet" href="https://i.icomoon.io/public/temp/eb798d074c/UntitledProject/style.css">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
	<script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js">
      </script>
		
      <script type = "text/javascript" 
         src = "https://ajax.googleapis.com/ajax/libs/jqueryui/1.11.3/jquery-ui.min.js">
      </script>
<script type="text/javascript">
	$(document).ready(function(){
		$("#click-contact").click(function(){
            $("#contact-pop-up").show( "slide", { direction: "right"  }, 1000 );
        });
		$("#contact-left").click(function(){
            $("#contact-pop-up").hide( "slide", {direction: "left" }, 1000 );
        });
	});
</script>
</head>

<body <?php body_class();?>>

<div class="site" id="page">
<div class="contact-pop-up">
	<div class="row m-0">
		<div class="col m-0" id="contact-left"></div>
		<div class="col m-0 contact-popup-back p-5">
			<h1>GET IN TOUCH</h1>
			<p class="fs-12 pb-3">For inquiries and feedback, please fill out the form below.</p>
			<form class="w-75">
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputName">NAME</label>
			      <input type="text" class="form-control border-0 rounded-0" id="inputName">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputCompany">COMPANY</label>
			      <input type="text" class="form-control border-0 rounded-0" id="inputCompany">
			    </div>
			  </div>
			  <div class="form-row">
			    <div class="form-group col-md-6">
			      <label for="inputEmail">EMAIL</label>
			      <input type="email" class="form-control" id="inputEmail">
			    </div>
			    <div class="form-group col-md-6">
			      <label for="inputSubject">SUBJECT</label>
			      <input type="text" class="form-control border-0 rounded-0" id="inputSubject">
			    </div>
			  </div>
			  <div class="form-group">
			    <label for="inputAddress">YOUR MESSAGE</label>
			    <textarea class="form-control border-0 rounded-0" id="inputAddress"></textarea>
			  </div>
			  <button type="submit" class="btn contact-btn float-right">SUBMIT</button>
			</form>
		</div>
	</div>
</div>
	<!-- ******************* The Navbar Area ******************* -->
	
	<div id="wrapper-navbar">

		<a class="skip-link sr-only sr-only-focusable" href="#content"><?php esc_html_e('Skip to content', 'understrap');?></a>

		<nav class="navbar navbar-expand-md menu-custom">

		<?php if ('container' == $container): ?>
			<div class="container mt-5" >
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
				<a href="#" class="social-media">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/facebook.svg" class="social-media" /> -->
					<i class="fab fa-facebook-square fs-22 sm-icon-fb"></i>
				</a>
				<a href="#" class="social-media">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/iconfinder-icon.svg" /> -->
					<i class="fab fa-twitter fs-22 sm-icon-tw-new pa-5 w-24"></i>
				</a>
				<a href="#" class="social-media">
					<!-- <img src="<?php echo get_template_directory_uri(); ?>/img/linkedin_blue.svg" class="social-media" />  -->
					<i class="fab fa-linkedin-in fs-22 sm-icon-fb"></i>
				</a>
			</div><!-- .container -->
			<?php endif;?>

		</nav><!-- .site-navigation -->
	</div><!-- #wrapper-navbar end -->
