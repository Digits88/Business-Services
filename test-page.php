<?php
 
/**
 * Template Name: Test PAGE
 */
 
get_header(); 
 
?>
 
	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">
 
		<?php while ( have_posts() ) : the_post(); ?>
 
			<h1></h1>

			<?php 			
			// check if the flexible content field has rows of data
			if( have_rows('content_row') ):
			 
			     // loop through the rows of data
			    while ( have_rows('content_row') ) : the_row();
			 
 					the_sub_field('accounting_type_title');
			 
			    endwhile;
			 
			else :
			 
			    // no layouts found
			 
			endif;
 
			?>
			<p>This is the_content()  <?php the_content(''); ?></p>
 
		<?php endwhile; // end of the loop. ?>
 
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>
			
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>

get_header(); ?>
