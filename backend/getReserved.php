<?php
include 'connection.php';
$query = "SELECT * FROM reserved";
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
         <img src="'.$src.'" loading="lazy" class="img-fluid" id="memberImg" />
         </div>
         <div class="body d-flex flex-column">
         <h5 class="mx-3 my-2"><b>'.$bookname.'</b></h5>
         <span class="mx-3">User ID: <font id="value">'.$user_email. '</font></span>
         <span class="mx-3">Reserved on: <font id="value">' . $date . '</font></span>
         </div>
         <div class="d-flex justify-content-around footer">
         <div class="edit_cont bg-danger text-light px-2 py-1 w-75 d-flex justify-content-center align-items-center" onclick="deleteReservedBook('.$id.')"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</div>
        </div>
      </div>

      ';
   }
}
