<div class="container-fluid profile_nav">
  <div class="row">
    <div class="content">
      <div class="d-flex justify-content-end">
        <i class="fa fa-times btn" aria-hidden="true" onclick="redirect()"></i>
      </div>
      <div class="row1 mb-2">
        <img id="avatar" src="./backend/uploads/<?php echo json_decode($_COOKIE["user_data"])[2]; ?>" height="100%" width="100%" />
      </div>
      <center>
        <span id="username"><b>
            <?php echo json_decode($_COOKIE["user_data"])[1]; ?>
          </b></span>
      </center>
      <center>
        <span id="email">
          <?php echo json_decode($_COOKIE["user_data"])[0]; ?>
        </span>
      </center>
      <center>
        <button class="px-3 py-1 my-3 bg-white shadow-none" id="setting_btn">Manage your account</button>
      </center>
      <hr class="text-secondary" />
      <center>
        <button class="px-3 py-1 my-3 bg-white shadow-none" id="logout_btn" onclick="logout()">
          <i class="fa fa-sign-out" aria-hidden="true" onclick="logout()"></i> Sign Out account &nbsp;
        </button>
      </center>
      <div class="copyright">
        <span class="px-3">Privacy Policy</span>
        <span>Terms of services</span>
      </div>
    </div>
  </div>
</div>

<script>
  function logout() {
    location.assign("http://localhost/elibrary/backend/logout.php");
  }

  function redirect() {
    location.assign("http://localhost/elibrary/")
  }
</script>