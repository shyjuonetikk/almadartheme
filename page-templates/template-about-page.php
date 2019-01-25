<?php
/**
 * Template Name: About Us
 */
get_header('about');
?>
<div class="about-page col-lg-8 mx-auto">
	<div class="col-xl-12 float-left">
		<div class="container">
			<div id="msg-chairman" class="col-xl-12 p-0 float-left shadow">
				<div class="col-12 m-0 p-0 text-center text-white about-bg mb-4">
					<h4 class="px-5 py-3 font-weight-normal">A Message from the Chairman</h4>
				</div>
				<div class="container">
					<div class="offset-lg-1 col-lg-4 col-md-5 col-sm-12 float-left text-center">
						<img class="img_eng img-fluid" src="<?php the_field('chairman_image'); ?>" alt="">
						<p class="text-center purple-color mt-4"><?php the_field('name'); ?></p>
					</div>
					<div class="col-lg-1 col-md-1 d-md-block d-sm-none d-none float-left text-center">
						<img class="img-fluid line-chr" src="<?php echo get_template_directory_uri(); ?>/img/About/Line_about.svg">
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12 float-left">
						<p class="msg-md"><?php the_field('message'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-12 float-left">
		<div class="container">
			<div id="msg-md" class="col-xl-12 mb-5 p-0 float-left shadow">
				<div class="col-12 m-0 p-0 text-center text-white about-bg mb-4">
					<h4 class="px-5 py-3 font-weight-normal">A Message from the Managing Director</h4>
				</div>
				<div class="container">
					<div class="col-lg-6 col-md-6 d-md-block d-sm-none d-none float-left">
						<p class="msg-md"><?php the_field('md_message'); ?></p>
					</div>
					<div class="col-lg-1 col-md-1 d-md-block d-sm-none d-none float-left text-center pt-5">
						<img class="img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/About/Line_about.svg">
					</div>
					<div class="col-lg-4 col-md-5 col-md-5 col-sm-12 float-left text-center">
						<img class="img_md img-fluid" src="<?php the_field('md_image'); ?>" alt="">
						<p class="text-center purple-color mt-4"><?php the_field('md_name'); ?></p>
					</div>
					<div class="col-lg-6 col-md-6 d-md-none d-sm-block d-block float-left">
						<p class="msg-md"><?php the_field('md_message'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-12 float-left">
		<div class="container">
			<div id="our-mission" class="col-xl-12 p-0 float-left">
				<div class="container">
					<div class="col-lg-6 float-left text-center">
						<img class="mission-img pt-5 mb-4" src="<?php echo get_template_directory_uri(); ?>/img/About/Our Mission.png" alt="Our Mission">
					</div>
					<div class="col-lg-6 float-left px-0">
						<p class="msg-md">
							<?php the_field('our_mission'); ?>
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-xl-12 float-left">
		<div class="container">
			<div id="our-mission" class="col-xl-12 p-0 float-left">
				<div class="container">
					<div class="col-lg-6 d-lg-block d-md-none d-sm-none d-none float-left text-right px-0">
						<p class="msg-md"><?php the_field('our_vision'); ?></p>
					</div>
					<div class="col-lg-6 float-left text-center">
						<img class="mission-img pt-5 mb-4" src="<?php echo get_template_directory_uri(); ?>/img/About/Our Vision.png" alt="Our Vision">
					</div>
					<div class="col-lg-6 d-lg-none d-md-block d-sm-block d-block float-left text-right px-0">
						<p class="msg-md"><?php the_field('our_vision'); ?></p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="col-12">
		<div class="container">
			<div id="about_cert" class="float-left text-center">
				<div class="col-12 float-left">
					<img src="<?php echo get_template_directory_uri(); ?>/img/About/cert_grp.png">
				</div>
			</div>
		</div>
	</div>
</div>


<div class="newsletter-container p-5 float-left mb-5">
	<div class="col-xl-6 col-lg-8 col-md-8 col-12 m-auto text-center">
		<h3 class="text-light prmy-font">SUBSCRIBE TO OUR NEWSLETTERS</h3>
		<p class="text-light fs-15 mt-4 sc-font">
			Enter your E-mail address to receive latest news and updates. Morbi euismod
			fermentum tempus. Mauris molestie facilisis eros id dictum.
		</p>
		<div class="col-12">
			<form>
			  <div class="form-group row">
			    <div class="col-9 m-auto">
			      	<div class="input-group mb-3 newsletter-txt-field prmy-font">
					  <input type="text" class="form-control" placeholder="YOUR E-MAIL ADDRESS" aria-label="YOUR E-MAIL ADDRESS" aria-describedby="basic-addon2">
					  <div class="input-group-append">
					    <span class="input-group-text" id="basic-addon2">SUBMIT</span>
					  </div>
					</div>
			     </div>
			  </div>
			</form>
		</div>
	</div>
</div>
<?php get_footer();?>
