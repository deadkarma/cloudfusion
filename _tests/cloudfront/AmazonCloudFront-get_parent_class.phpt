--TEST--
AmazonCloudFront - Get parent class

--FILE--
<?php
	require_once dirname(__FILE__) . '/../../cloudfusion.class.php';
	$cdn = new AmazonCloudFront();
	var_dump(get_parent_class('AmazonCloudFront'));
?>

--EXPECT--
string(11) "CloudFusion"