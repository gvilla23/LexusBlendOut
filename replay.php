 <?
  $title = "Replay Page"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");
?>

 <!-- css nedded for each page that needs to support landscape orientation-->
<link rel="stylesheet" media="all and (orientation:landscape)" href="css/portrait.css"> 

 <!--start typing html/body text here -->

<div id="container" class="commonBG">
	<div id="replayArea">
		<div id="replayRina"><a href="videoplayrina.php?replay=yes"><img src="img/replayRina.jpg" alt="replayRina" width="106" height="345"  border="0"></a></div>
		<div id="replayJodi"><a href="videoplayjodi.php?replay=yes"><img src="img/replayJodi.jpg" alt="replayJodi" width="110" height="345"></a></div>
		<div id="replayAmber"><a href="videoplayamber23.php?replay=yes"><img src="img/replayAmber.jpg" alt="replayAmber" width="104" height="345"></a></div>
	</div>

<div class="exploreBanner"><a  href="http://www.lexus.com/IS-2014"><img src="img/exploreISbanner.jpg" alt="exploreISbanner" width="320" height="55"></a></div>

 
<?php include_once("inc/footer.php");?> 

