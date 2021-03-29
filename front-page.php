<?php
/**
Template name : Home Page
 * 
 * @package silvano
 */
get_header();
?>


<h2><?php the_title();?></h2>


<?php 
if ( have_posts() ) {
	while ( have_posts() ) {
		the_post(); 
		//
		// Post Content here
		//
	} // end while
} // end if
?>


<?php get_footer(); ?>
