  /**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
 
function wpdocs_custom_excerpt_length( $length ) {
  return 20;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );

/***
* Set new image size 
*
***/

add_image_size( 'blog_preview', 345, 292, true );


/* ADD BUTTON SHORTCODE */

function btn_function( $atts = array(), $content = null ) {
  
  // set up default parameters
  extract(shortcode_atts(array(
   'link' => '#',
   'position' => 'center'
  ), $atts));
  
  return '<button class="btn_gold_outline btn_'. $position .'" tabindex="0"><a href="'. $link .'" class="doti-button">' . $content . '</a></button>';
}
add_shortcode('btn', 'btn_function');
