<?php get_header(); ?>
<div class = "search_result">
	<div class="choise_wraper" style="background-color: #35b6bc;">

<!---------------------------- nav_rocket------------------------------>
	  <div class="nav_rocket" onclick="location.href='https://www.thewritersguide.nl/';">
		<img src="https://www.thewritersguide.nl/wp-content/uploads/2019/09/event_rocket-01.png"/>
	  </div>
<!---------------------------- nav_rocket------------------------------>
<a href="https://www.thewritersguide.nl/news/"><h1>- SEARCH RESULTS -</h1></a>
 </div>
<div class="container" style="padding-top: 200px;">
<div class="row">
<div class="utilities col-12">
	<div class="result search_bar"><?php get_search_form(); ?></div>
</div>
		<?php

		if( have_posts() ):

			while( have_posts() ): the_post(); ?>

	<div id="post-<?php the_ID(); ?>" class="col-lg-4 col-md-6 col-sm-12 <?php post_class('clearfix'); ?>" style="display: flex; margin: 20px 0;">
		<div class = "serch_preview" onclick="location.href='<?php the_permalink() ?>';">
      <h1 class="serch_title"><?php the_title()?></h1>
	  <small><?php the_tags(); ?></small>
		  <div class="excerpt"><?php the_excerpt(); ?></div>
		  <h2 class="serch_date"><?php echo get_the_date()?></h2>

    </div>

</div>

 <?php endwhile; ?>
    <?php else : ?>
	</div>
	<div class="row justify-content-center" style="margin-top:50px;">
        <div class="col-md-6 col-sm-8 col-xs-11 no_result">
			<h2>Unfortunately no search results were found matching your parameters.</h2>
	</div>
    <?php endif; ?>

</div>
</div>

</div>


<?php get_footer(); ?>
