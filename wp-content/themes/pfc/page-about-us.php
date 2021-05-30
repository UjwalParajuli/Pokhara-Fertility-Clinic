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
                            <h1 class="page-title"><?php echo get_the_title(); ?></h1>
                        </div>
                    </div>
                </div>
            </section>
            <article>
                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col-md-6">
                                <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="br-5 w-100" alt="Pokhara Fertility Clinic Team">
                            </div>
                            <div class="col-md-6">
                                <div class="v-center">
                                    <div class="heading-sec">
                                        <h2 class="heading page-heading">
                                            Helping infertile couples to <span class="highlight">conceive baby</span> <br/>with world-class equipments
                                        </h2>
                                    </div>
                                    <p><?php echo get_the_content(); ?></p>
                                </div>                                
                            </div>
                        </div>
                    </div>
                </section>
                <?php
                    } // end while
                    } // end if
                ?>

                <section class="page-section">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <div class="heading-sec mb-5">
                                    <h2 class="heading page-heading text-center">
                                        Meet our team
                                    </h2>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                        <?php $args = array(
                                'post_type' => 'our-specialists',
                                'orderby' => 'date',
                                'order'   => 'ASC'
                            );
                            $reasons = new WP_Query($args);
                            while($reasons->have_posts()): $reasons->the_post();
                        ?>
                            <div class="col-md-6">
                                <div class="team-single">
                                    <figure class="photo">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" alt="Dr. Rajesh Adhikari">
                                    </figure>
                                    <div class="text">
                                        <h4 class="sub-heading"><?php the_title(); ?></h4>
                                        <ul class="doc-desc">
                                            <?php the_content(); ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>                    
                </section>
            </article>

<?php get_footer();?>