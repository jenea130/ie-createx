<?php
$tree = get_field('tree');
$title = $tree['title'];
$items = $tree['items'];
?>

<div class="tree">
    <h2 class="tree__title title">That’s how it works</h2>
    <div class="tree__body">
        <?php foreach ($items as $item) : ?>
            <?php
            $title = $item['title'];
            $text = $item['text'];
            ?>
            <div class="tree__row">
                <div class="tree__column"></div>
                <div class="tree__column">
                    <div class="tree__label">Step 1</div>
                    <div class="tree__subtitle"><?php echo $title; ?></div>
                    <div class="tree__text text"><?php echo $text; ?></div>
                </div>
            </div>

        <?php endforeach; ?>
    </div>
</div>