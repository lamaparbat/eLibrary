<?php
//DB Connection
include './connection.php';

//tract the url request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $id = $_POST["id"];
 //searching member from database
 $query = "SELECT * FROM reserved WHERE id='$id'";
 $result = mysqli_query($con, $query) or die(mysqli_error($con));
 if (mysqli_num_rows($result)) {
  $delete_query = "DELETE FROM reserved WHERE id=$id";
  mysqli_query($con, $delete_query) or die(mysqli_error($con));
  echo "Successfully deleted !";
 }
}
