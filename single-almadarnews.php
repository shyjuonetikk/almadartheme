<?php

/**

Template Name: Al Madar Real Estate Page
Description: Template for Real Estate page

 */
get_header('posts');
?>
<div class="col-lg-9 mx-auto px-3 mb-5">
	<div class="container">
		<div class="row p-5">
			<div class="col-lg-6 col-md-12 col-sm-12 col-12 purple-color fs-12 lh-paragraph">
				<?php
while (have_posts()): the_post();
	the_content();
	$title = get_the_title();
	$post_id = get_the_ID();
	$featured_img_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
	?>

					</div>
					<div class="col-lg-6 col-md-12 col-sm-12 col-12">
						<img class="img-fluid float-left float-md-left float-lg-right w-75" src="<?php echo $featured_img_url; ?>" />
					</div>
				<?php endwhile;?>
		</div>
	</div>
</div>
<?php get_footer();?>