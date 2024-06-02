<?php
 //database connection
 $db="localhost";
 $dbusername="root";
 $dbpassword="";
 $dbname="login";

 $conn= new mysqli($db,$dbusername,$dbpassword,$dbname);

 if($conn->connect_error){
     die("CONNECTION FAILED:". $conn->connect_error);
 }

 $username=$_POST['username'];
 $password=$_POST['password'];
 $sql="INSERT into login_data(username,password) VALUES ('$username','$password')";
 if(mysqli_query($conn,$sql)){
    //signup success

    header("Location:signup_success.html");
    
 }else{
    echo "error:".$sql."<br>".mysqli_error($conn);
 }
?>