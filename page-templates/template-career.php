<?php
/**
 * Template Name: Careers Page
 */
get_header('career');
?>
<div class="about-page col-lg-8 mx-auto">
	<div class="col-xl-12 float-left m-0 p-0">
		<div class="container">
			<div id="msg-chairman" class="col-xl-12 mb-5 p-0 float-left shadow-sm">
				<div class="col-12 m-0 p-0 text-center text-white about-bg mb-4">
					<h4 class="px-5 py-3 font-weight-normal">Human Resources</h4>
				</div>
				<div class="container">
					<div class="col-lg-12 float-left">
						<?php the_field('career_message');?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<p id="send-cv" class="col-12 text-center float-left">
		<a href="#" id="resume-send">SEND US YOUR CV<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-dblue.png"></a>
	</p>

	<div id="career-table-container" class="col-12 float-left">
		<div class="container">
			<div class="px-3 pt-3 bg-white b-btm">
				<table id="careers-table" class="col-12 text-left msg-md mb-5">
					<thead>
						<th>ROLE</th>
						<th>LOCATION</th>
						<th>DIVISION</th>
					</thead>
					<tbody>
						<?php
$query = new WP_Query(array(
	'post_type' => array('alcareers'),
	'post_status' => 'publish',
	'order' => 'ASC',
));

while ($query->have_posts()) {
	$query->the_post();
	$post_id = get_the_ID();
	$post_url = get_the_permalink();
	?>
						<tr>
							<td>
								<p class="job-title"><?php the_field('role');?></p>
								<p class="job-close-date">CLOSING DATE: <?php the_field('closing_date');?></p>
							</td>
							<td>
								<p class="job-location"><?php the_field('location');?></p>
								<p></p>
							</td>
							<td>
								<p class="job-cat"><?php the_field('divisions');?></p>
								<p class="job-apply" id="apply-btn">
									<a data-role="<?php the_field('role');?>">Apply<img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-small.png"></a>
								</p>
							</td>
						</tr>
						<?php }
wp_reset_query();?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>

<script type="text/javascript">
var allowed_file_size 	= "20971520"; //20 MB allowed file size

var border_color 		= "#707070"; //initial input border color
var maximum_files 		= 1; //Maximum number of files allowed

$("#career-form").submit(function(e){
    e.preventDefault(); //prevent default action
	proceed = true;
debugger;
	//simple input validation
	$($(this).find("input[data-required=true], select[data-required=true]")).each(function(){
            if(!$.trim($(this).val())){ //if this field is empty
                $(this).css('border-color','red'); //change border color to red
                proceed = false; //set do not proceed flag
            }
            //check invalid email
            var email_reg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,4})?$/;
            if($(this).attr("type")=="email" && !email_reg.test($.trim($(this).val()))){
                $(this).css('border-color','red'); //change border color to red
                proceed = false; //set do not proceed flag
            }
	})
	.on("input", function(){ //change border color to original
		 $(this).css('border-color', border_color);
	});

	// var filesize = $('file_attach').val();
	// if (filesize == "") {
	// 	proceed = false;
	// 	$("input#career-resume ~ label").css({"border": "1px solid #ff0000"});
	// }
	// else {
	// 	$("input#career-resume ~ label").css({"border": "none"});
	// }
	var checkColor = $(".custom-control-input:checked~.custom-control-label::before").css("background-color");
	// alert(checkColor);

	//check file size and type before upload, works in modern browsers
	if(window.File && window.FileReader && window.FileList && window.Blob){
		var total_files_size = 0;
		if(this.elements['file_attach[]'].files.length > maximum_files){
            alert( "Can not select more than "+maximum_files+" file(s)");
            proceed = false;
		}
		$(this.elements['file_attach[]'].files).each(function(i, ifile){
			if(ifile.value !== ""){ //continue only if file(s) are selected
                // if(allowed_file_types.indexOf(ifile.type) === -1){ //check unsupported file
                //     alert( ifile.name + " is unsupported file type!");
                //     proceed = false;
                // }
             total_files_size = total_files_size + ifile.size; //add file size to total size
			}
		});
       if(total_files_size > allowed_file_size){
            alert( "Make sure total file size is less than 1 MB!");
            proceed = false;
        }
	}




	//if everything's ok, continue with Ajax form submit

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
			if(res.type == "error"){
				$("#resume_result").show();
				$("#resume_result").html('<div class="error">'+ res.text +"</div>");
			}
			if(res.type == "done"){
				$("#resume_result").show();
				$("#resume_result").html('<div class="success">'+ res.text +"</div>");
			}
		});
		$("#resume_result").show().delay(5000).fadeOut();
        $("#career-form").find("input[type=text], input[name=career-email]").val("");
	}
});
</script>

