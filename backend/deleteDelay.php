<?php
//DB Connection
include './connection.php';

//tract the url request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $id = $_POST["id"];

 //searching member from database
 $query = "SELECT * FROM fined_users where id=$id";
 $result = mysqli_query($con, $query) or die(mysqli_error($con));
 while ($row = mysqli_fetch_assoc($result)) {
  $delete_query = "DELETE FROM delay WHERE id=$id";
  mysqli_query($con, $delete_query) or die(mysqli_error($con));
  echo "Successfully deleted !";
 }
}
