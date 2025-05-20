<html>
	<body>
		<?php
		include 'conn.php';
		?>
		<center>
		<h1><u>form list</u></h1>
		<form method="POST"action="insert.php">
			Post_name:<input type="text" name="post_name" required="required">
			<input type="submit" value="insert">
			<input type="reset" value="cancel">
		</form>
		</center>
	</body>
	</html>
			
