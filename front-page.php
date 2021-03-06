<?php
/**
 * The main template file
 * @package LamarMcMiller.Me
 */
get_header();
?>

<!-- Four Corners section -->
<section id="four-corners">

<div class="container box-1">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-md-6">
			<h1 id="about" class="display-1 text-center">About</h1>
			<p id="about-heading-text" class="text-center m-3"><?php the_field('about_description'); ?></p>
			<p class="text-center m-3"><small>well..It is my website, soo....</small></p>

		</div>
	</div>
</div>

<div class="container box-2">
	<div class="row">
		<div class="col-md-12">
			<p class="m-5 px-3">I am a web developer working out of Detroit, with a focus on utilizing open source technologies. Ive found that developing and open source skill set has decreased the barrier to entry in the web design/development space for creators and
				clients by lowering the cost of creating and maintaining wonderful web experiences.</p>

			<h3 class="m-5">Career</h3>

			<p class="m-5 px-3">I have worked in technology for over a decade, starting in desktop support, moving into server administration and incorporating web design in 2014. My focus on open source started in my server administration years, having worked with several
				versions of Linux servers. Utilizing those existing skills made developing and open source web design skill set a natural extension. </p>

			<h1 class="m-5">My Design Process</h1>

			<h3 class="m-5">Information Architechture</h3>

			<p class="m-5 px-3">The process begins by filling out a client/creative brief. Deciding the target audience.</p>
			<p class="mx-5 px-5"><span><span class="numbers">1.</span><strong class="tab-1">What need is this filling?</strong></span>
				<br>
				<span><span class="numbers">2.</span><strong class="tab-1">What do we have to offer?</strong> (information, products?)</span>
				<br>
				<span><span class="numbers">3.</span><strong class="tab-1">What do we want the visitor to do?</strong>
				<br>
				</span><span class="tab-2">(share something, buy something?)</span></p>
			<p class="m-5 px-3">By answering preliminary questions like these, we can establish a direction for your project, build a site map, decide on page layouts, sketch wireframes and prototype UI templates.</p>

			<h3 class="m-5">Content Gathering/Creation</h3>

			<p class="m-5 px-3">All sites require Then the process of gathering visual content begins by providing me with any logos, color schemes, artwork, rich media(audio, video) and graphics. I also assist with the creation of graphic design elements such as infographics,
				and audio/video editing content for your project.</p>

			<h3 class="m-5">Finalizing the Technology </h3>

			<p class="m-5 px-3">The services and equipment you use are important to the scale of your project. To CMS or not to CMS...SQL or noSQL. Tap into the power of web APIs. Different projects have different requirements. Different technologies offer different benefits.
				Together, we decide on the best technologies to use for your static site, web app or e-commerce storefront. By utilizing open source tech, this opens up the entire world of options for your project, minus the cost of proprietary technology
				services. </p>

			<h3 class="m-5">UX/Site Design </h3>

			<p class="m-5 px-3">Using the designated color scheme and media, I create the UI/UX elements, build a custom theme, pull it all together, while providing intermittent updates and screenshots of the work. Communication during this process is key to bringing
				your vision to life.</p>

			<h3 class="m-5">Compatability Testing</h3>

			<p class="m-5 px-3">Testing for responsiveness and cross-browser compatibility, basic SEO.</p>

			<h3 class="m-5">Revisions </h3>

			<p class="m-5 px-3">Didnt like that? I provide up to 3 revisions of the submitted work. My work also includes consulting on maintenance technology recommendations, graphic design services, social media marketing, copywriting and seo optimization.</p>
		</div>
	</div>
</div>

<div class="container box-3">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-md-6">
			<h1 id="work" class="display-1 text-center">Work</h1>
			<p id="work-heading-text" class="m-3"><p><?php the_field('work_description'); ?></p></p>
		</div>
	</div>
</div>

