<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
<meta content="text/html; charset=utf-8" http-equiv="Content-Type" />
<title>Untitled 1</title>
</head>

<body>
<?php

echo $_POST['city'];
//Get the name of the upload file and display the file name
$image_name = $_FILES['photo']['name'];

echo 'Image name: ' . $image_name. '<br />';

//Get the type of file 
$type = $_FILES['photo']['type'];
echo 'File type: ' . $type . '<br />';

//See where the file got uploaded to in the cache
$temp_dir = $_FILES['photo']['tmp_name'];
echo 'Temp Dir: ' . $temp_dir . '<br />';

//Set up a permenant directory path
$target = 'images/' . $image_name;

//Copy the file out of cache to the permenant directory
move_uploaded_file($temp_dir, $target);

//Display the image back to the user
echo '<img src="' . $target . '" width="300" />';

$phone = $_POST['phone'];

//Strip out all the characters from the phone number except the digets
$phone = str_replace(' ','', $phone);
$phone = str_replace('(','', $phone);
$phone = str_replace(')','', $phone);
$phone = str_replace('-','', $phone);
$phone = str_replace('.','', $phone);
$phone = str_replace('+','', $phone);

$city_name = $_POST['city'];

$sql_city = "SELECT id FROM cities WHERE city = '$city_name'";


	$sql = "INSERT INTO stores (store_name, address, city_id, phone, manager, photo) VALUES 
	('$_POST[store_name]' , '$_POST[address]' , '$city', '$phone', '$_POST[manager]', '$image_name')";

	//connect to the database
	$conn = mysqli_connect('webdesign4.georgianc.on.ca', 'db200247775', '93440', 'db200247775') or die('Could not connect: ' . mysqli_error());

	//save the data
	$city = mysqli_query($conn, $sql_city);
	mysqli_query($conn, $sql);
	
	//dissconnect
	mysqli_close($conn);

?>

</body>

</html>
