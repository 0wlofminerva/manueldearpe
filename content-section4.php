<?php 
// Advanced Custom Fields
$section4_feature_img			= get_field('section4_feature_img');
$section4_section_title			= get_field('section4_section_title');
$section4_section_body			= get_field('section4_section_body');

?>






<!-- WHO BENEFITS
	================================================= -->
	<section id="section4">
		<div class="container">

			<div class="section-header">

				<!-- If user upload an image -->
				<?php if( !empty($section4_feature_img) ) : ?>

				<img src="<?php echo $section4_feature_img['url']; ?>" alt="<?php echo $section4_feature_img['alt']; ?>" class="img-fluid">

				<?php endif; ?>

				<h2><?php echo $section4_section_title; ?></h2>
			</div><!-- /section-header -->
			
			<div class="row">
				<div class="col-sm-8 offset-sm-2">
					<?php echo $section4_section_body; ?>
				</div>
			</div><!-- /row -->
	

		</div><!-- /container -->
	</section><!-- /section4 -->