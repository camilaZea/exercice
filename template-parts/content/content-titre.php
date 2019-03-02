<?php
/**
 * Template part for displaying post archives and search results
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Nineteen
 * @since 1.0.0
 */

		
		if( get_the_title()[4] == 1){
			the_title( sprintf( '<h2  class="entry-title"><a style="color:pink" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		}

		if( get_the_title()[4] == 2){
			the_title( sprintf( '<h2  class="entry-title"><a style="color:purple" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		}

		if( get_the_title()[4] == 2){
			the_title( sprintf( '<h2  class="entry-title"><a style="color:bleu" href="%s" rel="bookmark">', esc_url( get_permalink() ) ), '</a></h2>' );
		}



?>	 