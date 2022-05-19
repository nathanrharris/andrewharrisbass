(function ($) {
  $(window).load(function(){
    homepage_slideshow.run();

    $('.modal-close').click(function() {
      video_modal.close();
    });

    $('.video-thumbnail').click(function() {
      video_modal.open($(this).data('video'), $(this).data('title'), $(this).data('subtitle'));
    });
  });

}(jQuery));

var video_modal = (function ($) {
  return {
    open: function (video_url, title, subTitle) {
      $('.video__modal--wrapper').fadeIn('fast');
      $('#video-player').attr('src', video_url);
      $('#video-player').get(0).play();
    },

    close: function (e) {

      $('#video-player').get(0).pause();
      $('.video__modal--wrapper').fadeOut('fast');

      $('html, body').css({ overflow: 'auto', height: 'auto' });
    }
  }
}(jQuery));

// Homepage slideshow.
var homepage_slide_time = 1000;
var homepage_slide_interval = 5000;
var homepage_slide_easing = 'swing';

// Variables to hold states.
var homepage_slide_index = null;
var homepage_slide_count = null;
var homepage_slideshow_autoplay_interval_id = null;
var homepage_slideshow_animating = false;

var homepage_slideshow = (function ($) {
  return {
    run: function () {
      homepage_slide_count = $(".homepage-slide").length;

      if (homepage_slide_count <= 1 ) {
        return;
      }

      homepage_slide_index = 1;

      setInterval(function() { homepage_slideshow.slide_left(); }, homepage_slide_interval);
    },

    slide_left: function () {

      var homepage_slide_index_next = homepage_slide_index + 1;

      if (homepage_slide_index_next > homepage_slide_count) {
        homepage_slide_index_next = 1;
      }

      $('#homepage-slide__' + homepage_slide_index).animate({'left':'-100%'}, homepage_slide_time, homepage_slide_easing);
      $('#homepage-slide__' + homepage_slide_index_next).css('left', '100%').animate({'left':'0'}, homepage_slide_time, homepage_slide_easing);

      homepage_slide_index = homepage_slide_index_next;

      console.log('slide left');
    }
  }
}(jQuery));
