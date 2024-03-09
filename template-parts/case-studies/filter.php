<?php
$terms = get_terms([
    'taxonomy' => 'category-case-studies',
    'hide_empty' => true,
    'orderby' => 'id'
]);
// vardump($terms);
$case_posts = new WP_Query([
    'post_type' => 'case-studio',
    'posts_per_page' => -1
]);
?>
<div class="filter">
    <div class="filter__header">
        <button class="filter__btn active" data-target="">All case studies</button>
        <?php foreach ($terms as $term) : ?>
            <?php
            $name = $term->name;
            $slug = $term->slug;
            ?>
            <button class="filter__btn" data-target="<?php echo $slug; ?>"><?php echo $name; ?></button>
        <?php endforeach; ?>
    </div>
    <div class="filter__wrap">
        <?php if ($case_posts->have_posts()) : ?>
            <?php while ($case_posts->have_posts()) : ?>
                <?php $case_posts->the_post(); ?>
                <?php
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                $image = get_the_post_thumbnail_url();
                $permalink = get_the_permalink();
                $items = get_field('items');
                $logo = get_field('logo');
                $cur_terms = get_the_terms(get_the_ID(), 'category-case-studies');
                $term_slug = $cur_terms[0]->slug;
                
                // $;erm_str = '';
                // foreach($cur_terms as $item) {
                //     $term_str .= $item->slug . ' ';
                // }
                // vardump($term_str);
                ?>
                <div class="filter__item" data-filter="<?php echo $term_slug; ?>">
                    <div class="item-filter">
                        <div class="item-filter__picture">
                            <img class="item-filter__img" src="<?php echo $image; ?>" alt="">
                            <div class="item-filter__info">
                                <img class="item-filter__logo" src="<?php echo $logo; ?>" alt="">
                                <div class="item-filter__label"><?php echo $title; ?></div>
                            </div>
                        </div>
                        <div class="item-filter__content">
                            <div class="ranges">
                                <div class="ranges__wrap">
                                    <?php foreach ($items as $item) : ?>
                                        <?php
                                        $image = $item['image'];
                                        $title = $item['title'];
                                        $subtitle = $item['subtitle'];
                                        ?>
                                        <div class="ranges__block">
                                            <div class="ranges__range"><img src="<?php echo $image; ?>" alt=""></div>
                                            <div class="ranges__wrapper">
                                                <div class="ranges__number"><?php echo $title; ?></div>
                                                <div class="ranges__description"><?php echo $subtitle; ?></div>
                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                </div>
                            </div>
                            <div class="item-filter__text text"><?php echo $excerpt; ?></div>
                            <a class="link" href="<?php echo $permalink; ?>">
                                <span>View case</span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
    <div class="filter__more">
        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M2.09961 2C2.65189 2 3.09961 2.44772 3.09961 3V7.43632C4.75764 4.20928 8.11959 2 11.9996 2C16.3552 2 20.058 4.78413 21.4303 8.66675C21.6144 9.18747 21.3414 9.75879 20.8207 9.94284C20.3 10.1269 19.7287 9.85396 19.5446 9.33325C18.4459 6.22472 15.4813 4 11.9996 4C9.03957 4 6.45326 5.60799 5.06955 8H8.09957C8.65186 8 9.09957 8.44772 9.09957 9C9.09957 9.55228 8.65186 10 8.09957 10H2.09961C1.54732 10 1.09961 9.55228 1.09961 9V3C1.09961 2.44772 1.54732 2 2.09961 2Z" fill="#424551"></path>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.17664 14.0572C3.69736 13.8731 4.26868 14.146 4.45273 14.6668C5.55144 17.7753 8.51608 20 11.9978 20C14.9578 20 17.5441 18.392 18.9278 16H15.8978C15.3455 16 14.8978 15.5523 14.8978 15C14.8978 14.4477 15.3455 14 15.8978 14H21.8977C22.45 14 22.8977 14.4477 22.8977 15V21C22.8977 21.5523 22.45 22 21.8977 22C21.3455 22 20.8977 21.5523 20.8977 21V16.5637C19.2397 19.7907 15.8778 22 11.9978 22C7.64215 22 3.93936 19.2159 2.56705 15.3332C2.383 14.8125 2.65593 14.2412 3.17664 14.0572Z" fill="#424551"></path>
        </svg><span>Load more</span>
    </div>
</div>