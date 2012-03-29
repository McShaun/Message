<?php 
$page = '4'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<div class="container">
<div id="form" class="one">
<?php include("../genes/nav.php"); ?>
<form action="5.php" method="post" id="commentForm">
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
               <h1>"You Take Heaven by Force through Truth and Love, and Faith and Action."<strong style="font-weight:100; font-size:18px;">Continued...</strong></h1>
                <!-- <h3>The Lord's Words</h3> -->
                <img src="../inc/css/images/ssn.png" align="left" class="left" style="margin-left:-5px;" >
                		<p>
                        To prevent evil beforehand, you must not have evil thoughts in your brain at all. If you do not open a gate of the dam in the first place, there is no reason for the water to flow out. Likewise, I'm telling you that if a sinful thought comes to mind, you must completely cut off that thought. If you do not cut off a sinful thought when it comes to mind, since the evil thought is stronger than the good thought in most cases, the evil will powerfully dash toward the destination, your body, to penetrate it and generate its final product. The structure of the brain and the body are like this.
</p><p>
A car starts moving if you turn on the engine and step on the accelerator. If you turn on the engine, the body of the car just gets pulled along by the engine. Thus, if you do not want the car to start moving, you can choose not to turn on the engine at all. 'The engine' is the 'mind and thoughts.' If a person completely empties the sinful thoughts from their brain, discerns what sin is, and does not entertain sinful thoughts, then they will not commit sins and they will defeat all satans and evildoers. The best way to avoid sinning is this: praying and cutting off evil, unrighteousness, and sin with powerful thoughts of good and not thinking about them at all by praying. 
</p><p>
If you don't want to commit sexual sins, just don't think about a counterpart at all. Then you won't commit sexual sins throughout your entire life. If you make Jesus the object of your love completely and become the Lord's beloved, you become a person with merit in love and you will inherit Heaven, the kingdom of eternal love. 
</p><p>
Gender is determined by the man's Y chromosome and X chromosome, depending on which chromosome combines with the woman's egg. This is why women are called 'the fruit of the knowledge of good and evil.' The fruit of the knowledge of good and evil is a being that can go towards either good or evil. We, human beings, are in the position of the fruit of the knowledge of good and evil, which can move toward both good and evil. If good enters strongly, good forms a fruit, and if evil enters strongly, evil forms a fruit. Just as men and women are born in equal numbers through the combination of a sperm and an egg, good and evil are equal. However, if you pray and overcome evil with strong thoughts of good, then only good will exist. 
</p><p>
All of you have listened well, right? It is easy to understand it when I receive the Word in the spiritual world, but when I come out to the physical world and try to put it in words, there aren't appropriate words for it, and it's very difficult to make it easy to understand.
(* Let's watch the video.)
						</p>
                       <!-- <center><div id="illustration" ><img src="../inc/illus/career_path.png"></div></center> -->
                       
        </div><!-- big gray -->
	
    <div id="big_gray" class="collumn" style="display: block;">
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/38808956?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
	</div name="big gray">
    </div><!-- content -->
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