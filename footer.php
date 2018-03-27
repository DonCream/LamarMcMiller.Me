<?php
/**
 * The template for displaying the footer
 * @package LamarMcMiller.Me
 */
?>

	</div><!-- #content -->
<footer id="colophon" class="main-footer">
	<div class="container-fluid">
	 <div class="row justify-content-between align-items-center">
		 <div class="col-md-3">
		 	<?php if(dynamic_sidebar('footer-sidebar-1')) : else : endif; ?>
		 </div>
		 <div class="col-md-3">
		  <?php if(dynamic_sidebar('footer-sidebar-2')) : else : endif; ?>
		</div>
		<div class="col-md-3">
		  <?php if(dynamic_sidebar('footer-sidebar-3')) : else : endif; ?>
		</div>
	  <div class="col-md-3">
		  <div class="">
			  <ul class="icons footer-icons">
				<li class="list-inline-item">
					<a href="facebook.com/doncream"><i class="fa fa-facebook-official"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="https://twitter.com/DonCream"><i class="fa fa-twitter"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="https://instagram.com/Doncream"><i class="fa fa-instagram"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="https://instagram.com/Doncream"><i class="fa fa-linkedin"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="https://instagram.com/Doncream"><i class="fa fa-youtube"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="https://instagram.com/Doncream"><i class="fa fa-pinterest"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="github.com/doncream"><i class="fa fa-github"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="codepen.io/doncream"><i class="fa fa-codepen"></i></a>
				</li>
				<li class="list-inline-item">
					<a href="dribbble.com/doncream"><i class="fa fa-dribbble"></i></a>
				</li>
		  </div>
		  <div class="site-info">
		  	<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'lm' ) ); ?>">
		  		<?php
		  		/* translators: %s: CMS name, i.e. WordPress. */
		  		printf( esc_html__( 'Powered by %s', 'lm' ), 'WordPress' );
		  		?>
		  	</a>
		  	<span class="sep"> | </span>
		  		<?php
		  		/* translators: 1: Theme name, 2: Theme author. */
		  		printf( esc_html__( 'Theme: %1$s by %2$s.', 'lm' ), 'LM', '<a href="http://webjelly.net">Web Jelly</a>' );
		  		?>
		  </div><!-- .site-info -->
</div><!--col end -->



</div><!-- row end -->
</div><!-- container end -->
</footer><!-- #colophon -->
</div><!-- #page -->

 <?php wp_footer(); ?>

</body>
</html>
