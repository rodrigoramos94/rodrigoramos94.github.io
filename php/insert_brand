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

// get url
$url = $_POST['url'];


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
}

// insert brand data
$query = "INSERT INTO `brands` (`name`,`description`,`url`, `image_FK`) VALUES('".$mysqli->real_escape_string($name)."','".$mysqli->real_escape_string($description)."','".$url."','".$mysqli->insert_id."')";
$mysqli->query($query);


header('Location: ../index.php');
?>