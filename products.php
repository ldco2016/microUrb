<?php

	define("TITLE", "Products | MicroUrb");

	include('includes/header.php');
?>

	<div id="product-items">
		<h1>Our Delicious Products</h1>
		<p>Like our team, our produce is very small &mdash; but dang, does it ever pack a punch!</p>
		<p><em>Click any product item to learn more about it.</em></p>
		<hr>
		<ul>
			<?php foreach ($productItems as $mix => $item) { ?>
				<li><a href="mix.php?item=<?php echo $mix; ?>"><?php echo $item[title]; ?></a></li>
			<?php } ?>
		</ul>
	</div>


<?php include('includes/footer.php'); ?>