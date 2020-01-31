<?php
/**
 * The template for displaying 404 pages (Not Found).
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php get_header(); ?>

<div id="column-center">
	
	<?php get_template_part('topo','page') ?>
	
	<div id="post-0" class="post error404 not-found hentry">
		<h1 class="entry-title"><?php _e( 'Not Found', 'twentyten' ); ?></h1>	
		<div class="entry-content"></div><!-- .entry-content -->
	</div><!-- #post-0 -->

</div><!-- column-center -->
	
<div id="column-right">
	<?php get_template_part( 'loop', 'widget_espetaculos' ); ?>	
</div><!-- column-right -->

<?php get_footer(); ?>