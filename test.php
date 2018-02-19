<html>
<head>
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
  opacity:0.5;
  
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
  font-size: 1.0rem;
  width:45%;
  margin-left:5%;
  margin-top:12%;
  float:left;


}
h1 {
  font-size: 1.5rem;
  
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
margin:0;
padding:0;
overflow:hidden;



}
li{

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
<div id="polina">
<h1><center>getmehome</center></h1><br><br><br>
</div>

<ul>



<li style="float:right"><a href="aboutus.php">About Us</a></li>
<li style="float:right"><a href="first.php">LogIn</a></li>

<li class="active" style="float:right"><a href="test.php">Home</a></li>


</ul>
<center><div id="ss">
<h1>Online Bus Ticket Booking Made Easy.</h1>

<p><a href="first.php"> book your tickets now!!</a></p>
</div></center>
<div id="bottom">

</div>
</body>
</html>