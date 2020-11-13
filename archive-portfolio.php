<?php get_header(); ?>
<div class="o-container u-margin-bottom-40">
  <div class="o-row">
    <div class="o-row__column o-row__column--span-12">
      <header>
        <h1><?php the_field('portfolio_header_title', 131); ?></h1>
        <h2><?php the_field('portfolio_header_subtitle', 131) ?></h2>
      </header>
    </div>

    <div class="o-row__column o-row__column--span-12 o-row__column--span-<?php echo is_active_sidebar('primary-sidebar') ? '8' : '12'; ?>@small">
      <main role="main">
        <div class="o-container c-city-guides__articles">
          <div class="o-row">
            <div class="o-row__column o-row__column--span-12">
              <?php if (!is_single()) { ?>
                <?php get_template_part('template-parts/portfolio/portfolio-card-layout', '_themename') ?>
              <?php } ?>
            </div>
          </div>
        </div>
      </main>
    </div>
    <?php if (is_active_sidebar('primary-sidebar')) { ?>
      <div class="o-row__column o-row__column--span-12 o-row__column--span-4@small">
        <?php get_sidebar() ?>
      </div>
    <?php } ?>
  </div>
</div>
<?php get_footer(); ?>