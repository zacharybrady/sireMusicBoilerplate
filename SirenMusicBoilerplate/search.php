<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Siren
 * @version 3.0
 */

get_header(); ?>


<main class="page page-search page_container">

	<section class="loop loop-main">
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