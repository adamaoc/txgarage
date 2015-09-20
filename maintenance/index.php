<body>
<?php
	// Timber Setup
	$context = Timber::get_context();
  Timber::render('main.twig', $context);
	// echo "<pre>";
	// print_r($context);
	// echo "</pre>";
?>
</body>
