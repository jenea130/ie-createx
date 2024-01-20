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
</div>
<?php get_footer(); ?>