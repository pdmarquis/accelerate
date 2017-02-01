<?php
/**
 * The template for displaying the About page pages
 *
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.2
 */

get_header(); ?>

	<div id="primary" class="site-content">
		<div id="content" role="main">
			<?php while ( have_posts() ) : the_post(); ?>
            
                <?php 
                    // Set variables
                    $size = "large";
                    $service_1_name = get_field("service_1_name");
                    $service_1_description = get_field("service_1_description");
                    $service_1_image = get_field("service_1_image");
                    $service_2_name = get_field("service_2_name");
                    $service_2_description = get_field("service_2_description");
                    $service_2_image = get_field("service_2_image");
                    $service_3_name = get_field("service_3_name");
                    $service_3_description = get_field("service_3_description");
                    $service_3_image = get_field("service_3_image");
                    $service_4_name = get_field("service_4_name");
                    $service_4_description = get_field("service_4_description");
                    $service_4_image = get_field("service_4_image");
                ?>
            
                <div id="services-intro">
				    <?php the_content(); ?>
                </div>
            
                <!--Set up the services in a flexbox and alternate the image column left or right every other row-->
                <section id="services-wrapper">
                    <article>
                        <div class="service">
                            <h2 class="service-name"><?php echo $service_1_name ?></h2>
                            <div class="flex-wrapper">
                                <figure class="service-image">
                                    <?php echo wp_get_attachment_image( $service_1_image, $size ); ?>
                                </figure>
                                <div class="service-description">
                                    <p><?php echo $service_1_description ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                    <article>
                        <div class="service">
                            <h2 class="service-name"><?php echo $service_2_name ?></h2>
                            <div class="flex-wrapper">
                                <figure class="service-image">
                                    <?php echo wp_get_attachment_image( $service_2_image, $size ); ?>
                                </figure>
                                <div class="service-description">
                                    <p><?php echo $service_2_description ?></p>
                                </div>
                            </div>
                        </div>
                    </article>
                    
                    <?php if ($service_3_name && $service_3_image && $service_3_description) { ?>
                        <article>
                            <div class="service">
                                <h2 class="service-name"><?php echo $service_3_name ?></h2>
                                <div class="flex-wrapper">
                                    <figure class="service-image">
                                        <?php echo wp_get_attachment_image( $service_3_image, $size ); ?>
                                    </figure>
                                    <div class="service-description">
                                        <p><?php echo $service_3_description ?></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                    
                    <?php if ($service_4_name && $service_4_image && $service_4_description) { ?>
                        <article>
                            <div class="service">
                                <h2 class="service-name"><?php echo $service_4_name ?></h2>
                                <div class="flex-wrapper">
                                    <figure class="service-image">
                                        <?php echo wp_get_attachment_image( $service_4_image, $size ); ?>
                                    </figure>
                                    <div class="service-description">
                                        <p><?php echo $service_4_description ?></p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    <?php } ?>
                </section>
			<?php endwhile; // end of the loop. ?>
            
            <div id="about-contact">
                <h2>Interested in working with us?</h2> <a href="<?php home_url() ?> + /contact/" class="button">Contact Us</a>
            </div>

		</div><!-- #content -->
	</div><!-- #primary -->
<?php get_footer(); ?>