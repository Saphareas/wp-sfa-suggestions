<?php if (!defined('ABSPATH')) die(); ?>

<?php // Check if form was submitted:
if ($_SERVER['REQUEST_METHOD'] === 'POST') {

    if (isset($_POST['sfa_nonce_field']) && wp_verify_nonce($_POST['sfa_nonce_field'], 'sfa_nonce_action' )) {
		$my_sfapost_args = array(	
			'post_author'	=> $_POST['name'],
			'post_content'  => $_POST['suggestion'],
			'post_status'   => 'pending',
			'post_type' => $_POST['sfa_suggestion']
		);
		// insert the post into the database

		$cpt_id = wp_insert_post( $my_cptpost_args, $wp_error);

		}

} else ?>

<div id="sfa-suggestion-form">
	<script src="widget.js"></script>
	
	<form method="post">
		<div class="field active">
			<a href="#" class="button pill" onclick="nextQ(1)">Mache einen Vorschlag</a>
		</div>

		<div class="field">
			<label for="name">Bitte sag uns deinen Namen.</label>
			<div class="control">
				<input type="text" name="name" id="form-name" required minlength="3">
			</div>
			<span class="error" id="form-nameError">Inkorrekte Eingabe</span>
		</div>
		
		<div class="field">
			<label for="suggestion">Was ist dein Vorschlag für die Brache?</label>
			<div class="control">
				<textarea name="suggestion" id="form-suggest" required minlength="20" maxlength="280"></textarea>
			</div>
			<span class="error" id="form-suggestError">Inkorrekte Eingabe</span>
		</div>

		<div class="field">	
			<div class="control">
				<input type="submit" class="button pill" value="Abschicken">
			</div>
		</div>
		
		<?php wp_nonce_field( 'sfa_nonce_action', 'sfa_nonce_field' ); ?>
	</form>
	
	<button class="prev" onclick="nextQ(-1)">&#10094;</button>
	<button class="next" id="form-qnext" onclick="nextQ(1)" disabled>&#10095;</button>

	<script src="verify.js"></script>
</div>

<?php endif; ?>
