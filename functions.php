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

//AСF
add_action('acf/init', 'my_acf_init');
function my_acf_init() {

	// check function exists
	if( function_exists('acf_register_block') ) {

		// register a testimonial block
		acf_register_block(array(
			'name'				=> 'member',
			'title'				=> __('Member'),
			'description'		=> __('A custom member block.'),
			'render_callback'	=> 'my_acf_block_render_callback',
			'category'			=> 'formatting',
			'icon'				=> 'admin-comments',
			'keywords'			=> array( 'member', 'quote' ),
		));
	}
}

function my_acf_block_render_callback( $block ) {

	// convert name ("acf/testimonial") into path friendly slug ("testimonial")
	$slug = str_replace('acf/', '', $block['name']);

	// include a template part from within the "template-parts/block" folder
	if( file_exists( get_theme_file_path("/block/content-{$slug}.php") ) ) {
		include( get_theme_file_path("/block/content-{$slug}.php") );
	}
}

//AJAX
add_action('wp_ajax_filter_action', 'filter_action_callback');
add_action('wp_ajax_nopriv_filter_action', 'filter_action_callback');
function filter_action_callback() {
  $result_html = '';
  if (isset($_POST['post_date_select'])) {
    $filter_value =  $_POST['post_date_select'];
    $select_date = new DateTime('01.'.$filter_value );
    $select_date_end =clone $select_date;
    date_add($select_date_end, new DateInterval('P1M'));
        $date_query = array(
            'post_type'  => 'events',
             'numberposts' => -1,
             'meta_key'			=> 'date_time',
            'orderby'			=> 'meta_value',
            'order'				=> 'ASC',
             'meta_query' => array(
              array(
                'key'     => 'date_time',
                'value'   => array($select_date->format("Ymd"),$select_date_end->format("Ymd")),
                'compare' => 'BETWEEN',
                'type'    => 'DATETIME'
              ),
            ),
         );
  }
  if (isset($_POST['post_category_select']) && $_POST['post_category_select'] != "All") {
    $date_query['meta_query'][] = array(
      'key'     => 'event_category',
      'value'   =>  $_POST['post_category_select'],
      'compare' => '='
    );
  }
  $myquery = new WP_Query( $date_query );
   if($myquery->have_posts()) {
       while($myquery->have_posts()) {
           $myquery->the_post();
           $result_html .="<a class=\"event_link\" href=\"".get_the_permalink()."\">
           <div class=\"row events_row justify-content-center\">
             <div class=\"col-2 event_date\">
               <p>";
               $date_obj = date_create_from_format('d/m/Y H:i a',get_field('date_time'));
               $date_fotmat_str = '<span class="date_big">' .date_format($date_obj,'d'). '</span></br></br>' .date_format($date_obj,'l'). '</br>' . date_format($date_obj,'H:i');
               $result_html .= $date_fotmat_str ."</p>
              </div>
             <div class=\"col-1 event_category\">
								 <div class=\"category_group\">
								 	<img class=\"category_symbol\" src=\"".wp_get_upload_dir()['baseurl']."/2020/07/".get_field('event_category').".png\">
		               <p>".get_field('event_category')."</p>
		             </div>
						 </div>
             <div class=\"col-md-6 col-sm-8 col-12 ml-auto event_content\">
               <h2>".get_the_title()."</h2>
               <p>".get_field('short_description')."</p>
             </div>

           </div>
           </a>";
       };
      } else {
        $result_html .="<a class=\"event_link\" href=\"".get_the_permalink()."\">
           <div class=\"row events_row justify-content-center\">
             <div class=\"col-8 no_event_content\">
               <h2>".'NO EVENTS FOUND'."</h2>
               <p>".''."</p>
             </div>

           </div>
           </a>";
      };
    wp_reset_query();
	echo $result_html;

	wp_die();
}

class moonRecord {
  public $str_date;
  public $phase;
  public $age;
  public $filename;
  public function __construct($str_date, $phase, $age, $filename) {
    $this->str_date = $str_date;
    $this->phase = $phase;
    $this->age = $age;
    $this->filename = $filename;
    }
}
add_action('wp_ajax_moon_phase_action', 'moon_phase_action_callback');
add_action('wp_ajax_nopriv_moon_phase_action', 'moon_phase_action_callback');
function moon_phase_action_callback() {
  $result_php = 'wwww';
  if (isset($_POST['moon_local_date'])) {
    $phase_list = file_get_contents(wp_get_upload_dir()['baseurl']."/2020/07/".'mooninfo_2020min.json');
    $info = json_decode($phase_list);
   // $durl = 'https://svs.gsfc.nasa.gov/vis/a000000/a004700/a004768/frames/730x730_1x1_30p/moon.';
    $durl = wp_get_upload_dir()['baseurl']."/2020/07/";
    foreach ($info as $item) {
      if ($item->str_date == $_POST['moon_local_date']) {
        $total_minuts = floor( 24*60 * $item->age);
        $age_days = floor($total_minuts/1440);
        $age_hours = floor($total_minuts/60) - $age_days* 24;
        $age_minuts =  $total_minuts -$age_hours*60 - $age_days*1440;
        $str_age = '' . $age_days . 'd ' . $age_hours . 'h ' . $age_minuts . 'm';
        $new_item = new moonRecord($item->str_date, $item->phase, $str_age, $durl.sprintf( '%04d', $item->filename ).'.png');
      }
    }
     if (isset($new_item)) {
     $result_php = json_encode($new_item);
     }

  }
  wp_reset_query();
	echo $result_php;

	wp_die();
}
