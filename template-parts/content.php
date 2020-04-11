<?php

 /** if(can_enter_calendar(get_the_title())){

      $class = "grid-item ".get_random_theme_font();
      $linkParams = "href=\"" . get_permalink() . "\"";

  } else {

      $class = "grid-item unopen ".get_random_theme_font();
      $linkParams = "onclick=\"swal('Case Fermée!', 'Revenez dans les prochains jours', 'warning')\"";

  }*/

?>
<div class="grid-item col-3">
  <a href="#">
      <img src="<?php echo get_the_post_thumbnail_url() ?>" class="img-fluid">
  </a>
</div>
<?php //the_title(); ?>