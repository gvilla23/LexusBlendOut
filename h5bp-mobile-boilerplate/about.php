 <?
  $title = "About Page"; // this is for <title>
  //$addCSS = ""; //custom CSS for this page only
  include_once("inc/header.php");
?>


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
<li>Bold, new styling and sleek lines featuring Lexus' signature spindle grille</li>
<li>A powerful and aggressive stance emphasized by the new flared wheel arches</li>
<li>An entirely redesigned, driver-focused cockpit inspired by the iconic LFA</li>
<li>Available in both rear-wheel and all-wheel drive versions</li>
<li>Available June 2013</li>
</ul>

    </div>
<div id="aboutVideo"><a  href="videoPlaypreRoll.php"><img src="img/videoReveal.jpg" alt="videoReveal" width="303" height="181" border="0"></a></div>
 
<div id="toc"><a href="tac.php">TERMS &amp; CONDITONS</a><br />
</div> 
	


<?php include_once("inc/footer.php");?> 

