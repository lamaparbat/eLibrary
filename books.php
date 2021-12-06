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
 <title>Library Management System/Members</title>
</head>

<body>
 <!-- header -->
 <?php include 'navbar.php'; ?>

 <!-- body -->
 <div class="container members">
  <div class="row">

   <!-- sidebar navigation -->
   <div class="col-sm-4 p-5 sidebar">
    <h5 id="title">Insert a new Book</h5>
    <hr class="mt-1" />
    <form class="pt-0" method="post" enctype="multipart/form-data">
     <span>Enter Book name</span>
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
   <div class="col-sm-8 px-3 data bg- d-flex">

    <div class="box pb-2 mx-1 my-2">
     <br />
     <div class="bookImg">
      <img src="https://img1.hotstarext.com/image/upload/f_auto,t_hcdl/sources/r1/cms/prod/old_images/MOVIE/333/1770000333/1770000333-h" class="img-fluid" id="memberImg" />
     </div>
     <div class="body">
      <h5 class="mx-3 my-2"><b>The fault in our stars</b></h5>
      <span class="mx-3">Authors: <font id="value">Parbat Lama</font></span>
      <span class="mx-3">Category: <font id="value">Romance</font></span>
      <span class="mx-3">Published: <font id="value">12th march,2021</font></span>
     </div>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>

    <div class="box pb-2 mx-1 my-2">
     <br />
     <div class="bookImg">
      <img src=" https://img.wattpad.com/cover/34887092-512-k223341.jpg" class="img-fluid" id="memberImg" />
     </div>
     <div class="body">
      <h5 class="mx-3 my-2"><b>Captured Heart</b></h5>
      <span class="mx-3">Authors: <font id="value">Parbat Lama</font></span>
      <span class="mx-3">Category: <font id="value">Mystery</font></span>
      <span class="mx-3">Published: <font id="value">12th march,2021</font></span>
     </div>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>

    <div class="box pb-2 mx-1 my-2">
     <br />
     <div class="bookImg">
      <img src="https://d2s6h2b6.stackpathcdn.com/blog/wp-content/uploads/2019/03/Java-Programming-4-1.png" class="img-fluid" id="memberImg" />
     </div>
     <div class="body">
      <h5 class="mx-3 my-2"><b>Java Programming (Zero to Hero)</b></h5>
      <span class="mx-3">Authors: <font id="value">Parbat Lama</font></span>
      <span class="mx-3">Category: <font id="value">Programming</font></span>
      <span class="mx-3">Published: <font id="value">12th march,2021</font></span>
     </div>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>

    <div class="box pb-2 mx-1 my-2">
     <br />
     <div class="bookImg">
      <img src="https://morningsidemaryland.com/wp-content/uploads/2021/09/YouTube-17.jpg" class="img-fluid" id="memberImg" />
     </div>
     <div class="body">
      <h5 class="mx-3 my-2"><b>Spiderman - No way home</b></h5>
      <span class="mx-3">Authors: <font id="value">Parbat Lama</font></span>
      <span class="mx-3">Category: <font id="value">Comic</font></span>
      <span class="mx-3">Published: <font id="value">12th march,2021</font></span>
     </div>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>

    <div class="box pb-2 mx-1 my-2">
     <br />
     <div class="bookImg">
      <img src="https://i.ytimg.com/vi/0_nAHeLXcXc/maxresdefault.jpg" class="img-fluid" id="memberImg" />
     </div>
     <div class="body">
      <h5 class="mx-3 my-2"><b>Artificial Intelligence</b></h5>
      <span class="mx-3">Authors: <font id="value">Parbat Lama</font></span>
      <span class="mx-3">Category: <font id="value">Computer Science</font></span>
      <span class="mx-3">Published: <font id="value">12th march,2021</font></span>
     </div>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>

    <div class="box pb-2 mx-1 my-2">
     <br />
     <div class="bookImg">
      <img src="https://phantom-marca.unidadeditorial.es/8256e68fdfac5b6a6c792af7308d27e8/crop/0x0/1597x899/resize/1320/f/jpg/assets/multimedia/imagenes/2021/10/01/16330974723192.png" class="img-fluid" id="memberImg" />
     </div>
     <div class="body">
      <h5 class="mx-3 my-2"><b>Squid Game</b></h5>
      <span class="mx-3">Authors: <font id="value">Parbat Lama</font></span>
      <span class="mx-3">Category: <font id="value">History</font></span>
      <span class="mx-3">Published: <font id="value">12th march,2021</font></span>
     </div>
     <div class="d-flex justify-content-around footer">
      <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
      <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
     </div>
    </div>

    <div class="box pb-2 mx-1 my-2">
     <br />
     <div class="bookImg">
      <img src="https://cdn.datafloq.com/cache/blog_pictures/2021/05/07/878x531/data-science-books.jpg" class="img-fluid" id="memberImg" />
     </div>
     <div class="body">
      <h5 class="mx-3 my-2"><b>Data Science</b></h5>
      <span class="mx-3">Authors: <font id="value">Parbat Lama</font></span>
      <span class="mx-3">Category: <font id="value">Computer Science</font></span>
      <span class="mx-3">Published: <font id="value">12th march,2021</font></span>
     </div>
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