<?php
/**
 * The template for displaying posts in the Video post format.
 *
 * @package WordPress
 * @subpackage Siren
 * @version 3.0
 */
?>

<article class="post post-video" >

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


	<div class="post_content post-video_content">
		<?php the_content(); ?>
	</div>

</article>

