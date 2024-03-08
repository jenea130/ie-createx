<?php
$seo_agency = get_field('seo_agency');
$title = $seo_agency['title'];
$text = $seo_agency['text'];
$gallery = $seo_agency['gallery'];
?>
<div class="seo-agency">
    <div class="seo-agency__wrap">

        <div class="seo-agency__column1">
            <img src="<?php echo $gallery[0]; ?>" alt="">
            <img src="<?php echo $gallery[1]; ?>" alt="">
        </div>
        <div class="seo-agency__column2">
            <img src="<?php echo $gallery[2]; ?>" alt="">
        </div>
        <div class="seo-agency__column3">
            <img src="<?php echo $gallery[3]; ?>" alt="">
        </div>
    </div>
    <div class="seo-agency__footer">
        <h3 class="seo-agency__subtitle subtitle"><?php echo $title; ?></h3>
        <div class="seo-agency__text text"><?php echo $text; ?></div>
    </div>
</div>