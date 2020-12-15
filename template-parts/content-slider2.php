<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

    <ol class="carousel-indicators">
        <?php
        $args = array(
            'post_type' => 'slides1',
            'orderby' => 'menu_order title',
            'order'   => 'ASC',
        );
        $query = new WP_Query( $args );
        ?>
        <?php if($query->have_posts()) : ?>
            <?php $i = 0; ?>
            <?php while($query->have_posts()) : $query->the_post() ?>
                <li data-target="#carousel-example-generic" data-slide-to="<?php echo $i ?>" class="<?php if($i === 0): ?>active<?php endif; ?>"></li>
                <?php $i++; ?>
            <?php endwhile ?>
        <?php endif ?>
        <?php wp_reset_postdata(); ?>
    </ol>

    <div class="carousel-inner" role="listbox">
        <?php
        $args = array(
            'post_type' => 'slides1',
            'orderby' => 'menu_order title',
            'order'   => 'ASC',
        );
        $query = new WP_Query( $args );
        ?>
        <?php if($query->have_posts()) : ?>
            <?php $i = 0; ?>
            <?php while($query->have_posts()) : $query->the_post() ?>
                <div class="item <?php if($i === 0): ?>active<?php endif; ?>">
                    <img src="<?php the_field('slide_image'); ?>" alt="">
                </div>
                <?php $i++; ?>
            <?php endwhile ?>
        <?php endif ?>
        <?php wp_reset_postdata(); ?>

    </div>

    <!-- Controls -->
    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div>