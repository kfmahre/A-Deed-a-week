			</div><!-- END CONTAINER -->
		</div><!-- END FLUID CONTAINER -->

		<a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
		<footer class="container-fluid">
			<div class="container">
				<div class="row">
					<?php if ( has_nav_menu( 'social' ) ) : ?>
						<nav class="social-navigation" role="navigation" aria-label="<?php esc_attr_e( 'Footer Social Links Menu', 'twentysixteen' ); ?>">
					<?php
						wp_nav_menu( array(
							'theme_location' => 'social',
							'menu_class'     => 'social-links-menu',
							'depth'          => 1,
							'link_before'    => '<span class="screen-reader-text">',
							'link_after'     => '</span>',
						) );
					?>
						</nav><!-- .social-navigation -->
					<?php endif; ?>
					<div class="row">
						<span class="site-title">
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>" rel="home"><?php bloginfo( 'name' ); ?></a>
						</span>
					</div>
				</div>
			</div>
		</footer>
    <!-- WP FOOTER -->
  	<?php wp_footer(); ?>
	</a>

</body>
</html>
