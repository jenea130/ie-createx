<?php
get_header();

$terms = get_tags();
?>
<div class="page-blog">
    <?php echo get_template_part('template-parts/blog/page-intro'); ?>

    <div class="container">
        <?php echo get_template_part('template-parts/blog/latest-blog'); ?>
        <div class="page-blog__wrap">
            <?php echo get_template_part('template-parts/blog/main-blog'); ?>
            <div class="page-blog__aside">
                <div class="blog-categories">
                    <h2 class="blog-categories__title title title--small">Blog Categories</h2>
                    <ul class="blog-categories__list">
                        <li><span class="blog-categories__subtitle">All</span><span class="blog-categories__count">25</span></li>
                        <li><span class="blog-categories__subtitle">Media & Press</span><span class="blog-categories__count">3</span></li>
                        <li><span class="blog-categories__subtitle">Ad Tips</span><span class="blog-categories__count">7</span></li>
                        <li class="active"><span class="blog-categories__subtitle">Marketing</span><span class="blog-categories__count">4</span></li>
                        <li><span class="blog-categories__subtitle">Marketing</span><span class="blog-categories__count">7</span></li>
                        <li><span class="blog-categories__subtitle">Paid Search</span><span class="blog-categories__count">2</span></li>
                    </ul>
                </div>
                <div class="trending">
                    <h2 class="trending__title title title--small">Now Trending</h2>
                    <div class="trending__item">
                        <div class="post-small">
                            <div class="post-small__img"><img src="assets/img/blog/trending/trending-1.jpg" alt=""></div>
                            <div class="post-small__content">
                                <div class="post-small__info"><img src="assets/img/icons/clock.svg" alt=""><span>July 5, 2020</span></div>
                                <h3 class="post-small__subtitle">5 Surprising Ways to Combine Content Marketing with PPC</h3>
                            </div>
                        </div>
                    </div>
                    <div class="trending__item">
                        <div class="post-small">
                            <div class="post-small__img"><img src="assets/img/blog/trending/trending-2.jpg" alt=""></div>
                            <div class="post-small__content">
                                <div class="post-small__info"><img src="assets/img/icons/clock.svg" alt=""><span>April 9, 2020</span></div>
                                <h3 class="post-small__subtitle">Why SEO Is All About Content Marketing?</h3>
                            </div>
                        </div>
                    </div>
                    <div class="trending__item">
                        <div class="post-small">
                            <div class="post-small__img"><img src="assets/img/blog/trending/trending-3.jpg" alt=""></div>
                            <div class="post-small__content">
                                <div class="post-small__info"><img src="assets/img/icons/clock.svg" alt=""><span>March 12, 2020</span></div>
                                <h3 class="post-small__subtitle">10 tips for a small business digital marketing strategy</h3>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="tags">
                    <h2 class="tags__title title title--small">Tags</h2>
                    <ul class="category-list">
                        <?php foreach ($terms as $term) : ?>
                            <?php
                            $name = $term->name;
                            $slug = $term->slug;
                            ?>
                            <li><?php echo "#" . $name; ?></li>
                        <?php endforeach; ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <?php echo get_template_part('template-parts/blog/subscribe'); ?>
</div>
<?php get_footer(); ?>