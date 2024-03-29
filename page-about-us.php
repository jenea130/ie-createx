<?php
get_header();
?>

<div class="page-about-us">
    <?php echo get_template_part('template-parts/about-us/page-intro'); ?>

    <div class="container">
        <?php echo get_template_part('template-parts/home/rating'); ?>
        <?php echo get_template_part('template-parts/about-us/video'); ?>
        <?php echo get_template_part('template-parts/about-us/core'); ?>
        <?php echo get_template_part('template-parts/about-us/seo-agency'); ?>
        <?php echo get_template_part('template-parts/about-us/awards'); ?>
        <?php echo get_template_part('template-parts/search-engine-optimization/get-free'); ?>
        <?php echo get_template_part('template-parts/about-us/clients'); ?>
        <?php echo get_template_part('template-parts/about-us/team'); ?>
        <?php echo get_template_part('template-parts/home/ask'); ?>
        <?php echo get_template_part('template-parts/about-us/career'); ?>
        <?php echo get_template_part('template-parts/home/news'); ?>
    </div>
</div>

<?php get_footer(); ?>