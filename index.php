<?php

// Advanced Custom Fields Sign Up Section
$heading2_section10     = get_field('heading2_section10');
$strong_section10       = get_field('strong_section10');
$heading2_2part_section10   = get_field('heading2_2part_section10');
$btn_section10_section      = get_field('btn_section10_section');

// Establish Advanced Custom Fields Modal Section

?>

<?php get_header(); ?>

<section class="feature-image feature-image-default-alt" data-type="background" data-speed="2">
    <h1 class="page-title">Blog</h1>
  </section>

  <!-- BLOG CONTENT
  ================================================= -->
  <div class="container">
    <div class="row" id="primary">

      <main id="content" class="col-sm-8" role="main">

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <!-- /// ENTRADA -->
      <div class="card-body">
        <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
      </a>
        

        <?php
        if ( has_post_thumbnail() ){
          the_post_thumbnail('post-thumbnails', array(
              'class' => 'img-fluid mb-3'
               ));
           }
         ?>

        <!-- <img src="img/1200.jpg" alt="" class="img-fluid"> -->
        <?php the_excerpt(); ?>
        
      </div>
      <!-- /// END ENTRADA -->
       <?php endwhile; endif; ?>

      </main><!-- /content -->

      <!-- SIDEBAR
  ================================================= -->
  
  <aside class="col-sm-4">
        <!-- ////// ASIDE -->
    <?php get_sidebar(); ?>
    <!-- ////// END ASIDE -->
  </aside>



    </div><!-- /primary -->
  </div><!-- /container -->

  <!-- <div class="row"> -->
    
    <!-- ////// ENTRADAS -->
    <!-- <div class="col-lg-9"> --> <!-- Bluuweb -->

      <!-- /// PAGINACION -->
      <div class="card-body">
      <?php get_template_part('template-parts/content',  'paginacion'); ?>
      </div>
      <!-- /// END PAGINACION -->
    </div>
    <!-- ////// END ENTRADAS -->


  </div> <!-- /row -->
</div>
<!-- ///////////////////////// END BLOG -->

<?php get_template_part('content','section10'); ?>

<?php get_footer(); ?>