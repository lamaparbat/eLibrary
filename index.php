<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="icon" href="../eLibrary/img/title_logo.png" type="image/x-icon">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="./css/navbar.css">
 <link rel="stylesheet" href="./css/index.css">
 <link rel="stylesheet" href="./css/createCourse.css">
 <link rel="stylesheet" href="./css/searchNav.css">
 <title>Library Management System</title>
</head>

<body>

 <!-- default authentical routing -->
 <?php include "auth.php"; ?>

 <!-- profile navigation items -->
 <?php include 'profile_nav.php'; ?>

 <!-- create course -->
 <?php include 'createBook.php'; ?>

 <br /><br /><br />
 <!-- ****** body  ****** -->
 <?php include 'body.php'; ?>

 <!-- *******  header ****** -->
 <?php include 'navbar.php'; ?>

 <!-- ****** footer ****** -->


 <!-- bootstrap mdn -->
 <script src="./js/navbar.js"></script>
 <script src="./js/createCourse.js"></script>
 <script src="https://use.fontawesome.com/8af7dff76b.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script>
  //open create book popup model
  document.querySelector(".profile_nav").style.display = "none";
  document.querySelector(".createCourse").style.display = "none";
  document.querySelector(".createCourse").style.background = "red !important";
  document.querySelector(".main").style.display = "flex";
  document.querySelector("#title").style.display = "flex";

  //open the create book
  function createBook() {
   if (document.querySelector(".createCourse").style.display === "none") {
    document.querySelector(".main").style.display = "none";
    document.querySelector(".createCourse").style.display = "flex";
   } else {
    document.querySelector(".main").style.display = "flex";
    document.querySelector(".createCourse").style.display = "none";
   }
  }
 </script>
</body>

</html>