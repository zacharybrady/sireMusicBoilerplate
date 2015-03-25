<?php
/*
Template Name: Music
*/
get_header(); ?>

<main class="page page-music page_container">

	<?php while ( have_posts() ) : the_post(); ?>

		<header class="page_header page-music_header">

			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

				<div class="page_hero">
					<?php the_post_thumbnail(); ?>
				</div>

			<?php endif; ?>

			<h1 class="page_title"><?php the_title(); ?></h1>
			
		</header>

		<section class="page-music_content page_content">
			<?php the_content(); ?>
		</section>

		<section class="musicGallery">
			
<?php

			// check if the repeater field has rows of data
			if( have_rows('albums') ):

				//Counting
				$cnt = 0;
				$total = count(get_field('albums'));

			 	// loop through the rows of data
			    while ( have_rows('albums') ) : the_row();

			    	if($cnt%2 == 0){
			    		echo '<div class="l-row">';
			    	}

				        // display a sub field value
				    	echo '<article class="l-col_hlf musicGallery_album">';

				    		echo '<div class="musicGallery_player">';
				    			the_sub_field('code_for_music_player');
				    		echo '</div>';

				    		echo '<div class="musicGallery_content">';
				    			the_sub_field('additional_content');
				    		echo '</div>';


				    	echo '</article>';

				    if($cnt%2 == 1 || $cnt == $total-1){
			    		echo '</div>';
			    	}

			        $cnt+=1;

			    endwhile;

			endif;

?>

		</section>

	<?php endwhile; ?>
	
</main>								

<?php get_footer(); ?>