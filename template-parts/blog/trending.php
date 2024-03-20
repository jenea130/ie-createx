<?php
$aside_blog = new WP_Query([
  'post_type' => 'post',
  'posts_per_page' => 3,
  'meta_query' => [[
    'key' => 'for_loop_featured',
    'value' => true,
  ]],
]);
?>
<div class="trending">
  <h2 class="trending__title title title--small">Now Trending</h2>

  <?php if ($aside_blog->have_posts()) : ?>
    <?php while ($aside_blog->have_posts()) : ?>
      <?php $aside_blog->the_post(); ?>
      <?php
      $title = get_the_title();
      $image = get_the_post_thumbnail_url();
      $permalink = get_the_permalink();
      $date = get_the_date('F j, Y', get_the_ID());
      ?>
      <div class="trending__item">
        <div class="post-small">
          <div class="post-small__img">
            <img src="<?php echo $image; ?>" alt="">
          </div>
          <div class="post-small__content">
            <div class="post-small__info">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                <path d="M8.66602 4.83366C8.66602 4.46547 8.36754 4.16699 7.99935 4.16699C7.63116 4.16699 7.33268 4.46547 7.33268 4.83366V8.50033C7.33268 8.67714 7.40292 8.84671 7.52794 8.97173L9.52794 10.9717C9.78829 11.2321 10.2104 11.2321 10.4708 10.9717C10.7311 10.7114 10.7311 10.2893 10.4708 10.0289L8.66602 8.22418V4.83366Z" fill="#787A80" />
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99935 1.16699C3.94926 1.16699 0.666016 4.45024 0.666016 8.50033C0.666016 12.5504 3.94926 15.8337 7.99935 15.8337C12.0494 15.8337 15.3327 12.5504 15.3327 8.50033C15.3327 4.45024 12.0494 1.16699 7.99935 1.16699ZM1.99935 8.50033C1.99935 5.18662 4.68564 2.50033 7.99935 2.50033C11.3131 2.50033 13.9993 5.18662 13.9993 8.50033C13.9993 11.814 11.3131 14.5003 7.99935 14.5003C4.68564 14.5003 1.99935 11.814 1.99935 8.50033Z" fill="#787A80" />
              </svg>
              <span><?php echo $date; ?></span>
            </div>
            <h3 class="post-small__subtitle"><?php echo $title; ?></h3>
            <!-- <h3 class="post-small__subtitle">5 Surprising Ways to Combine Content Marketing with PPC</h3> -->
          </div>
        </div>
      </div>
    <?php endwhile; ?>
    <?php wp_reset_postdata(); ?>
  <?php endif; ?>
</div>