<?php get_header(); ?>
<div class = "single_event_wraper" style="background-color:<?php the_field('color'); ?>;">
  <div class="single_choise_wraper" style="background-color:<?php the_field('color'); ?>;">
    <!---------------------------- nav_rocket------------------------------>
    <div class="nav_rocket" onclick="location.href='http://www.glukh11.cl01.keurigonline.nl/';">
      <img src="http://www.glukh11.cl01.keurigonline.nl/wp-content/uploads/2019/09/event_rocket-01.png"/>
    </div>
    <!---------------------------- nav_rocket------------------------------>
    <div class="choise">
      <?php
      wp_nav_menu(array(
        'theme_location' => 'secondary',
        'container' => false,
        'menu_class' => 'navbar ml-auto',
        'items_wrap' => '<li id="%1$s" class="navbar-item %2$s">%3$s</li>',
        'item_spacing' => 'preserve'
      )
    );
    ?>
  </div>
</div>
<div class = "container single_event" style="background-color:<?php the_field('color'); ?>; padding-top: 200px;">
  <div class = "row justify-content-between">
    <?php if(have_posts() ) : while ( have_posts() ) : the_post();
    $cat = get_the_category();?>
    <div class = "col-md-8 col-sm-12">
      <div class="container-fluid">
        <div class="row">
          <div class="col-6">
            <p class="single_event_date"><?php the_field('event_date'); ?></p>
            <p class="single_event_time"><?php the_field('event_time') ?></p>
            <div class="single_event_buttons">
              <div class="<?php echo $cat[0]->cat_name; ?>"><a href="http://www.glukh11.cl01.keurigonline.nl/<?php echo $cat[0]->cat_name; ?>/"><?php echo $cat[0]->cat_name; ?></a></div>
              <a class="ticket" href="<?php the_field(event_ticket) ?>" target="blank">Get your ticket!</a>
            </div>
          </div>

        </div>

      </div>


      <h2 class="single_event_title"><?php the_title() ?></h2>
      <div class="single_event_descr"><p><?php the_field('event_description') ?></p></div>

    </div>
    <div class = "col-md-3 col-sm-12 reads">
      <h4 class="reads_title">RECOMENDED READS</h4>

      <?php
      if( have_rows('recommended') ):
        while ( have_rows('recommended') ) : the_row();
        $section_content = get_sub_field('recommended_reads', false, false);
        $section_content = apply_filters('the_content', $section_content);
        $section_image = get_sub_field('recommended_image', false, false);
        $section_image = apply_filters('the_content', $section_image);?>

        <img class="reads_img" src="<?php echo $section_image ?>"/>
        <p class="reads_text">
          <?php echo $section_content ?>
        </p>
      <?php	endwhile;
      else :
      endif; ?>
    </div>
  </div>
<?php endwhile; ?>
<?php endif; ?>

</div>

</div>

<?php get_footer(); ?>
