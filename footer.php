<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

$blog_info    = get_bloginfo( 'name' );

?>
			</main><!-- #main -->
		</div><!-- #primary -->
	</div><!-- #content -->

	<!-- < ?php get_template_part( 'template-parts/footer/footer-widgets' ); ?> -->

	<footer id="colophon" class="site-footer row">

	<?php if ( has_custom_logo() && ! $show_title ) : ?>
		<div class="site-logo"><?php the_custom_logo(); ?></div>
	<?php endif; ?>

		<div>
		<h5><?php echo esc_html( $blog_info ); ?></h5>
		<p>A fansite for Honkai Impact 3rd</p>
		<small><i>Christopher Ellis 2022</i></small>
		</div>
	</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
