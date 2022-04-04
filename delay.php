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
    <div class="boxCont d-flex justify-content-center text-dark">
     <div class="box pb-2 mx-1 my-2">
      <br />
      <div class="bookImg">
       <img src="https://img1.hotstarext.com/image/upload/f_auto,t_hcdl/sources/r1/cms/prod/old_images/MOVIE/333/1770000333/1770000333-h" loading="lazy" class="img-fluid" id="memberImg" />
      </div>
      <div class="body d-flex flex-column">
       <h5 class="mx-3 my-2"><b>The fault in our stars</b></h5>
       <span class="mx-3">User: <font id="value">Parbat Lama</font></span>
       <span class="mx-3">Took on: <font id="value">5th feb, 2021</font></span>
       <span class="mx-3">Deadline: <font id="value">12th march,2021</font></span>
       <span class="mx-3">Returned: <font class="px-2 pb-1 bg-danger text-light" id="value"><i class="fa fa-times" aria-hidden="true"></i></font></span>
      </div>
      <div class="d-flex justify-content-around footer">
       <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
       <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
      </div>
     </div>

     <div class="box pb-2 mx-1 my-2">
      <br />
      <div class="bookImg">
       <img src=" https://img.wattpad.com/cover/34887092-512-k223341.jpg" class="img-fluid" id="memberImg" loading="lazy" />
      </div>
      <div class="body d-flex flex-column">
       <h5 class="mx-3 my-2"><b>The fault in our stars</b></h5>
       <span class="mx-3">User: <font id="value">Parbat Lama</font></span>
       <span class="mx-3">Took on: <font id="value">5th feb, 2021</font></span>
       <span class="mx-3">Deadline: <font id="value">12th march,2021</font></span>
       <span class="mx-3">Returned: <font class="px-2 bg-danger text-light" id="value"><i class="fa fa-times" aria-hidden="true"></i></font></span>
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
      <div class="body d-flex flex-column">
       <h5 class="mx-3 my-2"><b>The fault in our stars</b></h5>
       <span class="mx-3">User: <font id="value">Parbat Lama</font></span>
       <span class="mx-3">Took on: <font id="value">5th feb, 2021</font></span>
       <span class="mx-3">Deadline: <font id="value">12th march,2021</font></span>
       <span class="mx-3">Returned: <font class="px-2 bg-danger text-light" id="value"><i class="fa fa-times" aria-hidden="true"></i></font></span>
      </div>
      <div class="d-flex justify-content-around footer">
       <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
       <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
      </div>
     </div>

     <div class="box pb-2 mx-1 my-2">
      <br />
      <div class="bookImg">
       <img src="https://morningsidemaryland.com/wp-content/uploads/2021/09/YouTube-17.jpg" loading="lazy" class="img-fluid" id="memberImg" />
      </div>
      <div class="body d-flex flex-column">
       <h5 class="mx-3 my-2"><b>The fault in our stars</b></h5>
       <span class="mx-3">User: <font id="value">Parbat Lama</font></span>
       <span class="mx-3">Took on: <font id="value">5th feb, 2021</font></span>
       <span class="mx-3">Deadline: <font id="value">12th march,2021</font></span>
       <span class="mx-3">Returned: <font class="px-2 bg-danger text-light" id="value"><i class="fa fa-times" aria-hidden="true"></i></font></span>
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
      <div class="body d-flex flex-column">
       <h5 class="mx-3 my-2"><b>The fault in our stars</b></h5>
       <span class="mx-3">User: <font id="value">Parbat Lama</font></span>
       <span class="mx-3">Took on: <font id="value">5th feb, 2021</font></span>
       <span class="mx-3">Deadline: <font id="value">12th march,2021</font></span>
       <span class="mx-3">Returned: <font class="px-2 bg-danger text-light" id="value"><i class="fa fa-times" aria-hidden="true"></i></font></span>
      </div>
      <div class="d-flex justify-content-around footer">
       <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
       <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
      </div>
     </div>

     <div class="box pb-2 mx-1 my-2">
      <br />
      <div class="bookImg">
       <img src="https://phantom-marca.unidadeditorial.es/8256e68fdfac5b6a6c792af7308d27e8/crop/0x0/1597x899/resize/1320/f/jpg/assets/multimedia/imagenes/2021/10/01/16330974723192.png" loading="lazy" class="img-fluid" id="memberImg" />
      </div>
      <div class="body d-flex flex-column">
       <h5 class="mx-3 my-2"><b>The fault in our stars</b></h5>
       <span class="mx-3">User: <font id="value">Parbat Lama</font></span>
       <span class="mx-3">Took on: <font id="value">5th feb, 2021</font></span>
       <span class="mx-3">Deadline: <font id="value">12th march,2021</font></span>
       <span class="mx-3">Returned: <font class="px-2 bg-danger text-light" id="value"><i class="fa fa-times" aria-hidden="true"></i></font></span>
      </div>
      <div class="d-flex justify-content-around footer">
       <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
       <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
      </div>
     </div>

     <div class="box pb-2 mx-1 my-2">
      <br />
      <div class="bookImg">
       <img src="https://cdn.datafloq.com/cache/blog_pictures/2021/05/07/878x531/data-science-books.jpg" loading="lazy" class="img-fluid" id="memberImg" />
      </div>
      <div class="body d-flex flex-column">
       <h5 class="mx-3 my-2"><b>The fault in our stars</b></h5>
       <span class="mx-3">User: <font id="value">Parbat Lama</font></span>
       <span class="mx-3">Took on: <font id="value">5th feb, 2021</font></span>
       <span class="mx-3">Deadline: <font id="value">12th march,2021</font></span>
       <span class="mx-3">Returned: <font class="px-2 bg-danger text-light" id="value"><i class="fa fa-times" aria-hidden="true"></i></font></span>
      </div>
      <div class="d-flex justify-content-around footer">
       <div class="edit_cont px-2"><i class="fa fa-pencil" aria-hidden="true"></i> Edit</div>
       <div class="edit_cont px-2"><i class="fa fa-trash" aria-hidden="true"></i></i> Delete</div>
      </div>
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