<?php
/**
 * The template for displaying image attachments.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Siren
 * @version 3.0
 */

get_header(); ?>

<?php echo '<img src="' . wp_get_attachment_url() . '" />'; ?>




<?php get_footer(); ?>