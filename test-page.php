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
			$values = get_field('content_row');
			if($values)
			{
				echo '<ul>';
			 
				foreach($values as $value)
				{
					echo '<li>' . $value . '</li>';
				}
			 
				echo '</ul>';
			}
			 
			// always good to see exactly what you are working with
			var_dump($values);
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
