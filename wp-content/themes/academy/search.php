<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package Shape
 * @since Shape 1.0
 */

get_header(); ?>
    <section class="blog b-archives section">
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-12">
                    <?php if (have_posts()): ?>
                        <div class="row">
                            <?php while (have_posts()) : the_post();
                                $image = get_field('images');
                            ?>
                            <div class="col-lg-6 col-12">
                                <!-- Single Blog -->
                                <div class="single-blog">
                                    <div class="blog-head overlay">
                                        <?php 
                                            if (!empty($image['url'])) : ?>
                                                <img src="<?= $image['url']; ?>" alt="<?php the_title(); ?>">
                                            <?php else : ?>
                                                <?php if ( has_post_thumbnail()) : ?>
                                                   <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" >
                                                   <?php the_post_thumbnail(); ?>
                                                   </a> 
                                                <?php else : ?>
                                                    <img src="<?php bloginfo('template_directory'); ?>/images/no-image.jpg">
                                                <?php endif; ?>
                                            <?php endif; ?>
                                    </div>
                                    <div class="blog-content">
                                        <h4 class="blog-title"><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h4>
                                        <div class="blog-info">
                                            <a href="#"><i class="fa fa-user"></i>By: <?php the_author(); ?></a>
                                            <a href="#"><i class="fa fa-list"></i>Learning</a>
                                        </div>
                                        <p><?= wp_trim_words( get_the_content(), 10, '...' ); ?></p>
                                        <div class="button">
                                            <a href="#" class="btn">Read More<i class="fa fa-angle-double-right"></i></a>
                                        </div>
                                    </div>
                                </div>
                                <!-- End Single Blog -->
                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                        <!-- Pagination here -->
                    <?php else :
                        echo "No Content Available";
                    ?>
                    <?php endif ?>
                </div>
                <?php get_sidebar(); ?>
            </div>
        </div>
    </section>    


<?php get_footer(); ?>