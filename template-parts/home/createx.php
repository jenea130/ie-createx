<?php 
$createx = get_field('createx');
$title = $createx['title'];
$text = $createx['text'];
$button_text = $createx['button_text'];
$image = $createx['image'];
?>
<section class="createx">
    <div class="createx__wrap">
        <div class="createx__img"><img src="<?php echo $image; ?>" alt=""></div>
        <div class="createx__content">
            <h2 class="createx__title title"><?php echo $title; ?></h2>
            <div class="createx__text">
            <?php echo $text; ?>
            </div>
            <a class="btn btn--small" href="<?php echo get_the_permalink(25); ?>"><?php echo $button_text; ?></a>
        </div>
    </div>
</section>