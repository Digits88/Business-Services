<?php
/**
 * Template Name: Accounting
 * @package WordPress
 * @subpackage CALSv1
 */

get_header(); ?>

<div class="mobileScroll">
  <a href="#" class="mobileNavTriggerLarge" style="display: none;"></a> 
 
  <div id="main">

		<div id="primary">
			
			<div id="content" role="main">
				<h1><?php the_title(); ?></h1>
				

				<div id="page-intro">
					<?php the_content(); ?>
				</div>
				<p id="page-intro-but"><a href="#">page info &#x25BC</a></p>
				<?php
					query_posts( 'category_name=accounting' ); ?>

				<div id="sub-nav">
					<h3 id="sub-nav-title">page resources:</h3>
					<ul>

					<?php while ( have_posts() ) : the_post();
					   echo '<li><a href="#id-'.get_the_ID().'">'.get_the_title().'</a></li>'; 
					endwhile;
					wp_reset_postdata();?>
					</ul>
				</div>


				<?php while ( have_posts() ) : the_post();

					echo '<section id="id-'.get_the_ID().'">'; ?>

					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					</section>

				<?php endwhile;
				wp_reset_query(); ?>
					
				
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>