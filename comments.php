<aside id="comments" class="col-md-9">
 <div class="card card-body">
     <?php if ( have_comments() ) : ?>
         <h2 class="comments-title">
             <?php
             $comments_number = get_comments_number();
             if ( 1 === $comments_number ) {
                 echo "1 commentaire sur cette case: réagissez à votre tour!";
             } else {

                 echo $comments_number." commentaires sur cette case";
             }
             ?>
         </h2>

         <?php the_comments_navigation(); ?>

         <ol class="comment-list">
             <?php
             wp_list_comments( array(
                 'style'       => 'ol',
                 'short_ping'  => true,
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
         <p class="no-comments">Il n'y a pas encore de commentaires... Soyez le premier!</p>
     <?php endif; ?>

     <?php
     comment_form( array(
         'title_reply_before' => '<h2 id="reply-title" class="comment-reply-title">',
         'title_reply_after'  => '</h2>',
     ) );
     ?>

 </div>
</aside><!-- .comments-area -->
