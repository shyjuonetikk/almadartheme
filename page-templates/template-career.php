<?php
/**
 * Template Name: Careers Page
 */
get_header('career');
?>
<div class="col-lg-8 mx-auto">
	<div class="col-xl-12 float-left">
		<div class="container">
			<div id="msg-chairman" class="col-xl-12 mb-5 p-0 float-left shadow">
				<div class="col-12 m-0 p-0 text-center text-white about-bg mb-4">
					<h4 class="px-5 py-3 font-weight-normal">Human Resources</h4>
				</div>
				<div class="container">
					<div class="col-lg-12 float-left">
						<?php the_field('career_message'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<p id="send-cv" class="col-12 text-center float-left">
		<a href="#" id="resume-send">SEND US YOUR CV<img src="<?php echo get_template_directory_uri(); ?>/img/arrow-dblue.png"></a>
	</p>

	<div id="career-table-container" class="col-12 float-left mb-5">
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
								'order' => 'ASC'
							));


						while ($query->have_posts()) {
						    $query->the_post();
						    $post_id = get_the_ID();
							$post_url= get_the_permalink();
						?>
						<tr>
							<td>
								<p class="job-title"><?php the_field('role'); ?></p>
								<p class="job-close-date">CLOSING DATE: <?php the_field('closing_date'); ?></p>
							</td>
							<td>
								<p class="job-location"><?php the_field('location'); ?></p>
								<p></p>
							</td>
							<td>
								<p class="job-cat"><?php the_field('divisions'); ?></p>
								<p class="job-apply"><a href="#">Apply<img src="<?php echo get_template_directory_uri(); ?>/img/right-arrow-small.png"></a></p>
							</td>
						</tr>
						<?php }
							wp_reset_query(); exit;?>
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>

<?php get_footer();?>

