<?php
include 'connection.php';
$user_email = json_decode($_COOKIE["user_data"])[0];

if (json_decode($_COOKIE["user_data"])[3] === 'admin') {
   $query = "SELECT * FROM reserved ";
} else {
   $query = "SELECT * FROM reserved WHERE user_email='$user_email'";
}
$res = mysqli_query($con, $query) or die(mysqli_error($con));

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   while ($row = mysqli_fetch_assoc($res)) {
      //data
      $id = $row["id"];
      $book_id = $row["book_id"];
      $bookname = $row["bookname"];
      $src = $row["src"];
      $user_email = $row["user_email"];
      $date = $row["date"];
      echo '
      <div class="box pb-3 mx-1 my-2">
         <br />
         <div class="bookImg">
         <img src="' . $src . '" loading="lazy" class="img-fluid" id="memberImg" />
         </div>
         <div class="body d-flex flex-column">
         <h5 class="mx-3 my-2"><b>' . $bookname . '</b></h5>
         <span class="mx-3">User: <font id="value">' . $user_email . '</font></span>
         <span class="mx-3">Reserved on: <font id="value">' . $date . '</font></span>
         </div>
         <div class="d-flex justify-content-around footer">
         <div class="edit_cont bg-info text-light px-2 py-1 w-75 d-flex justify-content-center align-items-center d-'. (json_decode($_COOKIE["user_data"])[3] === 'admin' ? 'inline' : 'none') . '" onclick="issuedBook(\'' . $user_email . '\',\'' . $bookname . '\',\'' . $book_id . '\',\'' . $src . '\',\'' . $id . '\')"><i class="fa fa-rocket" aria-hidden="true"></i> &nbsp; Issued</div>
         <div class="edit_cont bg-danger text-light px-2 py-1 w-75 d-flex justify-content-center align-items-center d-' . (json_decode($_COOKIE["user_data"])[3] === 'admin' ? 'none' : 'inline') . '" onclick="deleteReservedBook(' . $id . ')"><i class="fa fa-rocket" aria-hidden="true"></i> &nbsp; Delete</div>
        </div>
      </div>

      ';
   }
}
