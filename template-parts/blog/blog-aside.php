<?php
$terms = get_tags();
?>
<div class="page-blog__aside">
  <?php echo get_template_part('template-parts/blog/blog-categories'); ?>
  <?php echo get_template_part('template-parts/blog/trending'); ?>
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
</div>