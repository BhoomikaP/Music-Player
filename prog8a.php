<?php
$servername = "localhost";
$username = "root";
$password = "";
$usnArrbase = "student_info";
// Create connection
$conn = new mysqli($servername, $username, $password,$usnArrbase);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

if(isset($_POST))
{
	if(isset($_POST['insert'])){
	$sql = "INSERT INTO student_info(Name, USN, email, mob)
			VALUES ('".$_POST['Name']."', '".strtoupper($_POST['usn'])."', '".$_POST['Email_Id']."', '".$_POST['Mobile_Number']."')";

	if ($conn->query($sql) === TRUE) {
		echo "New record created successfully";
	} 
	else {
		echo "Error: " . $sql . "<br>" . $conn->error;
	}}
}
?>

<!DOCTYPE html>
<html>
<head>
<title>Student Selection sort</title>
<script>
function displayTable() {
	var table = document.getElementById('output');
	
  
}
</script>
</head>

<body>
<h3 align = "center">STUDENT REGISTRATION FORM</h3>

 <form action = "#" method="POST">
<table align="center" cellpadding = "10">
 
 
<!----- Name ---------------------------------------------------------->
<tr>
<td>NAME</td>
<td><input type="text" name="Name"/>
</td>
</tr>
 
<!----- USN ---------------------------------------------------------->
<tr>
<td>USN</td>
<td><input type="text" name="usn" maxlength="10" />
</td>
</tr>
 
<!----- Email Id ---------------------------------------------------------->
<tr>
<td>EMAIL ID</td>
<td><input type="email" name="Email_Id" maxlength="100" /></td>
</tr>
 
<!----- Mobile Number ---------------------------------------------------------->
<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="Mobile_Number" maxlength="10" />
(10 digit number)
</td>
</tr> 
<tr>
<td><input type="submit" value='insert' name='insert'/></td>
<td>
<input type="submit" value='view' name='view'/>
<input type="submit" value='sort' name='sort'/>
</td>
</tr> 
</table>
</form>

<table id="output">
<?php
	if(isset($_POST['view'])){
		$sql = 'SELECT * FROM student_info';
		$query = mysqli_query($conn, $sql);
		
		while ($row = mysqli_fetch_array($query))
		{
			echo '<tr>
					<td>'.$row['Name'].'</td>
					<td>'.$row['USN'].'</td>
					<td>'.$row['email'].'</td>
					<td>'.$row['mob'].'</td>
				</tr>';
		}
	}
	
	if(isset($_POST['sort'])){
	 
		$sql = 'SELECT USN FROM student_info';
		$query = mysqli_query($conn, $sql);
		$usnArr = array();
		while ($row = mysqli_fetch_array($query))
		{
			array_push($usnArr, $row['USN']);
		}
		$count = count($usnArr);
		for ($i = 0; $i < $count - 1; $i++)
		{
			$min = $i;

			for ($j = $i + 1; $j < $count; $j++)
			{
				if ($usnArr[$j] < $usnArr[$min])
				{
					$min = $j;
				}
			}

			$temp = $usnArr[$min];
			$usnArr[$min] = $usnArr[$i];
			$usnArr[$i] = $temp;
			
			$sql = 'SELECT * FROM student_info WHERE USN="'.$temp.'";';
			$query = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($query))
			{
				echo '<tr>
						<td>'.$row['Name'].'</td>
						<td>'.$row['USN'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['mob'].'</td>
					</tr>';
			}
		}
		
		$sql = 'SELECT * FROM student_info WHERE USN="'.$usnArr[$count-1].'";';
			$query = mysqli_query($conn, $sql);
			while ($row = mysqli_fetch_array($query))
			{
				echo '<tr>
						<td>'.$row['Name'].'</td>
						<td>'.$row['USN'].'</td>
						<td>'.$row['email'].'</td>
						<td>'.$row['mob'].'</td>
					</tr>';
			}
	}
	?>
	
</table>
 <?php
 
 ?>
</body>
</html>