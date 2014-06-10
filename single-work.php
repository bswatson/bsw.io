<?php
/**
 * The Template for displaying all single posts.
 *
 * @package bsw.io
 */
?>
<?php get_header(); ?>
	
	<div id="main" class="row">
		<?php while ( have_posts() ) : the_post(); ?>
		<div class="row-content buffer-left buffer-right buffer-bottom">
			<div class="post-area clear-after">
				<?php get_template_part( 'content', 'single-work' ); ?>
			</div><!-- post-area -->

			<? /*
			<div class="meta-social">
				<ul class="inline center">
					<li><a href="#" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
					<li><a href="#" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
					<li><a href="#" class="pinterest-share border-box"><i class="fa fa-pinterest fa-lg"></i></a></li>
				</ul>
			</div>


			<div class="related clear-after">
				<h4>Related Posts</h4>
				<div class="item">
					<figure><img src="http://placehold.it/600x600/ddd/fff&text=Beetle%20image" alt=""></figure>
					<a class="overlay" href="#">
						<div class="overlay-content">
							<div class="post-type"><i class="icon icon-search"></i></div>
							<h2>Spicemode</h2>
							<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div><!-- overlay-content -->
					</a><!-- overlay -->								
				</div>
				<div class="item">
					<figure><img src="http://placehold.it/600x600/ddd/fff&text=Beetle%20image" alt=""></figure>
					<a class="overlay" href="#">
						<div class="overlay-content">
							<div class="post-type"><i class="icon icon-search"></i></div>
							<h2>In the end</h2>
							<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div><!-- overlay-content -->
					</a><!-- overlay -->								
				</div>
				<div class="item last">
					<figure><img src="http://placehold.it/600x600/ddd/fff&text=Beetle%20image" alt=""></figure>
					<a class="overlay" href="#">
						<div class="overlay-content">
							<div class="post-type"><i class="icon icon-search"></i></div>
							<h2>Moove</h2>
							<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
						</div><!-- overlay-content -->
					</a><!-- overlay -->
				</div>
			</div>
		*/	?>
		</div><!-- row-content -->
		<?php endwhile; // end of the loop. ?>
	</div><!-- row -->

<?php get_footer();