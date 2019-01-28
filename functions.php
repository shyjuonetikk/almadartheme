<?php
/**
 * Almadar functions and definitions
 *
 *
 */

if (!defined('ABSPATH')) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php', // Initialize theme default settings.
	'/setup.php', // Theme setup and custom theme supports.
	'/widgets.php', // Register widget area.
	'/enqueue.php', // Enqueue scripts and styles.
	'/template-tags.php', // Custom template tags for this theme.
	'/pagination.php', // Custom pagination for this theme.
	'/hooks.php', // Custom hooks.
	'/extras.php', // Custom functions that act independently of the theme templates.
	'/customizer.php', // Customizer additions.
	'/custom-comments.php', // Custom Comments file.
	'/jetpack.php', // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php', // Load custom WordPress nav walker.
	'/woocommerce.php', // Load WooCommerce functions.
	'/editor.php', // Load Editor functions.
);

foreach ($understrap_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}

$args = array(
	'flex-width' => true,
	'width' => 1920,
	'flex-height' => true,
	'height' => 1058,
	'default-image' => get_template_directory_uri() . '/img/Headerback.png',
);
add_theme_support('custom-header', $args);
function trim_excerpt($text) {
	return str_replace(' [...]', '', $text);
}
add_filter('get_the_excerpt', 'trim_excerpt');

function more_post_ajax() {
	$offset = $_POST["offset"];
	$ppp = 2;
	$postype = $_POST["postype"];
	$status = $_POST["status"];
	$place = $_POST["place"];
	if ($status == 'all') {
		$query = new WP_Query(array(
			'post_type' => $postype,
			'post_status' => 'publish',
			'posts_per_page' => $ppp,
			'meta_key' => 'place',
			'meta_value' => $place,
			'paged' => $offset,
		));
	} else {
		$query = new WP_Query(array(
			'post_type' => $postype,
			'post_status' => 'publish',
			'meta_query' => array(
				'relation' => 'AND', //**** Use AND or OR as per your required Where Clause
				array(
					'key' => 'status',
					'value' => $status,
				),
				array(
					'key' => 'place',
					'value' => $place,
				),
			),
			'posts_per_page' => $ppp,
			'paged' => $offset,
		));
	}
	if ($query->have_posts()) {

		while ($query->have_posts()) {
			$query->the_post();
			$post_id = get_the_ID();
			$post_title = get_the_title();
			$post_content = get_the_excerpt();
			$post_url = get_the_permalink();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
			?>
			<div class="col-12 col-md-6 mb-3 px-4">
				<div class="card border-0 rounded-0 w-100">
					<div class="image-container">
				  		<img class="card-img-top project-card-image image" src="<?php echo $featured_img_url; ?>" alt="<?php echo $post_title; ?>">
				  		<div class="overlay"></div>
				  	</div>
				  <div class="card-body border-0 rounded-0 pl-0 ml-0">
				    <h6 class="card-title purple-color"><?php echo $post_title; ?></h6>
				    <p class="card-text fs-12 purple-color"><?php echo $post_content; ?></p>
				    <span class="purple-color float-left fs-12"><?php echo get_the_date(); ?> </span>
				    <a href="<?php echo $post_url; ?>" class="float-right fs-12">Read More</a>
				  </div>
				</div>
			</div>
				<?php	}
		wp_reset_query();
	} else {
	}
	exit;
}
add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax');
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');

// filter projects as per status

