<?php 
$page = '1'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<!-- <div id="floater" style="height:50%; margin-bottom: -100px;"></div> -->
<!-- <div id="form" style="width: 768px;" > -->
<div id="form">

<?php include("../genes/../genes/nav.php"); ?>
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
            <h1>"You Take Heaven by Force through Truth and Love, and Faith and Action."
                </h1>
                    <p>Hallelujah!
I bid you the love of the everlasting God and the peace of Jesus. I bless that today, also, the fiery movement, inspiration, and working of the Holy Spirit will fill you abundantly as you listen to the Word.
                    </p>
                    <h3>I.<em> "Do Not Entertain the Thoughts of Evil or Unrighteousness At All And Do not Sin.</em></h3>
                    <img src="../inc/css/images/jesus.png" align="left" class="left" style="margin-left:-5px;" >
                    <p>
    This week, in today's message, the Lord will speak about 'how to not commit sins' using important parables, and the Lord will speak, in parables, about the method for achieving the physical and spiritual rapture and how to receive the Lord through complete unity with Him.
					</p>
                    <p>
In the scriptures, Jesus said, "The cause of a human being's good or evil actions is their 'heart'. He said, "You eventually speak with your lips the things that are stored in your heart and you take action with your body the things that are stored in your heart." And He said, "In order to not sin, do not even entertain unrighteous thoughts in your heart in the first place."                     
					</p>
                    <p>Jesus said, "Do not commit sins in the first place. If you have committed a sin, sincerely repent before God with words and make your deeds righteous." Repenting with your lips is feeling remorse. You have to first repent in words in this way and then repent in action by never repeating the sinful deed again. Only then is your repentance complete.                    
					</p>
                    <p>During the four thousand years of the Old Testament history and the during two thousand years of the New Testament history, whenever the believers or non-believers committed sins, God gave an opportunity of repentance to the individuals, families, nations, and regions that sinned. But when they disobeyed His Word and didn't repent, God judged them and repaid them according to their deeds. 
Because of 'sins,' people suffer in their body as well as in their spirit. Ultimately, all the sufferings in life are related to sin.                    
					</p>
                    <p>God executes His will mainly in two ways.
First, if a person commits a 'sin,' He makes them pay the price for the sin in their everyday life, through their minds, hearts, and deeds starting on the day they sin. As for people who still don't repent, they receive judgment on the set day, the day of God's judgment, because their sin has reached its measure.</p>
                    <p>Second, if a person does 'righteous deeds,' they receive blessings because of that righteousness from that point on. Then joy comes to them through their mind, heart, and thoughts. They prosper and thrive physically as well. Then when the set day comes, God blesses them according to what they have done.</p>
                    <p>Today, Jesus is talking about 'sin and repentance.' He told me about how to not commit sins so that the difficult procedure of repentance won't even be needed at all. If you don't commit sin, you won't have to pay the price for sin and you won't even have to struggle to repent at all. (Let's listen to the Word while watching the video.)
				<!-- current bookmark -->
                    
            </div><!-- big gray -->
            
    		<div id="big_gray" style="display: block;">
                <div class="embed-container">
                <iframe src="http://player.vimeo.com/video/38697743?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
                </div>
            </div name="big_gray">             
        <div id="big_gray" class="footer">
        	<blockquote>
            	<p>
                This is a compilation of excerpts, keypoints, and sermon resource videos from translations of the sermons given on Sunday, March 11, 2012 and Wednesday March 14, 2012 in Providence Churches all over the world. 
                </p>
            </blockquote>
        </div name="big_gray"> 
           
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