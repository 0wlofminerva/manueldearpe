<?php get_header(); ?>

<div class="container">
    <div class="row" id="primary">

      <main id="content" class="col-sm-12">

  <!-- <div class="row"> -->
    
    <!-- ////// ENTRADAS -->
    <!-- <div class="col-lg-9"> --> <!-- Bluuweb -->
      
      

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <!-- /// ENTRADA -->
      <div class="card-body">
        <h2><?php the_title(); ?></h2>


        <?php
        if ( has_post_thumbnail() ){
          the_post_thumbnail('post-thumbnails', array(
              'class' => 'img-fluid mb-3'
          ));
        }

         ?>


        <!-- <img src="img/1200.jpg" alt="" class="img-fluid"> -->
        <?php the_content(); ?>

        
        
      </div>
      <!-- /// END ENTRADA -->
      <!-- ////// END ENTRADAS -->

       <?php endwhile; endif; ?>
    
      </main><!-- /content -->

    </div><!-- /primary -->
  </div><!-- /container -->


    
    




<!-- ///////////////////////// END BLOG -->

<?php get_footer(); ?>