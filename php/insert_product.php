<?php

$mysqliHost = 'localhost';
$mysqliUsername = 'root';
$mysqliPassword = '';
$mysqliDatabase = 'dreams-feels';

// open mysqli db connection
$mysqli = new mysqli($mysqliHost,$mysqliUsername,$mysqliPassword,$mysqliDatabase);

// get name
$name = $_POST['name'];
// get description
$description = $_POST['description'];
// get brand id
$brand_ID = $_POST['brand']; 

// insert product data
$query = "INSERT INTO `products` (`name`,`description`,`brand_FK`) VALUES('".$mysqli->real_escape_string($name)."','".$mysqli->real_escape_string($description)."','".$brand_ID."')";
$mysqli->query($query);

$new_product_id = $mysqli->insert_id;

// get image data
if($_FILES['image1']['tmp_name'] != null || $_FILES['image1']['tmp_name'] != "")
{
	$image1 = file_get_contents($_FILES['image1']['tmp_name']);

	$finfo = new finfo(FILEINFO_MIME);
	$type = $finfo->file($_FILES['image1']['tmp_name']);
	$mime1 = substr($type, 0, strpos($type, ';'));

	$query = "INSERT INTO `images` (`data`,`type`,`name`) VALUES('".$mysqli->real_escape_string($image1)."','".$mysqli->real_escape_string($mime1)."','".$mysqli->real_escape_string($_FILES['image1']['name'])."')";
	$mysqli->query($query);

	$query = "INSERT INTO `jnct_products_images`(`product_FK`, `image_FK`) VALUES('".$new_product_id."','".$mysqli->insert_id."')";
	$mysqli->query($query);
}


if($_FILES['image2']['tmp_name'] != null || $_FILES['image2']['tmp_name'] != "")
{
	$image2 = file_get_contents($_FILES['image2']['tmp_name']);

	$finfo = new finfo(FILEINFO_MIME);
	$type = $finfo->file($_FILES['image2']['tmp_name']);
	$mime2 = substr($type, 0, strpos($type, ';'));

	$query = "INSERT INTO `images` (`data`,`type`,`name`) VALUES('".$mysqli->real_escape_string($image2)."','".$mysqli->real_escape_string($mime2)."','".$mysqli->real_escape_string($_FILES['image2']['name'])."')";
	$mysqli->query($query);

	$query = "INSERT INTO `jnct_products_images`(`product_FK`, `image_FK`) VALUES('".$new_product_id."','".$mysqli->insert_id."')";
	$mysqli->query($query);
}


if($_FILES['image3']['tmp_name'] != null || $_FILES['image3']['tmp_name'] != "")
{
	$image3 = file_get_contents($_FILES['image3']['tmp_name']);

	$finfo = new finfo(FILEINFO_MIME);
	$type = $finfo->file($_FILES['image3']['tmp_name']);
	$mime3 = substr($type, 0, strpos($type, ';'));

	$query = "INSERT INTO `images` (`data`,`type`,`name`) VALUES('".$mysqli->real_escape_string($image3)."','".$mysqli->real_escape_string($mime3)."','".$mysqli->real_escape_string($_FILES['image3']['name'])."')";
	$mysqli->query($query);

	$query = "INSERT INTO `jnct_products_images`(`product_FK`, `image_FK`) VALUES('".$new_product_id."','".$mysqli->insert_id."')";
	$mysqli->query($query);
}


if($_FILES['image4']['tmp_name'] != null || $_FILES['image4']['tmp_name'] != "")
{
	$image4 = file_get_contents($_FILES['image4']['tmp_name']);

	$finfo = new finfo(FILEINFO_MIME);
	$type = $finfo->file($_FILES['image4']['tmp_name']);
	$mime4 = substr($type, 0, strpos($type, ';'));

	$query = "INSERT INTO `images` (`data`,`type`,`name`) VALUES('".$mysqli->real_escape_string($image4)."','".$mysqli->real_escape_string($mime4)."','".$mysqli->real_escape_string($_FILES['image4']['name'])."')";
	$mysqli->query($query);

	$query = "INSERT INTO `jnct_products_images`(`product_FK`, `image_FK`) VALUES ('".$new_product_id."','".$mysqli->insert_id."')";
	$mysqli->query($query);
}


header('Location: products.php');
?>