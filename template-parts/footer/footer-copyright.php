<?php 
$footer_copyright = get_field('footer_copyright', 'option');
$name = $footer_copyright['name'];
?>
<footer class="footer-copyright">
    <div class="container">
        <div class="footer-copyright__info"><span>&copy; All rights reserved.Made with</span>
            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.99925 13.2715C4.93321 11.5252 3.22318 9.78955 2.39626 8.28361C1.54992 6.74228 1.62377 5.4441 2.0934 4.52273C3.05872 2.62892 5.80378 2.02333 7.4763 4.13865L7.99921 4.80001L8.52217 4.13868C10.195 2.02327 12.9402 2.62896 13.9055 4.52273C14.3751 5.44408 14.4489 6.74226 13.6025 8.28359C12.7756 9.78954 11.0654 11.5252 7.99925 13.2715ZM7.99928 2.73726C5.64647 0.501518 2.17555 1.42555 0.905488 3.91723C0.20846 5.2847 0.198939 7.05212 1.22753 8.92536C2.247 10.782 4.2796 12.7417 7.67675 14.6194L7.99924 14.7976L8.32173 14.6194C11.719 12.7417 13.7517 10.782 14.7712 8.92537C15.7999 7.05214 15.7904 5.28472 15.0934 3.91723C13.8233 1.4255 10.3523 0.501552 7.99928 2.73726Z" fill="#7772F1"></path>
            </svg>
            <span>by <?php echo $name; ?></span>
        </div>
    </div>
</footer>