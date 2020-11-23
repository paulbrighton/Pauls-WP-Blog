<?php get_header(); ?>
<div class="c-portfolio">
  <div class="o-container">
    <div class="o-row">
      <div class="o-row__column o-row__column--span-12">
        <div class="c-portfolio__header">
          <h1><?php the_field('portfolio_header_title', 203); ?></h1>
          <h2><?php the_field('portfolio_header_subtitle', 203) ?></h2>
        </div>
      </div>
    </div>
  </div>

  <?php get_template_part('template-parts/portfolio/portfolio-card-layout', '_themename') ?>
</div>



<?php get_footer(); ?>