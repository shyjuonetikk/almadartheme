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
		<?php the_field('divisions_intro');?>
	</div>
	<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 p-0 m-0 shadow">
		<div class="card card-holder border-0">
			<img class="card-img-top img-fluid" src="<?php the_field('real_estate_image');?>" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title prmy-font font-weight-bold">Real Estate</h5>
				<p class="card-text"><?php the_field('real_estate_intro');?></p>
				<p class="mt-3">
					<a id="real-more" href="" class="second-color pr-2 prmy-font">Learn More</a>
					<img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" />
				</p>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 p-0 m-0 shadow">
		<div class="card card-holder border-0">
			<img class="card-img-top" src="<?php the_field('construction_image');?>" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title prmy-font font-weight-bold">Construction</h5>
				<p class="card-text"><?php the_field('construction_intro');?></p>
				<p class="mt-3">
					<a id="const-more" href="" class="second-color pr-2 prmy-font">Learn More</a>
					<img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" />
				</p>
			</div>
		</div>
	</div>
	<div class="col-xl-3 col-lg-6 col-md-6 col-sm-12 p-0 m-0 shadow">
		<div class="card card-holder border-0">
			<img class="card-img-top" src="<?php the_field('entertainment_image');?>" alt="Card image cap">
			<div class="card-body">
				<h5 class="card-title prmy-font font-weight-bold">Entertainment</h5>
				<p class="card-text"><?php the_field('entertainment_intro');?></p>
				<p class="mt-3">
					<a id="ent-more" href="" class="second-color pr-2 prmy-font">Learn More </a>
					<img class="right-arrow" src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" />
				</p>
			</div>
		</div>
	</div>
</div>


<div id="realestate-banner" class="row m-0 p-0 realestate-back mb-5">
	<div class="col-lg-6 col-md-12 p-5">
		<div class="real-left-overlay">
			<div class="row">
				<div class="col mt-5 ml-5 pt-5">
					<h1 class="text-white pt-5 pl-5 pr-5 prmy-font font-weight-bold">Real Estate</h1>
					<p class="text-white  pl-5 pr-5 pb-3 w-75 my-4 divi-content">Proin congue purus at metus laoreet,
						vitae tempor dui pulvinar. Mauris eu
						ante facilisis, hendrerit enim ut, ornare
						sem.</p>
					<!-- <a id="real-back" class="second-color pl-5 pr-5 pb-3" href="#">back</a> -->
					<a id="real-back" class="second-color pl-5 pr-5 pb-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/left-arrow.png">Back</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-12 p-5 reallists-box">
		<div class="real-right-overlay">
				<ul class="list-inline text-white reallists mt-5 pt-5">
					<?php
$query = new WP_Query(array(
	'post_type' => array('realestate'),
	'post_status' => 'publish',
	'order' => 'ASC',
));
while ($query->have_posts()) {
	$query->the_post();
	$post_id = get_the_ID();
	$post_title = get_the_title();
	$post_content = get_the_excerpt();
	$post_url = get_the_permalink();
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
	?>
				  <a href="<?php echo $post_url; ?>"><li class="media pl-7">
				    <!-- <img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/img/plus-sign.png" /> -->
				    <img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/img/plus-sign.png" />
				    <div class="media-body">
				      <h5 class="mt-0 mb-1"><?php echo $post_title; ?></h5>
				    </div>
				  </li>
				</a>
				<?php	}
wp_reset_query();?>
				</ul>
		</div>
	</div>
</div>


<div id="contruct-banner" class="row m-0 p-0 construct-back mb-5">
	<div class="col-lg-6 col-md-12 p-5">
		<div class="real-left-overlay">
			<div class="row">
				<div class="col mt-5 ml-5 pt-5">
					<h1 class="text-white pt-5 pl-5 pr-5">Construction</h1>
					<p class="text-white pl-5 pr-5 pb-3 w-75 divi-content">Proin congue purus at metus laoreet,	vitae tempor dui pulvinar. Mauris eu ante facilisis, hendrerit enim ut, ornare sem.</p>
					<a id="const-back" class="second-color pl-5 pr-5 pb-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/left-arrow.png">Back</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-12 p-5 reallists-box">
		<div class="real-right-overlay">
				<ul class="list-inline text-white reallists mt-5 pt-5">
				  <li class="media pl-7">
				    <img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/img/plus-sign.png" />
				    <div class="media-body">
				      <h5 class="mt-0 mb-1">Al Madar Contracting</h5>
				    </div>
				  </li>
				  <li class="media pl-7">
				    <img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/img/plus-sign.png" />
				    <div class="media-body">
				      <h5 class="mt-0 mb-1">Al Madar Engineering & Transportation</h5>
				    </div>
				  </li>
				  <li class="media pl-7">
				    <img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/img/plus-sign.png" />
				    <div class="media-body">
				      <h5 class="mt-0 mb-1">Al Madar Scala Engineering</h5>
				    </div>
				  </li>
				  <li class="media pl-7">
				    <img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/img/plus-sign.png" />
				    <div class="media-body">
				      <h5 class="mt-0 mb-1">Al Madar Wrough Iron</h5>
				    </div>
				  </li>
				  <li class="media pl-7">
				    <img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/img/plus-sign.png" />
				    <div class="media-body">
				      <h5 class="mt-0 mb-1">Al Madar Carpentry</h5>
				    </div>
				  </li>
				</ul>
		</div>
	</div>
</div>

<div id="enter-banner" class="row m-0 p-0 construct-back mb-5">
	<div class="col-lg-6 col-md-12 p-5">
		<div class="real-left-overlay">
			<div class="row">
				<div class="col mt-5 ml-5 pt-5">
					<h1 class="text-white pt-5 pl-5 pr-5">Entertainment</h1>
					<p class="text-white  pl-5 pr-5 pb-3 w-75 my-4 divi-content">Proin congue purus at metus laoreet,	vitae tempor dui pulvinar. Mauris eu ante facilisis, hendrerit enim ut, ornare sem.</p>
					<a id="ent-back" class="second-color pl-5 pr-5 pb-3" href="#"><img src="<?php echo get_template_directory_uri(); ?>/img/left-arrow.png">Back</a>
				</div>
			</div>
		</div>
	</div>
	<div class="col-lg-6 col-md-12 p-5 reallists-box">
		<div class="real-right-overlay">
				<ul class="list-inline text-white reallists mt-5 pt-5">
					<li class="media pl-7">
						<img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/img/plus-sign.png" />
						<div class="media-body">
							<h5 class="mt-0 mb-1">Al Madar Scala Entertainment</h5>
						</div>
					</li>
					<li class="media pl-7">
						<img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/img/plus-sign.png" />
						<div class="media-body">
							<h5 class="mt-0 mb-1">Al Madar Computer Training Center</h5>
						</div>
					</li>
					<li class="media pl-7">
						<img class="plus-sign" src="<?php echo get_template_directory_uri(); ?>/img/plus-sign.png" />
						<div class="media-body">
							<h5 class="mt-0 mb-1">Al Madar Tourism</h5>
						</div>
					</li>
				</ul>
		</div>
	</div>
</div>

<?php get_footer();?>