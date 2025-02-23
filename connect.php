<?php
error_reporting(E_ALL);
ini_set('display_errors',1);
    session_start();
    $password = $_POST['password'];
    $email = $_POST['email'];

    //Database connection
    $conn = mysqli_connect('localhost','root','Root@123','NMT',3307);

    //perform query
    $query="SELECT * FROM login WHERE email='$email' AND password='$password'";
    
    $results = mysqli_query($conn, $query);
    if(mysqli_num_rows($results)==1){
        include('protocol.html');
    }
    else{
        include('index.html');
        echo '<script> alert("invalid! email/password") </script>';
    }
?>
