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
            <button class="btn btn-secondary btn-sm" type="button">
              CATEGORY
            </button>
            <button type="button" class="btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              <span class="sr-only">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu">
              ...
            </div>
          </div>
        </div>
      </div>
    </div>
<div class="row justify-content-center month_switch">
  <div class="col-md-1 arrow_col">
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
    <h2> 10.2020</h2>
  </div>
  <div class="col-md-1 arrow_col">
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
<div class="container">

<?php
$agenda = new WP_Query( array(
    'post_type' => 'events',
    'posts_per_page' => -1
  )
);
if ( $agenda->have_posts() ) : while ( $agenda->have_posts() ) : $agenda->the_post(); ?>
<a href="<?php the_permalink(); ?>"><div class="row events_row">
  <div class="col-3 event_date">
    <p><?php the_field('date_time'); ?></p>
  </div>
  <div class="col-1 event_category">
    <p><?php the_field('event_category'); ?></p>
  </div>
  <div class="col-8 event_category">
    <h2><?php the_title(); ?></h2>
    <p><?php the_field('short_description'); ?></p>
  </div>

</div></a>
<?php endwhile; endif; wp_reset_query(); ?>
</div>
</div>



<?php get_footer(); ?>
