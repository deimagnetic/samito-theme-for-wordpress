<?php
/**
 * @package samito
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header container">
		<?php the_title( '<h1 class="entry-title col-lg-9 col-md-9 col-sm-9 col-xs-9">', '</h1>' ); ?>
		<div class="entry-meta col-lg-3 col-md-3 col-sm-3 col-xs-3">
			<?php samito_posted_on(); ?>
		</div><!-- .entry-meta -->
	</header><!-- .entry-header -->

	<div class="entry-content">
	<?php 
	if ( has_post_thumbnail() ) { // check if the post has a Post Thumbnail assigned to it.
		the_post_thumbnail();
	} 
	?>
		<?php the_content(); ?>
		<?php
			wp_link_pages( array(
				'before' => '<div class="page-links">' . __( 'Pages:', 'samito' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php samito_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->
