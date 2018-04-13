<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package footballhood
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<header class="entry-header">
					<?php
					if ( is_singular() ) :
						the_title( '<h1 class="entry-title">', '</h1>' );
					else :
						the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
					endif; ?>

					
				</header><!-- .entry-header -->

				<?php ftblhood_post_thumbnail(); ?>
			</div><!-- Column -->
		</div><!-- Row -->
	</div><!-- Container -->
	
	<div class="container">
		<div class="row">
			<div class="col-md-8">
				<div class="entry-content">
					<?php if ( 'post' === get_post_type() ) : ?>
							<div class="entry-meta">
								<?php
									ftblhood_posted_on();
									ftblhood_posted_by();
								?>
							</div><!-- .entry-meta -->
					<?php endif;
						the_content( sprintf(
							wp_kses(
								/* translators: %s: Name of current post. Only visible to screen readers */
								__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'ftblhood' ),
								array(
									'span' => array(
										'class' => array(),
									),
								)
							),
							get_the_title()
						) );

						wp_link_pages( array(
							'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ftblhood' ),
							'after'  => '</div>',
						) );
					?>
				</div><!-- .entry-content -->
			</div><!-- Column -->
			<div class="col-md-4">
				<?php get_sidebar(); ?>
			</div>
		</div><!-- Row -->
	</div><!-- Container -->
	
	<footer class="entry-footer">
		<div class="container">
			<div class="row">
				<div class="col-md-12">				
						<?php ftblhood_entry_footer(); ?>
				</div><!-- Column -->
			</div><!-- Row -->
		</div><!-- Container -->
	</footer><!-- .entry-footer -->	
</article><!-- #post-->
