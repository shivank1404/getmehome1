<html>
<head><title>Login</title></head>
<?php
$user="";
$password="";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = test_input($_POST["user"]);
  $password = test_input($_POST["password"]);
  }
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<link rel="stylesheet" type="text/css" href="cascadesignup.css">
</head>
<p class="texto">LOGIN</p>
<div class="Registro">
<form method="post" action="login3.php">

<span class="fontawesome-user"></span>
<input type="text" required placeholder="username" autocomplete="off" name="user"> 
<span class="fontawesome-lock"></span><input type="password" name="password" id="password" required placeholder="Password" autocomplete="off" name="password"> 
			<input type="submit" value="Login" title="register">
			</form>
<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "getmehome";
// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
 $check=mysqli_query($conn,"select * from user where username='$user' and password='$password';");
 $x=mysqli_query($conn,"select username from user where username='$user' and password='$password';");
 $checkrows=mysqli_num_rows($check);
 $flag=0;
if($checkrows>0)
{
	session_start();
	$_SESSION['us']=$user;
	header('location:sp.php?'.$user);
	$flag=1;
}
else if($user!="")
{
	echo'<br>';
	echo "<font size=3>Invalid Username or password";
} 
if($flag==1)
{
if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
}
$conn->close();
?>