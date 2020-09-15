
<?php   
session_start();  
if(!isset($_SESSION["sess_user"])){  
    header("location:login.php");  
} else {  
?>  <!DOCTYPE html>
<html>
<head>
<title>OneSound-Arijith Singh</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
body,h1 {font-family: "Montserrat", sans-serif}
body {
  margin: 0;
} 

ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  width: 15%;
  background-color: #d9d9d9;
  position: fixed;
  height: 100%;
  overflow: auto;
}

li a {
  display: block;
  color: #000;
  padding: 8px 16px;
  text-decoration: none;
}

li a.active {
  background-color: black;
  color: white;
}

li a:hover:not(.active) {
  background-color: #555;
  color: gray;
}
.first {
  background-image:url(bg1.jpg);
  
  
}

.first {
	border-radius:14px;
}


</style>
</head>

<body>
<ul>
  <li><a class="active" href="#home">Home</a></li>
  <li><a href="artists main page.html">Artists</a></li>
  <li><a href="albums.html">Albums</a></li>
   <li><a href="#about">About Us</a></li>
   <li><a href="logout.php">Logout</a></li>
</ul>
	<!--Header-->
	<!--<header class="w3-center w3-margin-bottom">-->
		

	<div class="2" style="margin-left:15%;padding:1px 16px;height:820px;background-color:black;">
	<br>
	<h1 style="color:white;">Hello, <?=$_SESSION['sess_user'];?> check what's trending now!!</h1> 
		<br>
		<br>
		
	    <div class="first" style="margin-left:50px;width:370px;height:500px;color:white;">
		<center>
	    <h4 style="float:left;margin-left:25px;"><b> Aasan-Nahin-Yahan:</b></h4>
		<audio controls>
		<source src="Aasan-Nahin-Yahan.mp3" type="audio/mpeg">
		</audio>
		<br/>
		<h4 style="float:left;margin-left:25px;"><b> Ek Toh Kum Zindagani:</b></h4>
		<audio controls>
		<source src="Ek-Toh-Kum-Zindagani-b-Marjaavaan-(pagalworldsongs.co.in).mp3" type="audio/mpeg">
		</audio>
		<br/>
		<h4 style="float:left;margin-left:25px;"><b>O Saki Saki:</b></h4>
		<audio controls>
		<source src="O-Saki-Saki-Batla-House.mp3" type="audio/mpeg">
		</audio>
		<br/>
		<h4 style="float:left;margin-left:25px;"><b>Yennai Maatrum Kadhale :</b></h4>
		<audio controls>
		<source src="Yennai Maatrum Kadhale.mp3" type="audio/mpeg">
		</audio>
		<br/>
		</center>
		</div>
		
		<div class="first" style="margin-left:445px;width:370px;height:500px;margin-top:-510px;color:white;">
		
		<h4><b>&nbsp &nbsp Senorita:</b></h4>
		<center>
		<audio controls>
		<source src="Senorita (Camila Cabello, Shawn Mendes) 320Kbps-(Free-music.in).mp3" type="audio/mpeg">
		</audio></center>
		
		
		<h4><b>&nbsp &nbsp Tum Hi Aana:</b></h4>
		<center>
		<audio controls>
		<source src="Tum Hi Aana - Sad Version - Marjaavaan (SongsPaji.in).mp3" type="audio/mpeg">
		</audio>
		
		</center>
		
		<h4><b>&nbsp &nbsp Ye Chota Nuvvunna:</b></h4>
		<center>
		<audio controls>
		<source src="Ye Chota Nuvvunna.mp3" type="audio/mpeg">
		</audio>
		
		</center>
		
		<h4><b>&nbsp &nbsp Neethanae Neethane:</b></h4>
		<center>
		<audio controls>
		<source src="Neethanae Neethane.mp3" type="audio/mpeg">
		</audio>
		
		</center>
		
		</div>
		<div class="first" style="margin-top:-500px;margin-right:50px;width:370px;height:500px;float:right;color:white;">
		<center>
		<h4 style="float:left;margin-left:25px;"><b>Yeno Yeno Agide:</b></h4>
		<audio controls>
		<source src="Yeno Yeno Agide.mp3" type="audio/mpeg">
		</audio>
		<br/>
		<h4 style="float:left;margin-left:25px;"><b>Gamyave:</b></h4>
		<audio controls>
		<source src="Gamyave.mp3" type="audio/mpeg">
		</audio>
		<br/>
		<h4 style="float:left;margin-left:25px;"><b>Vachindamma:</b></h4>
		<audio controls>
		<source src="Vachindamma.mp3" type="audio/mpeg">
		</audio>
		<br/>
		<h4 style="float:left;margin-left:25px;"><b>Delicate:</b></h4>
		<audio controls>
		<source src="Delicate.mp3" type="audio/mpeg">
		</audio>
		<br/>
		</center>
		</div>
		</center>
	</div>
	<div style="color:black;height:600px;margin-top:-10px;width:85%;margin-left:15%;">
	<br>
	<h1 id="about" style="margin-left:15px;"><b>About Us</b></h1>
	<p style="margin-left:25px;font-size:22px;">With us, it’s easy to find the right music or podcast for every moment – on your phone, your computer, your tablet and more.
There are millions of tracks and episodes on One sound. So whether you’re behind the wheel, working out, partying or relaxing, the right music or podcast is always at your fingertips.
 Choose what you want to listen to, or let Spotify surprise you.You can also browse through the collections of friends, artists, and celebrities, or create a radio station and just 
 sit back.

Soundtrack your life with One sound. Subscribe or listen for free.</p>
<h1 style="margin-left:15px;"><b>Customer Service and Support</b></h1>
<p style="margin-left:25px;font-size:22px;">
Help site: Check out our help site for answers to your questions and to learn how to get the most out of Spotify and your music.<br>
Community: Get fast support from expert Spotify users. If there isn't already an answer there to your question, post it and someone will quickly answer. You can also suggest and vote on new ideas for Spotify or simply discuss music with other fans.<br>
Contact us: Contact our Customer Support if you don't find a solution on our support site or Community.</p>
	</div>
</body>
		<footer class="w3-container w3-padding-64 w3-black w3-center  w3-xlarge w3-opacity" style="margin-bottom:0px"> 
		<a href="http://www.facebook.com/ONE SOUND"><i class="fa fa-facebook-official w3-hover-opacity"></i></a>
		<a href="http://www.instagram.com/ONE SOUND"><i class="fa fa-instagram w3-hover-opacity"></i></a>
		<a href="http://www.pinterest.com/ONE SOUND"><i class="fa fa-pinterest-p w3-hover-opacity"></i></a>
		<p class="w3-medium">Email Id: <a href=mailto:<nowiki>OneSound@yahoo.com</a><br/>Contact no: +91 8454621308<br/><br/>
		<h4>ONE SOUND
		<br/>One stop.One destination.Unlimited Music </p></h4>
	</footer> 

</html>
<?php  
}  
?>  