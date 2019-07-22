<?php
	$conn=mysqli_connect("localhost","root","");
	$db=mysqli_select_db($conn,"favicon");
	
	$username=$_POST['username'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$password=$_POST['password'];
	
	
	$query="INSERT INTO register(id,username,email, phone, password)VALUE(NULL,'$username','$email', '$phone', '$password')";
	$insert=mysqli_query($conn,$query);
	if($insert){
		echo '<script> window.alert(" Contact saved successfully")</script>';
		header ('refresh:0; url=index.html');
	}else{
		echo '<script> window.alert("failed to save contact")</script>';
		header ('refresh:0; url=register.html');
	}
?>