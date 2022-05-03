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
  <title>eLibrary/Members</title>
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
          <h5 id="title">Insert a new Member</h5>
          <hr class="mt-1" />
          <form action="./backend/createMember.php" class="pt-0" method="post" enctype="multipart/form-data" onsubmit="sendMemberData(event)" onchange="formdataChange()">
            <input type="hidden" name="id" id="data_id" value="" />
            <span>Enter name</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-user" aria-hidden="true" id="userIcon"></i>
              </div>
              <input type="text" class="form-control shadow-0 rounded-0 uname" name="member_name" id="uname" />
            </div>
            <span>Enter Email</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-envelope" aria-hidden="true" id="emailIcon"></i>
              </div>
              <input type="text" class="form-control shadow-0 rounded-0 email" placeholder="abc@gmail.com" name="email" id="uname" />
            </div>
            <span>Enter Phone number</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-phone" aria-hidden="true" id="emailIcon"></i>
              </div>
              <input type="text" class="form-control shadow-0 rounded-0 phoneNum" placeholder="+977" name="phone" id="uname" />
            </div>
            <span>Upload Profile picture</span>
            <div class="d-flex mt-2 mb-4">
              <div class="icon_cont px-3 py-1 bg-light">
                <i class="fa fa-picture-o" aria-hidden="true" id="img"></i>
              </div>
              <input type="file" class="form-control shadow-0 rounded-0 profile" name="profile" id="img" />
            </div>
            <input type="hidden" value="" name="data_id" id="data_id" />
            <span class="text-danger errorSpan"></span><br />
            <input type="submit" name="submit" value="Create" class="btn btn-primary px-5 rounded-0" id="createMemberBtn" />
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
  function formdataChange() {
    const memberName = $(".uname").val();
    const email = $(".email").val();
    const phone = parseInt($(".phoneNum").val());
    const profile = $(".profile").val();

    if (memberName && profile && email && phone) {
      if (email.indexOf("@") > 0 && email.indexOf("gmail") > 0 && email.indexOf(".com") > 0) {
        if (Number.isInteger(phone)) {
          $("#createMemberBtn").prop("disabled", false)
          $(".errorSpan").text("")
        } else {
          $(".errorSpan").text("Enter a correct phone number format !!")
        }
      } else {
        $(".errorSpan").text("Please type a correct email format !!")
      }
    } else {
      $(".errorSpan").text("Please fill the all field values !")
    }
  }

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
    const src = cardObj.children[1].children[0].src
    const title = cardDesc.children[0].children[0].innerText
    const email = cardDesc.children[1].children[0].innerText
    const phone = cardObj.children[2].children[2].children[0].innerText

    // change the btn value to update
    document.querySelector(".members .sidebar form")[6].value = "Update";
    $(".members .sidebar").children().toArray()[2].action = "./backend/updateBooks.php";

    //loading the field value to the sidebar form
    $(".members .sidebar form #data_id").val(cardObj.id)
    $(".members .sidebar form div").children().toArray()[1].value = title
    $(".members .sidebar form div").children().toArray()[4].value = email
    $(".members .sidebar form div #img").attr("src", src)
    $(".members .sidebar form div .phoneNum").val(phone)

    // hide window based on width size
    if (window.innerWidth < 1090) {
      hideSidebar()
    }
  }

  //update the member list
  function updateComplete() {
    const isFileEmpty = $(".members .sidebar form #img").val() ? false : true;
    console.log($(".members .sidebar form #img").val())
    if (isFileEmpty) {
      $(".members .sidebar form #img").remove();
      $(".members .sidebar form #createMemberBtn").click();
    }
    return;
  }


  function Delete(id) {
    const res = confirm("Are you sure want to delete ", id);
    if (res) {
      $.ajax({
        type: "POST",
        url: "./backend/deleteMember.php",
        data: {
          id: id
        },
        success: function(data) {
          alert(data)
          location.assign("http://localhost/eLibrary/members.php")
        },
        error: function() {
          alert("Failed to delete !!")
        }
      })
    }
  }

  // search
  $.ajax({
    type: "GET",
    url: "./backend/getMembers.php",
    dataType: "html",
    success: function(data) {
      $(".boxCont").html(data);
    }
  })
</script>
</body>

</html>