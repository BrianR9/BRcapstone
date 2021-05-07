<?php
/**
 * The template for displaying the footer
 *
 * Contains the opening of the #site-footer div and added parent of br-site-footer and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since Twenty Twenty 1.0
 */

?>
		<footer id="br-site-footer">
			<div id="site-footer" role="contentinfo" class="header-footer-group">
				
							<!-- Global site tag (gtag.js) - Google Analytics -->
							<script async src="https://www.googletagmanager.com/gtag/js?id=G-HC6D6YDD3T"></script>
							<script>
							  window.dataLayer = window.dataLayer || [];
							  function gtag(){dataLayer.push(arguments);}
							  gtag('js', new Date());

							  gtag('config', 'G-HC6D6YDD3T');
							</script>
							<!-- END Global site tag (gtag.js) - Google Analytics -->
				
				<div class="section-inner">

					<div class="footer-credits">

						<p class="footer-copyright">&copy;
							<?php
							echo date_i18n(
								/* translators: Copyright date format, see https://www.php.net/date */
								_x( 'Y', 'copyright date format', 'twentytwenty' )
							);
							?>
							<a href="<?php echo esc_url( home_url( '/' ) ); ?>"><?php bloginfo( 'name' ); ?></a>
						</p><p>&nbsp;
						<a class='header_primary_default' href='https://searchandsocialagency.com/privacy-policy/'>Privacy Policy &nbsp;</a>&nbsp;|&nbsp;
						<a class='header_primary_default' href='https://searchandsocialagency.com/contact/'>Contact Us &nbsp;</a>&nbsp;
						</p>&nbsp;<!-- .footer-copyright -->

					<!-- BR media tag
						<p class="powered-by-wordpress">
							<a href="<?php echo esc_url( __( 'https://fenwaytrilogymedia.com/', 'twentytwenty' ) ); ?>">
								<?php _e( 'Designed by BR Media', 'twentytwenty' ); ?>
							</a>
						</p>
					-->	
						
			<!-- *** BR media tag moving this to top to the lefy  ***-->	
						
					<a class="to-the-top" href="#site-header">
						<span class="to-the-top-long">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'To the top %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-long -->
						<span class="to-the-top-short">
							<?php
							/* translators: %s: HTML character for up arrow. */
							printf( __( 'Up %s', 'twentytwenty' ), '<span class="arrow" aria-hidden="true">&uarr;</span>' );
							?>
						</span><!-- .to-the-top-short -->
					</a><!-- .to-the-top -->
					
					</div><!-- .footer-credits -->


				</div><!-- .section-inner -->
			</div>
		</footer><!-- #site-footer -->

		<?php wp_footer(); ?>

	</body>
</html>
