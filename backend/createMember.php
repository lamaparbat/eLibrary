<?php
include 'connection.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 //fetching all the form input value
 $name = $_POST["member_name"];
 $email = $_POST["email"];
 $password = $_POST["password"];
 $phone = $_POST["phone"];
 $file_name = $_FILES["profile"]["name"]."_".uniqid();
 $temp_name = $_FILES["profile"]["tmp_name"];

 //get the current date
 $date = date("Y/m/d");

 //first check if user alread exist
 if (mysqli_num_rows(mysqli_query($con, "SELECT * FROM members WHERE email='$email'")) > 0) {
  echo "Book already exists !!";
 } else {
  //upload image file to local folder
  move_uploaded_file($temp_name, "uploads/" . $file_name) or die(mysqli_error(($con)));

  //insert new member to the db
  $insert_query = "INSERT INTO members(name, email, password, phone, src, date) VALUES('$name','$email','$password','$phone','$file_name','$date')";
  if (mysqli_query($con, $insert_query) or die(mysqli_error($con))) {
   echo "User registered Successfully Successfully !!";
   header("Location: http://localhost/eLibrary/members.php");
  }
 }
}
