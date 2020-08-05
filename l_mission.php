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
      <?php $p_missions = new WP_Query(array( 'page_id' => 8 ));?>

      <div class="accordion col-md-8 col-sm-12 order-md-2 order-sm-2 order-2 d-none" id="accordionPast">

        <div class="container accordion_wraper">
          <div class-"row">
            <div class-"col-12">
              <a class="close_button"><p>Close</p><p>X</p></a>
            </div>
          </div>
          <?php if( have_rows('past_missions') ): while( have_rows('past_missions') ) : the_row();

          // Load sub field value.
          $pm_year = get_sub_field('mission_years');
          $pm_name = get_sub_field('mission_name');
          $pm_descr = get_sub_field('about_mission');
          $pm_class = get_sub_field('mission_class');?>

          <div class="row past_missions_row">
            <div class="col-3 mission_year">
              <p><?php echo $pm_year ?></p>
            </div>
            <div class="col-6 mission_name">
              <h3><?php echo $pm_name ?></h3>
            </div>
            <div class="col-3 mission-header" id="<?php echo $pm_class ?>">
              <a class="collapsed unfold" type="button" data-toggle="collapse" data-target="#collapse<?php echo $pm_class ?>" aria-expanded="true" aria-controls="collapse<?php echo $pm_class ?>">
                +
              </a>
            </div>
          </div>
          <div id="collapse<?php echo $pm_class ?>" class="row justify-content-end collapse" aria-labelledby="<?php echo $pm_class ?>" data-parent="#accordionPast">
            <div class="col-9 card-body">
              <p><?php echo $pm_descr ?></p>
            </div>
          </div>
        <?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>

  <div class="accordion col-md-8 col-sm-12 order-md-2 order-sm-2 order-2 d-none" id="accordionCurrent">
    <div class="container accordion_wraper">
      <div class-"row">
        <div class-"col-12">
          <a class="close_button"><p>Close</p><p>X</p></a>
        </div>
      </div>
      <?php if( have_rows('current_missions') ): while( have_rows('current_missions') ) : the_row();

      // Load sub field value.
      $cm_year = get_sub_field('mission_years');
      $cm_name = get_sub_field('mission_name');
      $cm_descr = get_sub_field('about_mission');
      $cm_class = get_sub_field('mission_class');?>

      <div class="row current_missions_row">
        <div class="col-3 mission_year">
          <p><?php echo $cm_year ?></p>
        </div>
        <div class="col-6 mission_name">
          <h3><?php echo $cm_name ?></h3>
        </div>
        <div class="col-3 mission-header" id="<?php echo $cm_class ?>">
          <a class="collapsed unfold" type="button" data-toggle="collapse" data-target="#collapse<?php echo $cm_class ?>" aria-expanded="true" aria-controls="collapse<?php echo $cm_class ?>">
            +
          </a>
        </div>
      </div>
      <div id="collapse<?php echo $cm_class ?>" class="row justify-content-end collapse" aria-labelledby="<?php echo $cm_class ?>" data-parent="#accordionCurrent">
        <div class="col-9 card-body">
          <p><?php echo $cm_descr ?></p>
        </div>
      </div>
    <?php endwhile; ?>
  <?php endif; ?>
</div>
</div>

<div class="accordion col-md-8 col-sm-12 order-md-2 order-sm-2 order-2 d-none" id="accordionResources">
  <div class="container accordion_wraper">
    <div class-"row">
      <div class-"col-12">
        <a class="close_button"><p>Close</p><p>X</p></a>
      </div>
    </div>
    <?php if( have_rows('information_resources') ): while( have_rows('information_resources') ) : the_row();

    // Load sub field value.
    $ir_name = get_sub_field('resource_name');
    $ir_descr = get_sub_field('about_mission');
    $ir_class = get_sub_field('mission_class');?>

    <div class="row current_missions_row">
      <div class="col-9 mission_name">
        <h3><?php echo $ir_name ?></h3>
      </div>
      <div class="col-3 mission-header" id="<?php echo $ir_class ?>">
        <a class="collapsed unfold" type="button" data-toggle="collapse" data-target="#collapse<?php echo $ir_class ?>" aria-expanded="true" aria-controls="collapse<?php echo $ir_class ?>">
          +
        </a>
      </div>
    </div>
    <div id="collapse <?php echo $ir_class ?>" class="row justify-content-end collapse" aria-labelledby="<?php echo $ir_class ?>" data-parent="#accordionResources">
      <div class="col-9 card-body">
        <p><?php echo $ir_descr ?></p>
      </div>
    </div>
  <?php endwhile; ?>
<?php endif; ?>
</div>
</div>

</div>
</div>
</div>


<script>
$('.past').click(function() {

  $(".current,.resources").addClass('d-none');
  $("#accordionPast").removeClass('d-none');
  gsap.from('#accordionPast', 3, {left:-100, opacity:0.1});
       });


</script>


<?php get_footer(); ?>
