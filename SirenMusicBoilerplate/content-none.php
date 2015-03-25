<?php
/**
 * The template for displaying a "No posts found" message.
 *
 * @package WordPress
 * @subpackage Siren
 * @version 3.0
 */
?>

<div class="error post-error">
	<header class="error_header">
		<h1 class="error_title">
			<?php _e( 'Nothing Found', 'siren' ); ?>
		</h1>
	</header>
	
	<div class="error_content">
		<?php if ( is_search() ) : ?>
	
			<p><?php _e( 'Sorry, but nothing matched your search terms. Please try again with different keywords.', 'siren' ); ?></p>
			<?php siren_post_nav(); ?>
	
		<?php else : ?>
	
			<p><?php _e( 'It seems we can&rsquo;t find what you&rsquo;re looking for. Perhaps searching can help.', 'siren' ); ?></p>
			<?php get_search_form(); ?>
	
		<?php endif; ?>
	</div>
</div>
