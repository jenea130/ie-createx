<?php
get_header();
?>

<div class="page-intro">
  <img class="page-intro__img" src="<?php echo get_template_directory_uri(); ?>/assets/img/single-case-studies/single-case-studies-intro/single-case-studies-bg.jpg" alt="">
  <div class="page-intro__content">
    <div class="container">
      <div class="page-intro__breadcrumbs">
        <ul class="breadcrumbs">
          <li>
            <a href="<?php echo home_url(); ?>">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M8.52347 3.28077C8.18117 3.18809 7.82039 3.18809 7.47809 3.28077C7.12173 3.37726 6.77613 3.63005 5.7906 4.39657L4.05726 5.74472C3.42297 6.23806 3.21001 6.41103 3.05947 6.61456C2.91481 6.81015 2.80705 7.03049 2.74148 7.26476C2.67324 7.50853 2.66745 7.78283 2.66745 8.58639V12.9996C2.66745 13.5133 2.67468 13.6224 2.69615 13.6932C2.76079 13.9062 2.92752 14.073 3.14059 14.1376C3.21137 14.1591 3.32042 14.1663 3.83411 14.1663H4.25078C4.33608 14.1663 4.3546 14.1661 4.36683 14.1655C4.7093 14.1487 4.98315 13.8748 4.99998 13.5323C5.00058 13.5201 5.00078 13.5016 5.00078 13.4163V11.4996C5.00078 9.84278 6.34393 8.49963 8.00078 8.49963C9.65763 8.49963 11.0008 9.84278 11.0008 11.4996V13.4163C11.0008 13.5016 11.001 13.5201 11.0016 13.5323C11.0184 13.8748 11.2923 14.1487 11.6347 14.1655C11.647 14.1661 11.6655 14.1663 11.7508 14.1663H12.1674C12.6811 14.1663 12.7902 14.1591 12.861 14.1376C13.074 14.073 13.2408 13.9062 13.3054 13.6932C13.3269 13.6224 13.3341 13.5133 13.3341 12.9996V8.58639C13.3341 7.78283 13.3283 7.50853 13.2601 7.26476C13.1945 7.03049 13.0867 6.81015 12.9421 6.61456C12.7916 6.41103 12.5786 6.23806 11.9443 5.74472L10.211 4.39657C9.22543 3.63005 8.87984 3.37726 8.52347 3.28077ZM7.12962 1.99378C7.70013 1.83931 8.30144 1.83931 8.87194 1.99378C9.52079 2.16946 10.0901 2.61272 10.9161 3.25581C10.9534 3.28484 10.9912 3.31427 11.0296 3.3441L12.7629 4.69225C12.7868 4.71089 12.8105 4.72926 12.8338 4.74739C13.37 5.16417 13.741 5.45248 14.0141 5.8217C14.2552 6.14768 14.4348 6.51491 14.5441 6.90536C14.6679 7.34759 14.6677 7.81741 14.6675 8.49656C14.6675 8.5261 14.6674 8.55604 14.6674 8.58639V12.9996C14.6674 13.0279 14.6675 13.0558 14.6675 13.0835C14.668 13.4644 14.6684 13.7933 14.5813 14.0802C14.3874 14.7194 13.8872 15.2196 13.248 15.4135C12.9611 15.5005 12.6322 15.5002 12.2513 15.4997C12.2236 15.4997 12.1957 15.4996 12.1674 15.4996L11.7368 15.4996C11.6734 15.4996 11.6189 15.4997 11.5693 15.4972C10.5419 15.4468 9.72033 14.6252 9.66986 13.5978C9.66742 13.5482 9.66743 13.4937 9.66745 13.4303L9.66745 11.4996C9.66745 10.5792 8.92126 9.83297 8.00078 9.83297C7.08031 9.83297 6.33411 10.5792 6.33411 11.4996L6.33412 13.4303C6.33413 13.4937 6.33414 13.5482 6.33171 13.5978C6.28123 14.6252 5.45966 15.4468 4.43225 15.4972C4.38269 15.4997 4.32818 15.4996 4.26475 15.4996L3.83411 15.4996C3.80588 15.4996 3.77792 15.4997 3.75023 15.4997C3.36938 15.5002 3.04044 15.5005 2.75355 15.4135C2.11434 15.2196 1.61413 14.7194 1.42023 14.0802C1.3332 13.7933 1.3336 13.4644 1.33405 13.0835C1.33408 13.0558 1.33411 13.0279 1.33411 12.9996V8.58639C1.33411 8.55604 1.3341 8.5261 1.33409 8.49655C1.33387 7.81741 1.33371 7.34759 1.45749 6.90536C1.56678 6.51491 1.74639 6.14768 1.98749 5.8217C2.26057 5.45248 2.63153 5.16416 3.16775 4.74739C3.19108 4.72926 3.21472 4.71089 3.23867 4.69225L4.97201 3.3441C5.01037 3.31427 5.04817 3.28483 5.08545 3.25581C5.91144 2.61272 6.48077 2.16946 7.12962 1.99378Z" fill="white"></path>
              </svg>
            </a>
          </li>
          <li><a href="<?php echo get_the_permalink(23); ?>"><?php echo get_the_title(23); ?></a></li>
          <li><span><?php echo get_the_title(); ?></span></li>
        </ul>
      </div>
      <div class="page-intro__logo"> <img src="assets/img/single-case-studies/single-case-studies-intro/logo-intro.png" alt=""></div>
      <h1 class="page-intro__title">200% increase in conversion rate for Lovato Compan</h1>
    </div>
  </div>
