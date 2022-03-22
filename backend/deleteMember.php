<?php
//DB Connection
include './connection.php';

//tract the url request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $id = $_POST["id"];

 //searching member from database
 $query = "SELECT * FROM members where id=$id";
 $result = mysqli_query($con, $query) or die(mysqli_error($con));
 while ($row = mysqli_fetch_assoc($result)) {
  //delete photo from folder
  if(file_exists('uploads/' . $row["profile"])){
   if(array_map('unlink', glob('uploads/' . $row["profile"]))) {
    //delete from db
    $delete_query = "DELETE FROM members WHERE id=$id";
    mysqli_query($con, $delete_query) or die(mysqli_error($con));
    echo "Successfully deleted !";
   } else {
    echo "failed to delete !!";
   }
  }
 }
}
