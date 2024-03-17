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
					</a>
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