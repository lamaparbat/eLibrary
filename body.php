<?php
include '../eLibrary/backend/connection.php';

$email = json_decode($_COOKIE["user_data"])[0];
$cur_date = date("y/m/d");
$last_date = "";

$total_book_count = $total_issued_book_count = $total_reserved_book_count = $total_returned_book_count = 0;

//select query by desc order
$query = "SELECT * FROM books ORDER BY date ASC";

//get the last created book
$result = mysqli_query($con, $query);
while ($row = mysqli_fetch_assoc($result)) {
  $start_date = $row["date"];
  $arr = explode("-", $start_date);
  $start_date = $arr[0];
  break;
}

//select query by desc order
$query = "SELECT * FROM books";
$total_book_count = mysqli_num_rows(mysqli_query($con, $query)) or die(mysqli_error($con));

if (json_decode($_COOKIE["user_data"])[3] === "user") {
  //get the total issued books count
  $query = "SELECT * FROM issued WHERE user_email='$email'";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $total_issued_book_count = $count;
  } else {
    $total_issued_book_count = 0;
  }

  //get the total reserved books count
  $query = "SELECT * FROM reserved WHERE user_email='$email'";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $total_reserved_book_count = $count;
  } else {
    $total_reserved_book_count = 0;
  }

  //get the total reserved books count
  $query = "SELECT * FROM returned WHERE user_email='$email'";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $total_returned_book_count = $count;
  } else {
    $total_returned_book_count = 0;
  }
}

if (json_decode($_COOKIE["user_data"])[3] === "admin" || json_decode($_COOKIE["user_data"])[3] === "member") {
  //get the total issued books count
  $query = "SELECT * FROM issued";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $total_issued_book_count = $count;
  } else {
    $total_issued_book_count = 0;
  }

  //get the total reserved books count
  $query = "SELECT * FROM reserved";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $total_reserved_book_count = $count;
  } else {
    $total_reserved_book_count = 0;
  }

  //get the total reserved books count
  $query = "SELECT * FROM returned";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $total_returned_book_count = $count;
  } else {
    $total_returned_book_count = 0;
  }

  //get the total fined user count
  $query = "SELECT * FROM fined_users";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $total_fined_users_count = $count;
  } else {
    $total_fined_users_count = 0;
  }

  //get the total members count
  $query = "SELECT * FROM members";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $total_members_count = $count;
  } else {
    $total_members_count = 0;
  }

  //get the total users count
  $query = "SELECT * FROM user";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $total_users_count = $count;
  } else {
    $total_users_count = 0;
  }

  //get the total fined users count
  $query = "SELECT * FROM user";
  $result = mysqli_query($con, $query);
  $count = mysqli_num_rows($result);
  if ($count > 0) {
    $total_users_count = $count;
  } else {
    $total_users_count = 0;
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
      <p>From <?php echo $start_date; ?> - <?php echo "20" . $cur_date[0] . $cur_date[1]; ?></p>
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
        <span><?php echo $total_fined_users_count; ?></span><br />
        <h6>Total Books not returned</h6>
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
        <span><?php echo $total_members_count; ?></span><br />
        <h6>Total Library Members</h6>
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
        <span><?php echo $total_users_count; ?></span><br />
        <h6>Total Books users</h6>
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
        <span><?php echo $total_fined_users_count; ?></span><br />
        <h6>Total Fined users</h6>
      </div>
      <div class="footer d-flex justify-content-end">
        <div>
          <i class="fa fa-folder-open" aria-hidden="true"></i>
        </div>
      </div>
    </div>
</div>

<?php } ?>