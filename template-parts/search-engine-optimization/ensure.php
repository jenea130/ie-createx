<?php 
$ensure = get_field('ensure');
$title = $ensure['title'];
$text = $ensure['text'];
$image = $ensure['image'];
?>
<div class="ensure">
    <div class="ensure__wrap">
        <div class="ensure__img"> <img src="<?php echo $image; ?>" alt=""></div>
        <div class="ensure__content">
            <h2 class="ensure__title title"><?php echo $title; ?></h2>
            <div class="ensure__text text"><?php echo $text; ?></div>
        </div>
    </div>
</div>