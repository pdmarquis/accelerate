<?php
/**
 * The template for displaying 404 pages (Not Found)
 *
 * @package WordPress
 * @subpackage accelerate
 * @since accelerate 1.2
 */

get_header(); ?>


	<div id="primary" class="content-area">
		<div id="content" class="site-content page-404" role="main">

			<header class="page-header">
				<figure>
                    <img src="http://www.gannett-cdn.com/-mm-/ad922d01dc1af7034797a82d7504d9a975e9085c/c=254-139-1579-1906&r=537&c=0-0-534-712/local/-/media/2016/03/08/DetroitFreePress/DetroitFreePress/635930294574033038-scooby-0918-ptstagemain-bar1-scooby.jpg" alt="picture of Scooby in Shaggy's arems, both ooking scared." />
                    <figcaption>Source: Hanna Babera</figcaption>
                </figure>
                
			</header>

			<div class="page-content">
                <h1 class="page-title"><?php _e( 'Ruh Roh!', 'accelerate' ); ?></h1>
                
                <?php 
                    $home_url = home_url();
                    $the_msg = 'Something scary has happened.  Nothing was found at this location. You can return to our <a href="'.$home_url.'">home page</a> or browse our <a href="'.$home_url.'/blog/">blog</a> and <a href="'.$home_url.'/case-studies/">featured work</a>';
                ?>
                
				<p><?php _e( $the_msg, 'accelerate' ); ?></p>
                
			</div><!-- .page-content -->
		</div><!-- #content -->
	</div><!-- #primary -->

<?php
get_footer();
