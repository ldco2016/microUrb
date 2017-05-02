<?php

	define("TITLE", "Product Item | MicroUrb");

	include('includes/header.php');

	function strip_bad_chars($input) {
		$output = preg_replace("/[^a-zA-Z0-9_-]/", "", $input);
		return $output;
	}

	if (isset($_GET['item'])) {
		$productItem = strip_bad_chars($_GET['item']);

		$mix = $productItems[$productItem];

	}

?>

	<hr>
	<div id="mix">
		<h1><?php echo $mix[title]; ?></h1>
		<p><?php echo $mix[blurb]; ?></p>
	
	</div><!-- mix -->
	<hr>
	<a href="products.php" class="button previous">&laquo; Back to Products</a>

	<?php include('includes/footer.php'); ?>