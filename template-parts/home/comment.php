<?php
$comment = get_field('comment');
$title = $comment['title'];
$items = $comment['items'];
?>
<section class="comment">
    <h2 class="comment__title title"><?php echo $title; ?></h2>
    <div class="comment__wrap">
        <?php foreach ($items as $item) : ?>
            <?php
            $text= $item['text'];
            $icon = $item['icon'];
            $title = $item['title'];
            $subtitle = $item['title_copy'];
            ?>
            <div class="comment__item">
                <div class="comment__text">
                <?php echo $text; ?>
                </div>
                <div class="comment__profile">
                    <div class="comment__avatar"><img src="<?php echo $icon; ?>" alt=""></div>
                    <div class="comment__description">
                        <h3 class="comment__name"><?php echo $title ?></h3>
                        <p class="comment__status"><?php echo $subtitle; ?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
    <div class="comment__arrows">
        <div class="comment__arrow comment__arrow--prev">
            <svg width="18" height="12" viewbox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M6.20711 11.2071C5.81658 11.5976 5.18342 11.5976 4.79289 11.2071L0.292892 6.70711C-0.0976315 6.31658 -0.0976315 5.68342 0.292892 5.29289L4.79289 0.792893C5.18342 0.402369 5.81658 0.402369 6.20711 0.792893C6.59763 1.18342 6.59763 1.81658 6.20711 2.20711L3.41421 5L17 5C17.5523 5 18 5.44772 18 6C18 6.55228 17.5523 7 17 7L3.41421 7L6.20711 9.79289C6.59763 10.1834 6.59763 10.8166 6.20711 11.2071Z"></path>
            </svg>
        </div>
        <div class="comment__arrow comment__arrow--next">
            <svg width="18" height="12" viewbox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7929 0.792893C12.1834 0.402369 12.8166 0.402369 13.2071 0.792893L17.7071 5.29289C18.0976 5.68342 18.0976 6.31658 17.7071 6.70711L13.2071 11.2071C12.8166 11.5976 12.1834 11.5976 11.7929 11.2071C11.4024 10.8166 11.4024 10.1834 11.7929 9.79289L14.5858 7H1C0.447715 7 0 6.55228 0 6C0 5.44772 0.447715 5 1 5H14.5858L11.7929 2.20711C11.4024 1.81658 11.4024 1.18342 11.7929 0.792893Z"></path>
            </svg>
        </div>
    </div>
</section>