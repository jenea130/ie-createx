<?php
get_header();
?>

<?php echo get_template_part('template-parts/our-services/page-intro'); ?>
<div class="container">
    <?php echo get_template_part('template-parts/our-services/advantages'); ?>
</div>
<?php echo get_template_part('template-parts/home/freeseo'); ?>
<div class="container">
    <?php echo get_template_part('template-parts/our-services/markets'); ?>
</div>
<?php echo get_template_part('template-parts/home/studies'); ?>
<div class="container">
    <?php echo get_template_part('template-parts/home/logos'); ?>
    <?php echo get_template_part('template-parts/home/news'); ?>
</div>

<?php get_footer(); ?>