<?php
// Boundless_Custom_Meta allows the option to input custom meta tags for
// immersive stories.

class Boundless_Custom_Meta {

    function __construct() {
        add_action('add_meta_boxes', array($this, 'add_custom_meta'));
        add_action('admin_footer', array($this, 'media_fields'));
        add_action('save_post', array($this, 'save_custom_meta'));
    }

    // array of custom meta tag information
    private $custom_meta = array(
        array(
            'id' => 'title_meta',
            'title' => 'Custom Title Tag',
            'callback' => 'add_title_meta_field',
            'description' => 'Changes the content value of the meta og:title tag.'
        ),
        array(
            'id' => 'description_meta',
            'title' => 'Custom Description Tag',
            'callback' => 'add_description_meta_field',
            'description' => 'Changes the content value of the og:description and the meta description tags.'
        ),
        array(
            'id' => 'image_meta',
            'title' => 'Custom Image Tag',
            'callback' => 'add_img_meta_field',
            'description' => 'Changes the content value of the og:image tag. The value should be the path to the image url. Images for this card support an aspect ratio of 2:1. The minimum dimensions allowed are 300x157 pixels and the maximum is 4096x4096 pixels.'
        ),
        array(
            'id' => 'img_alt_meta',
            'title' => 'Custom Image Alt Tag',
            'callback' => 'add_img_alt_field',
            'description' => 'Changes the alt text value of the image provided in the og:image meta tag.'
        ),
        array(
            'id' => 'type_meta',
            'title' => 'Custom Type Tag',
            'callback' => 'add_type_field',
            'description' => 'Changes the content value of the og:type meta tag.'
        ),
        array(
            'id' => 'url_meta',
            'title' => 'Custom URL Tag',
            'callback' => 'add_url_field',
            'description' => 'Changes the content value of the og:url meta tag.'
        ),
        array(
            'id' => 'site_name_meta',
            'title' => 'Custom Site Name Tag',
            'callback' => 'add_site_name',
            'description' => 'Changes the content value of the og:site_name meta tag.'
        ),
        array(
            'id' => 'author_meta',
            'title' => 'Custom Author Tag',
            'callback' => 'add_author_field',
            'description' => 'Changes the content value fo the article:author meta tag. Only shows if the og:type meta tag is set to \'article\'.'
        ),
        array(
            'id' => 'tag_meta',
            'title' => 'Custom Meta Keywords',
            'callback' => 'add_tag_meta',
            'description' => 'Changes the content of the keywords meta tag.'
        ),
        array(
            'id' => 'twitter_site_meta',
            'title' => 'Custom Twitter Site Tag',
            'callback' => 'add_twitter_site',
            'description' => 'Changes the content value of the twitter:site meta tag.'
        ),
        array(
            'id' => 'twitter_creator_meta',
            'title' => 'Custom Twitter Creator Tag',
            'callback' => 'add_twitter_creator',
            'description' => 'Changes the content value of the twitter:creator meta tag.'
        )
    );

    // adds the custom meta box
    function add_custom_meta() {
        add_meta_box('custom_meta_tags', 'Custom Meta Tags', array($this, 'add_meta_fields'), 'page');
    }

    // fills the custom meta tag box with input fields according to the custom meta tag information
    function add_meta_fields($post) {
        foreach($this->custom_meta as $tag) {
            // requires an upload button if it's the field for the custom image meta tag
            if ($tag['id'] == 'image_meta') {
                $input = '<h4>' . $tag['title'] . '</h4><p>' . $tag['description'] . '</p><input style="width: 80%" id="image_meta" name="image_meta" type="text" value="' . $post->image_meta . '" placeholder="Add media link"> <input style="width: 19%" class="button meta_media" id="upload_button" name="upload_button" type="button" value="Upload" /><p></p><br>';
            } else {
                $input = '<h4>' . $tag['title'] . '</h4><p>' . $tag['description'] . '</p><input style="width: 100%" id="' . $tag['id'] . '" name="' . $tag['id'] . '" type="text" placeholder="Enter ' . $tag['title'] . ' value" value="' . $post->$tag['id'] . '"></input><p></p><br>';
            }
            echo $input;
        }
    }

    // handles the upload button for the custom image meta tag
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

    // saves the custom meta tags when the user hits 'publish'
    function save_custom_meta($post_id) {

        foreach($this->custom_meta as $tags) {
            if (isset($_POST[$tags['id']])) {
                update_post_meta($_POST['post_ID'], $tags['id'], $_POST[$tags['id']]);
            }
        }

    }

}

new Boundless_Custom_Meta();




?>
