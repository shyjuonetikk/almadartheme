<?php
/**
 * Template Name: Careers
 */
get_header('career');
?>
<div class="about-page">
	<div class="col-xl-12 float-left">
		<div class="container">
			<div id="msg-chairman" class="col-xl-12 mb-5 p-0 float-left">
				<div class="col-12 m-0 p-0 text-center text-white about-bg mb-5">
					<h4 class="px-5 py-3 font-weight-normal">Human Resources</h4>
				</div>
				<div class="container">
					<div class="col-lg-12 float-left">
						<p class="msg-md">Our main focus has always been to deliver the very best quality combined absolute professionalism and the utmost integrity throughout the Company in every area of our activity. With over 600 employees we have successfully delivered 160 buildings and landmarks since the establishment of the business 25 years ago. Al Madar Holding W.L.L is proud to continue contributing to the ever improving international skylines. The economic and constant infrastructure improvements in Qatar under the expert guidance of H.H. Sheikh Tamim Bin Hamad Al-Thani, the Emir apparent are further evidence of the confidence in the GCC region. With multi-trades and multiple companies, the Company has expanded over the years with developments in Real Estate such as Villa Compounds, Commercial Towers and Residential Towers. The journey continues and we are now heavily investing and committing resources creating Master Plans and Joint Ventures in Qatar, U.A.E., GCC and other international countries. We look forward to further enhancing our valued and trusted international reputation.
						</p>
					</div>
				</div>
			</div>
		</div>
	</div>

	<p id="send-cv" class="col-12 text-center float-left">
		<a href="">SEND US YOUR CV<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-dblue.png"></a>
	</p>

	<div id="career-table-container" class="col-12 float-left mb-5 bg-white p-4">
		<table id="careers-table" class="col-12 text-center msg-md mb-5">
			<thead>
				<th>ROLE</th>
				<th>LOCATION</th>
				<th>DIVISION</th>
			</thead>
			<tbody>
				<tr>
					<td>
						<p class="job-title">MEP Engineer</p>
						<p class="job-close-date">CLOSING DATE: 12 / 12 / 2018</p>
					</td>
					<td>
						<p class="job-location">Doha, Qatar</p>
						<p></p>
					</td>
					<td>
						<p class="job-cat">Al Madar Real Estate</p>
						<p class="job-apply"><a href="#">Apply<img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-small.png"></a></p>
					</td>
				</tr>
				<tr>
					<td>
						<p class="job-title">Civil Engineer</p>
						<p class="job-close-date">CLOSING DATE: 12 / 12 / 2018</p>
					</td>
					<td>
						<p class="job-location">Doha, Qatar</p>
						<p></p>
					</td>
					<td>
						<p class="job-cat">Al Madar Real Estate</p>
						<p class="job-apply"><a href="#">Apply<img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-small.png"></a></p>
					</td>
				</tr>
				<tr>
					<td>
						<p class="job-title">Architect</p>
						<p class="job-close-date">CLOSING DATE: 12 / 12 / 2018</p>
					</td>
					<td>
						<p class="job-location">Doha, Qatar</p>
						<p></p>
					</td>
					<td>
						<p class="job-cat">Al Madar Real Estate</p>
						<p class="job-apply"><a href="#">Apply<img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-small.png"></a></p>
					</td>
				</tr>
				<tr>
					<td>
						<p class="job-title">Civil Foreman</p>
						<p class="job-close-date">CLOSING DATE: 12 / 12 / 2018</p>
					</td>
					<td>
						<p class="job-location">Doha, Qatar</p>
						<p></p>
					</td>
					<td>
						<p class="job-cat">Al Madar Real Estate</p>
						<p class="job-apply"><a href="#">Apply<img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-small.png"></a></p>
					</td>
				</tr>
				<tr>
					<td>
						<p class="job-title">Draftsman</p>
						<p class="job-close-date">CLOSING DATE: 12 / 12 / 2018</p>
					</td>
					<td>
						<p class="job-location">Doha, Qatar</p>
						<p></p>
					</td>
					<td>
						<p class="job-cat">Al Madar Real Estate</p>
						<p class="job-apply"><a href="#">Apply<img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-small.png"></a></p>
					</td>
				</tr>
			</tbody>
		</table>
	</div>
</div>

<div id="career-overlays" class="col-12 p-0 float-left">
	<div class="career-form float-left w-100 px-5 py-2 bg-white col-lg-6 col-md-12 offset-lg-6">
		<h2>Submit</h2>
		<hr>
		<form>
			<div class="form-group">
				<label for="first name">First Name<span class="text-danger">*</span></label>
				<input type="text" class="form-control" id="career-first-name">
			</div>
			<div class="form-group">
				<label for="last name">Last Name<span class="text-danger">*</span></label>
				<input type="text" class="form-control" id="career-last-name">
			</div>
			<div class="form-group">
				<label for="Email Address">Email address<span class="text-danger">*</span></label>
				<input type="email" class="form-control" id="career-email">
			</div>
			<div class="form-group">
				<label for="Phone Number">Phone Number</label>
				<input type="email" class="form-control" id="career-phone">
			</div>
			<div class="form-group">
				<label for="Location">Location<span class="text-danger">*</span></label>
				<input type="text" class="form-control" id="career-location">
			</div>
			<div class="form-group">
				<label for="Nationality">Nationality<span class="text-danger">*</span></label>
				<select class="form-control" id="career-nationality">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="function">Function<span class="text-danger">*</span></label>
				<select class="form-control" id="career-function">
					<option>1</option>
					<option>2</option>
					<option>3</option>
					<option>4</option>
					<option>5</option>
				</select>
			</div>
			<div class="form-group">
				<label for="resume">Submit Your CV<span class="text-danger">*</span></label>
				<input type="file" class="form-control-file" id="career-resume">
			</div>
			<div class="form-check">
				<input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
				<label class="form-check-label" for="defaultCheck1">I accept the Al Madar <span class="career-links">Privacy Policy</span> and <span class="career-links">Terms and conditions</span></label>
			</div>
			<button type="submit" class="btn btn-primary text-right">Submit</button>
			<p>We value your privacy.</p>
		</form>
	</div>
</div>

<?php get_footer();?>
