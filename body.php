<?php
include '../eLibrary/backend/connection.php';

$email = json_decode($_COOKIE["user_data"])[0];

$total_book_count = $total_issued_book_count = $total_reserved_book_count = $total_returned_book_count = 0;

//get the total books count
$query = "SELECT * FROM books";
$total_book_count = mysqli_num_rows(mysqli_query($con, $query)) or die(mysqli_error($con));

if (json_decode($_COOKIE["user_data"])[3] === "user") {
 //get the total issued books count
 $query = "SELECT * FROM issued WHERE user_email='$email'";
 $result = mysqli_query($con, $query);
 if ($count = mysqli_num_rows($result) > 0) {
  $total_issued_book_count = $count;
 } else {
  $total_issued_book_count = 0;
 }

 //get the total reserved books count
 $query = "SELECT * FROM reserved WHERE user_email='$email'";
 $result = mysqli_query($con, $query);
 if ($count = mysqli_num_rows($result) > 0) {
  $total_reserved_book_count = $count;
 } else {
  $total_reserved_book_count = 0;
 }

 //get the total reserved books count
 $query = "SELECT * FROM returned WHERE user_email='$email'";
 $result = mysqli_query($con, $query);
 if ($count = mysqli_num_rows($result) > 0) {
  $total_returned_book_count = $count;
 } else {
  $total_returned_book_count = 0;
 }
}

if (json_decode($_COOKIE["user_data"])[3] === "admin") {
 //get the total issued books count
 $query = "SELECT * FROM issued";
 $result = mysqli_query($con, $query);
 if ($count = mysqli_num_rows($result) > 0) {
  $total_issued_book_count = $count;
 } else {
  $total_issued_book_count = 0;
 }

 //get the total reserved books count
 $query = "SELECT * FROM reserved";
 $result = mysqli_query($con, $query);
 if ($count = mysqli_num_rows($result) > 0) {
  $total_reserved_book_count = $count;
 } else {
  $total_reserved_book_count = 0;
 }

 //get the total reserved books count
 $query = "SELECT * FROM returned";
 $result = mysqli_query($con, $query);
 if ($count = mysqli_num_rows($result) > 0) {
  $total_returned_book_count = $count;
 } else {
  $total_returned_book_count = 0;
 }
}



?>

<br /><span id="title">Control Panel</span>

<div class="main mt-3">

 <!-- row1 -->
 <div class="box1">
  <div class="d-flex justify-content-between">
   <span>Books</span>
   <i class="fa fa-ellipsis-h mt-1" aria-hidden="true"></i>
  </div>
  <div class="body pt-3">
   <span><?php echo $total_book_count; ?></span><br />
   <h6>Total Books available</h6>
   <p>From 2018 - 2020</p>
  </div>
  <div class="footer d-flex justify-content-end">
   <div>
    <i class="fa fa-folder-open" aria-hidden="true"></i>
   </div>
  </div>
 </div>

 <div class="box3">
  <div class="d-flex justify-content-between">
   <span>Reserved Books</span>
   <i class="fa fa-ellipsis-h mt-1" aria-hidden="true"></i>
  </div>
  <div class="body pt-3">
   <span><?php echo $total_reserved_book_count; ?></span><br />
   <h6>Total Books reserved</h6>
   <p>From 2018 - 2020</p>
  </div>
  <div class="footer d-flex justify-content-end">
   <div>
    <i class="fa fa-folder-open" aria-hidden="true"></i>
   </div>
  </div>
 </div>

 <div class="box2">
  <div class="d-flex justify-content-between">
   <span>Issued</span>
   <i class="fa fa-ellipsis-h mt-1" aria-hidden="true"></i>
  </div>
  <div class="body pt-3">
   <span><?php echo $total_issued_book_count; ?></span><br />
   <h6>Total Books issued</h6>
   <p>From 2018 - 2020</p>
  </div>
  <div class="footer d-flex justify-content-end">
   <div>
    <i class="fa fa-folder-open" aria-hidden="true"></i>
   </div>
  </div>
 </div>

 <div class="box3">
  <div class="d-flex justify-content-between">
   <span>Returned</span>
   <i class="fa fa-ellipsis-h mt-1" aria-hidden="true"></i>
  </div>
  <div class="body pt-3">
   <span><?php echo $total_returned_book_count; ?></span><br />
   <h6>Total Books Returned</h6>
   <p>From 2018 - 2020</p>
  </div>
  <div class="footer d-flex justify-content-end">
   <div>
    <i class="fa fa-folder-open" aria-hidden="true"></i>
   </div>
  </div>
 </div>

 <?php
 if (json_decode($_COOKIE["user_data"])[3] === "admin") {
 ?>
  <div class="box4">
   <div class="d-flex justify-content-between">
    <span>Not returned</span>
    <i class="fa fa-ellipsis-h mt-1" aria-hidden="true"></i>
   </div>
   <div class="body pt-3">
    <span>34</span><br />
    <h6>Total Books not returned</h6>
    <p>From 2018 - 2020</p>
   </div>
   <div class="footer d-flex justify-content-end">
    <div>
     <i class="fa fa-folder-open" aria-hidden="true"></i>
    </div>
   </div>
  </div>

  <!-- row2 -->
  <div class="box1">
   <div class="d-flex justify-content-between">
    <span>Members</span>
    <i class="fa fa-ellipsis-h mt-1" aria-hidden="true"></i>
   </div>
   <div class="body pt-3">
    <span>991</span><br />
    <h6>Total Library Members</h6>
    <p>From 2018 - 2020</p>
   </div>
   <div class="footer d-flex justify-content-end">
    <div>
     <i class="fa fa-folder-open" aria-hidden="true"></i>
    </div>
   </div>
  </div>

  <div class="box2">
   <div class="d-flex justify-content-between">
    <span>Users</span>
    <i class="fa fa-ellipsis-h mt-1" aria-hidden="true"></i>
   </div>
   <div class="body pt-3">
    <span>32001</span><br />
    <h6>Total Books users</h6>
    <p>From 2018 - 2020</p>
   </div>
   <div class="footer d-flex justify-content-end">
    <div>
     <i class="fa fa-folder-open" aria-hidden="true"></i>
    </div>
   </div>
  </div>

  <div class="box4">
   <div class="d-flex justify-content-between">
    <span>Fined Users</span>
    <i class="fa fa-ellipsis-h mt-1" aria-hidden="true"></i>
   </div>
   <div class="body pt-3">
    <span>1201</span><br />
    <h6>Total Fined users</h6>
    <p>From 2018 - 2020</p>
   </div>
   <div class="footer d-flex justify-content-end">
    <div>
     <i class="fa fa-folder-open" aria-hidden="true"></i>
    </div>
   </div>
  </div>
</div>

<?php } ?>