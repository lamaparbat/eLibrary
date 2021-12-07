<!DOCTYPE html>
<html lang="en">

<head>
 <meta charset="UTF-8">
 <meta http-equiv="X-UA-Compatible" content="IE=edge">
 <meta name="viewport" content="width=device-width, initial-scale=1.0">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
 <link rel="stylesheet" href="./css/navbar.css">
 <link rel="stylesheet" href="./css/members.css">
 <link rel="stylesheet" href="./css/index.css">
 <link rel="stylesheet" href="./css/createCourse.css">
 <title>Library Management System/Members</title>
</head>

<body>
 <!-- header -->
 <?php include 'navbar.php'; ?>
 <?php include 'profile_nav.php'; ?>

 <!-- body -->
 <!-- create course -->
 <?php include 'createCourse.php'; ?>

 <div class="container members">
  <div class="row">

   <!-- sidebar navigation -->
   <div class="col-sm-4 p-5 sidebar bg-light text-dark">
    <h5 id="title">Create a new Member</h5>
    <hr class="mt-1" />
    <form class="pt-0" method="post" enctype="multipart/form-data">
     <span>Enter your Full name</span>
     <div class="d-flex mt-2 mb-4">
      <div class="icon_cont px-3 py-1 bg-light">
       <i class="fa fa-user" aria-hidden="true" id="userIcon"></i>
      </div>
      <input type="text" class="form-control shadow-0 rounded-0" placeholder="Enter your username" name="uname" id="uname" />
     </div>
     <span>Enter your email address</span>
     <div class="d-flex mt-2 mb-4">
      <div class="icon_cont px-3 py-1 bg-light">
       <i class="fa fa-envelope" aria-hidden="true" id="emailIcon"></i>
      </div>
      <input type="text" class="form-control shadow-0 rounded-0" placeholder="Enter your username" name="email" id="uname" />
     </div>
     <span>Enter your password</span>
     <div class="d-flex mt-2 mb-4">
      <div class="icon_cont px-3 py-1 bg-light">
       <i class="fa fa-lock" aria-hidden="true" id="passwordIcon"></i>
      </div>
      <input type="text" class="form-control shadow-0 rounded-0" placeholder="Enter your username" name="password" id="uname" />
     </div>
     <span>upload profile picture</span>
     <div class="d-flex mt-2 mb-4">
      <div class="icon_cont px-3 py-1 bg-light">
       <i class="fa fa-picture-o" aria-hidden="true" id="img"></i>
      </div>
      <input type="file" class="form-control shadow-0 rounded-0" name="img" id="img" />
     </div>
     <input type="submit" name="submit" value="Create" class="btn btn-primary mt-1 px-5 rounded-0" />
    </form>
   </div>

   <!-- scrollable member list -->
   <div class="col-sm-8 px-3 data bg- d-flex text-dark">

    <div class="box py-3 px-2 mx-1 my-2">
     <br />
     <center class="mt-1">
      <div id="memberImg">
       <img src="https://scontent.fktm2-2.fna.fbcdn.net/v/t39.30808-6/262854988_1068488910577897_160929939879007585_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=oKPwlsnmqFgAX_Yw9Ps&_nc_ht=scontent.fktm2-2.fna&oh=48eafc40e06897965940d3458f35c21b&oe=61B4168F" class="img-fluid" />
      </div>
     </center>
     <center class="mt-3 mb-1">
      <h5><b>Parbat Lama</b></h5>
     </center>
     <center><span>parbatlama70@gmail.com</span></center>
     <center class="mb-1"><span>Created: 12th sept,2020</span></center>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>
    <div class="box py-3 px-2 mx-1 my-2">
     <br />
     <center class="mt-1">
      <div id="memberImg">
       <img src="https://scontent.fktm2-2.fna.fbcdn.net/v/t39.30808-6/263788995_1698251113717940_7245342559847316623_n.jpg?_nc_cat=109&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=SEp19SstBzEAX8qwIcV&_nc_oc=AQmdhIlIQ-raMwDlMUIJylLzCMUyagzRREveW6xe0dbdqO54vgciyObvni26F93cx5w&_nc_ht=scontent.fktm2-2.fna&oh=db4fa416bb3979fb603062e6ad6c035e&oe=61B29BA6" class="img-fluid" />
      </div>
     </center>
     <center class="mt-3 mb-1">
      <h5><b>Ayush Tiwari</b></h5>
     </center>
     <center><span>aayush123@gmail.com</span></center>
     <center class="mb-1"><span>Created: 12th sept,2020</span></center>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>
    <div class="box py-3 px-2 mx-1 my-2">
     <br />
     <center class="mt-1">
      <div id="memberImg">
       <img src="https://scontent.fktm2-2.fna.fbcdn.net/v/t39.30808-6/224747457_101286108918117_1007467227970716205_n.jpg?_nc_cat=108&ccb=1-5&_nc_sid=09cbfe&_nc_ohc=XKjwGhZg66wAX9bpvjo&_nc_ht=scontent.fktm2-2.fna&oh=d13e33f2fa70ba0264714fbb719677e8&oe=61B22CD1" class="img-fluid" />
      </div>
     </center>
     <center class="mt-3 mb-1">
      <h5><b>Paw Som</b></h5>
     </center>
     <center><span>sammer321@gmail.com</span></center>
     <center class="mb-1"><span>Created: 12th sept,2020</span></center>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>
    <div class="box py-3 px-2 mx-1 my-2">
     <br />
     <center class="mt-1">
      <div id="memberImg">
       <img src="https://scontent.fktm2-2.fna.fbcdn.net/v/t39.30808-6/240961705_1456939091331248_2802939939508577444_n.jpg?_nc_cat=111&ccb=1-5&_nc_sid=e3f864&_nc_ohc=FIQWKKWJugsAX8ouJYK&_nc_ht=scontent.fktm2-2.fna&oh=9543dfd6b2ee612eeaf702133d5fc3a1&oe=61B3FFA9" class="img-fluid" />
      </div>
     </center>
     <center class="mt-3 mb-1">
      <h5><b>Atish Dhungana</b></h5>
     </center>
     <center><span>atish370@gmail.com</span></center>
     <center class="mb-1"><span>Created: 12th sept,2020</span></center>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>
    <div class="box py-3 px-2 mx-1 my-2">
     <br />
     <center class="mt-1">
      <div id="memberImg">
       <img src="https://encrypted-tbn2.gstatic.com/images?q=tbn:ANd9GcSi-tcg4ga6tPCcI53O3fzORBEy76aPLb_IDiaAe5M24nf1ErVr" class="img-fluid" />
      </div>
     </center>
     <center class="mt-3 mb-1">
      <h5><b>ɭɭ-ʌ Mådhūr ßīst ʌ-ɭɭ</b></h5>
     </center>
     <center><span>madhure3241@gmail.com</span></center>
     <center class="mb-1"><span>Created: 12th sept,2020</span></center>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>
    <div class="box py-3 px-2 mx-1 my-2">
     <br />
     <center class="mt-1">
      <div id="memberImg">
       <img src="https://scontent.fktm2-2.fna.fbcdn.net/v/t1.6435-1/p480x480/160247599_3858623480860874_230245165837826587_n.jpg?_nc_cat=107&ccb=1-5&_nc_sid=7206a8&_nc_ohc=eNBYAjqRDUsAX-3QRel&_nc_ht=scontent.fktm2-2.fna&oh=8e9e9f573f9971570419d2ec4c3c3998&oe=61D4F45B" class="img-fluid" />
      </div>
     </center>
     <center class="mt-3 mb-1">
      <h5><b>Ksheten Sherpa</b></h5>
     </center>
     <center><span>phurwa32@gmail.com</span></center>
     <center class="mb-1"><span>Created: 12th sept,2020</span></center>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>
    <div class="box py-3 px-2 mx-1 my-2">
     <br />
     <center class="mt-1">
      <div id="memberImg">
       <img src="https://scontent.fktm2-2.fna.fbcdn.net/v/t39.30808-1/p480x480/229281366_3043224085913125_2391772345057595075_n.jpg?_nc_cat=110&ccb=1-5&_nc_sid=7206a8&_nc_ohc=2QkLWIs5V5MAX9Mkni2&_nc_ht=scontent.fktm2-2.fna&oh=47c1f28893c2ee12f90789e1d39b2294&oe=61B39375" class="img-fluid" />
      </div>
     </center>
     <center class="mt-3 mb-1">
      <h5><b>बिशाल खड्का</b></h5>
     </center>
     <center><span>bish231@gmail.com</span></center>
     <center class="mb-1"><span>Created: 12th sept,2020</span></center>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
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
</body>

</html>