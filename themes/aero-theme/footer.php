<?php
/**
 * The template for displaying the footer.
 * Contains the closing of the #content div and all content after.
 *
 * @package Aero-theme
 */

?>

<!--</div> --> <!-- #content -->
</div><!-- .grid-container -->

<footer id="colophon" class="site-footer grid-container grid-container-padded" role="contentinfo">

	<?php if ( is_active_sidebar( 'sidebar-2' ) ) { ?>
		<aside class="rtp-footer-widgets row grid-x grid-margin-x">
			<?php dynamic_sidebar( 'sidebar-2' ); ?>
		</aside>
	<?php } ?>

	<div class="site-info row grid-x grid-margin-x">
		<div class="cell column">
			<span class="aero-theme-copyright-text">
				<?php
				$theme_uri = 'https://aeromattic.com/';

				/* translators: 1: Theme name, 2: Theme author. */
				$default        = sprintf( esc_html__( '%1$s by %2$s', 'aero-theme' ), esc_html__( 'aero-theme', 'aero-theme' ), '<a href="' . esc_url( $theme_uri ) . '" rel="designer">' . esc_html__( 'Aeromattic', 'aero-theme' ) . '</a>' );
				$copyright_text = get_theme_mod( 'aero_theme_copyright_text', $default );

				echo $copyright_text; /* WPCS: xss ok. */
				?>
			</span>
			<span class="sep">&nbsp;|&nbsp;</span>
			<a class="aero-theme-author-footer" href="<?php echo esc_url( 'https://aeromattic.com/' ); ?>" target="_blank" rel="noopener"><?php esc_html_e( 'aero-theme', 'aero-theme' ); ?></a>
		</div>
	</div><!-- .site-info -->
</footer><!-- #colophon -->
</div><!-- #page -->

<div class="aero-theme-back-to-top" id="aero-theme-back-to-top"></div>

<?php wp_footer(); ?>

</body>
</html>
