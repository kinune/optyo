<?php 
/*mahdollistaa kuvien lisäämisen*/
add_theme_support('post-thumbnails'); 
/*menun kutsuminen*/
add_theme_support('menus'); 
/*luo menun ja mahdollistaa sen käytön*/
register_sidebar(array(
  'name' => __( 'Right Hand Sidebar' ),
  'id' => 'right-sidebar',
  'description' => __( 'Widgets in this area will be shown on the right-hand side.' ),
  'before_title' => '<h2>',
  'after_title' => '</h2>',
  'before_widget' => '<div id="%1$s" class="widget %2$s">',
  'after_widget'  => '</div><!-- widget end -->'
));
?>






