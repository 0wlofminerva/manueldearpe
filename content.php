<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Manuel_de_Arpe
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
			
			<div class="post-details">
							<i class="fas fa-user"></i> <?php the_author(); ?>
							<i class="fas fa-clock"></i> <time><?php the_date(); ?></time>

							<i class="fas fa-folder-open"></i> <?php the_category(', ') ?>

							<i class="fas fa-tags"></i> <?php the_tags('', ', ', '') ?>

							<div class="post-comments-badge">
								<a href=""><i class="fas fa-comments"></i> <?php comments_number( 0, 1, '%'); ?></i></a>
							</div><!-- /post-comments-badge -->

							<?php edit_post_link( 'Edit', '<i class="fas fa-pencil-alt"></i>', '</div>' ); ?>
						</div><!-- /post-details -->

		<?php endif; ?>
	</header><!-- .entry-header -->

<?php if ( has_post_thumbnail() ) { // check for feature image ?>
	<div class="post-image">
		<?php the_post_thumbnail(); ?>
	</div><!-- /post-image -->
<?php } ?>

<div class="post-excerpt">
	<?php the_excerpt(); ?>
</div><!-- /post-excerpt -->


</article><!-- #post-<?php the_ID(); ?> -->
