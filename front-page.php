<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package bsw.io
 */

get_header(); ?>

	<div id="intro-wrap">
		<div id="intro" class="preload darken more-button">
			<div class="intro-item" style="background-image: url(http://placehold.it/1800x600/ddd/fff&text=bsw.io);">
				<div class="caption">
					<h2>Thinker &amp; Doer</h2>
					<p>Doing and Thinking.</p>
				</div><!-- caption -->
				<div class="photocaption">
					<h4>Shot by <a href="http://danielezedda.com/">Daniele Zedda</a></h4>
				</div><!-- photocaption -->
			</div>
		</div><!-- intro -->
	</div><!-- intro-wrap -->

	<div id="main">

<?php if(get_field('display_about')) : ?>
		<section class="row section">
			<div class="row-content buffer even clear-after">
				<div class="custom-carousel" data-autoplay="5000" data-pagination="true" data-transition="fade" data-autoheight="false">

				<?php
					$about = get_field('about_blurbs');
				?>
				<?php if( $about ): ?>
					<?php foreach( $about as $post): ?>
						<?php setup_postdata($post); ?>
						<div class="carousel-item">
							<?php if( get_field('image') ): ?>
							<div class="column four">
								<img src="<?php the_field('image'); ?>" />
							</div>
							<div class="column eight last">
							<?php else : ?>
							<div class="column twelve last">
							<?php endif; ?>
								<h3><?php the_field('headline'); ?></h3>
								<p><?php the_field('description'); ?></p>
							</div>
						</div><!-- carousel-item -->
					<?php endforeach; ?>
				<?php endif; ?>	
				</div>
			</div>
		</section>
		<?php wp_reset_postdata(); ?>
<?php endif; ?>

		<section class="row section">
			<div class="row-content buffer even clear-after">
				<div class="section-title"><h3>Latest Works</h3></div>
				<div class="grid-items portfolio-section preload">
					<article class="item column three" data-groups='["fun", "icons"]'>
						<figure><img src="http://placehold.it/800x600/ddd/fff&text=bsw.io" alt=""></figure>
						<a class="overlay" href="#">
							<div class="overlay-content">
								<div class="post-type"><i class="icon icon-picture"></i></div>
								<h2>The House</h2>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div><!-- overlay-content -->
						</a><!-- overlay -->
					</article>
					<article class="item column six" data-groups='["lightbox", "minimal"]'>
						<figure><img src="http://placehold.it/800x600/ddd/fff&text=bsw.io" alt=""></figure>
						<a class="overlay" href="#">
							<div class="overlay-content">
								<div class="post-type"><i class="icon icon-video"></i></div>
								<h2>Telephone Love</h2>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div><!-- overlay-content -->
						</a><!-- overlay -->
					</article>
					<article class="item column three" data-groups='["fun", "icons"]'>
						<figure><img src="http://placehold.it/800x600/ddd/fff&text=bsw.io" alt=""></figure>
						<a class="overlay" href="#">
							<div class="overlay-content">
								<div class="post-type"><i class="icon icon-picture"></i></div>
								<h2>Weapon</h2>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div><!-- overlay-content -->
						</a><!-- overlay -->
					</article>
					<article class="item column three" data-groups='["web-design", "minimal"]'>
						<figure><img src="http://placehold.it/800x600/ddd/fff&text=bsw.io" alt=""></figure>
						<a class="overlay" href="#">
							<div class="overlay-content">
								<div class="post-type"><i class="icon icon-news"></i></div>
								<h2>Robot Calendar 2013</h2>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div><!-- overlay-content -->
						</a><!-- overlay -->
					</article>
					<article class="item column three" data-groups='["advertising", "lightbox", "web-design"]'>
						<figure><img src="http://placehold.it/800x600/ddd/fff&text=bsw.io" alt=""></figure>
						<a class="overlay" href="#">
							<div class="overlay-content">
								<div class="post-type"><i class="icon icon-video"></i></div>
								<h2>All of the Lights</h2>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div><!-- overlay-content -->
						</a><!-- overlay -->
					</article>
					<article class="item column three" data-groups='["infographics", "web-design"]'>
						<figure><img src="http://placehold.it/800x600/ddd/fff&text=bsw.io" alt=""></figure>
						<a class="overlay" href="#">
							<div class="overlay-content">
								<div class="post-type"><i class="icon icon-picture"></i></div>
								<h2>To resolve 2013</h2>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div><!-- overlay-content -->
						</a><!-- overlay -->
					</article>
					<article class="item column three" data-groups='["advertising", "infographics"]'>
						<figure><img src="http://placehold.it/800x600/ddd/fff&text=bsw.io" alt=""></figure>
						<a class="overlay" href="#">
							<div class="overlay-content">
								<div class="post-type"><i class="icon icon-camera"></i></div>
								<h2>The Essentials</h2>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div><!-- overlay-content -->
						</a><!-- overlay -->
					</article>
					<article class="item column three" data-groups='["fun", "icons"]'>
						<figure><img src="http://placehold.it/800x600/ddd/fff&text=bsw.io" alt=""></figure>
						<a class="overlay" href="#">
							<div class="overlay-content">
								<div class="post-type"><i class="icon icon-news"></i></div>
								<h2>Music</h2>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div><!-- overlay-content -->
						</a><!-- overlay -->
					</article>
					<article class="item column three" data-groups='["advertising", "fun"]'>
						<figure><img src="http://placehold.it/800x600/ddd/fff&text=bsw.io" alt=""></figure>
						<a class="overlay" href="#">
							<div class="overlay-content">
								<div class="post-type"><i class="icon icon-speaker-on"></i></div>
								<h2>Moka</h2>
								<p>Consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
							</div><!-- overlay-content -->
						</a><!-- overlay -->
					</article>
					<div class="shuffle-sizer three"></div>
				</div><!-- grid-items -->
				<div class="more-btn"><a class="button transparent aqua" href="#">Browse Portfolio</a></div>
			</div>
		</section>

