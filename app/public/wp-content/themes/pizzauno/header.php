<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
  <title>PizzaUno</title>
</head>
<body>

<header class="site-header">
  <div class="container">
  <div class="logo">
    <a href="<?php echo esc_url(home_url('/'));?>">
    <img class="logo-image" src="<?php echo get_template_directory_uri();?>/img/logo.png" alt="">
    </a>
  </div>
  </div>
</header>
<div class="main-menu">
  <div class="mobile-menu">
    <a href="#" class="mobile"><i class="fa fa-bars"></i> </a>
  </div>
<div class="navigation container">
  <?php

        $args = array(
          'theme_location' => 'main-menu',
          'container' => 'nav',
          'container_class' => 'site-nav',

        );
        wp_nav_menu($args);
        ?>

</div>
</div>




