<?php 

session_start();

if (!isset($_SESSION['username'])) {
    header("Location: index.php");

}

?>
<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="style2.css">

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;}
.mySlides {display: none;}
img {vertical-align: middle;
opacity: 0.5;}
.slideshow-container {
width:100%;
height:100%;
}

.text {
  color: black;
  font-size: 20px;
  max-width: 40%;
  position: absolute;
  top:40%;
  left:0;
  transform: translateY(-50%);
  background-color:whitesmoke;
}


/* The dots/bullets/indicators */
.dot {
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
}

.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}

.dropdown-content {
  display: none;
  position: relative;
  background-color: #f1f1f1;
  min-width: 160px;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  z-index: 1;
}

.dropdown-content a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdown-content a:hover {background-color: #ddd;}

.dropdown:hover .dropdown-content {display: block;}

.dropdown:hover .dropbtn {background-color: #3e8e41;}
</style>
</head>
<body>
<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="about.html">About</a>
  <a href="welcome.php">Upload</a>
  <a class="active" href="home.php">Home</a>
</div>

<div class="slideshow-container">
<div class="mySlides fade">
  <img src="images/all.png" width=100% height=100%;>
  <div class="text"><h3>Emotions</h3>
<p>Emotion is a subjective state of mind. Emotions can be reactions to internal stimuli or events that occur in our environment.
Emotions are not the same thing as moods.Emotions not only reflect our mental states but they also alter our body chemistry and functioning.
</p>

</div>
</div>

<div class="slideshow-container">
<div class="mySlides fade">
  <img src="images/happy.jpg" width=100% height=100%;>
  <div class="text"><h3>Happiness</h3>
<p>Happiness is a state of generalized well-being associated with feelings of pleasure, joy, and satisfaction.
Having goals and pursuing them with purpose is one of the key ways to increase happiness.
Being grateful, even for small things, can help to significantly boost mood.
</p>
</div>
</div>

<div class="slideshow-container">
<div class="mySlides fade">
  <img src="images/sad.jpg" width=100% height=100%;>
  <div class="text"><h3>Sadness</h3>
  <p>Sadness is a transient emotional state that is generally associated with negative moods and unhappy feelings.
Sadness is considered to be one of the basic human emotions and it is a natural response to situations involving psychological and emotional pain.
Sadness is a common emotion. In some cases, it can also be a symptom of certain mental health conditions such as depression.
</p>
</div>
</div>
<div class="slideshow-container">
<div class="mySlides fade">
  <img src="images/anger.jpg" style="width:100%;height:100%;">
  <div class="text"><h3>Anger</h3>
  <p>Anger is a strong feeling of displeasure. It is often a reaction to stress, failure, or injustice. Anger can range from mild irritation to full-blown rage.
It is normal to experience anger. 
At times, anger is the appropriate response to the actions of others. 
When managed correctly and kept in check, anger can be an important ally to a healthy adult. 
</p>
</div>
</div>
<div class="slideshow-container">
<div class="mySlides fade">
  <img src="images/tensed.jpg" width=100% height=100%;>
  <div class="text"><h3>Stress</h3>
<p>
Stress is a normal reaction to the pressures of everyday life.
Stress is our body’s response to pressure. Many different situations or life events can cause stress. It is often triggered when we experience something new, unexpected or that threatens our sense of self
Symptoms of emotional stress can be both physical, mental and behavioral.
</p>
</div>
</div>
<br>

<div style="text-align:center">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 3000); 
}
</script>

</body>
</html> 
