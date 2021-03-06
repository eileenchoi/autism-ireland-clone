<?php
/**
 * This file adds the Full Width page template to the Maker Pro Theme.
 *
 * @author JT Grauke
 * @package Maker Pro Theme
 */

/*
Template Name: Full Width
*/

//* Force full-width-content layout
add_filter( 'genesis_pre_get_option_site_layout', '__genesis_return_full_width_content' );

//* Add full-width body class to the head
add_filter( 'body_class', 'maker_add_body_class' );
function maker_add_body_class( $classes ) {

	$classes[] = 'full-width';
	return $classes;

}
if (has_post_thumbnail()){
  remove_action( 'genesis_entry_header', 'genesis_do_post_title' );
  add_action( 'genesis_entry_header', 'gp_page_header');
  function gp_page_header(){
      echo '<div class="image-title">';
      the_post_thumbnail();
      genesis_do_post_title();
      echo '</div>';
  }
  
}

//* Run the Genesis loop
genesis();
