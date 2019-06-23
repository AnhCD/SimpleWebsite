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
  <img class="mySlides" src="rubik_cube.jpeg"
  style="width:100%">
  <img class="mySlides" src="red_car.jpg"
  style="width:100%">
  <img class="mySlides" src="Lego.jpg"
  style="width:100%">
  <img class="mySlides" src="figue.jpg"
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