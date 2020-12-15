<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Bootstrap_to_Wordpress
 */

?>

<?php wp_footer(); ?>



	<!-- FOOTER
	================================================= -->
	<footer>

		<div class="container container-footer">
			<div class="col-sm-3 float-left">
				<p><a href="index.php"><img src="<?php bloginfo('stylesheet_directory'); ?>/assets/img/logo/Portrait_Circled_Manuel_De_Arpe_200101_0.svg" alt="" class="logofooter"></a></p>
			</div><!-- /col-sm-3 -->
			<div class="col-sm-6 float-left">
	
			      <nav class="">
			      	<div id="footer-menu" class="menu-footer">

                      <?php
        wp_nav_menu( array(
            'theme_location'    => 'menu-principal',
            'depth'             => 1,
            'container'         => 'div',
            
            'container_id'      => 'footer-menu',
            'menu_class'        => '',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
</div>
</nav>

			</div><!-- /col-sm-6 -->
			<div class="col-sm-3 float-left">
				<p class="copyright">&copy; 2020 Manuel de Arpe</p>
			</div><!-- /col-sm-3 -->
		</div><!-- /container -->



	</footer>

	<!-- MODAL
	================================================= -->
	<div class="modal fade" id="myModal">
		<div class="modal-dialog">
			<div class="modal-content">

				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal"><span aria-hidden="&times;"></span><span class="sr-only">Close</span></button>
					<h4 class="modal-title" id="myModalLabel"><i class="fas fa-envelope"> <br> </i> Subscribe to our Mailing List</h4>
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

	<!-- BOOTSTRAP CORE JAVASCRIPT
	Placed at the end of the document so the pages load faster!
	================================================= -->
	<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>assets/js/jquery-3.4.1.min.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>assets/js/bootstrap.min.js"></script>

	<script src="<?php bloginfo('template_directory'); ?>assets/js/main.js"></script>

</body>
</html>
