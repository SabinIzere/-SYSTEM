<html>
<body>
	<?php
	include 'conn.php';
	$a=$_POST['post_name'];
	$sql="insert into post(post_name)values('$a')";
	$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	?>
	<script type="text/javascript">
		alert("added successfully");
		window.location="view.php";
	</script>
</body>
</html> 