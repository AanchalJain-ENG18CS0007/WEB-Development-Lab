<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style1.css">
	<link href=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
            rel="stylesheet">
  
  
    <script src=
"http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js" 
    type="text/javascript">
  
    </script>
  
    <script src=
"https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js">
    </script>
    <title>Welcome</title>
</head>
<body style="background-color:#88e9ec">
<div class="topnav">
  <a href="logout.php">Logout</a>
  <a href="about.html">About</a>
  <a class="active" href="welcome.php">Upload</a>
  <a  href="home.php">Home</a>
</div>
<?php 

    if(isset($_SESSION['message'])){
		 echo $_SESSION['message'];
	   unset($_SESSION['message']);
    }
    ?>
	<table class="c">
  <tr>
		<th> Images</th>
		<th>Web-cam</th>
		</tr>
		<tr>
	<td style="width:1000px">
	<form class="f1" method="post" action="upload.php" enctype='multipart/form-data'>
      <input type='file' name='file' ><br>
      <input type='submit' value='Upload' name='but_upload'>
    </form>
	</td>
	<td>
	<video id="video" width="60%" height="60%" autoplay>
     </video>
                          
                        <div class="text-right">
                            <a href="#!" class="btn btn-danger" 
                                onClick="stop()">
                                Stop Cam
                            </a>
                            <a href="#!" class="btn btn-success"
                                onClick="start()">
                                Start Cam
                            </a>
                        </div>
     
    <script>
        var stop = function () {
            var stream = video.srcObject;
            var tracks = stream.getTracks();
            for (var i = 0; i < tracks.length; i++) {
                var track = tracks[i];
                track.stop();
            }
            video.srcObject = null;
        }
        var start = function () {
            var video = document.getElementById('video'),
                vendorUrl = window.URL || window.webkitURL;
            if (navigator.mediaDevices.getUserMedia) {
                navigator.mediaDevices.getUserMedia({ video: true })
                    .then(function (stream) {
                        video.srcObject = stream;
                    }).catch(function (error) {
                        console.log("Something went wrong!");
                    });
            }
        }
        $(function () {
            start();
        });  
    </script>
	 </td></tr>   
</table>
</body>
</html>
