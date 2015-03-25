<?php
/*
Template Name: Store
*/
get_header(); ?>

<main class="page page-store page_container">

	<?php while ( have_posts() ) : the_post(); ?>

		<header class="page_header page-store_header">

			<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>

				<div class="page_hero">
					<?php the_post_thumbnail(); ?>
				</div>

			<?php endif; ?>

			<h1 class="page_title"><?php the_title(); ?></h1>
			
		</header>

		<section class="page-store_content page_content">
			<?php the_content(); ?>
		</section>

		<section class="products">
			
<?php

			// check if the repeater field has rows of data
			if( have_rows('products') ):

				//Counting
				$cnt = 0;
				$total = count(get_field('products'));

			 	// loop through the rows of data
			    while ( have_rows('products') ) : the_row();

			    	if($cnt%2 == 0){
			    		echo '<div class="l-row">';
			    	}

				        // display a sub field value
				    	echo '<article class="l-col_hlf products_single">';

				    			the_sub_field('product');


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