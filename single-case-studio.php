<?php
get_header();

$terms = get_the_terms(get_the_ID(), 'tag-case-studies');
?>
<div class="page-intro-single-case-studies">
  <?php echo get_template_part('template-parts/single-case-studies/page-intro'); ?>
</div>
<div class="container">
  <div class="single-case-studies">
    <div class="single-case-studies__main">
      <div class="case-rangers">
        <?php echo get_template_part('template-parts/single-case-studies/rangers'); ?>
      </div>
      <div class="case-content">
        <?php if (have_posts()) : ?>
          <?php the_post(); ?>
          <?php the_content(); ?>
          <?php wp_reset_postdata(); ?>
        <?php endif; ?>
      </div>
    </div>
    <div class="single-case-studies__sidebar">
      <?php echo get_template_part('template-parts/case-studies/case-aside'); ?>
      <ul class="category-list">
        <?php foreach ($terms as $term) : ?>
          <?php
          $name = $term->name;
          $slug = $term->slug;
          ?>
          <li><?php echo $name; ?></li>
        <?php endforeach; ?>
      </ul>
      <?php echo get_template_part('template-parts/single-blog/case-share') ?>
    </div>
  </div>
</div>
<?php echo get_template_part('template-parts/home/freeseo'); ?>
<div class="single-case-studies__footer">
  <div class="container">
    <?php echo get_template_part('template-parts/home/comment'); ?>
  </div>
  <?php echo get_template_part('template-parts/home/studies'); ?>
</div>
<?php get_footer(); ?>