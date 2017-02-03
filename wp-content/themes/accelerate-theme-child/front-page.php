<?php
/**
 * The template for displaying the homepage
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 1.0
 */

get_header(); ?>

    <section class="home-page">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/case-studies/">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
    </section><!-- .home-page -->
<!--	</div> .site-content -->

<div class="site-content">
    <section class="featured-work">
<!--    <div class="site-content">-->
        <div class="work-items">
            
            <h4 class="featured-h4">Featured Work</h4>
            
            <?php query_posts('posts_per_page=3&post_type=case_studies'); ?>
            <?php while ( have_posts() ) : the_post(); 

                $image_1 = get_field('image_1');
                $size = "medium";
            ?>
                <div class="work-item">
                    <figure>
                        <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image_1, $size ); ?></a>
                    </figure>
                    <h4 class="campaign-name"><?php the_title(); ?></h4>
                </div><!-- .work-item -->
            <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
        </div><!-- .work-items -->
<!--	</div> .site-content -->
    </section><!-- .featured-work -->

    <section id="recent-posts">
<!--	<div class="site-content">-->
        <div class="blog-post">
            <h4>From the Blog</h4>
            
            <?php query_posts('posts_per_page=1'); ?>
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_excerpt(); ?> 
                    <a class="read-more-link" href="<?php the_permalink(); ?>">Read More <span>&rsaquo;</span></a>
                <?php endwhile; ?> 
            <?php wp_reset_query(); ?>
        </div><!-- .blog-post -->
<!--	</div> .site-content -->
    </section><!-- .recent-posts -->

    <section id="latest-tweet">
<!--	<div class="site-content">-->
        <?php if (is_active_sidebar('sidebar-2')) : ?>
        <h3>Recent Tweet</h3>
        <h2>@Accelerate</h2>
        <div id="secondary" class="widget-area" role="complementary">
            <?php dynamic_sidebar('sidebar-2'); ?>
            <a class="follow-us" href="#">Follow Us <span>&rsaquo;</span></a>
        </div>
        <?php endif; ?>
    </section><!-- .latest-tweet -->
</div><!-- .site-content -->

<?php get_footer(); ?>