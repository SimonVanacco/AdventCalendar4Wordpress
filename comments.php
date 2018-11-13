<aside id="comments" class="col-md-9">
    <div class="card card-body">
        <?php
        $fields =  array(

            'author' =>
                '<div class="form-group"><label for="author">Nom</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) .
                '<input class="form-control" id="author" name="author" type="text" value="' . esc_attr( $commenter['comment_author'] ) .
                '"/></div>',

            'email' =>
                '<div class="form-group"><label for="email">Adresse mail</label> ' .
                ( $req ? '<span class="required">*</span>' : '' ) .
                '<input class="form-control" id="email" name="email" type="text" value="' . esc_attr(  $commenter['comment_author_email'] ) .
                '"/></div>'
        );

        comment_form( array(
            'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
            'title_reply_after'  => '</h2>',
            'fields' => $fields,
            'class_submit' => 'btn btn-primary',
            'comment_field' => '<div class="form-group"><label for="comment"> Commentaire</label> '.
                ( $req ? '<span class="required">*</span>' : '' ) .
                '<textarea id="comment" name="comment" class="form-control" aria-required="true">' .
                '</textarea></div>'
        ) );
        ?>
    </div>
    <?php if ( have_comments() ) : ?>

        <?php the_comments_navigation(); ?>

        <ol class="comment-list">
            <?php
            wp_list_comments( array(
                'walker'  => new WP_Bootstrap_Commentwalker(),
                'max-depth' => 1,
                'avatar_size' => 42,
            ) );
            ?>
        </ol><!-- .comment-list -->

        <?php the_comments_navigation(); ?>

    <?php endif; // Check for have_comments(). ?>
</aside><!-- .comments-area -->