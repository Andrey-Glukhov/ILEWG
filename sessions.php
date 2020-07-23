<?php
/**
*Template Name: Sessions Page
*/
get_header(); ?>
<div class = "sessions_wraper">
  <div class = "container-fluid">
    <div class = "row ilewg_sessions justify-content-center">
      <div class = "col-md col-sm-12 iceum">
        <div class="iceum_block">
          <h2>ICEUM </h2>
          <p>ILEWG International Conferences on Exploration and Utilisation of the Moon</p>
        </div>
      </div>
      <div class = "col-md-auto col-sm-12">
        <div class="page_header">
          <h1>ILEWG SESSIONS</h1>
        </div>
      </div>
      <div class = "col-md col-sm-12 co-sponsored">
        <div class="co-sponsored_block">
        <h2>CO-SPONSORED SESSIONS</h2>
        <p>Lunar sessions co-sponsored by ILEWG</p>
      </div>
      </div>
    </div>
  </div>
  <?php
  $args = array(
     'post_type' => 'session',
		 'post_status' => 'publish',
		'session_category' => 'iceum',
  );

$sessions = new WP_Query($args);
if($sessions->have_posts() ) : while ( $sessions->have_posts() ) : $sessions->the_post(); ?>

<div>
  <p><?php the_title()?></p>
</div>

<?php endwhile; ?>
<?php endif; ?>

</div>


<?php get_footer(); ?>
