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

	//$a = '#ff69b4';
	
	if (get_the_title()[4] == 1){
		$couleur = '#b4ff69';
	};
	if (get_the_title()[4] == 2){
		$couleur = '#cc66ff';
	};
	if (get_the_title()[4] == 3){
		$couleur = '#6666ff';
	};
	if (get_the_title()[4] == 4){
		$couleur = '#ffff99';
	};
	if (get_the_title()[4] == 5){
		$couleur = '#00cc00';
	};
	if (get_the_title()[4] == 6){
		$couleur = '#003366';
	};
	
	

 	the_title( sprintf( '<h2  class="entry-title"><a style="color:%s" href="%s" rel="bookmark">', $couleur , esc_url( get_permalink() ) ), '</a></h2>' );


?>	 