<?php

  if(can_enter_calendar(get_the_title())){
      $linkParams = "href=\"" . get_permalink() . "\"";
  } else {
      $linkParams = "onclick=\"swal('Case Fermée!', 'Revenez dans les prochains jours', 'warning')\"";
  }

?>


<div class="grid-item <?php echo get_randsnowy_font(); ?> col-lg-3 col-md-6 col-xs-12" data-mh="grid-item">
  <a <?= $linkParams ?> >
    <div class="card text-center">
      <div class="card-body">
        <h4 class="card-title"><?php the_title(); ?></h4>
      </div>
    </div>
  </a>
</div>
