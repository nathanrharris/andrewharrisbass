<div id="gallery" class="homepage-slide__wrapper">
  <?php
    $query = new WP_Query(array(
      'post_type' => 'photo',
      'post_status' => 'publish',
      'meta_key'		=> 'slideshow',
	    'meta_value'	=> '1',
      'posts_per_page' => -1
    ));

    $count = 0;

    if ($query->have_posts()) :
      while($query->have_posts()) :
        $count ++;
        $query->the_post();
        ?>
        <div id="homepage-slide__<?php print $count; ?>" class="homepage-slide">
          <?php print get_field('photo'); ?>
        </div>
        <?php
      endwhile;
    endif;
  ?>

  <div class="homepage-slide__links">
    <a href="/photo-gallery" id="gallery-link">Photo Gallery</a>
    <a href="#biography" id="bio-link" onclick="jQuery('html, body').animate({scrollTop: jQuery('#biography').offset().top}, 1000); return false;">Scroll for Biography</a>
  </div>
</div>
