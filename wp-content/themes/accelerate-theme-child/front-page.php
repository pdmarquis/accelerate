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
	<div class="site-content">
		<?php while ( have_posts() ) : the_post(); ?>
			<div class='homepage-hero'>
				<?php the_content(); ?>
				<a class="button" href="<?php echo home_url(); ?>/blog">View Our Work</a>
			</div>
		<?php endwhile; // end of the loop. ?>
	</div><!-- .site-content -->
</section><!-- .home-page -->

<section class="featured-work">
    <div class="site-content">
        <div class="work-items">
            
            <h4 class="featured-h4">Featured Work</h4>
            
            <div class="work-item">
            
                <?php query_posts('posts_per_page=1&post_type=case_studies'); ?>
                <?php while ( have_posts() ) : the_post(); 

                    $image_1 = get_field('image_1');
                    $size = "medium";
                ?>
                    <figure>
                        <a href="<?php the_permalink(); ?>"><?php echo wp_get_attachment_image( $image_1, $size ); ?></a>
                    </figure>
                    <h4 class="campaign-name"><?php the_title(); ?></h4>
                <?php endwhile; ?> 
                <?php wp_reset_query(); ?>
            </div><!-- .work-item -->
        </div><!-- .work-items -->
	</div><!-- .site-content -->
</section><!-- .featured-work -->

<section class="recent-posts">
	<div class="site-content">
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
	</div><!-- .site-content -->
</section><!-- .recent-posts -->

<?php get_footer(); ?>