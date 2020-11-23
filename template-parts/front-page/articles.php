<div class="c-articles">
  <div class="o-container">
    <div class="o-row">
      <div class="o-row__column o-row__column--span-12">
        <h2><?php the_field('articles_title') ?></h2>
      </div>
    </div>

    <div class="o-row u-justify-spaced">
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
            <div class="c-articles__card o-row__column o-row__column--span-12 o-row__column--span-6@medium">
              <div class="c-articles__card-header">
                <a href="<?php the_permalink(); ?>">
                  <h3><?php the_title(); ?></h3>
                </a>
              </div>
              <div class="c-articles__card-image">
                <a href="<?php the_permalink(); ?>">
                  <?php the_post_thumbnail('full'); ?>
                </a>
              </div>
              <div class="c-articles__card-footer">
                <div class="c-articles__card-excerpt">
                  <?php the_excerpt(); ?>
                </div>
                <a href="<?php the_permalink(); ?>" class="c-articles__card-link"><?php the_field('article_link_text') ?></a>
              </div>
            </div>

        <?php
          endwhile;
        endif;
        wp_reset_query();
        ?>
    </div>
  </div>
</div>