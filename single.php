<?php
/**
 * The template for displaying all single posts.
 *
 * @package Gaby
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="posts">
		<?php while ( have_posts() ) : the_post(); ?>
			
			<?php get_template_part( 'content', 'single' ); ?>

			<?php the_post_navigation(); ?>

			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;
			?>
		
		<?php endwhile; // end of the loop. ?>
		</div>
		<div class="sidebar"><?php get_sidebar(); ?><!-- Search box and sidebar -->
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
