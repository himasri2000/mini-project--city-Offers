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
<h1><a href="selection.html"><i class="fa fa-arrow-left" aria-hidden="true"></i>Back</a></h1>
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

    $city=$_POST['city'];  
    $category=$_POST['category'];     
    $fromdate=$_POST['fromdate'];
    $todate=$_POST['todate'];
    $offers=$_POST['offers'];
    $sql="SELECT * FROM mainshops WHERE fromdate>='$fromdate' AND todate<='$todate' AND offers>='$offers' AND category='$category'";
    if ($res = mysqli_query($conn, $sql)) {
        if (mysqli_num_rows($res) > 0) {
        echo '<body style="background-color:#00FFFF">';
        echo "<h1><center>SHOP DETAILS</h1></center>";
        echo "<table>";
        echo "<tr>";
        echo "<th>City</th>";
        echo "<th>Shopname</th>";
        echo "<th>Email</th>";
        echo "<th>Category</th>";
        echo "<th>Address</th>";
        echo "<th>Location</th>";
        echo "<th>Mobileno</th>";
        echo "<th>Website</th>";
        echo "<th>From Date</th>";
        echo "<th>To Date</th>";
        echo "<th>Offers</th>";
        echo "</tr>";
        while ($row = mysqli_fetch_array($res)) {
            echo "<tr>";
            echo "<td>".$row['city']."</td>";
            echo "<td>".$row['shopname']."</td>";
            $url1 = $row  ['email'];
            echo "<td><a href='" . $url1 . "'>" . $url1 . "</a></td>";
            echo "<td>".$row['category']."</td>";
            echo "<td>".$row['address']."</td>";
            $url2 = $row  ['location'];
            echo "<td><a href='" . $url2 . "'>" . $url2 . "</a></td>";
            echo "<td>".$row['mobileno']."</td>";
            $url3 = $row  ['website'];
            echo "<td><a href='" . $url3 . "'>" . $url3 . "</a></td>";
            echo "<td>".$row['fromdate']."</td>";
            echo "<td>".$row['todate']."</td>";
            echo "<td>".$row['offers']."</td>";
            echo "</tr>";
        }
        echo "</table>";
        
    }
    else {
        echo '<body style="background-color:#00FFFF">';
        echo "No matching records are found.";
    }
}
else {
    echo '<body style="background-color:#00FFFF">';
    echo "ERROR: Could not able to execute $sql. "
                                .mysqli_error($conn);
}
}
mysqli_close($conn);
?>
</body>
</html>