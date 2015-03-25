<?php
/*
Template Name: Videos
*/
get_header(); ?>

<main class="page page-videos page_container">

	<?php while ( have_posts() ) : the_post(); ?>

		<header class="page_header page-video_header">

			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

				<div class="page_hero">
					<?php the_post_thumbnail(); ?>
				</div>

			<?php endif; ?>

			<h1 class="page_title"><?php the_title(); ?></h1>
			
		</header>

		<section class="page-videos_content page_content">
			<?php the_content(); ?>
		</section>

		<section class="videoGallery">
			
<?php

			// check if the repeater field has rows of data
			if( have_rows('video_entries') ):
				
				//Counting
				$cnt = 0;
				$total = count(get_field('video_entries'));

			 	// loop through the rows of data
			    while ( have_rows('video_entries') ) : the_row();

			    	if($cnt%2 == 0){
			    		echo '<div class="l-row">';
			    	}

				        // display a sub field value
				    	echo '<article class="l-col_hlf videoGallery_video">';
				    		echo '<div class="h-ombed">';
				    			the_sub_field('individual_video');
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