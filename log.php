<html>
<?php

session_start();

$user=$_SESSION['use'];
$_SESSION['us']=$user;
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
$result=mysqli_query($conn,"select * from travellog where username='$user';");
echo '<center>';
 echo '<table style="width:70%" border=4>';  
echo '<th> Passenger Name </th>'; 
 echo '<th> Busno </th>';
 echo '<th> From </th>';
 echo '<th> To </th>';  
  echo '<th> Date</th>';
  echo '<th> Time</th>';
  echo '<th> Fare</th>';
  echo '</center>';
while($row = mysqli_fetch_array($result)) 
  { 
	$pname=$row['Name'];
	$from=$row['departure'];
	$to=$row['arrival'];
	$sp=$row['doj'];
	$fa=$row['fare'];
	$b=$row['busno'];
	$t=$row['toj'];

  echo '<center>';
  echo ''; 
  echo '<tr>';
  echo '<td>';
  echo '<center>';
  echo "$pname";
  echo '</td>';
;
  echo '<td>';
  echo '<center>';
  echo "$b";
  echo '</td>';
    echo '</td>';
	echo '<td>';
  echo '<center>';
  echo "$from";
  echo '</td>';echo '<td>';
  echo '<center>';
  echo "$to";
  echo '</td>';
   echo '<td>';
  echo '<center>';
  echo $sp;
  echo '<td>';
    echo '<center>';
  echo $t;

  echo '</td>';
  echo '<td>';
  echo '<center>';
  echo $fa;
  }
$conn->close();
echo '</table>';
?>

<br><br>
	"<a href='sp.php?$user'> GO BACK </a> ";
	</html>