<div class="container box-4 ">
	<div class="row">
		<div class="col-md-12">
			<h2 class="pt-5 text-center">Gallery</h2>
			<p class="m-3 p-3 text-center">Themes and projects Ive created around the web.</p>
			<div class="row m-4">
				<div class="col-md-4 mb-2">
					<a href="http://localhost/wp-content/uploads/2018/03/webjelly.png" data-toggle="lightbox" data-gallery="img-gallery"><img class="img-fluid" src="http://localhost/wp-content/uploads/2018/03/webjelly.png">webjelly.net
						</a>
				</div>
				<div class="col-md-4 mb-2">
					<a href="http://placehold.it/300/f1b702/fff&text=image2" data-toggle="lightbox" data-gallery="img-gallery"><img class="img-fluid" src="http://placehold.it/600/f1b702/fff&text=image2"  alt="some more text">
						</a>
				</div>
				<div class="col-md-4 mb-2">
					<a href="http://placehold.it/300/f1b702/fff&text=image3" data-toggle="lightbox" data-gallery="img-gallery"><img class="img-fluid" src="http://placehold.it/600/f1b702/fff&text=image3"  alt="some more text">
						</a>
				</div>
			</div>
			<div class="row m-4">
				<div class="col-md-4 mb-2">
					<a href="http://placehold.it/300/f1b702/fff&text=image4" data-toggle="lightbox" data-gallery="img-gallery"><img class="img-fluid" src="http://placehold.it/600/f1b702/fff&text=image4"  alt="some more text">
						</a>
				</div>
				<div class="col-md-4 mb-2">
					<a href="http://placehold.it/300/f1b702/fff&text=image5" data-toggle="lightbox" data-gallery="img-gallery"><img class="img-fluid" src="http://placehold.it/600/f1b702/fff&text=image5"  alt="some more text">
						</a>
				</div>
				<div class="col-md-4 mb-2">
					<a href="http://placehold.it/300/f1b702/fff&text=image6" data-toggle="lightbox" data-gallery="img-gallery"><img class="img-fluid" src="http://placehold.it/600/f1b702/fff&text=image6"  alt="some more text">
						</a>
				</div>
			</div>

			<div class="row justify-content-center">
				<div class="col-xs-6">
					<ul class="icons">
						<li class="list-inline-item">
							<a href="https://github.com/DonCream"><i class="fa fa-github"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://codepen.io/DonCream/#"><i class="fa fa-codepen"></i></a>
						</li>
						<li class="list-inline-item">
							<a href="https://dribbble.com/DonCreamy"><i class="fa fa-dribbble"></i></a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="container box-5">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-md-6">
			<h1 id="blog" class="display-1 text-center">Blog</h1>
			<p id="blog-heading-text" class="m-3"><p><?php the_field('blog_description'); ?></p></p>
		</div>
	</div>
</div>

<div class="box-6">
	<h1 class="text-center pt-5 pb-3">Latest Blog Post</h1>
	<div class="container">
		<div class="row">
			<div class="col-sm-12 ">

				<?php
				    $args = array( 'numberposts' => '5' );
				    $recent_posts = wp_get_recent_posts( $args );

				    $i = 0;
				    foreach($recent_posts as $recent) {

						$excerpt = wp_trim_excerpt( $recent['post_content']);

				        echo '<div class="card mb-2"><h4 class="card-heading pl-4 pt-2"><a  href="' . get_permalink($recent["ID"]) . '" title="Look '.esc_attr($recent["post_title"]).'" >' .   $recent["post_title"].  ' </a> </h4>
								<img class="img-fluid">' . get_the_post_thumbnail($recent["ID"], 'thumbnail') . '
						  <p class="card-body">' . $excerpt . '</p>
							<a class="m-2 pl-3" href="' . get_permalink($recent["ID"]) . '"> Read More...</a>
						  </div> ';

				    $i++;
				    }

				    wp_reset_query();
				?>


				<a id="blog-link" class=" m-3" href="blog.html">View Full Blog...</a>
			</div>
		</div>
	</div>
</div>


<div class="container box-7">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-md-6">
			<h1 id="contact" class="display-1 text-center">Contact</h1>
			<p id="contact-heading-text" class="m-3"><p><?php the_field('contact_description'); ?></p></p>
		</div>
	</div>
</div>

<div class="container box-8">
	<div class="row h-100 justify-content-center align-items-center">
		<div class="col-md-6">
			<h1 class="pt-3 ">Work with Me</h1>
			<p class=""><p><?php the_field('contact_lead'); ?></p>
			<h3 class="">Phone</h3>
			<p class=""><p><?php the_field('contact_number'); ?></p>
			<h3 class="">Email</h3>
			<p class=""><p><?php the_field('contact_email'); ?></p>
			<div class="">
				<a class="btn btn-sm custom-btn text-white" data-toggle="modal" data-target="#contactModal">Contact Me</a>
			</div>
		</div>

		<div id="contactModal" class="modal fade" tabindex="0">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<h5 id="contactModalTitle" class="modal-title">Contact Me</h5>
						<button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
					</div>
					<div class="modal-body">
					<?php echo do_shortcode('[contact-form-7 id="1778" title="Contact form 1"]'); ?>
					</div>

				</div>
			</div>
		</div>

		<div class="row">
			<div class="col-md-8">
				<ul class="icons list-inline">
					<li class="list-inline-item">
						<a href="https://facebook.com/DonCream"><i class="fa fa-facebook-official"></i></a>
					</li>
					<li class="list-inline-item">
						<a href="https://twitter.com/DonCream"><i class="fa fa-twitter"></i></a>
					</li>
					<li class="list-inline-item">
						<a href="https://instagram.com/Doncream"><i class="fa fa-instagram"></i></a>
					</li>
					<li class="list-inline-item">
						<a href="https://www.linkedin.com/in/lamarmcmiller/"><i class="fa fa-linkedin"></i></a>
					</li>
					<li class="list-inline-item">
						<a href="https://www.youtube.com/channel/UCKCFNa4SRuAY2StW7eyUWaA?view_as=subscriber"><i class="fa fa-youtube"></i></a>
					</li>
					<li class="list-inline-item">
						<a href="https://www.pinterest.com/doncream/"><i class="fa fa-pinterest"></i></a>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
</section>

<?php get_footer(); ?>
