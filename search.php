<?php get_header(); ?>

  <!-- <div class="row"> -->
    
    <!-- ////// ENTRADAS -->
    <div class="col-lg-12">
      
      <div class="search-result"><h3 class="py-3 mb-5 text-center">Resultados de búsqueda</h3></div>
      
      

      <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
        
        <!-- /// ENTRADA -->
      <div class="card-body">
        <a href="<?php the_permalink(); ?>">
        <h2><?php the_title(); ?></h2>
      </a>
        
      </div>
      <!-- /// END ENTRADA -->
       <?php endwhile; ?>

       <?php else: ?>

        <h5>No se encontró el término:</h5>
        <?php printf(esc_html('%s'), get_search_query()) ?>
        <?php get_search_form(); ?>
        
        <?php endif; ?>

      <!-- /// PAGINACION -->
      <div class="card-body">
      <?php get_template_part('template-parts/content',  'paginacion'); ?>
      </div>
      <!-- /// END PAGINACION -->
    </div>
    <!-- ////// END ENTRADAS -->

    <!-- ////// ASIDE -->
    <?php get_sidebar(); ?>
    <!-- ////// END ASIDE -->
  </div> <!-- /row -->
</div>
<!-- ///////////////////////// END BLOG -->

<?php get_footer(); ?>