<?php
$news = get_field('news', 2);
$title = $news['title'];
$text = $news['text'];
$button_text = $news['button_text'];
$page_blog_id = 27;
?>
<section class="news">
    <div class="news__wrap">
        <div class="news__item">
            <div class="news__title title"><?php echo $title; ?></div>
            <div class="news__text"><?php echo $text; ?></div>
            <a class="news__btn btn" href="<?php echo get_the_permalink($page_blog_id); ?>"><?php echo $button_text; ?></a>
        </div>
        <?php
        $posts = new WP_Query([
            'post_type' => 'post',
            'posts_per_page' => 2
        ]);
        ?>
        <?php if ($posts->have_posts()) : ?>
            <?php while ($posts->have_posts()) : ?>
                <?php $posts->the_post(); ?>
                <?php
                $title = get_the_title();
                $excerpt = get_the_excerpt();
                $category = get_the_category()[0]->name;
                $date = get_the_date('F j, Y', get_the_ID());
                $author = get_the_author();
                $permalink = get_the_permalink();
                $image = get_the_post_thumbnail_url();
                ?>
                <div class="news__item">
                    <div class="news__img">
                        <img src="<?php echo $image; ?>" alt="">
                    </div>
                    <div class="news__string">
                        <span><?php echo $category; ?></span>
                        <span>|</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewbox="0 0 16 17" fill="none">
                            <path d="M8.66699 4.83268C8.66699 4.46449 8.36851 4.16602 8.00033 4.16602C7.63213 4.16602 7.33366 4.46449 7.33366 4.83268V8.49935C7.33366 8.67616 7.4039 8.84573 7.52892 8.97075L9.52892 10.9708C9.78927 11.2311 10.2114 11.2311 10.4717 10.9708C10.7321 10.7104 10.7321 10.2883 10.4717 10.0279L8.66699 8.22321V4.83268Z" fill="#787A80"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8.00033 1.16602C3.95024 1.16602 0.666992 4.44926 0.666992 8.49935C0.666992 12.5494 3.95024 15.8327 8.00033 15.8327C12.0504 15.8327 15.3337 12.5494 15.3337 8.49935C15.3337 4.44926 12.0504 1.16602 8.00033 1.16602ZM2.00033 8.49935C2.00033 5.18564 4.68662 2.49935 8.00033 2.49935C11.314 2.49935 14.0003 5.18564 14.0003 8.49935C14.0003 11.8131 11.314 14.4993 8.00033 14.4993C4.68662 14.4993 2.00033 11.8131 2.00033 8.49935Z" fill="#787A80"></path>
                        </svg>
                        <span><?php echo $date; ?></span>
                        <span>|</span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewbox="0 0 14 15" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00055 1.66732C5.71188 1.66732 4.66721 2.71199 4.66721 4.00065C4.66721 5.28932 5.71188 6.33398 7.00055 6.33398C8.28921 6.33398 9.33388 5.28932 9.33388 4.00065C9.33388 2.71199 8.28921 1.66732 7.00055 1.66732ZM3.33388 4.00065C3.33388 1.97561 4.9755 0.333984 7.00055 0.333984C9.02559 0.333984 10.6672 1.97561 10.6672 4.00065C10.6672 6.0257 9.02559 7.66732 7.00055 7.66732C4.9755 7.66732 3.33388 6.0257 3.33388 4.00065Z" fill="#787A80"></path>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M3.06992 9.66732C2.60771 9.66732 2.24643 9.89238 2.09979 10.2157C1.89681 10.6633 1.71301 11.1961 1.66964 11.7014C1.65025 11.9273 1.74444 12.0938 1.87423 12.1744C2.56033 12.6006 4.15014 13.334 7.00055 13.334C9.85095 13.334 11.4408 12.6006 12.1269 12.1744C12.2567 12.0938 12.3508 11.9273 12.3315 11.7014C12.2881 11.1961 12.1043 10.6633 11.9013 10.2157C11.7547 9.89238 11.3934 9.66732 10.9312 9.66732H3.06992ZM0.885499 9.66502C1.2908 8.77136 2.19582 8.33398 3.06992 8.33398H10.9312C11.8053 8.33398 12.7103 8.77136 13.1156 9.66502C13.3484 10.1783 13.5982 10.8683 13.6599 11.5874C13.7161 12.2422 13.4439 12.9259 12.8304 13.307C11.9281 13.8676 10.0936 14.6673 7.00055 14.6673C3.90748 14.6673 2.07301 13.8676 1.17066 13.307C0.557149 12.9259 0.284988 12.2422 0.341191 11.5874C0.40291 10.8683 0.652708 10.1783 0.885499 9.66502Z" fill="#787A80"></path>
                        </svg>
                        <span>By <?php echo $author; ?></span>
                    </div>
                    <h3 class="news__label"><?php echo $title; ?></h3>
                    <div class="news__desc">
                        <?php echo $excerpt; ?>
                    </div>
                    <a class="news__link" href="<?php echo $permalink; ?>">Read more</a>
                </div>
            <?php endwhile; ?>
            <?php wp_reset_postdata(); ?>
        <?php endif; ?>
    </div>
</section>