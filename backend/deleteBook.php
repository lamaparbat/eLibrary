<?php
//DB Connection
include './connection.php';

//tract the url request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
 $id = $_POST["id"];

 //delete
 $delete_query = "DELETE FROM books WHERE id=$id";
 mysqli_query($con, $delete_query) or die(mysqli_error($con));
}
