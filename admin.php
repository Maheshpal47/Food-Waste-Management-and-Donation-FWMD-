<?php
	require("connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login</title>
<link rel="stylesheet" href="adstyle.css">
</head>
<body>

<div class="container">
<div class="myform">
<form method="post">
<h2>ADMIN LOGIN</h2>
<input type="text" name="Username" placeholder="Username">
<input type="password" name="Password" placeholder="Password">
<button type="submit" name="submit">LOGIN</button>
</form>
</div>
<div class="image">
<img src="admin.png" width="300px">
</div>
</div>
<?php
if(isset($_POST['submit']))
{
$query="SELECT * FROM `admin` WHERE `Username`='$_POST[Username]' AND `Password`='$_POST[Password]'";
$result=mysqli_query($con,$query);
if(mysqli_num_rows($result)==1)
{
	session_start();

	header("location:panel.php");
}
else
{
	echo "<script>('incorrect Data');</script>";
}
}
?>
</body>
</html>