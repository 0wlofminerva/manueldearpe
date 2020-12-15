<!doctype html>
<html <?php language_attributes(); ?>>
  <head>
    <!-- Required meta tags -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootswatch/4.3.1/yeti/bootstrap.min.css"> -->

    <!-- FontAwesome Icons -->
  <link href="<?php bloginfo('stylesheet_directory'); ?>/assets/css/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <!-- ?fontawesome -->
  <script src="https://kit.fontawesome.com/ea529ee051.js" crossorigin="anonymous"></script>

    
    <?php wp_head(); ?>
  </head>
  
  <body <?php body_class(); ?>>


<!-- ///////////////////////// MENU -->



    <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->

      <div class="navbar-wrapper">

      <nav class="navbar navbar-expand-lg navbar-light bg-light ArchiveGaramondExp">

      <!-- <nav class="navbar navbar-expand-lg navbar-dark bg-dark"> -->
      
      <div class="container nav-container">

            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="dLabel">
                        ...
                      </div>

                      <a class="navbar-brand" href="<?php echo esc_url( home_url( '/' )); ?>"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo/Logotype_manuel_de_Arpe_Navbar_191231_0.svg" width="40" height="40" alt=""></a>
                      <span class="wordmark">Manuel de Arpe</span>

              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
              </button>


                      <?php
        wp_nav_menu( array(
            'theme_location'    => 'menu-principal',
            'depth'             => 2,
            'container'         => 'div',
            'container_class'   => 'collapse navbar-collapse',
            'container_id'      => 'navbarSupportedContent',
            'menu_class'        => 'nav navbar-nav ml-auto',
            'fallback_cb'       => 'WP_Bootstrap_Navwalker::fallback',
            'walker'            => new WP_Bootstrap_Navwalker(),
        ) );
        ?>
      </div>
</nav>

</div>

<!-- ///////////////////////// END MENU -->

<!-- ///////////////////////// BLOG -->

<!-- <div class="container"> -->


  <!-- <h2 class="my-5 text-center eroded headingpages dark-bronw-type">Palimpsesto</h2> -->
  <!-- <hr> -->