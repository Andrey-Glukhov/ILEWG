<?php
function ilewg_script_enqueue(){
//css
	wp_enqueue_style( 'ilewg-stylesheet', get_template_directory_uri() . '/css/ilewg.css', array(), '1.0.0', 'all' );
//js
  wp_enqueue_script('jquery');
  wp_enqueue_script( 'ilewg-js', get_template_directory_uri() . '/js/ilewg.js', array('jquery'), '1.0.0', true );
  wp_localize_script( 'ilewg-js', 'url_ajax', 
		array(
			'url' => admin_url('admin-ajax.php')
		)
	);  

}
add_action( 'wp_enqueue_scripts', 'ilewg_script_enqueue' );

function ilewg_theme_setup(){
  add_theme_support('menus');
  register_nav_menu('primary', 'Primary Header Navigation');

}
add_action('init', 'ilewg_theme_setup');
add_theme_support('custom-background');
add_theme_support('custom-header');
add_theme_support('post-formats', array('aside', 'chat', 'gallery','link','image','quote','status','video'));
add_theme_support('post-thumbnails');

//AJAX
add_action('wp_ajax_filter_action', 'filter_action_callback');
add_action('wp_ajax_nopriv_filter_action', 'filter_action_callback');
function filter_action_callback() {
  if (isset($_POST['post_date_select'])) {
    $filter_value =  $_POST['post_date_select'];
    $select_date = new DateTime('01.'.$filter_value );
    $select_date_end =clone $select_date;
    date_add($select_date_end, new DateInterval('P1M'));
        $date_query = array(
            'post_type'  => 'events',
             'numberposts' => -1,
             'meta_query' => array(
              array(
                'key'     => 'date_time',
                'value'   => array($select_date->format("Ymd"),$select_date_end->format("Ymd")),
               // 'value'   => array('20200701','20200801'),
                'compare' => 'BETWEEN',
                'type'          => 'DATETIME'
              ),
            ),
         );
  }   
//   if (isset($_POST['post_category_select']) && $_POST['post_category_select'] != "All") {
    
//     $date_query['category_name'] =
//     $date_query['category_name'] = $_POST['post_category_select'];
// }   

 $result_html = var_export($select_date->format("Ymd"), TRUE) ."----". var_export($select_date_end->format("Ymd"), TRUE);
   $myquery = new WP_Query( $date_query );
   if($myquery->have_posts()):
       while($myquery->have_posts()):
           $myquery->the_post();
           $result_html .="<a href=\"".get_the_permalink()."\">
           <div class=\"row events_row\">
             <div class=\"col-3 event_date\">
               <p>".get_field('date_time')."</p>
             </div>
             <div class=\"col-1 event_category\">
               <p>".get_field('event_category')."</p>
             </div>
             <div class=\"col-8 event_category\">
               <h2>".get_the_title()."</h2>
               <p>".get_field('short_description')."</p>
             </div>
           
           </div>
           </a>";
          //$result_html =get_field('short_description'); 
       endwhile;
    endif;
    wp_reset_query(); 
	echo $result_html;

	wp_die();
}
