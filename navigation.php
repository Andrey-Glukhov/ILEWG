<div id="menu" class="menu_wraper">
  <div class="menu_button">
    <svg id="menu_svg_img" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 107.72 241.46">
      <defs>
        <style>
        .cls-1 {
          fill: #fff;
        }
        </style>
      </defs>
      <path d="M60.54,253.12H49.72A40.34,40.34,0,0,1,9.38,212.79V52A40.34,40.34,0,0,1,49.72,11.67H117.1V253.12Z" transform="translate(-9.38 -11.67)"/>
      <g>
        <path class="cls-1" d="M59.84,167.72v4.56l-21.62,5.39H72.76v4.18H34.26v-7.64L54,169.81l-19.69-4.46v-7.42h38.5v4.29H38.22Z" transform="translate(-9.38 -11.67)"/>
        <path class="cls-1" d="M34.26,131h4v13.59h12.6V132.41h4v12.21H68.75V131h4V149.4H34.26Z" transform="translate(-9.38 -11.67)"/>
        <path class="cls-1" d="M72.76,116.57V121H34.26v-7.81l34.43-8.69H34.26v-4.46h38.5v7.87l-34.43,8.63Z" transform="translate(-9.38 -11.67)"/>
        <path class="cls-1" d="M70.42,72.82q2.34,2.55,2.34,7.34v1.38c0,3.19-.78,5.63-2.34,7.34s-3.89,2.56-7,2.56H34.26V86.65h30.2a3.9,3.9,0,0,0,2.91-1.26,4.58,4.58,0,0,0,1.21-3.3V79.61a4.58,4.58,0,0,0-1.21-3.3,3.9,3.9,0,0,0-2.91-1.26H34.26V70.26H63.41C66.53,70.26,68.86,71.11,70.42,72.82Z" transform="translate(-9.38 -11.67)"/>
      </g>
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
