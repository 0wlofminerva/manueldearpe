<?php

// Advanced Custom Fields Section2
$line_section2	= get_field('line_section2');
$btn_txt_section2	= get_field('btn_txt_section2');

// To settle Advanced Custom Fields Section2


?>




	<!-- SECION2
	================================================= -->
	<section id="section2">
		<div class="container">
			<div class="row">

				<div class="col-sm-8">
					<p class="lead"><?php echo $line_section2; ?></p>
				</div><!-- /col-sm-8 -->
			<div class="col-sm4">
				<button class="btn btn-success btn-lg btn-block" data-toggle="modal" data-target="#myModal"><?php echo $btn_txt_section2; ?></button>
			</div><!-- /col-sm4 -->

			</div><!-- /row -->
		</div><!-- /container -->
		
	</section>


<!-- ?modal inclusion -->

	<!-- MODAL
	================================================= -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="&times;"></span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fas fa-envelope"></i>Subscribe to our Mailing List</h4>
				</div><!-- modal-header -->

				<div class="modal-body">
					<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolor quidem est ut, reiciendis officiis impedit neque minima praesentium sed tempora consectetur,<em> consequatur debitis, deserunt asperiores sequi quo cum assumenda ad!</em></p>

					<form class="form-inline" role="form">
						<div class="form-group">
							<label class="sr-only" for="subscribe-name">Your first name</label>

							<input type="text" class="form-control" id="subscribe-name" placeholder="Your first name">
							</div><!-- /form-group -->
							<div class="form-group">
							<label class="sr-only" for="subscribe-email">and your email</label>
							<input type="text" class="form-control" id="subscribe-email" placeholder="and your email">
						</div><!-- /form-group -->
			
						<input type="submit" class="btn btn-danger" value="Subscribe!">

					</form><!-- /form -->

					<hr>

					<p><small>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nulla autem, ea accusamus recusandae, voluptates facere soluta perferendis amet laudantium. Magnam beatae eaque enim. Rem itaque facilis minus rerum ipsam vitae.</small></p>


				</div><!-- /modal-body -->
			</div><!-- /modal-content -->
		</div><!-- /modal-dialog -->
	</div><!-- /modal -->