<?php
  switch (rand(1,14)) {
    case 1:
    case 2:
      $itemClass = "HappyChristmas";
      break;
    case 3:
    case 4:
      $itemClass = "CartoonBlocks";
      break;
    case 5:
    case 6:
      $itemClass = "ChristmasCandies";
      break;
    case 7:
    case 8:
      $itemClass = "iLoveChristmas";
      break;
    case 9:
    case 10:
      $itemClass = "ChristmasLights";
      break;
    case 11:
    case 12:
      $itemClass = "Snowinter";
      break;
    case 13:
    case 14:
      $itemClass = "CandyTime";
      break;
    default:
      $itemClass = "";
      break;
  }
  if(ARE_POSTS_DATECONTROLLED && $_SERVER['REMOTE_ADDR'] != ADMIN_IP){

      $DATE_day = date('j');
      $DATE_month = date('n');

      if($DATE_month == 12 && $DATE_day >= intval(get_the_title())){
          $linkParams = "href=\"" . get_permalink() . "\"";
      } else {
          $linkParams = "onclick=\"swal('Case Fermée!', 'Revenez dans les prochains jours', 'warning')\"";
      }

  } else {
      $linkParams = "href=\"" . get_permalink() . "\"";
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
