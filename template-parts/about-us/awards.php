<?php 
$awards = get_field('awards');
$image = $awards['image'];
$title = $awards['title'];
$items = $awards['items'];
?>
<div class="awards">
    <div class="awards__wrap">
        <div class="awards__img">
        <?php echo $image; ?>
        </div>
        <div class="awards__content">
            <h2 class="awards__title title"><?php echo $title; ?></h2>
            <div class="top-features">
                <?php foreach ($items as $item) : ?>
                    <?php
                    $icon = $item['icon'];
                    $title = $item['title'];
                    ?>
                <div class="top-features__item">
                    <div class="top-features__icon">
                        <img src="<?php echo $icon; ?>" alt="">
                    </div>
                    <div class="top-features__label"><?php echo $title; ?></div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>