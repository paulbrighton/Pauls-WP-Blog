<?php get_header(); ?>
<div class="o-container c-four0four u-margin-bottom-40 u-margin-top-40 o-single-post-<?php echo $layout; ?>">
  <div class="o-row">
    <div class="o-row__column o-row__column--span-12">
      <?php get_template_part('template-parts/post/content', 'none'); ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>