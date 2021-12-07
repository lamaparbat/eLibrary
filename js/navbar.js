//change dark mode background
document.querySelector("body").style.backgroundColor = "white";
document.querySelector(".sidenav").style.backgroundColor = "white";
document.querySelector(".sidenav").style.color = "black";
function changeBackground() {
 if (document.querySelector("body").style.backgroundColor == "white") {
  document.querySelector("body").style.backgroundColor = "#110E0E";
  document.querySelector("body").style.color = "white";
  document.querySelector(".sidenav").style.backgroundColor = "black";
  document.querySelector(".sidenav").style.color = "white";
  document.querySelector("#navbar #rightNav img").src = "./img/logo2.png";
  document.querySelector("#navbar #leftNav img").src = "./img/paint2.png";
 } else {
  document.querySelector("body").style.backgroundColor = "white";
  document.querySelector("body").style.color = "black";
  document.querySelector(".sidenav").style.backgroundColor = "white";
  document.querySelector(".sidenav").style.color = "black";
  document.querySelector("#navbar #rightNav img").src = "./img/logo.png";
  document.querySelector("#navbar #leftNav img").src = "./img/paint.png";

 }
}

/* Set the width of the side navigation to 250px */
document.getElementById("mySidenav").style.zIndex = "44444";
function openNav() {
 document.getElementById("mySidenav").style.width = "250px";
}

/* Set the width of the side navigation to 0 */
function closeNav() {
 document.getElementById("mySidenav").style.width = "0";
}

//redirect to homepage
function redirectHomepage() {
 location.assign("/elibrary/index.php")
}

//set the profile_nav visible1
document.querySelector(".profile_nav").style.display = "none";
document.querySelector(".createCourse").style.display = "none";
document.querySelector(".main").style.display = "flex";
document.querySelector("#title").style.display = "flex";
function showProfile_nav() {
 if (document.querySelector(".profile_nav").style.display == "none") {
  document.querySelector(".profile_nav").style.display = "flex";
  document.querySelector(".main").style.display = "none";
 } else {
  document.querySelector(".profile_nav").style.display = "none";
  document.querySelector(".main").style.display = "flex";
 }
}

//open create book popup model
function createBook() {
 if (document.querySelector(".createCourse").style.display === "none") {
  document.querySelector(".members").style.display = "none";
  document.querySelector(".createCourse").style.display = "flex";
 } else {
  document.querySelector(".members").style.display = "flex";
  document.querySelector(".createCourse").style.display = "none";
 }
}

