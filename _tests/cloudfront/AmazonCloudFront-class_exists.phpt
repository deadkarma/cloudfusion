--TEST--
AmazonCloudFront - Exists

--FILE--
<?php
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';
	$cdn = new AmazonCloudFront();
	var_dump(class_exists('AmazonCloudFront'));
?>

--EXPECT--
bool(true)
