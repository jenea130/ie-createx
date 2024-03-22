<?php
get_header();
?>
<div class="single-blog">
	<?php echo get_template_part('template-parts/single-blog/page-intro') ?>
	<div class="container">
		<div class="single-blog__wrap">
			<div class="single-blog__main">
				<?php echo get_template_part('template-parts/single-blog/published') ?>
				<div class="blog-content">
					<?php if (have_posts()) : ?>
						<?php the_post(); ?>
						<?php the_content(); ?>
						<?php wp_reset_postdata(); ?>
					<?php endif; ?>
				</div>
				<div class="tags-share">
					<div class="tags-share__item">
						<div class="tags-share__wrap"><span>Tags:</span>
							<ul class="category-list">
								<li>#business</li>
								<li>#PPC</li>
								<li>#targeting</li>
							</ul>
						</div>
					</div>
					<div class="tags-share__item">
						<?php echo get_template_part('template-parts/single-blog/case-share') ?>
					</div>
				</div>
				<div class="post-nav">
					<header class="post-nav__header">
						<div class="post-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M9.20711 17.2071C8.81658 17.5976 8.18342 17.5976 7.79289 17.2071L3.29289 12.7071C2.90237 12.3166 2.90237 11.6834 3.29289 11.2929L7.79289 6.79289C8.18342 6.40237 8.81658 6.40237 9.20711 6.79289C9.59763 7.18342 9.59763 7.81658 9.20711 8.20711L6.41421 11L20 11C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13L6.41421 13L9.20711 15.7929C9.59763 16.1834 9.59763 16.8166 9.20711 17.2071Z" fill="#424551"></path>
							</svg><span>Prev Post</span>
						</div>
						<div class="post-nav__link">
							<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M9.20711 17.2071C8.81658 17.5976 8.18342 17.5976 7.79289 17.2071L3.29289 12.7071C2.90237 12.3166 2.90237 11.6834 3.29289 11.2929L7.79289 6.79289C8.18342 6.40237 8.81658 6.40237 9.20711 6.79289C9.59763 7.18342 9.59763 7.81658 9.20711 8.20711L6.41421 11L20 11C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13L6.41421 13L9.20711 15.7929C9.59763 16.1834 9.59763 16.8166 9.20711 17.2071Z" fill="#424551"></path>
							</svg><span>Next Post</span>
						</div>
					</header>
					<div class="post-nav__wrap">
						<div class="post-nav__item">
							<div class="post-small">
								<div class="post-small__img"><img src="assets/img/blog/trending/trending-3.jpg" alt=""></div>
								<div class="post-small__content">
									<div class="post-small__info"><img src="assets/img/icons/clock.svg" alt=""><span>March 12, 2020</span></div>
									<h3 class="post-small__subtitle">10 tips for a small business digital marketing strategy</h3>
								</div>
							</div>
						</div>
						<div class="post-nav__item">
							<div class="post-small">
								<div class="post-small__img"><img src="assets/img/blog/trending/trending-2.jpg" alt=""></div>
								<div class="post-small__content">
									<div class="post-small__info"><img src="assets/img/icons/clock.svg" alt=""><span>April 9, 2020</span></div>
									<h3 class="post-small__subtitle">Why SEO Is All About Content Marketing?</h3>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<?php echo get_template_part('template-parts/single-blog/single-blog-aside') ?>
		</div>
	</div>
	<?php echo get_template_part('template-parts/blog/subscribe-dark') ?>
	<div class="container">
		<?php echo get_template_part('template-parts/blog/slider-blog') ?>
	</div>
</div>

<?php get_footer(); ?>