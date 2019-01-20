<?php
/*

Template Name: Divisions Page

Description: Template for displaying all divisions.

*/

get_header('division');
?>

<div class="row p-0 m-0 float-left mt-5 mb-5 divi-main">
		<div class="col divisions_main p-0 m-0 pt-5">
			<h4 class="text-white text-center mt-3 pt-3 prmy-font">DIVISIONS</h4>
			<p class="text-white pt-4 pl-5 pr-5 prmy-font divi-box">Proin congue purus at metus
				laoreet, vitae tempor dui pulvinar.
				Mauris eu ante facilisis, hendrerit
				enim ut, ornare sem. Aenean id
				libero eget lectus iaculis egestas.
				Ut sodales tellus in odio
				fermentum placerat.</p>
				<p class="text-white pr-5 pl-5 pt-2 prmy-font divi-box">
					Suspendisse eget ultrices turpis,
					nec egestas est. Pellentesque at
					lacus in turpis maximus facilisis
					ut et leo. In aliquam vestibulum
					rhoncus Real Estate, Construction
					and Entertainment.
				</p>
		</div>
		<div class="col p-0 m-0">
			<div class="card card-holder border-0">
			  <img class="card-img-top img-fluid" src="<?php echo get_template_directory_uri();?>/img/Realestatedivison.png" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Real Estate</h5>
			    <p class="card-text">Proin congue purus at metus laoreet,
				vitae tempor dui pulvinar. Mauris eu
				ante facilisis, hendrerit enim ut, ornare
				sem.</p>
			    <a href="#" class="second-color pr-2">Learn More</a>
			    <img class="right-arrow" src="<?php echo get_template_directory_uri();?>/img/right-arrow.png" />
			  </div>
			</div>
		</div>
		<div class="col p-0 m-0">
			<div class="card card-holder border-0">
			  <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/construction.png" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Construction</h5>
			    <p class="card-text">Proin congue purus at metus laoreet,
vitae tempor dui pulvinar.</p>
			    <a href="#" class="second-color pr-2">Learn More</a>
			    <img class="right-arrow" src="<?php echo get_template_directory_uri();?>/img/right-arrow.png" />
			  </div>
			</div>
		</div>
		<div class="col p-0 m-0">
			<div class="card card-holder border-0">
			  <img class="card-img-top" src="<?php echo get_template_directory_uri();?>/img/entertainment.png" alt="Card image cap">
			  <div class="card-body">
			    <h5 class="card-title">Entertainment</h5>
			    <p class="card-text">Proin congue purus at metus laoreet,
vitae tempor dui pulvinar. Mauris eu
ante facilisis, hendrerit enim ut.</p>
			    <a href="#" class="second-color pr-2">Learn More </a>
			    <img class="right-arrow" src="<?php echo get_template_directory_uri();?>/img/right-arrow.png" />
			  </div>
			</div>
		</div>
</div>

<?php get_footer(); ?>