<!DOCTYPE html>
<html>
	<head>
		<title></title>
	</head>
	<body>
		<form method="post">
			<input type="text" name="name_txt" placeholder="name here">
			<input type="text" name="email_txt" placeholder="email here">
			<input type="text" name="password_txt" placeholder="password here">
			<input type="submit" name="submit_btn">
		</form>
		<?php
		$conn = new mysqli('localhost','root','','student_record');
		if($conn -> connect_error)
		{
			die("Error". $conn -> connect_error);
		}
		if(isset($_POST['submit_btn']))
		{
			$name = $_POST['name_txt'];
			$email = $_POST['email_txt'];
			$password = $_POST['password_txt'];
			$sql = "INSERT INTO student_tb (Name, Email, Password) VALUES ('$name','$email','$password')";
			
			if($conn -> query ($sql) === true)
			{
				echo "Submitted";
			}
			else
			{
				echo "error ".$sql. "<br>" .$conn->error;
			}
			}
		?>
	</body>
</html>