<html>
<body>
	<?php
	include 'conn.php';
	$a=$_POST['first_name'];
	$b=$_POST['last_name'];
	$c=$_POST['gender'];
	$h=$_POST['post_id'];
	$d=$_POST['dob'];
	$e=$_POST['exam_date'];
	$f=$_POST['phone_number'];
	$g=$_POST['marks'];
	$sql="insert into candidatesresult(first_name,last_name,gender,post_id,dob,exam_date,phone_number,marks)values('$a','$b' ,'$c','$h','$d','$e','$f','$g')";
	$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
	?>
	<script type="text/javascript">
		alert("inserted successfully");
		window.location="report.php";
	</script>
</body> 
</html>