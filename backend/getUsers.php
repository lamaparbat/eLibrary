<?php
include 'connection.php';

$query = "SELECT * FROM user";
$res = mysqli_query($con, $query) or die(mysqli_error($con));

if ($_SERVER["REQUEST_METHOD"] == "GET") {
 while ($row = mysqli_fetch_assoc($res)) {
  //data
  $id = $row["id"];
  $name = $row["name"];
  $email = $row["email"];
  $phone = $row["phone"];
  $src = 'backend/uploads/'.$row["src"];

  //visibility based on admin and user
  $display = "none";
  if (json_decode($_COOKIE["user_data"])[3] === "admin") {
   $display = "inline";
  }

  echo '
     <div class="box pb-2 mx-1 my-2"  id=' . $id . '>
      <br />
     <div class="bookImg">
       <img src='. $src . ' class="img-fluid" />
     </div>
      <div class="body">
       <h5 class="mx-3 my-2"><b>' . $name . '</b></h5>
       <span class="mx-3">Email: <font id="value">' . $email . '</font></span>
       <span class="mx-3">Phone: <font id="value">' . $phone . '</font></span>
      </div>
      <div class="d-flex justify-content-around footer">

       <div class="edit_cont px-2 bg-danger text-light w-75 d-' . $display . ' text-center py-1" onclick="Delete(' . $id . ')">
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


      //  <div 
      //    id="card_id' . $id . '" 
      //    class="edit_cont px-2 d-' . $display . '"
      //     onclick="edit(' . $id . ', event)" >
      //     <i class="fa fa-pencil" aria-hidden="true"></i> Edit
      //  </div>