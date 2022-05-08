<?php
include 'connection.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $id = json_decode($_COOKIE["user_data"])[0];
  $username = $_POST["username"];
  $file_name = $_FILES["profile"]["name"];
  $temp_name = $_FILES["profile"]["tmp_name"];

   //form validation
  if ($username != "" && strlen($file_name) > 0) {
    // upload image file to local folder
    move_uploaded_file($temp_name, "uploads/" . $file_name) or die(mysqli_error(($con)));
    $user_data[2] = $file_name;
    $user_data[1] = $username;
    if (json_decode($_COOKIE["user_data"])[3] == "admin") {
      $query = "UPDATE admin SET name='$username', src='$file_name' WHERE email='$id'";
    } else if (json_decode($_COOKIE["user_data"])[3] == "user") {
      $query = "UPDATE user SET name='$username', src='$file_name' WHERE email='$id'";
    } else {
      $query = "UPDATE members SET name='$username', src='$file_name' WHERE email='$id'";
    }
  } else if ($username === "" && strlen($file_name) > 0) {
    $user_data[2] = $file_name;
    if (json_decode($_COOKIE["user_data"])[3] == "admin") {
      $query = "UPDATE admin SET src='$file_name' WHERE email='$id'";
    } else if (json_decode($_COOKIE["user_data"])[3] == "user") {
      $query = "UPDATE user SET src='$file_name' WHERE email='$id'";
    } else {
      $query = "UPDATE members SET name='$username' WHERE email='$id'";
    }
  }else{
    $user_data[1] = $username;
    if (json_decode($_COOKIE["user_data"])[3] == "admin") {
      $query = "UPDATE admin SET name='$username' WHERE email='$id'";
    } else if (json_decode($_COOKIE["user_data"])[3] == "user") {
      $query = "UPDATE user SET name='$username' WHERE email='$id'";
    } else {
      $query = "UPDATE members SET name='$username' WHERE email='$id'";
    }
  }

  //update the books db
  if (mysqli_query($con, $query) or die(mysqli_error($con))) {
    header("Location: http://localhost/elibrary/setting.php");
  } else {
    header("Location: http://localhost/elibrary/setting.php");
  }
}
