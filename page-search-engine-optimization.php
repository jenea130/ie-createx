<?php
get_header();
?>

<?php echo get_template_part('template-parts/search-engine-optimization/page-intro'); ?>

<div class="container">
    <?php echo get_template_part('template-parts/home/logos'); ?>
    <?php echo get_template_part('template-parts/search-engine-optimization/ensure'); ?>
    <?php echo get_template_part('template-parts/search-engine-optimization/strategy'); ?>
</div>

<div class="container">
    <section class="get-free">
        <h2 class="get-free__title">Get a Free SEO Analysis!</h2>
        <div class="get-free__form">
            <form class="seo-form" action="">
                <div class="seo-form__wrap">
                    <div class="seo-form__group">
                        <div class="seo-form__label">Name</div>
                        <input type="text" placeholder="Your name">
                    </div>
                    <div class="seo-form__group">
                        <div class="seo-form__label">Email</div>
                        <input type="email" placeholder="Your working email">
                    </div>
                    <div class="seo-form__group">
                        <div class="seo-form__label">Your website URL</div>
                        <input type="text" placeholder="http://yoursite.com">
                    </div>
                    <div class="seo-form__group">
                        <btn class="seo-form__btn btn">Analyse your site</btn>
                    </div>
                </div>
            </form>
        </div>
    </section>
    <div class="tree">
        <h2 class="tree__title title">That’s how it works</h2>
        <div class="tree__body">
            <div class="tree__row">
                <div class="tree__column"></div>
                <div class="tree__column">
                    <div class="tree__label">Step 1</div>
                    <div class="tree__subtitle">Off-Site SEO Analysis </div>
                    <div class="tree__text text">Aliquam turpis viverra quam sit interdum blandit posuere pellentesque. Nisl, imperdiet gravida massa neque.</div>
                </div>
            </div>
            <div class="tree__row">
                <div class="tree__column"></div>
                <div class="tree__column">
                    <div class="tree__label">Step 2</div>
                    <div class="tree__subtitle">Technical SEO Optimizations </div>
                    <div class="tree__text text">Facilisis pellentesque quis accumsan ultricies. Eu egestas eget feugiat lacus, amet, sollicitudin egestas laoreet etiam. Nunc nisl orci auctor et fames. Vestibulum viverra faucibus faucibus et convallis.</div>
                </div>
            </div>
            <div class="tree__row">
                <div class="tree__column"></div>
                <div class="tree__column">
                    <div class="tree__label">Step 3</div>
                    <div class="tree__subtitle">Usability Check </div>
                    <div class="tree__text text">Eget amet, enim pharetra leo egestas nisi, odio imperdiet facilisis. Aliquet orci varius volutpat egestas facilisi lobortis. Varius praesent pretium in leo, accumsan, in ultricies. </div>
                </div>
            </div>
            <div class="tree__row">
                <div class="tree__column"></div>
                <div class="tree__column">
                    <div class="tree__label">Step 4</div>
                    <div class="tree__subtitle">Content Marketing </div>
                    <div class="tree__text text">Non tempor pulvinar tincidunt aliquam. Placerat ultricies malesuada dui auctor. Faucibus in leo, nulla odio nulla imperdiet quis faucibus neque.</div>
                </div>
            </div>
        </div>
    </div>
    <section class="plans">
        <h2 class="plans__title title">Flexible pricing plans</h2>
        <header class="plans__header">
            <button class="plans__btn active" data-target="tab-1"><strong>Monthly</strong></button>
            <button class="plans__btn" data-target="tab-2"><strong>Yearly</strong> -12% Off</button>
        </header>
        <div class="plans__body">
            <div class="plans__wrap active" id="1">
                <div class="plans__item">
                    <div class="card">
                        <h3 class="card__title">Basic</h3>
                        <div class="card__price"><strong>$23</strong><sup>/mon</sup></div>
                        <ul class="card__list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Advanced Analytics</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Change Management</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Corporate Finance</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>One Way Link Building</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Social Media Marketing</span>
                            </li>
                            <li class="nonactive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.36225 2.86128C3.6226 2.60093 4.04471 2.60093 4.30506 2.86128L8.50032 7.05654L12.6956 2.86128C12.9559 2.60093 13.378 2.60093 13.6384 2.86128C13.8987 3.12163 13.8987 3.54374 13.6384 3.80409L9.44313 7.99934L13.6384 12.1946C13.8987 12.455 13.8987 12.8771 13.6384 13.1374C13.378 13.3978 12.9559 13.3978 12.6956 13.1374L8.50032 8.94215L4.30506 13.1374C4.04471 13.3978 3.6226 13.3978 3.36225 13.1374C3.10191 12.8771 3.1019 12.455 3.36225 12.1946L7.55751 7.99934L3.36225 3.80409C3.1019 3.54374 3.1019 3.12163 3.36225 2.86128Z"></path>
                                </svg><span>Strategy &amp; Marketing</span>
                            </li>
                            <li class="nonactive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.36225 2.86128C3.6226 2.60093 4.04471 2.60093 4.30506 2.86128L8.50032 7.05654L12.6956 2.86128C12.9559 2.60093 13.378 2.60093 13.6384 2.86128C13.8987 3.12163 13.8987 3.54374 13.6384 3.80409L9.44313 7.99934L13.6384 12.1946C13.8987 12.455 13.8987 12.8771 13.6384 13.1374C13.378 13.3978 12.9559 13.3978 12.6956 13.1374L8.50032 8.94215L4.30506 13.1374C4.04471 13.3978 3.6226 13.3978 3.36225 13.1374C3.10191 12.8771 3.1019 12.455 3.36225 12.1946L7.55751 7.99934L3.36225 3.80409C3.1019 3.54374 3.1019 3.12163 3.36225 2.86128Z"></path>
                                </svg><span>Information Technology</span>
                            </li>
                        </ul><a class="card__btn btn btn--small btn--border" href="#">Choose plan</a>
                    </div>
                </div>
                <div class="plans__item">
                    <div class="card">
                        <h3 class="card__title">Optimal</h3>
                        <div class="card__price"><strong>$64</strong><sup>/mon</sup></div>
                        <ul class="card__list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Advanced Analytics</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Change Management</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Corporate Finance</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>One Way Link Building</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Social Media Marketing</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Strategy &amp; Marketing</span>
                            </li>
                            <li class="nonactive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.36225 2.86128C3.6226 2.60093 4.04471 2.60093 4.30506 2.86128L8.50032 7.05654L12.6956 2.86128C12.9559 2.60093 13.378 2.60093 13.6384 2.86128C13.8987 3.12163 13.8987 3.54374 13.6384 3.80409L9.44313 7.99934L13.6384 12.1946C13.8987 12.455 13.8987 12.8771 13.6384 13.1374C13.378 13.3978 12.9559 13.3978 12.6956 13.1374L8.50032 8.94215L4.30506 13.1374C4.04471 13.3978 3.6226 13.3978 3.36225 13.1374C3.10191 12.8771 3.1019 12.455 3.36225 12.1946L7.55751 7.99934L3.36225 3.80409C3.1019 3.54374 3.1019 3.12163 3.36225 2.86128Z"></path>
                                </svg><span>Information Technology</span>
                            </li>
                        </ul><a class="card__btn btn btn--small btn--border" href="#">Choose plan</a>
                    </div>
                </div>
                <div class="plans__item">
                    <div class="card">
                        <h3 class="card__title">Premium</h3>
                        <div class="card__price"><strong>$98</strong><sup>/mon</sup></div>
                        <ul class="card__list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Advanced Analytics</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Change Management</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Corporate Finance</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>One Way Link Building</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Social Media Marketing</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Strategy &amp; Marketing</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Information Technology</span>
                            </li>
                        </ul><a class="card__btn btn btn--small btn--border" href="#">Choose plan</a>
                    </div>
                </div>
            </div>
            <div class="plans__wrap" id="2">
                <div class="plans__item">
                    <div class="card">
                        <h3 class="card__title">Basic</h3>
                        <div class="card__price"><strong>$24</strong><sup>/mon</sup></div>
                        <ul class="card__list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Advanced Analytics</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Change Management</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Corporate Finance</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>One Way Link Building</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Social Media Marketing</span>
                            </li>
                            <li class="nonactive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.36225 2.86128C3.6226 2.60093 4.04471 2.60093 4.30506 2.86128L8.50032 7.05654L12.6956 2.86128C12.9559 2.60093 13.378 2.60093 13.6384 2.86128C13.8987 3.12163 13.8987 3.54374 13.6384 3.80409L9.44313 7.99934L13.6384 12.1946C13.8987 12.455 13.8987 12.8771 13.6384 13.1374C13.378 13.3978 12.9559 13.3978 12.6956 13.1374L8.50032 8.94215L4.30506 13.1374C4.04471 13.3978 3.6226 13.3978 3.36225 13.1374C3.10191 12.8771 3.1019 12.455 3.36225 12.1946L7.55751 7.99934L3.36225 3.80409C3.1019 3.54374 3.1019 3.12163 3.36225 2.86128Z"></path>
                                </svg><span>Strategy &amp; Marketing</span>
                            </li>
                            <li class="nonactive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.36225 2.86128C3.6226 2.60093 4.04471 2.60093 4.30506 2.86128L8.50032 7.05654L12.6956 2.86128C12.9559 2.60093 13.378 2.60093 13.6384 2.86128C13.8987 3.12163 13.8987 3.54374 13.6384 3.80409L9.44313 7.99934L13.6384 12.1946C13.8987 12.455 13.8987 12.8771 13.6384 13.1374C13.378 13.3978 12.9559 13.3978 12.6956 13.1374L8.50032 8.94215L4.30506 13.1374C4.04471 13.3978 3.6226 13.3978 3.36225 13.1374C3.10191 12.8771 3.1019 12.455 3.36225 12.1946L7.55751 7.99934L3.36225 3.80409C3.1019 3.54374 3.1019 3.12163 3.36225 2.86128Z"></path>
                                </svg><span>Information Technology</span>
                            </li>
                        </ul><a class="card__btn btn btn--small btn--border" href="#">Choose plan</a>
                    </div>
                </div>
                <div class="plans__item">
                    <div class="card">
                        <h3 class="card__title">Optimal</h3>
                        <div class="card__price"><strong>$24</strong><sup>/mon</sup></div>
                        <ul class="card__list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Advanced Analytics</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Change Management</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Corporate Finance</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>One Way Link Building</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Social Media Marketing</span>
                            </li>
                            <li class="nonactive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.36225 2.86128C3.6226 2.60093 4.04471 2.60093 4.30506 2.86128L8.50032 7.05654L12.6956 2.86128C12.9559 2.60093 13.378 2.60093 13.6384 2.86128C13.8987 3.12163 13.8987 3.54374 13.6384 3.80409L9.44313 7.99934L13.6384 12.1946C13.8987 12.455 13.8987 12.8771 13.6384 13.1374C13.378 13.3978 12.9559 13.3978 12.6956 13.1374L8.50032 8.94215L4.30506 13.1374C4.04471 13.3978 3.6226 13.3978 3.36225 13.1374C3.10191 12.8771 3.1019 12.455 3.36225 12.1946L7.55751 7.99934L3.36225 3.80409C3.1019 3.54374 3.1019 3.12163 3.36225 2.86128Z"></path>
                                </svg><span>Strategy &amp; Marketing</span>
                            </li>
                            <li class="nonactive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.36225 2.86128C3.6226 2.60093 4.04471 2.60093 4.30506 2.86128L8.50032 7.05654L12.6956 2.86128C12.9559 2.60093 13.378 2.60093 13.6384 2.86128C13.8987 3.12163 13.8987 3.54374 13.6384 3.80409L9.44313 7.99934L13.6384 12.1946C13.8987 12.455 13.8987 12.8771 13.6384 13.1374C13.378 13.3978 12.9559 13.3978 12.6956 13.1374L8.50032 8.94215L4.30506 13.1374C4.04471 13.3978 3.6226 13.3978 3.36225 13.1374C3.10191 12.8771 3.1019 12.455 3.36225 12.1946L7.55751 7.99934L3.36225 3.80409C3.1019 3.54374 3.1019 3.12163 3.36225 2.86128Z"></path>
                                </svg><span>Information Technology</span>
                            </li>
                        </ul><a class="card__btn btn btn--small btn--border" href="#">Choose plan</a>
                    </div>
                </div>
                <div class="plans__item">
                    <div class="card">
                        <h3 class="card__title">Premium</h3>
                        <div class="card__price"><strong>$24</strong><sup>/mon</sup></div>
                        <ul class="card__list">
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Advanced Analytics</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Change Management</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Corporate Finance</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>One Way Link Building</span>
                            </li>
                            <li>
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.9717 3.52925C15.2321 3.7896 15.2321 4.21171 14.9717 4.47206L6.97173 12.4721C6.71138 12.7324 6.28927 12.7324 6.02892 12.4721L2.02892 8.47206C1.76857 8.21171 1.76857 7.7896 2.02892 7.52925C2.28927 7.2689 2.71138 7.2689 2.97173 7.52925L6.50033 11.0578L14.0289 3.52925C14.2893 3.2689 14.7114 3.2689 14.9717 3.52925Z"></path>
                                </svg><span>Social Media Marketing</span>
                            </li>
                            <li class="nonactive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.36225 2.86128C3.6226 2.60093 4.04471 2.60093 4.30506 2.86128L8.50032 7.05654L12.6956 2.86128C12.9559 2.60093 13.378 2.60093 13.6384 2.86128C13.8987 3.12163 13.8987 3.54374 13.6384 3.80409L9.44313 7.99934L13.6384 12.1946C13.8987 12.455 13.8987 12.8771 13.6384 13.1374C13.378 13.3978 12.9559 13.3978 12.6956 13.1374L8.50032 8.94215L4.30506 13.1374C4.04471 13.3978 3.6226 13.3978 3.36225 13.1374C3.10191 12.8771 3.1019 12.455 3.36225 12.1946L7.55751 7.99934L3.36225 3.80409C3.1019 3.54374 3.1019 3.12163 3.36225 2.86128Z"></path>
                                </svg><span>Strategy &amp; Marketing</span>
                            </li>
                            <li class="nonactive">
                                <svg xmlns="http://www.w3.org/2000/svg" width="17" height="16" viewbox="0 0 17 16">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.36225 2.86128C3.6226 2.60093 4.04471 2.60093 4.30506 2.86128L8.50032 7.05654L12.6956 2.86128C12.9559 2.60093 13.378 2.60093 13.6384 2.86128C13.8987 3.12163 13.8987 3.54374 13.6384 3.80409L9.44313 7.99934L13.6384 12.1946C13.8987 12.455 13.8987 12.8771 13.6384 13.1374C13.378 13.3978 12.9559 13.3978 12.6956 13.1374L8.50032 8.94215L4.30506 13.1374C4.04471 13.3978 3.6226 13.3978 3.36225 13.1374C3.10191 12.8771 3.1019 12.455 3.36225 12.1946L7.55751 7.99934L3.36225 3.80409C3.1019 3.54374 3.1019 3.12163 3.36225 2.86128Z"></path>
                                </svg><span>Information Technology</span>
                            </li>
                        </ul><a class="card__btn btn btn--small btn--border" href="#">Choose plan</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<section class="studies">
    <div class="container">
        <h2 class="studies__title title4Read">our clients&apos; case studies</h2>
        <div class="studies__header">
            <div class="studies__arrow studies__arrow--prev">
                <svg width="18" height="12" viewbox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.20711 11.2071C5.81658 11.5976 5.18342 11.5976 4.79289 11.2071L0.292892 6.70711C-0.0976315 6.31658 -0.0976315 5.68342 0.292892 5.29289L4.79289 0.792893C5.18342 0.402369 5.81658 0.402369 6.20711 0.792893C6.59763 1.18342 6.59763 1.81658 6.20711 2.20711L3.41421 5L17 5C17.5523 5 18 5.44772 18 6C18 6.55228 17.5523 7 17 7L3.41421 7L6.20711 9.79289C6.59763 10.1834 6.59763 10.8166 6.20711 11.2071Z"></path>
                </svg>
            </div>
            <div class="studies__arrow studies__arrow--next">
                <svg width="18" height="12" viewbox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7929 0.792893C12.1834 0.402369 12.8166 0.402369 13.2071 0.792893L17.7071 5.29289C18.0976 5.68342 18.0976 6.31658 17.7071 6.70711L13.2071 11.2071C12.8166 11.5976 12.1834 11.5976 11.7929 11.2071C11.4024 10.8166 11.4024 10.1834 11.7929 9.79289L14.5858 7H1C0.447715 7 0 6.55228 0 6C0 5.44772 0.447715 5 1 5H14.5858L11.7929 2.20711C11.4024 1.81658 11.4024 1.18342 11.7929 0.792893Z"></path>
                </svg>
            </div>
        </div>
        <div class="studies__wrap">
            <div class="studies__item">
                <div class="studies__content">
                    <div class="studies__logo"><img src="assets/img/studies/studies-logo-1.png" alt=""></div>
                    <div class="studies__label">Charity organisation</div>
                    <div class="studies__text">
                        Createx SEO Agency helped National Inc. increase their MQL to SQL conversion rate
                        by 300%.
                    </div>
                    <div class="ranges">
                        <div class="ranges__wrap">
                            <div class="ranges__block">
                                <div class="ranges__range"><img src="assets/img/studies/circle-1.svg" alt=""></div>
                                <div class="ranges__wrapper">
                                    <div class="ranges__number">90%</div>
                                    <div class="ranges__description">Engagement</div>
                                </div>
                            </div>
                            <div class="ranges__block">
                                <div class="ranges__range"><img src="assets/img/studies/circle-2.svg" alt=""></div>
                                <div class="ranges__wrapper">
                                    <div class="ranges__number">100%</div>
                                    <div class="ranges__description">Deliverability</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="studies__item">
                <div class="studies__content">
                    <div class="studies__logo"><img src="assets/img/studies/studies-logo-2.png" alt=""></div>
                    <div class="studies__label">Oil and natural resources</div>
                    <div class="studies__text">
                        With an advanced A/B testing and usability analysis, Createx SEO Agency helps Del
                        Mar see a 400% increase in conversion rate.
                    </div>
                    <div class="ranges">
                        <div class="ranges__wrap">
                            <div class="ranges__block">
                                <div class="ranges__range"><img src="assets/img/studies/circle-3.svg" alt=""></div>
                                <div class="ranges__wrapper">
                                    <div class="ranges__number">200%</div>
                                    <div class="ranges__description">Growth in sales</div>
                                </div>
                            </div>
                            <div class="ranges__block">
                                <!--
                      <div class="ranges__range">
                      <img src="img/studies/circle-2.svg" alt="">
                      </div>
                      -->
                                <div class="ranges__wrapper">
                                    <div class="ranges__number">1,400</div>
                                    <div class="ranges__description">Target investors</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="studies__item">
                <div class="studies__content">
                    <div class="studies__logo"><img src="assets/img/studies/studies-logo-3.png" alt=""></div>
                    <div class="studies__label">Personal care</div>
                    <div class="studies__text">
                        We helped Sunset company break through a noisy industry and better understand
                        their
                        buyer&apos;s journey.
                    </div>
                    <div class="ranges">
                        <div class="ranges__wrap">
                            <div class="ranges__block">
                                <div class="ranges__range"><img src="assets/img/studies/circle-1.svg" alt=""></div>
                                <div class="ranges__wrapper">
                                    <div class="ranges__number">70%</div>
                                    <div class="ranges__description">Open Rate</div>
                                </div>
                            </div>
                            <div class="ranges__block">
                                <div class="ranges__range"><img src="assets/img/studies/circle-2.svg" alt=""></div>
                                <div class="ranges__wrapper">
                                    <div class="ranges__number">200%</div>
                                    <div class="ranges__description">Growth in sales</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="studies__item">
                <div class="studies__content">
                    <div class="studies__logo"><img src="assets/img/studies/studies-logo-2.png" alt=""></div>
                    <div class="studies__label">Oil and natural resources</div>
                    <div class="studies__text">
                        With an advanced A/B testing and usability analysis, Createx SEO Agency helps Del
                        Mar see a 400% increase in conversion rate.
                    </div>
                    <div class="ranges">
                        <div class="ranges__wrap">
                            <div class="ranges__block">
                                <div class="ranges__range"><img src="assets/img/studies/circle-3.svg" alt=""></div>
                                <div class="ranges__wrapper">
                                    <div class="ranges__number">200%</div>
                                    <div class="ranges__description">Growth in sales</div>
                                </div>
                            </div>
                            <div class="ranges__block">
                                <!--
                      <div class="ranges__range">
                      <img src="img/studies/circle-2.svg" alt="">
                      </div>
                      -->
                                <div class="ranges__wrapper">
                                    <div class="ranges__number">1,400</div>
                                    <div class="ranges__description">Target investors</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <footer class="studies__footer"><span class="studies__info">Explore more case studies</span><a class="studies__btn btn" href="case-studies.html">View all case studies</a></footer>
    </div>
