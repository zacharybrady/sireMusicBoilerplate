<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Siren
 * @version 3.0
 */

get_header(); ?>

<main class="page page-post">

	<?php while ( have_posts() ) : the_post(); ?>

		<?php get_template_part( 'content', get_post_format() ); ?>
		<?php comments_template(); ?>

	<?php endwhile; ?>

</main>


<?php get_footer(); ?>