<footer class="row">

	<?php do_action( 'foundationpress_before_footer' ); ?>
	<?php dynamic_sidebar( 'footer-widgets' ); ?>
	<?php do_action( 'foundationpress_after_footer' ); ?>

</footer>

	<?php do_action( 'foundationpress_layout_end' ); ?>

	</div>

</div>

<?php wp_footer(); ?>
<?php do_action( 'foundationpress_before_closing_body' ); ?>

</body>

</html>
