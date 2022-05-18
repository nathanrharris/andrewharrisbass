<div id="performances-internal" class="performances-internal content internal-panel">
  <h2>Performances</h2>

  <div class="performances__grid grid-alternate">
  <?php
    $args = array(
      'post_type' => 'performance',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'meta_key'			=> 'date_for_sorting',
	    'orderby'			=> 'meta_value',
	    'order'				=> 'DESC'
    );

    $loop = new WP_Query( $args );

    $start_year = date('Y');

    while ( $loop->have_posts() ) : $loop->the_post();
      $end_year = substr(get_field('date_for_sorting'), 0, 4);
    endwhile;

    wp_reset_postdata();

    for($x = $start_year; $x >= $end_year; $x--) {
      print '<h3 class="year">' . $x . '</h3>';

      print '<div class="year-group">';

      $loop = new WP_Query( $args );

      while ( $loop->have_posts() ) : $loop->the_post();

        if (substr(get_field('date_for_sorting'), 0, 4) == $x) {

          print "<div class='grid__item'>";

          print '<p class="performances__date">' . get_field('date') . '</p>';

          print '<p class="performances__venue">' . get_field('venue') . '</p>';

          print '<p class="performances__opera">' . get_field('opera') . '</p>';

          print '<p class="performances__city">' . get_field('city') . '</p>';

          if (get_field('link') != '') {
            print '<p class="performances__link"><a href="' . get_field('link') . '">More Info</a></p>';
          }

          print "</div>";


        }

      endwhile;

      wp_reset_postdata();

      print "</div>";

    }
  ?>

  </div>
</div>
