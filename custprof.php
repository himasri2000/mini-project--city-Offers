<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
table {
  border: 5px solid black;
  margin-top: 100px;
  width:450px;
  text-align:center;
  display:inline-block;
  float:center;
  font-size: x-large;
}
th,td{
    border:2px solid black;
    margin-top: 100px;
    width:450px;
    height:50px;
    text-align:center;
    font-size: x-large;
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
<h1><a href="up.html"><i class="fa fa-pencil" aria-hidden="true"></i>Update</a></h1>
<h1><a href="custprof.html"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></h1>
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
       
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="SELECT * FROM customers WHERE password='$password'";
    echo "<center>";
    echo "<br><h1>Profile</h1>";
    echo "</center>";
    echo "<center>";
    if ($res = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($res) > 0) {
            echo '<body style="background-color:#00FFFF">';
            echo "<table>";
            echo "<tr>";
            echo "<tr>";
            echo "<th>Username</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Email</th>";
            echo "</tr>";
            echo "<tr>";
            echo "<th>Mobileno</th>";
            echo "</tr>";
            echo "</table>";
            echo "<table>";
            while ($row = mysqli_fetch_array($res)) {
                echo "<tr>";
                echo "<td>".$row['username']."</td>";
                echo "</tr>";
                $url1 = $row  ['email'];
                echo "<td><a href='" . $url1 . "'>" . $url1 . "</a></td>";
                echo "</tr>";
                echo "<td>".$row['mobileno']."</td>";
                echo "</tr>";
            }
            echo "</tr>";
            echo "</table>";            
        }    else {
        echo "No matching records are found.";
    }
}
else {
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn);
}
echo "</center>";
mysqli_close($conn);
}
?>
</body>
</html>