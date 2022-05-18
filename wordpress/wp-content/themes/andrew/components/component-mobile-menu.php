<div class="home-mobile-menu">
  <div class="home-mobile-menu__content content">
    <div class="home-mobile-menu__item"><a href="#gallery"       onclick="jQuery('.mobile-menu-close-link').hide(); jQuery('.mobile-menu-open-link').show(); jQuery('.home-mobile-menu').fadeOut('fast'); jQuery('html, body').animate({scrollTop: jQuery('#gallery').offset().top}, 1000); return false;">Gallery</a></div>
    <div class="home-mobile-menu__item"><a href="#biography"     onclick="jQuery('.mobile-menu-close-link').hide(); jQuery('.mobile-menu-open-link').show(); jQuery('.home-mobile-menu').fadeOut('fast'); jQuery('html, body').animate({scrollTop: jQuery('#biography').offset().top}, 1000); return false;">Biography</a></div>
    <div class="home-mobile-menu__item"><a href="#videos"        onclick="jQuery('.mobile-menu-close-link').hide(); jQuery('.mobile-menu-open-link').show(); jQuery('.home-mobile-menu').fadeOut('fast'); jQuery('html, body').animate({scrollTop: jQuery('#videos').offset().top}, 1000); return false;">Videos</a></div>
    <div class="home-mobile-menu__item"><a href="#audio"         onclick="jQuery('.mobile-menu-close-link').hide(); jQuery('.mobile-menu-open-link').show(); jQuery('.home-mobile-menu').fadeOut('fast'); jQuery('html, body').animate({scrollTop: jQuery('#audio').offset().top}, 1000); return false;">Audio</a></div>
    <div class="home-mobile-menu__item"><a href="#performances"  onclick="jQuery('.mobile-menu-close-link').hide(); jQuery('.mobile-menu-open-link').show(); jQuery('.home-mobile-menu').fadeOut('fast'); jQuery('html, body').animate({scrollTop: jQuery('#performances').offset().top}, 1000); return false;">Performances</a></div>
    <div class="home-mobile-menu__item"><a href="#contact"       onclick="jQuery('.mobile-menu-close-link').hide(); jQuery('.mobile-menu-open-link').show(); jQuery('.home-mobile-menu').fadeOut('fast'); jQuery('html, body').animate({scrollTop: jQuery('#contact').offset().top}, 1000); return false;">Contact</a></div>
  </div>
</div>
<div class="home-mobile-menu-link">
  <a href="#" onclick="jQuery('.home-mobile-menu').fadeIn('fast'); jQuery(this).hide(); jQuery('.mobile-menu-close-link').show();" class="mobile-menu-open-link">
    <img src="<?php print get_stylesheet_directory_uri(); ?>/images/hamburger.png" width="32" />
  </a>
  <a href="#" onclick="jQuery('.home-mobile-menu').fadeOut('fast'); jQuery(this).hide(); jQuery('.mobile-menu-open-link').show();" class="mobile-menu-close-link">
    X
  </a>
</div>
