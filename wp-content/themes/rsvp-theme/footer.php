<footer role="foottext">
	<?php wp_footer(); ?>
	<p>&copy; <?php echo date('Y'); ?></p>

    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/flowtype.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/plugins.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/main.js"></script>
    <script src="<?php bloginfo('template_url'); ?>/js/nlform.js"></script>

	<script>
		var nlform = new NLForm( document.getElementById( 'nl-form' ) );
	</script>

</footer>
</div>
</body>
</html>