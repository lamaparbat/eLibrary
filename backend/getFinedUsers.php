<?php
include 'connection.php';

if (json_decode($_COOKIE["user_data"])[3] != "admin") {
   header("Location: http://localhost/eLibrary/admin_login.php");
}

$query = "SELECT * FROM fined_users";
$res = mysqli_query($con, $query) or die(mysqli_error($con));

   while ($row = mysqli_fetch_assoc($res)) {
      //data
      $id = $row["id"];
      $user_email = $row["user_email"];
      $amount = $row["amount"];
      $exceed_day = $row["exceed_day"];
      $date = $row["date"];

      echo '
      <div class="box pb-2 mx-1 my-2" style="height:fit-content;">
         <br />
         <div class="body d-flex flex-column">
         <h5 class="mx-3 my-2"><b>' . $user_email . '</b></h5>
         <span class="mx-3">Charged Amount: <font id="value">' . $amount . '</font></span>
         <span class="mx-3">Exceeded Day Count: <font id="value">' . $exceed_day . '</font></span>
         <div class="d-flex justify-content-around footer">
         <div class="edit_cont bg-danger text-light px-2 py-1 w-75 d-flex justify-content-center align-items-center" onclick="deleteReturnedBook(' . $id . ')"><i class="fa fa-trash" aria-hidden="true"></i>&nbsp; Delete</div>
         </div>
         </div>
      </div>

      ';
   }
