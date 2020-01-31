<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php get_header(); ?>

<div id="column-center">	
	
	<?php //get_template_part('topo','page') ?>
    
    <img src="<?php echo bloginfo('template_url')?>/images/topo-pagina.png" style="width:590px; height:170px;" alt="" />
	
    <div class="posts-list">                   
		
		<h1 class="category-title"><?php echo  single_cat_title( '', false ); ?></h1>
		
		<?php get_template_part( 'loop', 'category' ); ?>
	
	</div>
		
</div>

<div id="column-right">
    <?php get_template_part( 'loop', 'widget_espetaculos' ); ?>	
</div>

<?php get_footer(); ?>