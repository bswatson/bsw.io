<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package bsw.io
 */
?>

</main><!-- main -->

<footer role="contentinfo">
	<div class="row">
		<div class="row-content buffer clear-after">
			<section id="top-footer">
				<?php dynamic_sidebar( 'footer-widgets' ); ?>
				<div class="widget meta-social column three">
					<h4>Follow Me</h4>
					<ul class="inline">
						<li><a href="http://twitter.com/bswatson" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
						<li><a href="http://facebook.com/bswatson" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
						<li><a href="https://www.linkedin.com/in/bswatson" class="linkedin-share border-box"><i class="fa fa-linkedin fa-lg"></i></a></li>
					</ul>
				</div>
			</section><!-- top-footer -->
			<section id="bottom-footer">
				<p class="keep-left">&copy; <?php echo date( 'Y' ); ?> <a href="<?php echo bloginfo( 'url' ); ?>" alt="Brian S. Watson">Brian S. Watson</a>. <?php _e('All Rights Reserved.', 'bsw-io'); ?></p>
				<p class="keep-right">
					<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'bsw-io' ) ); ?>"><?php printf( __( 'Proudly powered by %s', 'bsw-io' ), 'WordPress' ); ?></a>
					<span class="sep"> | </span>
					<?php printf( __( 'Theme: %1$s built by %2$s.', 'bsw-io' ), 'bsw.io', '<a href="http://bsw.io" rel="designer">Brian Watson</a>' ); ?>
				</p>
			</section><!-- bottom-footer -->
		</div><!-- row-content -->
	</div><!-- row -->
</footer>

<?php wp_footer(); ?>

</body>
</html>
