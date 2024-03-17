<?php
$ask_careers = get_field('ask_careers');
$button_text = $ask_careers['button_text'];
$items = $ask_careers['items'];
?>
<section class="ask-careers">
  <div class="accordion">
    <?php foreach ($items as $key => $item) : ?>
      <?php
      $title = $item['title'];
      $text = $item['text'];
      ?>
      <div class="accordion__item <?php echo $key === 0 ? 'active' : ''; ?>">
        <div class="accordion__wrap">
          <div class="accordion__content">
            <h3 class="accordion__title">
              <span><?php echo $title; ?></span>
              <a class="btn btn--border" href="#"><?php echo $button_text; ?></a>
            </h3>
            <div class="accordion__text">
              <?php echo $text; ?>
            </div>
          </div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</section>