<div id="menu" class="menu_wraper">
  <div class="menu_button">
  <svg id="menu_svg_img" width="58" height="107" viewBox="0 0 58 107" fill="none" xmlns="http://www.w3.org/2000/svg">

<path d="M0 10C0 4.47715 4.47715 0 10 0H58V107H10C4.47715 107 0 102.523 0 97V10Z" fill="black"/>
<path d="M25.95 74.7V77.19L14.16 80.13H33V82.41H12V78.24L22.74 75.84L12 73.41V69.36H33V71.7H14.16L25.95 74.7ZM12 54.6888H14.19V62.0988H21.06V55.4388H23.25V62.0988H30.81L30.81 54.6888H33V64.7088H12L12 54.6888ZM33 46.7977V49.2277H12L12 44.9677L30.78 40.2277H12V37.7977H33V42.0877L14.22 46.7977H33ZM27.9 21.5365C29.6 21.5365 30.88 22.0065 31.74 22.9465C32.58 23.8665 33 25.1965 33 26.9365V27.6865C33 29.4265 32.58 30.7665 31.74 31.7065C30.88 32.6265 29.6 33.0865 27.9 33.0865H12V30.4765H28.47C29.09 30.4765 29.62 30.2465 30.06 29.7865C30.5 29.3265 30.72 28.7265 30.72 27.9865V26.6365C30.72 25.8965 30.5 25.2965 30.06 24.8365C29.62 24.3765 29.09 24.1465 28.47 24.1465H12V21.5365H27.9Z" fill="white"/>
</svg>
  </div>
  <div  class="menu_nav">

    <ul class="menu_nav_wraper">
      <li><h1>INTERNATIONAL LUNAR EXPLORATION WORKING GROUP</h1></li>
      <?php
      wp_nav_menu(array(
        'theme_location' => 'primary',
        'container' => false,
        'menu_class' => 'item',
        'items_wrap' => '<li id="%1$s" class="navbar-item %2$s">%3$s</li>',
        'item_spacing' => 'preserve'
      )
    );
    ?>
  </ul>

  <div class="icons">
    <a href="https://www.instagram.com/moekim_textile/" target="_blank"><i class="fab fa-instagram-square"></i></a>
    <a href="https://www.linkedin.com/in/moe-kim-8559a01a1/" target="_blank"><i class="fab fa-linkedin"></i></a>
    <a href="mailto:info@m-k-t-s.nl" target="_blank"><i class="fas fa-envelope-square"></i></a>
  </div>

</div>

</div>
