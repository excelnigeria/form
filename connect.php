<?php 

$username = "";
$email = "";
$password = "";
    

$db = mysqli_connect ('localhost','root', '', 'okezie' );

if (isset($_POST['reg_user'])) {
    $username = mysqli_real_escape_string ($db, $_POST['username']);
    $email =   mysqli_real_escape_string ($db, $_POST['email']);
    $password = mysqli_real_escape_string ($db, $_POST['password']); 
    
    
    
    
    $query = "INSERT INTO money (name, email, password) VALUES (' $username ','$email','$password')";
    mysqli_query($db, $query);
    $_SESSION['username'] = $username;
     $_SESSION['success'] = "You Are Now Logged in";
    header ('location: register.php');
}







?>