</div>
<div class="container">
  <div class="single-case-studies">
    <div class="single-case-studies__main">
      <div class="case-rangers">
        <?php echo get_template_part('template-parts/single-case-studio/rangers'); ?>
      </div>
      <div class="case-description">
        <?php if (have_posts()) : ?>
            <?php the_post(); ?>
            <?php the_content(); ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
      <div class="case-info">
        <h3 class="case-info__subtitle subtitle">Strategies</h3>
        <div class="case-info__list">
          <ul class="list">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Gravida elit et libero, varius congue risus quisque enim.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Sit quis vitae, gravida aliquam condimentum.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Praesent et facilisis nam mus senectus massa dignissim.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Fermentum diam elementum viverra proin.</span>
            </li>
          </ul>
        </div>
        <p class="text">Enim, vel massa odio diam. Blandit massa gravida feugiat elementum id nec sed leo. Nisi in ornare lectus eget. Urna, risus, consectetur volutpat lorem purus. Velit aliquet nibh vitae maecenas. Consectetur neque ut aliquam eros, purus enim dignissim aenean vitae. Ultrices fames augue mattis tortor est justo, pharetra nibh risus. Facilisi at porttitor volutpat natoque proin amet, nulla. Vivamus ut lobortis sagittis curabitur tellus convallis eget netus vitae. </p><img src="assets/img/single-case-studies/case-info/case-info.jpg" alt="">
        <h3 class="case-info__subtitle subtitle">Resieved goals</h3>
        <div class="case-info__list">
          <ul class="list">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Bibendum malesuada mauris, id nisl enim diam.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Nam id in non sed cras purus nunc et.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Neque tortor, pellentesque amet est, eu accumsan condimentum nulla.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Mauris orci, cursus nisl odio est adipiscing gravida magna eget.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Sit turpis sit ultrices viverra adipiscing malesuada.</span>
            </li>
          </ul>
        </div>
        <h3 class="case-info__subtitle subtitle">Results</h3>
        <div class="case-info__list">
          <ul class="list">
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Mauris dignissim blandit cursus imperdiet accumsan lorem vel, tortor.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Quis mauris vel felis convallis nulla dignissim.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Cursus sit platea ac posuere non interdum in.</span>
            </li>
            <li>
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                <path fill-rule="evenodd" clip-rule="evenodd" d="M14.4708 3.52827C14.7311 3.78862 14.7311 4.21073 14.4708 4.47108L6.47075 12.4711C6.2104 12.7314 5.78829 12.7314 5.52794 12.4711L1.52794 8.47108C1.26759 8.21073 1.26759 7.78862 1.52794 7.52827C1.78829 7.26792 2.2104 7.26792 2.47075 7.52827L5.99935 11.0569L13.5279 3.52827C13.7883 3.26792 14.2104 3.26792 14.4708 3.52827Z" fill="#7772F1"></path>
              </svg><span>Mattis pellentesque vel, venenatis, urna, quis ut.</span>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="single-case-studies__sidebar">
    <?php echo get_template_part('template-parts/case-studies/case-aside'); ?> 
      <ul class="category-list">
        <li>#SEO</li>
        <li>#research</li>
        <li>#payed_traffic</li>
      </ul>
      <div class="case-share">
        <h3 class="case-share__title">Share:</h3>
        <ul class="case-share__list">
          <li><a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M14.6354 0.836822L12.321 0.833008C9.72086 0.833008 8.04054 2.60392 8.04054 5.34487V7.42513H5.71352C5.51244 7.42513 5.34961 7.59259 5.34961 7.79915V10.8132C5.34961 11.0198 5.51263 11.187 5.71352 11.187H8.04054V18.7925C8.04054 18.9991 8.20337 19.1663 8.40445 19.1663H11.4405C11.6416 19.1663 11.8045 18.9989 11.8045 18.7925V11.187H14.5253C14.7264 11.187 14.8892 11.0198 14.8892 10.8132L14.8903 7.79915C14.8903 7.69997 14.8519 7.60499 14.7837 7.5348C14.7156 7.46461 14.6227 7.42513 14.5262 7.42513H11.8045V5.66166C11.8045 4.81407 12.0011 4.38379 13.0759 4.38379L14.635 4.38322C14.8359 4.38322 14.9987 4.21576 14.9987 4.00939V1.21065C14.9987 1.00447 14.8361 0.837204 14.6354 0.836822Z" fill="#787A80"></path>
              </svg></a></li>
          <li><a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M18.75 4.8106C18.1059 5.08388 17.4148 5.26922 16.6887 5.35196C17.4301 4.92683 17.9976 4.25252 18.2666 3.45149C17.5711 3.84519 16.8035 4.13106 15.9855 4.28603C15.3305 3.61695 14.3988 3.2002 13.3653 3.2002C11.3827 3.2002 9.77523 4.73942 9.77523 6.63674C9.77523 6.90583 9.80694 7.16865 9.86819 7.41997C6.88501 7.2765 4.23973 5.90797 2.46928 3.82843C2.1598 4.33523 1.98374 4.92576 1.98374 5.55613C1.98374 6.74878 2.618 7.8011 3.58033 8.41677C2.992 8.39793 2.43866 8.24296 1.95423 7.98537V8.0283C1.95423 9.69317 3.19213 11.0826 4.83353 11.3989C4.5328 11.4764 4.21568 11.5193 3.88761 11.5193C3.6558 11.5193 3.43161 11.4973 3.2118 11.4554C3.66889 12.8219 4.99429 13.8156 6.56463 13.8428C5.33657 14.7642 3.7881 15.3119 2.10624 15.3119C1.81646 15.3119 1.53103 15.2951 1.25 15.2647C2.83893 16.2417 4.7253 16.8113 6.75273 16.8113C13.3566 16.8113 16.9665 11.5738 16.9665 7.0315L16.9544 6.5865C17.6597 6.1048 18.2699 5.49959 18.75 4.8106Z" fill="#787A80"></path>
              </svg></a></li>
          <li><a href="#">
              <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                <path d="M18.3285 18.3337L18.3327 18.333V12.2205C18.3327 9.23019 17.6889 6.92671 14.1931 6.92671C12.5125 6.92671 11.3848 7.84894 10.9243 8.72324H10.8757V7.20588H7.56115V18.333H11.0125V12.8232C11.0125 11.3726 11.2875 9.96977 13.0841 9.96977C14.8542 9.96977 14.8806 11.6253 14.8806 12.9163V18.3337H18.3285Z" fill="#787A80"></path>
                <path d="M1.94101 7.20657H5.39657V18.3337H1.94101V7.20657Z" fill="#787A80"></path>
                <path d="M3.6674 1.66699C2.56254 1.66699 1.66602 2.56352 1.66602 3.66838C1.66602 4.77324 2.56254 5.68852 3.6674 5.68852C4.77227 5.68852 5.66879 4.77324 5.66879 3.66838C5.6681 2.56352 4.77157 1.66699 3.6674 1.66699Z" fill="#787A80"></path>
              </svg></a></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<section class="freeseo">
  <div class="container">
    <div class="freeseo__wrap">
      <div class="freeseo__img"><img src="assets/img/freeseo/freeseo.svg" alt=""></div>
      <div class="freeseo__form">
        <h2 class="freeseo__title">Get a Free SEO Analysis!</h2>
        <div class="form">
          <form action="">
            <div class="form__wrap">
              <div class="form__group">
                <label for="">Name</label>
                <input type="text" placeholder="Your name">
              </div>
              <div class="form__group">
                <label for="">Email</label>
                <input type="text" placeholder="Your working email">
              </div>
            </div>
            <div class="form__group">
              <label for="">Your website URL</label>
              <input type="text" placeholder="http://yoursite.com">
            </div>
            <div class="form__footer">
              <div class="form__privacy">
                <input class="form__checkbox" id="checkbox" type="checkbox">
                <label for="checkbox">I agree to receive communications from Createx SEO Agency</label>
              </div>
              <button class="form__submit btn" disabled="true">Get a free analysis</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="single-case-studies__footer">
  <div class="container">
    <section class="comment">
      <h2 class="comment__title title">What our clients say</h2>
      <div class="comment__wrap">
        <div class="comment__item">
          <div class="comment__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, amet lectus quam viverra mus lobortis
            fermentum amet, eu. Pulvinar eu sed purus facilisi. Vitae id turpis tempus ornare turpis quis non. Congue
            tortor in euismod vulputate etiam eros. Pulvinar neque pharetra arcu diam maecenas diam integer in.
          </div>
          <div class="comment__profile">
            <div class="comment__avatar"><img src="assets/img/comment/avatar-1.jpg" alt=""></div>
            <div class="comment__description">
              <h3 class="comment__name">Courtney Alexander</h3>
              <p class="comment__status">Position, Company name</p>
            </div>
          </div>
        </div>
        <div class="comment__item">
          <div class="comment__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, amet lectus quam viverra mus lobortis
            fermentum amet, eu. Pulvinar eu sed purus facilisi. Vitae id turpis tempus ornare turpis quis non. Congue
            tortor in euismod vulputate etiam eros. Pulvinar neque pharetra arcu diam maecenas diam integer in.
          </div>
          <div class="comment__profile">
            <div class="comment__avatar"><img src="" alt=""></div>
            <div class="comment__description">
              <h3 class="comment__name">Courtney Alexander</h3>
              <p class="comment__status">Position, Company name</p>
            </div>
          </div>
        </div>
        <div class="comment__item">
          <div class="comment__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, amet lectus quam viverra mus lobortis
            fermentum amet, eu. Pulvinar eu sed purus facilisi. Vitae id turpis tempus ornare turpis quis non. Congue
            tortor in euismod vulputate etiam eros. Pulvinar neque pharetra arcu diam maecenas diam integer in.
          </div>
          <div class="comment__profile">
            <div class="comment__avatar"><img src="assets/img/comment/avatar-1.jpg" alt=""></div>
            <div class="comment__description">
              <h3 class="comment__name">Courtney Alexander</h3>
              <p class="comment__status">Position, Company name</p>
            </div>
          </div>
        </div>
        <div class="comment__item">
          <div class="comment__text">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Justo, amet lectus quam viverra mus lobortis
            fermentum amet, eu. Pulvinar eu sed purus facilisi. Vitae id turpis tempus ornare turpis quis non. Congue
            tortor in euismod vulputate etiam eros. Pulvinar neque pharetra arcu diam maecenas diam integer in.
          </div>
          <div class="comment__profile">
            <div class="comment__avatar"><img src="" alt=""></div>
            <div class="comment__description">
              <h3 class="comment__name">Courtney Alexander</h3>
              <p class="comment__status">Position, Company name</p>
            </div>
          </div>
        </div>
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
</div>
<?php get_footer(); ?>
