
    </div>
  </section>
</section>

<footer class="row">
	<?php do_action('foundationPress_before_footer'); ?>
	<?php dynamic_sidebar("footer-widgets"); ?>

  <p>&#169; <?= date('Y') ?> Tamayo Web Solutions, LLC</p>

	<?php do_action('foundationPress_after_footer'); ?>
</footer>

<?php wp_footer(); ?>
<?php do_action('foundationPress_before_closing_body'); ?>
</body>
</html>