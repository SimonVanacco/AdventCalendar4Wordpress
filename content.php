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

?>

<div class="grid-item <?php echo $itemClass; ?> col-md-3" data-mh="grid-item">
  <a href="<?php the_permalink(); ?>">
    <div class="card text-center">
      <div class="card-body">
        <h4 class="card-title"><?php the_title(); ?></h4>
      </div>
    </div>
  </a>
</div>
