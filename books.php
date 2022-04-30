<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="../eLibrary/img/title_logo.png" type="image/x-icon">
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
  <?php include 'createBook.php'; ?>
  <br />
  <div class="container-fluid members mt-5">
    <div class="rows">
      <!-- sidebar navigation -->
      <?php
      if (json_decode($_COOKIE["user_data"])[3] === "admin") {
      ?>
        <div class="p-4 sidebar bg-light text-dark">
          <h5 id="title">Issue Book</h5>
          <hr class="mt-1" />
          <form action="./backend/issueBook.php" class="pt-0" method="post" enctype="multipart/form-data">
            <span>Enter Book ID</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-user" aria-hidden="true" id="userIcon"></i>
              </div>
              <input type="number" class="form-control shadow-0 rounded-0" placeholder="Enter book id" name="book_id" id="uname" required />
            </div>
            <span>Enter email ID</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-calendar-o" aria-hidden="true" id="passwordIcon"></i>
              </div>
              <input type="email" class="form-control shadow-0 rounded-0" placeholder="abc@gmail.com" name="user_email" id="uname" />
            </div>
            <input type="hidden" value="" name="data_id" id="data_id" />
            <input type="submit" name="submit" value="Issue Book" class="btn btn-primary mt-1 px-5 rounded-0" onclick="updateComplete()" required />
            <a class="btn btn-danger mt-1 px-5 rounded-0 cancelBtn" onclick="hideSidebar()">Cancel</a>
          </form>
        </div>
      <?php } ?>

      <?php
      if (json_decode($_COOKIE["user_data"])[3] != "admin") {
      ?>
        <!-- scrollable member list -->
        <div class="container px-3 data bg-text-dark">
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
  // hide the sidebar form 
  function hideSidebar() {
    if ($(".members .sidebar").css("display") == "none") {
      $(".members .rows .data").css("width", "70%")
      $(".members .sidebar").css("display", "block")
    } else {
      $(".members .rows .data").css("width", "100%")
      $(".members .sidebar").css("display", "none")
    }
  }

  // display cancel btn based on width
  if (window.innerWidth > 1090) {
    $(".cancelBtn").hide();
  } else {
    $(".cancelBtn").show();
  }
  $(window).on("resize", () => {
    if (window.innerWidth > 1090) {
      $(".cancelBtn").hide();
    } else {
      $(".cancelBtn").show();
    }
  })

  //edit the card details
  function edit(id, event) {
    const cardObj = event.currentTarget.parentElement.parentElement
    const cardDesc = event.currentTarget.parentElement.parentElement.children[2]
    const src = cardObj.children[1].children[0].src;
    const title = cardDesc.children[0].innerText
    const author = cardDesc.children[1].children[0].innerText
    const category = cardDesc.children[2].children[0].innerText
    const published = cardDesc.children[3].children[0].innerText

    // change the btn value to update
    $(".members .sidebar form").children().toArray()[11].value = "Update";
    $(".members .sidebar").children().toArray()[2].action = "./backend/updateBooks.php";

    //loading the field value to the sidebar form
    $(".members .sidebar form #data_id").val(cardObj.id)
    $(".members .sidebar form div").children().toArray()[1].value = title
    $(".members .sidebar form div").children().toArray()[4].value = author
    $(".members .sidebar form div #book_img").attr("src", src)

    // hide window based on width size
    if (window.innerWidth < 1090) {
      hideSidebar()
    }
  }

  function Delete(id) {
    confirm("Are you sure want to delete ", id);
    $.ajax({
      type: "POST",
      url: "./backend/deleteBook.php",
      data: {
        id: id
      },
      success: function(data) {
        location.assign("http://localhost/eLibrary/books.php")
      },
      error: function() {
        alert("Failed to delete !!")
      }
    })
  }

  //issue books
  function Issue(id) {
    alert(id + " issue admin")
  }

  //issue books
  function Reserve(book_id, bookname, user_email, src) {
    $.ajax({
      type: "POST",
      url: "./backend/reserveBooks.php",
      data: {
        user_email: user_email,
        book_id: book_id,
        bookname: bookname,
        src: src
      },
      success: function(data) {
        if (data === "success") {
          alert("Book successfully reserved");
        } else if(data === "found"){
   alert("Selected book already reserved !!")
}else {
          alert("500!!.  Failed to reserved book !!");
        }
      },
      error: function() {
        alert("404!!. Client side error !!")
      }
    })
  }

  // search books response
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