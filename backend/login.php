<?php
//connecting to database
include 'connection.php';

if(isset($_POST["btn"])){
  //retrieving form data
  $email = $_POST["email"];
  $password = $_POST["password"];

  //db insertion
  $query = "SELECT * FROM user WHERE email='$email' AND password = '$password'";
  $result = mysqli_query($con, $query);
  if(mysqli_num_rows($result) > 0){
  //get the user data
  $user_data = [];
  while ($row = mysqli_fetch_assoc($result)) {
   if ($row["email"] == $email) {
    $user_data[0] = $row["email"];
    $user_data[1] = $row["name"];
    $user_data[2] = $row["src"];
    $user_data[3] = "user";
    $user_data[4] = $row["date"];
   }
  }
    //save the cookies
    setcookie("user_data",json_encode($user_data), time()+(86400 * 30),"/");
    
    // successfully redirect to hompage
    header("Location: http://localhost/eLibrary/index.php");
  }else{
    // error . redirect to login page again
    header("Location: http://localhost/eLibrary/login.php");
  }
}

?>