<?php

/**

Template for displaying all posts from Realestate

*/
get_header('division');
?>
<div class="row m-0 p-5 mb-5">
	<div class="container inner-container m-auto">
		<div class="row m-0 p-0">
			<div class="col float-left mb-4">
				<div class="thumbnail">
				  <img src="<?php echo get_template_directory_uri();?>/img/almadarrealestate2.png" />
				  	<div class="real_division_title pl-5 w-50">
				  		<h6 class="p-0">DUBAI</h6>
				    </div>
				</div>
			</div>
			<div class="col float-left mb-4">
				<div class="thumbnail">
				  <img src="<?php echo get_template_directory_uri();?>/img/almadarrealestate1.png" />
				  	<div class="real_division_title pl-5 w-50">
				  		<h6 class="p-0">GERMANY</h6>
				    </div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_footer(); ?>