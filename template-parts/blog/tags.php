<?php

if (is_single()) :
  $terms = get_the_tags(get_the_ID());
else :
  $terms = get_tags();
endif;
?>
<div class="tags">
  <h2 class="tags__title title title--small">Tags</h2>
  <ul class="category-list">
    <?php foreach ($terms as $term) : ?>
      <?php
      $name = $term->name;
      $slug = $term->slug;
      $tag_id = $term->term_id;
      ?>
      <li>
        <a href="<?php echo get_the_permalink(27); ?>?tag_id=<?php echo $tag_id; ?>">
          <?php echo "#" . $name; ?>
        </a>
      </li>
    <?php endforeach; ?>
  </ul>
</div>