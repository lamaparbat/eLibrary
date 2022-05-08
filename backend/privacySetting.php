<?php
include 'connection.php';
session_start();

function updateAllRelatedData($con, $email, $id)
{
 //update email in issue book page
 $second_query = "UPDATE issued SET user_email='$email' WHERE user_email='$id'";
 mysqli_query($con, $second_query) or die(mysqli_error($con));

 //update email in reserved book page
 $second_query = "UPDATE reserved SET user_email='$email' WHERE user_email='$id'";
 mysqli_query($con, $second_query);

 //update email in issue book page
 $second_query = "UPDATE fined_users SET user_email='$email' WHERE user_email='$id'";
 mysqli_query($con, $second_query);

 //update email in returned book page
 $second_query = "UPDATE returned SET user_email='$email' WHERE user_email='$id'";
 mysqli_query($con, $second_query);
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $id = json_decode($_COOKIE["user_data"])[0];
 $email = $_POST["email"];
 $password = $_POST["password"];

 if (json_decode($_COOKIE["user_data"])[3] == "admin") {
  if($email != "" && $password != ""){
   $query = "UPDATE admin SET email='$email', password='$password' WHERE email='$id'";
   updateAllRelatedData($con, $email, $id);
  } else if ($email != "" && $password == "") {
   $query = "UPDATE admin SET email='$email' WHERE email='$id'";
   updateAllRelatedData($con, $email, $id);
  } else if ($email == "" && $password != "") {
   $query = "UPDATE admin SET  password='$password' WHERE email='$id'";
  }
 } else if (json_decode($_COOKIE["user_data"])[3] == "user") {
  if ($email != "" && $password != "") {
   $query = "UPDATE user SET email='$email', password='$password' WHERE email='$id'";
   updateAllRelatedData($con, $email, $id);
  } else if ($email != "" && $password == "") {
   $query = "UPDATE user SET email='$email' WHERE email='$id'";
   updateAllRelatedData($con, $email, $id);
  } else if ($email == "" && $password != "") {
   $query = "UPDATE user SET  password='$password' WHERE email='$id'";
  }
 } else {
  if ($email != "" && $password != "") {
   $query = "UPDATE members SET email='$email', password='$password' WHERE email='$id'";
   updateAllRelatedData($con, $email, $id);
  } else if ($email != "" && $password == "") {
   $query = "UPDATE members SET email='$email' WHERE email='$id'";
   updateAllRelatedData($con, $email, $id);
  } else if ($email == "" && $password != "") {
   $query = "UPDATE members SET  password='$password' WHERE email='$id'";
  }
 }

 //update the books db
 if (mysqli_query($con, $query) or die(mysqli_error($con))) {
  $user_data[0] = $email;
  header("Location: http://localhost/elibrary/login.php");
 } else {
  header("Location: http://localhost/elibrary/setting.php");
 }
}
