<?php
  switch (rand(1,7)) {
    case 1:
      $itemClass = "HappyChristmas";
      break;
    case 2:
      $itemClass = "CartoonBlocks";
      break;
    case 3:
      $itemClass = "ChristmasCandies";
      break;
    case 4:
      $itemClass = "iLoveChristmas";
      break;
    case 5:
      $itemClass = "ChristmasLights";
      break;
    case 6:
      $itemClass = "Snowinter";
      break;
      case 7:
      $itemClass = "CandyTime";
      break;
    default:
      $itemClass = "";
      break;
  }

  $DATE_day = date('j');
  $DATE_month = date('n');

  if(($DATE_month == 12 && $DATE_day >= intval(get_the_title())) || (current_user_can('editor') || current_user_can('administrator') )){
      $linkParams = "href=\"" . get_permalink() . "\"";
  } else {
      $linkParams = "onclick=\"swal('Case Fermée!', 'Revenez dans les prochains jours', 'warning')\"";
  }

?>


<div class="grid-item <?php echo $itemClass; ?> col-lg-3 col-md-6 col-xs-12" data-mh="grid-item">
  <a <?= $linkParams ?> >
    <div class="card text-center">
      <div class="card-body">
        <h4 class="card-title"><?php the_title(); ?></h4>
      </div>
    </div>
  </a>
</div>
