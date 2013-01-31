 <?
  $title = "About Page"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");
?>


 <!-- css nedded for each page that needs to support landscape orientation-->
<link rel="stylesheet" media="all and (orientation:landscape)" href="css/portrait.css"> 


<!-- page specific script -->
 <script>
$(document).ready(function(){
$("#slideUpLinksContainer").trigger("click");
 });
</script>
<!-- page specific script /-->



<!--start typing html/body text here -->
<div id="container" class="commonBG">
           
 <div id="aboutTitle"></div> 
    <div id="aboutText">
<ul>    	
<li><span>Bold, new styling and sleek lines featuring Lexus' signature spindle grille</span></li>
<li><span>A powerful and aggressive stance emphasized by the new flared wheel arches</span></li>
<li><span>An entirely redesigned, driver-focused cockpit inspired by the iconic LFA</span></li>
<li><span>Available in both rear-wheel and all-wheel drive versions</span></li>
<li><span>Available June 2013</span></li>
</ul>

    </div>
<div id="aboutVideo"><a href="videoplaypreroll.php"><img src="img/videoReveal.jpg" height="145" border="0"></a></div>
 
<div id="toc"><a href="tac.php">TERMS &amp; CONDITONS</a><br />
</div> 
	


<?php include_once("inc/footer.php");?> 

