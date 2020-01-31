<?php
/**
 * The loop that displays a single post.
 *
 * The loop displays the posts and the post content. See
 * http://codex.wordpress.org/The_Loop to understand it and
 * http://codex.wordpress.org/Template_Tags to understand
 * the tags used in it.
 *
 * This can be overridden in child themes with loop-single.php.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.2
 */
?>

<?php if ( have_posts() ) while ( have_posts() ) : the_post(); ?>


	<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
		
		<h1 class="entry-title"><?php the_title(); ?></h1>

		<?php if(in_category('noticias')){ ?>
		<p class="data"> <?php the_time(get_option('date_format')); ?></p>
		<?php } ?>
		
		<div class="entry-content">
			<?php the_content(); ?>
		</div><!-- .entry-content -->
		
		<div class="entry-footer">
			<a class="voltar botao" onclick="history.back(-1)" >« Voltar</a>
		</div>

	</div><!-- #post-## -->
	
<?php endwhile; // end of the loop. ?>