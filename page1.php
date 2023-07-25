<?php 

session_start();

if($_SESSION['isauthenticated']){
   echo $_SESSION['username'];
}
else{
    echo "invalied username";
}



?>