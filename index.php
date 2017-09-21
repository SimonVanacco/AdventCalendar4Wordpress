
    <?php get_header(); ?>

    <div class="row">
      <?php
        $posts = get_posts(array('orderby' => 'rand', 'numberposts' => -1));
        foreach($posts as $post) :
          get_template_part( 'content', get_post_format() );
        endforeach;
      ?>
    </div>

    <?php get_footer(); ?>
