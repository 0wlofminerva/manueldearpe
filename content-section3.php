<?php

// Advanced Custom Fields Secion 3

$section3_feature_image	= get_field('section3_feature_image');
$section3_section_title	= get_field('section3_section_title');
$section3_description	= get_field('section3_description');

$section3_block_1_title			= get_field('section3_block_1_title');
$section3_block_1_description	= get_field('section3_block_1_description');

$section3_block_2_title			= get_field('section3_block_2_title');
$section3_block_2_description	= get_field('section3_block_2_description');

?>





	<!-- SECTION 3
	================================================= -->
	<section id="section3">
		<div class="container">

			<div class="section-header">
	

				<!-- If user upload an image -->
				<?php if( !empty($section3_feature_image) ) : ?>

				<img src="<?php echo $section3_feature_image['url']; ?>" alt="<?php echo $section3_feature_image['alt']; ?>" class="icon-boots">

				<?php endif; ?>

				
				<h2><?php echo $section3_section_title; ?></h2>
			</div><!-- /section-header -->

			<p class="lead"><?php echo $section3_description; ?></p>

			<div class="row">
				<div class="col-sm-6">
					<h3><?php echo $section3_block_1_title; ?></h3>
					<p><?php echo $section3_block_1_description; ?></p>
				</div><!-- /col-sm- -->
				<div class="col-sm-6">
					<h3><?php echo $section3_block_2_title; ?></h3>
					<p><?php echo $section3_block_2_description; ?></p>
				</div><!-- /col-sm- -->
			</div><!-- /row -->


		</div><!-- /container -->
	</section><!-- /section3 -->