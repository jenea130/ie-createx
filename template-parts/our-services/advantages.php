<?php
$advantages = get_field('advantages');
$items = $advantages['items'];
?>

<div class="container">
    <div class="advantages">
        <?php foreach ($items as $item) : ?>
            <?php
            $title = $item['title'];
            $text = $item['text'];
            $button_text_1 = $item['button_text_1'];
            $button_text_2 = $item['button_text_2'];
            $image = $item['image'];
            ?>
            <div class="advantages__item item-advantages">
                <div class="item-advantages__wrap">
                    <div class="item-advantages__content">
                        <h2 class="item-advantages__title"><?php echo $title; ?></h2>
                        <div class="item-advantages__text"><?php echo $text; ?></div>
                        <footer class="item-advantages__footer"><a class="btn btn--border btn--small" href="#"><?php echo $button_text_1; ?></a><a class="btn btn--small" href="#"><?php echo $button_text_2; ?></a></footer>
                    </div>
                    <div class="item-advantages__img"><img src="<?php echo $image; ?>" alt=""></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>