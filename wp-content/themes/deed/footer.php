			</div><!-- END CONTAINER -->
		</div><!-- END FLUID CONTAINER -->


		<footer class="container-fluid">


					<nav class="row">
						<div class="col-sm-12">
							<?php wp_nav_menu( array( 'theme_location' => 'footer-menu',  'container_class' => 'footer_menu' ) ); ?>
						</div>
					</nav>
					<div class="row">
						<span>
							<h4><a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a></h4>
						</span>
					</div>

		</footer>
    <!-- WP FOOTER -->
  	<?php wp_footer(); ?>

</body>
</html>
