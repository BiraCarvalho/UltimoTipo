<?php

/**
 * The loop that displays a page.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-page.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */

?>

<?php 

	$category_name = 'noticias';

	$args = array(
		'post_type'	 	 => 'post',
		'post_status'	 => 'publish',
		'posts_per_page' => 2,
		'category_name'	 => $category_name,
        'orderby'        => 'date', 
        'order'          => 'DESC'
	);	


	$posts_sticky = new WP_Query( $args ); 

function noticias_excerpt_length( $length ) {
	return 30;
}
add_filter( 'excerpt_length', 'noticias_excerpt_length');


?>



<div id="news-section">						
	
	<h1><a href="<?php echo home_url( 'category/'.$category_name ); ?>" >TIPO NOTÍCIAS</a></h1>
	
	<ul>	
	<?php if ( $posts_sticky->have_posts() ) : ?>		
		<?php while ( $posts_sticky->have_posts() ) : ?>
	
			<?php $posts_sticky->the_post(); ?>
		
			<li>
				
				<?php if($thumb = get_post_thumbnail_id( $post->ID )): ?>
					<?php $image_attributes = wp_get_attachment_image_src( $thumb, 'post-thumbnail' ); ?>
					<a href="<?php the_permalink(); ?>">
						<img src="<?php echo $image_attributes[0] ?>" width="270" height="122" title="<?php the_title(); ?>" />
					</a>		
				<?php endif; ?>
				
				<h2><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
				
				<span class="data"> <?php the_time(get_option('date_format')); ?></span>
				
				<?php the_excerpt() ?>
			</li>	
		
		<?php endwhile; // end of the loop. ?>
	<?php endif ?>
	</ul>	
</div><!-- #posts-sticky -->


<?php remove_filter( 'excerpt_length', 'noticias_excerpt_length'); ?>