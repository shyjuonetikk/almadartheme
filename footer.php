<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package understrap
 */
?>

<?php get_template_part('sidebar-templates/sidebar', 'footerfull');?>
<footer class="col-sm-12 float-left p-0 m-0">
	<div class="container">
		<div class="footer_main">
			<?php if (is_active_sidebar( 'Footer1')): ?>
	         <?php dynamic_sidebar( 'Footer1'); ?>
	        <?php endif; ?>
			<?php if (is_active_sidebar( 'Footer2')): ?>
	         <?php dynamic_sidebar( 'Footer2'); ?>
	        <?php endif; ?>
			<?php if (is_active_sidebar( 'Footer3')): ?>
	         <?php dynamic_sidebar( 'Footer3'); ?>
	        <?php endif; ?>
			<?php if (is_active_sidebar( 'Footer4')): ?>
	         <?php dynamic_sidebar( 'Footer4'); ?>
	        <?php endif; ?>
		</div>
	</div>
	<div class="row ml-0 mr-0 w-100 copyright_bar float-left text-center footer-bar py-2">
		<p class="float-left text-white mx-auto mb-0 fs-12">Copyright © 2006-2019 Al Madar Holding WLL. All Rights Reserved</p>
	</div>
</footer>


</div><!-- #page we need this extra closing tag here -->

<?php wp_footer();?>
  
</body>

</html>

