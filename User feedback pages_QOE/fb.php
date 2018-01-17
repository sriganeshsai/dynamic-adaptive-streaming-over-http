<?php


// Create connection
$conn = mysqli_connect("localhost","root","","qoe");
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$q1 = $_POST['1'];
$q2 = $_POST['2'];
$q3 = $_POST['3'];
$q4 = $_POST['4'];
$q51 = $_POST['51'];
$q5a = $_POST['5a'];
$q52 = $_POST['52'];
$q5b = $_POST['5b'];
$q53 = $_POST['53'];
$q5c = $_POST['5c'];
$q6 = $_POST['6'];
$esno = $_POST['esno'];
#echo "$esno, <br>$q1,<br> $q2,<br> $q3,<br> $q4,<br> $q51,<br> $q5a,<br> $q52,<br> $q5b,<br> $q53,<br> $q5c,<br> $q6<br>";


$sql = "INSERT INTO fb (esno, video_contents, video_likeness, video_quality,
video_rating, jerkiness_y_n, jerkiness_rating, freezes_y_n, freezes_rating, InitialDelay_y_n, InitialDelay_rating, service)
VALUES ('$esno','$q1','$q2','$q3','$q4','$q51','$q5a','$q52','$q5b','$q53','$q5c','$q6')";
mysqli_query($conn, $sql);

mysqli_close($conn);
?>



<html>

<head>
<title>QoE Survey</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>



<style type="text/css">
html, 
body {
height: 100%;
}

body {
background-image: url(blu.jpg);
background-repeat: no-repeat;
background-size: 100% 100%;
}
.button {
    color: #DC1752;
}
</style>

<body>
<div style="color:#44475F;padding:20px; position:top; top: 40%;">
<marquee behavior="scroll" direction="left"; scrollamount="8";> <font size=6> <b>
Thanks for your participation in Quality of Experience Survey
</font>
</b> 
  <img src="smiley3.png";height=40px; width=40px;></img></marquee>
</div>

<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>
<form action="index.php" method="post"><div align="middle"><br><b>To continue the survey:</b>&emsp;&emsp;
<b><input type="submit" value="continue..." style="background-color:#FCFF00;" class="button"></b></div>
</form>

</body>
</html>