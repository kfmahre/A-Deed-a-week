			</div><!-- END CONTAINER -->
		</div><!-- END FLUID CONTAINER -->


		<footer class="container">


					<nav class="row">
						<div class="col-sm-12 footer_menu">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu',  'container_class' => 'footer_menu' ) ); ?>
						</div>
					</nav>
					<div class="row">
							<h4 class="extra-padding"><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h4>
					</div>

		</footer>
    <!-- WP FOOTER -->
  	<?php wp_footer(); ?>

</body>
</html>
