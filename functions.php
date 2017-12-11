<?php
include('theme-config.php');

class comment_walker extends Walker_Comment {

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
function start_el( &$output, $comment, $depth = 1, $args = array(), $id = 0 ) {
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

    <article <?php comment_class(empty( $args['has_children'] ) ? '' :'parent') ?> id="comment-<?php comment_ID() ?>">
    <div class="comment-row row">
        <figure class="gravatar col-md-2">
            <?php echo get_avatar( $comment, 120, 'https://www.gravatar.com/avatar/88a771dc1a611b2038c9a0ad0770b595?s=120', 'Author’s gravatar', array('class' => 'img-fluid')); ?>
        </figure>
        <div class="col-md-10">
            <div class="comment-meta post-meta" role="complementary">
                <h2 class="comment-author">
                    <?php comment_author(); ?>
                </h2>
                <time class="comment-meta-item" datetime="<?php comment_date('Y-m-d') ?>T<?php comment_time('H:iP') ?>"><?php comment_date('j F Y') ?>, <a href="#comment-<?php comment_ID() ?>"><?php comment_time() ?></a></time>
                <?php edit_comment_link('<p class="comment-meta-item">Modifier</p>','',''); ?>
                <?php if ($comment->comment_approved == '0') : ?>
                    <p class="comment-meta-item text-danger">(Votre commentaire est en cours de modération)</p>
                <?php endif; ?>
            </div>
            <div class="comment-content post-content" itemprop="text">
                <?php comment_text() ?>
            </div>
        </div>
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