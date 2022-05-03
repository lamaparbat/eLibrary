<?php
include 'connection.php';

$query = "SELECT * FROM books";
$res = mysqli_query($con, $query) or die(mysqli_error($con));

if ($_SERVER["REQUEST_METHOD"] == "GET") {
   while ($row = mysqli_fetch_assoc($res)) {
      //data
      $id = $row["id"];
      $name = $row["name"];
      $published = $row["published"];
      $src = 'backend/books_img/' . $row["src"];
      $category = $row["category"];
      $author = $row["author"];
      $rack_no = $row["rack_no"];
      $quantity =  $row["quantity"];
      $user_email = json_decode($_COOKIE["user_data"])[0];
      //visibility based on admin and user
      $display = "none";
      if (json_decode($_COOKIE["user_data"])[3] === "admin") {
         $display = "inline";
      }

      echo '
     <div class="box pb-2 mx-1 my-2" id=' . $id . ' onclick="issueBook(' . $id . ')">
      <br />
     <div class="bookImg">
       <img src=' . $src . ' class="img-fluid" />
     </div>
      <div class="body">
       <h5 class="mx-3 my-2">' . $id . ' <b>' . $name . '</b></h5>
       <span class="mx-3">Authors: <font id="value">' . $author . '</font></span>
       <span class="mx-3">Category: <font id="value">' . $category . '</font></span>
       <span class="mx-3">Quantity: <font id="value">' . $quantity . '</font></span><br/>
       <span class="mx-3">Rack No.: <font id="value">' . $rack_no . '</font></span><br/>
       <span class="mx-3">Published: <font id="value">' . $published . '</font></span>
      </div>
      <div class="d-flex justify-content-around footer">
       <div 
         id="card_id' . $id . '" 
         class="edit_cont px-2 d-' . $display . '"
          onclick="edit(' . $id . ', event)" >
          <i class="fa fa-pencil" aria-hidden="true"></i> Edit
       </div>
         <div class="edit_cont px-2 d-' . (json_decode($_COOKIE["user_data"])[3] === 'admin' ? 'none' : 'inline') . '" onclick="Reserve(\'' . $id . '\',\'' . $name . '\',\'' . $user_email . '\',\'' . $src . '\')">
           <i class="fa fa-rocket" aria-hidden="true"></i> Reserve
         </div>
       <div class="edit_cont px-2 d-' . $display . '" onclick="Delete(' . $id . ')">
           <i class="fa fa-trash" aria-hidden="true"></i> Delete
       </div>
       <div class="edit_cont px-2 d-' . (json_decode($_COOKIE["user_data"])[3] === 'admin' ? 'none' : 'inline') . '">
          <i class="fa fa-info-circle" aria-hidden="true"></i> Details
       </div>
      </div>
     </div>
    ';
   }
}
