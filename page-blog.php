<?php
get_header();
?>

<div class="page-blog">
    <?php echo get_template_part('template-parts/blog/page-intro'); ?>

    <div class="container">
        <?php echo get_template_part('template-parts/blog/latest-blog'); ?>
        <div class="page-blog__wrap">
            <?php echo get_template_part('template-parts/blog/main-blog'); ?>
            <?php echo get_template_part('template-parts/blog/blog-aside'); ?>
        </div>
    </div>
    <?php echo get_template_part('template-parts/blog/subscribe'); ?>
</div>
<?php get_footer(); ?>