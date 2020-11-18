<?php get_header(); ?>
<div class="o-container">
  <div class="o-row home-intro">
    <div class="home-intro__text o-row__column o-row__column--span-12 o-row__column--span-6@medium u-flex u-flex-direction-column">
      <h1><?php the_field('home_intro_title') ?></h1>
      <h2><?php the_field('home_intro_sub_title') ?></h2>
      <p><?php the_field('home_intro_text') ?></p>
    </div>
    <div class="o-row__column o-row__column--span-12 o-row__column--span-6@medium">
      <div class="home-intro__image">
        <?php
        $image = get_field('home_intro_image');
        $size = 'full'; // (thumbnail, medium, large, full or custom size)
        if ($image) {
          echo wp_get_attachment_image($image, $size);
        }
        ?>
      </div>
    </div>
  </div>
</div>

<?php get_template_part('template-parts/front-page/featured-article'); ?>

<div class="c-front-page__articles">
  <div class="o-container">
    <div class="o-row">
      <div class="o-row__column o-row__column--span-12">
        <h2><?php the_field('articles_title') ?></h2>
        <?php
        $args = array(
          'post_type'         => 'post',
          'posts_per_page'    => 10,
          'offset'            => 1

        );
        $the_query2 = new WP_Query($args);
        ?>
        <?php
        if ($the_query2->have_posts()) :
          while ($the_query2->have_posts()) : $the_query2->the_post();
        ?>
            <a href="<?php the_permalink(); ?>" class="c-front-page__article">
              <?php the_post_thumbnail('full'); ?>
              <h3><?php the_title(); ?></h3>
              <p><?php the_excerpt(); ?></p>
              <a href="<?php the_permalink(); ?>" class="c-front-page__article">Read more...</a>
            </a>
        <?php
          endwhile;
        endif;
        wp_reset_query();
        ?>
      </div>
    </div>
  </div>
</div>
<?php get_footer(); ?>