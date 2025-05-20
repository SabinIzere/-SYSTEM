<html>
<body>
	<center>
		<?php
		include 'conn.php';
		?>
		<h1><u>Candidate Result Form</u></h1>
		<form method="POST" action="candinsert.php">
			Firstname:<input type="text" name="first_name" required="required"><br><br>
			Lastname:<input type="text" name="last_name" required="required"><br><br>
			Gender:<input type="text" name="gender" required="required"><br><br>
			Postid:<input type="number" name="post_id" required="required"><br><br>
			Dateofbirth:<input type="date" name="dob" required="required"><br><br>
            Examdate:<input type="date" name="exam_date" required="required"><br><br>
            Phonenumber:<input type="number" name="phone_number" required="required"><br><br>
            Marks:<input type="number" name="marks" required="required"><br><br>
            <input type="submit" value="send">
        </form>
	</center>
</body>
</html>