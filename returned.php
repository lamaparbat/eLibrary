<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="icon" href="../eLibrary/img/title_logo.png" type="image/x-icon">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="./css/navbar.css">
 <link rel="stylesheet" href="./css/returned.css">
 <link rel="stylesheet" href="./css/index.css">
 <link rel="stylesheet" href="./css/searchNav.css">
 <link rel="stylesheet" href="./css/createCourse.css">
 <title>eLibrary / Returned</title>
</head>

<body>
 <!-- header -->
 <?php include 'navbar.php'; ?>
 <?php include 'profile_nav.php'; ?>

 <!-- body -->
 <!-- create course -->
 <?php include 'createCourse.php'; ?>
 <br />
 <div class="container members mt-5">
  <div class="row">

   <!-- sidebar navigation -->
   <div class="col-sm-4 p-5 pt-4 pl-0 sidebar bg-light text-dark">
    <h5 id="title">Book Returned Policy</h5>
    <hr class="mt-1" />
    <ul>
     <li>Carry your student ID card (or CHOIS Card) with you when you enter the library.</li>
     <li>Do not take any book or other library material out of the library without following the borrowing procedures.</li>
     <li>Make sure to return the borrowed items by the due date.</li>
     <li>In case any of the borrowed items being lost, damaged, or destroyed, you are required to replace the lost /damaged/destroyed item with a new one.</li>
     <li>Never write in books or cut pages out of them.</li>
     <li>Return books/materials to their original location on the bookshelf.</li>
    </ul>
   </div>

   <!-- scrollable member list -->
   <div class="col-sm-8 px-3 data bg- text-dark">
    <?php include 'searchNav.php' ?>
    <div class="boxCont d-flex">
     ....loading data
    </div>
   </div>
  </div>
 </div>

 <!-- footer -->


 <!-- bootstrap mdn -->
 <script src="./js/navbar.js"></script>
 <script src="./js/createCourse.js"></script>
 <script src="https://use.fontawesome.com/8af7dff76b.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
 <script>
  // search books response
  $.ajax({
   type: "GET",
   url: "./backend/getReturned.php",
   dataType: "html",
   success: function(data) {
    $(".boxCont").html(data);
   }
  })
 </script>
</body>

</html>