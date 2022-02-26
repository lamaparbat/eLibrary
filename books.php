<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/books.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/searchNav.css">
  <link rel="stylesheet" href="./css/createCourse.css">
  <title>eLibrary/Books</title>
</head>

<body>
  <!-- header -->
  <?php include 'navbar.php'; ?>
  <?php include 'profile_nav.php'; ?>

  <!-- body -->
  <!-- create course -->
  <?php include 'createCourse.php'; ?>
  <br />
  <div class="container-fluid members mt-5">
    <div class="rows">
      <!-- sidebar navigation -->
      <?php
      if (json_decode($_COOKIE["user_data"])[3] === "admin") {
      ?>
        <div class="p-4 sidebar bg-light text-dark">
          <h5 id="title">Insert a new Book</h5>
          <hr class="mt-1" />
          <form action="./backend/createBooks.php" class="pt-0" method="post" enctype="multipart/form-data">
            <span>Enter Book name</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-user" aria-hidden="true" id="userIcon"></i>
              </div>
              <input type="text" class="form-control shadow-0 rounded-0" placeholder="Enter book name" name="book_name" id="uname" />
            </div>
            <span>Enter Author name</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-envelope" aria-hidden="true" id="emailIcon"></i>
              </div>
              <input type="text" class="form-control shadow-0 rounded-0" placeholder="Enter author name" name="book_author" id="uname" />
            </div>
            <span>Enter book category</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-book" aria-hidden="true" id="passwordIcon"></i>
              </div>
              <select class="form-control" name="book_category">
                <option value="History">History</option>
                <option value="Physics">Physics</option>
                <option value="Geography">Geography</option>
                <option value="Computer Science">Computer Science</option>
                <option value="Biology">Biology</option>
                <option value="Chemistry">Chemistry</option>
                <option value="Literature">Literature</option>
              </select>
            </div>
            <span>Enter published date</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-calendar-o" aria-hidden="true" id="passwordIcon"></i>
              </div>
              <input type="date" class="form-control shadow-0 rounded-0" name="book_published" id="uname" />
            </div>
            <span>upload cover picture</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-picture-o" aria-hidden="true" id="img"></i>
              </div>
              <input type="file" class="form-control shadow-0 rounded-0" name="book_img" id="img" />
            </div>
            <input type="submit" name="submit" value="Create" class="btn btn-primary mt-1 px-5 rounded-0" />
          </form>
        </div>
      <?php } ?>

      <?php
      if (json_decode($_COOKIE["user_data"])[3] != "admin") {
      ?>
        <!-- scrollable member list -->
        <div class="px-3 data bg-text-dark">
          <?php include 'searchNav.php' ?>
          <div class="boxCont d-flex text-dark">
            Data fetching .......
          </div>
        </div>
    </div>

  <?php } else { ?>
    <!-- scrollable member list -->
    <div class="px-3 data bg-text-dark">
      <?php include 'searchNav.php' ?>
      <div class="boxCont pb-5 d-flex text-dark">
        Data fetching .......
      </div>
    </div>
  </div><br />
<?php } ?>

<!-- bootstrap mdn -->
<script src="./js/navbar.js"></script>
<script src="./js/createCourse.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js" integrity="sha512-chZc2Mx8B1GzGSNMfJRH63jW7uYZXzX0a/UlWRrTvl4kxxYqUHNMtyTTA5IDQ7gTl4ATLoXlZthsialW3muS0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://use.fontawesome.com/8af7dff76b.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

<!-- fetching books from server -->
<script>
  $(".boxCont").click((e) => {
    if ($(".members .sidebar").css("display") == "none") {
      $(".members .rows .data").css("width", "70%")
      $(".members .sidebar").css("display", "block")
    } else {
      $(".members .rows .data").css("width", "100%")
      $(".members .sidebar").css("display", "none")
    }
  })
  $.ajax({
    type: "GET",
    url: "./backend/getBooks.php",
    dataType: "html",
    success: function(data) {
      $(".boxCont").html(data);
    }
  })
</script>
</body>

</html>