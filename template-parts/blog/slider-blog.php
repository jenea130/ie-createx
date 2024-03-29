<?php
$slider_blog = get_field('slider_blog', 27);
$title = $slider_blog['title'];
?>
<div class="slider-blog">
  <h2 class="slider-blog__title title"><?php echo $title; ?></h2>
  <div class="slider-blog__header">
    <div class="slider-blog__arrow slider-blog__arrow--prev">
      <svg width="18" height="12" viewbox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M6.20711 11.2071C5.81658 11.5976 5.18342 11.5976 4.79289 11.2071L0.292892 6.70711C-0.0976315 6.31658 -0.0976315 5.68342 0.292892 5.29289L4.79289 0.792893C5.18342 0.402369 5.81658 0.402369 6.20711 0.792893C6.59763 1.18342 6.59763 1.81658 6.20711 2.20711L3.41421 5L17 5C17.5523 5 18 5.44772 18 6C18 6.55228 17.5523 7 17 7L3.41421 7L6.20711 9.79289C6.59763 10.1834 6.59763 10.8166 6.20711 11.2071Z"></path>
      </svg>
    </div>
    <div class="slider-blog__arrow slider-blog__arrow--next">
      <svg width="18" height="12" viewbox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7929 0.792893C12.1834 0.402369 12.8166 0.402369 13.2071 0.792893L17.7071 5.29289C18.0976 5.68342 18.0976 6.31658 17.7071 6.70711L13.2071 11.2071C12.8166 11.5976 12.1834 11.5976 11.7929 11.2071C11.4024 10.8166 11.4024 10.1834 11.7929 9.79289L14.5858 7H1C0.447715 7 0 6.55228 0 6C0 5.44772 0.447715 5 1 5H14.5858L11.7929 2.20711C11.4024 1.81658 11.4024 1.18342 11.7929 0.792893Z"></path>
      </svg>
    </div>
  </div>
  <div class="slider-blog__wrap">
    <?php
    $slider_posts = new WP_Query([
      'post_type' => 'post',
      'posts_per_page' => -1,
    ]);
    ?>
    <?php if ($slider_posts->have_posts()) : ?>
      <?php while ($slider_posts->have_posts()) : ?>
        <?php $slider_posts->the_post(); ?>
        <?php
        $title = get_the_title();
        $image = get_the_post_thumbnail_url();
        $permalink = get_the_permalink();
        $excerpt = get_the_excerpt();
        $logo = get_field('logo');
        $items = get_field('items');


        $author = get_the_author();
        $category = get_the_category()[0]->name;
        $date = get_the_date('F j, Y', get_the_ID());
        ?>
        <div class="slider-blog__item">
          <div class="post">
            <div class="post__img">
              <img src="<?php echo $image; ?>" alt="">
            </div>
            <div class="post__content">
              <ul class="post__list">
                <li>
                  <span><?php echo $category; ?></span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                    <path d="M8.66602 4.83366C8.66602 4.46547 8.36754 4.16699 7.99935 4.16699C7.63116 4.16699 7.33268 4.46547 7.33268 4.83366V8.50033C7.33268 8.67714 7.40292 8.84671 7.52794 8.97173L9.52794 10.9717C9.78829 11.2321 10.2104 11.2321 10.4708 10.9717C10.7311 10.7114 10.7311 10.2893 10.4708 10.0289L8.66602 8.22418V4.83366Z" fill="#787A80" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99935 1.16699C3.94926 1.16699 0.666016 4.45024 0.666016 8.50033C0.666016 12.5504 3.94926 15.8337 7.99935 15.8337C12.0494 15.8337 15.3327 12.5504 15.3327 8.50033C15.3327 4.45024 12.0494 1.16699 7.99935 1.16699ZM1.99935 8.50033C1.99935 5.18662 4.68564 2.50033 7.99935 2.50033C11.3131 2.50033 13.9993 5.18662 13.9993 8.50033C13.9993 11.814 11.3131 14.5003 7.99935 14.5003C4.68564 14.5003 1.99935 11.814 1.99935 8.50033Z" fill="#787A80" />
                  </svg>
                  <span><?php echo $date; ?></span>
                </li>
                <li>
                  <svg xmlns="http://www.w3.org/2000/svg" width="14" height="15" viewBox="0 0 14 15" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M7.00055 1.66634C5.71188 1.66634 4.66721 2.71101 4.66721 3.99967C4.66721 5.28834 5.71188 6.33301 7.00055 6.33301C8.28921 6.33301 9.33388 5.28834 9.33388 3.99967C9.33388 2.71101 8.28921 1.66634 7.00055 1.66634ZM3.33388 3.99967C3.33388 1.97463 4.9755 0.333008 7.00055 0.333008C9.02559 0.333008 10.6672 1.97463 10.6672 3.99967C10.6672 6.02472 9.02559 7.66634 7.00055 7.66634C4.9755 7.66634 3.33388 6.02472 3.33388 3.99967Z" fill="#787A80" />
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.06992 9.66634C2.60771 9.66634 2.24643 9.8914 2.09979 10.2148C1.89681 10.6623 1.71301 11.1951 1.66964 11.7005C1.65025 11.9264 1.74444 12.0928 1.87423 12.1735C2.56033 12.5997 4.15014 13.333 7.00055 13.333C9.85095 13.333 11.4408 12.5997 12.1269 12.1735C12.2567 12.0928 12.3508 11.9264 12.3315 11.7005C12.2881 11.1951 12.1043 10.6623 11.9013 10.2148C11.7547 9.8914 11.3934 9.66634 10.9312 9.66634H3.06992ZM0.885499 9.66404C1.2908 8.77039 2.19582 8.33301 3.06992 8.33301H10.9312C11.8053 8.33301 12.7103 8.77039 13.1156 9.66404C13.3484 10.1773 13.5982 10.8673 13.6599 11.5864C13.7161 12.2413 13.4439 12.9249 12.8304 13.3061C11.9281 13.8666 10.0936 14.6663 7.00055 14.6663C3.90748 14.6663 2.07301 13.8666 1.17066 13.3061C0.557149 12.9249 0.284988 12.2413 0.341191 11.5864C0.40291 10.8673 0.652708 10.1773 0.885499 9.66404Z" fill="#787A80" />
                  </svg>
                  <span><?php echo $author; ?></span>
                </li>
              </ul>
              <h3 class="post__title"><?php echo $title; ?></h3>
              <div class="post__text"><?php echo $excerpt; ?></div>
              <a class="link" href="<?php echo $permalink; ?>">
                <span>Read more</span>
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
</div>