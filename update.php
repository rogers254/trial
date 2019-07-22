<?php
  include('connect.php');
  if(isset($_POST['update'])){
     $username=$_POST['username'];     
     $email=$_POST['email'];
	 $phone=$_POST['phone'];
	 $pass=$_POST['pass'];
     $queryupdate=mysqli_query($conn,"update register set username='$username',email='$uemail', phone='$phone', pass='$pass' where id='$id'")or die(mysqli_error($conn));
     if($queryupdate){
        echo'<script>window.alert("Your details have been updated successfully")</script>';
        header('refresh:0;url=profile.php');
        } else{
        echo'<script>window.alert("Details not updated. Please try again.")</script>';
        header('refresh:0;url=profile.php');			
        }
  }
?>