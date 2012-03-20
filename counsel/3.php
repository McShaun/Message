<?php 
$page = '3'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<!-- <div id="floater" style="height:50%; margin-bottom: -100px;"></div> -->
<div id="form" >
<?php include("nav.php"); ?>
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
        
        <div id="big_gray">
        <h1>"Counseling on Issues in Life with the Lord"<strong style="font-weight:100; font-size:18px;">Continued...</strong>
                </h1>
        	<p>
	Thirdly, I will talk about one more person from the countryside whose name is not in the Bible.
    		</p>
   		</div>
    <div id="big_gray" style="display: block;">
            <div class="embed-container">
            <iframe src="http://player.vimeo.com/video/37116329?title=0&amp;byline=0&amp;portrait=0" frameborder="0" webkitAllowFullScreen mozallowfullscreen allowFullScreen></iframe>
            </div>
	</div><!-- big gray -->
    <div id="big_gray">
                
                <img src="../inc/css/images/young_ssn.png" align="left" class="left" style="margin-left:-5px;" >
                		<p> 
						When I ran into the problem of life, I counseled with my father. My father gave me an answer in the following way. He said, "You have to work harder than me. The field is now old and aged, so if you fertilize it in an ordinary way, it won't be effective or able to do its job. Your older brothers and younger siblings have gone to the city, so you live here farming diligently. If you live farming diligently, you won't have a problem with making a living, and you will feel comfortable and good in your heart."
                        </p>
                        <div id="illustration" class="right"><img src="../inc/illus/dadandi.jpg" align="right"></div>
                        <div id="illustration" class="right"><img src="../inc/illus/momandi.png" align="right"></div>
                        <p>
                        When I counseled with my mother regarding the same issue, she gave me the following answer. She said, "If it's possible, escape this place and go to the city. Aren't you sick and tired of weeding the field? The field is old now, so only a lot of weeds grow out of it. We, two old people, will reduce the size of the field and make a living by farming. So go to the city. If you stay here, you will also end up like your father."
                        </p>
                        <p>
                        I asked the Lord regarding the same issue. Since the Lord knew my abilities and my situation well, He couldn't say much. I had to be educated for Him to tell me to go to the city, but since I was not educated, He couldn't tell me to do so. Also, if He were to tell someone who likes white rice to farm, they would like it, but He couldn't tell me to live on farming because I didn't have a rice paddy or field. He seemed to be only looking at me without being able to say anything.
                        </p>
                        <p>
                        The Lord didn't speak. So I said to Him first, "I will follow You, Lord." When I said that, the Lord said, "If you follow Me, I cannot give you money..." I said, "Still, I'd love to follow You!" Since it didn't make the Lord feel burdened, He permitted it. Following the Lord resolved my issue of life, which was the issue of my future path.
                        </p>
                        <p>
                        I knew that following the Lord was the answer to my issue in life, so I spoke to the Lord before He did. Other people followed the Lord because the Lord told them to, but I knew the answer and I said that I would follow Him before He told me to.
						</p>
        </div><!-- big gray -->
    </div><!-- content -->
<!-- End Video tabs ////////////////////////////////////////      -->
<!-- end of custom additions before post loop -->
<div id="big_gray">
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