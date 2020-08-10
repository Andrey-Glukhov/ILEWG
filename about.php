<?php
/**
*Template Name: About Page
*/
get_header(); ?>
<div class = "about_wraper">
  <div class = "container-fluid">
    <div class="row">
      <div class="col-12 about_header_img">
        <p class="credit">Credit: ESA/Foster + Partners</p>
      </div>
      <div class="col-12 order-md-12 order-sm-1 order-1 about_header">
        <h1>ABOUT ILEWG</h1>
      </div>
    </div>
    </div>
    <div class = "container about_content">
    <div class="row justify-content-center">
      <?php $about_ilewg = new WP_Query(array( 'page_id' => 2 ));
if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

      <?php the_content(); ?>
  <?php
    endwhile;
    endif
  ?>

    </div>
</div>
</div>


<?php get_footer(); ?>
