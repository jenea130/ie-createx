<?php
$ask = get_field('ask', 2);
$title = $ask['title'];
$image = $ask['image'];
$button_text = $ask['button_text'];
$items = $ask['items'];
$items = is_front_page() ? array_slice($items, 3) : $items;
?>
<section class="ask">
    <div class="ask__wrap">
        <div class="ask__content">
            <h2 class="ask__title"><?php echo $title; ?></h2>
            <div class="accordion">
                <?php foreach ($items as $key => $item) : ?>
                    <?php
                    $title = $item['title'];
                    $text = $item['text'];
                    ?>
                    <div class="accordion__item <?php echo $key === 0 ? 'active' : ''; ?>">
                        <div class="accordion__title"><?php echo $title; ?></div>
                        <div class="accordion__text">
                            <?php echo $text; ?>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            <?php if (is_front_page()) : ?>
                <a class="btn" href="careers-at-createx-agency.html"><?php echo $button_text; ?></a>
            <?php endif; ?>
        </div>
        <div class="ask__img">
            <img src="<?php echo $image; ?>" alt="">
        </div>
    </div>
</section>