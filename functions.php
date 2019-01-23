<?php
/**
 * Almadar functions and definitions
 *
 * 
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

$understrap_includes = array(
	'/theme-settings.php',                  // Initialize theme default settings.
	'/setup.php',                           // Theme setup and custom theme supports.
	'/widgets.php',                         // Register widget area.
	'/enqueue.php',                         // Enqueue scripts and styles.
	'/template-tags.php',                   // Custom template tags for this theme.
	'/pagination.php',                      // Custom pagination for this theme.
	'/hooks.php',                           // Custom hooks.
	'/extras.php',                          // Custom functions that act independently of the theme templates.
	'/customizer.php',                      // Customizer additions.
	'/custom-comments.php',                 // Custom Comments file.
	'/jetpack.php',                         // Load Jetpack compatibility file.
	'/class-wp-bootstrap-navwalker.php',    // Load custom WordPress nav walker.
	'/woocommerce.php',                     // Load WooCommerce functions.
	'/editor.php',                          // Load Editor functions.
);

foreach ( $understrap_includes as $file ) {
	$filepath = locate_template( 'inc' . $file );
	if ( ! $filepath ) {
		trigger_error( sprintf( 'Error locating /inc%s for inclusion', $file ), E_USER_ERROR );
	}
	require_once $filepath;
}

$args = array(
	'flex-width'    => true,
	'width'         => 1920,
	'flex-height'    => true,
	'height'        => 1058,
	'default-image' => get_template_directory_uri() . '/img/Headerback.png',
);
add_theme_support( 'custom-header', $args );
function more_post_ajax(){
    $offset = $_POST["offset"];
	$ppp = $_POST["ppp"];
	$postype = $_POST["postype"];
    header("Content-Type: text/html");

    $query = new WP_Query(array(
		'post_type' => array($postype),
			'post_status' => 'publish',
			'posts_per_page'=> $ppp,
			'paged'=> $offset
	));


	while ($query->have_posts()) {
		$query->the_post();
		$post_id = get_the_ID();
			$post_title = get_the_title();
			$post_content = get_the_excerpt();
			$post_url= get_the_permalink();

			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full');
			?>
			<div class="col-12 col-md-6 mb-3 pl-0">
							<div class="card border-0 rounded-0 w-100">
								<div class="image-container">								
							  		<img class="card-img-top image" src="<?php echo $featured_img_url;?>" alt="<?php echo $post_title; ?>">
							  		<div class="overlay"></div>
							  	</div>
							  <div class="card-body border-0 rounded-0 pl-0 ml-0">
							    <h6 class="card-title purple-color"><?php echo $post_title; ?></h6>
							    <p class="card-text fs-12 purple-color"><?php echo $post_content; ?></p>
							    <span class="purple-color float-left fs-12"><?php echo get_the_date();?> </span>
							    <a href="<?php echo $post_url; ?>" class="float-right fs-12">Read More</a>
							  </div>
							</div>
						</div>
				<?php	}

wp_reset_query();


    exit; 
}

add_action('wp_ajax_nopriv_more_post_ajax', 'more_post_ajax'); 
add_action('wp_ajax_more_post_ajax', 'more_post_ajax');