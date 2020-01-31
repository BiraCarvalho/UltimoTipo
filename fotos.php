<?php
/**
 * Template Name: Fotos
 *
 * A custom page template without sidebar.
 *
 * The "Template Name:" bit above allows this to be selectable
 * from a dropdown menu on the edit page screen.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<?php get_header(); ?>

<div id="column-center">	
	
	<?php get_template_part('topo','page') ?>
    
    <div class="hentry">                   
		
		<h1 class="entry-title">Fotos</h1>
		<ul class="fotos">
			<?php get_template_part( 'loop', 'fotos' ); ?>
		</ul>
	</div>
	

	<div class="entry-footer">
		<a class="voltar botao" onclick="history.back(-1)" >« Voltar</a>
	</div>		

</div>

<div id="column-right">
    <?php get_template_part( 'loop', 'widget_espetaculos' ); ?>	
</div>

<?php get_footer(); ?>
