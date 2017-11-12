<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
    <style>
        body{
            background-image: url('<?php echo get_bloginfo('template_directory') ?>/pictures/bck.jpg');
            background-size: cover;
        }
        @font-face {
            font-family: Snowinter;
            src: url('<?php echo get_bloginfo('template_directory'); ?>/fonts/snowinter.ttf');
        }
        @font-face {
            font-family: ChristmasLights;
            src: url('<?php echo get_bloginfo('template_directory'); ?>/fonts/ChristmasLights.ttf');
        }
        @font-face {
            font-family: ChristmasCandies;
            src: url('<?php echo get_bloginfo('template_directory'); ?>/fonts/PWChristmascandies.ttf');
        }
        @font-face {
            font-family: HappyChristmas;
            src: url('<?php echo get_bloginfo('template_directory'); ?>/fonts/PWHappyChristmas.ttf');
        }
        @font-face {
            font-family: CartoonBlocks;
            src: url('<?php echo get_bloginfo('template_directory'); ?>/fonts/CartoonBlocks.otf');
        }
        @font-face {
            font-family: iLoveChristmas;
            src: url('<?php echo get_bloginfo('template_directory'); ?>/fonts/iLoveChristmas.ttf');
        }
        @font-face {
            font-family: CandyTime;
            src: url('<?php echo get_bloginfo('template_directory'); ?>/fonts/CandyTime.ttf');
        }
    </style>
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/css/bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/style.css">
    <link rel="stylesheet" href="<?php echo get_bloginfo('template_directory') ?>/css/sweetalert.css">

    <script src="<?php echo get_bloginfo('template_directory'); ?>/js/sweetalert.min.js"></script>
    <title><?php echo get_option('blogname'); ?></title>
</head>
<body>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <header>
                <h1 class="Snowinter"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                <p class="lead">
                    <?php echo get_bloginfo( 'description' ); ?>
                </p>
            </header>
        </div>
    </div>
