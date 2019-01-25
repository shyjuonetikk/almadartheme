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
				<img src="<?php echo get_template_directory_uri(); ?>/img/contactus.png" />
			</div>
			<div class="col-lg-7 px-4">
				<h2 class="purple-color prmy-font font-weight-bold my-3">CONTACT US</h2>
				<div class="line mb-5"></div>
				<div class="row">
					<div class="col-lg-6">
						<h6 class="purple-color">AL MADAR HOLDINGS W.L.L.</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li>P.O.Box: 2329, Doha - Qatar</li>
							<li>Tel.: +974 4455 4809</li>
							<li>Fax: +974 4467 3019</li>
							<li class="contact-links">almadar@almadar-holding.com</li>
						</ul>
					</div>
					<div class="col-lg-6">
						<h6 class="purple-color">REAL ESTATE - QATAR</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li>Tel.: +974 4467 5405</li>
							<li>Tel.: +974 4455 4809</li>
							<li>Fax: +974 4467 3019</li>
							<li class="contact-links">almadar.real@almadar-holding.com</li>
							<li class="contact-links">realestate@almadar-holding.com</li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col">
						<h6 class="purple-color">HUMAN RESOURCE</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li>P.O.Box: 2329, Doha - Qatar</li>
							<li>Tel.: +974 4455 4809</li>
							<li>Fax: +974 4467 3019</li>
							<li class="contact-links">careers@almadar-holding.com</li>
						</ul>
					</div>
					<div class="col contact-list">
						<h6 class="purple-color">SUGGESTIONS? INQUIRIES?</h6>
						<a href="#" class="font-weight-bold pr-2" id="click-contact">CLICK HERE</a><img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>