<div id="menu" class="menu_wraper">
  <div class="menu_button">
  <svg id="menu_svg_img" width="45" height="88" viewBox="0 0 45 88" fill="none" xmlns="http://www.w3.org/2000/svg">
    <rect width="45" height="88" rx="10" fill="black"/>
    <path d="M25.95 66.7V69.19L14.16 72.13H33V74.41H12V70.24L22.74 67.84L12 65.41V61.36H33V63.7H14.16L25.95 66.7ZM12 46.6888H14.19V54.0988H21.06V47.4388H23.25V54.0988H30.81L30.81 46.6888H33V56.7088H12L12 46.6888ZM33 38.7977V41.2277H12L12 36.9677L30.78 32.2277H12V29.7977H33V34.0877L14.22 38.7977H33ZM27.9 13.5365C29.6 13.5365 30.88 14.0065 31.74 14.9465C32.58 15.8665 33 17.1965 33 18.9365V19.6865C33 21.4265 32.58 22.7665 31.74 23.7065C30.88 24.6265 29.6 25.0865 27.9 25.0865H12V22.4765H28.47C29.09 22.4765 29.62 22.2465 30.06 21.7865C30.5 21.3265 30.72 20.7265 30.72 19.9865V18.6365C30.72 17.8965 30.5 17.2965 30.06 16.8365C29.62 16.3765 29.09 16.1465 28.47 16.1465H12V13.5365H27.9Z" fill="white"/>

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
