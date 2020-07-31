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
      </div>
      <div class = "col-md-4 order-md-1 order-sm-12 order-12 col-sm-12 agenda_overview">
        <div class="agenda_descr">
          <p>
            Following the Beatenberg Declaration (3 June 1994), space agencies
            from all over the world met in Hamburg, at the EGS Moon Workshop
            (3 - 7 April 1995) and in full agreement decided to create an International
            Lunar Exploration Working Group (ILEWG). The charter of ILEWG is:<br><br>
          </p>
        </div>
        <div class="sort_by">
            <!-- CATEGORY SELECT -->
            <div class="agenda_category_label">SORT BY</div>
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
        <div class="col-12 order-sm-1 order-1 order-md-12 agenda_header"><h1>ILEWG AGENDA</h1></div>
    </div>
<div class="row justify-content-center month_switch">
  <div class="col-lg-1 col-md-2 col-3 arrow_col" id="arr_left">
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
  <div class="col-md-3 col-sm-6 col-6 col-month">
  <?php
  $date_list = $wpdb->get_results("SELECT DISTINCT DATE_FORMAT(`wp_postmeta`.`meta_value`, '%m.%Y') AS date_value , `wp_postmeta`.`meta_value`FROM `wp_posts` LEFT JOIN `wp_postmeta` ON `wp_posts`.`ID` = `wp_postmeta`.`post_id` WHERE `wp_posts`.`post_type` = 'events' AND `wp_postmeta`.`meta_key` = 'date_time' ORDER BY `wp_postmeta`.`meta_value`");
 ?>

 <?php
 $date_today= date_format(new DateTime(), 'm.Y');

 function fill_date_list($start_list, $format = 'Y-m-d') {
  $final_list = array();
  $interval = new DateInterval('P1M');
  $real_start = new DateTime('01.'.$start_list[0]->date_value);
  $list_end =  $start_list[count($start_list)-1]->date_value;
  $realEnd = new DateTime('01.12.'.substr($list_end,3));
  $realEnd->add($interval);

  $period = new DatePeriod($real_start, $interval, $realEnd);

  foreach($period as $date) {
      $final_list[] = $date->format($format);
  }

  return $final_list;
}
$date_list_fill = fill_date_list($date_list,'m.Y');
foreach($date_list_fill as $post_date ) {
   if ( $post_date == $date_today) {
    echo "<div class='agenda_date agenda_date_active'>{$post_date}</div>";
  } else {
    echo "<div class='agenda_date'>{$post_date}</div>";
  }
 }
?>
 </select>
  </div>
  <div class="col-lg-1 col-md-2 col-3 arrow_col" id="arr_right">
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
