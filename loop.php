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

<?php if(have_posts()): ?> 

	<?php while(have_posts()): ?>

		<?php the_post(); ?>

		<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
			
		<?php

			$thumb = get_post_thumbnail_id($post->ID);

			if($thumb): 
				
				$image_img_tag = wp_get_attachment_image( $thumb, 'thumbnail' );

			else:

				$get_children_options = array( 
					'post_parent' 	 => $post->ID, 
					'post_type' 	 => 'attachment', 
					'post_mime_type' => 'image', 
					'orderby' 		 => 'menu_order', 
					'order' 		 => 'ASC', 
					'numberposts' => 999 
					);

				$images = get_children( $get_children_options );

				if($images):
					
					$total_images = count( $images );
					$image = array_shift( $images );
					$image_img_tag = wp_get_attachment_image( $image->ID, 'thumbnail' );

				endif;

			endif;
		?>

		<?php if($image_img_tag): ?>		
			<a class="entry-thumb" href="<?php the_permalink(); ?>"><?php echo $image_img_tag; ?></a>
		<?php endif; ?>
		
		<div class="entry-text <?php if($image_img_tag) echo 'com_imagem'; ?>">			
			
			<h2 class="entry-title">
				<a href="<?php the_permalink(); ?>" title="<?php printf( esc_attr__( 'Permalink to %s', 'twentyten' ), the_title_attribute( 'echo=0' ) ); ?>" rel="bookmark"><?php the_title(); ?></a>
			</h2>
			
			<?php if(in_category('noticias')){ ?>
			<p class="data"> <?php the_time(get_option('date_format')); ?></p>
			<?php } ?>
			
			<div class="entry-summary">
				<?php echo get_the_excerpt(); ?>
			</div><!-- .entry-summary -->
		
		</div>
	
	</div>

	<?php endwhile; // End the loop. Whew. ?>

	<?php wp_pagenavi(); ?>                

<?php endif; ?>