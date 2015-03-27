<div id="tutsplus-post-notice-preview">
</div>

<textarea name="tutsplus-post-notice-editor">
<?php echo get_post_meta( get_the_ID(), 'tutsplus-post-notice', true ); ?>
</textarea>
<?php wp_nonce_field( 'tutsplus-post-notice-save', 'tutsplus-post-notice-nonce' ); ?>