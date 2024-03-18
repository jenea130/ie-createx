<?php
$footer_top = get_field('footer_top', 'option');
$text = $footer_top['text'];
$socials = $footer_top['socials'];
$title_1 = $footer_top['title_1'];
$title_2 = $footer_top['title_2'];
$title_3 = $footer_top['title_3'];
$title_4 = $footer_top['title_4'];
$phone = $footer_top['phone'];
$email = $footer_top['email'];
$news_letter = $footer_top['news_letter'];

?>
<div class="footer-top">
    <div class="container">
        <div class="footer-top__wrap">
            <div class="footer-top__item">
                <div class="footer-top__logo"><?php echo get_custom_logo(); ?></div>
                <div class="footer-top__text">
                    <?php echo $text; ?>
                </div>
                <ul class="footer-top__social">
                    <?php foreach ($socials as $item) : ?>
                        <?php
                        $image = $item['image'];
                        $url = $item['url'];
                        ?>
                        <li><a href="<?php echo $url; ?>" target="_blank"><img src="<?php echo $image; ?>" alt=""></a></li>
                    <?php endforeach; ?>
                </ul>
            </div>
            <div class="footer-top__item">
                <h3 class="footer-top__title"><?php echo $title_1; ?></h3>
                <?php wp_nav_menu([
                    'theme_location'  => 'company',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'footer-top__list',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ]); ?>
            </div>
            <div class="footer-top__item">
                <h3 class="footer-top__title"><?php echo $title_2; ?></h3>
                <?php wp_nav_menu([
                    'theme_location'  => 'services',
                    'menu'            => '',
                    'container'       => '',
                    'container_class' => '',
                    'container_id'    => '',
                    'menu_class'      => 'footer-top__list',
                    'menu_id'         => '',
                    'echo'            => true,
                    'fallback_cb'     => 'wp_page_menu',
                    'before'          => '',
                    'after'           => '',
                    'link_before'     => '',
                    'link_after'      => '',
                    'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                    'depth'           => 0,
                    'walker'          => '',
                ]); ?>
            </div>
            <div class="footer-top__item">
                <h3 class="footer-top__title"><?php echo $title_3; ?></h3>
                <ul class="footer-top__list">
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.66634 1.94857C5.11406 1.94857 4.66634 2.39628 4.66634 2.94857V13.0527C4.66634 13.605 5.11406 14.0527 5.66634 14.0527H10.333C10.8853 14.0527 11.333 13.605 11.333 13.0527V2.94857C11.333 2.39628 10.8853 1.94857 10.333 1.94857H10.2774L10.115 2.3382C10.0115 2.58661 9.76879 2.74842 9.49967 2.74842H6.49967C6.23056 2.74842 5.98783 2.58661 5.88431 2.3382L5.72193 1.94857H5.66634ZM3.33301 2.94857C3.33301 1.6599 4.37768 0.615234 5.66634 0.615234H10.333C11.6217 0.615234 12.6663 1.6599 12.6663 2.94857V13.0527C12.6663 14.3414 11.6217 15.3861 10.333 15.3861H5.66634C4.37768 15.3861 3.33301 14.3414 3.33301 13.0527V2.94857Z"></path>
                        </svg>
                        <a href="tel:4055550128" target="_blank">(405) 555-0128</a>
                    </li>
                    <li>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M15.1663 11.9993V4.66602C15.1663 3.56145 14.2709 2.66602 13.1663 2.66602L2.83301 2.66603C1.72844 2.66603 0.833008 3.56146 0.833008 4.66603V11.9993C0.833008 13.1039 1.72844 13.9993 2.83301 13.9993L13.1663 13.9993C14.2709 13.9993 15.1663 13.1039 15.1663 11.9993ZM13.833 6.17232V11.9993C13.833 12.3675 13.5345 12.666 13.1663 12.666L2.83301 12.666C2.46482 12.666 2.16634 12.3675 2.16634 11.9993L2.16634 6.17223L6.87512 9.3742C7.55384 9.83573 8.44564 9.83573 9.12436 9.3742L13.833 6.17232ZM13.8254 4.56509C13.7768 4.24479 13.5002 3.99935 13.1663 3.99935L2.83301 3.99936C2.49916 3.99936 2.22262 4.24476 2.17394 4.56501L7.62487 8.27164C7.85111 8.42548 8.14837 8.42548 8.37461 8.27164L13.8254 4.56509Z"></path>
                        </svg>
                        <a href="mailto:hello@createx.com" target="_blank">hello@createx.com</a>
                    </li>
                </ul>
            </div>
            <div class="footer-top__item">
                <h3 class="footer-top__title"><?php echo $title_4; ?></h3>
                <div class="footer-top__form">
                    <input type="text" placeholder="<?php echo $news_letter['placeholder']; ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/footer/footer-arrow.svg" alt="">
                </div>
                <div class="footer-top__privacy"><?php echo $news_letter['text']; ?></div>
            </div>
        </div>
    </div>
</div>