<html>

<head>

<title>Form</title>



<link href='http://fonts.googleapis.com/css?family=Gloria+Hallelujah' rel='stylesheet' type='text/css'>

<link media="all" type="text/css" href="../msg/inc/css/forms.css" rel="stylesheet">





</head>

<body>

 

<div id="form" style="width:500px; display: inline-block;" >



<form action="../msg/form3.php" method="post" id="bigroundforms_form" style="float:none;" >



<?php

  foreach($_POST as $key=>$value){

    if ($key!="submit"){

      $value=htmlentities(stripslashes(strip_tags($value)));

      echo "\t<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";

    }

  }

?>



<h2>Which kind of lessons do you prefer?</h2>

<br style="clear:both;" />



<div style="float:left; width:240px; padding-left:20px;" >

	<a href="../msg/form2_whichlesson.php"><h3>Interactive Video Lesson?</h3>

    <br />

    <img src="../msg/tele.png" border="0" style="width:193; height:159; border:0; padding:0;"></a>

</div>







<div style="float:right; width:240px;">

	<h3>or Join a Videoconference Lesson?</h3>

    <input type="image" name="subscribe" src="../msg/tele.png" style="width:193; height:159; border:0; padding:0;"> 

</form>

</div>

</div>



<!-- <input type="submit" value="Send"> -->

<!-- <button id="form-submit" class="btn" name="subscribe" value="Send me an Email" type="submit"></button> -->







</body>

</html>

