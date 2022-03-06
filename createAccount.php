<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="icon" href="../eLibrary/img/title_logo.png" type="image/x-icon">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="./css/createAccount.css">
 <title>Aroma/Signup</title>
</head>

<body>
 <!-- page logo -->
 <img src="./img/logo.png" onclick="redirectHomepage()" />
 <!-- main container -->
 <div class="container">
  <div class="form pt-3 pb-5 pl-2 pe-4">
   <h5 class="py-2 my-3 mx-2">Signup Form</h5>
   <!-- signup form container -->
   <form id="formData" method="post" action="./backend/createAccount.php" enctype="multipart/form-data" name="form">
    <!-- username and contact input -->
    <div class="first_row">
     <input type="text" id="username" name="username" placeholder="Enter username" required />
     <input type="text" id="contact" name="contact" placeholder="Enter contact number" required />
    </div>
    <!-- email input -->
    <div class="second_row">
     <input type="email" id="email" name="email" class="" placeholder="Enter Email or Phone number" required />
    </div>
    <!-- password input -->
    <div class="first_row">
     <input type="password" id="new_password" name="new_password" placeholder="Enter new password" required />
     <input type="password" id="re_password" name="re_password" placeholder="Renter password" required />
    </div>
    <!-- image file input -->
    <input type="file" id="file_inp" name="file_inp" class="form-control" placeholder="Enter email or phone number" required /><br />
    <!-- submit button input -->
    <center>
     <input type="submit" name="create_btn" class="btn btn-primary px-5 rounded-0" value="Create a new Account"><br />
    </center><br />
    <center>
     <a href="http://localhost/elibrary/login.php" id="redirect_link">Alread have account ?</a>
    </center>
   </form>
  </div>
 </div>
</body>

</html>