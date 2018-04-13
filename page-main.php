<?php 
/*
* Template Name: Main Page
* Template Post Type: page
* @package footballhood
*/

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">
			<?php
				
				$sections_obj = new Ftblhood_Sections_Templates(); 
			?>

			<section>
				<div class="section main-section">
					<?php echo $sections_obj->get_main_section_template(6, 5); ?>
				</div>
			</section>

			<section>
				<div class="section grid-section">
					<?php echo $sections_obj->get_grid_template(6, 3, 4); ?>
				</div>
			</section>

			<section>
				<div class="section three-col-section">
					<?php echo $sections_obj->get_three_columns_template(6, 5, 4); ?>
				</div>
			</section>
		
		<?php		// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;			
		?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_footer();