function load_projects_status() {
	$ppp = 2;
	$posttype = $_POST["posttype"];
	$status = $_POST["status"];
	$place = $_POST["place"];
	?>

	<div class="row m-0 projects-list">
		<?php
if ($status == 'all') {
		$query = new WP_Query(array(
			'post_type' => $posttype,
			'post_status' => 'publish',
			'posts_per_page' => $ppp,
			'meta_key' => 'place',
			'meta_value' => $place,
		));
	} else {
		$query = new WP_Query(array(
			'post_type' => $posttype,
			'post_status' => 'publish',
			'meta_query' => array(
				'relation' => 'AND', //**** Use AND or OR as per your required Where Clause
				array(
					'key' => 'status',
					'value' => $status,
				),
				array(
					'key' => 'place',
					'value' => $place,
				),
			),
			'posts_per_page' => $ppp,
		));
	}
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			$post_id = get_the_ID();
			$post_title = get_the_title();
			$post_content = get_the_excerpt();
			$post_url = get_the_permalink();
			$maxpages = $query->max_num_pages;
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
			?>
		<input type="hidden" value="<?php echo $place; ?>" id="place">
		<div class="col-12 col-md-6 mb-3 px-4">
			<div class="card border-0 rounded-0 w-100">
				<div class="image-container">
			  		<img class="card-img-top project-card-image image" src="<?php echo $featured_img_url; ?>" alt="<?php echo $post_title; ?>">
			  		<div class="overlay"></div>
			  	</div>
			  <div class="card-body border-0 rounded-0 pl-0 ml-0">
			    <h6 class="card-title purple-color"><?php echo $post_title; ?></h6>
			    <p class="card-text fs-12 purple-color"><?php echo $post_content; ?></p>
			    <span class="purple-color float-left fs-12"><?php echo get_the_date(); ?> </span>
			    <a href="<?php echo $post_url; ?>" class="float-right fs-12">Read More</a>
			  </div>
			</div>
		</div>
<?php }
		wp_reset_query();?>
	</div>
	<div class="row">
		<div class="col m-auto text-center">
			<i class="fas fa-spinner fa-spin" id="loading-indicator" style="display:none;"></i>
			<a id="more_posts" data-post-type="projects" data-posts-per-page="1" data-max-pages="<?php echo $maxpages; ?>" data-status-project="<?php echo $status; ?>">More<img class="text-center" src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" /> </a>
		</div>
	</div>
<?php } else {echo "<div class='row w-100 pt-4'><h4 class='purple-color m-auto'> No projects found.. </h4></div>";}?>
<script type="text/javascript">
	$( document ).ready(function(){
	var ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
    var page = 1; // What page we are on.

	$("#more_posts").on("click",function(){
		 // When btn is pressed.
		var place = $("#place").val();
		var post_type = $(this).data('post-type');
		var post_per_page = $(this).data('posts-per-page');
		var status_project = $(this).data('status-project');
		var max_pages = $(this).data('max-pages');
		$("#more_posts").hide();
		$("#loading-indicator").toggle();
        // $("#more_posts").attr("disabled",true); // Disable the button, temp.
		$.post(ajaxUrl,{action:"more_post_ajax",
            offset: (page * post_per_page) + 1,
			ppp: post_per_page,
			postype: post_type,
			status: status_project,
			place: place
		},
		 function(data){
			 if(data == ''){
			 		$("#loading-indicator").toggle();
			 		$("#more_posts").hide();
			 	}
			 	else{
				 	 page++;
					 $(".projects-list").append(data);
					 $("#loading-indicator").toggle();
					 if(max_pages == page){
					 	$("#more_posts").hide();
					 }else{
					 	$("#more_posts").show();
					 }
			 	}
			});

   });
});
</script>
<?php exit;}

add_action('wp_ajax_nopriv_load_projects_status', 'load_projects_status');
add_action('wp_ajax_load_projects_status', 'load_projects_status');

