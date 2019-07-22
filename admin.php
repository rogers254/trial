<?php
session_start();
$conn=mysqli_connect("localhost","root","","favicon") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	$admin=mysqli_query($conn,"select * from admin where username='$username'and password='$password'")or die(mysqli_error($conn));
    
	$row2=mysqli_num_rows($admin);
	
    if($row2==1){
		while($rows2=mysqli_fetch_array($admin)){
			$_SESSION['username']=$rows2['username'];
			$_SESSION['pass']=$rows2['password'];
    		?>
            <script>alert("You are successfully loggedin to the system");
            window.location.href='registration_database.php';
            </script>
            <?php
		}
	}else{
	?>
	<script>
	    alert("failed to login");
	    window.location.href='admin.html';
	</script>
	<?php
	}
}

?>

