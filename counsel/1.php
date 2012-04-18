<?php 
$page = '1'; 
?>
<?php include("../inc/header.php"); ?>
<body>

	<!-- Primary Page Layout
	================================================== -->

	<!-- Delete everything in this .container and get started on your own site! -->

	<div class="container">
<div id="form" class="one">
<?php include("../counsel/nav.php"); ?>
<form action="2.php" method="post" id="commentForm">
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
            <h1>"Counseling on Issues in Life with the Lord"
                    </h1>
                    <img src="../inc/css/images/jesus.png" align="left" class="left" style="margin-left:-5px;" >
                    <p>
                    Hallelujah! I bid you the love of the everlasting God and the peace of Jesus. I bless that today, also, the fiery movement, inspiration, and working of the Holy Spirit will fill you abundantly as you listen to the Word.
                    </p>
                    <p>Today the Lord will give a message that answers the various different issues that concern people in the course of life. When you are taking a test, if you cannot figure out an answer, you get a headache and you feel heavy in your heart. In this way, when human beings run into problems in the course of their lives, they seek answers. The problem gets resolved only when you find the answer. If you cannot find the answer, your head hurts, you feel burdened by worries, concerns, and anxieties, and your heart becomes sick.
                    </p>
                    <p>
    Also, when a trial arises while leading a life of faith, you seek answers. Until you find the answer, you are worried, anxious, and nervous. You have to find the answer to resolve the problem.
                    </p>
                    <img src="../inc/css/images/ssn.png" align="left" class="left" style="margin-left:-5px;" >
                    <p>Today, too, together with the Lord, I will give a message that provides the answers to those who have physical or spiritual problems in life. I will help you understand today's message by briefly telling you, the situations of three people among the numerous people who prospered eternally, compared to when they had lived in the world, because they took action exactly according to the answers the Lord gave them when they counseled Him about their issues in life.
                    </p>
                    <p>
                    The first person is 'Peter.'
                    </p>
                    
            </div><!-- big gray -->
            
    		<div id="big_gray" style="display: block;">
                <div class="embed-container">
                <iframe src="http://player.vimeo.com/video/37116815?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
                <br>

            <p>
            All of you have to do the same. There are many people who already live in this way according to the answer that the Lord gave them.        
            </p>
            </div name="big_gray">
            <div id="big_gray" class="footer">
            <blockquote>
            	<p>
                This is a compilation of excerpts, keypoints, and sermon resource videos from translations of the sermons given on Sunday, February 19, 2012 and Wednesday February 22, 2012 in Providence Churches all over the world. 
	</div><!-- big gray -->
        </div><!-- content -->
    <div id="big_gray" style="display:inline-block;" >
        <div id="next">
            <h3>Go to the next page to keep reading!</h3>
        </div>
            <button id="form-submit" class="next" name="Lesson" value="Finished" type="submit" style="float:right;"></button>
    <div>
    
    </div><!-- end of bigroundforms_form -->
</form>
</div><!-- end of form div -->
<?php include("../inc/google-analytics.php") ; ?>
</body></html>