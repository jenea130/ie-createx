<?php
$rating = get_field('rating');
$items = $rating['items'];
?>
<section class="rating">
    <div class="rating__wrap">
        <?php foreach ($items as $item) : ?>
            <?php
            $icon = $item['icon'];
            $rate = $item['rate'];
            $title = $item['title'];
            ?>

            <div class="rating__item">
                <div class="rating__header">
                    <img src="<?php echo $icon; ?>" alt="">
                    <div class="rating__number"><?php echo $rate; ?></div>
                </div>
                <div class="rating__title"><?php echo $title; ?></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>