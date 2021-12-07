<div id="mySidenav" class="sidenav">
 <div id="avatar" class="mt-4 mb-2">
  <img src="./img/avatar.png" height="100%" width="100%" onclick="redirectHomepage()" />
 </div>
 <span>Admin Panel</span>
 <hr />
 <a href="javascript:void(0)" class="closebtn bg-white" onclick="closeNav()">&times;</a>
 <a href="index.php"> <i class="fa fa-home" aria-hidden="true"></i> Dashboard</a>
 <a href="members.php"> <i class="fa fa-users" aria-hidden="true"></i> Members</a>
 <a href="books.php"> <i class="fa fa-book" aria-hidden="true"></i> Books</a>
 <a href="#"> <i class="fa fa-rocket" aria-hidden="true"></i> Issued</a>
 <a href="#"> <i class="fa fa-undo" aria-hidden="true"></i> Returned</a>
 <a href="#"> <i class="fa fa-exclamation-circle" aria-hidden="true"></i> Not Returned</a>
 <a href="#"> <i class="fa fa-cogs" aria-hidden="true"></i> Setting</a>
</div>

<!-- Use any element to open the sidenav -->
<div id="navbar">
 <div id="rightNav">
  <i onclick="openNav()" class="fa fa-bars" aria-hidden="true"></i>
  <img src="./img/logo.png" onclick="redirectHomepage()" />
 </div>
 <div id="leftNav">
  <i class="fa fa-plus" data-bs-toggle="tooltip" data-bs-placement="top" title="Add a new book" onclick="createBook()" draggable="false"></i>
  <img src="./img/paint.png" height="28px" width="28px" data-bs-toggle="tooltip" data-bs-placement="top" title="Change BG color" aria-hidden="true" onclick="changeBackground()" draggable="false"></i>
  <div id="avatar">
   <img src="./img/avatar.png" height="100%" width="100%" onclick="showProfile_nav()" draggable="false" />
  </div>
 </div>
</div>