<?php
$email = json_decode($_COOKIE["user_data"])[0];
$username = json_decode($_COOKIE["user_data"])[1];
$date = json_decode($_COOKIE["user_data"])[4];
?>

<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="icon" href="../eLibrary/img/title_logo.png" type="image/x-icon">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="./css/navbar.css">
 <link rel="stylesheet" href="./css/index.css">
 <link rel="stylesheet" href="./css/books.css">
 <link rel="stylesheet" href="./css/setting.css">
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
 <div class="container setting mt-5">
  <div class="setting_row px-3 py-3">
   <div class="title my-4 py-2">
    <h3><b>Setting</b></h3>
   </div>

   <h5 class="my-3 font-weight-bold"><i class="fa fa-bandcamp p-2" aria-hidden="true"></i> Edit profile</h5>
   <form method="post" action="./backend/profileSetting.php" enctype="multipart/form-data">
    <div class="edit_profile_cont1">
     <div>
      <span>Username</span>
      <input type="text" class="form-control bg-light" placeholder="" value="<?php echo $username; ?>" name="username" id="username" required />
     </div>
     <div class="mx-5">
      <span>Joined eLibrary on</span>
      <input type="date" class="form-control bg-light" placeholder="<?php echo $date; ?>" id="date" disabled />
     </div>
    </div><br />
    <div class="edit_profile_cont2 px-5">
     <div>
      <span>Change profile pictures</span>
      <input type="file" name="profile" class="form-control w-50 bg-light" id="profilePic" />
     </div>
    </div><br />
    <input type="submit" class="btn btn-success py-1 mx-5" value="Save changes"></input><br /><br />
   </form>

   <h5 class="my-3 text-bold"><i class="fa fa-bandcamp p-2" aria-hidden="true"></i> Privacy settings</h5>
   <form method="post" action="./backend/privacySetting.php">
    <div class="edit_profile_cont1">
     <div>
      <span>Email address</span>
      <input type="email" class="form-control  bg-light" name="email" placeholder="" value="<?php echo $email; ?>" />
     </div>
     <div class="mx-5">
      <span>Password</span>
      <input type="text" class="form-control bg-light" name="password" placeholder="" />
     </div>
    </div><br />
    <input type="submit" class="btn btn-success py-1 mx-5" value="Save changes"></input><br /><br /><br /><br /><br />
   </form>

   <button class="btn btn-danger px-5" onclick="logout()">Logout</button>
  </div>
 </div>

 <!-- bootstrap mdn -->
 <script src="./js/navbar.js"></script>
 <script src="./js/createCourse.js"></script>
 <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js" integrity="sha512-chZc2Mx8B1GzGSNMfJRH63jW7uYZXzX0a/UlWRrTvl4kxxYqUHNMtyTTA5IDQ7gTl4ATLoXlZthsialW3muS0A==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
 <script src="https://use.fontawesome.com/8af7dff76b.js"></script>
 <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>

 <!-- server communication -->
 <script>
  function logout() {
   location.assign("http://localhost/elibrary/backend/logout.php");
  }
 </script>
</body>

</html>