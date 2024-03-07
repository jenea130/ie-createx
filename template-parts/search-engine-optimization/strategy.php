<?php
$strategy = get_field('strategy');
$title = $strategy['title'];
$items = $strategy['items'];
?>
<section class="strategy">
    <h2 class="strategy__title title"><?php echo $title; ?></h2>
    <div class="strategy__wrap">
        <?php foreach ($items as $item) : ?>
            <?php
            $icon = $item['icon'];
            $title = $item['title'];
            $text = $item['text'];
            ?>
            <div class="strategy__item">
                <div class="strategy__img">
                    <?php echo $icon; ?>
                </div>
                <div class="strategy__subtitle"><?php echo $title; ?></div>
                <div class="strategy__text text text"><?php echo $text; ?></div>

            </div>
        <?php endforeach; ?>
    </div>
</section>