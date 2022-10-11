<?php 


//// Adding Stylesheet

function pizzauno_styles(){
  wp_register_style('normalize', get_template_directory_uri() . './css/normalize.css', array(), '8.0.0' );
  wp_register_style('fontawesome', get_template_directory_uri() . './css/font-awesome.css', array(), '4.7.0' );
  wp_register_style('style', get_template_directory_uri() .'/style.css', array(), '1.0');

  wp_enqueue_style('normalize');

  wp_enqueue_style('fontawesome');

  wp_enqueue_style('style');

  wp_register_script('script', get_template_directory_uri() . '/js/scripts.js', array('jquery'), '1.0.0', true);

  //adding js files

  wp_enqueue_script('jquery');
  wp_enqueue_script('script');


}
///register stylesheet

add_action('wp_enqueue_scripts', 'pizzauno_styles');


//Creates the menu

function pizzauno_menus()

{ ///Wordpress function
  register_nav_menus(array(
    'main-menu' => __('Main Menu','pizzauno') 
  ));
}

//Hook


add_action('init', 'pizzauno_menus');

?>