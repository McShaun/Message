<?php 
$page = '5'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<div class="container">
<div id="form" class="one">
<?php include("../genes/nav.php"); ?>
<form action="6.php" method="post" id="commentForm">
<?php
  foreach($_POST as $key=>$value){
    if ($key!="submit"){
      $value=htmlentities(stripslashes(strip_tags($value)));
      echo "\t<input type=\"hidden\" name=\"$key\" value=\"$value\">\n";
    }
  }
?>
<div id="bigroundforms_form">
	<div id="content">		
    <div class="clear"></div>                     
        <div id="big_gray">
               <h1>"You Take Heaven by Force through Truth and Love, and Faith and Action."<strong style="font-weight:100; font-size:18px;">Continued...</strong></h1>
                <!-- <h3>The Lord's Words</h3> -->
                <h3>Entrust Yourself to the Lord Completely.</h3>
                		<p>
                        So far, I have talked about the method to not sin with the theme, "Do not entertain the thoughts of evil or unrighteousness at all and do not sin."
 and I have given you a preparatory message while relaying the Lord's words.
What is the second theme of today's message? It is: "Leave it up to the Lord completely." Now before you hear the Lord's message, let me prepare you by talking about the second theme on how not to sin. (Let's watch the video.)
						</p>
                        <!-- <center><div id="illustration" ><img src="../inc/illus/career_path.png"></div></center> -->
                       
        </div><!-- big gray -->
	
    <div id="big_gray" style="display: block;">
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/38810014?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
	</div name="big gray">
    <div id="big_gray" style="display: block;">
    <p>
    <img src="../inc/css/images/young_ssn.png" class="left">I myself came to live a successful life of Providence because I entrusted my heart and body to the Lord. I gave all my love, heart, and body to the Lord. This is success at the highest level. You need to do things according to the method of success to be successful and to live an easy life. </p>
    <p>
The Lord said, <strong>"If you entrust the money you have to your lover, you will not be able to do the things people do with money, so you will not cause a problem because of money. Likewise, entrust your thoughts, heart, and mind to Me. Then I will not use them in the wrong place but will use them only according to My Will." </strong>
    </p>
    </div>
    <div id="big_gray" style="display: block;">
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/38780051?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
    </div name="big_gray">
    <div id="big_gray" style="display: block;">
            <p>
            We must leave everything to the Lord. Do you believe? I've left everything to the Lord today also. Thus we are full of Word that is profound and as sweet as honey. 
            </p>
            <p>
            The Lord spoke further. He said, <strong>"If you are My brides, leave your hearts to Me. Leave your thoughts to Me. Entrust your entire head to Me completely. Leave your body to Me. Only then, will I, Jesus, make you as I desire, so you will live for eternal things."</strong></p>
            <p>
    <img src="../inc/css/images/young_ssn.png" class="left">I myself came to live a successful life of Providence because I entrusted my heart and body to the Lord. I gave all my love, heart, and body to the Lord. This is success at the highest level. You need to do things according to the method of success to be successful and to live an easy life. </p>
    <p>
The Lord said, <strong>"If you entrust the money you have to your lover, you will not be able to do the things people do with money, so you will not cause a problem because of money. Likewise, entrust your thoughts, heart, and mind to Me. Then I will not use them in the wrong place but will use them only according to My Will." </strong>
    </p>
	</div name="big gray">
    </div><!-- content -->
<!-- End Video tabs ////////////////////////////////////////      -->
<!-- end of custom additions before post loop -->
<div id="big_gray" style="float:right;">
    <div id="next">
        <h3>Go to the next page to keep reading!</h3>
    </div>
        <button id="form-submit" class="next" name="Lesson" value="Finished" type="submit" style="float:right;"></button>
<div>

</div><!-- end of bigroundforms_form -->
</form>
</div><!-- end of form div -->
</div name="one">
<?php include("../inc/google-analytics.php") ; ?>
</body></html>