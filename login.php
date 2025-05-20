<html>
<body>
<center>
		<h1> Users form</h1>
		<form method="POST">
			Username:<input type="text" name="username" required="required"><br><br>
			Password:<input type="password" name="password" required="required"><br><br>
			<input type="submit" name="login" value="login">			
		</form>
		<?php
		include 'conn.php';
		if(isset($_POST['login']))
		{
			$a=$_POST['username'];
			$b=$_POST['password'];
			$sql="select * from users where username='$a'";
			$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
			$row=mysqli_fetch_assoc($result);
			$c=$row['username'];
			$d=$row['password'];
			if($a==$c && $b==$d)
			{
				echo "<script> window.open('form.php','_self');</script>";
			}
			else
			{
				echo "wrong password";
			}
		}
		?>
	</center>
</body>
</html>