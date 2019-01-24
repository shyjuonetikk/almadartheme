<?php
/*

Template Name: Divisions Page

Description: Template for displaying all divisions.

 */

get_header('division');
?>

<div class="row p-0 m-0 float-left mt-5 mb-5 divi-main">
		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 divisions_main p-0 m-0 pt-5 shadow">
			<h4 class="text-white text-center mt-3 pt-3 prmy-font">DIVISIONS</h4>
			<p class="text-white pt-4 pl-5 pr-5 sec-font font-weight-light divi-box">Proin congue purus at metus laoreet, vitae tempor dui pulvinar. Mauris eu ante facilisis, hendrerit	enim ut, ornare sem. Aenean id libero eget lectus iaculis egestas. Ut sodales tellus in odio fermentum placerat.</p>
			<p class="text-white pt-4 pl-5 pr-5 sec-font font-weight-light divi-box">Suspendisse eget ultrices turpis, nec egestas est. Pellentesque at lacus in turpis maximus facilisis ut et leo. In aliquam vestibulum rhoncus Real Estate, Construction and Entertainment.</p>
		</div>
		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 p-0 m-0 shadow">
			<div class="card card-holder border-0">
			  <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri(); ?>/img/Realestatedivison.png" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title prmy-font font-weight-bold">Real Estate</h5>
			    <p class="card-text px-2">Proin congue purus at metus laoreet, vitae tempor dui pulvinar. Mauris eu ante facilisis, hendrerit enim ut, ornare sem.</p>
			    <a href="#" class="second-color pr-2">Learn More</a>
			    <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" />
			  </div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 p-0 m-0 shadow">
			<div class="card card-holder border-0">
			  <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/construction.png" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title prmy-font font-weight-bold">Construction</h5>
			    <p class="card-text px-2">Proin congue purus at metus laoreet, vitae tempor dui pulvinar.</p>
			    <a href="#" class="second-color pr-2">Learn More</a>
			    <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" />
			  </div>
			</div>
		</div>
		<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 p-0 m-0 shadow">
			<div class="card card-holder border-0">
			  <img class="card-img-top" src="<?php echo get_template_directory_uri(); ?>/img/entertainment.png" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title prmy-font font-weight-bold">Entertainment</h5>
			    <p class="card-text px-2">Proin congue purus at metus laoreet, vitae tempor dui pulvinar. Mauris eu ante facilisis, hendrerit enim ut.</p>
			    <a href="#" class="second-color pr-2">Learn More </a>
			    <img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" />
			  </div>
			</div>
		</div>
</div>


<!-- <div id="estate-overlays" class="col-12 p-0 float-left" style="background: url(<?php echo get_template_directory_uri(); ?>/img/Realestatedivison.png)">
	<div id="estate-left" class="float-left col-lg-6">
		<div class="container">
			<h1>Real Estate</h1>
			<p>Proin congue purus at metus laoreet, vitae tempor dui pulvinar. Mauris eu ante facilisis, hendrerit enim ut, ornare sem.</p>
			<p><a id="real-back" href="#">Back</a></p>
		</div>
	</div>
	<div id="estate-right" class="float-left col-lg-6">
		<div class="real-option col-12 p-0 m-0">
			<ul class="col-12">
				<li>Al Madar Real Estate</li>
				<li>Al Madar Int’l / Investment (Dubai/Germany)</li>
				<li>Al Madar Project Mgmt.</li>
				<li>Nobles Real Estate</li>
			</ul>
		</div>
	</div>
</div> -->
<?php get_footer();?>