<?php 
$freeseo = get_field('freeseo', 2);
$title = $freeseo['title'];
$image = $freeseo['image'];
$form = $freeseo['form'];
?>
<section class="freeseo">
    <div class="container">
        <div class="freeseo__wrap">
            <div class="freeseo__img"><img src="<?php echo $image; ?>" alt=""></div>
            <div class="freeseo__form">
                <h2 class="freeseo__title"><?php echo $title; ?></h2>
                <div class="form">
                    <?php echo do_shortcode($form); ?>
                </div>
            </div>
        </div>
    </div>
</section>