function filter_country() {
	$place = $_POST['place'];

	$query = new WP_Query(array(
		'post_type' => array('projects'),
		'post_status' => 'publish',
		'meta_query' => array(
			'relation' => 'AND', //**** Use AND or OR as per your required Where Clause
			array(
				'key' => 'status',
				'value' => 'ongoing',
			),
			array(
				'key' => 'place',
				'value' => $place,
			),
		),
		'posts_per_page' => 2,
	));
	$maxpages = $query->max_num_pages;
	?>

	<div class="col-12 col-md-3 col-lg-2 float-left">
		<h2 class="purple-color">PROJECTS</h2>
		<div class="line"></div>
		<ul class="list-inline mt-4 projects-ul" id="status-list">
			<li class="font-weight-bold purple-color" data-status_list="ongoing" data-max-pages="<?php echo $maxpages; ?>" data-post_type="projects" data-posts_per_page="1">ON - GOING PROJECTS</li>
			<li class="purple-color" data-status_list="completed" data-max-pages="<?php echo $maxpages; ?>" data-post_type="projects" data-posts_per_page="1">COMPLETED PROJECTS</li>
			<li class="purple-color" data-status_list="all" data-max-pages="<?php echo $maxpages; ?>" data-post_type="projects" data-posts_per_page="1">ALL PROJECTS</li>
		</ul>
		<input type="hidden" name="place" id="place" value="<?php echo $place; ?>" />
	</div>
	<div class="col-12 col-md-9 col-lg-10 pl-4 pr-0 float-left" id="projects-list">
		<div class="row m-0 projects-list">
		<?php


	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			$post_id = get_the_ID();
			$post_title = get_the_title();
			$post_content = get_the_excerpt();
			$post_url = get_the_permalink();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
			?>
			<div class="col-12 col-md-6 mb-3 px-4">
				<div class="card border-0 rounded-0 w-100">
					<div class="image-container">
				  		<img class="card-img-top project-card-image image" src="<?php echo $featured_img_url; ?>" alt="<?php echo $post_title; ?>">
				  		<div class="overlay"></div>
				  	</div>
				  <div class="card-body border-0 rounded-0 pl-0 ml-0">
				    <h6 class="card-title purple-color"><?php echo $post_title; ?></h6>
				    <p class="card-text fs-12 purple-color"><?php echo $post_content; ?></p>
				    <span class="purple-color float-left fs-12"><?php echo get_the_date(); ?> </span>
				    <a href="<?php echo $post_url; ?>" class="float-right fs-12">Read More</a>
				  </div>
				</div>
			</div>
			<?php	}
		wp_reset_query();
		?>
		</div>
		<div class="row">
			<div class="col m-auto text-center">
				<i class="fas fa-spinner fa-spin" id="loading-indicator" style="display:none;"></i>
				<a id="more_posts" data-post-type="projects" data-posts-per-page="1" data-max-pages="<?php echo $maxpages; ?>" data-status-project="ongoing">More<img class="text-center" src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" /> </a>
			</div>
		</div>
	<?php } else {echo "<div class='row w-100 pt-4'><h4 class='purple-color m-auto'> No projects found.. </h4></div>";}?>
	</div>
<script type="text/javascript">
	$( document ).ready(function(){
	var ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
    var page = 1; // What page we are on.

	$("#more_posts").on("click",function(){
		var place = $("#place").val();
		var post_type = $(this).data('post-type');
		var post_per_page = $(this).data('posts-per-page');
		var status_project = $(this).data('status-project');
        $("#more_posts").hide();
		$("#loading-indicator").toggle();
		$.post(ajaxUrl,{action:"more_post_ajax",
            offset: (page * post_per_page) + 1,
			ppp: post_per_page,
			postype: post_type,
			status: status_project,
			place: place
		},
			 function(data){
				 if(data == ''){
			 		$("#loading-indicator").toggle();
			 		$("#more_posts").hide();
			 	}
			 	else{
				 	 page++;
					 $(".projects-list").append(data);
					 $("#loading-indicator").toggle();
					 if(max_pages == page){
					 	$("#more_posts").hide();
					 }else{
					 	$("#more_posts").show();
					 }
			 	}
  			});
   });

	$("#status-list li").on("click",function(){
			var post_type = $(this).data('post_type');
			var post_per_page = $(this).data('posts_per_page');
			var status = $(this).data('status_list');
			var place = $("#place").val();
			$(this).addClass('font-weight-bold').siblings().removeClass('font-weight-bold');
			$.post(ajaxUrl,{action:"load_projects_status",
				ppp: post_per_page,
				posttype: post_type,
				status: status,
				place: place
			},
			 function(data){
				 $("#projects-list").html(data);
				});
	});
});
</script>
<?php exit;}

add_action('wp_ajax_nopriv_filter_country', 'filter_country');
add_action('wp_ajax_filter_country', 'filter_country');

