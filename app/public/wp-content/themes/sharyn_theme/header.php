<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <?php wp_head() ?>
    <meta charset="utf-8">
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400&display=swap" rel="stylesheet"> 
    <meta name='viewport' content="width=device-width, initial-scale=1">
    <title></title>
  </head>
  <body>
    <div class='nav-menu__container'>
      <h1 class='nav-menu__title'><a href='/'>Sharyn Leff, Psychotherapy</a></h1>
      <?php wp_nav_menu(array(
        'theme_location' => 'nav-menu',
        'container_class' => 'nav-menu'
      ))?>
      <div class='hamburger-icon'>
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>
    <div class='page-content'>

    <!-- <div class="ui top fixed secondary pointing menu header">
      <h1 class='item'>Sharyn Leff,</br> Psychotherapy</h1> -->
      
      
      
    <!-- </div> -->
