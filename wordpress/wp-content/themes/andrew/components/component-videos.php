<div id="videos" class="videos content panel">
  <h2>Videos</h2>
  <div class="videos__grid grid-2col">
  <?php
    $args = array(
      'post_type' => 'video',
      'post_status' => 'publish',
      'meta_key'		=> 'featured',
	    'meta_value'	=> '1',
      'posts_per_page' => -1,
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();

      print "<div class='grid__item'>";

      print '<h4>' . get_the_title() . '</h4>';

      $image_field = get_field('thumbnail');

      print '<img src="' . $image_field['sizes']['medium_large']  . '"
                  data-video="' . get_field('video')  . '"
                  class="video-thumbnail" />';

      print '<p>' . get_field('sub_title') . '</p>';

      print "</div>";

    endwhile;

    wp_reset_postdata();
  ?>
  </div>

  <a href="/video-archive" class="video__archive archive">Video Archive</a>
</div>

<div class="video__modal--wrapper">
  <div class="video__modal">
    <video width="100%" height="auto" controls id="video-player">
      <source src="#" type="video/mp4">
    </video>
    <a href="#" class="modal-close">X</a>
  </div>
</div>
