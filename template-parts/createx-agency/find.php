<?php
$find = get_field('find');
$title = $find['title'];
$text = $find['text'];
$form = $find['form'];
?>
<div class="find">
  <div class="container">
    <div class="find__wrap">
      <div class="find__content">
        <h2 class="find__title title"><?php echo $title; ?></h2>
        <div class="find__text"><?php echo $text; ?></div>
      </div>
      <div class="find__form">
        <div class="form form--light">
          <?php echo do_shortcode($form); ?>
        </div>
      </div>
    </div>
  </div>
</div>