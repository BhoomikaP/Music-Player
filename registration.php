	<!DOCTYPE html>
	<head>
		<title>Registration Page</title>
		<style>
		body{
    font-family:Georgia, 'Times New Roman', Times, serif;
    font-size: 15px;
	background-image:url("bg4.png");
	background-size:cover;
	
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

form{
    font-size:26px;
	margin-top:50px;	
}
button{
    margin-top:30px;
    color:white;
    padding: 12px 15px;
    width: 30%;
    border-radius: 8px;
	background-color:forestgreen;
	margin-left:65%;
	margin-top:2%; 
	}
input{
    padding: 15px 20px;
    border: 1px solid #ccc;
   box-sizing:border-box;
	width:30%;
	margin-left:65%;
	margin-top:2%; 
}

	</style>
	</head>
	<body>
	<header>
		<div class="logo">
	
		<h1 style="margin-top:17%;">ONE &nbsp SOUND</h1>
		</div>  
	</header>
	<div>
	<p style="margin-left:70%;color:white;font-size:35px;margin-top:150px;">REGISTER NOW!!</p>
			<form action="" method="POST">  
					 
                            <input type="text" placeholder="Name" name="name" style="font-size:20px;" >
                            <input  type="text"  placeholder="Choose Password" name="pass" style="font-size:20px;">
                            <input type="email" placeholder="Email" name="user" style="font-size:20px;">   
                            <input type="text" placeholder="Phone"  name="phone" style="font-size:20px;">
                            <button  type="submit" value="Register" name="submit" style="font-size:20px;">Register</button>
							
			</form>
	</div>
	<br>
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['name']) && !empty($_POST['pass']) && !empty($_POST['user']) && !empty($_POST['phone']) ) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
	$name=$_POST['name']; 
	$phone=$_POST['phone']; 
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    mysqli_select_db($con,'user_registration') or die("cannot select DB");
  
    $query=mysqli_query($con,"SELECT * FROM login WHERE username='".$user."'");  
    $numrows=mysqli_num_rows($query);  
    if($numrows==0)  
    {  
    $sql="INSERT INTO login(username,password) VALUES('$user','$pass')";  
	$sql1="INSERT INTO register(name,password,email,phone) VALUES('$name','$pass','$user','$phone')";
    $result1=mysqli_query($con,$sql); 
    $result=mysqli_query($con,$sql1);  
        if($result && $result1){  
		echo '<span style="color:red;margin-right:10%;font-size:18px;background-color:black;"><b> Account Successfully Created!</b></span>';  
    } else {  
    echo '<span style="color:red;margin-right:10%;float:right;font-size:18px;background-color:black;"><b>*Failure! </b></span>';  
    }  
  
    } else {  
    echo '<span style="color:red;margin-right:1%;float:right;font-size:18px;background-color:black;"><b>*That username already exists! Please try again with another.</b></span>';  
    }  
  
} else {  
    echo '<span style="color:red;margin-left:70%;">All fields are required! </span>';  
}  
}  
?>  	
</body>
</html>