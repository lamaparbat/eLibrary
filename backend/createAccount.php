<?php
//DB Connection
include './connection.php';

//tract the url request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $username = $_POST["username"];
 $contact = $_POST["contact"];
 $email = $_POST["email"];
 $password = $_POST["new_password"];
 $date = date("y/m/d");
 $file_name = $_FILES["file_inp"]["name"];
 $temp_name = $_FILES["file_inp"]["tmp_name"];

 //check if user alread exist
 if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM user WHERE email='$email'")) > 0) {
  echo "user already exists !!";
 } else {
  //upload image file to local folder
  move_uploaded_file($temp_name,"uploads/".$file_name) or die(mysqli_error(($con)));

  $insert_query = "INSERT INTO user(name, email, password, phone, src,date) VALUES('$username','$email','$password','$contact','$file_name','$date'";
  if (mysqli_query($con, $insert_query) or die(mysqli_error($con))) {
   echo "User registered Successfully Successfully !!";
   header("Location: http://localhost/eLibrary/login.php");
  } 
 }
}
