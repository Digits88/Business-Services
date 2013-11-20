<?php
/**
 * Template Name: Custom Page
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
				<button id="page-intro-but"><a href="#">page info &#x25BC</a></button>
				<?php
				if( get_the_ID() == '13'){
					$args = array( 'post_type' => 'accounting', 'posts_per_page' => -1 );
				} elseif(get_the_ID() == '15') {
					$args = array( 'post_type' => '136-funds', 'posts_per_page' => -1 );
				}
					
					$loop = new WP_Query( $args );
				?>
				<div id="sub-nav">
					<!-- <h3 id="sub-nav-title">page resources:</h3> -->
					<ul>

					<?php while ( $loop->have_posts() ) : $loop->the_post();
					   echo '<li><a href="#'.sanitize_title_with_dashes(get_the_title()).'">'.get_the_title().'</a></li>'; 
					endwhile;
					?>
					</ul>
				</div>


				<?php while ( $loop->have_posts() ) : $loop->the_post();

					echo '<section id="'.sanitize_title_with_dashes(get_the_title()).'">'; ?>

					<h2><?php the_title(); ?></h2>
					<p><?php the_content(); ?></p>
					</section>

				<?php endwhile; ?>
					
				
			</div><!-- #content -->
			<?php get_sidebar(); ?>
			<div class="clear"></div>
		</div><!-- #primary -->

	</div>
<?php get_footer(); ?>

</div>