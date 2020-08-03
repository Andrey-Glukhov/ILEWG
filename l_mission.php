<?php
/**
*Template Name: Missions Page
*/
get_header(); ?>

<div class="missions_wraper">

  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 col-sm-12 order-md-1 order-sm-2 order-2 mission_col past">
        <h2>PAST MISSIONS</h2>

      </div>
      <div class="col-md-4 col-sm-12 order-md-2 order-sm-3 order-3 mission_col current">
        <h2>CURRENT MISSIONS</h2>

      </div>
      <div class="col-md-4 col-sm-12 order-md-3 order-sm-4 order-4 mission_col resources">
        <h2>INFORMATION RESOURCES</h2>
      </div>
      <div class="col-12 order-md-12 order-sm-1 order-1 mission_header">
        <h1>LUNAR MISSIONS</h1>
      </div>

    </div>

  </div>

    <div class="accordion" id="accordionExample">

      <div class="container">
        <?php $p_missions = new WP_Query(array( 'page_id' => 8 ));

        if( have_rows('past_missions') ): while( have_rows('past_missions') ) : the_row();

        // Load sub field value.
        $pm_year = get_sub_field('mission_years');
        $pm_name = get_sub_field('mission_name');
        $pm_descr = get_sub_field('about_mission');
        $pm_class = get_sub_field('mission_class');?>

        <div class="row">
          <div class="col-3">
              <p><?php echo $pm_year ?></p>
          </div>
          <div class="col-6">
              <h3><?php echo $pm_name ?></h3>
          </div>
          <div class="col-3 mission-header" id="<?php echo $pm_class ?>">
              <button class="btn btn-link collapsed" type="button" data-toggle="collapse" data-target="#collapse<?php echo $pm_class ?>" aria-expanded="true" aria-controls="collapse<?php echo $pm_class ?>">
              +
              </button>
          </div>
        </div>
    <div id="collapse<?php echo $pm_class ?>" class="collapse" aria-labelledby="<?php echo $pm_class ?>" data-parent="#accordionExample">
      <div class="card-body">
        <p><?php echo $pm_descr ?></p>
      </div>
    </div>
  <?php endwhile; ?>
  <?php endif; ?>
  </div>

</div>


</div>



<?php get_footer(); ?>
