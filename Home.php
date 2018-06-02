<!DOCTYPE html>
<html>
	
<head>
	<link rel="stylesheet" type="text/css" href="Homestyle.css">
	<title>Llama Website</title> 
	<img src="">
</head>

<nav> 
	<a class="current" href="">Home</a>   <!-- Adding Navagation Links-->
	<a href="">CV</a>
	 <div class="dropdown">				
    <button class="dropbtn">Dropdown</button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div>
  </div>
	<a href="">Projects</a>
	 <div class="dropdown">
    <button class="dropbtn">Dropdown</button>
    <div class="dropdown-content">
      <a href="#">Link 1</a>
      <a href="#">Link 2</a>
      <a href="#">Link 3</a>
    </div> 
</div>
    <a href="">Hobbies</a>
</nav>

<body>
	 <button onclick="topFunction()" id="myBtn" title="Go to top">Top</button> <!-- css javascript needed scroll to top button-->
	<p></p>
	<br>
	<div class='slideshow-boarder'>
	<?php 
	$images = array scandir("name"); 		/* finding images and creating slideshow*/
	for (int $i=1 ; $images.size(); $i++) /* javascript needed slideshow*/
		echo "
	<div class='slides fade'>
		<img src='"$images[$i];
		echo "
		' style='width:100%' 
		</div> ";
	
	 ?>
	<a class="prev" onclick="plusSlides(-1)">&laquo;</a>
	<a class="next" onclick="plusSlides(1)">&raquo;</a>
	</div>
<br>
<p></p>
</body>

<footer>
	<p></p>

</footer>