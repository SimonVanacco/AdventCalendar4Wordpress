<?php
    $DATE_day = date('j');
    $DATE_month = date('n');

    if(($DATE_month == 12 && $DATE_day >= intval(get_the_title())) || !ARE_POSTS_DATECONTROLLED || ADMIN_IP == $_SERVER['REMOTE_ADDR']){
?>
        <article class="col-md-9">
            <div class="card">
                <div class="card-body">
                    <p class="card-text"><?php the_content(); ?></p>
                </div>
            </div>
        </article>

<?php
    } else {
        ?>
        <script>
            window.location.href = '/';
        </script>
        <?php
        exit();
    }
?>
