<?php
$agency = get_field('agency');
$text = $agency['text'];
$items = $agency['items'];
?>
<section class="agency">
    <div class="agency__wrap">
        <div class="agency__text">
            <?php echo $text; ?>
        </div>
        <div class="agency__items">
            <div class="top-features">
                <?php foreach ($items as $item) : ?>
                    <?php
                    $icon = $item['icon'];
                    $title = $item['title'];
                    
                    ?>

                    <div class="top-features__item">
                        <div class="top-features__icon"><img src="<?php echo $icon; ?>" alt=""></div>
                        <div class="top-features__label"><?php echo $title; ?></div>
                    </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</section>