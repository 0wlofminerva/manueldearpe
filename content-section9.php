<?php

// Advanced Custom Fields Testimonial
$section9_section_heading2	= get_field('section9_section_heading2');

$section9_feature_image_1	= get_field('section9_feature_image_1');
$section9_blockquote_1		= get_field('section9_blockquote_1');
$section9_cite_1				= get_field('section9_cite_1');

$section9_feature_image_2	= get_field('section9_feature_image_2');
$section9_blockquote_2		= get_field('section9_blockquote_2');
$section9_cite_2				= get_field('section9_cite_2');

$section9_feature_image_3	= get_field('section9_feature_image_3');
$section9_blockquote_3		= get_field('section9_blockquote_3');
$section9_cite_3				= get_field('section9_cite_3');

$section9_feature_image_4	= get_field('section9_feature_image_4');
$section9_blockquote_4		= get_field('section9_blockquote_4');
$section9_cite_4				= get_field('section9_cite_4');

?>




	<!-- TESTIMONIALS
	================================================= -->
	<section id="section9">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 offset-sm-2">

					<h2><?php echo $section9_section_heading2; ?></h2>

					<!-- TESTIMONIAL -->
					<div class="row section9">
						<div class="col-sm-4">

							

							<!-- If user upload an image -->
							<?php if( !empty($section9_feature_image_1) ) : ?>

							<img src="<?php echo $section9_feature_image_1['url']; ?>" alt="<?php echo $section9_feature_image_1['alt']; ?>" class="icon-boots">

							<?php endif; ?>

						</div><!-- /col-sm-4 -->

					

					<div class="col-sm-8">

						<blockquote><?php echo $section9_blockquote_1; ?><cite>&mdash;<?php echo $section9_cite_1; ?></cite></blockquote>

					</div><!-- /col-sm-8 -->
				</div><!-- /row section9 -->

				<!-- TESTIMONIAL -->
					<div class="row section9">
						<div class="col-sm-4">

							<!-- If user upload an image -->
							<?php if( !empty($section9_feature_image_2) ) : ?>

							<img src="<?php echo $section9_feature_image_2['url']; ?>" alt="<?php echo $section9_feature_image_2['alt']; ?>" class="icon-boots">

							<?php endif; ?>

						</div><!-- /col-sm-4 -->

					

					<div class="col-sm-8">
						
					<blockquote><?php echo $section9_blockquote_2; ?><cite>&mdash;<?php echo $section9_cite_2; ?></cite></blockquote>

					</div><!-- /col-sm-8 -->
				</div><!-- /row section9 -->

				<!-- TESTIMONIAL -->
					<div class="row section9">
						<div class="col-sm-4">

							<!-- If user upload an image -->
							<?php if( !empty($section9_feature_image_3) ) : ?>

							<img src="<?php echo $section9_feature_image_3['url']; ?>" alt="<?php echo $section9_feature_image_3['alt']; ?>" class="icon-boots">

							<?php endif; ?>

						</div><!-- /col-sm-4 -->

					

					<div class="col-sm-8">
						
							<blockquote><?php echo $section9_blockquote_3; ?><cite>&mdash;<?php echo $section9_cite_3; ?></cite></blockquote>

					</div><!-- /col-sm-8 -->
				</div><!-- /row section9 -->

				<!-- TESTIMONIAL -->
					<div class="row section9">
						<div class="col-sm-4">

							<!-- If user upload an image -->
							<?php if( !empty($section9_feature_image_4) ) : ?>

							<img src="<?php echo $section9_feature_image_4['url']; ?>" alt="<?php echo $section9_feature_image_4['alt']; ?>" class="icon-boots">

							<?php endif; ?>

						</div><!-- /col-sm-4 -->

					

					<div class="col-sm-8">
						
							<blockquote><?php echo $section9_blockquote_4; ?><cite>&mdash;<?php echo $section9_cite_4; ?></cite></blockquote>

						</blockquote>
					</div><!-- /col-sm-8 -->
				</div><!-- /row section9 -->

				</div><!-- /col-sm-8 -->
			</div><!-- /row -->
		</div><!-- /container -->
	</section><!-- /section9 -->