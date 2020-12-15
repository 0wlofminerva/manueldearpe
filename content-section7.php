<?php

// Advanced Custom Fields Section 7
$video_section7_heading2			= get_field('video_section7_heading2');
$oembed								= get_field('oembed');


?>





<!-- SECTION 7
	================================================= -->
	<section id="section7">
		<div class="container">
			<div class="row">
				<div class="col-sm-8 offset-sm-2">

					

					

					<div class="embed-container">
    					<?php the_field('oembed'); ?>
					</div>



				</div><!-- /col-sm-8 -->

			</div><!-- /row -->
		</div><!-- /container -->
		
	</section><!-- /featurrette -->

