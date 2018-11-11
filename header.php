<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <?php wp_head(); ?>

        <title><?php echo get_option('blogname'); ?></title>
    </head>
    <body class="custom-background">

        <div class="container">

            <div class="row justify-content-center">
                <header class="col-md-6">
                    <h1 class="Snowinter"><a href="<?php echo get_bloginfo( 'wpurl' );?>"><?php echo get_bloginfo( 'name' ); ?></a></h1>
                    <p class="lead">
                        <?php echo get_bloginfo( 'description' ); ?>
                    </p>
                </header>
            </div>