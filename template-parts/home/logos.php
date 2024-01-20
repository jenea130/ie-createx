<?php
$logos = get_field('logos');
$gallery = $logos['gallery'];
?>
<section class="logos">
    <?php foreach ($gallery as $item) : ?>

        <div class="logos__item"><img src="<?php echo $item; ?>" alt=""></div>
    <?php endforeach; ?>
</section>