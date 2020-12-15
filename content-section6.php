<?php

// Advanced Custom Fields
$section6_title			= get_field('section6_title');
$section6_body			= get_field('section6_body');

$section6_image_one				= get_field('section6_image_one');
$section6_heading3_one			= get_field('section6_heading3_one');
$section6_paragraph_one			= get_field('section6_paragraph_one');

$section6_image_two				= get_field('section6_image_two');
$section6_heading3_two			= get_field('section6_heading3_two');
$section6_paragraph_two			= get_field('section6_paragraph_two');


$section6_image_three				= get_field('section6_image_three');
$section6_heading3_three			= get_field('section6_heading3_three');
$section6_paragraph_three			= get_field('section6_paragraph_three');






?>




	<!-- SECTION 6
	================================================= -->
	<section  id="section6">
		<div class="container">

			<h2><?php echo $section6_title; ?></h2>
			<p class="lead"><?php echo $section6_body; ?></p>

			<div class="row">

				<div class="col-sm-4">

				<div><i class="fas fa-palette fa-2x"></i></div>


					<h3><?php echo $section6_heading3_one; ?></h3>
					<p><?php echo $section6_paragraph_one; ?></p>
				</div><!-- /col-sm-4 -->

				<div class="col-sm-4">
				
				<div><i class="fas fa-paint-brush fa-2x"></i></div>
				
					
					<h3><?php echo $section6_heading3_two; ?></h3>
					<p><?php echo $section6_paragraph_two; ?></p>
				</div><!-- /col-sm-4 -->

				<div class="col-sm-4">

				<div><i class="fas fa-book fa-lg fa-2x"></i></div>
					
					<h3><?php echo $section6_heading3_three; ?></h3>
					<p><?php echo $section6_paragraph_three; ?></p>
				</div><!-- /col-sm-4 -->

			</div><!-- /row -->
			
		</div><!-- /container -->
	</section><!-- /project-featuures -->