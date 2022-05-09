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
   $bookname = $row["bookname"];
   $amount = $row["amount"];
   $exceed_day = $row["exceed_day"];
   $date = $row["date"];
   $src = $row["src"];

   echo '
      <div class="box pb-2 mx-1 my-2" style="height:fit-content;">
      <br />
      <div class="bookImg">
       <img src="' . $src . '" id="memberImg" loading="lazy" />
      </div>
      <div class="body d-flex flex-column" style="height:fit-content;">
       <h5 class="mx-3 my-2"><b>' . $bookname . '</b></h5>
       <span class="mx-3">User: <font id="value">' . $user_email . '</font></span>
       <span class="mx-3">Took on: <font id="value">' . $date . '</font></span>
      </div>
      <div class="d-flex justify-content-around footer">
       <div class="edit_cont px-2 bg-danger text-light w-100 text-center mx-2 py-1" onclick="returnBook(\'' . $user_email . '\',\'' . $bookname . '\',\'' . $src . '\',\'' . $id . '\')"><i class="fa fa-trash" aria-hidden="true"></i></i> Returned</div>
      </div><br/>
     </div>
      ';
}


//<span class="mx-3">Charged Amount:<font id="value">Rs. ' . $amount . '</font></span>
     //  <span class="mx-3">Exceed day: <font class="bg-danger text-light" id="value">' . $exceed_day . '</font></span>