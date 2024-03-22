<?php
$studies = get_field('studies', 2);
$title = $studies['title'];
$label = $studies['label'];
$button_text = $studies['button_text'];
$background = $studies['background'];
?>
<section class="studies">
    <div class="container">
        <h2 class="studies__title title"><?php echo $title; ?></h2>
        <div class="studies__header">
            <div class="studies__arrow studies__arrow--prev">
                <svg width="18" height="12" viewbox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.20711 11.2071C5.81658 11.5976 5.18342 11.5976 4.79289 11.2071L0.292892 6.70711C-0.0976315 6.31658 -0.0976315 5.68342 0.292892 5.29289L4.79289 0.792893C5.18342 0.402369 5.81658 0.402369 6.20711 0.792893C6.59763 1.18342 6.59763 1.81658 6.20711 2.20711L3.41421 5L17 5C17.5523 5 18 5.44772 18 6C18 6.55228 17.5523 7 17 7L3.41421 7L6.20711 9.79289C6.59763 10.1834 6.59763 10.8166 6.20711 11.2071Z"></path>
                </svg>
            </div>
            <div class="studies__arrow studies__arrow--next">
                <svg width="18" height="12" viewbox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7929 0.792893C12.1834 0.402369 12.8166 0.402369 13.2071 0.792893L17.7071 5.29289C18.0976 5.68342 18.0976 6.31658 17.7071 6.70711L13.2071 11.2071C12.8166 11.5976 12.1834 11.5976 11.7929 11.2071C11.4024 10.8166 11.4024 10.1834 11.7929 9.79289L14.5858 7H1C0.447715 7 0 6.55228 0 6C0 5.44772 0.447715 5 1 5H14.5858L11.7929 2.20711C11.4024 1.81658 11.4024 1.18342 11.7929 0.792893Z"></path>
                </svg>
            </div>
        </div>
        <div class="studies__wrap">
            <?php
            $studies = new WP_Query([
                'post_type' => 'case-studio',
                'posts_per_page' => -1,
            ]);
            ?>
            <?php if ($studies->have_posts()) : ?>
                <?php while ($studies->have_posts()) : ?>
                    <?php $studies->the_post(); ?>
                    <?php
                    $title = get_the_title();
                    $permalink = get_the_permalink();
                    $excerpt = get_the_excerpt();
                    $logo = get_field('logo');
                    $items = get_field('items');
                    ?>
                    <a href="<?php echo $permalink; ?>" class="studies__item">
                        <div class="studies__content">
                            <div class="studies__logo"><img src="<?php echo $logo; ?>" alt=""></div>
                            <div class="studies__label"><?php echo $title; ?></div>
                            <div class="studies__text">
                                <?php echo $excerpt; ?>
                            </div>
                            <div class="ranges">
                                <?php echo get_template_part('template-parts/single-case-studies/rangers'); ?>
                            </div>
                        </div>
                    </a>
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php endif; ?>
        </div>
        <footer class="studies__footer">
            <span class="studies__info"><?php echo $label; ?></span>
            <a class="studies__btn btn" href="case-studies.html"><?php echo $button_text; ?></a>
        </footer>
    </div>
</section>