<?php 

session_start();

$username = "mehedi";
$password = "1234";

if(($username == $_POST['username']) && ($password==$_POST['password'])){
    

    $_SESSION['isauthenticated']=true;
    $_SESSION['username']= $_POST['username'];

   header('location:./page1.php');
}
else {
    $_SESSION['isauthenticated']=false;
    header('location:./');
}


?>