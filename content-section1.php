<?php

// Advanced Custom Fields Section 1
$h1_section1			= get_field('h1_section1');
$paragraph_section1	= get_field('paragraph_section1');

// 
$circle_one					= get_field('circle_one');
$circle_one_span			= get_field('circle_one_span');

$circle_two					= get_field('circle_two');
$circle_two_span			= get_field('circle_two_span');

$circle_three				= get_field('circle_three');
$circle_three_span			= get_field('circle_three_span');


// 
$course_url				= get_field('course_url');
$button_text			= get_field('button_text');


?>




<!-- SECTION1 
	================================================= -->
	<section id="section1" data-type="background" data-speed="5"><!--  wrapper full width page -->
		<article>
			<div class="container clearfix"><!-- .clearfix=floated elements with a div collapsed if no clear before div closes -->
				<div class="row">
					<div class="col-sm-5">
						<img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo/logo-badge.svg" alt="Bootstrap to Wordpress" class="logo" height="300">
					</div><!-- /col-sm-5 -->

					<div class="col-sm-7 section1-text">
						<h1 class="ArchiveGaramondExp"><?php echo $h1_section1; ?></h1>
						<p class="lead"><?php echo $paragraph_section1; ?></p>
					</div><!-- /col-sm-7 -->

					<!--  -->

					

					<!--  -->


				</div>
			</div><!-- /container wrapper responsive width centered in the middle -->
		</article>
		
	</section><!-- /section1 -->