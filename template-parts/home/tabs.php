<?php
$tabs = get_field('tabs', 2);
$title = $tabs['title'];
$items = $tabs['items'];
?>
<section class="tabs">
    <h2 class="tabs__title title">Our services</h2>
    <header class="tabs__header">
        <?php foreach ($items as $key => $item) : ?>
            <?php
            $label = $item['label'];
            ?>
            <div class="tabs__item <?php echo $key === 0 ? 'active' : ''; ?>" data-target="tab-<?php echo $key; ?>"><?php echo $label; ?></div>
        <?php endforeach; ?>
    </header>
    <div class="tabs__body">
        <?php foreach ($items as $key => $item) : ?>
            <?php
            $title = $item['title'];
            $image = $item['image'];
            $btn_text_1 = $item['btn_text_1'];
            $btn_text_2 = $item['btn_text_2'];
            $list = $item['list'];
            ?>
            <div class="tabs__wrap <?php echo $key === 0 ? 'active' : ''; ?>" id="<?php echo $key; ?>">
                <div class="tabs__content">
                    <h3 class="tabs__subtitle"><?php echo $title; ?></h3>
                    <ul class="tabs__list">
                        <?php foreach ($list as $item) : ?>
                            <?php
                            $title = $item['title'];
                            ?>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                                </svg>
                                <span><?php echo $title; ?></span>
                            </li>
                        <?php endforeach; ?>
                    </ul>
                    <footer class="tabs__footer">
                        <a class="btn btn--border btn--small" href="our-services.html"><?php echo $btn_text_1; ?></a>
                        <a class="btn btn--small" href="search-engine-optimization.html"><?php echo $btn_text_2; ?></a>
                    </footer>
                </div>
                <div class="tabs__img"><img src="<?php echo $image; ?>" alt=""></div>
            </div>
        <?php endforeach; ?>
    </div>
</section>