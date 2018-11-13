<?php
class WP_Bootstrap_Commentwalker extends Walker_Comment {

    var $tree_type = 'comment';
    var $db_fields = array( 'parent' => 'comment_parent', 'id' => 'comment_ID' );

    // constructor – wrapper for the comments list
    function __construct() { ?>

        <section class="comments-list">

    <?php }

        // start_lvl – wrapper for child comments list
    function start_lvl( &$output, $depth = 0, $args = array() ) {
        $GLOBALS['comment_depth'] = $depth + 2; ?>

        <section class="child-comments comments-list">

    <?php }

        // end_lvl – closing wrapper for child comments list
    function end_lvl( &$output, $depth = 0, $args = array() ) {
        $GLOBALS['comment_depth'] = $depth + 2; ?>

        </section>

    <?php }

        // start_el – HTML for comment template
    function start_el( &$output, $comment, $depth = 0, $args = array(), $id = 0 ) {
        $depth++;
        $GLOBALS['comment_depth'] = $depth;
        $GLOBALS['comment'] = $comment;
        $parent_class = ( empty( $args['has_children'] ) ? '' : 'parent' );

        if ( 'article' == $args['style'] ) {
            $tag = 'article';
            $add_below = 'comment';
        } else {
            $tag = 'article';
            $add_below = 'comment';
        } ?>

        <article <?php comment_class(empty( $args['has_children'] ) ? 'card' :'parent card') ?> id="comment-<?php comment_ID() ?>" itemprop="comment" itemscope itemtype="http://schema.org/Comment">
            <div class="card-header" role="complementary">
                <div class="d-flex justify-content-between align-items-center">
                    <div class="d-flex justify-content-between align-items-center">
                        <div class="mr-2">
                            <figure class="gravatar rounded-circle" width="45"><?php echo get_avatar($comment, 65); ?></figure>
                        </div>
                        <div class="ml-2">
                            <div class="h5 m-0" itemprop="author"><?php comment_author(); ?></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <time class="text-muted h7 mb-2" datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>" itemprop="datePublished"><i class="far fa-clock-o"></i><?php comment_date('j F Y') ?>, <?php comment_time() ?></time>
                <?php if ($comment->comment_approved == '0') : ?>
                    <p class="comment-meta-item"><?php _e("Votre commentaire est en attente de modération", "club404theme") ?></p>
                <?php endif; ?>
                <p class="card-text" itemprop="text">
                    <?php comment_text() ?>
                </p>
            </div>
            <div class="card-footer" role="complementary">
            </div>

    <?php }

        // end_el – closing HTML for comment template
    function end_el(&$output, $comment, $depth = 0, $args = array() ) { ?>

        </article>

    <?php }

        // destructor – closing wrapper for the comments list
        function __destruct() { ?>

            </section>

        <?php }

}
?>