<?php

$mysqliHost = 'localhost';
$mysqliUsername = 'root';
$mysqliPassword = '';
$mysqliDatabase = 'dreams-feels';

// get title
$title = $_POST['title'];
// get description
$description = $_POST['description'];
// get url
$url = 'http://www.youtube.com/embed/'.substr($_POST['url'], -11).'?autoplay=0&enablejsapi=1';

// open mysqli db connection
$mysqli = new mysqli($mysqliHost,$mysqliUsername,$mysqliPassword,$mysqliDatabase);

// get tutorial data
$query = "INSERT INTO `tutorials` (`title`,`description`,`url`) VALUES('".$mysqli->real_escape_string($title)."','".$mysqli->real_escape_string($description)."','".$mysqli->real_escape_string($url)."')";
$mysqli->query($query);

$query = "SELECT tutorial_ID FROM tutorials ORDER BY creation_date DESC";
$result = $mysqli->query($query);
$row_tutorial = mysqli_fetch_array($result);


// get image data
if($_FILES['image1']['tmp_name'] != null || $_FILES['image1']['tmp_name'] != "")
{
	$image1 = file_get_contents($_FILES['image1']['tmp_name']);

	$finfo = new finfo(FILEINFO_MIME);
	$type = $finfo->file($_FILES['image1']['tmp_name']);
	$mime1 = substr($type, 0, strpos($type, ';'));

	$query = "INSERT INTO `images` (`data`,`type`,`name`) VALUES('".$mysqli->real_escape_string($image1)."','".$mysqli->real_escape_string($mime1)."','".$mysqli->real_escape_string($_FILES['image1']['name'])."')";
	$mysqli->query($query);

	$query = "INSERT INTO `jnct_tutorials_images`(`tutorial_FK`, `image_FK`) VALUES ('".$row_tutorial[0]."','".$mysqli->insert_id."')";
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

	$query = "INSERT INTO `jnct_tutorials_images`(`tutorial_FK`, `image_FK`) VALUES ('".$row_tutorial[0]."','".$mysqli->insert_id."')";
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

	$query = "INSERT INTO `jnct_tutorials_images`(`tutorial_FK`, `image_FK`) VALUES ('".$row_tutorial[0]."','".$mysqli->insert_id."')";
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

	$query = "INSERT INTO `jnct_tutorials_images`(`tutorial_FK`, `image_FK`) VALUES ('".$row_tutorial[0]."','".$mysqli->insert_id."')";
	$mysqli->query($query);
}


header('Location: tutorials.php');
?>