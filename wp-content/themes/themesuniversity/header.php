<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php wp_head();?>
</head>
<body>
<header class="site-header">
      <div class="container">
        <h1 class="school-logo-text float-left">
        <?php
          $sitename = get_bloginfo('title'); // Lấy tên của trang web
          $parts = explode(' ', $sitename); // Tách tên thành các phần dựa trên dấu cách

          // Kiểm tra xem có ít nhất hai phần trong mảng
          if (count($parts) >= 2) {
              // Lấy phần đầu tiên
              $first_part = $parts[0];
              // Hiển thị phần đầu tiên
              echo '<strong><a href="' . get_bloginfo('home') . '">' . $first_part . '</strong></a>';

              // Lấy phần thứ hai trở đi
              $remaining_parts = array_slice($parts, 1);
              // Nếu có phần thứ hai trở đi, hiển thị chúng
              if (!empty($remaining_parts)) {
                  echo ' <span style="color: white;">' . implode(' ', $remaining_parts) . '</span>';
              }
          } else {
              // Nếu không đủ phần để tách, hiển thị sitename nguyên thủy
              echo '<strong><a href="' . get_bloginfo('home') . '">' . $sitename . '</strong></a>';
          }
          ?>
            <!-- <strong>Fictional</strong> University -->
        </a>
        </h1>
        <span class="js-search-trigger site-header__search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
        <i class="site-header__menu-trigger fa fa-bars" aria-hidden="true"></i>
        <div class="site-header__menu group">
        

          <!-- <nav class="main-navigation">
            <ul>
              <li><a href="#">About Us</a></li>
              <li><a href="#">Programs</a></li>
              <li><a href="#">Events</a></li>
              <li><a href="#">Campuses</a></li>
              <li><a href="#">Blog</a></li>
            </ul>
          </nav> -->
          <?php 
          wp_nav_menu( array(
            'theme_location' => 'primary_menu',
            'container'            => 'nav',
		    'container_class'      => 'main-navigation',
        ) );?>
          <div class="site-header__util">
          <div class="home_li">
          <a href="<?php echo get_bloginfo('home')?>" class="btn btn--small  float-left push-right" style="background-color: green;">
        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
          <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"></path>
        </svg> home </a></div>
            <a href="#" class="btn btn--small btn--orange float-left push-right">Login</a>
            <a href="#" class="btn btn--small btn--dark-orange float-left">Sign Up</a>
            <span class="search-trigger js-search-trigger"><i class="fa fa-search" aria-hidden="true"></i></span>
          </div>
        </div>
      </div>
    </header>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const menuTrigger = document.querySelector('.site-header__menu-trigger');
            const body = document.querySelector('body');
            menuTrigger.addEventListener('click', function() {
                body.classList.toggle('no-scroll');
            });
        });
    </script>
    