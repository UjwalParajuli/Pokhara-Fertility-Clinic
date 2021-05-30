<?php get_header(); ?>
<main class="landing-page">
            <!--Hero Section-->
            <section id="hero">
                <div class="container">
                    <div class="row">
                        <div class="col-md-6 position-md-absolute">
                            <h1 class="heading mb-2"><?php echo get_option('pfc_value_proposition_title'); ?></h1>
                            <p><?php echo get_option('pfc_value_proposition_description'); ?></p>
                            <a class="pfc-button" href="https://pfc.com.np/services/">See how we can help</a>
                        </div>
                        <div class="hero-image">
                            <img src="<?php echo get_option('pfc_hero_image'); ?>">
                        </div>
                    </div>
                </div>
            </section>

            <!--PFC Benefits Section-->

            <section class="landing-section" id="pfc-benefits">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-sec">
                                <h2 class="heading">
                                    Why choose<br />
                                    <span class="highlight">Pokhara Fertility Clinic?</span>
                                </h2>
                            </div>                            
                        </div>
                    </div>
                    <div class="benefits">
                        <div class="row">
                            <?php $args = array(
                                'post_type' => 'why-pfc'
                            );
                            $reasons = new WP_Query($args);
                            while($reasons->have_posts()): $reasons->the_post();
                            ?>
                            <div class="col-md-5">
                                <div class="benefit-box">
                                    <div class="pfc-icon">
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>">
                                    </div>
                                    <div class="text">
                                        <h4 class="sub-heading"><?php the_title(); ?></h4>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                            </div>
                            <?php endwhile; wp_reset_postdata(); ?>
                        </div>
                    </div>                    
                </div>
            </section>

            <!--PFC Solutions Section-->

            <section class="landing-section lite-bg" id="pfc-solutions">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-sec">
                                <h2 class="heading">
                                    Solutions for every<br />
                                    <span class="highlight">infertility	related	problems</span>
                                </h2>
                            </div>                            
                        </div>
                    </div>

                    <div class="row">
                        <?php $args = array(
                            'post_type' => 'our-services',
                            'posts_per_page' => 6
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

            <!--PFC Facilities Section-->

            <section class="landing-section" id="pfc-facilities">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-sec">
                                <h2 class="heading">
                                    We believe the heart of healthcare is<br />
                                    <span class="highlight">best tools and facilities</span>
                                </h2>
                            </div>                            
                        </div>
                    </div>

                    <div class="facilities">
                        <div class="row">
                        <?php $args = array(
                            'post_type' => 'our-facilities',
                            'posts_per_page' => 6
                            );
                            $facilities = new WP_Query($args);
                            while($facilities->have_posts()): $facilities->the_post();
                        ?>
                            <div class="col-md-4">
                                <div class="facility-box">
                                    <figure>
                                        <img src="<?php echo get_the_post_thumbnail_url(); ?>" class="w-100" alt="facilities">
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
                </div>
            </section>

            <!--PFC Doctor Section-->

            <section class="landing-section lite-bg" id="pfc-doctor">
                <div class="container">
                    <div class="row">
                        <div class="col-md-7 offset-md-5">
                            <div class="heading-sec">
                                <h2 class="heading">
                                    Meet our fertility expert<br />
                                    <span class="highlight">Dr. Rajesh Adhikari</span>
                                </h2>
                            </div>    
                            <div class="doctor-benefits">
                            <?php $args = array(
                                'post_type' => 'doctor-skills'
                                );
                                $doctor_skills = new WP_Query($args);
                                while($doctor_skills->have_posts()): $doctor_skills->the_post();
                            ?>
                                <div class="doctor-benefit">
                                    <div class="pfc-icon">
                                        <svg id="Capa_1" enable-background="new 0 0 515.556 515.556" viewBox="0 0 515.556 515.556" xmlns="http://www.w3.org/2000/svg"><path d="m0 274.226 176.549 176.886 339.007-338.672-48.67-47.997-290.337 290-128.553-128.552z"/></svg>
                                    </div>
                                    <div class="text">
                                        <h4 class="sub-heading">
                                            <?php the_title(); ?>
                                        </h4>
                                        <p><?php the_content(); ?></p>
                                    </div>
                                </div>
                                <?php endwhile; wp_reset_postdata(); ?>
                            </div>                        
                        </div>
                    </div>
                </div>
                <div class="doctor-image">
                    <img src="<?php echo get_option('pfc_doctor_photo'); ?>" alt="Dr Rajesh Adhikari">
                </div>
            </section>

            <!--PFC Reviews Section-->

            <section class="landing-section dark-bg" id="pfc-reviews">
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <div class="heading-sec">
                                <h2 class="heading">
                                    What our happy parents<br />
                                    <span class="highlight">say about us?</span>
                                </h2>
                            </div>                            
                        </div>
                    </div>

                    <div class="reviews-slider">
                        <div class="splide">
                            <div class="splide__track">
                                <ul class="splide__list">
                                    <?php $args = array(
                                        'post_type' => 'our-testimonials'
                                        );
                                        $testimonials = new WP_Query($args);
                                        while($testimonials->have_posts()): $testimonials->the_post();
                                    ?>
                                    <li class="splide__slide">
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
                                    </li>
                                    <?php endwhile; wp_reset_postdata(); ?>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <!--PFC CTA Section-->

            <section class="landing-section" id="pfc-final-cta">
                <div class="container">
                    <div class="row">
                        <div class="col-md-9">
                            <div class="heading-sec">
                                <h2 class="heading">
                                    We're welcoming couples<br />
                                    <span class="highlight">and	we can't wait to meet you</span>                                    
                                </h2>
                                <p>With our world class technology and experienced doctor, give us a chance to help you fulfill your desire to be parents.</p>
                            </div>                            
                        </div>
                        <div class="col-md-3 d-md-flex align-items-center justify-content-end">
                            <a href="#!" class="pfc-button">Contact Us Now</a>
                        </div>
                    </div>
                </div>
            </section>
<?php get_footer(); ?>