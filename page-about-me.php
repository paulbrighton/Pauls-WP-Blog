<?php
/*
* Template name: About Me
*/
?>
<?php get_header(); ?>
<div class="c-about__container">
  <div class="o-container">
    <div class="o-row">
      <div class="o-row__column o-row__column--span-4@small c-about--left">
        <div class="">
          
          <div class="c-about-intro c-about__section">
            <h1><?php the_field('about_title'); ?></h1>
            <?php the_field('about_intro') ?>
          </div>
          <div class="c-about__other c-about__section">
            <h2><?php the_field('other_courses_title') ?></h2>
            <?php the_field('other_courses_content') ?>
          </div>
          <div class="c-about__skills c-about__section">
            <h2><?php the_field('skills_title') ?></h2>
            <?php the_field('skills_content') ?>
          </div>
          <div class="c-about__interests c-about__section">
            <h2><?php the_field('interests_title') ?></h2>
            <?php the_field('interests_content') ?>
          </div>
        </div>
      </div>
      <div class="o-row__column o-row__column--span-8@small c-about--right">
        <div class="c-about__work-experience c-about__section">
          <h2><?php the_field('work_experience_title'); ?></h2>
          <?php the_field('work_experience_content') ?>
        </div>
        <div class="c-about__education c-about__section">
          <h2><?php the_field('education_title'); ?></h2>
          <?php the_field('education_content') ?>
        </div>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>