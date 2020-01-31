<?php
/**
 * The loop that displays posts.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop.php or
 * loop-template.php, where 'template' is the loop context
 * requested by a template. For example, loop-index.php would
 * be used if it exists and we ask for the loop with:
 * <code>get_template_part( 'loop', 'index' );</code>
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php query_posts($query_string . '&category_name=fotos') ?>

<?php if(have_posts()): ?> 

	<?php while(have_posts()): ?>

		<?php the_post(); ?>

		<li id="post-<?php the_ID(); ?>" >
			
		<?php if($thumb = get_post_thumbnail_id( $post->ID )): ?>
			<?php $image_attributes = wp_get_attachment_image_src( $thumb, 'post-thumbnail' ); ?>
			<a class="thumb" href="<?php the_permalink(); ?>" title="<?php the_title(); ?>" >
				<img src="<?php echo $image_attributes[0] ?>" width="250" height="114" title="<?php the_title(); ?>" />
				<span class="titulo"><?php the_title(); ?></span> 
			</a>		
		<?php endif; ?>		
	
	</li>

	<?php endwhile; // End the loop. Whew. ?>

	<?php wp_pagenavi(); ?>                

<?php endif; ?>