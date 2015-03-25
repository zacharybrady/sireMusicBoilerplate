<?php
/*
Template Name: Home
*/
get_header(); ?>


<main class="page page-home page_container">

	<?php while ( have_posts() ) : the_post(); ?>

		<header class="page_header page-home_header">

			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

				<div class="page_hero">
					<?php the_post_thumbnail(); ?>
				</div>

			<?php endif; ?>

			<h1 class="page_title"><?php the_title(); ?></h1>
			
		</header>

		<section class="page_content">
			<?php the_content(); ?>
		</section>

	<?php endwhile; ?>
	
</main>		

<?php get_footer(); ?>