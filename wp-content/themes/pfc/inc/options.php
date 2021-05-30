<?php

    // Adding option page in the admin panel
    function pfc_options(){
        add_menu_page('Pokhara Fertility Clinic', 'PFC Options', 'administrator', 'pfc_options', 'pfc_adjustments', '', 20);

    }
    add_action('admin_menu', 'pfc_options');


    // Regsitering Options for different fields
    function pfc_settings(){
        // Value Proposition
        register_setting('pfc_options_links', 'pfc_value_proposition_title');
        register_setting('pfc_options_links', 'pfc_value_proposition_description');

        // Hero Image
        register_setting('pfc_options_links', 'pfc_hero_image');

        // Doctor Photo
        register_setting('pfc_options_links', 'pfc_doctor_photo');

        // Social Media Links
        register_setting('pfc_options_links', 'pfc_facebook_link');
        register_setting('pfc_options_links', 'pfc_viber_link');

        // Contact Details
        register_setting('pfc_options_links', 'pfc_address');
        register_setting('pfc_options_links', 'pfc_phone');
        register_setting('pfc_options_links', 'pfc_email');
        
        // Google Map Link
        register_setting('pfc_options_links', 'pfc_googlemap_link');

        // Footer Description
        register_setting('pfc_options_links', 'pfc_footer_description');
    

    }
    add_action('init', 'pfc_settings');

    // Implementing options fields
    function pfc_adjustments(){ ?>
        <div class="wrap">
            <?php settings_errors(); ?>
            <form action="options.php" method="post">
                <?php
                    settings_fields('pfc_options_links');
                    do_settings_sections('pfc_options_links');
                ?>

                <h1>Landing Page Value Proposition</h1>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Value Proposition Title: </th>
                        <td>
                            <input type="text" size="50" name="pfc_value_proposition_title" value="<?php echo esc_attr( get_option('pfc_value_proposition_title') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Value Proposition Description: </th>
                        <td>
                            <textarea id="pfc_value_proposition_description" name="pfc_value_proposition_description" rows="3" cols="53"><?php echo esc_attr( get_option('pfc_value_proposition_description') ); ?></textarea>
                        </td>
                    </tr>
                </table>
                <hr>
                <h1>Hero Image</h1>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Home Page Image: </th>
                        <td>
                            <img id="preview_hero_image" src="<?php echo get_option('pfc_hero_image')?>">
                            <input type="button" class="button button-secondary" value="Upload Hero Image" id="upload_hero_image_button"><input type="hidden" id="pfc_hero_image" name="pfc_hero_image" value="<?php echo esc_attr( get_option('pfc_hero_image') ); ?>">
                        </td>
                    </tr>
                </table>
                <hr>
                <h1>Doctor Photo</h1>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Front Page Doctor Photo: </th>
                        <td>
                            <img id="preview_doctor_photo" src="<?php echo get_option('pfc_doctor_photo')?>">
                            <input type="button" class="button button-secondary" value="Upload Doctor Photo" id="upload_doctor_photo_button"><input type="hidden" id="pfc_doctor_photo" name="pfc_doctor_photo" value="<?php echo esc_attr( get_option('pfc_doctor_photo') ); ?>">
                        </td>
                    </tr>
                </table>
                <hr>
                <h1>Contact Information</h1>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Address: </th>
                        <td>
                            <input type="text" size="50" name="pfc_address" value="<?php echo esc_attr( get_option('pfc_address') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Phone Number: </th>
                        <td>
                            <input type="text" size="50" name="pfc_phone" value="<?php echo esc_attr( get_option('pfc_phone') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Email: </th>
                        <td>
                            <input type="email" size="50" name="pfc_email" value="<?php echo esc_attr( get_option('pfc_email') ); ?>">
                        </td>
                    </tr>
                </table>
                <hr>
                <h1>Footer Description</h1>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Footer Description: </th>
                        <td>
                            <textarea id="pfc_footer_description" name="pfc_footer_description" rows="3" cols="53"><?php echo esc_attr( get_option('pfc_footer_description') ); ?></textarea>
                        </td>
                    </tr>
                </table>
                <hr>
                <h1>Social Media Links</h1>
                <table class="form-table">
                    <tr valign="top">
                        <th scope="row">Facebook Link: </th>
                        <td>
                            <input type="url" size="50" name="pfc_facebook_link" value="<?php echo esc_attr( get_option('pfc_facebook_link') ); ?>">
                        </td>
                    </tr>
                    <tr valign="top">
                        <th scope="row">Viber Number: </th>
                        <td>
                            <input type="text" size="50" name="pfc_viber_link" value="<?php echo esc_attr( get_option('pfc_viber_link') ); ?>">
                        </td>
                    </tr>
                </table>
                <hr>
                <h1>Google Map Link</h1>
                <table class="form-table">
                <tr valign="top">
                        <th scope="row">Google Map Link: </th>
                        <td>
                            <input type="url" size="50" name="pfc_googlemap_link" value="<?php echo esc_attr( get_option('pfc_googlemap_link') ); ?>">
                        </td>
                    </tr>
                </table>
                <?php submit_button(); ?>
            </form>
        </div>

    <?php 
    }

?>