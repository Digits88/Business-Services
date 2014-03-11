<?php
/**
 * Template Name: Business Services Home
 *
 * Description: Twenty Twelve loves the no-sidebar look as much as
 * you do. Use this page template to remove the sidebar from any page.
 *
 * Tip: to remove the sidebar from all posts and pages simply remove
 * any active widgets from the Main Sidebar area, and the sidebar will
 * disappear everywhere.
 *
 * @package WordPress
 * @subpackage Twenty_Twelve
 * @since Twenty Twelve 1.0
 */
 
//wp_enqueue_script( 'twentyeleven-showcase', get_template_directory_uri() . '/js/search.js', array( 'jquery' ), '2013-07-10' );

get_header(); ?>

	<div id="main">

		<div id="primary">
			<div id="content" class="fullWidth" role="main">

      		<div class="topShade"></div>
			<div class="bottomShade"></div>			
			<!-- <h2>Current Formula Grant Deadline</h2> -->
			<?php
				if (have_posts()) : while (have_posts()) : the_post();
				the_content(); 
				endwhile; endif; 
			?>
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>
		</div><!-- #primary -->

	</div><!-- #main -->
<?php get_footer(); ?>

</div>