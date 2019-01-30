<?php

/**

 * Template Name: International Template
 * Template Post Type: realestate


 */
get_header('posts');
?>
<div class="row m-0 px-5 mb-5">
	<div class="col-lg-9 col-md-12 m-auto">
		<div class="row m-0 p-0">
			<div class="col float-left mb-4">
				<div class="thumbnail thumb-intl">
				  <img src="<?php echo get_template_directory_uri(); ?>/img/almadarrealestate2.png" />
				  	<a href="<?php the_field('dubai_link');?>" target="_blank">
					  	<div class="real_division_title pl-5 w-50">
					  		<h6 class="p-0">DUBAI</h6>
					    </div>
					</a>
				</div>
			</div>
			<div class="col float-left mb-4">
				<div class="thumbnail thumb-intl">
				  <img src="<?php echo get_template_directory_uri(); ?>/img/almadarrealestate1.png" />
				  	<a href="<?php the_field('germany_link');?>">
					  	<div class="real_division_title pl-5 w-50">
					  		<h6 class="p-0">GERMANY</h6>
					    </div>
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer();?>