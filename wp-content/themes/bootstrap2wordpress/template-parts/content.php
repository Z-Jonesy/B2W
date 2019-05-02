<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstratp_to_Wordpress
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
    <header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h4 class="entry-title">', '</h4>' );
		else :
			the_title( '<h4 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>
            <div class="post-details">
                <i class="fa fa-user"></i> <?php the_author(); ?>
                <i class="fa fa-clock_o">
                    <time><?php the_date(); ?></time>
                </i>
                <i class="fa fa-folder"><?php the_category(','); ?></i>
                <i class="fa fa-tags"><?php the_tags(); ?></i>
                <div class="post-comments-badge">
                    <a href="<?php comments_link(); ?>"><span class="fa fa-comment"></span><?php comments_number( 0, 1, '%' ); ?></a>
                </div> <!-- post-comments-badge -->
				<?php edit_post_link( ' Edit', '<i class="fa fa-pencil"></i>', '' ); ?>
            </div><!-- post-details -->

		<?php endif; ?>
    </header><!-- .entry-header -->

	<?php
	if ( has_post_thumbnail() ) { ?>
        <div class="post-image"><?php the_post_thumbnail(); ?></div> <!-- post-image -->
	<?php } ?>

    <div class="post-excerpt">
		<?php the_excerpt(); ?>
    </div> <!-- post-excerpt -->

</article><!-- #post-<?php the_ID(); ?> -->
