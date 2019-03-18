<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

get_header();
?>

	<section id="primary" class="content-area">
		<main id="main" class="site-main">

			<?php

			/* Start the Loop */
			while ( have_posts() ) :
				the_post();

				get_template_part( 'template-parts/content/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) {
					comments_template();
				}

			endwhile; // End of the loop.

			$query2 = new WP_Query( array( 'category_name' => 'evenement' ) );

			if ( $query2->have_posts() ) {
				echo '<h1> Événements </h1>';
			// The 2nd Loop
			while ( $query2->have_posts() ) {
				$query2->the_post();
				echo '<li>' . get_the_title( $query2->post->ID ) . '</li>';
			}

			// Restore original Post Data
			wp_reset_postdata();
		}

		$query1 = new WP_Query( array( 'category_name' => 'nouvelles' ) );

			if ( $query1->have_posts() ) {
				echo '<h1> Nouvelles </h1>';
			// The 2nd Loop
			while ( $query1->have_posts() ) {
				$query1->the_post();
				
				echo '<li>' . get_the_title( $query1->post->ID ) . '</li>';
			}

			// Restore original Post Data
			wp_reset_postdata();
		}
			?>



		</main><!-- #main -->
	</section><!-- #primary -->

<?php
get_footer();
