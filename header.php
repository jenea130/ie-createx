<?php

/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package ie-createx
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<?php wp_body_open(); ?>
	<?php
	$header = get_field('header', 'option');
	$button_text = $header['button_text'];
	?>
	<header class="main-header">
		<div class="container">
			<div class="main-header__wrap">
				<a class="main-header__logo" href="/">
					<?php echo get_custom_logo(); ?>
				</a>
				<?php wp_nav_menu([
					'theme_location'  => 'header',
					'menu'            => '',
					'container'       => '',
					'container_class' => '',
					'container_id'    => '',
					'menu_class'      => 'main-header__menu main-menu',
					'menu_id'         => 'js-main-menu',
					'echo'            => true,
					'fallback_cb'     => 'wp_page_menu',
					'before'          => '',
					'after'           => '',
					'link_before'     => '',
					'link_after'      => '',
					'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
					'depth'           => 0,
					'walker'          => '',
				]); ?>
				<?php if (!is_page(669)) : ?>
					<a class="main-header__btn btn" href="<?php the_permalink(669); ?>"><span><?php echo $button_text; ?></span>
					<?php endif; ?>
					<svg xmlns="http://www.w3.org/2000/svg" height="1em" viewbox="0 0 640 512">
						<path d="M155.6 17.3C163 3 179.9-3.6 195 1.9L320 47.5l125-45.6c15.1-5.5 32 1.1 39.4 15.4l78.8 152.9c28.8 55.8 10.3 122.3-38.5 156.6L556.1 413l41-15c16.6-6 35 2.5 41 19.1s-2.5 35-19.1 41l-71.1 25.9L476.8 510c-16.6 6.1-35-2.5-41-19.1s2.5-35 19.1-41l41-15-31.3-86.2c-59.4 5.2-116.2-34-130-95.2L320 188.8l-14.6 64.7c-13.8 61.3-70.6 100.4-130 95.2l-31.3 86.2 41 15c16.6 6 25.2 24.4 19.1 41s-24.4 25.2-41 19.1L92.2 484.1 21.1 458.2c-16.6-6.1-25.2-24.4-19.1-41s24.4-25.2 41-19.1l41 15 31.3-86.2C66.5 292.5 48.1 226 76.9 170.2L155.6 17.3zm44 54.4l-27.2 52.8L261.6 157l13.1-57.9L199.6 71.7zm240.9 0L365.4 99.1 378.5 157l89.2-32.5L440.5 71.7z"></path>
					</svg></a>
					<div class="sandwitch-wrap" id="js-sandwitch-wrap">
						<div class="sandwitch">
							<div class="sandwitch__line sandwitch__line--top"></div>
							<div class="sandwitch__line sandwitch__line--middle"></div>
							<div class="sandwitch__line sandwitch__line--bottom"></div>
						</div>
					</div>
			</div>
		</div>
	</header>