--TEST--
AmazonPAS::cart_create - single item, validate only.

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	// Validate whether a request would be successful, without executing it, using the 'Validate' option.
	$pas = new AmazonPAS();
	$response = $pas->cart_create('%2BcgeaxKWE74bnHvaPPwZKdTcqwPB%2BsxyOgd2umMnTvT1A0Px1JRwyPijPD3CvBmsohKLo9IArgjZc1QkjL34z3Yj5axtYiyf', array(
		'Validate' => 'true'
	));

	// Success?
	var_dump($response->isOK());
?>

--EXPECT--
bool(true)
