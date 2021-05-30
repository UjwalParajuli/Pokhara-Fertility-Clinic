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
                        <?php 
                            while(have_posts()): 
                                the_post();

                                the_content();
                        ?>
                            <?php endwhile; 
                            wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </article>

<?php get_footer(); ?>