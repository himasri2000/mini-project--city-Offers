<?php      
    
    include('connection.php');  
    $email = $_POST['email'];  
    $password = $_POST['password'];  
       
        $email = stripcslashes($email);  
        $password = stripcslashes($password);  
        $email = mysqli_real_escape_string($conn, $email);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select *from mainshops where email = '$email' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo '<body style="background-color:#00FFFF">';
			header("location: update.html"); 
            echo "<h1><center> Login successful </center></h1>";  
        }  
        else{  
            echo '<body style="background-color:#00FFFF">';
            echo "<h1> <center> Login failed. Invalid email or password.</center></h1>";  
        }     
?>  