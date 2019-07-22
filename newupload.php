<?php
$servername="localhost";
$username="root";
$password="";

$conn=mysqli_connect($servername,$username,$password) or die(mysqli_error("could not connect to database"));

if($conn){
	echo "connected to the database successful";
	echo "<br>";
}

else{
	echo "not connected to the database";
}

$select_database=mysqli_select_db($conn,"favicon") or die(mysql_error($conn));
if($select_database){
	echo "database is selected"; 
}
else{
	echo "database is not selected";
}

$room_name=$_POST['room_name'];
$Type=$_POST['Type'];
$Capacity=$_POST['Capacity'];
$Price=$_POST['Price'];
$uploadDir='uploads/';
$fileName=$_FILES['image']['name'];
$tmpName=$_FILES['image']['tmp_name'];
$fileSize=$_FILES['image']['size'];
$fileType=$_FILES['image']['type'];

$filepath=$uploadDir.$fileName;
$result=move_uploaded_file($tmpName, $filepath);

if(!$result){
	$filepath="uploads/no_images.jpeg";
}
$query=mysqli_query($conn, "insert into book(id, room_name,Type,Capacity, Price, image)values(null, '$room_name', '$Type', '$Capacity', '$Price', '$filepath')");

if($query){
	echo"<script>window.alert('Record inserted successfully')</script>";
	header('refresh:0;url=upload_room.php');
}
else{
	echo"<script>window.alert('Record not inserted')</script>";
}
?>