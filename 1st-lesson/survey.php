<?php 
$page = '2'; 
?>
<?php include("../inc/header.php"); ?>
<body>
<!-- <div id="floater" style="height:50%; margin-bottom: -100px;"></div> -->
<div id="form" >
<?php include("nav.php"); ?>
<form action="http://www.biblestudyinteractive.com/wp-content/themes/press/msg/msg3.php" method="post" id="commentForm">
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
                <img src="../inc/css/images/young_ssn.png" align="left" style="margin-left:-5px;" height="80" >
                <h2><label>In the debate between Science and Religion which side would you most likely take?</label></h2>
                </div>
                <div id="big_gray">
                <ul class="choices">
                	<li><label><input type="radio" name="Is bible literal" value="Bible is literally true word for word." id="group_1_1" class="required" validate="required:true" title="Please choose before moving on">
						Bible is literally true word for word.
                        </label>
                    </li> 
					<li><label><input type="radio" name="Is bible literal" value="The differences between science and religion cannot be resolved." class="required" validate="required:true" title="Please choose before moving on">
						The differences between science and religion cannot be resolved.
                        </label>
                    </li>
                    <li><label><input type="radio" name="Is bible literal" value="Science has proven that the bible is not a reliable source of truth." class="required" validate="required:true" title="Please choose before moving on">
						Science has proven that the bible is not a reliable source of truth.
                        </label>
                    </li>
                    <li><label><input type="radio" name="Is bible literal" value="There only seems to be a contradiction due to our lack of understanding." class="required" validate="required:true" title="Please choose before moving on">
						There only seems to be a contradiction due to our lack of understanding.
                        </label>
                    </li>
                    <li><label><input type="radio" name="Is bible literal" value="I'm not sure." class="required" validate="required:true" title="Please choose before moving on">
						I'm not sure.
                        </label>
                    </li>
                </ul>
		 <!-- </blockquote> -->
        </div><!-- big gray -->
	</div><!-- content -->
<!-- Video Tabs //////////////////////////////////////////////////////////////////////   -->
	<!--<div id="big_gray">-->
		<div class="tab_container"> 
<!--
	This is the tab[s] for the video page or "live" page
	it also includes all tools together with the jQuery library
--> 
<!--<script type="text/javascript" src="www.biblestudyinteractive.com/wp-content/themes/press//live_jquery102min.js"></script>-->
<!-- <script src="http://cdn.jquerytools.org/1.0.2/jquery.tools.min.js"></script> -->
<!-- tab styling --> 
<link rel="stylesheet" type="text/css" href="http://www.biblestudyinteractive.com/wp-content/themes/press/live_tabs.css" /> 

<!-- please place tabs/panes here -->

<!-- the tabs --> 

<!-- end paste tabs -->

<!-- This JavaScript snippet activates those tabs --> 
<script> 
// perform JavaScript after the document is scriptable.
jQuery_tabs(function() {
	// setup ul.tabs to work as tabs for each div directly under div.panes
	jQuery_tabs("ul.tabs").tabs("div.panes > div");
});
</script> 
		<!--</div> End Tabs --> 
	</div><!-- big gray -->
<!-- End Video tabs ////////////////////////////////////////      -->
<!-- end of custom additions before post loop -->
<div id="big_gray">
    <div id="next">
        <h3>Okay I'm done with this part. What's Next?</h3>
    </div>
        <button id="form-submit" class="next" name="Lesson" value="Finished" type="submit" style="float:right;"></button>
<div>

</div><!-- end of bigroundforms_form -->
</form>
<?php include("../inc/google-analytics.php") ; ?>
</div><!-- end of form div -->
</body></html>