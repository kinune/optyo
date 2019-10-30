<!DOCTYPE html>
<html>
<head>
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <meta http-equiv="content-type" content="text/html; charset=utf-8" />
   <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,300,400,600' rel='stylesheet' type='text/css'>
   <link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet" type="text/css" media="screen" />
   <?php get_sidebar(); ?>
</head>
<body>
<script>
function toggleSidebavalikko(){
  document.getElementById("sidebarvalikko").classList.toggle('active')
}
</script>
<div id="logo">
     <img src="https://i.imgur.com/1zbT0Xo.png" width="330" height="370" alt="">
</div>
<div id="textbg">
  <img src="http://www.solidbackgrounds.com/images/950x350/950x350-celadon-solid-color-background.jpg" width="690" height="1700" border="1" alt="">
</div>
   <div id="sidebarvalikko">
  <div class="toggle-btn" onclick="toggleSidebavalikko()">
    <span></span>
    <span></span>
    <span></span>
  </div>
   <ul> <li> <a>
     <?php wp_nav_menu(); ?>
   </ul> <li> </a>
</div>



