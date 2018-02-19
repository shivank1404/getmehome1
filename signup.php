<html>
<head><title> Sign up</title></head>
<?php
// define variables and set to empty values
$user= "";
$password= "";
$email= "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $user = test_input($_POST["user"]);
  $password = test_input($_POST["password"]);
  $email = test_input($_POST["email"]);
  
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<head>
<link rel="stylesheet" type="text/css" href="cascadesignup.css">
</head>
<p class="texto">Sign Up</p>
<div class="Registro">
<form method="post" action="signup.php">

<span class="fontawesome-user"></span>
<input type="text" required placeholder="username" autocomplete="off" name="user">
<br> 
<span class="fontawesome-envelope-alt"></span>
<input type="email" id="email" required placeholder="Email" autocomplete="off" name="email">
<br>
<span class="fontawesome-lock"></span><input type="password" name="password" id="password" required placeholder="Password" autocomplete="off" name="password"> 
			<input type="submit" value="Sign Up" title="register">
</body>

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
 $check=mysqli_query($conn,"select * from user where username='$user';");
    $checkrows=mysqli_num_rows($check);


$flag=0;
if($checkrows==0&&$user!="")
{
	$sql = "INSERT INTO `user`(`username`, `password`, `email`) VALUES ('$user','$password','$email');";
		$flag=1;
		header('location:first.php');
}
else if($checkrows>0)
{
	echo'<br>';
		echo'<br>';
echo'<br>';

	echo "<font size=5>Username exists";
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
</html>