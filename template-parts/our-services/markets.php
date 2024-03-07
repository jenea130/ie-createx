<?php
$markets = get_field('markets');
$title = $markets['title'];
$items = $markets['items'];
?>

<div class="markets">
    <h2 class="markets__title title"><?php echo $title ?></h2>
    <div class="markets__wrap">
        <?php foreach ($items as $item) : ?>
            <?php
            $icon = $item['icon'];
            $title = $item['title'];
            $text = $item['text'];
            ?>
            <div class="markets__item">
                <div class="markets__img">
                    <?php echo $icon; ?>
                </div>
                <h3 class="markets__subtitle"><?php echo $title; ?></h3>
                <div class="markets__text"><?php echo $text; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</div>