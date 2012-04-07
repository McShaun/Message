<?php 
$page = '4'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<!-- <div id="floater" style="height:50%; margin-bottom: -100px;"></div> -->
<div id="form">
<?php include("nav.php"); ?>
<form action="form2.php" method="post" id="commentForm">
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
                <h1><center>"Counseling on Issues in Life with the Lord"<strong style="font-weight:100; font-size:18px;">Continued...</center></strong>
                </h1>
                <!-- <h3>The Lord's Words</h3> -->
                <img src="../inc/css/images/jesus2.png" align="left" class="left" style="margin-left:-5px;" >
                		<p>
                        The Lord tells all of you: "The things I have said until now are the answers to your issues in life as well."
Just as the field worker finds a treasure while plowing the field and takes it as his, all of you who have come to Providence have found the path of life, and while following the Lord, you received the history of the Physical Rapture on earth, the history of the greatest hope on earth, which has been awaited for two thousand years. You have come to live receiving the Lord as the Bridegroom. In addition, with the time of the Spiritual Rapture ahead of you, you have become people who are preparing to receive the Lord who will return when the archangel blows the trumpet. 
						</p>
                        <p>
                        All of you have found the eternal treasure of the time period from the field of the world. The eternal treasure, in a 'physical' sense, is the one whom God sent to this time period, and in a 'spiritual' sense, it is Jesus who came to rapture our bodies and spirits. If people cannot find the central figure that God sent in their time period and if they cannot follow him, they are people who cannot properly follow God and the Lord and thus have not properly resolved their issue in life. (Amen!)
						</p>
                        <p>
                        People who have met the one whom God and Jesus sent in their time period and are following him are people who have resolved the biggest issue in life. This is the solution for the eternal problem. This is how your eternal problem is resolved: through the testimony of the one whom God and the Lord sent for that time period, you come to know correctly about the Almighty God and the Savior Jesus and you come to live, properly receiving the history of the Physical Rapture and the history of the Spiritual Rapture that God and the Lord carry out in your time period. 
						</p>
                        <p>
                        The rest of the issues in life are trivial problems. Those small issues will all be resolved if you take action within the Lord. Do you believe? (Amen!) The remaining issues in life are nothing more than a situation where you have gone to collect herbs but realize you don't have a hoe. You can pull out the herbs by hand or pick up a wooden stick and dig them out with it. Again, those remaining issues in life are nothing more than a situation where you have gone home but realize you left your wallet at your friend's place. They are truly insignificant problems, like going into the bathroom and doing your business but finding that there is no toilet paper. 
						</p>
                        <p>
                        The biggest issue in life is the issue of the spiritual issue, which is an eternal issue. If the spiritual issue is not resolved, then even if the body lives, you are only living a vain life. If only the spiritual issue is resolved, the rest of the issues in life are only small problems like simply pruning the branches. As for the branches, you can just push them aside vigorously with your hands and you can move forward. Your big spiritual issue has been resolved. So I hope that you will not make those small, trivial things into issues. If you don't even have small problems while living your life, you will have nothing to do, so your hands and feet will be idle and your heart and thoughts will become rusty and moldy. Do you believe? (Amen!)
						</p>
                        <p>
                        If I  resolve only the physical problems for people who ask about their physical problems in life, they will only become more physical. The spiritual problem will not be resolved, thus they cannot be saved. When a person has a problem that pertains to the body, their spiritual problem needs to be resolved, fundamentally. Then their body and spirit will come out of the domain of death, they will become free, and their eternal issue will be resolved. You, too, should do this for people when you deal with them, then they will find the path of life. 
						</p>
                        <center><div id="illustration" ><img src="../inc/illus/career_path.png"></div></center>
                        <p>
                        Cutting the cord of death is the solution to their problem. Leading them to the path of life is resolving their problems. Living a life united with Me, Jesus, is the answer to life. This year is a year of management. You need to always listen to the Word deeply and find an answer, big or small, to the problems in your life.
						</p>
                        <p>
                        Because you have been following Me, no matter what kind of tribulation, suffering, or injustice you faced, you have been resolving; the issue of the spirit' which is the greatest issue to human beings. Because you have been following Me, Jesus, I am giving you the Word of the times that solve your problems in life even now, am I not? You must follow Me, then all of the problems in your life will be resolved, both good and bad, and you will be blessed both in the body and in the spirit. 
						</p>
                        <p>
                         Every one of you who have an issue in life, follow Me. No matter what kind of a problem you have in life, the answer is; I, Jesus. Do not center on anything before you, behind you, on your left, nor on your right. Center only on Me, Jesus. And live putting more weight on Me, Jesus. When you carry firewood that has been collected also, if the weight of the firewood is placed behind you and leans backwards, you cannot go forward. If the weight is placed at the front, you will fall forward. If the weight is put on one side, the bundle of firewood will fall sideways, so it will keep you from going forward. You must place the weight on the center as you carry it, then the load is light and you can walk forward properly.
						</p>
                        <p>
                         I am the Lord Jesus who manages you and has given you the answer to life, in order to resolve your issues in life. Everyone, receive strength and run. Even though I am leaving for a brief while to prepare for My Advent, I will always be with you and I will be watching you. Shalom!
                         </p>
                         
                         <blockquote><p>Author: <br>
										<strong>Pastor Joshua Jeong</strong><br>
												Founder of Providence Church</p>

                         <p>Translation Provided by <strong>IETD</strong> (International English Translation Department)</p>
                         
                         <p>Videos produced by <strong>CTN</strong> (Christian Television Network)</p>
						 
                         <p>Site designed by <strong>American Providence Internet Team</strong></p>
						</blockquote>
						
        </div><!-- big gray -->
	
    <div id="big_gray" style="display: block;">
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/38568174?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
	</div><!-- big gray -->
    </div><!-- content -->
<!-- End Video tabs ////////////////////////////////////////      -->
<!-- end of custom additions before post loop -->
<div id="big_gray">
    <div id="next">
        <h3>Go to the next page to finish!</h3>
    </div>
        <button id="form-submit" class="done" name="Lesson" value="Finished" type="submit" style="float:right;"></button>
<div>

</div><!-- end of bigroundforms_form -->
</form>
</div><!-- end of form div -->
<?php include("../inc/google-analytics.php") ; ?>
</body></html>