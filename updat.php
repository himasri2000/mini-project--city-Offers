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
<h1><a href="update.html"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></h1>
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
$city=$_POST['city'];
$shopname=$_POST['shopname'];
$email=$_POST['email'];  
$password=$_POST['password'];
$check_password=$_POST['check_password']; 
$category=$_POST['category'];
$address=$_POST['address']; 
$location=$_POST['location'];
$mobileno=$_POST['mobileno'];  
$website=$_POST['website'];     
$fromdate=$_POST['fromdate'];
$todate=$_POST['todate'];
$offers=$_POST['offers'];
    $sql=" UPDATE mainshops SET  fromdate='".$fromdate."' , todate='".$todate."' , offers='".$offers."' WHERE (email='".$email."' and password='".$password."' and check_password='".$check_password."');";
    $res=mysqli_query($conn,$sql);
    if ($conn->affected_rows) {
    
        echo '<body style="background-color:#00FFFF">';
        echo "<br><center><h3>Offer updated to :" . $offers ."</center></h3>";
        echo "<br><center><h3>From date updated to :".$fromdate ."</center></h3>";
        echo "<br><center><h3>To date updated to :".$todate ."</center></h3><br>";
        echo "<br>"."<center>" ."<h1>Records updated successfully</h1>"."</center>";
    }
    else{
        echo '<body style="background-color:#00FFFF">';
        echo "<center>"."<h1>Records cannot be updated :Please check the password entered</h1> " ."</center>";
    }
?>
</body>
</html>