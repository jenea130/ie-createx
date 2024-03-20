<?php
get_header();
?>
<div class="single-blog">
  <?php echo get_template_part('template-parts/single-blog/page-intro') ?>
  <div class="container">
    <div class="single-blog__wrap">
      <div class="single-blog__main">
        <div class="published">
          <div class="published__wrap">
            <div class="published__item">
              <div class="published__label">Published</div>
              <div class="published__content">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M6.24935 1.04199C6.70959 1.04199 7.08268 1.41509 7.08268 1.87533V2.292L12.916 2.29201V1.87533C12.916 1.41509 13.2891 1.04199 13.7493 1.04199C14.2096 1.04199 14.5827 1.41509 14.5827 1.87533V2.29202L15.6244 2.29202C17.4653 2.29202 18.9577 3.78441 18.9577 5.62535V15.6253C18.9577 17.4663 17.4653 18.9587 15.6243 18.9587L4.37435 18.9587C2.5334 18.9587 1.04102 17.4663 1.04102 15.6253L1.04102 7.50049L1.04102 5.62533C1.04102 3.78438 2.5334 2.29199 4.37436 2.292L5.41602 2.292V1.87533C5.41602 1.41509 5.78911 1.04199 6.24935 1.04199ZM5.41602 3.95867L4.37435 3.95866C3.45388 3.95866 2.70768 4.70485 2.70768 5.62533V6.66699H17.291V5.62535C17.291 4.70488 16.5448 3.95869 15.6244 3.95869L14.5827 3.95868V4.37533C14.5827 4.83556 14.2096 5.20866 13.7494 5.20866C13.2891 5.20866 12.916 4.83556 12.916 4.37533V3.95868L7.08268 3.95867V4.37533C7.08268 4.83556 6.70959 5.20866 6.24935 5.20866C5.78911 5.20866 5.41602 4.83556 5.41602 4.37533V3.95867ZM17.291 8.33366H2.70768L2.70768 15.6253C2.70768 16.5458 3.45387 17.292 4.37435 17.292H15.6243C16.5448 17.292 17.291 16.5458 17.291 15.6253V8.33366Z" fill="#1E212C"></path>
                </svg>
                <div class="published__text">July 5, 2020</div>
              </div>
            </div>
            <div class="published__item">
              <div class="published__label">Reading time</div>
              <div class="published__content">
                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                  <path d="M10.834 5.41634C10.834 4.9561 10.4609 4.58301 10.0007 4.58301C9.54041 4.58301 9.16732 4.9561 9.16732 5.41634V9.99967C9.16732 10.2207 9.25511 10.4326 9.4114 10.5889L11.9114 13.0889C12.2368 13.4144 12.7645 13.4144 13.0899 13.0889C13.4153 12.7635 13.4153 12.2359 13.0899 11.9104L10.834 9.6545V5.41634Z" fill="#1E212C"></path>
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M10.0007 0.833008C4.93804 0.833008 0.833984 4.93706 0.833984 9.99967C0.833984 15.0623 4.93804 19.1663 10.0007 19.1663C15.0633 19.1663 19.1673 15.0623 19.1673 9.99967C19.1673 4.93706 15.0633 0.833008 10.0007 0.833008ZM2.50065 9.99967C2.50065 5.85754 5.85851 2.49967 10.0007 2.49967C14.1428 2.49967 17.5006 5.85754 17.5006 9.99967C17.5006 14.1418 14.1428 17.4997 10.0007 17.4997C5.85851 17.4997 2.50065 14.1418 2.50065 9.99967Z" fill="#1E212C"></path>
                </svg>
                <div class="published__text">4 min</div>
              </div>
            </div>
            <div class="published__item">
              <div class="published__label">Share</div>
              <div class="published__social">
                <div class="case-share">
                  <h3 class="case-share__title">Share:</h3>
                  <ul class="case-share__list">
                    <li><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M14.6354 0.836822L12.321 0.833008C9.72086 0.833008 8.04054 2.60392 8.04054 5.34487V7.42513H5.71352C5.51244 7.42513 5.34961 7.59259 5.34961 7.79915V10.8132C5.34961 11.0198 5.51263 11.187 5.71352 11.187H8.04054V18.7925C8.04054 18.9991 8.20337 19.1663 8.40445 19.1663H11.4405C11.6416 19.1663 11.8045 18.9989 11.8045 18.7925V11.187H14.5253C14.7264 11.187 14.8892 11.0198 14.8892 10.8132L14.8903 7.79915C14.8903 7.69997 14.8519 7.60499 14.7837 7.5348C14.7156 7.46461 14.6227 7.42513 14.5262 7.42513H11.8045V5.66166C11.8045 4.81407 12.0011 4.38379 13.0759 4.38379L14.635 4.38322C14.8359 4.38322 14.9987 4.21576 14.9987 4.00939V1.21065C14.9987 1.00447 14.8361 0.837204 14.6354 0.836822Z"></path>
                        </svg></a></li>
                    <li><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M18.75 4.8106C18.1059 5.08388 17.4148 5.26922 16.6887 5.35196C17.4301 4.92683 17.9976 4.25252 18.2666 3.45149C17.5711 3.84519 16.8035 4.13106 15.9855 4.28603C15.3305 3.61695 14.3988 3.2002 13.3653 3.2002C11.3827 3.2002 9.77523 4.73942 9.77523 6.63674C9.77523 6.90583 9.80694 7.16865 9.86819 7.41997C6.88501 7.2765 4.23973 5.90797 2.46928 3.82843C2.1598 4.33523 1.98374 4.92576 1.98374 5.55613C1.98374 6.74878 2.618 7.8011 3.58033 8.41677C2.992 8.39793 2.43866 8.24296 1.95423 7.98537V8.0283C1.95423 9.69317 3.19213 11.0826 4.83353 11.3989C4.5328 11.4764 4.21568 11.5193 3.88761 11.5193C3.6558 11.5193 3.43161 11.4973 3.2118 11.4554C3.66889 12.8219 4.99429 13.8156 6.56463 13.8428C5.33657 14.7642 3.7881 15.3119 2.10624 15.3119C1.81646 15.3119 1.53103 15.2951 1.25 15.2647C2.83893 16.2417 4.7253 16.8113 6.75273 16.8113C13.3566 16.8113 16.9665 11.5738 16.9665 7.0315L16.9544 6.5865C17.6597 6.1048 18.2699 5.49959 18.75 4.8106Z" fill="#787A80"></path>
                        </svg></a></li>
                    <li><a href="#">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                          <path d="M18.3285 18.3337L18.3327 18.333V12.2205C18.3327 9.23019 17.6889 6.92671 14.1931 6.92671C12.5125 6.92671 11.3848 7.84894 10.9243 8.72324H10.8757V7.20588H7.56115V18.333H11.0125V12.8232C11.0125 11.3726 11.2875 9.96977 13.0841 9.96977C14.8542 9.96977 14.8806 11.6253 14.8806 12.9163V18.3337H18.3285Z"></path>
                          <path d="M1.94101 7.20657H5.39657V18.3337H1.94101V7.20657Z"></path>
                          <path d="M3.6674 1.66699C2.56254 1.66699 1.66602 2.56352 1.66602 3.66838C1.66602 4.77324 2.56254 5.68852 3.6674 5.68852C4.77227 5.68852 5.66879 4.77324 5.66879 3.66838C5.6681 2.56352 4.77157 1.66699 3.6674 1.66699Z"></path>
                        </svg></a></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="blog-content">
          <p><strong>Vulputate vitae pellentesque scelerisque luctus consequat mattis pellentesque dui odio. Interdum aenean sit malesuada ornare sed gravida rhoncus, congue. Purus auctor nullam diam quis est hendrerit ac euismod. </strong></p>
          <p>At facilisi sapien posuere eget nunc senectus proin nullam. Tortor senectus in et sagittis, vitae diam cras dignissim. Varius adipiscing eget diam nisi. Orci, consectetur vulputate metus ornare pharetra, neque, fermentum. Vel nec rhoncus, non nunc, neque in massa. Feugiat leo nam nisl lacinia amet, odio. Mi varius viverra risus vel.</p>
          <p>Amet, morbi sed pharetra, elit eget mi potenti. Condimentum orci interdum feugiat lectus libero duis. Nisl massa, elementum varius sit. Nunc felis, porttitor aliquam urna, accumsan et sed. Aliquet non sed duis diam vehicula rhoncus. </p>
          <h2>Why SEM Without CRO Is Impossible?</h2>
          <p>Enim, vel massa odio diam. Blandit massa gravida feugiat elementum id nec sed leo. Nisi in ornare lectus eget. Urna, risus, consectetur volutpat lorem purus. Velit aliquet nibh vitae maecenas. Consectetur neque ut aliquam eros, purus enim dignissim aenean vitae. Ultrices fames augue mattis tortor est justo, pharetra nibh risus. Facilisi at porttitor volutpat natoque proin amet, nulla. Vivamus ut lobortis sagittis curabitur tellus convallis eget netus vitae.</p><img src="assets/img/single-blog/blog-content/blog-content.jpg" alt="">
          <cite>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, amet lectus quam viverra mus lobortis fermentum amet, eu. Pulvinar eu sed purus facilisi. Vitae id turpis tempus ornare turpis quis non. Congue tortor in tot euismod vulputate etiam eros. Vel accumsan at elit neque, ipsum.</cite>
          <h2>Check your conversion tracking</h2>
          <p>Mauris amet arcu nisl vel dictum tellus. Sed rhoncus, ut sed id ut erat mattis. Vitae mus blandit in neque amet non fringilla blandit:</p>
          <ul>
            <li>Dui, lectus at dui magna vitae vitae egestas sed.</li>
            <li>Vulputate placerat amet pulvinar lorem nisl.</li>
            <li>Consequat feugiat habitant gravida quisque elit bibendum id adipiscing sed.</li>
            <li>Etiam duis lobortis in fames ultrices commodo nibh.</li>
          </ul>
          <p>Enim, vel massa odio diam. Blandit massa gravida feugiat elementum id nec sed leo. Nisi in ornare lectus eget. Urna, risus, consectetur volutpat lorem purus. Velit aliquet nibh vitae maecenas. Consectetur neque ut aliquam eros, purus enim dignissim aenean vitae. Ultrices fames augue mattis tortor est justo, pharetra nibh risus. Facilisi at porttitor volutpat natoque proin amet, nulla. Vivamus ut lobortis sagittis curabitur tellus convallis eget netus vitae.</p>
        </div>
        <div class="tags-share">
          <div class="tags-share__item">
            <div class="tags-share__wrap"><span>Tags:</span>
              <ul class="category-list">
                <li>#business</li>
                <li>#PPC</li>
                <li>#targeting</li>
              </ul>
            </div>
          </div>
          <div class="tags-share__item">
            <div class="case-share">
              <h3 class="case-share__title">Share:</h3>
              <ul class="case-share__list">
                <li><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M14.6354 0.836822L12.321 0.833008C9.72086 0.833008 8.04054 2.60392 8.04054 5.34487V7.42513H5.71352C5.51244 7.42513 5.34961 7.59259 5.34961 7.79915V10.8132C5.34961 11.0198 5.51263 11.187 5.71352 11.187H8.04054V18.7925C8.04054 18.9991 8.20337 19.1663 8.40445 19.1663H11.4405C11.6416 19.1663 11.8045 18.9989 11.8045 18.7925V11.187H14.5253C14.7264 11.187 14.8892 11.0198 14.8892 10.8132L14.8903 7.79915C14.8903 7.69997 14.8519 7.60499 14.7837 7.5348C14.7156 7.46461 14.6227 7.42513 14.5262 7.42513H11.8045V5.66166C11.8045 4.81407 12.0011 4.38379 13.0759 4.38379L14.635 4.38322C14.8359 4.38322 14.9987 4.21576 14.9987 4.00939V1.21065C14.9987 1.00447 14.8361 0.837204 14.6354 0.836822Z"></path>
                    </svg></a></li>
                <li><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M18.75 4.8106C18.1059 5.08388 17.4148 5.26922 16.6887 5.35196C17.4301 4.92683 17.9976 4.25252 18.2666 3.45149C17.5711 3.84519 16.8035 4.13106 15.9855 4.28603C15.3305 3.61695 14.3988 3.2002 13.3653 3.2002C11.3827 3.2002 9.77523 4.73942 9.77523 6.63674C9.77523 6.90583 9.80694 7.16865 9.86819 7.41997C6.88501 7.2765 4.23973 5.90797 2.46928 3.82843C2.1598 4.33523 1.98374 4.92576 1.98374 5.55613C1.98374 6.74878 2.618 7.8011 3.58033 8.41677C2.992 8.39793 2.43866 8.24296 1.95423 7.98537V8.0283C1.95423 9.69317 3.19213 11.0826 4.83353 11.3989C4.5328 11.4764 4.21568 11.5193 3.88761 11.5193C3.6558 11.5193 3.43161 11.4973 3.2118 11.4554C3.66889 12.8219 4.99429 13.8156 6.56463 13.8428C5.33657 14.7642 3.7881 15.3119 2.10624 15.3119C1.81646 15.3119 1.53103 15.2951 1.25 15.2647C2.83893 16.2417 4.7253 16.8113 6.75273 16.8113C13.3566 16.8113 16.9665 11.5738 16.9665 7.0315L16.9544 6.5865C17.6597 6.1048 18.2699 5.49959 18.75 4.8106Z" fill="#787A80"></path>
                    </svg></a></li>
                <li><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M18.3285 18.3337L18.3327 18.333V12.2205C18.3327 9.23019 17.6889 6.92671 14.1931 6.92671C12.5125 6.92671 11.3848 7.84894 10.9243 8.72324H10.8757V7.20588H7.56115V18.333H11.0125V12.8232C11.0125 11.3726 11.2875 9.96977 13.0841 9.96977C14.8542 9.96977 14.8806 11.6253 14.8806 12.9163V18.3337H18.3285Z"></path>
                      <path d="M1.94101 7.20657H5.39657V18.3337H1.94101V7.20657Z"></path>
                      <path d="M3.6674 1.66699C2.56254 1.66699 1.66602 2.56352 1.66602 3.66838C1.66602 4.77324 2.56254 5.68852 3.6674 5.68852C4.77227 5.68852 5.66879 4.77324 5.66879 3.66838C5.6681 2.56352 4.77157 1.66699 3.6674 1.66699Z"></path>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="post-nav">
          <header class="post-nav__header">
            <div class="post-nav__link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20711 17.2071C8.81658 17.5976 8.18342 17.5976 7.79289 17.2071L3.29289 12.7071C2.90237 12.3166 2.90237 11.6834 3.29289 11.2929L7.79289 6.79289C8.18342 6.40237 8.81658 6.40237 9.20711 6.79289C9.59763 7.18342 9.59763 7.81658 9.20711 8.20711L6.41421 11L20 11C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13L6.41421 13L9.20711 15.7929C9.59763 16.1834 9.59763 16.8166 9.20711 17.2071Z" fill="#424551"></path>
              </svg><span>Prev Post</span>
            </div>
            <div class="post-nav__link">
              <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M9.20711 17.2071C8.81658 17.5976 8.18342 17.5976 7.79289 17.2071L3.29289 12.7071C2.90237 12.3166 2.90237 11.6834 3.29289 11.2929L7.79289 6.79289C8.18342 6.40237 8.81658 6.40237 9.20711 6.79289C9.59763 7.18342 9.59763 7.81658 9.20711 8.20711L6.41421 11L20 11C20.5523 11 21 11.4477 21 12C21 12.5523 20.5523 13 20 13L6.41421 13L9.20711 15.7929C9.59763 16.1834 9.59763 16.8166 9.20711 17.2071Z" fill="#424551"></path>
              </svg><span>Next Post</span>
            </div>
          </header>
          <div class="post-nav__wrap">
            <div class="post-nav__item">
              <div class="post-small">
                <div class="post-small__img"><img src="assets/img/blog/trending/trending-3.jpg" alt=""></div>
                <div class="post-small__content">
                  <div class="post-small__info"><img src="assets/img/icons/clock.svg" alt=""><span>March 12, 2020</span></div>
                  <h3 class="post-small__subtitle">10 tips for a small business digital marketing strategy</h3>
                </div>
              </div>
            </div>
            <div class="post-nav__item">
              <div class="post-small">
                <div class="post-small__img"><img src="assets/img/blog/trending/trending-2.jpg" alt=""></div>
                <div class="post-small__content">
                  <div class="post-small__info"><img src="assets/img/icons/clock.svg" alt=""><span>April 9, 2020</span></div>
                  <h3 class="post-small__subtitle">Why SEO Is All About Content Marketing?</h3>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="single-blog__aside">
        <div class="search">
          <input type="text" placeholder="Search the blog">
          <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
            <g clip-path="url(#clip0_3701_458)">
              <path fill-rule="evenodd" clip-rule="evenodd" d="M7.25065 2.16634C4.4432 2.16634 2.16732 4.44223 2.16732 7.24967C2.16732 10.0571 4.4432 12.333 7.25065 12.333C8.65324 12.333 9.92209 11.7658 10.8425 10.8467C11.7647 9.92589 12.334 8.6549 12.334 7.24967C12.334 4.44223 10.0581 2.16634 7.25065 2.16634ZM0.833984 7.24967C0.833984 3.70585 3.70682 0.833008 7.25065 0.833008C10.7945 0.833008 13.6673 3.70585 13.6673 7.24967C13.6673 8.78248 13.1292 10.1905 12.2326 11.2939L14.9716 14.0278C15.2322 14.2879 15.2326 14.7101 14.9725 14.9706C14.7124 15.2312 14.2903 15.2316 14.0297 14.9715L11.2893 12.2362C10.1868 13.13 8.78088 13.6663 7.25065 13.6663C3.70682 13.6663 0.833984 10.7935 0.833984 7.24967Z" fill="#424551"></path>
            </g>
            <defs>
              <clipPath id="clip0_3701_458">
                <rect width="16" height="16" fill="white"></rect>
              </clipPath>
            </defs>
          </svg>
        </div>
        <div class="author">
          <h2 class="author__title title title--small">Author</h2>
          <div class="author__wrap">
            <div class="author__img"> <img src="assets/img/single-blog/author/author.jpg" alt=""></div>
            <div class="author__content">
              <h3 class="author__subtitle">Diane Mccoy</h3>
              <div class="author__text">Lead Digital PR Strategist</div>
              <ul class="author__socials">
                <li><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M18.75 4.8106C18.1059 5.08388 17.4148 5.26922 16.6887 5.35196C17.4301 4.92683 17.9976 4.25252 18.2666 3.45149C17.5711 3.84519 16.8035 4.13106 15.9855 4.28603C15.3305 3.61695 14.3988 3.2002 13.3653 3.2002C11.3827 3.2002 9.77523 4.73942 9.77523 6.63674C9.77523 6.90583 9.80694 7.16865 9.86819 7.41997C6.88501 7.2765 4.23973 5.90797 2.46928 3.82843C2.1598 4.33523 1.98374 4.92576 1.98374 5.55613C1.98374 6.74878 2.618 7.8011 3.58033 8.41677C2.992 8.39793 2.43866 8.24296 1.95423 7.98537V8.0283C1.95423 9.69317 3.19213 11.0826 4.83353 11.3989C4.5328 11.4764 4.21568 11.5193 3.88761 11.5193C3.6558 11.5193 3.43161 11.4973 3.2118 11.4554C3.66889 12.8219 4.99429 13.8156 6.56463 13.8428C5.33657 14.7642 3.7881 15.3119 2.10624 15.3119C1.81646 15.3119 1.53103 15.2951 1.25 15.2647C2.83893 16.2417 4.7253 16.8113 6.75273 16.8113C13.3566 16.8113 16.9665 11.5738 16.9665 7.0315L16.9544 6.5865C17.6597 6.1048 18.2699 5.49959 18.75 4.8106Z" fill="#787A80"></path>
                    </svg></a></li>
                <li><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M14.6354 0.836822L12.321 0.833008C9.72086 0.833008 8.04054 2.60392 8.04054 5.34487V7.42513H5.71352C5.51244 7.42513 5.34961 7.59259 5.34961 7.79915V10.8132C5.34961 11.0198 5.51263 11.187 5.71352 11.187H8.04054V18.7925C8.04054 18.9991 8.20337 19.1663 8.40445 19.1663H11.4405C11.6416 19.1663 11.8045 18.9989 11.8045 18.7925V11.187H14.5253C14.7264 11.187 14.8892 11.0198 14.8892 10.8132L14.8903 7.79915C14.8903 7.69997 14.8519 7.60499 14.7837 7.5348C14.7156 7.46461 14.6227 7.42513 14.5262 7.42513H11.8045V5.66166C11.8045 4.81407 12.0011 4.38379 13.0759 4.38379L14.635 4.38322C14.8359 4.38322 14.9987 4.21576 14.9987 4.00939V1.21065C14.9987 1.00447 14.8361 0.837204 14.6354 0.836822Z"></path>
                    </svg></a></li>
                <li><a href="#">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                      <path d="M18.3285 18.3337L18.3327 18.333V12.2205C18.3327 9.23019 17.6889 6.92671 14.1931 6.92671C12.5125 6.92671 11.3848 7.84894 10.9243 8.72324H10.8757V7.20588H7.56115V18.333H11.0125V12.8232C11.0125 11.3726 11.2875 9.96977 13.0841 9.96977C14.8542 9.96977 14.8806 11.6253 14.8806 12.9163V18.3337H18.3285Z"></path>
                      <path d="M1.94101 7.20657H5.39657V18.3337H1.94101V7.20657Z"></path>
                      <path d="M3.6674 1.66699C2.56254 1.66699 1.66602 2.56352 1.66602 3.66838C1.66602 4.77324 2.56254 5.68852 3.6674 5.68852C4.77227 5.68852 5.66879 4.77324 5.66879 3.66838C5.6681 2.56352 4.77157 1.66699 3.6674 1.66699Z"></path>
                    </svg></a></li>
              </ul>
            </div>
          </div>
        </div>
        <div class="trending">
          <h2 class="trending__title title title--small">Now Trending</h2>
          <div class="trending__item">
            <div class="post-small">
              <div class="post-small__img"><img src="assets/img/blog/trending/trending-1.jpg" alt=""></div>
              <div class="post-small__content">
                <div class="post-small__info"><img src="assets/img/icons/clock.svg" alt=""><span>July 5, 2020</span></div>
                <h3 class="post-small__subtitle">5 Surprising Ways to Combine Content Marketing with PPC</h3>
              </div>
            </div>
          </div>
          <div class="trending__item">
            <div class="post-small">
              <div class="post-small__img"><img src="assets/img/blog/trending/trending-2.jpg" alt=""></div>
              <div class="post-small__content">
                <div class="post-small__info"><img src="assets/img/icons/clock.svg" alt=""><span>April 9, 2020</span></div>
                <h3 class="post-small__subtitle">Why SEO Is All About Content Marketing?</h3>
              </div>
            </div>
          </div>
          <div class="trending__item">
            <div class="post-small">
              <div class="post-small__img"><img src="assets/img/blog/trending/trending-3.jpg" alt=""></div>
              <div class="post-small__content">
                <div class="post-small__info"><img src="assets/img/icons/clock.svg" alt=""><span>March 12, 2020</span></div>
                <h3 class="post-small__subtitle">10 tips for a small business digital marketing strategy</h3>
              </div>
            </div>
          </div>
        </div>
        <div class="tags">
          <h2 class="tags__title title title--small">Tags</h2>
          <ul class="category-list">
            <li>#tips&amp;tricks</li>
            <li>#strategy</li>
            <li>#SMM</li>
            <li>#business</li>
            <li>#PPC</li>
            <li>#targeting</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <?php echo get_template_part('template-parts/single-blog/subscribe-dark') ?>
  <div class="container">
    <div class="slider-blog">
      <h2 class="slider-blog__title title">You may also like </h2>
      <div class="slider-blog__header">
        <div class="slider-blog__arrow slider-blog__arrow--prev">
          <svg width="18" height="12" viewbox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M6.20711 11.2071C5.81658 11.5976 5.18342 11.5976 4.79289 11.2071L0.292892 6.70711C-0.0976315 6.31658 -0.0976315 5.68342 0.292892 5.29289L4.79289 0.792893C5.18342 0.402369 5.81658 0.402369 6.20711 0.792893C6.59763 1.18342 6.59763 1.81658 6.20711 2.20711L3.41421 5L17 5C17.5523 5 18 5.44772 18 6C18 6.55228 17.5523 7 17 7L3.41421 7L6.20711 9.79289C6.59763 10.1834 6.59763 10.8166 6.20711 11.2071Z"></path>
          </svg>
        </div>
        <div class="slider-blog__arrow slider-blog__arrow--next">
          <svg width="18" height="12" viewbox="0 0 18 12" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M11.7929 0.792893C12.1834 0.402369 12.8166 0.402369 13.2071 0.792893L17.7071 5.29289C18.0976 5.68342 18.0976 6.31658 17.7071 6.70711L13.2071 11.2071C12.8166 11.5976 12.1834 11.5976 11.7929 11.2071C11.4024 10.8166 11.4024 10.1834 11.7929 9.79289L14.5858 7H1C0.447715 7 0 6.55228 0 6C0 5.44772 0.447715 5 1 5H14.5858L11.7929 2.20711C11.4024 1.81658 11.4024 1.18342 11.7929 0.792893Z"></path>
          </svg>
        </div>
      </div>
      <div class="slider-blog__wrap">
        <div class="slider-blog__item">
          <div class="post">
            <div class="post__img"><img src="assets/img/blog/main-blog/main-blog-1.jpg" alt="">
            </div>
            <div class="post__content">
              <ul class="post__list">
                <li> <span>Marketing</span>
                </li>
                <li> <img src="assets/img/icons/clock.svg" alt="" width="16"><span>July 5, 2020</span>
                </li>
                <li> <img src="assets/img/icons/user.svg" alt="" width="16"><span>By Diane Mccoy</span>
                </li>
              </ul>
              <h3 class="post__title">Digital Marketing Game: What You Need to Know to Stay Ahead?</h3>
              <div class="post__text">Nunc nulla vestibulum nunc quam arcu tristique convallis. Posuere augue pellentesque mauris gravida...</div><a class="link" href="single-blog.html"><span>Read more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                </svg></a>
            </div>
          </div>
        </div>
        <div class="slider-blog__item">
          <div class="post">
            <div class="post__img"><img src="assets/img/blog/main-blog/main-blog-2.jpg" alt="">
            </div>
            <div class="post__content">
              <ul class="post__list">
                <li> <span>Ad Tips</span>
                </li>
                <li> <img src="assets/img/icons/clock.svg" alt="" width="16"><span>July 5, 2020</span>
                </li>
                <li> <img src="assets/img/icons/user.svg" alt="" width="16"><span>By Shawn Edwards</span>
                </li>
              </ul>
              <h3 class="post__title">How to Evaluate and Compare Social Media Tools Today.</h3>
              <div class="post__text">Eu donec pellentesque et aliquet. Fringilla morbi etiam turpis nisl nunc, quis sagittis ut. Pulvinar amet vitae..</div><a class="link" href="single-blog.html"><span>Read more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                </svg></a>
            </div>
          </div>
        </div>
        <div class="slider-blog__item">
          <div class="post">
            <div class="post__img"><img src="assets/img/blog/main-blog/main-blog-3.jpg" alt="">
            </div>
            <div class="post__content">
              <ul class="post__list">
                <li> <span>Ad Tips</span>
                </li>
                <li> <img src="assets/img/icons/clock.svg" alt="" width="16"><span>July 5, 2020</span>
                </li>
                <li> <img src="assets/img/icons/user.svg" alt="" width="16"><span>By Shawn Edwards</span>
                </li>
              </ul>
              <h3 class="post__title">The Best Practices to Optimize Your Website for Mobile.</h3>
              <div class="post__text">Pharetra, ullamcorper iaculis viverra parturient sed id sed. Convallis proin dignissim lacus, purus gravida...</div><a class="link" href="single-blog.html"><span>Read more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                </svg></a>
            </div>
          </div>
        </div>
        <div class="slider-blog__item">
          <div class="post">
            <div class="post__img"><img src="assets/img/blog/main-blog/main-blog-4.jpg" alt="">
            </div>
            <div class="post__content">
              <ul class="post__list">
                <li> <span>Paid Search</span>
                </li>
                <li> <img src="assets/img/icons/clock.svg" alt="" width="16"><span>July 5, 2020</span>
                </li>
                <li> <img src="assets/img/icons/user.svg" alt="" width="16"><span>By Shawn Edwards</span>
                </li>
              </ul>
              <h3 class="post__title">10 Seriously Underused Paid Search Strategies.</h3>
              <div class="post__text">Euismod congue faucibus diam etiam diam netus vitae ornare vitae. Cursus sollicitudin posuere venenatis...</div><a class="link" href="single-blog.html"><span>Read more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                </svg></a>
            </div>
          </div>
        </div>
        <div class="slider-blog__item">
          <div class="post">
            <div class="post__img"><img src="assets/img/blog/main-blog/main-blog-5.jpg" alt="">
            </div>
            <div class="post__content">
              <ul class="post__list">
                <li> <span>Media &amp; Press</span>
                </li>
                <li> <img src="assets/img/icons/clock.svg" alt="" width="16"><span>July 5, 2020</span>
                </li>
                <li> <img src="assets/img/icons/user.svg" alt="" width="16"><span>By Shawn </span>
                </li>
              </ul>
              <h3 class="post__title">How to Create Content That Gets Linked and Shared.</h3>
              <div class="post__text">Eu donec pellentesque et aliquet. Fringilla morbi etiam turpis nisl nunc, quis sagittis ut. Pulvinar amet vitae..</div><a class="link" href="single-blog.html"><span>Read more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                </svg></a>
            </div>
          </div>
        </div>
        <div class="slider-blog__item">
          <div class="post">
            <div class="post__img"><img src="assets/img/blog/main-blog/main-blog-6.jpg" alt="">
            </div>
            <div class="post__content">
              <ul class="post__list">
                <li> <span>Ad Tips</span>
                </li>
                <li> <img src="assets/img/icons/clock.svg" alt="" width="16"><span>July 5, 2020</span>
                </li>
                <li> <img src="assets/img/icons/user.svg" alt="" width="16"><span>By Shawn Edwards</span>
                </li>
              </ul>
              <h3 class="post__title">12 Simple Tips to Creating an Effective Ad.</h3>
              <div class="post__text">Imperdiet risus consectetur dignissim lorem sollicitudin eget bibendum pellentesque nec. Adipiscing viverra in non euismod. Amet nulla aliquam nulla magna...</div><a class="link" href="single-blog.html"><span>Read more</span>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path fill-rule="evenodd" clip-rule="evenodd" d="M14.7929 6.79289C15.1834 6.40237 15.8166 6.40237 16.2071 6.79289L20.7071 11.2929C21.0976 11.6834 21.0976 12.3166 20.7071 12.7071L16.2071 17.2071C15.8166 17.5976 15.1834 17.5976 14.7929 17.2071C14.4024 16.8166 14.4024 16.1834 14.7929 15.7929L17.5858 13H4C3.44772 13 3 12.5523 3 12C3 11.4477 3.44772 11 4 11H17.5858L14.7929 8.20711C14.4024 7.81658 14.4024 7.18342 14.7929 6.79289Z" fill="#7772F1"></path>
                </svg></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>