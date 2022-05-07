<?php
include 'connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $id = json_decode($_COOKIE["user_data"])[0];
 $email = $_POST["email"];
 $password = $_POST["password"];

 if (json_decode($_COOKIE["user_data"])[3] == "admin") {
  if($email != "" && $password != ""){
   $query = "UPDATE admin SET email='$email', password='$password' WHERE email='$id'";
  } else if ($email != "" && $password == "") {
   $query = "UPDATE admin SET email='$email' WHERE email='$id'";
  } else if ($email == "" && $password != "") {
   $query = "UPDATE admin SET  password='$password' WHERE email='$id'";
  }
 } else if (json_decode($_COOKIE["user_data"])[3] == "user") {
  if ($email != "" && $password != "") {
   $query = "UPDATE user SET email='$email', password='$password' WHERE email='$id'";
  } else if ($email != "" && $password == "") {
   $query = "UPDATE user SET email='$email' WHERE email='$id'";
  } else if ($email == "" && $password != "") {
   $query = "UPDATE user SET  password='$password' WHERE email='$id'";
  }
 } else {
  if ($email != "" && $password != "") {
   $query = "UPDATE members SET email='$email', password='$password' WHERE email='$id'";
  } else if ($email != "" && $password == "") {
   $query = "UPDATE members SET email='$email' WHERE email='$id'";
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
