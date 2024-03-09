<?php
get_header();
?>

<div class="page-intro-search-engine-optimization">
    <?php echo get_template_part('template-parts/case-studies/page-intro'); ?>
    <div class="container">
        <?php echo get_template_part('template-parts/case-studies/filter'); ?>
        <?php echo get_template_part('template-parts/home/logos'); ?>
        <?php echo get_template_part('template-parts/home/comment'); ?>
        <?php echo get_template_part('template-parts/home/news'); ?>
    </div>
</div>
<?php get_footer(); ?>