<?php

/**

Template for displaying all posts from Realestate

*/
get_header('division');
?>
<div class="row m-0 p-5 mb-5">
	<div class="container">
		<div class="row m-0 p-0">
			<div class="col">
				<div class="real-image-container">
					<img class="real-image" src="<?php echo get_template_directory_uri();?>/img/almadarrealestate1.png" />
					<div class="real-overlay">
						<div class="real-title">WHAT WE DO<div class="clear-fix"></div>
							<img class="pt-3" src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-white.png" />
						</div>
					</div>
				</div>
			</div>
			<div class="col">
				<div class="real-image-container">
					<img class="real-image" src="<?php echo get_template_directory_uri();?>/img/almadarrealestate2.png" />
					<div class="real-overlay">
						<div class="real-title">OUR PROJECTS<div class="clear-fix"></div>
						<img class="pt-3" src="<?php echo get_template_directory_uri(); ?>/img/down-arrow-white.png" />
					</div>
					</div>
				</div>
			</div>
		</div>
		<div class="row mt-5 p-5">
			<div class="col purple-color fs-12 lh-paragraph">
				<p>
						Established in 1992, Al Madar Real Estate has been a significant division
						of Al Madar Holding.
				</p>
				<p>The major achievements of the Company were based on solid
						foundations that include excellent planning and accurate Feasibility
						Studies for each and every project, the effectiveness of these foundation
						are corroborated by the vivid financial returns on our company’s well
						calculated investments in the real estate developments without exceeding
						the designated budgets.
				</p>
				<p>The Company is assisted by a highly qualified team players and it is
						supported by the most advanced technologies and equipment’s to deliver
						the best results all the time.
				</p>
			</div>
			<div class="col">
				<img class="img-fluid float-right w-75" src="<?php echo get_template_directory_uri();?>/img/almadarrealestate3.png" />
			</div>
		</div>
		<div class="container text-center">
			<img class="img-fluid project-head mb-5" src="<?php echo get_template_directory_uri();?>/img/projectsheading.png" />
		</div>
		<div class="container pl-5 pr-5">
			<div class="row pl-5 pr-5 projects-list">
				<div class="col-6 mb-3 pl-0 float-left">
					<div class="card border-0 rounded-0 w-100">
						<div class="image-container">
					  		<img class="card-img-top image border-0 rounded-0" src="<?php echo get_template_directory_uri();?>/img/news1.png" alt="Card image cap">
					  		<div class="overlay"></div>
					  	</div>
					  <div class="card-body border-0 rounded-0 pl-0 ml-0">
					    <h6 class="card-title purple-color">Dunes Hotel Tower</h6>
					    <p class="card-text fs-12 purple-color">Construction of Five Stars Dunes Hotel 2B G 21F in West Bay with all complete finishing works…</p>
					    <span class="purple-color float-left fs-12">Oct 1, 2018</span>
					    <a href="#" class="float-right fs-12 second-color">Read More</a>
					  </div>
					</div>
				</div>
				<div class="col-6 mb-3 pr-0 float-right">
					<div class="card border-0 rounded-0 w-100">
					  <div class="image-container">
					  		<img class="card-img-top image border-0 rounded-0" src="<?php echo get_template_directory_uri();?>/img/news2.png" alt="Card image cap">
					  		<div class="overlay"></div>
					  </div>
					  <div class="card-body border-0 rounded-0 pl-0 ml-0">
					    <h6 class="card-title purple-color">Dunes Hotel Tower</h6>
					    <p class="card-text fs-12 purple-color">Construction of Five Stars Dunes Hotel 2B G 21F in West Bay with all complete finishing works…</p>
					    <span class="purple-color float-left fs-12">Oct 1, 2018</span>
					    <a href="#" class="float-right fs-12 second-color">Read More</a>
					  </div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>