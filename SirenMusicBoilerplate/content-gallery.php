<?php
/**
 * The template for displaying posts in the Gallery post format.
 *
 * @package WordPress
 * @subpackage Siren
 * @version 3.0
 */
?>

<article class="post post-gallery"  >

	<header class="post_header">

		<?php if ( has_post_thumbnail() && ! post_password_required() ) : ?>
			<div class="post_hero">
				<?php the_post_thumbnail(); ?>
			</div>
		<?php endif; ?>

		<?php if ( is_single() ) : ?>
			<h1 class="post_title"><?php the_title(); ?></h1>
		<?php else : ?>
			<h2 class="post_title post-preview_title">
				<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
		<?php endif; ?>

		
		<div class="post_meta">
			<?php siren_post_meta(); ?>
		</div>

	</header>

	<?php if ( !is_single() ) :  ?>
		<div class="post_summary post-gallery_summary">
			<?php if ( get_post_gallery() ) :
		        echo get_post_gallery();
		    endif; ?>
			<a href="<?php the_permalink(); ?>" class="post_readMore btn" rel="bookmark">Read More</a>
		</div>
	<?php else : ?>
		<div class="post_content post-gallery_summary">
			<?php the_content(); ?>
		</div>
	<?php endif; ?>

</article>
