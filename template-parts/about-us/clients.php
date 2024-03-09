<?php
$clients = get_field('clients');
$title = $clients['title'];
$gallery = $clients['gallery'];
?>
<div class="clients">
    <h2 class="clients__title title"><?php echo $title; ?></h2>
    <div class="clients__wrap">
        <?php foreach ($gallery as $item) : ?>
            <div class="clients__item">
                <img src="<?php echo $item; ?>" alt="">
            </div>
        <?php endforeach; ?>
    </div>
</div>