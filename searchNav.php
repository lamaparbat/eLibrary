<div class="searchNav mt-2">
 <div id="searchbar">
  <div class="totalMem p-2 px-3 mx-2 rounded-1">
   <i class="fa fa-align-right mx-1" aria-hidden="true"></i>
  </div>
  <div class="totalMem mx-3 p-2 px-3 rounded-1" id="memberCount">
   <i class="fa fa-users mx-2" aria-hidden="true"></i>
   <span>Books(100)</span>
  </div>
  <div>
   <i class="fa fa-search px-3" aria-hidden="true"></i>
   <input type="search" id="searchbar" class="form-control shadow-0 rounded-0" placeholder="Enter keyword" />
  </div>
 </div>
</div><br /><br /><br />

<!-- importing jquery cdn -->
<script script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.1/jquery.min.js" integrity="sha512-chZc2Mx8B1GzGSNMfJRH63jW7uYZXzX0a/UlWRrTvl4kxxYqUHNMtyTTA5IDQ7gTl4ATLoXlZthsialW3muS0A==" crossorigin="anonymous" referrerpolicy="no-referrer">
</script>

<!-- custom js script -->
<script>
 $("#searchbar").on("keyup", (e) => {
  //get the endpoints
  let endpoint = window.location.href.split("/")[4]

  //sending keyword to backend for live searching
  if (endpoint === "members.php") {
   $.ajax({
    url: "./backend/memberSearch.php",
    type: "POST",
    data: {
     data: e.target.value
    },
    success: function(data) {
     $(".boxCont").html(data);
    }
   })
  } else if (endpoint === "books.php") {
   $.ajax({
    url: "./backend/bookSearch.php",
    type: "POST",
    data: {
     data: e.target.value
    },
    success: function(data) {
     $(".boxCont").html(data);
    }
   })
  } else if (endpoint === "issued.php") {
   $.ajax({
    url: "./backend/issueBooksSearch.php",
    type: "POST",
    data: {
     data: e.target.value
    },
    success: function(data) {
     $(".boxCont").html(data);
    }
   })
  }

 })
</script>