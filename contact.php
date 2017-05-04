<?php

	session_start();

	$errors = isset($_SESSION['errors']) ? $_SESSION['errors'] : [];
	$fields = isset($_SESSION['fields']) ? $_SESSION['fields'] : [];
	
	define("TITLE", "Contact Us | MicroUrb");

	include('includes/header.php');

?>

	<div id="contact">
		<hr>
		<h1 class="contact">Get in touch with us!</h1>

		<?php if (!empty($errors)): ?>
			<div class="panel">
				<ul><li><?php echo implode('</li><li>', $errors); ?></li></ul>
			</div>
		<?php endif ?>

			<form method="post" action="form.php" id="contact-form">
				<label for="name">Your name</label>
				<input type="text" id="name" name="name" autocomplete="off">

				<label for="email">Your email</label>
				<input type="email" id="email" name="email" autocomplete="off">

				<label for="message">and your message</label>
				<textarea id="message" name="message"></textarea>

				<input type="submit" class="button next" name="contact_submit" value="Send Message">
				
			</form>
		

		<hr>

	</div>

	<?php 

		unset($_SESSION['errors']);
		unset($_SESSION['fields']);

	?>

<?php include('includes/footer.php'); ?>