function more_news_ajax() {
	$offset = $_POST["offset"];
	$ppp = 2;
	$postype = $_POST["postype"];
	$news_type = $_POST["news_type"];
	$place = $_POST["place"];
	if ($news_type == 'all') {
		$query = new WP_Query(array(
			'post_type' => $postype,
			'post_status' => 'publish',
			'posts_per_page' => $ppp,
			'meta_key' => 'news_location',
			'meta_value' => $place,
			'paged' => $offset,
		));
	} else {
		$query = new WP_Query(array(
			'post_type' => $postype,
			'post_status' => 'publish',
			'meta_query' => array(
				'relation' => 'AND', //**** Use AND or OR as per your required Where Clause
				array(
					'key' => 'news_type',
					'value' => $news_type,
				),
				array(
					'key' => 'news_location',
					'value' => $place,
				),
			),
			'posts_per_page' => $ppp,
			'paged' => $offset,
		));
	}
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			$post_id = get_the_ID();
			$post_title = get_the_title();
			$post_content = get_the_excerpt();
			$post_url = get_the_permalink();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
			?>
<div class="col-12 col-md-6 mb-3 px-4">
	<div class="card border-0 rounded-0 w-100">
		<div class="image-container">
	  		<img class="card-img-top project-card-image image" src="<?php echo $featured_img_url; ?>" alt="<?php echo $post_title; ?>">
	  		<div class="overlay"></div>
	  	</div>
	  <div class="card-body border-0 rounded-0 pl-0 ml-0">
	    <h6 class="card-title purple-color"><?php echo $post_title; ?></h6>
	    <p class="card-text fs-12 purple-color"><?php echo $post_content; ?></p>
	    <span class="purple-color float-left fs-12"><?php echo get_the_date(); ?> </span>
	    <a href="<?php echo $post_url; ?>" class="float-right fs-12">Read More</a>
	  </div>
	</div>
</div>

<?php	}
		wp_reset_query();} else {}
	exit;}

add_action('wp_ajax_nopriv_more_news_ajax', 'more_news_ajax');
add_action('wp_ajax_more_news_ajax', 'more_news_ajax');

function load_news_by_type() {
	$ppp = 2;
	$posttype = $_POST["posttype"];
	$news_type = $_POST["news_type"];
	$place = $_POST["place"];
	echo '<div class="row m-0 projects-list">';
	if ($news_type == 'all') {
		$query = new WP_Query(array(
			'post_type' => $posttype,
			'post_status' => 'publish',
			'posts_per_page' => $ppp,
			'meta_key' => 'news_location',
			'meta_value' => $place,
		));
	} else {
		$query = new WP_Query(array(
			'post_type' => $posttype,
			'post_status' => 'publish',
			'meta_query' => array(
				'relation' => 'AND', //**** Use AND or OR as per your required Where Clause
				array(
					'key' => 'news_type',
					'value' => $news_type,
				),
				array(
					'key' => 'news_location',
					'value' => $place,
				),
			),
			'posts_per_page' => $ppp,
		));
	}
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			$post_id = get_the_ID();
			$post_title = get_the_title();
			$post_content = get_the_excerpt();
			$post_url = get_the_permalink();
			$maxpages = $query->max_num_pages;
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
			?>
<input type="hidden" value="<?php echo $place; ?>" id="place" />
<div class="col-12 col-md-6 mb-3 px-4">
	<div class="card border-0 rounded-0 w-100">
		<div class="image-container">
	  		<img class="card-img-top project-card-image image" src="<?php echo $featured_img_url; ?>" alt="<?php echo $post_title; ?>">
	  		<div class="overlay"></div>
	  	</div>
	  <div class="card-body border-0 rounded-0 pl-0 ml-0">
	    <h6 class="card-title purple-color"><?php echo $post_title; ?></h6>
	    <p class="card-text fs-12 purple-color"><?php echo $post_content; ?></p>
	    <span class="purple-color float-left fs-12"><?php echo get_the_date(); ?> </span>
	    <a href="<?php echo $post_url; ?>" class="float-right fs-12">Read More</a>
	  </div>
	</div>
</div>
<?php	}
		wp_reset_query();?>
</div>
<div class="row">
	<div class="col m-auto text-center">
		<i class="fas fa-spinner fa-spin" id="loading-indicator" style="display:none;"></i>
		<a id="more_news" data-post-type="almadarnews" data-posts-per-page="1" data-max-pages="<?php echo $maxpages; ?>" data-news_type="<?php echo $news_type; ?>">More<img class="text-center" src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" /> </a>
	</div>
