<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <link rel="icon" href="../eLibrary/img/title_logo.png" type="image/x-icon">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link rel="stylesheet" href="./css/login.css">
 <title>eLibrary / Member Login </title>
</head>

<body>
 <!-- page logo -->
 <img src="./img/logo.png" onclick="redirectHomepage()" />
 <!-- main container -->
 <div class="container">
  <!-- form container -->
  <div class="form_container">
   <h3>Member Login Form</h3><br />
   <form action="./backend/member_login.php" method="post">
    <div class="email_cont">
     <i class="fa fa-envelope-o"></i>
     <input type="email" name="email" class="form-control" placeholder="Enter email or phone number" required>
    </div><br />
    <div class="email_cont">
     <i class="fa fa-eye"></i>
     <input type="password" name="password" class="form-control" placeholder="Enter password" required>
    </div><br /><br />
    <center>
     <input type="submit" name="btn" value="Login" id="login_btn" /><br /><br />
     <a href="http://localhost/elibrary/createAccount.php">New to the site ?</a>
    </center>
   </form>
  </div>
 </div>

 <!-- JS CDN -->
 <script src="https://use.fontawesome.com/8af7dff76b.js"></script>
</body>

</html>