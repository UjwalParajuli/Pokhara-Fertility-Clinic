<?php get_header();
if ( have_posts() ) {
    while ( have_posts() ) {
        the_post(); 
?>

<main>
            <section class="page-hero">
                <div class="container">
                    <div class="row">
                        <div class="col">
                            <h1 class="page-title"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <?php
                } // end while
                } // end if
            ?>
            <article>
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                        <?php $args = array(
                            'post_type' => 'our-facilities'
                            );
                            $facilities = new WP_Query($args);
                            while($facilities->have_posts()): $facilities->the_post();
                        ?>
                            <div class="col-md-4">
                                <div class="facility-box">
                                    <figure>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100" alt="">
                                    </figure>
    
                                    <div class="facility-text">
                                        <h4 class="sub-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h4></a>
                                        <p><?php the_excerpt(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </article>

<?php get_footer();?>