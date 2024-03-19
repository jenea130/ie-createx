<?php
$page_blog = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 6,
  // 'offset' => 2,
  'meta_query' => [[
    'key' => 'for_loop_featured',
    'value' => true,
  ]],

]);
?>
<div class="page-blog__main">
  <div class="main-blog">
    <div class="main-blog__wrap">

      <?php if ($page_blog->have_posts()) : ?>
        <?php while ($page_blog->have_posts()) : ?>
          <?php $page_blog->the_post(); ?>
          <?php
          $title = get_the_title();
          $image = get_the_post_thumbnail_url();
          $permalink = get_the_permalink();
          $excerpt = get_the_excerpt();
          $category = get_the_category()[0]->name;
          $date = get_the_date('F j, Y', get_the_ID());
          $author = get_the_author();
          // $for_loop = get_field('for_loop');
          // $featured = $for_loop['featured'];
          ?>
          <div class="main-blog__item">
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
                    <img src="assets/img/icons/clock.svg" alt="" width="16">
                    <span><?php echo $date; ?></span>
                  </li>
                  <li>
                    <img src="assets/img/icons/user.svg" alt="" width="16">
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
</div>