</section>
<div class="container">
    <section class="tabs">
        <h2 class="tabs__title title">Our services</h2>
        <header class="tabs__header">
            <div class="tabs__item active" data-target="tab-1">Social Media</div>
            <div class="tabs__item" data-target="tab-2">SEO</div>
            <div class="tabs__item" data-target="tab-3">Research</div>
            <div class="tabs__item" data-target="tab-4">Content &amp; PR</div>
            <div class="tabs__item" data-target="tab-5">Payed Traffic</div>
        </header>
        <div class="tabs__body">
            <div class="tabs__wrap active" id="1">
                <div class="tabs__content">
                    <h3 class="tabs__subtitle">Complete Worflow For Any SEO Professional</h3>
                    <ul class="tabs__list">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Aenean enim tellus morbi nisl vulputate dictumst.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg> Nibh sapien volutpat lacus augue.
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Vel in amet, placerat adipiscing est pharetra.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Gravida ornare sit in et ut sit sem id.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Ultrices pellentesque dictum enim egestas ac diam.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Sit semper enim senectus integer ut turpis et.</span>
                        </li>
                    </ul>
                    <footer class="tabs__footer"><a class="btn btn--border btn--small" href="our-services.html">Learn more</a><a class="btn btn--small" href="search-engine-optimization.html">Try SEO toolkit</a></footer>
                </div>
                <div class="tabs__img"><img src="assets/img/tabs/tabs.jpg" alt=""></div>
            </div>
            <div class="tabs__wrap" id="2">
                <div class="tabs__content">
                    <h3 class="tabs__subtitle">Complete Worflow For Any SEO Professional</h3>
                    <ul class="tabs__list">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Aenean enim tellus morbi nisl vulputate dictumst.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg> Nibh sapien volutpat lacus augue.
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Vel in amet, placerat adipiscing est pharetra.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Gravida ornare sit in et ut sit sem id.</span>
                        </li>
                    </ul>
                    <footer class="tabs__footer"><a class="btn btn--border btn--small" href="#">Learn more</a><a class="btn btn--small" href="#">Try SEO toolkit</a></footer>
                </div>
                <div class="tabs__img"><img src="assets/img/tabs/tabs.jpg" alt=""></div>
            </div>
            <div class="tabs__wrap" id="3">
                <div class="tabs__content">
                    <h3 class="tabs__subtitle">Complete Worflow For Any SEO</h3>
                    <ul class="tabs__list">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Gravida ornare sit in et ut sit sem id.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Ultrices pellentesque dictum enim egestas ac diam.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Sit semper enim senectus integer ut turpis et.</span>
                        </li>
                    </ul>
                    <footer class="tabs__footer"><a class="btn btn--border btn--small" href="#">Learn more</a><a class="btn btn--small" href="#">Try SEO toolkit</a></footer>
                </div>
                <div class="tabs__img"><img src="assets/img/tabs/tabs.jpg" alt=""></div>
            </div>
            <div class="tabs__wrap" id="4">
                <div class="tabs__content">
                    <h3 class="tabs__subtitle">Complete Worflow</h3>
                    <ul class="tabs__list">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg> Nibh sapien volutpat lacus augue.
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Vel in amet, placerat adipiscing est pharetra.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Gravida ornare sit in et ut sit sem id.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Ultrices pellentesque dictum enim egestas ac diam.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Sit semper enim senectus integer ut turpis et.</span>
                        </li>
                    </ul>
                    <footer class="tabs__footer"><a class="btn btn--border btn--small" href="#">Learn more</a><a class="btn btn--small" href="#">Try SEO toolkit</a></footer>
                </div>
                <div class="tabs__img"><img src="assets/img/tabs/tabs.jpg" alt=""></div>
            </div>
            <div class="tabs__wrap" id="5">
                <div class="tabs__content">
                    <h3 class="tabs__subtitle">Complete Worflow For Any SEO Professional People</h3>
                    <ul class="tabs__list">
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Gravida ornare sit in et ut sit sem id.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Ultrices pellentesque dictum enim egestas ac diam.</span>
                        </li>
                        <li>
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewbox="0 0 16 16" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4717 3.52827C14.7321 3.78862 14.7321 4.21073 14.4717 4.47108L6.47173 12.4711C6.21138 12.7314 5.78927 12.7314 5.52892 12.4711L1.52892 8.47108C1.26857 8.21073 1.26857 7.78862 1.52892 7.52827C1.78927 7.26792 2.21138 7.26792 2.47173 7.52827L6.00033 11.0569L13.5289 3.52827C13.7893 3.26792 14.2114 3.26792 14.4717 3.52827Z" fill="#7772F1"></path>
                            </svg><span>Sit semper enim senectus integer ut turpis et.</span>
                        </li>
                    </ul>
                    <footer class="tabs__footer"><a class="btn btn--border btn--small" href="#">Learn more</a><a class="btn btn--small" href="#">Try SEO toolkit</a></footer>
                </div>
                <div class="tabs__img"><img src="assets/img/tabs/tabs.jpg" alt=""></div>
            </div>
        </div>
    </section>
</div>
</div>

<?php get_footer(); ?>