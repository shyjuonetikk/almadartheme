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
						<a href="#" class="font-weight-bold pr-2" id="click-contact">CLICK HERE</a><img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<div id="contact-overlays" class="col-12 p-0 float-left">
	<div id="contact-cancel" class="col-lg-6 col-md-1 col-sm-1 col-1 float-left"></div>
	<div class="contact-form float-right w-100 px-5 py-2 bg-white col-lg-6 col-md-10 col-sm-10 col-10">
		<h2 class="purple-color prmy-font">Submit Your CV</h2>
		<hr>
		<p class="text-right text-danger font-weight-light">* Indicates required field</p>
		<!-- <form id="career-form">
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
		</form> -->
	</div>
</div>
<?php get_footer();?>