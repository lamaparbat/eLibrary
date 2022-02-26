<?php
include 'connection.php';

$query = "SELECT * FROM books";
$res = mysqli_query($con, $query) or die(mysqli_error($con));

if ($_SERVER["REQUEST_METHOD"] == "GET") {
 while ($row = mysqli_fetch_assoc($res)) {
  //data
  $id = $row["id"];
  $name = $row["name"];
  $author = $row["author"];
  $category = $row["category"];
  $published = $row["published"];
  $src = 'backend/books_img/' . $row["src"];

  //visibility based on admin and user
  $display = "none";
  if(json_decode($_COOKIE["user_data"])[3] === "admin"){
   $display = "inline";
  }

  echo '
     <div class="box pb-2 mx-1 my-2">
      <br />
     <div class="bookImg">
       <img src=' . $src . ' class="img-fluid" />
     </div>
      <div class="body">
       <h5 class="mx-3 my-2"><b>' . $name . '</b></h5>
       <span class="mx-3">Authors: <font id="value">' . $author . '</font></span>
       <span class="mx-3">Category: <font id="value">' . $category . '</font></span>
       <span class="mx-3">Published: <font id="value">' . $published . '</font></span>
      </div>
      <div class="d-flex justify-content-around footer">
       <div id="card_id' . $id . '" class="edit_cont px-2 d-' . $display . '">
          <i class="fa fa-pencil" aria-hidden="true"></i> Edit
       </div>
       <div class="edit_cont px-2 d-' . $display . '">
           <i class="fa fa-trash" aria-hidden="true"></i> Delete
       </div>
       <div class="edit_cont px-2 d-' .(json_decode($_COOKIE["user_data"])[3] === 'admin' ? 'none': 'inline'). '">
           <i class="fa fa-rocket" aria-hidden="true"></i> Issue
       </div>
       <div class="edit_cont px-2 d-' . (json_decode($_COOKIE["user_data"])[3] === 'admin' ? 'none' : 'inline') . '">
          <i class="fa fa-info-circle" aria-hidden="true"></i> Details
       </div>
      </div>
     </div>
    ';
 }
}
