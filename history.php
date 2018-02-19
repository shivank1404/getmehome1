<?php
$servername = "localhost";
$username = "root";
$pass = "";
$dbname = "getmehome";
$bus="";

// Create connection
$conn = new mysqli($servername, $username, $pass, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
	$pname=$_GET["name"];
	$from=$_GET["from"];
	$new_date=$_GET["date"];
	$bus=$_GET["bno"];
	$user=$_GET["user"];
	$to=$_GET["to"];
	$lol=mysqli_query($conn,"SELECT * FROM busservice where busno='$bus'");
$r = mysqli_fetch_array($lol);
$f= $r['toj'];
$x= $r['fare'];
$check=mysqli_query($conn,"select * from busservice where busno='$bus';");
$checkrows1=mysqli_num_rows($check);
$check2=mysqli_query($conn,"select * from user where username='$user';");
$checkrows2=mysqli_num_rows($check2);


$flag=0;
if($checkrows1!=0)
{
$sql="insert into travellog values('$user','$pname','$from','$to','$new_date','$f','$x','$bus')";

if ($conn->query($sql) === TRUE) {
    
	echo "<center><h1>Ticket booked succesfully</h1>";
	echo"'$pname'";
	
	session_start();
	$_SESSION['us']=$user;
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<center>";
	echo"<a href='sp.php?$user'> BOOK ANOTHER TICKET ???</a> ";
	echo"<br>";
	echo"<br>";
	echo"<br>";
	echo"<button><a href='first.php'> SIGN OUT</a></button>";
	
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}
$conn->close();
}
?>