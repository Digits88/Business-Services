<?php

	// remove_filter( 'the_content', 'wpautop' );

	function whitebox_func( $atts, $content = null ) {

		return '<div class="whitebox">' . $content . '</div>';

	}

	add_shortcode( 'whitebox', 'whitebox_func' );

	function contact_bio_func( $atts, $content = null ) {

		return '<div class="contact-bio">' . $content . '</div>';

	}

	add_shortcode( 'contact-bio', 'contact_bio_func' );

	function list_links_func( $cat ) {

		 return wp_list_bookmarks(
		 		array(
		 			 'orderby' => 'name',

		 		)
		 	);
		 
	}
	add_shortcode( 'list_links', 'list_links_func' );



	add_action( 'init', 'create_post_type' );

	function create_post_type() {
		register_post_type( 'accounting',
			array(
				'labels' => array(
					'name' => __( 'Accounting' ),
					'singular_name' => __( 'Accounting' )
				),
			'taxonomies' => array('category'), 
			'public' => true,
			'has_archive' => true,
			)
		);

		register_post_type( '136-funds',
			array(
				'labels' => array(
					'name' => __( '136 Funds' ),
					'singular_name' => __( '136 Funds' )
				),
			'taxonomies' => array('category'), 
			'public' => true,
			'has_archive' => true,
			)
		);
	}


?>