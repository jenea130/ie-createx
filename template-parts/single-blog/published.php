<div class="published">
  <div class="published__wrap">
    <div class="published__item">
      <div class="published__label">Published</div>
      <div class="published__content">
        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
          <path fill-rule="evenodd" clip-rule="evenodd" d="M6.24935 1.04199C6.70959 1.04199 7.08268 1.41509 7.08268 1.87533V2.292L12.916 2.29201V1.87533C12.916 1.41509 13.2891 1.04199 13.7493 1.04199C14.2096 1.04199 14.5827 1.41509 14.5827 1.87533V2.29202L15.6244 2.29202C17.4653 2.29202 18.9577 3.78441 18.9577 5.62535V15.6253C18.9577 17.4663 17.4653 18.9587 15.6243 18.9587L4.37435 18.9587C2.5334 18.9587 1.04102 17.4663 1.04102 15.6253L1.04102 7.50049L1.04102 5.62533C1.04102 3.78438 2.5334 2.29199 4.37436 2.292L5.41602 2.292V1.87533C5.41602 1.41509 5.78911 1.04199 6.24935 1.04199ZM5.41602 3.95867L4.37435 3.95866C3.45388 3.95866 2.70768 4.70485 2.70768 5.62533V6.66699H17.291V5.62535C17.291 4.70488 16.5448 3.95869 15.6244 3.95869L14.5827 3.95868V4.37533C14.5827 4.83556 14.2096 5.20866 13.7494 5.20866C13.2891 5.20866 12.916 4.83556 12.916 4.37533V3.95868L7.08268 3.95867V4.37533C7.08268 4.83556 6.70959 5.20866 6.24935 5.20866C5.78911 5.20866 5.41602 4.83556 5.41602 4.37533V3.95867ZM17.291 8.33366H2.70768L2.70768 15.6253C2.70768 16.5458 3.45387 17.292 4.37435 17.292H15.6243C16.5448 17.292 17.291 16.5458 17.291 15.6253V8.33366Z" fill="#1E212C"></path>
        </svg>
          <?php
          $date = get_the_date('F j, Y', get_the_ID());
          ?>
          <div class="published__text"><?php echo $date; ?></div>
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
      <?php echo get_template_part('template-parts/single-blog/case-share') ?>
    </div>
  </div>
</div>