<?php
$esno = $_POST['esno'];
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
background-image: url(ages.jpg);
background-repeat: no-repeat;
background-size: 150% 250%;
}

.button {
    color: #ff0000;
}
</style>

<body>


<div class="w3-content w3-section" align="middle" >

<label><b> <font size="9" color="white"  face="Comic Sans MS"> Quality of Experience Experiments </b></label> </font> &emsp;
</div>





<form action="fb.php" method="post" >

<div style="margin-left:35px; margin-right:35px;">
<br><br>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

<label><b>1. Did you like the contents of the video?</b></label> &emsp;
<select name="1"  > 
	<option value="" selected="selected" disabled="true">--</option>
    	<option value="yes">Yes</option> 
    	<option value="no">No</option> 
</select><br><br>

<label><b>2. Please indicate to which extent you liked or disliked the video content. (1 - don't like at all [to] 5 - like very much)</b></label> &emsp;
<br><br>

<div style="margin-left:35px;">

<fieldset   style="width:350px">
       <input type="radio" name="2" id="2.1" value="1" required /><label for="2.1">1 </label>&emsp;&emsp;
       <input type="radio" name="2" id="2.2" value="2" /><label for="2.2">2 </label>&emsp;&emsp;
       <input type="radio" name="2" id="2.3" value="3" /><label for="2.3">3 </label>&emsp;&emsp;
       <input type="radio" name="2" id="2.4" value="4" /><label for="2.4">4 </label>&emsp;&emsp;
       <input type="radio" name="2" id="2.5" value="5" /><label for="2.5">5 </label>&emsp;&emsp;
</fieldset>

</div>
<br>

<label><b>3. Did you like the (technical) video quality? </b></label> &emsp;
<select name="3"  > 
	<option value="" selected="selected" disabled="true">--</option>
    	<option value="yes">Yes</option>
		<option value="no">No</option>
		<option value="dont_know">Don't know or Don't care</option>	
</select><br><br>

<label><b>4. Please rate the video quality.(1-bad [to] 5-excellent)</b></label> &emsp; <br> <br>
<div class="range-slider">
  &emsp;&emsp;<input class="range-slider__range" name="4" type="range" value="1" min="1" max="5" step="0.1" required>
  <span class="range-slider__value">1</span>
</div>
<br>
<label><b>5. Did you see the following disturbance? And to which degree did you feel disturbed? Please mark you option 0 to 5 (0-not at all disturbed [to] 5-extremely disturbed)</b></label> &emsp;
<br>
<label><b><br>&emsp; a. Jerkiness</b></label> &emsp;
<select name="51"  > 
	<option value="" selected="selected" disabled="true">--</option>
    	<option value="yes">Yes</option> 
    	<option value="no">No</option> 
</select><br><br>
<div class="range-slider" >
  &emsp;&emsp;<input class="range-slider__range" name="5a" type="range" value="0" min="0" max="5" step="0.1" required>
  <span class="range-slider__value">0</span>
</div>
<label><b><br>&emsp; b. Freezes</b></label>  &emsp;
<select name="52"  > 
	<option value="" selected="selected" disabled="true">--</option>
    	<option value="yes">Yes</option> 
    	<option value="no">No</option> 
</select><br><br>
<div class="range-slider" >
  &emsp;&emsp;<input class="range-slider__range" name="5b" type="range" value="0" min="0" max="5" step="0.1" required>
  <span class="range-slider__value">0</span>
</div>
<label><b><br>&emsp; c. Initial Delay</b></label> &emsp;
<select name="53"  > 
	<option value="" selected="selected" disabled="true">--</option>
    	<option value="yes">Yes</option> 
    	<option value="no">No</option> 
</select><br><br>
<div class="range-slider" >
  &emsp;&emsp;<input class="range-slider__range" name="5c" type="range" value="0" min="0" max="5" step="0.1" required>
  <span class="range-slider__value">0</span>
</div>

<br>

<label><b>6. Will you use this service again? </b></label> &emsp;
<select name="6"  > 
	<option value="" selected="selected" disabled="true">--</option>
    	<option value="Definitely will">Definitely will</option>
		<option value="Probably will">Probably will</option>
		<option value="Probably will not">Probably will not</option>
		<option value="Definitely will not">Definitely will not</option> 	
</select><br><br>


<script>

var rangeSlider = function(){
  var slider = $('.range-slider'),
      range = $('.range-slider__range'),
      value = $('.range-slider__value');
    
  slider.each(function(){

    value.each(function(){
      var value = $(this).prev().attr('value');
      $(this).html(value);
    });

    range.on('input', function(){
      $(this).next(value).html(this.value);
    });
  });
};

rangeSlider();
</script>


<input type="hidden" value="<?php echo "$esno";?>" name="esno"/>

</div>
<div align="middle" >	
<input type="submit" value="Submit" style="background-color:#FFFFFF;" class="button">
</div>



</form><br><br>






<marquee behavior="scroll" direction="left"; scrollamount="8";> <font size=6> <b>
Thanks for your participation in Quality of Experience Survey
</font>
</b> 
  <img src="smiley3.png";height=40px; width=40px;></img></marquee>
</div> 
</body>
</html>

<?php

?>