<?php
 
/**
 * Template Name: Resource Links
 */
 
get_header(); 
 
?>
 
	<div id="main">

		<div id="primary">
		
			<div id="content" role="main">
 
		<?php while ( have_posts() ) : the_post(); ?>
 
			<h1 class="entry-title"><?php the_title(); ?></h1>
			<p><?php the_content(); ?></p>
			<?php 			
			// check if the flexible content field has rows of data
			if( have_rows('content_block') ):
			 
			     // loop through the rows of data
			    while ( have_rows('content_block') ) : the_row();
			 
 					?>
 					<h2><?php
 						 the_sub_field('sub_title') ?>
 					</h2><?php ;  
 					?>
 					<div class="links"><?php
 					the_sub_field('resource_links'); ?>
 					</div><?php ;
 					?>
 					<div class="explanation"><?php
 						the_sub_field('resource_description'); ?>
					</div><?php ;
			    endwhile;
			 
			else :
			 
			    // no layouts found
			 
			endif;
 
			?>

 
		<?php endwhile; // end of the loop. ?>
 
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>
			
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>

get_header(); ?>
