<div class="createCourse bg-light">
 <div class="formDiv p-2">
  <form method="post" action="../eLibrary/backend/createBooks.php" enctype="multipart/form-data">
   <span>Enter Book Name</span><br />
   <input class="p-1 px-3" name="book_name" type="text" placeholder="" id="name" required /><br /><br />
   <span>Enter short Book Description</span><br />
   <textarea class="p-1 px-3 mb-1" name="book_description" type="text" placeholder="" id="description" required></textarea><br />
   <span>Enter Writer Name</span><br />
   <input class="p-1 px-3" type="text" name="book_author" placeholder="" id="writer" required /><br /><br />
   <span>Enter Available Books Quantity</span><br />
   <input class="p-1 px-3" type="number" name="book_quantity" placeholder="" id="quantity" required /><br /><br />
   <span>Enter Rack Number</span><br />
   <input class="p-1 px-3" type="text" name="book_rack" placeholder="" id="quantity" required /><br /><br />
   <span>Enter date of publish</span><br />
   <input class="p-1 px-3" type="date" name="book_published" placeholder="yy/mm/dd" id="date" required /><br /><br />
   <span>Enter Book Category</span><br />
   <select class="p-2 px-3" name="book_category" id="category" required>
    <option>Action and Adventure</option>
    <option>Classics</option>
    <option>Programming</option>
    <option>Economics</option>
    <option>Computer Science</option>
    <option>Accountancy</option>
    <option>Comic Book or Graphic Novel</option>
    <option>Detective and Mystery</option>
    <option>Fantasy</option>
    <option>Historical Fiction</option>
    <option>Horror</option>
    <option>Romance</option>
    <option>Short Stories</option>
    <option>Suspense and Thrillers</option>
    <option>Biographies and Autobiographies</option>
   </select><br /><br />
   <span>Enter post banner(Image)</span><br />
   <input class="p-1" name="img" type="file" id="img" /><br /><br />
   <input type="submit" class="btn btn-primary rounded-0" />
  </form>
 </div>
</div>