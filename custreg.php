<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table, th, td {
  border: 2px solid black;
  margin-top: 100px;
  text-align:center;
  width:500px;
}
h1 a
{
    text-align: right;
    text-decoration: none;
    color:black;
}
h1 .fa
{
    text-align: right;
    margin: 8px;
}
h1
{
    margin: 0;
    padding: 0;
    font-weight: bold;
    font-size: 32px;
	text-align:right;
    color: black;
    margin-bottom: 8%;
    font-family: cursive;
	display:inline;
	width:32px;
}

</style>
</head>
<body>
<h1><a href="home.html"><i class="fa fa-home"></i>Home</a></h1>
<h1><a href="customerregister.html"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></h1>
<h1><a href="home.html"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></h1>
<?php
$servername = "localhost";
$username = 'root';
$password ='';
$db = 'cityoffers';
$conn = mysqli_connect($servername , $username, $password, $db);
if($conn->connect_error){
    die("Connection failed: " . $conn->connect_error);
}
else{

    $username=$_POST['username'];
    $email=$_POST['email']; 
    $password=$_POST['password'];
    $check_password=$_POST['check_password'];  
    $mobileno=$_POST['mobileno'];  
    $sql="INSERT INTO customers( username , email , password , check_password , mobileno ) VALUES ('$username','$email','$password','$check_password','$mobileno')"; 
    if(mysqli_query($conn,$sql)){
        echo '<body style="background-color:#00FFFF">';
        echo "<br>" . "<h1><center>Records added successfully</center></h1>";
        header("location: customer.html");
    }
    else{
        echo '<body style="background-color:#00FFFF">';
        echo "<h1><center>Error</center></h1> ";
    }
}
?>
</body>
</html>