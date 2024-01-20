<?php
$home_intro = get_field('home_intro');
$title = $home_intro['title'];
$button_text = $home_intro['button_text'];
$video_text = $home_intro['video_text'];
$image = $home_intro['image'];
$items = $home_intro['items'];
?>
<section class="home-intro"><img class="home-intro__img" src="<?php echo $image; ?>" alt>
    <div class="container">
        <h1 class="home-intro__title"><?php echo $title; ?></h1>
        <div class="home-intro__actions"><a class="btn btn--light" href="search-engine-optimization.html"><?php echo $button_text; ?></a>
            <div class="home-intro__play">
                <svg width="84" height="84" viewBox="0 0 84 84" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle opacity="0.12" cx="42" cy="42" r="42" fill="#7772F1"></circle>
                    <circle cx="42" cy="42" r="26" fill="#7772F1"></circle>
                    <path d="M48.5 41.134C49.1667 41.5189 49.1667 42.4811 48.5 42.866L39.5 48.0622C38.8333 48.4471 38 47.966 38 47.1962L38 36.8038C38 36.034 38.8333 35.5529 39.5 35.9378L48.5 41.134Z" fill="white"></path>
                </svg><span><?php echo $video_text; ?></span>
            </div>
        </div>
        <ul class="intro-list">
            <?php foreach ($items as $item) : ?>
                <?php
                $title = $item['title'];
                $icon = $item['icon'];
                ?>
                <li>
                    <?php echo $icon; ?>
                    <span><?php echo $title; ?></span>
                </li>
            <?php endforeach; ?>
        </ul>
    </div>
</section>