<?php if (!defined("ABSPATH")) die(); ?>

<?php // Check if form was submitted:
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    if (isset($_POST["cpt_nonce_field"]) && wp_verify_nonce($_POST["cpt_nonce_field"], "cpt_nonce_action")) {
		$my_sfapost_args = array(	
			"post_title"	=> $_POST["cptTitle"],
			"post_content"  => $_POST["cptContent"],
			"post_status"   => "pending",
			"post_type"		=> $_POST["post_type"]
		);
		$cpt_id = wp_insert_post( $my_sfapost_args, $wp_error);
	}
} else { ?>

<div>
	<form method="post">
		<p>
			<label for="cptTitle"><?php _e("Enter the Post Title:", "mytextdomain") ?></label>
			<input type="text" name="cptTitle" id="cptTitle" />
		</p>
		<p> 
			<label for="cptContent"><?php _e("Enter Some Content:", "mytextdomain") ?></label>
			<textarea name="cptContent" id="cptContent" rows="4″ cols="20″></textarea>
		</p>
		<button type="submit"><?php _e("Submit", "mytextdomain") ?></button>
		<input type="hidden" name="post_type" id="post_type" value="sfa_suggestion" />
		
		<?php wp_nonce_field( "cpt_nonce_action", "cpt_nonce_field" ); ?>
	</form>
</div>

<?php } ?>
