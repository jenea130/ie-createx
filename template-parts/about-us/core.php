<?php
$core = get_field('core');
$title = $core['title'];
$items = $core['items'];
?>
<div class="core">
    <div class="core__wrap">
        <h2 class="core__title title"><?php echo $title; ?></h2>
        <div class="core__items">
            <?php foreach ($items as $item) : ?>
                <?php
                $icon = $item['icon'];
                $title = $item['title'];
                $text = $item['text'];
                ?>
                <div class="core__item">
                    <div class="core__img">
                    <?php echo $icon; ?>
                    </div>
                    <h3 class="core__subtitle"><?php echo $title; ?></h3>
                    <div class="core__text text"><?php echo $text; ?></div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>