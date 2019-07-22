<?php
session_start();
$conn=mysqli_connect("localhost","root","","favicon") or die(mysqli_error($conn));
if(isset($_POST['submit'])){
	$username=$_POST['username'];
	$password=$_POST['password'];
    
	$register=mysqli_query($conn,"select * from register where username='$username'and password='$password'")or die(mysqli_error($conn));
    
	$row2=mysqli_num_rows($register);
	
    if($row2==1){
		while($rows2=mysqli_fetch_array($register)){
			$_SESSION['id']=$row2['id'];
			$_SESSION['username']=$rows2['username'];
			$_SESSION['pass']=$rows2['password'];
			$_SESSION['email']=$rows2['email'];
			$_SESSION['phone']=$rows2['phone'];
    		?>
            <script>alert("Login Success");
            window.location.href='index.html';
            </script>
            <?php
		}
	}else{
	?>
	<script>
	    alert("failed to login");
	    window.location.href='login.html';
	</script>
	<?php
	}
}

?>

