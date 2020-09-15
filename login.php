	<!DOCTYPE html>
	<head>
		<title>Home Page</title>
		<style>
		body{
    margin:0;
    padding:0;
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-size: 15px;
	background-image:url("login1.jpg")
    }
header{
    height:100px;
    position:fixed;
    width:100%;
    top:0;
}
.logo{
    float:left;
    margin-left:9%;
	color:white;
}        


}
form{
    font-size:26px;
    color:white; 
	margin-top:50%;
}
button{
    margin-top:30px;
    color:white;
    padding: 12px 15px;
    width: 30%;
    border-radius: 8px;
}
input{
    padding: 15px 20px;
    border: 1px solid #ccc;
    box-sizing: border-box;
	width:30%;
	margin-left:30px;
	margin-top:2%;
    
}
label{
    margin-top: 2%;
}
p{
font-size:55px;
}
	</style>
	</head>
	<body>
	<header>
		<div class="logo">
	
		<h1 style="margin-top:17%;">ONE &nbsp SOUND</h1>
		</div>
        
        </div>
	</header>
	
<form action="" method="POST">
<br>
<br>
<br>
<br> 
<br>
<br>
<br> 
<br>
<br>
<br> 
<br>
<br>
<p style="margin-left:95px;color:white;"> Say Hello !!!</p>
    <br> 
  <input type="text" name="user" placeholder="Enter your Username" style="background-color:rgb(232,232,232);height: 40px;top:400px;font-size:19px;"><br>
  <input type="password" name="pass" placeholder="Enter your Password" style="background-color:rgb(232,232,232);height: 40px;font-size:19px;" >
  <br><br>
  <button type="submit" style="float:left;height: 45px;width:150px;background-color:#3366ff;top:198px;left:40px;margin-left:5%;font-size:18px;" value="login" name="submit" >Login</button>
  <button class="lo" style="float:left;height: 45px;width:150px;background-color:#ff3399;top:198px;left:40px;margin-left:20px;font-size:18px;" type="submit" formaction="registration.php" >Register</button>
  
  <label style="float:left;font-size:15px;margin-left: 2%" >
     <input type="checkbox" checked="checked" name="remember"> Remember me
      </label>
  <br>
</form> 
<br>
<br>
<?php  
if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysqli_error());  
    mysqli_select_db($con,'user_registration') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."' AND password='".$pass."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['username'];  
    $dbpassword=$row['password'];  
    }  
  
    if($user == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['sess_user']=$user;  
  
    /* Redirect browser */  
    header("Location: homepage.php");  
    }  
    } else {  
	echo '<br>';
	echo '<br>';
	echo '<br>';
	
	
    echo '<span style="color:red;margin-left:10%;font-size:18px;float:left;"><b> * Invalid username or password!</b></span>'; 
    }  
  
} else {  
echo '<br>';
	echo '<br>';
	echo '<br>';
	
	
    echo '<span style="color:red;margin-left:10%;font-size:18px;float:left;"><b> * All fields are required!</span></b>';
    
}  
}  
?>  
</body>
</html>