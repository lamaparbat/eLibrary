<?php
include 'connection.php';

if (json_decode($_COOKIE["user_data"])[3] != "admin") {
   header("Location: http://localhost/eLibrary/admin_login.php");
}

$query = "SELECT * FROM issued";
$res = mysqli_query($con, $query) or die(mysqli_error($con));

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   while ($row = mysqli_fetch_assoc($res)) {
      //data
      $id = $row["id"];
      $username = $row["username"];
      $user_email = $row["user_email"];
      $bookname = $row["bookname"];
      $book_id = $row["book_id"];
      $issue_date = $row["issued_date"];
      $deadline = $row["deadline"];
      $src = 'backend/books_img/' . $row["src"];

      echo '
             <div class="box pb-2 mx-1 my-2">
      <br />
      <div class="bookImg">
       <img src="' . $src . '" id="memberImg" loading="lazy" />
      </div>
      <div class="body d-flex flex-column">
       <h5 class="mx-3 my-2"><b>' . $bookname . '</b></h5>
       <span class="mx-3">User: <font id="value">' . $username . '</font></span>
       <span class="mx-3">Took on: <font id="value">' . $issue_date . '</font></span>
       <span class="mx-3">Deadline: <font class="bg-danger text-light" id="value">' . $deadline . '</font></span>
      </div>
      <div class="d-flex justify-content-around footer">
       <div class="edit_cont px-2" onclick="returnBook('.$id.',' . $book_id . ', `' . $bookname . '`, `' . $user_email . '`, `' . $username . '`,`'.$row['src'].'`)"><i class="fa fa-pencil" aria-hidden="true"></i> Returned</div>
       <div class="edit_cont px-2" onclick="deleteIssue(' . $id . ')"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
      </div><br/>
     </div>

      ';
   }
}
