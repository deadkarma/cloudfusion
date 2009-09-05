--TEST--
AmazonPAS::seller_lookup, with returnCurlHandle

--FILE--
<?php
	// Dependencies
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';

	// Search for an item
	$pas = new AmazonPAS();
	$response = $pas->seller_lookup('ATVPDKIKX0DER', array(
		'returnCurlHandle' => true
	));

	// Success?
	var_dump($response);
?>

--EXPECT--
resource(9) of type (curl)
