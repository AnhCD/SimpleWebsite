<html>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="/w3css/3/w3.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
<body>
<nav class="w3-bar w3-black">
  <a href="ConnectToDB.php" class="w3-button w3-bar-item">View</a>
  <a href="InsertData.php" class="w3-button w3-bar-item">Insert</a>
  <a href="UpdateData.php" class="w3-button w3-bar-item">Update</a>
  <a href="DeleteData.php" class="w3-button w3-bar-item">Delete</a>
</nav>

<!-- Slide Show-->
<section>
  <img class="mySlides" src="https://rukminim1.flixcart.com/image/612/612/jmi22kw0/puzzle/d/h/f/1-high-speed-stickerless-3x3-magic-rubik-cube-puzzle-game-toy-original-imaf8g4zyghejjkc.jpeg?q=70"
  style="width:100%">
  <img class="mySlides" src="https://images-na.ssl-images-amazon.com/images/I/71MyeaKySwL._SX425_.jpg"
  style="width:100%">
  <img class="mySlides" src="https://media.wired.com/photos/5954a0cb8e8cc150fa8ec6e7/master/w_1800,c_limit/HighRes_LEGO_DUPLO_bricks-story.jpg"
  style="width:100%">
  <img class="mySlides" src="https://media.4rgos.it/i/Argos/1085873_R_Z001A?w=750&h=440&qlt=70"
  style="width:100%">
</section>
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