<?php
include 'connection.php';

if (json_decode($_COOKIE["user_data"])[3] != "admin") {
   header("Location: http://localhost/eLibrary/admin_login.php");
}

$query = "SELECT * FROM returned";
$res = mysqli_query($con, $query) or die(mysqli_error($con));

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   while ($row = mysqli_fetch_assoc($res)) {
      //data
      $id = $row["id"];
      $book_id = $row["book_id"];
      $bookname = $row["bookname"];
      $user_email = $row["user_email"];
      $username = $row["username"];
      $date = $row["date"];
      $src = 'backend/books_img/' .$row["src"];

      echo '
      <div class="box pb-2 mx-1 my-2">
         <br />
         <div class="bookImg">
         <img src="'.$src.'" loading="lazy" class="img-fluid" id="memberImg" />
         </div>
         <div class="body d-flex flex-column">
         <h5 class="mx-3 my-2"><b>'.$bookname.'</b></h5>
         <span class="mx-3">User:<font id="value">'.$user_email. '</font></span>
         <span class="mx-3">Returned on: <font id="value">' . $date . '</font></span>
         <span class="mx-3">Returned: <font class="px-2 bg-success text-light" id="value"><i class="fa fa-check" aria-hidden="true"></i></font></span>
         </div>
         <div class="d-flex justify-content-around footer">
         <div class="edit_cont bg-danger text-light px-2 py-1 w-75 d-flex justify-content-center align-items-center" onclick="deleteReturnedBook('.$id.')"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</div>
         </div>
      </div>

      ';
   }
}
