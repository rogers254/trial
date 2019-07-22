<?php
include('connect.php');

    $id=$_GET['id'];
	$query="delete from contactform where id='$id'";
	$delete_query=mysqli_query($conn,$query);
	if($delete_query){
		echo"<script>window.alert('message deleted successfully')</script>";
		header('refresh:0;url=contact_record.php');
	}else{
		echo"<script>window.alert('message not deleted')</script>";
		header('refresh:0;url=contact_record.php');
	}

?>