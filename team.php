<?php

	define("TITLE", "Team | MicroUrb");
	include('includes/header.php');
?>

	<div id="team-members" class="cf">
		<h1>Our Team at MicroUrb</h1>
		<p>We're small, but mighty. MicroUrb is a brand new family-owned and run urban farming business and we're proud of it! Count on one thing from us: <strong>the best local produce you've ever had. Ever.</strong></p>
		<hr>

		<?php

			foreach ($teamMembers as $member) {

		?>

				<div class="member">
					<img src="assets/img/<?php echo $member[img]; ?>.png" alt="<?php echo $member[name]; ?>">
					<h2><?php echo $member[name]; ?></h2>
					<p><?php echo $member[bio]; ?></p>
				</div><!-- member -->

		<?php 

			}

		?>
	</div><!-- team-members -->

	<hr>

<?php include('includes/footer.php'); ?>