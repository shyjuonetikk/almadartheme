<?php
/*

Template Name: Disclaimer
Description: Template for displaying Disclaimer.

 */
get_header('new');
?>

<div class="row m-0 p-0 mt-3 mb-5">
	<div class="container m-auto p-0">
		<div class="col-12 float-left">
			<div class="col-xl-2 col-lg-12 float-left py-5">
				<!-- <h2 class="purple-color"></h2> -->
				<div class="line mt-5"></div>
				<ul class="col-lg-12 text-center text-xl-left list-inline mt-4 disc-ul float-left px-0">
					<li class="font-weight-light purple-color float-left col-xl-12 col-lg-4 col-md-4 px-0" id="disclaimer-tab">DISCLAIMER</li>
					<li class="font-weight-light purple-color float-left col-xl-12 col-lg-4 col-md-4 px-0" id="terms-tab">TERMS & CONDITIONS</li>
					<li class="font-weight-light purple-color float-left col-xl-12 col-lg-4 col-md-4 px-0" id="privacy-tab">PRIVACY POLICY</li>
				</ul>
			</div>
			<div class="col-xl-10 col-lg-12 pl-4 pr-0 float-left">
				<div class="row m-0 projects-list">
					<div class="tab-content">
						<div id="disclaimer" class="">
							<h3 class="disclaimer-head">DISCLAIMER</h3>
							<p><?php the_field('disclaimer');?></p>
						</div>
						<div id="terms" class="">
							<h3 class="disclaimer-head">TERMS & CONDITIONS</h3>
							<p><?php the_field('terms_and_condition')?></p>
						</div>
						<div id="privacy" class="">
							<h3 class="disclaimer-head">PRIVACY POLICY</h3>
							<p><?php the_field('privacy_policy')?></p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>