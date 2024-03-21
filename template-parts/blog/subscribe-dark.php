<?php 
$subscribe_dark = get_field('subscribe_dark');
$title = $subscribe_dark['title'];
$text = $subscribe_dark['text'];
$image = $subscribe_dark['image'];
$label = $subscribe_dark['label'];
$placeholder = $subscribe_dark['placeholder'];
$button_text = $subscribe_dark['button_text'];
?>
<div class="subscribe-dark">
  <div class="container">
    <div class="subscribe-dark__wrap">
      <div class="subscribe-dark__content">
        <h2 class="subscribe-dark__title title">Subscribe to our blog</h2>
        <div class="subscribe-dark__text">And receive latest trends in search, marketing, digital and news.</div>
        <div class="subscribe-dark__form">
          <div class="intro-form">
            <div class="intro-form__label">Email</div>
            <div class="intro-form__wrap">
              <input class="intro-form__input" type="text" placeholder="Your working email">
              <div class="intro-form__btn">Subscribe</div>
            </div>
          </div>
        </div>
        <div class="form">
          <div class="form__privacy">
            <input class="form__checkbox" id="checkbox" type="checkbox">
            <label for="checkbox">I agree to receive communications from Createx SEO Agency</label>
          </div>
        </div>
      </div>
      <div class="subscribe-dark__img"><img src="<?php echo $image; ?>" alt=""></div>
    </div>
  </div>
</div>