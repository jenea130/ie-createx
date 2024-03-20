<?php
$categories = get_categories();
$all = 0;
foreach ($categories as $category) :
  $all = $all + $category->count;
endforeach;
?>
<div class="blog-categories">
  <h2 class="blog-categories__title title title--small">Blog Categories</h2>
  <ul class="blog-categories__list">
    <li>
      <a href="<?php echo get_the_permalink(27); ?>" class="blog-categories__subtitle">All</a>
      <span class="blog-categories__count"><?php echo $all; ?></span>
    </li>
    <?php foreach ($categories as $category) : ?>
      <?php
      $name = $category->name;
      $count = $category->count;
      $category_id = $category->term_id;
      ?>
      <li>
        <a href="<?php echo get_the_permalink(27); ?>?category_id=<?php echo $category_id; ?>" class="blog-categories__subtitle"><?php echo $name; ?></a>
        <span class="blog-categories__count"><?php echo $count; ?></span>
      </li>
    <?php endforeach; ?>
  </ul>
</div>