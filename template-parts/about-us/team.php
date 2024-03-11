<?php
$team = get_field('team');
$title = $team['title'];
$items = $team['items'];
$socials = $team['socials'];
?>
<div class="team">
    <h2 class="team__title title"><?php echo $title; ?></h2>
    <div class="team__wrap">
        <?php foreach ($items as $item) : ?>
            <?php
            $image = $item['image'];
            $title = $item['title'];
            $text = $item['text'];
            ?>
            <div class="team__item">
                <div class="team__img">
                    <img src="<?php echo $image; ?>" alt="">
                    <ul class="team__social">
                        <?php foreach ($socials as $item) : ?>
                            <?php
                            $icon = $item['icon'];
                            $url = $item['url'];
                            ?>
                        <li>
                            <a href="<?php echo $url; ?>">
                            <?php echo $icon; ?>
                            </a>
                        </li>
                        <?php endforeach; ?>
                    </ul>
                </div>
                <div class=" team__content">
                    <h3 class="team__subtitle"><?php echo $title; ?></h3>
                    <div class="team__text text text"><?php echo $text; ?></div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
</div>