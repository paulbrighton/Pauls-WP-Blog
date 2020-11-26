<?php get_header(); ?>
<div class="o-container">
  <div class="o-row home-intro">
    <div class="home-intro__text o-row__column o-row__column--span-12 o-row__column--span-6@medium u-flex u-flex-direction-column">
      <h1><?php the_field('home_intro_title') ?></h1>
      <h2><?php the_field('home_intro_sub_title') ?></h2>
      <?php echo wpautop( get_field("home_intro_text")) ?>
    </div>
    <div class="o-row__column o-row__column--span-12 o-row__column--span-6@medium">
      <div class="home-intro__image">
        <?php
        $image = get_field('home_intro_image');
        $size = 'full';
        if ($image) {
          echo wp_get_attachment_image($image, $size);
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('template-parts/front-page/articles'); ?>

<?php get_footer(); ?>