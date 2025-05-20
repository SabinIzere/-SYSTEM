<html>
<body>
	<?php
	include 'conn.php';
	$sql='delete from post where post_id='.$_GET['id'];
	$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	?>
	<script type="text/javascript">
		alert("deleted  successfully");
		window.location="view.php";
	</script>
</body>
</html>