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
                <section class="page-section m--30">
                    <div class="container">
                        <div class="row">
                        <?php $args = array(
                            'post_type' => 'our-services'
                            );
                            $services = new WP_Query($args);
                            while($services->have_posts()): $services->the_post();
                        ?>
                            <div class="col-md-3">
                                <div class="solutions-box">
                                    <div class="pfc-icon no-border">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                    </div>
    
                                    <h4 class="sub-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></h4></a>
    
                                    <p>
                                        <?php the_excerpt(); ?>
                                    </p>
                                    
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </article>
<?php get_footer();?>