<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Bootstrap_to_WordPress
 */

?>

THIS IS THE CONTENT.PHP FILE

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<!-- MH - edited headers to match the static site -->
		<?php
		if ( is_singular() ) :
			the_title( '<h3 class="entry-title">', '</h3>' );
		else :
			the_title( '<h3 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
		endif;

		if ( 'post' === get_post_type() ) :
			?>

			<!-- MH - added post details section from static site -->
			<div class="post-details">
				<i class="fa fa-user"></i> <?php the_author(); ?>
				<i class="fa fa-clock-o"></i> <time><?php the_date(); ?></time>
				<i class="fa fa-folder"></i> <?php the_category(', '); ?>
				<i class="fa fa-tags"></i> <?php the_tags(); ?>
				
				<div class="post-comments-badge">
					<a href="<?php comments_link(); ?>"><i class="fa fa-comments"></i> <?php comments_number(0, 1, '%'); ?></a>
				</div><!-- post-comments-badge -->

				<!-- Add a link that allows the user to edit the post -->
				<?php edit_post_link( 'Edit', '<i class="fa fa-pencil"></i>', '' ); ?>

			</div><!-- post-details -->

		<?php endif; ?>
	</header><!-- .entry-header -->

	<?php //bootstrap2wordpress_post_thumbnail(); //default starter theme template code ?>
	<!-- MH - added feature image code from static site -->
	<?php if ( has_post_thumbnail() ) { // check for feature image and display only if there is one ?> 
		<div class="post-image">
			<?php the_post_thumbnail(); ?>	
		</div><!-- post-image -->
	<?php } ?>

	<!-- MH - added the post excerpt container and a function to retreive the post excerpt -->
	<div class="post-excerpt">
		<?php the_excerpt(); ?>
	</div><!-- post-excerpt -->

	<div class="entry-content">
		<?php
		the_content( sprintf(
			wp_kses(
				/* translators: %s: Name of current post. Only visible to screen readers */
				__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'bootstrap2wordpress' ),
				array(
					'span' => array(
						'class' => array(),
					),
				)
			),
			get_the_title()
		) );

		wp_link_pages( array(
			'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'bootstrap2wordpress' ),
			'after'  => '</div>',
		) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php bootstrap2wordpress_entry_footer(); ?>
	</footer><!-- .entry-footer -->
	
</article><!-- #post-<?php the_ID(); ?> -->

THIS IS THE END OF THE CONTENT.PHP FILE
