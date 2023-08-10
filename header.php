
<!DOCTYPE html>
<html>
<head>
<title><?php bloginfo('name');?><?php wp_title();?> </title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/style.css">
<link rel="stylesheet" href="<?php echo bloginfo('template_directory'); ?>/css/custom.css">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Raleway">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>  >

<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar w3-white w3-card" id="myNavbar">

  <?php 
   $logoimg = get_header_image();
  ?>
    <a href="<?php echo site_url(); ?>" class="w3-bar-item w3-button w3-wide"><img src="<?php echo $logoimg ?>" alt="error" width="100px"></a>

      <?php

     wp_nav_menu(array('
            theme_location' => 'primary-menu',
            'menu_class' =>'nav' 
     
     ))


      ?>

  </div>
</div>
