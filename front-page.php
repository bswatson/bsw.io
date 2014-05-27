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

	<section class="row section">
		<div class="row-content buffer even clear-after">
			<div class="custom-carousel" data-autoplay="5000" data-pagination="true" data-transition="fade" data-autoheight="false">
				<div class="carousel-item">
					<div class="column four">
						<img src="http://placehold.it/800x300/ddd/fff&text=bsw.io" alt="">
					</div>
					<div class="column eight last">
						<h3>Carousel Item 1</h3>
						<p>Carousel Description 1</p>
					</div>
				</div><!-- carousel-item -->
				<div class="carousel-item">
					<div class="column four">
						<img src="http://placehold.it/800x300/ddd/fff&text=bsw.io" alt="">
					</div>
					<div class="column eight last">
						<h3>Carousel Item 2</h3>
						<p>Carousel Description 2</p>
					</div>
				</div><!-- carousel-item -->
				<div class="carousel-item">
					<div class="column four">
						<img src="http://placehold.it/800x300/ddd/fff&text=bsw.io" alt="">
					</div>
					<div class="column eight last">
						<h3>Carousel Item 3</h3>
						<p>Carousel Description 3</p>
					</div>
				</div><!-- carousel-item -->
			</div>
		</div>
	</section>

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

	<section class="row section text-light" style="background-color: #C3C3C3;">
		<div class="row-content buffer even clear-after">
			<div class="section-title"><h3>Skills</h3></div>
			<p class="centertxt">Skills Description.<br>With some goals.</p>
			<div class="chart" data-percent="83" data-bar-color="#1abc46" data-animate="2000">
				<div class="chart-content">
					<div class="percent"></div>
					<div class="chart-title">Back-end</div>
				</div><!-- chart-content -->
			</div><!-- chart -->
			<div class="chart" data-percent="76" data-bar-color="#0abce0" data-animate="2500">
				<div class="chart-content">
					<div class="percent"></div>
					<div class="chart-title">Front-end</div>
				</div><!-- chart-content -->
			</div><!-- chart -->
			<div class="chart" data-percent="95" data-bar-color="#a1ad1c" data-animate="3000">
				<div class="chart-content">
					<div class="percent"></div>
					<div class="chart-title">Caffeine</div>
				</div><!-- chart-content -->
			</div><!-- chart -->
		</div>
	</section>

	<section class="row section">
		<div class="row-content buffer even clear-after">
			<div class="timeline-label column six">
				<h4>Work experience</h4>
				<p>Specialties : Lorem ipsum dolor sit amet, consectetur adipiscing elit. Curabitur et arcu suscipit, condimentum leo vestibulum, sollicitudin quam. Proin quis massa nec urna dictum elementum. Nulla mattis neque vitae est varius, nec mattis ante laoreet. Pellentesque nec arcu imperdiet, rutrum risus at, hendrerit augue..</p>
				<a class="button transparent aqua">View on Linkedin</a>
			</div><!-- timeline-label -->
			<div class="timeline column six last">
				<div class="year">
					<time datetime="2013">2013</time>
					<div class="experience">
						<span class="circle"></span>
						<div class="experience-img"><img src="http://placehold.it/120x120/ddd/fff&text=bsw.io" alt=""></div>
						<div class="experience-info clear-after">
							<h5>Company 1</h5>
							<div class="role">Role 1</div>
							<p>October 2013 – November 2013 Anywhere, USA</p>
						</div><!-- experience-info -->
					</div><!-- experience -->
					<div class="experience">
						<span class="circle"></span>
						<div class="experience-img"><img src="http://placehold.it/120x120/ddd/fff&text=bsw.io" alt=""></div>
						<div class="experience-info clear-after">
							<h5>Company 2</h5>
							<div class="role">Role 2</div>
							<p>October 2013 – November 2013 Anywhere, USA</p>
						</div><!-- experience-info -->
					</div><!-- experience -->
				</div><!-- year -->
				<div class="year">
					<time datetime="2012">2012</time>
					<div class="experience">
						<span class="circle"></span>
						<div class="experience-img"><img src="http://placehold.it/120x120/ddd/fff&text=bsw.io" alt=""></div>
						<div class="experience-info clear-after">
							<h5>Company 3</h5>
							<div class="role">Role 3</div>
							<p>October 2012 – November 2012 Anywhere, USA</p>
						</div><!-- experience-info -->
					</div><!-- experience -->
					<div class="experience">
						<span class="circle"></span>
						<div class="experience-img"><img src="http://placehold.it/120x120/ddd/fff&text=bsw.io" alt=""></div>
						<div class="experience-info clear-after">
							<h5>Company 4</h5>
							<div class="role">Role 4</div>
							<p>October 2012 – November 2012 Anywhere, USA</p>
						</div><!-- experience-info -->
					</div><!-- experience -->
				</div><!-- year -->
				<div class="year">
					<time datetime="2011">2011</time>
					<div class="experience">
						<span class="circle"></span>
						<div class="experience-img"><img src="http://placehold.it/120x120/ddd/fff&text=bsw.io" alt=""></div>
						<div class="experience-info clear-after">
							<h5>Company 5</h5>
							<div class="role">Role 5</div>
							<p>October 2011 – November 2011 Anywhere, USA</p>
						</div><!-- experience-info -->
					</div><!-- experience -->
				</div><!-- year -->
			</div><!-- timeline -->
		</div>
	</section>

	<?php /*
<section class="row section">
    <div class="row-content buffer even clear-after">
        <div class="section-title"><h3>Frankie's Dribbble Shots</h3></div>
        <div class="dribbble-items portfolio-section preload" data-username="frankiefreesbie" data-elements="8">
        </div><!-- dribbble-items -->
        <div class="more-btn"><a class="button transparent pink" href="http://dribbble.com/JustinMezzell">View all Shots</a></div>
    </div>
</section>

<section class="row section text-light" style="background-color:#FF605F;">
    <div class="row-content buffer even clear-after">
        <div class="testimonial-slider centertxt" data-autoplay="5000" data-pagination="true" data-transition="fade" data-autoheight="false">
            <div class="quote">
                <div class="column twelve last">
                    <p>"It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout."</p>
                    <div class="author">John Lennon</div>
                </div><!-- column -->
            </div><!-- quote -->
            <div class="quote">
                <div class="column twelve last">
                    <p>"Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy."</p>
                    <div class="author">Fabrizio De Andr&egrave;</div>
                </div><!-- column -->
            </div><!-- quote -->
            <div class="quote">
                <div class="column twelve last">
                    <p>"There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour."</p>
                    <div class="author">B.B. King</div>
                </div><!-- column -->
            </div><!-- quote -->
        </div><!-- testimonial-slider -->
    </div>
</section>
*/ ?>

	<section class="row section">
		<div class="row-content buffer even clear-after">
			<div class="section-title"><h3>Contact</h3></div>
			<div class="column nine">
				<form class="contact-section">
					<span class="pre-input"><i class="icon icon-user"></i></span>
					<input class="name plain buffer" type="text" placeholder="Full name">
					<span class="pre-input"><i class="icon icon-email"></i></span>
					<input class="email plain buffer" type="email" placeholder="Email address">
					<textarea class="plain buffer" placeholder="Don't forget that kindness is all!"></textarea>
					<input class="plain button red" type="submit" value="Send">
				</form>
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
						<li><a href="#" class="twitter-share border-box"><i class="fa fa-twitter fa-lg"></i></a></li>
						<li><a href="#" class="facebook-share border-box"><i class="fa fa-facebook fa-lg"></i></a></li>
						<li><a href="#" class="pinterest-share border-box"><i class="fa fa-pinterest fa-lg"></i></a></li>
					</ul>
				</div>
			</div>
		</div>
	</section>

	<section class="row section">
		<div class="map" id="map_1" data-maplat="32.8013293" data-maplon="-79.9428948" data-mapzoom="9" data-color="aqua" data-height="22.222" data-img="<?php echo get_template_directory_uri() . '/img/marker.png'; ?>" data-info="Based in Charleston, SC"></div>
	</section>

	</div><!-- id-main -->
<?php get_footer(); ?>