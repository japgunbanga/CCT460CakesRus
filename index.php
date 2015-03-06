<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package Gaby
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<!--  This area is for the home page slider -->
		<div class="flash">
			<div class="fl-img">  
			 <ul class="slideshow">
			  <li> <img src="<?php echo bloginfo('template_url') ?>/slider/1.jpg" /></li> 
			  <li> <img src="<?php echo bloginfo('template_url') ?>/slider/2.jpg" /></li>
			  <li> <img src="<?php echo bloginfo('template_url') ?>/slider/3.jpg" /></li>
			  <li> <img src="<?php echo bloginfo('template_url') ?>/slider/4.jpg" /></li>
			  <li> <img src="<?php echo bloginfo('template_url') ?>/slider/5.jpg" /></li>
			  <li> <img src="<?php echo bloginfo('template_url') ?>/slider/6.jpg" /></li>
			  <li> <img src="<?php echo bloginfo('template_url') ?>/slider/7.jpg" /></li>
			  <li> <img src="<?php echo bloginfo('template_url') ?>/slider/8.jpg" /></li>
			    
			</ul>
			<script  language="javascript" type="text/javascript">
		$(document).ready(function() {      
			 
			//Execute the slideShow, set 4 seconds for each images
			slideShow(2000);
		 
		});
		
		</script>
		<script language="javascript" src="<?php echo bloginfo('template_url') ?>/js/slider.js"></script>
		</div>
		</div>
		<div class="clear"></div>
		<div class="posts">
		<?php if ( have_posts() ) : ?>

			<?php /* Start the Loop */ ?>
			<?php while ( have_posts() ) : the_post(); ?>
				<div class="postdiv">
				<?php
					/* Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'content', get_post_format() );
				?>
				</div>
			<?php endwhile; ?>

			<?php the_posts_navigation(); ?>

		<?php else : ?>

			<?php get_template_part( 'content', 'none' ); ?>

		<?php endif; ?>
		</div> <!-- posts -->
		<div class="sidebar"><?php get_sidebar(); ?><!-- Search box -->
		</div>
		</main><!-- #main -->
	
	</div><!-- #primary -->

<?php //get_sidebar(); ?>
<?php get_footer(); ?>
