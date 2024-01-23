<?php
$benefits = get_field('benefits');
$title = $benefits['title'];
$image = $benefits['image'];
$items = $benefits['items'];
$items2 = $benefits['items2'];
?>
<section class="benefits">
    <h2 class="benefits__title title"><?php echo $title; ?></h2>
    <div class="benefits__wrap">
        <div class="benefits__items-1">
            <?php foreach ($items as $item) : ?>
                <?php
                $icon = $item['icon'];
                $title = $item['title'];
                $text = $item['text'];
                ?>
                <div class="benefits__item">
                    <div class="benefits__logo"><img src="<?php echo $icon; ?>" alt=""></div>
                    <div class="benefits__subtitle"><?php echo $title; ?></div>
                    <div class="benefits__text">
                        <?php echo $text; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
        <div class="benefits__img"><img src="<?php echo $image; ?>" alt=""></div>
        <div class="benefits__items-2">
            <?php foreach ($items2 as $item) : ?>
                <?php
                $icon = $item['icon'];
                $title = $item['title'];
                $text = $item['text'];
                ?>
                <div class="benefits__item">
                    <div class="benefits__logo"><img src="<?php echo $icon; ?>" alt=""></div>
                    <div class="benefits__subtitle"><?php echo $title; ?></div>
                    <div class="benefits__text">
                        <?php echo $text; ?>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>