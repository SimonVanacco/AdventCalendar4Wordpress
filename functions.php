<?php

$defaults = array(
    'default-color'          => '',
    'default-image'          => '',
    'default-repeat'         => 'repeat',
    'default-position-x'     => 'left',
    'default-position-y'     => 'top',
    'default-size'           => 'auto',
    'default-attachment'     => 'scroll',
    'wp-head-callback'       => '_custom_background_cb',
    'admin-head-callback'    => '',
    'admin-preview-callback' => ''
);
add_theme_support( 'custom-background', $defaults );


function add_header_assets() {

    $dirprefix = get_bloginfo('template_directory')."/assets/";
    ?>
    <style>
        @font-face {
            font-family: Snowinter;
            src: url('<?php echo $dirprefix ?>/fonts/snowinter.ttf');
        }
        @font-face {
            font-family: ChristmasLights;
            src: url('<?php echo $dirprefix ?>/fonts/ChristmasLights.ttf');
        }
        @font-face {
            font-family: ChristmasCandies;
            src: url('<?php echo $dirprefix ?>/fonts/PWChristmascandies.ttf');
        }
        @font-face {
            font-family: HappyChristmas;
            src: url('<?php echo $dirprefix ?>/fonts/PWHappyChristmas.ttf');
        }
        @font-face {
            font-family: CartoonBlocks;
            src: url('<?php echo $dirprefix ?>/fonts/CartoonBlocks.otf');
        }
        @font-face {
            font-family: iLoveChristmas;
            src: url('<?php echo $dirprefix ?>/fonts/iLoveChristmas.ttf');
        }
        @font-face {
            font-family: CandyTime;
            src: url('<?php echo $dirprefix ?>/fonts/CandyTime.ttf');
        }
    </style>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/style.css">
    <link rel="stylesheet" href="<?php echo $dirprefix ?>/css/sweetalert.css">

    <script src="<?php echo $dirprefix ?>/js/sweetalert.min.js"></script>
    <?php
}
add_action('wp_head', 'add_header_assets');

function add_footer_assets() {
    ?>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <?php
}
add_action('wp_footer', 'add_footer_assets');

require('inc/template-functions.php');
require('inc/CommentWalker.php');