<?php

/**

Template Name: Contact Us Page

Description: Template for contact us page

 */
get_header('division');
?>
<div class="row m-0 pt-5 pb-5">
	<div class="container">
		<div class="row pl-5 pr-5 prmy-font">
			<div class="col-lg-5">
				<?php the_field('map_iframe');?>
			</div>
			<div class="col-lg-7 px-4">
				<h2 class="purple-color prmy-font font-weight-bold my-3">CONTACT US</h2>
				<div class="line mb-5"></div>
				<div class="row">
					<div class="col-md-6">
						<h6 class="purple-color">AL MADAR HOLDINGS W.L.L.</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li>P.O.Box: <?php the_field('almadar_address');?></li>
							<li>Tel.: <?php the_field('almadar_telephone');?></li>
							<li>Fax: <?php the_field('almadar_fax');?></li>
							<li class="contact-links"><?php the_field('almadar_email');?></li>
						</ul>
					</div>
					<div class="col-md-6">
						<h6 class="purple-color">REAL ESTATE - QATAR</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li>Tel.: <?php the_field('re_primary_telephone');?></li>
							<li>Tel.: <?php the_field('re_secondary_telephone');?></li>
							<li>Fax: <?php the_field('re_fax');?></li>
							<li class="contact-links"><?php the_field('re_primary_email');?></li>
							<li class="contact-links"><?php the_field('re_secondary_email');?></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h6 class="purple-color">HUMAN RESOURCE</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li>P.O.Box: <?php the_field('hr_address');?></li>
							<li>Tel.: <?php the_field('hr_telephone');?></li>
							<li>Fax: <?php the_field('hr_fax');?></li>
							<li class="contact-links"><?php the_field('hr_email');?></li>
						</ul>
					</div>
					<div class="col-md-6 contact-list">
						<h6 class="purple-color">SUGGESTIONS? INQUIRIES?</h6>
						<a href="#" class="font-weight-bold pr-2" id="click-contact">CLICK HERE</a><img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>