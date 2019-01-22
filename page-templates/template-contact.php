<?php

/**

Template Name: Contact Us Page

Description: Template for contact us page

*/
get_header('division');
?>
<div class="row m-0 pt-5 pb-5">
	<div class="container">
		<div class="row pl-5 pr-5">
			<div class="col">
				<img src="<?php echo get_template_directory_uri(); ?>/img/contactus.png" />
			</div>
			<div class="col">
				<h2 class="purple-color">CONTACT US</h2>
				<div class="line mb-5"></div>
				<div class="row">
					<div class="col">
						<h6 class="purple-color">AL MADAR HOLDINGS W.L.L.</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li>P.O.Box: 2329, Doha - Qatar</li>
							<li>Tel.: +974 4455 4809</li>
							<li>Fax: +974 4467 3019</li>
							<li><a href="mailto:almadar@almadar-holding.com">almadar@almadar-holding.com</a></li>
						</ul>
					</div>
					<div class="col">
						<h6 class="purple-color">REAL ESTATE - QATAR</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li>Tel.: +974 4467 5405</li>
							<li>Tel.: +974 4455 4809</li>
							<li>Fax: +974 4467 3019</li>
							<li><a href="mailto:almadar.real@almadar-holding.com">almadar.real@almadar-holding.com</a></li>
							<li><a href="mailto:realestate@almadar-holding.com">realestate@almadar-holding.com</a></li>
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
							<li><a href="mailto:careers@almadar-holding.com">careers@almadar-holding.com</a></li>
						</ul>
					</div>
					<div class="col contact-list">
						<h6 class="purple-color">SUGGESTIONS? INQUIRIES?</h6>
						<a href="#" class="font-weight-bold pr-2" id="click-contact">CLICK HERE</a><img src="<?php echo get_template_directory_uri();?>/img/right-arrow.png" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>