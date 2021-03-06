<?php

/**

Template Name: Contact Us Page

Description: Template for contact us page

 */
get_header('division');
?>
<div class="row m-0 pt-5 pb-5">
	<div class="container">
		<div class="row pl-5 pr-5 prmy-font">
			<div class="col-lg-5">
				<a href="<?php the_field('map_iframe');?>" target="_blank"><img src="<?php echo get_template_directory_uri(); ?>/img/contactus.png" /></a>
			</div>
			<div class="col-lg-7 px-4">
				<h2 class="purple-color prmy-font font-weight-bold my-3">CONTACT US</h2>
				<div class="line mb-5"></div>
				<div class="row">
					<div class="col-md-6">
						<h6 class="purple-color">AL MADAR HOLDINGS W.L.L.</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li>P.O.Box: <?php the_field('almadar_address');?></li>
							<li><a href="tel:<?php the_field('almadar_telephone');?>" class="telephone">Tel.: <?php the_field('almadar_telephone');?></a></li>
							<li>Fax: <?php the_field('almadar_fax');?></li>
							<li><a class="contact-links" href="mailto:<?php the_field('almadar_email');?>"><?php the_field('almadar_email');?></a></li>
						</ul>
					</div>
					<div class="col-md-6">
						<h6 class="purple-color">REAL ESTATE - QATAR</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li><a href="tel:<?php the_field('re_primary_telephone');?>" class="telephone">Tel.: <?php the_field('re_primary_telephone');?></a></li>
							<li><a href="tel:<?php the_field('re_secondary_telephone');?>" class="telephone">Tel.: <?php the_field('re_secondary_telephone');?></a></li>
							<li>Fax: <?php the_field('re_fax');?></li>
							<li><a class="contact-links" href="mailto:<?php the_field('re_primary_email');?>"><?php the_field('re_primary_email');?></a></li>
							<li><a class="contact-links" href="mailto:<?php the_field('re_secondary_email');?>"><?php the_field('re_secondary_email');?></a></li>
						</ul>
					</div>
				</div>
				<div class="row">
					<div class="col-md-6">
						<h6 class="purple-color">HUMAN RESOURCE</h6>
						<ul class="list-inline contact-list lh-paragraph fs-12">
							<li>P.O.Box: <?php the_field('hr_address');?></li>
							<li><a href="tel:<?php the_field('hr_telephone');?>" class="telephone">Tel.: <?php the_field('hr_telephone');?></a></li>
							<li>Fax: <?php the_field('hr_fax');?></li>
							<li><a class="contact-links" href="mailto:<?php the_field('hr_email');?>"><?php the_field('hr_email');?></a></li>
						</ul>
					</div>
					<div class="col-md-6 contact-list">
						<h6 class="purple-color">SUGGESTIONS? INQUIRIES?</h6>
						<a href="#" class="font-weight-bold pr-2 second-color" id="click-contact">CLICK HERE</a><img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow.png" />
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>

<script type="text/javascript">
var allowed_file_size 	= "20971520"; //20 MB allowed file size
var allowed_file_types 	= ['image/png', 'image/gif', 'image/jpeg', 'image/pjpeg', 'application/x-zip-compressed', 'application/pdf']; //Allowed file types
var border_color 		= "#C2C2C2"; //initial input border color
var maximum_files 		= 1; //Maximum number of files allowed

$("#contact-form").submit(function(e){
    e.preventDefault(); //prevent default action
	proceed = true;

	// simple input validation
	$($(this).find("input[data-required=true], input[type=textarea]")).each(function(){
        if(!$.trim($(this).val())){ //if this field is empty
            $(this).css('border-color','red'); //change border color to red
            proceed = false; //set do not proceed flag
        }
	})
	.on("input", function(){ //change border color to original
		 $(this).css('border-color', border_color);
	});


	// if everything's ok, continue with Ajax form submit

	if(proceed){
		var post_url = $(this).attr("action"); //get form action url
		var request_method = $(this).attr("method"); //get form GET/POST method
		var form_data = new FormData(this); //Creates new FormData object
		$.ajax({ //ajax form submit
			url : post_url,
			type: request_method,
			data : form_data,
			dataType : "json",
			contentType: false,
			cache: false,
			processData:false
		}).done(function(res){ //fetch server "json" messages when done
			// if(res.type == "error"){
			// 	$("#resume_result").show();
			// 	$("#resume_result").html('<div class="error">'+ res.text +"</div>");
			// }
			// if(res.type == "done"){
			// 	$("#resume_result").show();
			// 	$("#resume_result").html('<div class="success">'+ res.text +"</div>");
			// 	$("#resume_result").delay(4000).hide();
			// }
			$("#contact-us-response").show();
			$("#contact-us-response").html('<div class="success">'+ res.text +"</div>");
            // $("#contactus-button").prop('disabled', true);
		});
	}
});
</script>

