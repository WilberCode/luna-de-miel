 
  
<?php
  
  function ldm_front_widgets(){ 
    register_sidebar(array(
      'name' => __('Sidebar en Home'),  
      'id' =>'frontpage-sidebar',
      'description'   => 'Informacion de publicidad',
      'before_widget' => '<div class="frontpage-sidebar">',
      'after_widget'  => '</div>' 
    ));  
   
}
add_action('widgets_init', 'ldm_front_widgets');
 