<?php get_header(); ?>

<div class="o-container">
  <h1><?php the_field('about_title'); ?></h1>
  <div class="c-about-intro">
    <?php the_field('about_intro') ?>
  </div>
</div>
<div class="o-container c-about__container">
  <div class="o-row">
    <div class="o-row__column o-row__column--span-4@medium c-about--left">
      <?php the_field('skills_content') ?>
    </div>
    <div class="o-row__column o-row__column--span-8@medium c-about--right">
      <?php the_field('work_experience_content') ?>
    </div>
  </div>
</div>

<?php get_footer(); ?>