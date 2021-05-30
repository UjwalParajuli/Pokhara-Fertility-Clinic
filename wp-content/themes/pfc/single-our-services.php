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
                            <strong class="page-sub-title">Services</strong>
                            <h1 class="page-title"><?php the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <article>
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-9">
                                <?php the_content(); ?>
                            </div>
                            <?php
                                } // end while
                                } // end if
                            ?>
                            <div class="col-md-3">
                                <aside>
                                    <div class="heading-sec">
                                        <h6 class="header page-heading">Other Services</h6>                                        
                                    </div>
                                    <ul class="sidebar-link">
                                    <?php $args = array(
                                        'post_type' => 'our-services'
                                        );
                                        $services = new WP_Query($args);
                                        while($services->have_posts()): $services->the_post();
                                    ?>
                                        <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                    </ul>
                                </aside>
                            </div>
                        </div>
                    </div>
                </section>
            </article>


<?php get_footer(); ?>