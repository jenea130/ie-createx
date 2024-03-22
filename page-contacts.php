<?php
get_header();
?>

<div class="page-contacts">
    <?php echo get_template_part('template-parts/contacts/page-intro'); ?>
    <div class="container">
        <?php echo get_template_part('template-parts/contacts/contact-form'); ?>
    </div>
</div>


<?php get_footer(); ?>