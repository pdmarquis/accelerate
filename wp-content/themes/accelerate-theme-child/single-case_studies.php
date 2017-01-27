<?php
/**
 * The template for displaying all single case study pages
 *
 * This is the template that displays all single case study by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate-Theme
 * @since Accelerate Marketing 1.1
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php 
                while ( have_posts() ) : the_post();
            
                // set variables
                $size = "full";
                $service = get_field('service');
                $client = get_field('client');
                $site_link = get_field('site_link');
                $image_1 = get_field('image_1');
                $image_2 = get_field('image_2');
                $image_3 = get_field('image_3');
            ?>
                <!-- whole page wrap-->
                <div id="single-case-studies-wrapper">
                    <!-- sidebar on left side of page-->
                    <aside id="project-sidebar">
                        <h2><?php the_title(); ?></h2>
                        <h5><?php echo $service; ?></h5>
                        <p>Client: <?php echo $client; ?></p>
                        <?php the_content(); ?>
                        <a href="">Visit Live Site</a>
                    </aside> <!-- #project-sidebar -->
                    <!-- images section on right side of page-->
                    <section id="project-images">
                        <figure>
                            <?php if ($image_1) { 
                                echo wp_get_attachment_image( $image_1, $size );
                            } ?>
                        </figure>
                        <figure>
                            <?php if ($image_2) { 
                                echo wp_get_attachment_image( $image_2, $size );
                            } ?>
                        </figure>
                        <figure>
                            <?php if ($image_3) { 
                                echo wp_get_attachment_image( $image_3, $size );
                            } ?>
                        </figure>
                    </section><!-- #project-images -->
                </div> <!-- #single-case-studies-wrapper -->
			<?php endwhile; // end of the loop. ?>
		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>



