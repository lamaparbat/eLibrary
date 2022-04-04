<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="icon" href="../eLibrary/img/title_logo.png" type="image/x-icon">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="./css/navbar.css">
 <link rel="stylesheet" href="./css/issued.css">
 <link rel="stylesheet" href="./css/index.css">
 <link rel="stylesheet" href="./css/searchNav.css">
 <link rel="stylesheet" href="./css/createCourse.css">
 <title>eLibrary/Issued</title>
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
   <!-- scrollable member list -->
   <div class="col-sm-8 px-3 data bg- text-dark">
    <?php include 'searchNav.php' ?>
    <div class="boxCont d-flex text-dark">
     data fetching.......
    </div>
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
  // get the books from server
  $.ajax({
   type: "GET",
   url: "./backend/getIssues.php",
   dataType: "html",
   success: function(data) {
    $(".col-sm-8 .boxCont").html(data);
   }
  })

  //return book
  function returnBook(issue_id, book_id, bookname, user_email, username,src) {
   $.ajax({
    type: "POST",
    url: "./backend/returnBook.php",
    data: {
     issue_id:issue_id,
     book_id: book_id,
     bookname: `${bookname}`,
     user_email: `${user_email}`,
     username: `${username}`,
     src:`${src}`
    },
    success: function(data) {
     if (data == "success") {
      alert("successfully returned book")
      location.assign("")
     } else {
      alert("500 !! failed to return book")
     }
    }
   })
  }

  //delete issued book
  function deleteIssue(id) {
   alert(id)
  }
 </script>
</body>

</html>