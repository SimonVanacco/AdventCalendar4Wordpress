
    <?php
        get_header();


        if(can_enter_calendar('25')) {

            $page = get_page_by_title('25');

            if(isset($page)) {

                ?>
                <div class="alert alert-25 alert-info" role="alert">
                    Le calendrier de l'avent de cette année est malheuresement terminé, mais voici une dernière case pour vous remercier:
                    <a href="<?php echo get_permalink($page); ?>" class="btn btn-primary">Case du 25 Décembre</a>
                </div>

                <?php

            }

        }
    ?>


    <div class="row">
      <?php
        $posts = get_posts(array('orderby' => 'rand', 'numberposts' => -1));
        foreach($posts as $post) :
          get_template_part( 'template-parts/content', get_post_format() );
        endforeach;
      ?>
    </div>

    <?php get_footer(); ?>
