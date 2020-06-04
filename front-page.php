<?php
/**
 * The template for displaying the home page
 *
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Sea_to_Sky_Rapids
 */

get_header(); ?>

<main id="primary" class="site-main">

	<div class="home-banner">
		<?php while ( have_posts() ) : the_post(); ?>
			<?php if ( function_exists ( 'get_field' ) ) :
				the_post_thumbnail('full');
				if ( get_field( 'banner_slogan' ) ) : ?>
					<h1><?php the_field( 'banner_slogan' ); ?></h1>
				<?php endif;
			endif; ?>

			<!-- Book now link -->
			<?php $shop_page_url = get_permalink( woocommerce_get_page_id( 'shop' ) ); ?>
			<a href=<?php echo $shop_page_url ?>>
				<p class="book-now-button">Book Now</p>
			</a>
	</div><!-- end home-banner-->

			<?php 
			the_content();
			get_template_part ( 'template-parts/content-our-tours' );
			get_template_part( 'template-parts/testimonials' ); 
			
		endwhile; ?>
			</main><!-- #main -->

<?php
get_footer();
