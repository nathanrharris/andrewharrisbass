<div class="contact-wrapper">
  <div id="contact" class="contact content">
    <h3>Contact</h3>
    <div class="contact-left left">
      <?php

        $page = get_post(39);

        $content = $page->post_content;

        $content = apply_filters('the_content', $content);

        $content = str_replace(']]>', ']]>', $content);

        print $content;

      ?>
    </div>

    <div class="contact-right right">

    </div>

    <br clear="both" />
    <br clear="both" />
    <br clear="both" />
  </div>
</div>
