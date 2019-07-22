<?php
  $conn=mysqli_connect("localhost","root","","favicon"); 
  $name=$_POST['name'];
  $phone=$_POST['phone'];
  $time=$_POST['time'];
  $foods=$_POST['foods'];
  $number_people=$_POST['number_people'];
  
 
  $query= "INSERT INTO dinner(id, name, phone, time, foods, number_people) VALUES (NULL, '$name', '$phone', '$time', '$foods', '$number_people')";
  $insert=mysqli_query($conn,$query)or die(mysqli_error($conn));
  if($insert){
	  echo"<script>window.alert('Your reservation is successful')</script>";
	  header('refresh:0;url=book_dinner.html');
  }else{
	  echo"<script>window.alert('Failed to make reservation')</script>";
	  header('refresh:0;url=book_dinner.html');
	  
  }
  
?>