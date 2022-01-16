if (window.innerWidth < 1100) {
 document.querySelector(".members .row .sidebar").style.display = "none";
} else {
 document.querySelector(".members .row .sidebar").style.display = "block";
}
window.addEventListener("resize", function (e) {
 if (window.innerWidth < 1100) {
  document.querySelector(".members .row .sidebar").style.display = "none";
 } else {
  document.querySelector(".members .row .sidebar").style.display = "block";
 }
})

function logout() {
 alert("logout clicked");
  location.assign("http://localhost/eLibrary/backend/logout.php")
}