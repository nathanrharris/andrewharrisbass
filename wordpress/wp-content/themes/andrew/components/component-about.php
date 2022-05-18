<div id="biography" class="biography content panel">
  <h2>Biography</h2>

  <img src="<?php print get_stylesheet_directory_uri(); ?>/images/headshot.jpg" class="headshot" />

  <?php

    $page = get_post(34);

    $content = $page->post_content;

    $content = apply_filters('the_content', $content);

    $content = str_replace(']]>', ']]>', $content);

    print $content;

  ?>

</div>
