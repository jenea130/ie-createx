<?php
/*
* Template Name: Home
*/
get_header();
?>
<?php echo get_template_part('template-parts/home/home-intro'); ?>
<div class="container">
    <?php echo get_template_part('template-parts/home/agency'); ?>
    <?php echo get_template_part('template-parts/home/logos'); ?>
    <?php echo get_template_part('template-parts/home/createx'); ?>
    <?php echo get_template_part('template-parts/home/rating'); ?>
    <?php echo get_template_part('template-parts/home/tabs'); ?>
</div>
<?php get_footer(); ?>