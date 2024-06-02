<?php
if($_SERVER["REQUEST_METHOD"]=="POST"){
    //retrieve from data
    $username=$_POST['username'];
    $password=$_POST['password'];

    //database connection
    $db="localhost";
    $dbusername="root";
    $dbpassword="";
    $dbname="login";

    $conn= new mysqli($db,$dbusername,$dbpassword,$dbname);

    if($conn->connect_error){
        die("CONNECTION FAILED:". $conn->connect_error);

    }

    //validate login authentication
    $query= "SELECT *FROM login_data WHERE username='$username' AND password='$password' ";

    $result=$conn->query($query);

    if($result->num_rows==1){
        //login success
        header("Location:success.html");

        exit();
    }
    else{
        //login failed

        header("Location:error.html");
        exit();
    }
 
    $conn->close();

}











?>