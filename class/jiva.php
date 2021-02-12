<?php      
include('conn.php');  
    if ($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST['user'];  
        $password = $_POST['pass'];  
        $sql = "select id from login where username = '$username' and password = '$password'";  
        $result = mysqli_query($con, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            $_SESSION['login_user']=$username;
            header("location:home.php") ; 
        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";  
        }     

}
?>  