<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $id = $_POST["data_id"];
 $name = $_POST["member_name"];
 $email = $_POST["email"];
 $phone = $_POST["phone"];
 $file_name = $_FILES["profile"]["name"];
 $temp_name = $_FILES["profile"]["tmp_name"];

 if (strlen($file_name) > 0) {
  // upload image file to local folder
  move_uploaded_file($temp_name, "uploads/" . $file_name) or die(mysqli_error(($con)));
  $query = "UPDATE members SET name='$name',email='$email',phone='$phone', profile='$file_name' WHERE id=$id";
 } else {
  $query = "UPDATE members SET name='$name',email='$email',phone='$phone' WHERE id=$id";
 }

 //update the books db
 if (mysqli_query($con, $query) or die(mysqli_error($con))) {
  header("Location: http://localhost/elibrary/members.php");
 } else {
  echo "no";
  header("Location: http://localhost/elibrary/members.php");
 }
}

