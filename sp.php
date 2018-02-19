<html>
<head>
<link rel="stylesheet" type="text/css" href="searchpage1.css">
<style>
body {
  margin: 0;
  background: #000; 
}
video { 
    position: fixed;
    top: 50%;
    left: 50%;
    min-width: 100%;
    min-height: 100%;
    width: auto;
    height: auto;
    z-index: -500;
    transform: translateX(-50%) translateY(-50%);
 background: url('//demosthenes.info/assets/images/polina.jpg') no-repeat;
  background-size: cover;
  transition: 1s opacity;
  opacity:0.3;
  
}
.stopfade { 
   opacity: .5;
}

#polina { 
  font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100; 
  background: rgba(0,0,0,0.3);
  color: white;
  padding-top: 3rem;
  width: 20%;
  height:cover;
  margin-top:0px;
  float: left;
  font-size: 1.0rem;
}
#ss{
font-family: Agenda-Light, Agenda Light, Agenda, Arial Narrow, sans-serif;
  font-weight:100; 
  background: rgba(0,0,0,0.3);
  color: white;
  padding: 2rem;
  float: left;
  font-size: 2.0rem;
  width:45%;
  margin-left:25%;
  margin-top:12%;
  float:left;


}
h1 {
  font-size: 2.0rem;
  
  margin-top: 0;
  letter-spacing: .3rem;
}
#polina button { 
  display: block;
  width: 80%;
  padding: .4rem;
  border: none; 
  margin: 1rem auto; 
  font-size: 1.3rem;
  background: rgba(255,255,255,0.23);
  color: #fff;
  border-radius: 3px; 
  cursor: pointer;
  transition: .3s background;
}
#polina button:hover { 
   background: rgba(0,0,0,0.5);
}

a {
  display: inline-block;
  color: #fff;
  text-decoration: none;
  background:rgba(0,0,0,0.5);
  padding: .5rem;
  transition: .6s background; 
}
a:hover{
  background:rgba(0,0,0,0.9);
}

@media screen and (max-device-width: 1000px) {
  html { background: url(//demosthenes.info/assets/images/polina.jpg) #000 no-repeat center center fixed; }
  #bgvid { display: none; }
}
ul{
list-style-type:none;
}
li{

text-decoration:none;

}
.act {
list-style-type:none;
margin:0;
padding:0;
overflow:hidden;



}
.active{

display:inline-block;
float:left; 
border-right:2px solid white;
}

li a{
display:block;
text-align:center;
color:white;
text-decoration:none;
padding:15px 16px;
margin:0px;
}

,li:last-child{
border-right:none;}

li a:hover:not(.actve){
background-color:#111;
}
.active{
background-color:crimson;}

</style>
</head>
<body>
<video  id="bgvid" playsinline autoplay muted loop>
<source src="Incredible india travel video.webm" type="video/webm"> 
<source src="Incredible india travel video.mp4" type="video/mp4">

  </video>
  <ul class="act">





<li class="active" style="float:right"><a href="test.php">SignOut</a></li>


</ul>
<div id="ss">
<center><h1>Book Ticket</h1></center>

<?php
$pname="";
$from="";
$to="";
$new_date="";
$d="";
$bus="";
;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $pname=test_input($_POST["Name"]);
  $from= test_input($_POST["from"]);
  $to= test_input($_POST["to"]);
  $new_date= date('Y-m-d', strtotime($_POST['dateFrom']));
  $d = date('D', strtotime($new_date));
	
  }
 /* if ($_SERVER["REQUEST_METHOD"] == "GET")
  $bus=test_input($_GET["bno"]);*/
function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}
?>
<?php
session_start();
$user=$_SESSION['us'];

$_SESSION['use']=$user;
?>
	<a href='log.php?$user' style="float:right;" > Booking History </a> <br><br>
<form method="post" action="sp.php">
<ul >
    <li><label>Passenger Name <span class="required">*</span></label><input type="text" name="Name"required class="field-divided" placeholder="Name" />&nbsp;</li>
    <li>
        <label>Date <span class="required">*</span></label>
		<input type="date" name="dateFrom" value="<?php echo date('Y-m-d'); ?>" />	
		<br>
      </li>
    <li>
        <label>Depart From</label>
        <select name="from" class="field-select">
		
        <option value="Delhi">Delhi</option>
        <option value="Mumbai">Mumbai</option>
        
		<option value="Shimla">Shimla</option>
		
		<option value="Thiruvanthpuram">Thiruvanthpuram</option>
        <option value="Jammu">Jammu</option>
		<option value="Yamunanagar">Yamunanagar</option>
         <option value="Patna">Patna</option>
		 <option value="Mathura">Mathura</option>
		 <option value="Lucknow">Lucknow</option>
		 
        </select>
    </li>

    <li>
        <label>Arrive At</label>
		<select name="to" class="field-select">
        <option value="Mumbai">Mumbai</option>
        <option value="Delhi">Delhi</option>
        <option value="Yamunanagar">Yamunanagar</option>
		<option value="Shimla">Shimla</option>
		<option value="Thiruvanthpuram">Thiruvanthpuram</option>
		<option value="Ranchi">Ranchi</option>
		<option value="Dehradun">Dehradun</option>
        </select>
    </li>


    
    <li>
        <input type="submit" value="Search!" />
    </li>
</ul>
</form>
<?php
$sql="";
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
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	
	echo $bus;
}
$result=mysqli_query($conn,"SELECT * FROM busservice where departure='$from' and arrival='$to' and day='$d'");
  echo '<center>';
  echo '<table style="width:70%" border=4 style="color:yellow;">';  
  echo '<font color="yellow">';
  echo '<th><font color="yellow"> Select </th>';
  echo '<th><font color="yellow"> Busno </th>';
  echo '<th><font color="yellow"> Service Provider </th>';  
  echo '<th><font color="yellow"> Day</th>';
  echo '<th><font color="yellow"> Time</th>';
  echo '<th><font color="yellow"> Fare</th>';
  echo '</center>';
  ?>

 <form method="GET" action="history.php" name="later">
<?php 
while($row = mysqli_fetch_array($result)) 
  { 
	$sp=$row['sp'];
	$fa=$row['fare'];
	$da=$row['day'];
	$b=$row['busno'];
	$t=$row['toj'];

  echo '<center>';
  echo ''; 
  echo '<tr>';
  echo '<td>';
  echo '<center>';
  echo "<input type='radio' name='bno'required value='$b'>" ;
  
  echo '</td>';
  echo '<td>';
  echo '<center>';
  echo "<font color='yellow'>$b";
  echo '</td>';
    echo '</td>';
   echo '<td>';
  echo '<center>';
  echo "<font color='yellow'>$sp";
  echo '<td>';
  echo '<center>';
  echo "<font color='yellow'>$da";

  echo '</td>';
  echo '<td>';
    echo '<center>';
  echo"<font color='yellow'> $t";

  echo '</td>';
  echo '<td>';
  echo '<center>';
  echo "<font color='yellow'>$fa";
  echo '</td>';
  echo '</tr>'; 
  echo "<input type='hidden' name='user' value='$user'>";
  echo "<input type='hidden' name='to' value='$to'>";
  echo "<input type='hidden' name='from' value='$from'>";
  echo "<input type='hidden' name='date' value='$new_date'>";
  echo "<input type='hidden' name='name' value='$pname'>";
  
  echo '</center>';   
  }
  
			
  
 
echo '</table>';  
echo '<br>';
echo '<input type="submit" value="Submit!" />';

?>
</form> 


</html>


</div>
</body>
</html>