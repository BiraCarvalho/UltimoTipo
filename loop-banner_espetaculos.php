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



$image_path  = get_theme_root()."/".get_template()."/images/headers/";

$image_array = glob($image_path."*.jpg");

$image_count = count($image_array);

$image_src   = get_template_directory_uri()."/images/headers/".basename($image_array[mt_rand(0,$image_count-1)]);

?>

   

<div id="banner-espetaculos">			

    <div class="container">	        

        <a class="banner-item" href="/site/espetaculos">			        

        <img src="<?php echo $image_src; ?>" title="espetaculos" />

        </a>

    </div><!-- .container -->		

</div><!-- #banner-espetaculos -->









