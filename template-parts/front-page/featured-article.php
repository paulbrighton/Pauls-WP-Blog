<div class="featured-article">
  <div class="o-container">
    <h2><?php the_field('featured_article_title') ?></h2>
  </div>
  <div class="o-container featured-article__container">
    <div class="o-row">
      <div class="o-row__column o-row__column--span-12">
        
        <div>
          <?php $my_query = new WP_Query('showposts=1'); ?>
          <?php while ($my_query->have_posts()) : $my_query->the_post(); ?>
            <div class="featured-article__header">
              <a href="<?php the_permalink(); ?>" class="c-front-page__featured_article c-front-page__featured_article">
                <h3><?php the_title(); ?></h3>
              </a>
            </div>

            <div class="img">
              <?php the_post_thumbnail('full'); ?>
            </div>
            <div class="featured-article__footer">
              <div class="featured-article__excerpt">
                <?php the_excerpt(); ?>
              </div>
              <a href="<?php the_permalink(); ?>" class="featured-article__read-more">Read more...</a>
            </div>
            <?php wp_reset_query(); ?>
          <?php endwhile; ?>

        </div>
      </div>
    </div>
  </div>
</div>