<?php
include 'connection.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
   $keyword = $_POST["data"];
   $query = "SELECT * FROM members WHERE name LIKE '%$keyword%'";
   $res = mysqli_query($con, $query) or die(mysqli_error($con));
   while ($row = mysqli_fetch_assoc($res)) {
      //data
      $id = $row["id"];
      $name = $row["name"];
      if (strlen($row["name"]) > 14) {
         $author = substr($row["name"], 0, 15) . "..";
      } else {
         $author = $row["name"] . "....";
      }
      if (strlen($row["email"]) > 14) {
         $email = substr($row["email"], 0, 15) . "..";
      } else {
         $email = $row["email"] . "....";
      }
      $phone = $row["phone"];
      $src = 'backend/uploads/' . $row["profile"];

      //visibility based on admin and user
      $display = "none";
      if (json_decode($_COOKIE["user_data"])[3] === "admin") {
         $display = "inline";
      }

      echo '
     <div class="box pb-2 mx-1 my-2"  id=' . $id . '> 
      <br />
     <div class="bookImg">
       <img src=' . $src . ' class="img-fluid" />
     </div>
      <div class="body">
       <h5 class="mx-3 my-2"><b>' . $name . '</b></h5>
       <span class="mx-3">Email: <font id="value">' . $email . '</font></span>
       <span class="mx-3">Phone: <font id="value">' . $phone . '</font></span>
      </div>
      <div class="d-flex justify-content-around footer">
       <div 
         id="card_id' . $id . '" 
         class="edit_cont px-2 d-' . $display . '"
          onclick="edit(' . $id . ', event)" >
          <i class="fa fa-pencil" aria-hidden="true"></i> Edit
       </div>
       <div class="edit_cont px-2 d-' . $display . '" onclick="Delete(' . $id . ')">
           <i class="fa fa-trash" aria-hidden="true"></i> Delete
       </div>
       <div
         class="edit_cont px-2 d-' . (json_decode($_COOKIE["user_data"])[3] === 'admin' ? 'none' : 'inline') . '"
      >
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
