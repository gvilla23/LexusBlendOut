 <?
  $title = "Video Line up"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");


// page specific functions

// page specific functions
if ($_GET["jodi"])
  {
  $pid = $_GET["jodi"];
  }
  elseif($_GET["amber"])
  {
  $pid = $_GET["amber"];
  }
  else
  {

  	$pid = $_GET["rina"];
  	$npid = "jodi";
  }



?>





 <!-- css nedded for each page that needs to support landscape orientation-->
<link rel="stylesheet" media="all and (orientation:landscape)" href="css/portrait.css"> 
<!-- bottom nav popup and popout for videoPlay page(s) -->
<script src="js/lineUpSlider.js"></script> 



 <!--start typing html/body text here -->
 
<div id="container" class="video<?php print ("$pid") ?>">
           
<div id="lineupTitle"></div> 
<div id="lineuptitle<?php print ("$pid") ?>"></div> 
<div id="playIcon"><a href="videoplay<?php print ("$pid") ?>.php?<?php print ("$pid") ?>=<?php print ("$pid") ?>" class="blocklink"></a></div> 


<?php include_once("inc/footer.php");?> 