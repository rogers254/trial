<?php
  $conn=mysqli_connect("localhost","root","","favicon"); 
  $checkin=$_POST['checkin'];
  $checkout=$_POST['checkout'];
  $rooms=$_POST['rooms'];
  $adults=$_POST['adults'];
  $children=$_POST['children'];
  $email=$_POST['email'];
  $phone=$_POST['phone'];
  
 
  $query= "INSERT INTO room(id, checkin, checkout, rooms, adults, children, email, phone) VALUES (NULL, '$checkin', '$checkout', '$rooms', '$adults', '$children', '$email', '$phone')";
  $insert=mysqli_query($conn,$query)or die(mysqli_error($conn));
  if($insert){
	  echo"<script>window.alert('Room(s) booked successfully')</script>";
	  header('refresh:0;url=book.html');
  }else{
	  echo"<script>window.alert('Failed to book room')</script>";
	  header('refresh:0;url=book.html');
	  
  }
  
?>