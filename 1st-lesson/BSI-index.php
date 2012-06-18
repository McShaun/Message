<?php 
$page = 'Name'; 
?>
<?php include("inc/header.php"); ?>
<body>
<!--
<div id="floater" style="height:50%; margin-bottom: -100px;"></div>
-->
<div id="content" style="height: 240px; clear:both;">
<div id="form" style="max-width:500px; background-color:#0062B0; padding:10px;">
<div id="bigroundforms_form" >

<form action="lesson1.php" method="post" id="commentForm">

<div id="left-or-top">
  <center>
	<img src="form_avatar.png" style="margin-left:-5px;">
    </center>
</div>
<div id="right-or-bottom">
  <center>
    <h2><center>Hi, I'm Min. Shaun. <br />What's your name?</center></h2>
    <br />
    <div style="display:inline-block;">
    <input type="text" placeholder="Name" name="name" style="float:left;" class="required" title="Just a name - What could it hurt?">
    
    <!-- <input type="submit" value="Send"> -->
    <button id="form-submit" class="go" name="Lesson" value="Predestination" type="submit" style="float:right;"></button>
    </div>
    </center>
</div name="right-or-bottom">
</form>
</div><!-- bigroundforms_form -->
</div>
</div name="content"> 
<?php include("inc/google-analytics.php") ; ?>
</body>
</html>

