<?php
 $con = mysqli_connect("localhost","root","","elibrary");
 if($con){
  echo "Database connection successfully !!";
 }else{
 echo "Failed to connect database!!";
}
?>