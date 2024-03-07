<?php
get_header();
?>

<?php echo get_template_part('template-parts/case-studies/page-intro'); ?>

<div class="container">
    <?php echo get_template_part('template-parts/case-studies/filter'); ?>
    <div class="filter">
        <div class="filter__header">
            <button class="filter__btn active" data-target="">All case studies</button>
            <button class="filter__btn" data-target="social-media">Social Media</button>
            <button class="filter__btn" data-target="seo">Seo</button>
            <button class="filter__btn" data-target="research">Research</button>
            <button class="filter__btn" data-target="content-pr">Content & PR</button>
            <button class="filter__btn" data-target="payed-traffic">Payed Traffic</button>
        </div>
        <div class="filter__wrap">
            <div class="filter__item" data-filter="seo">
                <div class="item-filter">
                    <div class="item-filter__picture"><img class="item-filter__img" src="assets/img/case-studies/filter/filter-2.jpg" alt="">
                        <div class="item-filter__info"><img class="item-filter__logo" src="assets/img/case-studies/filter/filter-logo-2.png" alt="">
                            <div class="item-filter__label">Oil and natural resources</div>
                        </div>
                    </div>
                    <div class="item-filter__content">
                        <div class="ranges">
                            <div class="ranges__wrap">
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                        <svg class="ranges__circle" viewBox="0 0 36 36">
                                            <path class="ranges__circle-bg" stroke="#5A87FC" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                            <path class="ranges__circle-base" stroke-dasharray="100 100" stroke="#5A87FC" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                        </svg>
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">200%</div>
                                        <div class="ranges__description">Growth in sales</div>
                                    </div>
                                </div>
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">1400</div>
                                        <div class="ranges__description">Target investors</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-filter__text text">With an advanced A/B testing and usability analysis, Createx SEO Agency helps Del Mar see a 400% increase in conversion rate.</div><a class="link" href="single-case-studies.html"><span>View case</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="filter__item" data-filter="social-media">
                <div class="item-filter">
                    <div class="item-filter__picture"><img class="item-filter__img" src="assets/img/case-studies/filter/filter-1.jpg" alt="">
                        <div class="item-filter__info"><img class="item-filter__logo" src="assets/img/case-studies/filter/filter-logo-1.png" alt="">
                            <div class="item-filter__label">Charity organisation</div>
                        </div>
                    </div>
                    <div class="item-filter__content">
                        <div class="ranges">
                            <div class="ranges__wrap">
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                        <svg class="ranges__circle" viewBox="0 0 36 36">
                                            <path class="ranges__circle-bg" stroke="#F89828" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                            <path class="ranges__circle-base" stroke-dasharray="75 100" stroke="#F89828" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                        </svg>
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">90%</div>
                                        <div class="ranges__description">Engagement</div>
                                    </div>
                                </div>
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                        <svg class="ranges__circle" viewBox="0 0 36 36">
                                            <path class="ranges__circle-bg" stroke="#03CEA4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                            <path class="ranges__circle-base" stroke-dasharray="100 100" stroke="#03CEA4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                        </svg>
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">100%</div>
                                        <div class="ranges__description">Deliverability</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-filter__text text">Createx SEO Agency helped JNational Inc. increase their MQL to SQL conversion rate by 300%.</div><a class="link" href="single-case-studies.html"><span>View case</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="filter__item" data-filter="research">
                <div class="item-filter">
                    <div class="item-filter__picture"><img class="item-filter__img" src="assets/img/case-studies/filter/filter-3.jpg" alt="">
                        <div class="item-filter__info"><img class="item-filter__logo" src="assets/img/case-studies/filter/filter-logo-3.png" alt="">
                            <div class="item-filter__label">Electric company</div>
                        </div>
                    </div>
                    <div class="item-filter__content">
                        <div class="ranges">
                            <div class="ranges__wrap">
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                        <svg class="ranges__circle" viewBox="0 0 36 36">
                                            <path class="ranges__circle-bg" stroke="#FF4242" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                            <path class="ranges__circle-base" stroke-dasharray="80 100" stroke="#FF4242" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                        </svg>
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">80%</div>
                                        <div class="ranges__description">Open Rate</div>
                                    </div>
                                </div>
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">1,840</div>
                                        <div class="ranges__description">Target investors</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-filter__text text">With an advanced A/B testing and usability analysis, Createx SEO Agency helps Lovato see a 200% increase in conversion rate.</div><a class="link" href="single-case-studies.html"><span>View case</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="filter__item" data-filter="content-pr">
                <div class="item-filter">
                    <div class="item-filter__picture"><img class="item-filter__img" src="assets/img/case-studies/filter/filter-4.jpg" alt="">
                        <div class="item-filter__info"><img class="item-filter__logo" src="assets/img/case-studies/filter/filter-logo-4.png" alt="">
                            <div class="item-filter__label">Personal care</div>
                        </div>
                    </div>
                    <div class="item-filter__content">
                        <div class="ranges">
                            <div class="ranges__wrap">
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                        <svg class="ranges__circle" viewBox="0 0 36 36">
                                            <path class="ranges__circle-bg" stroke="#F52F6E" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                            <path class="ranges__circle-base" stroke-dasharray="80 100" stroke="#F52F6E" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                        </svg>
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">70%</div>
                                        <div class="ranges__description">Open Rate</div>
                                    </div>
                                </div>
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                        <svg class="ranges__circle" viewBox="0 0 36 36">
                                            <path class="ranges__circle-bg" stroke="#F89828" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                            <path class="ranges__circle-base" stroke-dasharray="100 100" stroke="#F89828" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                        </svg>
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">200%</div>
                                        <div class="ranges__description">Growth in sales</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-filter__text text">We helped Sunset company break through a noisy industry and better understand their buyer's journey. </div><a class="link" href="single-case-studies.html"><span>View case</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="filter__item" data-filter="payed-traffic">
                <div class="item-filter">
                    <div class="item-filter__picture"><img class="item-filter__img" src="assets/img/case-studies/filter/filter-5.jpg" alt="">
                        <div class="item-filter__info"><img class="item-filter__logo" src="assets/img/case-studies/filter/filter-logo-5.png" alt="">
                            <div class="item-filter__label">Departments stores</div>
                        </div>
                    </div>
                    <div class="item-filter__content">
                        <div class="ranges">
                            <div class="ranges__wrap">
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                        <svg class="ranges__circle" viewBox="0 0 36 36">
                                            <path class="ranges__circle-bg" stroke="#5A87FC" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                            <path class="ranges__circle-base" stroke-dasharray="70 100" stroke="#5A87FC" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                        </svg>
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">70%</div>
                                        <div class="ranges__description">Increase in leads</div>
                                    </div>
                                </div>
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">190+</div>
                                        <div class="ranges__description">Prospects</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-filter__text text">We helped Dove company break through a noisy industry and better understand their buyer's journey.</div><a class="link" href="single-case-studies.html"><span>View case</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
            <div class="filter__item" data-filter="social-media">
                <div class="item-filter">
                    <div class="item-filter__picture"><img class="item-filter__img" src="assets/img/case-studies/filter/filter-6.jpg" alt="">
                        <div class="item-filter__info"><img class="item-filter__logo" src="assets/img/case-studies/filter/filter-logo-6.png" alt="">
                            <div class="item-filter__label">Electric cars, solar & clean energy</div>
                        </div>
                    </div>
                    <div class="item-filter__content">
                        <div class="ranges">
                            <div class="ranges__wrap">
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                        <svg class="ranges__circle" viewBox="0 0 36 36">
                                            <path class="ranges__circle-bg" stroke="#03CEA4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                            <path class="ranges__circle-base" stroke-dasharray="100 100" stroke="#03CEA4" d="M18 2.0845 a 15.9155 15.9155 0 0 1 0 31.831 a 15.9155 15.9155 0 0 1 0 -31.831"></path>
                                        </svg>
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">200%</div>
                                        <div class="ranges__description">ROI</div>
                                    </div>
                                </div>
                                <div class="ranges__block">
                                    <div class="ranges__range">
                                    </div>
                                    <div class="ranges__wrapper">
                                        <div class="ranges__number">$12,000</div>
                                        <div class="ranges__description">Increase per month</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="item-filter__text text">We helped Dove company break through a noisy industry and better understand their buyer's journey.</div><a class="link" href="single-case-studies.html"><span>View case</span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                            </svg></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="filter__more">
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M2.09961 2C2.65189 2 3.09961 2.44772 3.09961 3V7.43632C4.75764 4.20928 8.11959 2 11.9996 2C16.3552 2 20.058 4.78413 21.4303 8.66675C21.6144 9.18747 21.3414 9.75879 20.8207 9.94284C20.3 10.1269 19.7287 9.85396 19.5446 9.33325C18.4459 6.22472 15.4813 4 11.9996 4C9.03957 4 6.45326 5.60799 5.06955 8H8.09957C8.65186 8 9.09957 8.44772 9.09957 9C9.09957 9.55228 8.65186 10 8.09957 10H2.09961C1.54732 10 1.09961 9.55228 1.09961 9V3C1.09961 2.44772 1.54732 2 2.09961 2Z" fill="#424551"></path>
                <path fill-rule="evenodd" clip-rule="evenodd" d="M3.17664 14.0572C3.69736 13.8731 4.26868 14.146 4.45273 14.6668C5.55144 17.7753 8.51608 20 11.9978 20C14.9578 20 17.5441 18.392 18.9278 16H15.8978C15.3455 16 14.8978 15.5523 14.8978 15C14.8978 14.4477 15.3455 14 15.8978 14H21.8977C22.45 14 22.8977 14.4477 22.8977 15V21C22.8977 21.5523 22.45 22 21.8977 22C21.3455 22 20.8977 21.5523 20.8977 21V16.5637C19.2397 19.7907 15.8778 22 11.9978 22C7.64215 22 3.93936 19.2159 2.56705 15.3332C2.383 14.8125 2.65593 14.2412 3.17664 14.0572Z" fill="#424551"></path>
            </svg><span>Load more</span>
        </div>
    </div>
    <?php echo get_template_part('template-parts/home/logos'); ?>
    <?php echo get_template_part('template-parts/home/comment'); ?>
    <?php echo get_template_part('template-parts/home/news'); ?>
</div>

<?php get_footer(); ?>