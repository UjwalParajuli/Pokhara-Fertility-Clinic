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
                            'post_type' => 'our-testimonials'
                            );
                            $reviews = new WP_Query($args);
                            while($reviews->have_posts()): $reviews->the_post();
                        ?>
                            <div class="col-md-4">
                                <div class="review-single">
                                    <div class="pfc-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 76.641 67.061">
                                            <path id="FontAwsome_quote-right_" data-name="FontAwsome (quote-right)" d="M69.456,32H50.3a7.187,7.187,0,0,0-7.185,7.185v19.16A7.187,7.187,0,0,0,50.3,65.53H62.271v9.58a9.589,9.589,0,0,1-9.58,9.58h-1.2A3.584,3.584,0,0,0,47.9,88.283v7.185a3.584,3.584,0,0,0,3.593,3.593h1.2a23.944,23.944,0,0,0,23.95-23.95V39.185A7.187,7.187,0,0,0,69.456,32Zm-43.11,0H7.185A7.187,7.187,0,0,0,0,39.185v19.16A7.187,7.187,0,0,0,7.185,65.53H19.16v9.58a9.589,9.589,0,0,1-9.58,9.58h-1.2A3.584,3.584,0,0,0,4.79,88.283v7.185a3.584,3.584,0,0,0,3.593,3.593h1.2A23.944,23.944,0,0,0,33.53,75.11V39.185A7.187,7.187,0,0,0,26.345,32Z" transform="translate(76.641 99.061) rotate(180)"/>
                                          </svg>
                                          
                                    </div>
                                    <div class="review">
                                        <h4 class="sub-heading"><?php the_title(); ?></h4>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>
                </section>
            </article>

<?php get_footer(); ?>