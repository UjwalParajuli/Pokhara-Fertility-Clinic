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
            <section class="page-section">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4">
                            <div class="heading-sec">
                                <h2 class="heading page-heading">Send us a message</h2>
                            </div>
                            <p>Fill out the quick form and we will be in touch with lightening speed.</p>
                            <?php echo do_shortcode('[contact-form-7 id="80" title="Contact form 1"]'); ?>
                        </div>
                        <div class="col-md-7 offset-md-1">
                            <div class="heading-sec">
                                <h2 class="heading page-heading">Other ways to connect</h2>
                            </div>
                            <p>Feel free to call, email or visit our office to discuss about your problems or inquiries. We're happy to help you.</p>

                            <div class="contact-info">
                                <div class="row">
                                    <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri().'/assets/img/icons/map-marker.svg'?>">
                                                </td>
                                                <td>
                                                    <strong>Address</strong>
                                                    <span><?php echo get_option('pfc_address'); ?></span>
                                                </td>
                                            </tr>
                                        </table> 
                                    </div>
                                    <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri().'/assets/img/icons/clock.svg'?>">
                                                </td>
                                                <td>
                                                    <strong>Hours</strong>
                                                    <span>Sun-Fri <br />(10am - 4pm)</span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri().'/assets/img/icons/phone-call.svg'?>">
                                                </td>
                                                <td>
                                                    <strong>Phone</strong>
                                                    <span><?php echo get_option('pfc_phone'); ?></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                    <div class="col-md-6">
                                        <table>
                                            <tr>
                                                <td>
                                                    <img src="<?php echo get_template_directory_uri().'/assets/img/icons/email.svg'?>">
                                                </td>
                                                <td>
                                                    <strong>Email</strong>
                                                    <span><?php echo get_option('pfc_email'); ?></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section class="map">
                <iframe src="<?php echo esc_attr(get_option('pfc_googlemap_link'));?>" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
            </section>

<?php get_footer(); ?>