<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package understrap
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

get_header();

$container = get_theme_mod( 'understrap_container_type' );
?>

<?php if ( is_front_page() && is_home() ) : ?>
	<?php get_template_part( 'global-templates/hero' ); ?>
<?php endif; ?>

<div class="wrapper" id="index-wrapper">

	<div class="<?php echo esc_attr( $container ); ?>" id="content" tabindex="-1">

		<div class="row">

			<!-- Do the left sidebar check and opens the primary div -->
			<?php //get_template_part( 'global-templates/left-sidebar-check' ); ?>

			<!-- <main class="site-main" id="main"> -->

				<!-- <?php //if ( have_posts() ) : ?>

					<?php /* Start the Loop */ ?>

					<?php //while ( have_posts() ) : the_post(); ?>

						<?php

						/*
						 * Include the Post-Format-specific template for the content.
						 * If you want to override this in a child theme, then include a file
						 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
						 */
						//get_template_part( 'loop-templates/content', get_post_format() );
						?>

					<?php //endwhile; ?>

				<?php //else : ?>

					<?php //get_template_part( 'loop-templates/content', 'none' ); ?>

				<?php //endif; ?> -->
				<div class="col-12">
					<h2 class="text-center purple-color prmy-font letter-spc-2 ptb-10">DIVISIONS</h2>
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
						  <img src="<?php echo get_template_directory_uri();?>/img/Real Estate.png" />
						  	<div class="h_division_title">
						  		<h6 class="p-0">ALMADAR REAL ESTATE</h6>
						    </div>
						</div>
					</div>
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
						 <img src="<?php echo get_template_directory_uri();?>/img/AL MADAR INT’L. & INVESTMENT.png" />
						  	<div class="h_division_title">
						  		<h6 class="p-0">AL MADAR INT’L. & INVESTMENT</h6>
						    </div>
						</div>
					</div>
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
							<img src="<?php echo get_template_directory_uri();?>/img/Real-Estate-almadar.png">
						  	<div class="h_division_title">
						  		<h6 class="p-0">AL MADAR REAL ESTATE</h6>
						    </div>
						</div>
					</div> <!-- row 1-->
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
						  <img src="<?php echo get_template_directory_uri();?>/img/AL MADAR PROJECT MANAGEMENT.png" />
						  	<div class="h_division_title">
						  		<h6 class="p-0">AL MADAR PROJECT MANAGEMENT</h6>
						    </div>
						</div>
					</div>
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
						 <img src="<?php echo get_template_directory_uri();?>/img/NOBLES REAL ESTATE.png" />
						  	<div class="h_division_title">
						  		<h6 class="p-0">NOBLES REAL ESTATE</h6>
						    </div>
						</div>
					</div>
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
							<img src="<?php echo get_template_directory_uri();?>/img/AL MADAR CONTRACTING.png">
						  	<div class="h_division_title">
						  		<h6 class="p-0">AL MADAR CONTRACTING</h6>
						    </div>
						</div>
					</div><!-- row2 -->
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
						  <img src="<?php echo get_template_directory_uri();?>/img/AL MADAR CARPENTRY.png" />
						  	<div class="h_division_title">
						  		<h6 class="p-0">AL MADAR ENGINEERING & TRANSPORTATION</h6>
						    </div>
						</div>
					</div>
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
						 <img src="<?php echo get_template_directory_uri();?>/img/AL MADAR COMPUTER TRAINING CENTER.png" />
						  	<div class="h_division_title">
						  		<h6 class="p-0">SCALA ENGINEERING</h6>
						    </div>
						</div>
					</div>
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
							<img src="<?php echo get_template_directory_uri();?>/img/AL MADAR TOURISM.png">
						  	<div class="h_division_title">
						  		<h6 class="p-0">AL MADAR WROUGH IRON</h6>
						    </div>
						</div>
					</div><!-- row 3-->
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
						  <img src="<?php echo get_template_directory_uri();?>/img/AL MADAR CARPENTRY.png" />
						  	<div class="h_division_title">
						  		<h6 class="p-0">AL MADAR CARPENTRY</h6>
						    </div>
						</div>
					</div>
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
						 <img src="<?php echo get_template_directory_uri();?>/img/AL MADAR COMPUTER TRAINING CENTER.png" />
						  	<div class="h_division_title">
						  		<h6 class="p-0">AL MADAR COMPUTER TRAINING CENTER</h6>
						    </div>
						</div>
					</div>
					<div class="col-4 float-left mb-4">
						<div class="thumbnail">
							<img src="<?php echo get_template_directory_uri();?>/img/AL MADAR TOURISM.png">
						  	<div class="h_division_title">
						  		<h6 class="p-0">AL MADAR TOURISM</h6>
						    </div>
						</div>
					</div><!-- row 4-->
				</div>
			<!-- </main> --><!-- #main -->

			<!-- The pagination component -->
			<?php //understrap_pagination(); ?>

			<!-- Do the right sidebar check -->
			<?php //get_template_part( 'global-templates/right-sidebar-check' ); ?>
			
		</div><!-- .row -->

	</div><!-- #content -->
	<div class="col-12 m-0 news-section">
		<div class="container">
			<div class="col-4 float-left">
				<div class="head pl-3"> Latest News</div>
				<div class="thumb-box">
					<div class="thumb-list-box float-left">
						<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
				              <div class="thumbnail">
					              <div class="col-sm-5 col-md-5 col-xs-5 float-left pl-0 mr-0 pr-0">
					                <img src="<?php echo get_template_directory_uri(); ?>/img/blog1.png" />
					              </div>
					          </div>
					          <div class="col-sm-7 col-md-7 col-xs-7 float-left mr-0 pr-0">
					                <h6 class="p-0 m-0 mb-2 purple-color">Dunes Hotel Tower</h6>
					                 <p class="mb-4 purple-color">Construction of Five Stars Dunes
										Hotel 2B G 21F in West Bay with
										all complete finishing works…
									</p>
					                 <span class="float-left purple-color fs-10 prmy-font">Oct 1, 2018</span>
					                 <a href="#" class="float-right fs-10 second-color prmy-font">Read More</a>
					          </div>
						</div>
						<div class="col-sm-12 col-md-12 col-xs-12 float-left mt-3">
							<div class="h-line m-auto"></div>
						</div>
					</div>
					<div class="thumb-list-box float-left">
						<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
				              <div class="thumbnail">
					              <div class="col-sm-5 col-md-5 col-xs-5 float-left pl-0 mr-0 pr-0">
					                <img src="<?php echo get_template_directory_uri(); ?>/img/blog2.png" />
					              </div>
					          </div>
					          <div class="col-sm-7 col-md-7 col-xs-7 float-left mr-0 pr-0">
					                <h6 class="p-0 m-0 mb-2 purple-color">Dunes Hotel Tower</h6>
					                 <p class="mb-4 purple-color">Construction of Five Stars Dunes
										Hotel 2B G 21F in West Bay with
										all complete finishing works…
									</p>
					                 <span class="float-left purple-color fs-10 prmy-font">Oct 1, 2018</span>
					                 <a href="#" class="float-right fs-10 second-color prmy-font">Read More</a>
					          </div>
						</div>
						<div class="col-sm-12 col-md-12 col-xs-12 float-left mt-3">
							<div class="h-line m-auto"></div>
						</div>
					</div><!-- thumb 2 -->
					<div class="thumb-list-box float-left">
						<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
				              <div class="thumbnail">
					              <div class="col-sm-5 col-md-5 col-xs-5 float-left pl-0 mr-0 pr-0">
					                <img src="<?php echo get_template_directory_uri(); ?>/img/blog3.png" />
					              </div>
					          </div>
					          <div class="col-sm-7 col-md-7 col-xs-7 float-left mr-0 pr-0">
					                <h6 class="p-0 m-0 mb-2 purple-color">Dunes Hotel Tower</h6>
					                 <p class="mb-4 purple-color">Construction of Five Stars Dunes
										Hotel 2B G 21F in West Bay with
										all complete finishing works…
									</p>
					                 <span class="float-left purple-color fs-10 prmy-font">Oct 1, 2018</span>
					                 <a href="#" class="float-right fs-10 second-color prmy-font">Read More</a>
					          </div>
						</div>
					</div> <!-- thumb 3 -->
				</div>
			</div> <!-- list 1 -->
			<div class="col-4 float-left">
				<div class="head pl-3"> Completed Projects</div>
				<div class="thumb-box">
					<div class="thumb-list-box float-left">
						<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
				              <div class="thumbnail">
					              <div class="col-sm-5 col-md-5 col-xs-5 float-left pl-0 mr-0 pr-0">
					                <img src="<?php echo get_template_directory_uri(); ?>/img/blog4.png" />
					              </div>
					          </div>
					          <div class="col-sm-7 col-md-7 col-xs-7 float-left mr-0 pr-0">
					                <h6 class="p-0 m-0 mb-2 purple-color">Dunes Hotel Tower</h6>
					                 <p class="mb-4 purple-color">Construction of Five Stars Dunes
										Hotel 2B G 21F in West Bay with
										all complete finishing works…
									</p>
					                 <span class="float-left purple-color fs-10 prmy-font">Oct 1, 2018</span>
					                 <a href="#" class="float-right fs-10 second-color prmy-font">Read More</a>
					          </div>
						</div>
						<div class="col-sm-12 col-md-12 col-xs-12 float-left mt-3">
							<div class="h-line m-auto"></div>
						</div>
					</div>
					<div class="thumb-list-box float-left">
						<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
				              <div class="thumbnail">
					              <div class="col-sm-5 col-md-5 col-xs-5 float-left pl-0 mr-0 pr-0">
					                <img src="<?php echo get_template_directory_uri(); ?>/img/blog5.png" />
					              </div>
					          </div>
					          <div class="col-sm-7 col-md-7 col-xs-7 float-left mr-0 pr-0">
					                <h6 class="p-0 m-0 mb-2 purple-color">Dunes Hotel Tower</h6>
					                 <p class="mb-4 purple-color">Construction of Five Stars Dunes
										Hotel 2B G 21F in West Bay with
										all complete finishing works…
									</p>
					                 <span class="float-left purple-color fs-10 prmy-font">Oct 1, 2018</span>
					                 <a href="#" class="float-right fs-10 second-color prmy-font">Read More</a>
					          </div>
						</div>
						<div class="col-sm-12 col-md-12 col-xs-12 float-left mt-3">
							<div class="h-line m-auto"></div>
						</div>
					</div><!-- thumb 2 -->
					<div class="thumb-list-box float-left">
						<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
				              <div class="thumbnail">
					              <div class="col-sm-5 col-md-5 col-xs-5 float-left pl-0 mr-0 pr-0">
					                <img src="<?php echo get_template_directory_uri(); ?>/img/blog6.png" />
					              </div>
					          </div>
					          <div class="col-sm-7 col-md-7 col-xs-7 float-left mr-0 pr-0">
					                <h6 class="p-0 m-0 mb-2 purple-color">Dunes Hotel Tower</h6>
					                 <p class="mb-4 purple-color">Construction of Five Stars Dunes
										Hotel 2B G 21F in West Bay with
										all complete finishing works…
									</p>
					                 <span class="float-left purple-color fs-10 prmy-font">Oct 1, 2018</span>
					                 <a href="#" class="float-right fs-10 second-color prmy-font">Read More</a>
					          </div>
						</div>
					</div> <!-- thumb 3 -->
				</div>
			</div><!-- list 2 -->
			<div class="col-4 float-left">
				<div class="head pl-3"> On-going projects</div>
				<div class="thumb-box">
					<div class="thumb-list-box float-left">
						<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
				              <div class="thumbnail">
					              <div class="col-sm-5 col-md-5 col-xs-5 float-left pl-0 mr-0 pr-0">
					                <img src="<?php echo get_template_directory_uri(); ?>/img/blog7.png" />
					              </div>
					          </div>
					          <div class="col-sm-7 col-md-7 col-xs-7 float-left mr-0 pr-0">
					                <h6 class="p-0 m-0 mb-2 purple-color">Dunes Hotel Tower</h6>
					                 <p class="mb-4 purple-color">Construction of Five Stars Dunes
										Hotel 2B G 21F in West Bay with
										all complete finishing works…
									</p>
					                 <span class="float-left purple-color fs-10 prmy-font">Oct 1, 2018</span>
					                 <a href="#" class="float-right fs-10 second-color prmy-font">Read More</a>
					          </div>
						</div>
						<div class="col-sm-12 col-md-12 col-xs-12 float-left mt-3">
							<div class="h-line m-auto"></div>
						</div>
					</div>
					<div class="thumb-list-box float-left">
						<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
				              <div class="thumbnail">
					              <div class="col-sm-5 col-md-5 col-xs-5 float-left pl-0 mr-0 pr-0">
					                <img src="<?php echo get_template_directory_uri(); ?>/img/blog8.png" />
					              </div>
					          </div>
					          <div class="col-sm-7 col-md-7 col-xs-7 float-left mr-0 pr-0">
					                <h6 class="p-0 m-0 mb-2 purple-color">Dunes Hotel Tower</h6>
					                 <p class="mb-4 purple-color">Construction of Five Stars Dunes
										Hotel 2B G 21F in West Bay with
										all complete finishing works…
									</p>
					                 <span class="float-left purple-color fs-10 prmy-font">Oct 1, 2018</span>
					                 <a href="#" class="float-right fs-10 second-color prmy-font">Read More</a>
					          </div>
						</div>
						<div class="col-sm-12 col-md-12 col-xs-12 float-left mt-3">
							<div class="h-line m-auto"></div>
						</div>
					</div><!-- thumb 2 -->
					<div class="thumb-list-box float-left">
						<div class="col-sm-12 col-md-12 col-xs-12 mt-4 pb-3">
				              <div class="thumbnail">
					              <div class="col-sm-5 col-md-5 col-xs-5 float-left pl-0 mr-0 pr-0">
					                <img src="<?php echo get_template_directory_uri(); ?>/img/blog9.png" />
					              </div>
					          </div>
					          <div class="col-sm-7 col-md-7 col-xs-7 float-left mr-0 pr-0">
					                <h6 class="p-0 m-0 mb-2 purple-color">Dunes Hotel Tower</h6>
					                 <p class="mb-4 purple-color">Construction of Five Stars Dunes
										Hotel 2B G 21F in West Bay with
										all complete finishing works…
									</p>
					                 <span class="float-left purple-color fs-10 prmy-font">Oct 1, 2018</span>
					                 <a href="#" class="float-right fs-10 second-color prmy-font">Read More</a>
					          </div>
						</div>
					</div> <!-- thumb 3 -->
				</div>
			</div><!-- list 3 -->
		</div>
	</div><!-- newssection -->
	<div class="newsletter-container p-5">
		<div class="col-6 m-auto text-center">
			<h3 class="text-light prmy-font">SUBSCRIBE TO OUR NEWSLETTERS</h3>
			<p class="text-light fs-15 mt-4 prmy-font">
				Enter your E-mail address to receive latest news and updates. Morbi euismod
				fermentum tempus. Mauris molestie facilisis eros id dictum.
			</p>
			<div class="col-12">
				<form>
				  <div class="form-group row">
				    <div class="col-9 m-auto">
				      	<div class="input-group mb-3 newsletter-txt-field">
						  <input type="text" class="form-control" placeholder="YOUR E-MAIL ADDRESS" aria-label="YOUR E-MAIL ADDRESS" aria-describedby="basic-addon2">
						  <div class="input-group-append">
						    <span class="input-group-text" id="basic-addon2">SUBMIT</span>
						  </div>
						</div>
				     </div>
				  </div>
				</form>
			</div>
		</div>
	</div>
</div><!-- #index-wrapper -->

<?php get_footer(); ?>
