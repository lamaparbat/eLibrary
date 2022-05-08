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
  <title>eLibrary/Reserved</title>
</head>

<body>
  <!-- header -->
  <?php include 'navbar.php'; ?>
  <?php include 'profile_nav.php'; ?>

  <br />
  <div class="container members mt-5">
    <div class="row">
      <!-- scrollable member list -->
      <div class="container col-sm-8 px-3 data text-dark">
        <div class="container boxCont d-flex justify-content-center text-dark">
          data fetching.......
        </div>
      </div>
    </div>
  </div>
  </div>

  <!-- bootstrap mdn -->
  <script src="./js/navbar.js"></script>
  <script src="https://use.fontawesome.com/8af7dff76b.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js" integrity="sha512-chZc2Mx8B1GzGSNMfJRH63jW7uYZXzX0a/UlWRrTvl4kxxYqUHNMtyTTA5IDQ7gTl4ATLoXlZthsialW3muS0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
  <script>
    // get the books from server
    $.ajax({
      type: "GET",
      url: "./backend/getReserved.php",
      dataType: "html",
      success: function(data) {
        $(".col-sm-8 .boxCont").html(data);
      }
    });

    //delete reserved books
    function deleteReservedBook(id) {
      $.ajax({
        method: "POST",
        url: "./backend/deleteReservedBook.php",
        data: {
          id: id
        },
        success: function(res) {
          alert("Successfully deleted .")
          location.assign("http://localhost/eLibrary/reserved.php")
        }
      })
    }

    function issuedBook(user_email, bookid, src) {
      const userEmail = user_email;
      const bookId = bookid;
      const img_src = src;

      $.ajax({
        type: "POST",
        url: "./backend/issueReservedBook.php",
        data: {
          book_id: bookId,
          user_email: userEmail,
          src:img_src
        },
        success: function(data) {
          alert("successfully book issued")
          location.assign("")
        }
      })

    }
  </script>
</body>

</html>