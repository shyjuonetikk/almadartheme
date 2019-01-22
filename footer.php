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
<script  src="https://code.jquery.com/jquery-3.3.1.min.js"  integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8="  crossorigin="anonymous"></script>

<script type="text/javascript">
	$( document ).ready(function(){
		$("#resume-send").click(function(e){
			e.preventDefault();
			window.scrollTo("0", "0");
			var popupHeight = $("#career-overlays").height();
			popupHeight -= "50";
			$(".site").css({"max-height":popupHeight, "overflow-y": "hidden"});
			$("#career-overlays").animate({"right": "0", "top": "0"}, 1000);
			$("#career-cancel").css({"min-height":popupHeight});
		});
		$("#career-cancel").click(function(e){
			e.preventDefault();
			$("#career-overlays").animate({"right": "-100%", "top": "0"}, 1000);
			$(".site").css({"overflow-y": "visible"});
		});
	});
</script>
<script type="text/javascript">
	var inputs = document.querySelectorAll( '.inputfile' );
	Array.prototype.forEach.call( inputs, function( input )
	{
		var label	 = input.nextElementSibling,
			labelVal = label.innerHTML;

		input.addEventListener( 'change', function( e )
		{
			var fileName = '';
			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				label.querySelector( 'span' ).innerHTML = fileName;
			else
				label.innerHTML = labelVal;
		});
	});
</script>
</body>

</html>

