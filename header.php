<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php wp_head(); ?>
</head>
<body>

<nav id="hcc-header" <?php if (is_front_page()){ echo 'class="hcc-nav-front-page"'; } ?>>

  <div id="hcc-logo-container">
    <?php include 'src/img/logo.svg' ?>
  </div>

  <?php wp_nav_menu(array(
    'menu' => 'header-menu'
  )); ?>

</nav>

<div id="hcc-header-mobile" <?php if (is_front_page()){ echo 'class="hcc-nav-front-page-mobile"'; } ?>>

  <div id="hcc-logo-container">
    <?php include 'src/img/logo.svg' ?>
  </div>

  <div id="hcc-menu-hamburger">
    <div></div>
    <div></div>
    <div></div>
  </div>

  <div id="hcc-mobile-dropdown-menu-container">
    <img id="hcc-close-menu-button" src="<?php echo get_template_directory_uri() . '/src/img/close.svg' ?>" alt="close button">
    <?php wp_nav_menu(array(
      'menu' => 'header-menu'
    )); ?>
  </div>

</div>
<!-- #hcc-header-mobile -->