</div>
<?php } else {echo "<div class='row w-100 pt-4'><h4 class='purple-color m-auto'> No news found.. </h4></div>";}?>
<script type="text/javascript">
	$( document ).ready(function(){
	var ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
    var page = 1; // What page we are on.

	$("#more_news").on("click",function(){
		 // When btn is pressed.
		var place = $("#place").val();
		var post_type = $(this).data('post-type');
		var post_per_page = $(this).data('posts-per-page');
		var news_type = $(this).data('news_type');
        $("#more_news").hide();
		$("#loading-indicator").toggle();
		$.post(ajaxUrl,{action:"more_news_ajax",
            offset: (page * post_per_page) + 1,
			ppp: post_per_page,
			postype: post_type,
			news_type: news_type,
			place: place
		},
			 function(data){
				 if(data == ''){
			 		$("#loading-indicator").toggle();
			 		$("#more_news").hide();
			 	}
			 	else{
				 	 page++;
					 $(".projects-list").append(data);
					 $("#loading-indicator").toggle();
					 if(max_pages == page){
					 	$("#more_news").hide();
					 }else{
					 	$("#more_news").show();
					 }
			 	}
  			});
    });
});
</script>

<?php exit;}

add_action('wp_ajax_nopriv_load_news_by_type', 'load_news_by_type');
add_action('wp_ajax_load_load_news_by_type', 'load_news_by_type');

