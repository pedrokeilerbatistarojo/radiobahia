<?php

// Load widget base.
require_once get_template_directory() . '/inc/ansar/widgets/widgets-base.php';

require_once(RADIOBAHIA_LOCATION . "/includes/schema/widget-posts-double-category.php");
require_once(RADIOBAHIA_LOCATION . "/includes/schema/widget-latest-news.php");
require_once(RADIOBAHIA_LOCATION . "/includes/schema/widget-author.php");
require_once(RADIOBAHIA_LOCATION . "/includes/schema/widgets-common-functions.php");


// Register my personal radio bahia widget

function radiobahia_my_widget_register() {
  unregister_widget( 'Newsup_Dbl_Col_Cat_Posts' );
  unregister_widget( 'My_Newsup_Latest_Post' );
  
  register_widget( 'My_Newsup_Dbl_Col_Cat_Posts' );
  register_widget( 'My_Newsup_Latest_Post' );
  register_widget( 'My_Widget_Author' );
}

add_action( 'widgets_init', 'radiobahia_my_widget_register', 11);

//Add Api JS Facebook SDK for shared page

function radiobahia_hook_javascript_api_facebook() {
  ?>
      <div id="fb-root"></div>
      <script async defer crossorigin="anonymous" src="https://connect.facebook.net/es_LA/sdk.js#xfbml=1&version=v13.0" nonce="hPeEWavT"></script>
  <?php
}

add_action('wp_head', 'radiobahia_hook_javascript_api_facebook');

function radiobahia_hook_audio_live() {
  ?>
      <div class="col-md-3 offset-md-6 text-center-xs">
        <audio controls="" autoplay="">
          <source src="https://icecast.teveo.cu/PKWhw37L" type="audio/ogg">
        </audio>
      </div>

  <?php
}

add_action('newsup_action_header_section', 'radiobahia_hook_audio_live');