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