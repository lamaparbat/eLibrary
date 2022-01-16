<?php
  // accession session data file
  include 'cookies_data.php';

  if($data[0] == ""){
    header("Location: http://localhost/eLibrary/login.php");
  }else{
     echo $data[1]." User is logged in";
  }

?>