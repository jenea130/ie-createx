<?php

/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ie-createx
 */

?>

<footer id="colophon" class="footer">
	<?php echo get_template_part('template-parts/footer/footer-top'); ?>
	<?php echo get_template_part('template-parts/footer/footer-bottom'); ?>
	<?php echo get_template_part('template-parts/footer/footer-copyright'); ?>
</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>