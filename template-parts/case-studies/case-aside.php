<!-- TODO: add before for item -->
<?php
$single_sidebar = get_field('single_sidebar', 23);
$text = $single_sidebar['text'];
?>
<div class="case-aside">
  <?php echo $text; ?>
</div>