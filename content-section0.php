<?php

// Advanced Custom Fields Slider
$slider_feature_image_one		= get_field('slider_feature_image_one');
$slider_feature_title_one		= get_field('slider_feature_title_one');
$slider_feature_body_one		= get_field('slider_feature_body_one');

$slider_feature_image_two		= get_field('slider_feature_image_two');
$slider_feature_title_two			= get_field('slider_feature_title_two');
$slider_feature_body_two			= get_field('slider_feature_body_two');

$slider_feature_image_three		= get_field('slider_feature_image_three');
$slider_feature_title_three			= get_field('slider_feature_title_three');
$slider_feature_body_three			= get_field('slider_feature_body_three');


?>


<!-- SLIDER
	================================================= -->

<div id="section0">


<div class="carousel slide" data-ride="carousel">

  <div class="carousel-inner">
    <div class="carousel-item active">

      
	

	<!-- If user upload an image -->
				<?php if( !empty($slider_feature_image_one) ) : ?>

				<img src="<?php echo $slider_feature_image_one['url']; ?>" alt="<?php echo $slider_feature_image_one['alt']; ?>" class="img-fluid">

				<?php endif; ?>


      <div class="carousel-caption d-none d-md-block">
        <h5 class="h5-slider"><?php echo $slider_feature_title_one; ?></h5>
        <p class="p-slider"><?php echo $slider_feature_body_one; ?></p>
      </div>
    </div>
    <div class="carousel-item">

      <!-- If user upload an image -->
				<?php if( !empty($slider_feature_image_two) ) : ?>

				<img src="<?php echo $slider_feature_image_two['url']; ?>" alt="<?php echo $slider_feature_image_two['alt']; ?>" class="img-fluid">

				<?php endif; ?>

      <div class="carousel-caption d-none d-md-block">
        <h5 class="h5-slider">S<?php echo $slider_feature_title_two; ?></h5>
        <p class="p-slider"><?php echo $slider_feature_body_two; ?></p>
      </div>
    </div>
    <div class="carousel-item">

      <!-- If user upload an image -->
				<?php if( !empty($slider_feature_image_three) ) : ?>

				<img src="<?php echo $slider_feature_image_three['url']; ?>" alt="<?php echo $slider_feature_image_three['alt']; ?>" class="img-fluid">

				<?php endif; ?>

      <div class="carousel-caption d-none d-md-block">
        <h5 class="h5-slider"><?php echo $slider_feature_title_three; ?></h5>
        <p class="p-slider"><?php echo $slider_feature_body_three; ?></p>
      </div>
    </div>
  </div>



</div><!-- /slider -->

</div><!-- /section0 -->