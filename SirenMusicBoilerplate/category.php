<?php
/**
 * The template for displaying Category pages.
 *
 * @package WordPress
 * @subpackage Siren
 * @version 3.0
 */

get_header(); ?>


<main class="page page-archive page_container">

	<header class="page_header page-archive_header">
		<h1 class="page_title page-archive_title">
			<?php printf( __( 'Category Archives: %s', 'siren' ), single_cat_title( '', false ) ); ?>
		</h1>
	</header>

	<section class="loop loop-archive">
		<?php if ( have_posts() ) : ?>

		<?php while ( have_posts() ) : the_post(); ?>
			<?php get_template_part( 'content', get_post_format() ); ?>
		<?php endwhile; ?>

		<?php siren_paging_nav(); ?>

		<?php else : ?>
			<?php get_template_part( 'content', 'none' ); ?>
		<?php endif; ?>
	</section>

</main>


<?php get_footer(); ?>