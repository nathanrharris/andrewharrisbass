<div id="performances" class="performances content panel">
  <h2>Upcoming Events</h2>

  <div class="performances__grid grid-1col">
  <?php
    $args = array(
      'post_type' => 'performance',
      'post_status' => 'publish',
      'posts_per_page' => -1,
      'meta_key'			=> 'date_for_sorting',
	    'orderby'			=> 'meta_value',
      'order'				=> 'DESC',
      /*
      'meta_query' => array(
        array(
         'key' => 'date_for_sorting',
         'value' => date("Ymd"),
         'compare' => '>='
        )
      )
       */
    );

    $loop = new WP_Query( $args );

    while ( $loop->have_posts() ) : $loop->the_post();

      if (get_field('show_on_home_page') == 1) {

        print "<div class='grid__item'>";

        print '<p class="performances__date">' . get_field('date') . '</p>';

        print '<p class="performances__venue">' . get_field('venue') . '</p>';

        print '<p class="performances__opera">' . get_field('opera') . '</p>';

        print '<p class="performances__city">' . get_field('role') . '</p>';

        print '<p class="performances__city">' . get_field('notes') . '</p>';
        
        print '<p class="performances__city">' . get_field('city') . '</p>';

        if (get_field('link') != '') {
          print '<p class="performances__link"><a href="' . get_field('link') . '" target="_blank">More Info</a></p>';
        }

        print "</div>";
      }
    endwhile;

    wp_reset_postdata();
  ?>

  <a href="/performance-archive" class="performance__archive archive">Performance Archive</a>

  </div>
</div>
