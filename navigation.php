<div id="menu" class="menu_wraper">
      <div class="menu_button" style="position:absolute">MENU</div>
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
