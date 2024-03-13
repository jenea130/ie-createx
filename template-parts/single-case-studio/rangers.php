<?php
$rangers = get_field('rangers');
$items = $rangers['items'];
?>
<div class="ranges">
  <div class="ranges__wrap">
    <?php foreach ($items as $item) : ?>
      <?php 
       $color = $item['color'];
       $length = $item['lenght'];
       $text = $item['text'];
        ?>
      <div class="ranges__block">
        <div class="ranges__range">
          <svg class="ranges__circle" viewBox="0 0 36 36">
            <?php echo $color; ?>
            <path class="ranges__circle-bg" stroke="<?php echo $color; ?>" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
            <path class="ranges__circle-base" stroke-dasharray="<?php echo $length; ?> 100" stroke="<?php echo $color; ?>" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
          </svg>
        </div>
        <div class="ranges__wrapper">
          <div class="ranges__number"><?php echo $length; ?>%</div>
          <div class="ranges__description"><?php echo $text; ?></div>
        </div>
      </div>
    <?php endforeach; ?>
  </div>
</div>