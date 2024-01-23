<?php
$plans = get_field('plans');
$title = $plans['title'];
$items = $plans['items'];
?>
<section class="plans">
    <h2 class="plans__title title"><?php echo $title; ?></h2>
    <header class="plans__header">
        <?php foreach ($items as $key => $item) : ?>
            <?php
            $label = $item['label'];
            ?>
            <button class="plans__btn <?php echo $key === 0 ? 'active' : ''; ?>" data-target="tab-<?php echo $key; ?>"><?php echo $label; ?></button>
        <?php endforeach; ?>
    </header>
    <div class="plans__body">
        <?php foreach ($items as $key => $item) : ?>
            <?php
            $cards = $item['cards'];
            ?>
            <div class="plans__wrap <?php echo $key === 0 ? 'active' : ''; ?>" id="<?php echo $key + 1; ?>">
                <?php foreach ($cards as $card) : ?>
                    <?php
                    $title = $card['title'];
                    $price = $card['price'];
                    $text = $card['text'];
                    ?>
                    <div class="plans__item">
                        <div class="card">
                            <h3 class="card__title"><?php echo $title; ?></h3>
                            <div class="card__price"><?php echo $price; ?></div>
                            <div class="card__list">
                                <?php echo $text; ?>
                            </div>
                            <a class="card__btn btn btn--small btn--border" href="#">Choose plan</a>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
        <?php endforeach; ?>
    </div>
</section>