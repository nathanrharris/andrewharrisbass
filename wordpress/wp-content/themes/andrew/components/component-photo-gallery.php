<div id="photo-gallery" class="photo-gallery content internal-panel">
  <h2>Photo Gallery</h2>

  <div class="photo__grid grid-3col">
  <?php
    $args = array(
      'post_type' => 'photo',
      'post_status' => 'publish',
      'posts_per_page' => -1
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();

      print "<div class='grid__item'>";

      print '<div class="img-wrapper">';

      print get_field('photo');

      print "</div>";

      print '<p>'. get_the_title() . '</p>';

      print "</div>";

    endwhile;

    wp_reset_postdata();
  ?>
  </div>

</div>
