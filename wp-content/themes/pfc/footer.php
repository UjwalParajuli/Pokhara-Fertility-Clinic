</main>

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <h4 class="sub-heading">Pokhara Fertility Clinic</h4>
                        <p class="mb-3"><?php echo esc_attr( get_option('pfc_footer_description') ); ?></p>
                        <div class="social-icons">
                            <a href="<?php echo esc_attr( get_option('pfc_facebook_link') ); ?>">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/icons/facebook.svg'?>" class="h-100">
                            </a>
                            <a href="viber://chat?number=<?php echo esc_attr( get_option('pfc_viber_link') ); ?>">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/icons/viber.svg'?>" class="h-100">
                            </a>
                        </div>
                    </div>
                    <div class="col-md-3 offset-md-2">
                        <h4 class="sub-heading">Most used services</h4>

                        <?php
                            $args = array(
                                'theme_location' => 'footer-menu',
                                'container' => 'ul',
                                'menu_class' => 'footer-links'
                            );
                            wp_nav_menu($args);
                        ?>
                        
                    </div>
                    <div class="col-md-3">
                        <h4 class="sub-heading">Contact Information</h4>

                        <div class="contact-details">
                            <div class="cd-single">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/icons/phone-call.svg'?>">
                                <div class="text">
                                    <span><?php echo get_option('pfc_phone'); ?></span>
                                </div>
                            </div>
                            <div class="cd-single">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/icons/map-marker.svg'?>">
                                <div class="text">
                                    <span><?php echo get_option('pfc_address'); ?></span>
                                </div>
                            </div>
                            <div class="cd-single">
                                <img src="<?php echo get_template_directory_uri().'/assets/img/icons/email.svg'?>">
                                <div class="text">
                                    <span><?php echo get_option('pfc_email'); ?></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <hr />

                <div class="row">
                    <div class="col-12">
                        <p class="copyright-text">Copyright &copy; <?php echo date("Y"); ?> Pokhara Fertility Clinic | Site by <a href="#!">Sheru Web Studio</a> </p>
                    </div>
                </div>
            </div>            
        </footer>

        <button id="scroll-to-top" class="hidden">
            <svg xmlns="http://www.w3.org/2000/svg" data-name="Layer 1" viewBox="0 0 512 512">
                <g data-name="&lt;Group&gt;">
                <polygon fill="#ffffff" points="256 217.463 403.785 365.248 439.141 329.893 256 146.752 72.859 329.893 108.215 365.248 256 217.463" data-name="&lt;Path&gt;"/></g>
            </svg>
        </button>
        
        <script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@latest/dist/js/splide.min.js"></script>
        <?php wp_footer(); ?>
    </body>
</html>