<?php if(get_field('display_skills')) : ?>
		<section class="row section <?php the_field('text_color'); ?>" style="background-color: <?php the_field('background_color'); ?>">
			<div class="row-content buffer even clear-after">
				<div class="section-title"><h3>Skills</h3></div>
				<p class="centertxt"><?php the_field('intro'); ?></p>
				<?php
					$skills = get_field('skills');
				?>
				<?php if( $skills ): ?>
					<?php foreach( $skills as $post): ?>
						<?php setup_postdata($post); ?>
						<div class="chart" data-percent="<?php the_field('percentage'); ?>" data-bar-color="<?php the_field('color'); ?>" data-animate="2000">
							<div class="chart-content">
								<div class="percent"></div>
								<div class="chart-title"><?php the_title(); ?></div>
							</div><!-- chart-content -->
						</div><!-- chart -->
					<?php endforeach; ?>
				<?php endif; ?>	
			</div>
		</section>
		<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php if(get_field('display_experience')) : ?>
		<section class="row section">
			<div class="row-content buffer even clear-after">
				<div class="timeline-label column six">
					<h4><?php the_field('experience_title'); ?></h4>
					<p><?php the_field('experience_description'); ?></p>
					<a class="button transparent aqua" href="<?php the_field('linkedin_profile'); ?>">View on Linkedin</a>
				</div><!-- timeline-label -->
				<?php
					$experiences = get_field('experiences');
					usort($experiences, function($a, $b) {
					    return strcmp($b->start_date,$a->start_date);
					});
				?>
				<?php if( $experiences ): ?>
				<div class="timeline column six last">
					<?php $currentYear = 0; ?>
					<?php foreach( $experiences as $post): ?>
						<?php 
							setup_postdata($post);
							$year = substr(get_field('start_date'), 0, 4);
						?>
						<?php if ($currentYear != $year) : ?>
							<?php if ($currentYear != 0) : ?>
								</div><!-- year -->
							<?php endif; ?>
							<?php $currentYear = $year; ?>
							<div class="year">
								<time datetime="<?php echo $curretYear; ?>"><?php echo $currentYear; ?></time>
						<?php endif; ?>
								<div class="experience">
									<span class="circle"></span>
									<div class="experience-img"><img src="<?php the_field('company_logo'); ?>"></div>
									<div class="experience-info clear-after">
										<h5><?php the_field('company_name'); ?></h5>
										<div class="role"><?php the_field('role'); ?></div>
										<?php 
											$startDate = DateTime::createFromFormat('Ymd', get_field('start_date'))->format('F Y');;
											$endDate = get_field('end_date') ? DateTime::createFromFormat('Ymd', get_field('end_date'))->format('F Y') : 'Current';
										?>
										<p> <?php echo $startDate ?> – <?php echo $endDate?> <?php the_field('location'); ?></p>
									</div><!-- experience-info -->
								</div><!-- experience -->
					<?php endforeach; ?>
				</div><!-- timeline -->
				<?php endif; ?>	
				</div>
			</div>
		</section>
		<?php wp_reset_postdata(); ?>
<?php endif; ?>

		<section class="row section">
			<div class="row-content buffer even clear-after">
				<div class="section-title"><h3>Contact</h3></div>
				<div class="column nine">
				<?php echo do_shortcode("[gravityform id=1 title=false description=false ajax=true tabindex=49]"); ?>
				<!--
					<form class="contact-section">
						<span class="pre-input"><i class="icon icon-user"></i></span>
						<input class="name plain buffer" type="text" placeholder="Full name">
						<span class="pre-input"><i class="icon icon-email"></i></span>
						<input class="email plain buffer" type="email" placeholder="Email address">
						<textarea class="plain buffer" placeholder="Don't forget that kindness is all!"></textarea>
						<input class="plain button red" type="submit" value="Send">
					</form>
					-->
				</div>
				<div class="column three last">
					<div class="widget">
						<h4>Location</h4>
						<p>
							Charleston, SC<br />
							And sometimes Washtingon, DC
						</p>
					</div>
					<div class="widget">
						<h4>I am Social</h4>
						<ul class="inline meta-social">
							<li><a href="http://twitter.com/bswatson" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
							<li><a href="http://facebook.com/bswatson" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
							<li><a href="https://www.linkedin.com/in/bswatson" class="linkedin-share border-box"><i class="fa fa-linkedin fa-lg"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</section>

<?php if(get_field('display_map')) : ?>
		<?php $location = get_field('location'); ?>
		<section class="row section">
			<div class="map" id="map_1" data-maplat="<?php echo $location['lat']; ?>" data-maplon="<?php echo $location['lng']; ?>" data-mapzoom="<?php the_field('map_zoom'); ?>" data-color="<?php the_field('map_color'); ?>" data-height="22.222" data-img="<?php echo get_template_directory_uri() . '/img/marker.png'; ?>" data-info="Based in <?php the_field('location_display_name'); ?>"></div>
		</section>
<?php endif; ?>
	</div><!-- id-main -->
<?php get_footer(); ?>