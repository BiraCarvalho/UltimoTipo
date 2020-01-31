<?php

/**
 * Template Name: Home Page
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

get_header(); ?>

<div id="home">							

	<div id="banners-section">

		<div id="banner-top">
      <a href="/site/espetaculos">
      		<img src="<?php echo bloginfo('template_url'); ?>/images/home-banner-topo.jpg" width="830" height="230" />
      </a>
		</div>

				<!-- #banner-pricipal -->
		<?php get_template_part( 'loop', 'banner' ); ?>

	</div>
	
	<div id="decoration-1">
		
		<?php  get_template_part( 'loop', 'noticias_destaques' ); ?>
		
		<div id="events-section">
        	<?php get_template_part( 'loop', 'agenda' ); ?>
        </div>
        
	</div><!-- #decoration-1 -->				

</div><!-- #home -->

<?php get_footer(); ?>

