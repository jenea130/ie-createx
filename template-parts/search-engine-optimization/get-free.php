<?php
$get_free = get_field('get_free', 33);
$title = $get_free['title'];
$form = $get_free['form'];
?>
<section class="get-free">
    <h2 class="get-free__title"><?php echo $title; ?></h2>
    <div class="get-free__form">
        <form class="seo-form" action="">
        <?php echo do_shortcode($form); ?>
        </form>
    </div>
</section>