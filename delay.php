<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="./css/navbar.css">
  <link rel="stylesheet" href="./css/delay.css">
  <link rel="stylesheet" href="./css/index.css">
  <link rel="stylesheet" href="./css/searchNav.css">
  <link rel="stylesheet" href="./css/createCourse.css">
  <title>eLibrary / Not Returned</title>
</head>

<body>
  <!-- header -->
  <?php include 'navbar.php'; ?>
  <?php include 'profile_nav.php'; ?>
  <!-- body -->
  <!-- create course -->
  <?php include 'createBook.php'; ?>
  <br />
  <div class="container members mt-5">
    <div class="row">
      <!-- sidebar navigation -->
      <div class="col-sm-4 p-5 pt-3 pb-2 pl-0 sidebar bg-light text-dark">
        <h5 id="title">Book Not Returned Policy</h5>
        <hr class="mt-1" />
        <ul>
          <li style="margin-top:-8px;">If items are reserved and not returned, 50p a day to a maximum of £20 per book</li>
          <li>You do not return overdue items within 28 days, you may be invoiced for a replacement copy.</li>
          <li>If an item you have borrowed is returned in unsatisfactory condition, you may be invoiced for a replacement copy.</li>
          <hr />
          <p><b>Unpaid Library Fine & Charges</b></p>
          <li style="margin-top:-15px">Borrowers with fines that are over £10 will have their cards temporarily blocked and will be unable to borrow items until the fine is paid.</li>
          <li>Borrowers who wish to dispute fines on their account should contact heraldclz.edu.np with evidence of any mitigating circumstances.</li>
        </ul>
      </div>

      <!-- scrollable member list -->
      <div class="col-sm-8 px-3 data bg- text-dark">
        <?php include 'searchNav.php' ?>
        <div class="boxCont d-flex justify-content-center text-dark"></div>
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
        url: "./backend/getDelay.php",
        dataType: "html",
        success: function(data) {
          $(".boxCont").html(data);
        }
      });

      //delete returned book
      function deleteDelay(id) {
        //send delete request to the backend server
        $.ajax({
          method: "post",
          url: "./backend/deleteDelay.php",
          data: {
            id: id
          },
          success: function(result) {
            location.assign("http://localhost/elibrary/delay.php");
          },
          error: function(err) {
            console.log(err);
          }
        })
      }
    </script>
</body>

</html>