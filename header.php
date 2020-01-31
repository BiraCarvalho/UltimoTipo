<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <title> 
    <?php
		
		/*
		 * Print the <title> tag based on what is being viewed.
		 */
		global $page, $paged;
		
		wp_title( '|', true, 'right' );
		
		// Add the blog name.
		bloginfo( 'name' );
		
		// Add the blog description for the home/front page.
		$site_description = get_bloginfo( 'description', 'display' );
		
		if ( $site_description && ( is_home() || is_front_page() ) )
			echo " | $site_description";
		
		// Add a page number if necessary:
		if ( $paged >= 2 || $page >= 2 )
			echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );
    ?>
    </title>
        
    <link rel="profile" href="http://gmpg.org/xfn/11" />
    <link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
    <link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
        
    <?php
    /* Always have wp_head() just before the closing </head>
     * tag of your theme, or you will break many plugins, which
     * generally use this hook to add elements to <head> such
     * as styles, scripts, and meta tags.
     */
    wp_head();	
    ?>
    
    <!--<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>-->
    
    <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery-1.7.1.min.js"></script>
    
    <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox.pack.js"></script>
    <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox-media.js?v=1.0.6"></script>
    
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox.css" />
    <script type="text/javascript">
        $(document).ready(function() { 
            
            $(".gallery-item a").attr('rel','gallery').fancybox();
            
			$('.iframe').fancybox({
				openEffect  : 'none',
				closeEffect : 'none',
				helpers : {
					media : {}
				}
			});
        })
    </script>    

    <script type="text/javascript" src="<?php echo bloginfo('template_url'); ?>/js/jquery.cycle.all.js"></script>

</head>

<body <?php body_class(); ?>>
<div id="wrapper">
	
	<div id="columns-left">
		
		<div id="branding">
			<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home"><img src="<?php echo bloginfo('template_url'); ?>/images/logo.png" /></a>
		</div><!-- #branding -->
		
		<div id="access" role="navigation">
		  <?php /* Allow screen readers / text browsers to skip the navigation menu and get right to the good stuff */ ?>
			<div class="skip-link screen-reader-text"><a href="#content" title="<?php esc_attr_e( 'Skip to content', 'twentyten' ); ?>"><?php _e( 'Skip to content', 'twentyten' ); ?></a></div>
			<?php /* Our navigation menu. If one isn't filled out, wp_nav_menu falls back to wp_page_menu. The menu assiged to the primary position is the one used. If none is assigned, the menu with the lowest ID is used. */ ?>
			<?php wp_nav_menu( array( 'container_id' => 'cssmenu', 'container_class' => 'cssmenu', 'theme_location' => 'primary', 'walker' => new CSS_Menu_Maker_Walker() ) ); ?>	
			
			<div class="clearfix"></div>

			<div id="menu-midias">			
				<a href="<?php echo home_url( '/fotos' ); ?>"			id="menu-midias-fotos" 		class="botao"	></a>
				<a href="<?php echo home_url( '/videos' ); ?>"			id="menu-midias-videos" 	class="botao"	></a>
			</div>

		</div><!-- #access -->
				
		<div id="menu-social">
			<p>Acompanhe o Último Tipo</p>
			<a href="http://www.facebook.com/grupoultimotipo" 	target="_blank" id="menu-social-facebook" 		class="botao" title="Facebook"></a>
			<a href="http://www.youtube.com/jaracarvalho"  		target="_blank" id="menu-social-youtube"  		class="botao" title="Youtube"></a>
			<a href="https://soundcloud.com/ultimo-tipo/" 		target="_blank" id="menu-social-soundcloud" 	class="botao" title="Soundcloud"></a>
		</div>
		
		<div id="creditos">
			<a href="http://www.communitas.com.br" target="_blank" >Communitas</a> | Último Tipo
		</div>
		
</div><!-- #columns-left -->
	