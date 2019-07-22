<?php
  $conn=mysqli_connect("localhost","root","","favicon"); 
  $name=$_POST['name']; 
  $email=$_POST['email'];
  $message=$_POST['message'];
  
 
  $query= "INSERT INTO contactform(id, name, email, message) VALUES (NULL, '$name', '$email', '$message')";
  $insert=mysqli_query($conn,$query)or die(mysqli_error($conn));
  if($insert){
	  echo"<script>window.alert('Thank you for contacting us')</script>";
	  header('refresh:0;url=index.html');
  }else{
	  echo"<script>window.alert('Failed to contact')</script>";
	  header('refresh: 0;url=contactform.html');
	  
  }
  
?>