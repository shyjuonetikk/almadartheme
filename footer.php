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
			<div class="col-sm-5 float-left mb-4">
				<div class="footer_one col-3 float-left">
					<img src="<?php echo get_template_directory_uri(); ?>/img/logo.png" class="almadar_logo float-left">
				</div>
				<div class="footer_address col-8 float-left p-0">
					<h5 class="footer_title mb-2">AL MADAR HOLDINGS W.L.L.</h5>
					<p class="m-0">P.O.Box: 2329, Doha - Qatar</p>
					<p class="m-0">Tel.: +974 4455 4809</p>
					<p class="m-0">Fax: +974 4467 3019</p>
					<p class="m-0">almadar@almadar-holding.com</p>
				</div>
			</div>
			<div class="col-sm-2 float-left mb-4">
				<h5 class="footer_title mb-2">SITEMAP</h5>
				<ul class="p-0">
					<li><a href="#" class="m-0">About Us</a></li>
					<li><a href="#" class="m-0">Divisions</a></li>
					<li><a href="#" class="m-0">Projects</a></li>
					<li><a href="#" class="m-0">News</a></li>
					<li><a href="#" class="m-0">Careers</a></li>
				</ul>
			</div>
			<div class="col-sm-3 float-left mb-4">
				<h5 class="footer_title mb-2">FOLLOW US</h5>
				<div class="footer_follow">
					<div class="col-3 ml-0 pl-0 float-left">
						<a href="#"><i class="fab fa-facebook"></i></a>
					</div>
					<div class="col-3 ml-0 pl-0 float-left">
						<a href="#"><i class="fab fa-twitter"></i></a>
					</div>
					<div class="col-3 ml-0 pl-0 float-left">
						<a href="#"><i class="fab fa-linkedin-in "></i></a>
					</div>
				</div>
			</div>
			<div class="col-sm-2 float-left mb-4">
				<h5 class="footer_title mb-2">SITEMAP</h5>
				<ul class="p-0">
					<li><a href="#" class="m-0">Disclaimer</a></li>
					<li><a href="#" class="m-0">Terms and Conditions</a></li>
					<li><a href="#" class="m-0">Privacy Policy</a></li>
				</ul>
			</div>
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

