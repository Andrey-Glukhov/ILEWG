<?php
/**
*Template Name: Task Groups
*/
get_header(); ?>
<div class = "taskgroups_wraper" >
  <div class="container-fluid">
    <div class="row taskgroups_intro">
      <div class="col-8 taskgroups_intro_image"></div>
      <div class="col-4 taskgroups_intro_details">
        <div class="container-fluid">
          <div class="row">
            <div class="col-12 taskgroups_intro_descr">
              <h2>ILEWG Task Groups</h2>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut vulputate tempus dolor id tristique. Praesent vitae nisl eget sapien pretium tempor ac a ipsum. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nullam nunc nibh, condimentum ac sem ut, vehicula consectetur nisl. Integer eu imperdiet massa. Fusce volutpat elementum imperdiet. Nullam maximus maximus ante, vitae porta est aliquam sed. Vestibulum laoreet elit quis tortor ullamcorper varius. Donec imperdiet odio at dui rutrum gravida. Ut orci lacus, hendrerit sit amet arcu at, eleifend lacinia magna. Vivamus sed finibus orci, sed aliquam nunc.
              </p>
            </div>
          </div>
          <div class="row">
            <div class="col-12 questions">
              <div class="questions_wraper">
                <div class="antr_wraper">
                  <p class="antr">SCIENCE</p>
                </div>
                <div class="antr_wraper">
                  <p class="antr">TECHNOLOGY</p>
                </div>
                <div class="antr_wraper">
                  <p class="antr">ROBOTIC VILLAGE</p>
                </div>
                <div class="antr_wraper">
                  <p class="antr">MOONBASE</p>
                </div>
                <div class="antr_wraper">
                  <p class="antr">ROADMAPS AND MOON-MARS SYNERGIES</p>
                </div>
                <div class="antr_wraper">
                  <p class="antr">SOCIETAL</p>
                </div>
                <div class="antr_wraper">
                  <p class="antr">EDUCATION AND OUTREACH</p>
                </div>
                <div class="antr_wraper">
                  <p class="antr">YOUNG LUNAR EXPLORERS</p>
                </div>
                <div class="antr_wraper">
                  <p class="antr">LUNAR EXPLORERS SOCIETY</p>
                </div>
                <div class="antr_wraper">
                  <p class="antr">EUROMOONMARS</p>
                </div>
                <div class="antr_wraper">
                  <p class="antr">ARTMOONMARS</p>
                </div>

              </div>
            </div>
          </div>
        </div>

      </div>
      <div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row taskgroups_sections justify-content-between">
      <div class="col-md-4 col-sm-6 col-12 section_col">
        <a href="http://localhost:8888/ILEWG/wordpress/science/">
        <p class="secetion">SCIENCE</p>
        </a>
        <img class="secetion_image" src="http://localhost:8888/ILEWG/wordpress/wp-content/uploads/2020/05/science_square-scaled.jpg"/>
      </div>
      <div class="col-md-4 col-sm-6 col-12 section_col">
        <a href="http://localhost:8888/ILEWG/wordpress/technology/">
        <p class="secetion">TECHNOLOGY</p>
        </a>
        <img class="secetion_image" src="http://localhost:8888/ILEWG/wordpress/wp-content/uploads/2020/05/technology_square-scaled.jpg"/>
      </div>
      <div class="col-md-4 col-sm-6 col-12 section_col">
        <a href="http://localhost:8888/ILEWG/wordpress/robotic-village/">
        <p class="secetion">ROBOTIC VILLAGE</p>
        </a>
        <img class="secetion_image" src="http://localhost:8888/ILEWG/wordpress/wp-content/uploads/2020/05/robotic_square-scaled.jpg"/>
      </div>
      <div class="col-md-4 col-sm-6 col-12 section_col">
        <a href="http://localhost:8888/ILEWG/wordpress/roadmaps-moon-mars-synergies/">
        <p class="secetion">ROADMAPS AND MOON-MARS SYNERGIES</p>
        </a>
        <img class="secetion_image" src="http://localhost:8888/ILEWG/wordpress/wp-content/uploads/2020/05/roadmaps-scaled.jpg"/>
      </div>
      <div class="col-md-4 col-sm-6 col-12 section_col">
        <a href="http://localhost:8888/ILEWG/wordpress/societal/">
        <p class="secetion">SOCIETAL</p>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 col-12 section_col">
        <a href="http://localhost:8888/ILEWG/wordpress/education-and-outreach/">
        <p class="secetion">EDUCATION AND OUTREACH</p>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 col-12 section_col">
        <a href="http://localhost:8888/ILEWG/wordpress/young-lunar-explorers/">
        <p class="secetion">YOUNG LUNAR EXPLORERS</p>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 col-12 section_col">
        <a href="http://localhost:8888/ILEWG/wordpress/lunar-explorers-society/">
        <p class="secetion">LUNAR EXPLORERS SOCIETY</p>
        </a>
      </div>
    <div class="col-md-4 col-sm-6 col-12 section_col">
        <a href="http://localhost:8888/ILEWG/wordpress/euromoonmars/">
        <p class="secetion">EUROMOONMARS</p>
        </a>
      </div>
      <div class="col-md-4 col-sm-6 col-12 section_col">
        <a href="http://localhost:8888/ILEWG/wordpress/artmoonmars/">
        <p class="secetion">ARTMOONMARS</p>
        </a>
      </div>
    </div>
  </div>

</div>

<script>
$(document).ready(function(){
  $('.section_col').height($('.section_col').width());

    $(window).on('resize', function(){
      $('.section_col').height($('.section_col').width());
    });
    var animation = anime.timeline({loop:true})
    $('.antr_wraper .antr').each(function(){

      $(this).html(jQuery(this).html().replace(/\S/g, "<span class='letter'>$&</span>"));
      var tagArray =[];
      $(this).children('.letter').each(function() {
        tagArray.push($(this).get());
      });
      animation.add({
        targets: tagArray,
        opacity: [0,1],
        easing: "easeInOutQuad",
        duration: 100,
        autoplay: false,
        delay: (el, i) => 50 * (i+1)
      }).add({
        targets: [$(this).get()],
        opacity:0,
        duration: 50,
        easing: "easeOutExpo",
        delay: 2400
      });
    });
});

</script>


<?php get_footer(); ?>
