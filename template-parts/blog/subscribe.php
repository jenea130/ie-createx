<?php 
$subscribe = get_field('subscribe');
$title = $subscribe['title'];
$text = $subscribe['text'];
$image = $subscribe['image'];
$label = $subscribe['label'];
$placeholder = $subscribe['placeholder'];
$button_text = $subscribe['button_text'];
?>
<div class="subscribe">
  <div class="container">
    <div class="subscribe__wrap">
      <div class="subscribe__content">
        <h2 class="subscribe__title title"><?php echo $title; ?></h2>
        <div class="subscribe__text"><?php echo $text; ?></div>
        <div class="subscribe__form">
          <div class="intro-form intro-form--dark">
            <div class="intro-form__label"><?php echo $label; ?></div>
            <div class="intro-form__wrap">
              <input class="intro-form__input" type="text" placeholder="<?php echo $placeholder; ?>">
              <div class="intro-form__btn"><?php echo $button_text; ?></div>
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
      <div class="subscribe__img"><img src="<?php echo $image; ?>" alt=""></div>
    </div>
  </div>
</div>