function news_filter_country() {
	$query = new WP_Query(array(
		'post_type' => array('almadarnews'),
		'post_status' => 'publish',
		'meta_query' => array(
			'relation' => 'AND', //**** Use AND or OR as per your required Where Clause
			array(
				'key' => 'news_type',
				'value' => 'realestate',
			),
			array(
				'key' => 'news_location',
				'value' => $place,
			),
		),
		'posts_per_page' => 2,
	));
	$maxpages = $query->max_num_pages;
	$place = $_POST['place'];
	echo '
	<div class="col-12 col-md-3 col-lg-2 float-left">
		<h2 class="purple-color">News</h2>
		<div class="line"></div>
		<ul class="list-inline mt-4 projects-ul row" id="news-type">
			<li class="font-weight-bold col-6 col-md-12 col-sm-3 purple-color" data-news_type="realestate" data-post_type="almadarnews" data-max-pages="'.$maxpages.'" data-posts_per_page="1">REAL ESTATE</li>
			<li class="purple-color col-6 col-md-12 col-sm-3" data-news_type="construction" data-post_type="almadarnews" data-max-pages="'.$maxpages.'" data-posts_per_page="1">CONSTRUCTION</li>
			<li class="purple-color col-6 col-md-12 col-sm-3" data-news_type="entertainment" data-post_type="almadarnews" data-max-pages="'.$maxpages.'" data-posts_per_page="1">ENTERTAINMENT</li>
			<li class="purple-color col-6 col-md-12 col-sm-3" data-max-pages="'.$maxpages.'" data-news_type="all" data-post_type="almadarnews" data-posts_per_page="1">ALL UPDATES</li>
		</ul>
	</div>
	<div class="col-12 col-md-9 col-lg-10  pl-4 pr-0 float-left" id="projects-list">
		<div class="row m-0 projects-list">';
	if ($query->have_posts()) {
		while ($query->have_posts()) {
			$query->the_post();
			$post_id = get_the_ID();
			$post_title = get_the_title();
			$post_content = get_the_excerpt();
			$post_url = get_the_permalink();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
			?>

<div class="col-12 col-md-6 mb-3 px-4">
	<div class="card border-0 rounded-0 w-100">
		<div class="image-container">
	  		<img class="card-img-top project-card-image image" src="<?php echo $featured_img_url; ?>" alt="<?php echo $post_title; ?>">
	  		<div class="overlay"></div>
	  	</div>
	  <div class="card-body border-0 rounded-0 pl-0 ml-0">
	    <h6 class="card-title purple-color"><?php echo $post_title; ?></h6>
	    <p class="card-text fs-12 purple-color"><?php echo $post_content; ?></p>
	    <span class="purple-color float-left fs-12"><?php echo get_the_date(); ?> </span>
	    <a href="<?php echo $post_url; ?>" class="float-right fs-12">Read More</a>
	  </div>
	</div>
</div>
<?php }
		wp_reset_query();?>
</div>
	<div class="col m-auto text-center">
		<i class="fas fa-spinner fa-spin" id="loading-indicator" style="display:none;"></i>
		<a id="more_news" data-post-type="almadarnews" data-max-pages="<?php echo $maxpages; ?>" data-posts-per-page="1" data-news_type="realestate">More<img class="text-center" src="<?php echo get_template_directory_uri(); ?>/img/arrow-down.png" /> </a>
	</div>
<?php } else {echo "<div class='row w-100 pt-4'><h4 class='purple-color m-auto'> No news found.. </h4></div>";}?>
</div>
<script type="text/javascript">
	$( document ).ready(function(){
	var ajaxUrl = "<?php echo admin_url('admin-ajax.php') ?>";
    var page = 1; // What page we are on.

	$("#more_news").on("click",function(){
		 // When btn is pressed.
		var place = $("#place").val();
		var post_type = $(this).data('post-type');
		var post_per_page = $(this).data('posts-per-page');
		var news_type = $(this).data('news-type');
        $("#more_news").hide(); // Disable the button, temp.
		$("#loading-indicator").toggle();
		$.post(ajaxUrl,{action:"more_news_ajax",
            offset: (page * post_per_page) + 1,
			ppp: post_per_page,
			postype: post_type,
			news_type: news_type,
			place: place
		},
			 function(data){
				 if(data == ''){
			 		$("#loading-indicator").toggle();
			 		$("#more_news").hide();
			 	}
			 	else{
				 	 page++;
					 $(".projects-list").append(data);
					 $("#loading-indicator").toggle();
					 if(max_pages == page){
					 	$("#more_news").hide();
					 }else{
					 	$("#more_news").show();
					 }
			 	}
  			});
    });

    // filter by news type

    $("#news-type li").on("click",function(){
		var post_type = $(this).data('post_type');
		var post_per_page = $(this).data('posts_per_page');
		var news_type = $(this).data('news_type');
		var place = $("#place").val();
		$(this).addClass('font-weight-bold').siblings().removeClass('font-weight-bold');
		$.post(ajaxUrl,{action: "load_news_by_type",
			ppp: post_per_page,
			posttype: post_type,
			news_type: news_type,
			place: place
		},
		 function(data){
			 $("#projects-list").html(data);
			});
   });
});
</script>
<?php exit;}

add_action('wp_ajax_nopriv_news_filter_country', 'news_filter_country');
add_action('wp_ajax_news_filter_country', 'news_filter_country');

function menu_id_page($item, $args) {
	$page = get_post($args->object_id);
	$item = $page->post_name;
	return $item;
}
add_filter('nav_menu_item_id', 'menu_id_page', 10, 2);

function ajax_mail() {
	$email = $_POST['email'];
	$recipient_email = "jithinvjayaprakash@gmail.com";
	$from_email = "hr@almadar.com"; //from email using site domain.
	$message_body = "Newseletter request from the Mail ID:\t" . $email;

	//send plain email otherwise
	$headers = "From:" . $from_email . "\r\n" .
	"Reply-To: " . $recipient_email . "\n" .
	"X-Mailer: PHP/" . phpversion();
	$body = $message_body;

	if ($email != "") {
		$sentMail = mail($recipient_email, "Al Madar Holding WLL - Newsletter", $body, $headers);
		if ($sentMail) //output success or failure messages
		{
			echo 'You have been successfully subscribed to our Newsletter';
			exit;
		} else {
			echo 'Could not send mail! Please check your network connections';
			exit;
		}
	} else {
		echo "Please enter a valid Email ID to subscribe our Newsletter";
		exit;
	}
}

add_action('wp_ajax_nopriv_ajax_mail', 'ajax_mail');
add_action('wp_ajax_ajax_mail', 'ajax_mail');
