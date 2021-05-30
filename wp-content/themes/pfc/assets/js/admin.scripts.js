$ = jQuery.noConflict();

jQuery(document).ready(function($){
    //perform media upload operation in the admin option page
    var mediaUploader;

    $( '#upload_hero_image_button' ).on('click', function(e) {
        e.preventDefault();  
        if( mediaUploader ){
            mediaUploader.open();
            return;
        }

        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Upload Hero Image',
            button: {
                text: 'Choose Hero Image'
            },
            multiple: false
        });

        mediaUploader.on('select', function(){
            attachment = mediaUploader.state().get('selection').first().toJSON();
            $('#pfc_hero_image').val(attachment.url);
            $('#preview_hero_image').attr("src",attachment.url);
        });

        mediaUploader.open();

    });

    var mediaUploader_2;

    $( '#upload_doctor_photo_button' ).on('click', function(e) {
        e.preventDefault();  
        if( mediaUploader_2 ){
            mediaUploader_2.open();
            return;
        }

        mediaUploader_2 = wp.media.frames.file_frame = wp.media({
            title: 'Upload Doctor Photo',
            button: {
                text: 'Choose Doctor Photo'
            },
            multiple: false
        });

        mediaUploader_2.on('select', function(){
            attachment = mediaUploader_2.state().get('selection').first().toJSON();
            $('#pfc_doctor_photo').val(attachment.url);
            $('#preview_doctor_photo').attr("src",attachment.url);
        });

        mediaUploader_2.open();

    });

});