<?php 
   $user_data[0] = "";
   $user_data[1] = "";
   $user_data[2] = "";
   setcookie("user_data",json_encode($user_data),time()+ (86400 * 30), "/");
   
   //redirect to login 
   header("Location: http://localhost/eLibrary/login.php");
?>