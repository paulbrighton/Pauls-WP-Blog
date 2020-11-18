</main>

<div class="c-footer__contact">
  <div class="o-container">
  <h3>Contact Me</h3>
  <p>If you have a project that you would like to discuss or have any positions that would suit me, please use the form below to get in touch.</p>
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