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
    <div class="card card-body">
        <?php if ( have_comments() ) : ?>
            <h2 class="comments-title">
                Commentaire(s): 
            </h2>

            <?php the_comments_navigation(); ?>

            <ol class="comment-list">
                <?php
                wp_list_comments( array(
                    'style'       => 'div',
                    'walker'  => new comment_walker(),
                    'max-depth' => 1,
                    'avatar_size' => 42,
                ) );
                ?>
            </ol><!-- .comment-list -->

            <?php the_comments_navigation(); ?>

        <?php endif; // Check for have_comments(). ?>

        <?php
        // If comments are closed and there are comments, let's leave a little note, shall we?
        if ( ! comments_open() && get_comments_number() && post_type_supports( get_post_type(), 'comments' ) ) :
            ?>
            <p class="no-comments">Il n'y a pas encore de commentaire... Soyez le premier!</p>
        <?php endif; ?>
    </div>
</aside><!-- .comments-area -->
