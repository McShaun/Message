<?php 
$page = '3'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<div class="container">
<div id="form" class="one">
<?php include("../genes/nav.php"); ?>
<form action="4.php" method="post" id="commentForm">
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
        
        <div id="big_gray" class="collumn">
        <h1>"You Take Heaven by Force through Truth and Love, and Faith and Action."<strong style="font-weight:100; font-size:18px;">Continued...</strong>
                </h1>
                
                <img src="../inc/css/images/ssn.png" align="left" class="left" style="margin-left:-5px;" >
                		<p> 
						Secondly, the Lord used another parable to tell us about how to avoid sinning. You need to listen to the parable attentively in order for you to understand the main message well when you hear it.

He will use the parable of the genes of men and women, so please listen carefully. If you hear it incorrectly, you will understand [the parable] to be about <a href="#1">blue jeans [1]</a> and then when you preach it, you will say that it is a 'parable of blue jeans,' so listen well. It is a 'parable of genes.' All of you have learned [about this] from the chart of the Creation lesson. So in order to speak about it appropriately, the Lord explains it using the parable of genes. <strong>You have to realize the parables thoroughly. It's because the parables are the answer.</strong> The content of the Word that Jesus was trying to make me realize was difficult [to understand], so the Lord used this parable of genes to help me understand it in detail. The Lord said, <strong>"This parable is the most appropriate. What I am trying to say is like this."</strong>
						</p>
						<p>Now, as you listen to Jesus' second parable, I hope that you will realize how you can avoid sinning. (We will listen to the Word while watching the video closely.) 
                        </p>
                        <!-- <div id="illustration" class="right"><img src="../inc/illus/fatherandi.png" align="right"></div> -->
                       
        </div name="big_gray">
        <div id="big_gray" class="collumn" style="display: block;">
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/38780053?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
	</div><!-- big gray -->
    <div id="big_gray" class="collumn" style="display: block;">
    		<p>
            Thoughts have to receive the power of good in order for good to penetrate and enter the physical nature and perform good deeds. It is very difficult to penetrate the strong cells of the body. Only the strong ones can penetrate and enter the physical nature. Therefore, you need the power of strong thoughts so that goodness will penetrate your physical nature and so that you will do good deeds. The good heart has to be strong. If the good heart is weak, the evil heart will become stronger and your mentality and thoughts will be inclined toward evil. As a result, evil will combine with your body, and you will end up doing evil deeds. Therefore, you have to pray, seek Jesus, and discuss with Him. (Let's watch the video.)
            </p>
    </div name="big_gray">
        <div id="big_gray" class="collumn" style="display: block;">
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/38780291?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
    </div name="big_gray">
    </div><!-- content -->
<!-- End Video tabs ////////////////////////////////////////      -->
<!-- end of custom additions before post loop -->
<div id="big_gray" class="footer">
    					<blockquote><p>Author: <br>
										<a name="1"><strong>Translator's note:</strong></a> The Korean word for gene (Yu-jeon-ja, 유전자) sounds similar to the word for kettle (Ju-jeon-ja, 주전자) which is used in the original Korean. The term "Blue Jeans" is used in place of "kettle" in the English translation because it sounds similar to "Genes."
                        </blockquote>
    </div name="big_gray">
	<div id="big_gray" class="collumn">
    <div id="next">
        <h3>Go to the next page to keep reading!</h3>
    </div>
        <button id="form-submit" class="next" name="Lesson" value="Finished" type="submit" style="float:right;"></button>
	<div>

	

</div><!-- end of bigroundforms_form -->
</form>
</div name="one">
</div><!-- end of form div -->
<?php include("../inc/google-analytics.php") ; ?>
</body></html>