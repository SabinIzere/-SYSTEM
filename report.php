<html>
<style type="text/css">
	#container
	{
		width:900px;
		height: 500px;
		background-color: pink;
		border-radius: 10px;
		border: solid 10px;
			}
</style>
<body>
	<center><div id="container">
		<h1><u>List of post</u></h1>
		<a href="candform.php">ADD NEW</a>
		<table border="1">
			<tr>

			     
				<th>Cand_id</th>
				<th>Post id</th>
				<th>Post_name</th>
				<th>Firstname</th>
				<th>Lastname</th>
				<th>Gender</th>
				<th>Dateofbirth</th>
				<th>Examdate</th>
				<th>Phonenumber</th>
				<th>Marks</th>
			</tr>
			<?php
			include 'conn.php';
			$sql='select post.*,candidatesresult.* from post,candidatesresult where post.post_id=candidatesresult.post_id order by marks desc';
			$result=mysqli_query($conn,$sql)or die(mysqli_error($conn));
			while($row=mysqli_fetch_array($result))
			{
				echo '<tr>';
				echo '<td>'.$row['cand_id'].'</td>';
				echo '<td>'.$row['post_id'].'</td>';
				echo '<td>'.$row['post_name'].'</td>';
				echo '<td>'.$row['first_name'].'</td>';
				echo '<td>'.$row['last_name'].'</td>';
				echo '<td>'.$row['gender'].'</td>';
				echo '<td>'.$row['dob'].'</td>';
				echo '<td>'.$row['exam_date'].'</td>';
				echo '<td>'.$row['phone_number'].'</td>';
				echo '<td>'.$row['marks'].'</td>';
				echo '</tr>';
			}
			?>
		</table>
	</center>
</body>
</html>