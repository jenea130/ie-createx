<?php
$footer_bottom = get_field('footer_bottom', 'option');
$gallery = $footer_bottom['gallery'];
?>
<div class="footer-bottom">
    <div class="container">
        <div class="footer-bottom__wrap">
            <div class="footer-bottom__logos">
                <?php foreach ($gallery as $item) : ?>
                    <div class="footer-bottom__logo"><img src="<?php echo $item; ?>" alt=""></div>
                <?php endforeach; ?>
            </div>
            <div class="footer-bottom__navigation"><span>Go to top</span>
                <div class="footer-bottom__top">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewbox="0 0 24 24" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.29289 15.7071C3.90237 15.3166 3.90237 14.6834 4.29289 14.2929L11.2929 7.29289C11.6834 6.90237 12.3166 6.90237 12.7071 7.29289L19.7071 14.2929C20.0976 14.6834 20.0976 15.3166 19.7071 15.7071C19.3166 16.0976 18.6834 16.0976 18.2929 15.7071L12 9.41421L5.70711 15.7071C5.31658 16.0976 4.68342 16.0976 4.29289 15.7071Z" fill="white"></path>
                    </svg>
                </div>
            </div>
        </div>
    </div>
</div>