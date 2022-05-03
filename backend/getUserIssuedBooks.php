<?php
include 'connection.php';

$user_email = json_decode($_COOKIE["user_data"])[0];
$query = "SELECT * FROM issued WHERE user_email='$user_email'";
$res = mysqli_query($con, $query) or die(mysqli_error($con));

if ($_SERVER["REQUEST_METHOD"] == "GET") {
 while ($row = mysqli_fetch_assoc($res)) {
  //data
  $id = $row["id"];
  $book_id = $row["book_id"];
  $bookname = $row["bookname"];
  $src = $row["src"];
  $user_email = $row["user_email"];
  $date = $row["issued_date"];
  $deadline = $row["deadline"];

  echo '
      <div class="box pb-3 mx-1 my-2">
         <br />
         <div class="bookImg">
         <img src="backend/books_img/' . $src . '" loading="lazy" class="img-fluid" id="memberImg" />
         </div>
         <div class="body d-flex flex-column">
         <h5 class="mx-3 my-2"><b>' . $bookname . '</b></h5>
         <span class="mx-3">Issued on: <font id="value">' . $date . '</font></span>
         <span class="mx-3">Deadline: <font id="value">' . $deadline . '</font></span>
         </div>
         <div class="d-flex justify-content-around footer">
        </div>
      </div>

      ';
 }
}


// <div class="edit_cont bg-danger text-light px-2 py-1 w-75 d-flex justify-content-center align-items-center" onclick="deleteIssuedBook(' . $id . ')"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</div>