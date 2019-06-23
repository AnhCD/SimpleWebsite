<!DOCTYPE html>
<html>
<title>HOME PAGE</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://www.w3schools.com/lib/w3-theme-black.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
* {box-sizing: border-box}

img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin: auto;
}
.navbar {
  width: 100%;
  background-color: #555;
  overflow: auto;
}

.navbar a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four links of equal widths */
  text-align: center;
}

.navbar a:hover {
  background-color: #000;
}

.navbar a.active {
  background-color: #4CAF50;
}

@media screen and (max-width: 500px) {
  .navbar a {
    float: none;
    display: block;
    width: 100%;
    text-align: left;
  }
}
</style>
<body>
<!-- Navbar -->
<div class="navbar">
  <a class="w3-bar-item w3-button w3-hide-medium w3-hide-large w3-right w3-hover-white w3-theme-d2" href="javascript:void(0);" onclick="openNav()"><i class="fa fa-bars"></i></a>
  
  <a href="ConnectToDB.php" target="_blank" ><button class="w3-bar-item w3-button w3-hide-small w3-hover-white" type="submit">View database</button></a>
  <a href="InsertData.php" target="_blank" ><button class="w3-bar-item w3-button w3-hide-small w3-hover-white" type="submit">Insert data to the database</button></a>
  <a href="UpdateData.php" target="_blank" ><button class="w3-bar-item w3-button w3-hide-small w3-hover-white" type="submit">Update data to the database</button></a> 
  <a href="DeleteData.php" target="_blank" ><button class="w3-bar-item w3-button w3-hide-small w3-hover-white" type="submit">Delete data to the database</button></a> 
</div>

<!-- Slide Show-->
<div class="slideshow-container">
  <div>
  <img class="mySlides" src="https://rukminim1.flixcart.com/image/612/612/jmi22kw0/puzzle/d/h/f/1-high-speed-stickerless-3x3-magic-rubik-cube-puzzle-game-toy-original-imaf8g4zyghejjkc.jpeg?q=70"
  style="width:40%">
  <img class="mySlides" src="https://images-na.ssl-images-amazon.com/images/I/71MyeaKySwL._SX425_.jpg"
  style="width:40%">
  <img class="mySlides" src="https://media.wired.com/photos/5954a0cb8e8cc150fa8ec6e7/master/w_1800,c_limit/HighRes_LEGO_DUPLO_bricks-story.jpg"
  style="width:40%">
  <img class="mySlides" src="https://media.4rgos.it/i/Argos/1085873_R_Z001A?w=750&h=440&qlt=70"
  style="width:40%">
  </div>
</div>
<script>
// Automatic Slideshow - change image every 3 seconds
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
     x[i].style.display = "none";
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}
  x[myIndex-1].style.display = "block";
  setTimeout(carousel, 3000);
}
</script>
</body>
     
</html>