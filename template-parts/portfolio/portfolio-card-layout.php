<div class="o-container">
  <div class="o-row u-justify-spaced">
    <?php
    $args = array(
      // get which post types that are to be used
      'post_type'         => 'Portfolio',
      'posts_per_page'    => 9,
      'order'         => 'asc',
      'post_status' => 'publish',
      'paged'         => $paged
    );
    $the_query = new WP_Query($args);

    if ($the_query->have_posts()) {
      while ($the_query->have_posts()) {
        $the_query->the_post(); ?>

        <div class="c-portfolio__card o-row__column o-row__column--span-12 o-row__column--span-6@medium">
          <div class="c-portfolio__card-content">
            <a href="<?php the_field('project_link'); ?>" target="_blank" rel="noopener noreferrer">
              <div class="c-portfolio__card-img">
                <?php
                $image = get_field('project_image');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                if ($image) {
                  echo wp_get_attachment_image($image, $size);
                }
                ?>
              </div>
            </a>

            <div class="c-portfolio__card-text">
              <a href="<?php the_field('project_link'); ?>" target="_blank" rel="noopener noreferrer">
                <h2 class="c-portfolio__card-title">
                  <?php the_field('project_title'); ?>
                </h2>
              </a>

              <div class="c-portfolio__card-text-languages">
                <h3><?php the_field('project_languages') ?></h3>
              </div>

              <div class="c-portfolio__card-text-flex-height">
                <?php echo wpautop(get_field("project_description")) ?>
              </div>

              <a class="c-portfolio__card-readmore" href="<?php the_field('project_link'); ?>" target="_blank" rel="noopener noreferrer"><?php the_field('project_link_text'); ?></a>
            </div>
          </div>
        </div>
    <?php
      }
    } else {
      get_template_part('template-parts/post/content', 'none');
    }

    wp_reset_postdata(); ?>
  </div>
</div>