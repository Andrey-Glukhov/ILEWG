<?php
/**
*Template Name: Agenda
*/
get_header(); ?>
<div class = "agenda_wraper" >
  <div class = "container-fluid" >
    <div class = "row row-eq-height" >
      <div class = "col-md-8 col-sm-12 agenda_intro">
        <div class="agenda_image"></div>
        <div class="agenda_header"><h1>INTERNATIONAL LUNAR EXPLORATION GROUP AGENDA</h1></div>

      </div>
      <div class = "col-md-4 col-sm-12 agenda_overview">
        <div class="agenda_descr">
          <p>
            Following the Beatenberg Declaration (3 June 1994), space agencies
            from all over the world met in Hamburg, at the EGS Moon Workshop
            (3 - 7 April 1995) and in full agreement decided to create an International
            Lunar Exploration Working Group (ILEWG). The charter of ILEWG is:<br><br>
            To develop an international strategy for the exploration of the Moon<br><br>
            To establish a forum and mechanisms for the communication and coordination of activities<br><br>
            To implement international coordination and cooperation
          </p>
        </div>
        <div class="sort_by">
          <div class="btn-group">
            <!-- CATEGORY SELECT -->
            <div class="agenda_category_label">CATEGORY</div>
            <select name="" id="agenda_cetegory_select">
            <?php 
              global $wpdb;
                $wpdb->show_errors();
                 $result = $wpdb->get_results("SELECT DISTINCT `wp_postmeta`.`meta_value` FROM `wp_posts` LEFT JOIN `wp_postmeta` ON  `wp_posts`.`ID` = `wp_postmeta`.`post_id` WHERE `wp_posts`.`post_type` = 'events' AND `wp_postmeta`.`meta_key` = 'event_category'");
            ?>
             <option>All</option>";
            <?php
              foreach($result as $category_name ) {
                 echo "<option>{$category_name->meta_value}</option>";
              }
            ?>
            </select>
           <!-- menu was here? -->
          </div>
        </div>
      </div>
    </div>
<div class="row justify-content-center month_switch">
  <div class="col-md-1 arrow_col" id="arr_left">
    <a><svg id="Layer_1" data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 521 196.76">
  <defs>
    <style>
      .cls-1 {
        fill: none;
        stroke-width:5px;
        stroke: #000000;
        stroke-miterlimit: 10;
      }
    </style>
  </defs>
  <g>
    <line class="cls-1" x1="1" y1="98.38" x2="521" y2="98.38"/>
    <polyline class="cls-1" points="170.65 0.43 1 98.38 170.65 196.33"/>
  </g>
</svg>
</a>
  </div>
  <div class="col-auto col-month">
  <?php 
  $date_list = $wpdb->get_results("SELECT DISTINCT DATE_FORMAT(`wp_postmeta`.`meta_value`, '%m.%Y') AS date_value FROM `wp_posts` LEFT JOIN `wp_postmeta` ON `wp_posts`.`ID` = `wp_postmeta`.`post_id` WHERE `wp_posts`.`post_type` = 'events' AND `wp_postmeta`.`meta_key` = 'date_time' ORDER BY date_value");
 ?>
 
 <?php
 $date_today= date_format(new DateTime(), 'm.Y');
 
 foreach($date_list as $post_date ) {
   if ( $post_date->date_value == $date_today) {
    echo "<div class='agenda_date agenda_date_active'>{$post_date->date_value}</div>";
  } else {
    echo "<div class='agenda_date'>{$post_date->date_value}</div>";
  }
 }
?>
 </select>
  </div>
  <div class="col-md-1 arrow_col" id="arr_right">
    <svg id="Layer_2" data-name="Layer 2" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 521 196.76">
      <defs>
        <style>
          .cls-2 {
            fill: none;
            stroke-width:5px;
            stroke: #231f20;
            stroke-miterlimit: 10;
          }
        </style>
      </defs>
      <g>
        <line class="cls-2" x1="520" y1="98.38" y2="98.38"/>
        <polyline class="cls-2" points="350.35 196.33 520 98.38 350.35 0.43"/>
      </g>
    </svg>

  </div>
</div>
</div>
<div class="container" id= 'filter-rezult'>


</div>
</div>



<?php get_footer(); ?>
