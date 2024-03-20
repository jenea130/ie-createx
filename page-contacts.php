<?php
get_header();
?>

<div class="page-contacts">
    <?php echo get_template_part('template-parts/contacts/page-intro'); ?>
    <div class="container">
        <div class="contact-form">
            <h2 class="contact-form__title title">Ready to get started?</h2>
            <div class="contact-form__wrap">
                <div class="contact-form__content">
                    <div class="form form--light">
                        <form action="">
                            <div class="form__group">
                                <h3 class="form__label">Services</h3>
                                <div class="form__radio">
                                    <input id="radio-1" type="radio" name="services" value="Social Media">
                                    <label for="radio-1">Social Media</label>
                                    <input id="radio-2" type="radio" name="services" value="SEO">
                                    <label for="radio-2">SEO</label>
                                    <input id="radio-3" type="radio" name="services" value="Research">
                                    <label for="radio-3">Research</label>
                                    <input id="radio-4" type="radio" name="services" value="Content &amp; PR">
                                    <label for="radio-4">Content & PR</label>
                                    <input id="radio-5" type="radio" name="services" value="Payed Traffic">
                                    <label for="radio-5">Payed Traffic</label>
                                </div>
                            </div>
                            <div class="form__wrap">
                                <div class="form__group">
                                    <label for="">First Name*</label>
                                    <input type="text" placeholder="Your first name">
                                </div>
                                <div class="form__group">
                                    <label for="">Last Name*</label>
                                    <input type="text" placeholder="Your last name">
                                </div>
                            </div>
                            <div class="form__wrap">
                                <div class="form__group">
                                    <label for="">Email</label>
                                    <input type="text" placeholder="Your working email">
                                </div>
                                <div class="form__group">
                                    <label for="">Phone*</label>
                                    <input type="text" placeholder="Your phone number">
                                </div>
                            </div>
                            <div class="form__wrap">
                                <div class="form__group">
                                    <label for="">Company</label>
                                    <input type="text" placeholder="Your company name">
                                </div>
                                <div class="form__group">
                                    <label for="">Position</label>
                                    <input type="text" placeholder="Your position">
                                </div>
                            </div>
                            <div class="form__group">
                                <h3 class="form__label">Approx. budget</h3>
                                <div class="form__range"></div>
                            </div>
                            <div class="form__group">
                                <label for="">Additional Details</label>
                                <textarea name="" placeholder="Your message"> </textarea>
                            </div>
                            <div class="form__footer form__footer--flex">
                                <div class="form__privacy">
                                    <input class="form__checkbox" id="checkbox" type="checkbox">
                                    <label for="checkbox">I agree to receive communications from Createx SEO Agency</label>
                                </div>
                                <button class="form__submit btn" disabled="true">Request a proposal</button>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="contact-form__img"><img src="assets/img/contacts/contact-form/contact-form.svg" alt=""></div>
            </div>
        </div>
    </div>
</div>


<?php get_footer(); ?>