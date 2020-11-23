</main>

<div class="c-footer__contact"id="contact-form">
  <div class="o-container">
  <h3><?php the_field('contact_title', 40); ?></h3>
  <p><?php the_field('contact_description', 40); ?></p>
  <?php echo do_shortcode('[contact-form-7 id="46" title="Contact form 1"]'); ?>
  </div>
</div>

<footer class="c-footer" id="footer" role="contentinfo">
    <div class="c-footer--top">
    <?php get_template_part('template-parts/footer/widgets') ?>
  </div>
  <div class="c-footer--bottom">
    <?php get_template_part('template-parts/footer/site-info') ?>
  </div>
</footer>

<?php wp_footer(); ?>
</body>

</html>