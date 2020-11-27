<?php

  if(can_enter_calendar(get_the_title())){

      $class = "grid-item ".get_random_theme_font();
      $linkParams = "href=\"" . get_permalink() . "\"";

  } else {

      $class = "grid-item unopen ".get_random_theme_font();
      $linkParams = "onclick=\"swal('Case Fermée!', 'Revenez dans les prochains jours', 'warning')\"";

  }

?>

<div class="grid-item <?php echo $class; ?> col-lg-3 col-md-6 col-sm-6 col-xs-6" data-mh="grid-item">
  <a <?= $linkParams ?> >
    <div class="card text-center">
      <div class="card-body">
        <h4 class="card-title"><?php the_title(); ?></h4>
      </div>
    </div>
  </a>
</div>
