<?php 

// Advanced Custom Fields Instructor Section
$section8_section_title			= get_field('section8_section_title');
$section8_name					= get_field('section8_name');
$bio_excerpt						= get_field('bio_excerpt');
$full_bio							= get_field('full_bio');

$twitter_username			= get_field('twitter_username');
$facebook_username			= get_field('facebook_username');
$google_plus_username		= get_field('google_plus_username');
$instagram_username			= get_field('instagram_username');
$patreon_username			= get_field('patreon_username');
$youtube_username			= get_field('youtube_username');



$heading_3_1				= get_field('heading_3_1');
$small_1					= get_field('small_1');

$heading_3_2				= get_field('heading_3_2');
$small_2					= get_field('small_2');

// 

$h4_divider1			= get_field('h4_divider1');
$small_divider1			= get_field('small_divider1');
$span_divider1		= get_field('span_divider1');

$h4_divider2			= get_field('h4_divider2');
$small_divider2			= get_field('small_divider2');
$span_divider2		= get_field('span_divider2');

$h4_divider3			= get_field('h4_divider3');
$small_divider3			= get_field('small_divider3');
$span_divider3		= get_field('span_divider3');

?>





	<!-- INSTRUCTOR
	================================================= -->
	
	<section id="section8">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 col-md-6">
					<div class="row">
					<div class="col-lg-8">
						<h2><?php echo $section8_section_title; ?><br> <small><?php echo $section8_name; ?></small></h2>
					</div><!-- end col -->
					<div class="col-lg-4">
					
					<?php if( !empty($twitter_username) ): ?>
					<a href="https://twitter.com/<?php echo $twitter_username; ?>" target="_blank" class="badge social twitter"><i class="fab fa-twitter"></i></a>
					<?php endif; ?>
					
					<?php if( !empty($instagram_username) ): ?>
					<a href="https://<?php echo $instagram_username; ?>/" target="_blank" class="badge social instagram"><i class="fab fa-instagram"></i></a>
					<?php endif; ?>

					<?php if( !empty($facebook_username) ): ?>
					<a href="https://<?php echo $facebook_username; ?>/" target="_blank" class="badge social facebook"><i class="fab fa-facebook-f"></i></a>
					<?php endif; ?>
					
					<?php if( !empty($patreon_username) ): ?>
					<a href="https://<?php echo $patreon_username; ?>/" target="_blank" class="badge social patreon"><i class="fab fa-patreon"></i></a>
					<?php endif; ?>

					<?php if( !empty($youtube_username) ): ?>
					<a href="https://<?php echo $youtube_username; ?>/" target="_blank" class="badge social youtube"><i class="fab fa-youtube"></i></a>
					<?php endif; ?>
					
					<?php if( !empty($google_plus_username) ): ?>
					<a href="https://<?php echo $google_plus_username; ?>/" target="_blank" class="badge social gplus"><i class="fab fa-google-plus-g"></i></a>
					<?php endif; ?>

							</div><!-- end col -->
							</div><!-- row -->

							<P class="lead"><?php echo $bio_excerpt; ?></P>

							<?php echo $full_bio; ?>

							<hr>

							<h3><?php echo $heading_3_1; ?><small><?php echo $small_1; ?></small></h3>
							<h3><?php echo $heading_3_2; ?><small><?php echo $small_2; ?></small></h3>

							<!--  -->

							<div id="dividers-line">

						<div class="divider-section1">
							<h4><?php echo $h4_divider1; ?><small><?php echo $small_divider1; ?></small></h4>
							<span><i class="fas fa-palette fa-lg"></i></span>
						</div><!-- /divider-section1 -->

						<div class="divider-section1">
							<h4><?php echo $h4_divider2; ?><small><?php echo $small_divider2; ?></small></h4>
							<span><i class="fas fa-paint-brush fa-lg"></i></span>
						</div>

						<div class="divider-section1">
							<h4><?php echo $h4_divider3; ?><small><?php echo $small_divider3; ?></small></h4>
							<span><i class="fas fa-book fa-lg"></i></span>

						</div><!-- /divider-section1 -->
						
					</div><!-- /dividers-line -->

							<!--  -->


						</div><!-- end col -->
					</div><!--row -->
				</div><!-- container -->
	</section><!-- section8 -->