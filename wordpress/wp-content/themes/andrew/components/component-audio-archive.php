<div id="audio" class="audio content internal-panel">
  <h2>Audio Archive</h2>

  <div class="audio__grid grid-1col">
  <?php
    $args = array(
      'post_type' => 'audio',
      'post_status' => 'publish',
      'posts_per_page' => -1,
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();

      print "<div class='grid__item'>";

      print '<h4>' . get_the_title() . '</h4>';

      if ($mp3 = get_field('mp3')) {
        print "<audio controls><source src='" . $mp3['url']  . "' type='audio/mpeg'></audio>";
      }
      else {
        print get_field('embed_code');
      }

      print "</div>";

    endwhile;

    wp_reset_postdata();
  ?>
  </div>

</div>
