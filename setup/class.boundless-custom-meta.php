<?php

class Boundless_Custom_Meta {

    function __construct() {
        add_action('add_meta_boxes', array($this, 'add_custom_meta'));
        add_action('admin_footer', array($this, 'media_fields'));
        add_action('save_post', array($this, 'save_custom_meta'));
    }

    function add_custom_meta() {
        add_meta_box('title_meta', 'Custom Title Meta Tag', array($this, 'add_title_meta_field'), 'page');
        add_meta_box('description_meta', 'Custom Description Meta Tag', array($this, 'add_description_meta_field'), 'page');
        add_meta_box('image_meta', 'Custom Image Meta Tag', array($this, 'add_img_meta_field'), 'page');
    }

    function add_title_meta_field($post) {
        $title_input = '<input style="width: 100%" id="title_meta" name="title_meta" type="text" placeholder="Enter meta tag title value" value="' . $post->title_meta . '"></input>';
        echo $title_input;
    }

    function add_description_meta_field($post) {
        $description_input = '<input style="width: 100%" id="description_meta" name="description_meta" type="text" value="' . $post->description_meta . '" placeholder="Enter meta tag description"></input>';
        echo $description_input;
    }

    function add_img_meta_field($post) {
        $img_input = '<input style="width: 80%" id="image_meta" name="image_meta" type="text" value="' . $post->image_meta . '" placeholder="Add media link"> <input style="width: 19%" class="button meta_media" id="upload_button" name="upload_button" type="button" value="Upload" />';
        echo $img_input;
    }

    function media_fields() {
        ?>
        <script>
			jQuery(document).ready(function($){
				if ( typeof wp.media !== 'undefined' ) {
					var _custom_media = true,
					_orig_send_attachment = wp.media.editor.send.attachment;
					$('.meta_media').click(function(e) {
						var send_attachment_bkp = wp.media.editor.send.attachment;
						var button = $(this);
						var id = 'image_meta';
						console.log(id);
						_custom_media = true;
						wp.media.editor.send.attachment = function(props, attachment){
							if ( _custom_media ) {
								$('input#'+id).val(attachment.url);
								console.log(attachment.url);
								console.log($("input#"+id));
							} else {
								return _orig_send_attachment.apply( this, [props, attachment] );
							};
						}
						wp.media.editor.open(button);
						return false;
					});
					$('.add_media').on('click', function(){
						_custom_media = false;
					});
				}
			});
        </script>

        <?php
    }


    function save_custom_meta($post_id) {

        if (isset($_POST['title_meta'])) {
            update_post_meta($_POST['post_ID'], 'title_meta', $_POST['title_meta']);
        }

        if (isset($_POST['description_meta'])) {
            update_post_meta($_POST['post_ID'], 'description_meta', $_POST['description_meta']);
        }

        if (isset($_POST['image_meta'])) {
            update_post_meta($_POST['post_ID'], 'image_meta', $_POST['image_meta']);
        }


    }



}

new Boundless_Custom_Meta();




?>
