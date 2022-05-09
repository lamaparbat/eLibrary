<?php
include 'connection.php';

if (json_decode($_COOKIE["user_data"])[3] != "admin") {
 header("Location: http://localhost/eLibrary/admin_login.php");
}

$query = "SELECT * FROM issued";
$res = mysqli_query($con, $query) or die(mysqli_error($con));

while ($row = mysqli_fetch_assoc($res)) {
 //data
 $id = $row["id"];
 $user_email = $row["user_email"];
 $bookname = $row["bookname"];
 $book_id = $row["book_id"];
 $issue_date = $row["issued_date"];
 $deadline = $row["deadline"];
 $src = 'backend/books_img/' . $row["src"];

 //check deadline
 $cur_date =  date("Y/m/d");

 $split_cur_date = explode("/", $cur_date);
 $split_deadline_date = explode("/", $deadline);

 $isMonthExceed = intval($split_deadline_date[1]) < intval($split_cur_date[1]) ? "yes" : "no";
 $isDayExceed = intval($split_deadline_date[2]) > intval($split_cur_date[2]) ? "yes" : "no";

 if ($isMonthExceed === "yes") {
  //search user if already exist
  $query = "SELECT * FROM fined_users WHERE user_email='$user_email' AND bookname='$bookname'";
  $result = mysqli_query($con, $query);
  if (mysqli_num_rows($result) > 0) {
   while ($row = mysqli_fetch_assoc($result)) {
    if ($row["user_email"] == $user_email) {
     $amount = $row["amount"];
     $amount += 10;
     //update the amount in db
     $query = "UPDATE fined_users SET amount='$amount' WHERE user_email='$user_email'";
     mysqli_query($con, $query);
    }
   }
  } else {
   //insert & update the fine to fined user
   $query = "INSERT INTO fined_users(user_email,bookname, amount,exceed_day, src, date) VALUES('$user_email','$bookname', '10','$exceed_day_count','$src','$cur_date')";
   mysqli_query($con, $query) or die(mysqli_error($con));
  }
 } else {
  echo intval($split_cur_date[2]) - intval($split_deadline_date[2]) . " day remaining....";
 }
}




// if ($isMonthExceed === "yes") {
//  echo $bookname;
//  $exceed_day_count = intval($split_cur_date[2]) - intval($split_deadline_date[2]);
//  echo "exceed day count: " . $exceed_day_count;

//  //search user if already exist
//  $query = "SELECT * FROM fined_users WHERE user_email='$user_email'";
//  $result = mysqli_query($con, $query);
//  if (mysqli_num_rows($result) > 0) {
//   while ($row = mysqli_fetch_assoc($result)) {
//    if ($row["user_email"] == $user_email) {
//     $amount = $row["amount"];
//     $amount += 10;
//     //update the amount in db
//     $query = "UPDATE fined_users SET amount='$amount' WHERE user_email='$user_email'";
//     mysqli_query($con, $query);
//    }
//   }
//  } else {
//   //insert & update the fine to fined user
//   $query = "INSERT INTO fined_users(user_email,bookname, amount,exceed_day, src, date) VALUES('$user_email','$bookname', '10','$exceed_day_count','$src','$cur_date')";
//   mysqli_query($con, $query) or die(mysqli_error($con));
//  }
// } else {
//  echo intval($split_cur_date[2]) - intval($split_deadline_date[2]) . " day remaining....";
// }